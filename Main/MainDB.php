<?php

declare(strict_types=1);

/*
 * A wrapper for working with PDO.
 *
 * Оболочка для работы с PDO.
 */

namespace Hleb\Main;

/**
 * @package Hleb\Main
 * @internal
 */
final class MainDB
{
    use \DeterminantStaticUncreated;

    private static $connectionList = [];

    public static function instance($config_key) {
        if (empty(self::$connectionList) && !defined('HLEB_TYPE_DB')) {
            $configSearchDir = defined('HLEB_SEARCH_DBASE_CONFIG_FILE') ?
                HLEB_SEARCH_DBASE_CONFIG_FILE :
                HLEB_GLOBAL_DIRECTORY . '/database';

            if (file_exists($configSearchDir . "/dbase.config.php")) {
                hleb_require($configSearchDir . "/dbase.config.php");
            } else {
                hleb_require($configSearchDir . "/default.dbase.config.php");
            }
        }
        $config = self::setConfigKey($config_key);
        if (!isset(self::$connectionList[$config])) {
            self::$connectionList[$config] = self::init($config);
        }
        return self::$connectionList[$config];
    }

    public static function run($sql, $args = [], $config = null) {
        $time = microtime(true);
        $stmt = self::instance($config)->prepare($sql);
        $stmt->execute($args);
        $time = microtime(true) - $time;
        if (defined('HLEB_PROJECT_DEBUG_ON') && HLEB_PROJECT_DEBUG_ON) {
            \Hleb\Main\DataDebug::add($sql, $time, self::setConfigKey($config), true);
        }
        if(defined('HLEB_DB_LOG_ENABLED') && HLEB_DB_LOG_ENABLED) {
           hleb_system_log('[DB LOG ' . round($time, 4) . ' sec] ' . $sql . ';');
        }

        return $stmt;
    }


    public static function dbQuery(string $sql, $config = null) {
        $time = microtime(true);
        $stmt = self::instance($config)->query($sql);
        if (is_bool($stmt)) {
            return $stmt;
        }
        $data = $stmt->fetchAll();
        \Hleb\Main\DataDebug::add(htmlentities($sql), microtime(true) - $time, self::setConfigKey($config), true);
        return $data;
    }

    /**
     * @param string|null $configKey
     * @return PdoManager
     */
    public static function getPdoInstance($configKey = null) {
        return new PdoManager(self::instance($configKey));
    }

    protected static function init(string $config) {
        $param = HLEB_PARAMETERS_FOR_DB[$config];
        $opt = $param["options-list"] ?? [];
        $opt[\PDO::ATTR_ERRMODE] = $param["errmode"] ?? \PDO::ERRMODE_EXCEPTION;
        $opt[\PDO::ATTR_DEFAULT_FETCH_MODE] = $param["default_fetch_mode"] ?? \PDO::FETCH_ASSOC;
        $opt[\PDO::ATTR_EMULATE_PREPARES] = $param["emulate-prepares"] ?? $param["emulate_prepares"] ?? false;

        $user = $param["user"] ?? '';
        $pass = $param["pass"] ?? $param["password"] ?? '';
        $condition = [];

        foreach ($param as $key => $prm) {
            if (is_numeric($key)) {
                $condition [] = preg_replace('/\s+/', '', $prm);
            }
        }
        self::$connectionList[$config] = new \PDO(implode(";", $condition), $user, $pass, $opt);

        return self::$connectionList[$config];
    }

    protected static function setConfigKey($config) {
        return is_string($config) ? $config : HLEB_TYPE_DB;
    }

}


