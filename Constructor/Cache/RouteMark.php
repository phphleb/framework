<?php

/*declare(strict_types=1);*/

namespace Hleb\Constructor\Cache;

use Hleb\Base\RollbackInterface;
use Hleb\Constructor\Data\SystemSettings;
use Hleb\CoreProcessException;
use Hleb\Main\Insert\BaseAsyncSingleton;

/**
 * With asynchronous requests, it may turn out that the sequence
 * loading cache files does not match the original addition to the cache.
 * This problem is solved by the difference of the file postfix depending on the changes.
 *
 * При асинхронных запросах может получиться так, что последовательность
 * загрузки файлов кеша не соответствует исходному добавлению в кеш.
 * Проблема эта решена разностью файлового постфикса в зависимости от изменений.
 *
 * @internal
 */
final class RouteMark extends BaseAsyncSingleton implements RollbackInterface
{
    final public const INFO_CLASS_NAME = 'HL2Info';

    final public const PREVIEW_PREFIX = 'HL2PreviewCache';

    final public const DATA_PREFIX = 'HL2';

    private const FILE_NAME = 'config-hash.txt';

    private static ?string $hash = null;

    public static function getHash(): false|string
    {
        return self::$hash ?? self::$hash = self::getFromFile();
    }

    /**
     * Concatenation of the standard class name with the resulting hash.
     *
     * Соединение стандартного названия класса с полученным хешем.
     */
    public static function getRouteClassName(string $name): string
    {
        return $name . '_' . self::getHash();
    }

    /**
     * Force key generation for route cache.
     * Thus, the routes will always be updated.
     *
     * Принудительная генерация ключа для кеша маршрутов.
     * Таким образом маршруты всегда будут актуализированы.
     */
    public static function generateHash(array $data): bool
    {
        self::deleteOldHash();

        $dataHash = self::createHash($data);
        $dir = SystemSettings::getRealPath('storage') . '/cache/routes/';
        \hl_create_directory($dir);
        $path = $dir . self::FILE_NAME;
        \file_put_contents($path, $dataHash, LOCK_EX);
        @\chmod($path, 0664);
        if (empty(\file_get_contents($path))) {
            throw new CoreProcessException('Failed to save route cache key.');
        }

        return \file_exists($path);
    }

    /**
     * Getting the hash tag from a file.
     * In this case, if the deletion is started
     * by another process, a short pause is required.
     *
     * Получение метки хеша из файла.
     * При этом, если удаление начато другим процессом,
     * необходима небольшая пауза.
     */
    private static function getFromFile(): false|string
    {
        $dir = SystemSettings::getRealPath('@storage/cache/routes/');
        if (!$dir) {
            return false;
        }
        $file = $dir . self::FILE_NAME;
        if (!\file_exists($file)) {
            if (!\file_exists($dir . 'Map')) {
                return false;
            }
            \usleep(10000);
            if (!\file_exists($file)) {
                return false;
            }
        }

        return self::$hash = \file_get_contents($file) ?: null;
    }

    /**
     * A short hash is generated to correctly identify the data.
     *
     * Создается короткий хеш, позволяющий правильно идентифицировать данные.
     */
    private static function createHash(array $data): string
    {
        $data = \json_encode($data);
        $length = (string)\strlen($data);
        $hash = \sha1($data);

        self::$hash = \substr($hash, 0, 4) . \substr(\sha1($hash), 0, 5) . $length;

        return self::$hash;
    }

    /**
     * @inheritDoc
     *
     * @internal
     */
    #[\Override]
    public static function rollback(): void
    {
        self::$hash = null;
    }

    private static function deleteOldHash(): void
    {
        foreach (self::getFiles() ?: [] as $file) {
            if (!\is_dir($file)) {
                \unlink($file);
            }
        }
    }

    /**
     * Getting all cache information files with any postfixes.
     *
     * Получение всех файлов с информацией о кеше с любыми постфиксами.
     */
    private static function getFiles(): false|array
    {
        $dir = SystemSettings::getRealPath('@storage/cache/routes/');
        if (!$dir) {
            return false;
        }
        $result = [];
        $files = (array)\scandir($dir);
        foreach($files ?: [] as $file) {
            if (\str_starts_with($file, self::INFO_CLASS_NAME)) {
                $result[] = $dir . $file;
            }
        }
        if (\count($result) > 1) {
            \usort($result, static function ($a, $b) {
                return \filemtime($a) <=> \filemtime($b);
            });
        }

        return $result;
    }
}
