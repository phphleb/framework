<?php

/*declare(strict_types=1);*/

namespace Hleb\Constructor\Protected;

use Hleb\Base\RollbackInterface;
use Hleb\Constructor\Data\Key;
use Hleb\Static\Request;
use Hleb\Main\Insert\BaseAsyncSingleton;
use Hleb\Static\Session;

/**
 * @internal
 */
final class Csrf extends BaseAsyncSingleton implements RollbackInterface
{
    final public const KEY_NAME = '_token';

    final public const X_TOKEN = 'X-CSRF-Token';

    private const SESSION_KEY = 'HL-CSRF-TOKEN';

    private static ?string $key = null;

    /**
     * Returns the result of a key check against CSRF attacks.
     * The key can be sent either as a POST parameter or using a special header for a GET request.
     * To pass the header, there is an option to use cURL or an XMLHttpRequest object for JavaScript:
     *
     * Возвращает результат проверки ключа против CSRF-атак.
     * Ключ можно прислать как в качестве POST-параметра, так и используя специальный заголовок для GET-запроса.
     * Для передачи заголовка есть вариант использовать сURL или объект XMLHttpRequest для JavaScript:
     *
     * ```php
     *
     * $ch = curl_init('URL');
     * curl_setopt($ch, CURLOPT_HTTPHEADER, 'X-CSRF-Token: ' . $token);
     *
     * ```
     * ```javascript
     *
     * var xhr = new XMLHttpRequest();
     * xhr.setRequestHeader('X-CSRF-Token', token);
     *
     * ```
     */
    public static function validate(?string $key): bool
    {
        return self::key() === $key;
    }

    /**
     * Returns the found token in the request data or null.
     *
     * Возвращает найденный токен в данных запроса или null.
     */
   public static function discover(): string|null
   {
         return  Request::post(self::KEY_NAME)->asString() ??
           Request::get(self::KEY_NAME)->asString() ??
           Request::getSingleHeader(self::X_TOKEN)->asString();
   }

    /**
     * Returns the public security key.
     *
     * Возвращает публичный защитный ключ.
     */
    public static function key(): string
    {
        if (self::$key) {
            return self::$key;
        }
        if (!empty($_SESSION[self::SESSION_KEY])) {
            self::$key = $_SESSION[self::SESSION_KEY];
        } else {
            $id = Session::getSessionId();
            self::$key = $id ? \sha1( $id . Key::get()) : \sha1( \rand() . Key::get());
            $_SESSION[self::SESSION_KEY] = self::$key;
        }

        return self::$key;
    }

    /**
     * @inheritDoc
     *
     * @internal
     */
    #[\Override]
    public static function rollback(): void
    {
        self::$key = null;
    }
}
