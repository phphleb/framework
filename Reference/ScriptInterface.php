<?php

namespace Hleb\Reference;

use JetBrains\PhpStorm\NoReturn;

interface ScriptInterface
{
    /**
     * Wrapper for classic script exit. Not applicable for asynchronous mode.
     *
     * Обёртка для классического выхода из скрипта. Неприменимо для асинхронного режима.
     *
     * @param array<int, string>|array<string, mixed> $headers
     */
    #[NoReturn]
    public static function standardExit(int|string $message = '', int $httpCode = 200, array $headers = []): never;

    /**
     * Simulation with exit from the process (script) for asynchronous mode
     * and normal exit for standard mode.
     *
     * Имитация с выходом из процесса (скрипта) для асинхронного режима
     * и обычный выход для стандартного режима.
     *
     * @param array<int, string>|array<string, mixed> $headers
     */
    public static function asyncExit(int|string $message = '', ?int $httpStatus = null, array $headers = []): never;
}
