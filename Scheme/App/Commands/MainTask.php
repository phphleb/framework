<?php

declare(strict_types=1);

namespace Hleb\Scheme\App\Commands;

use ErrorException;
use Hleb\Main\Helpers\StrToList;

class MainTask
{
    private $arguments = [];

    private $verbosity = true;

    /**
     * @param array $arguments
     * @throws ErrorException
     * @internal
     */
    public function createTask(array $arguments) {
        if(method_exists($this, 'execute')) {
            $arguments = $this->searchSystemParams($arguments);
            $this->verbosity or ob_start();
            if ($this->parsing($arguments)) {
                $this->execute();
            } else {
                $this->execute(...array_values($this->arguments));
            }
            $this->verbosity or ob_end_clean();
        } else {
            hleb_system_log(PHP_EOL . "Method 'execute' not exists in Task!" . PHP_EOL);
        }
    }

    /**
     * Calling a command from code, for example (new Task())->call(['argument']); or (new Task())->call(['name' => 'argument']);
     *
     * Вызов команды из кода, например (new Task())->call(['argument']); или (new Task())->call(['name' => 'argument']);
     *
     * @param array $arg
     */
    public function call(array $arg = []) {
        if(method_exists($this, 'execute')) {
            // Преобразование в строку, чтобы синхронизировать с консольным запросом.
            $arguments = array_map('strval', $arg);
            $arguments = $this->searchSystemParams($arguments);
            $this->arguments = $arguments;
            $this->verbosity or ob_start();
            $this->execute(...array_values($arguments));
            $this->verbosity or ob_end_clean();
        } else {
            hleb_system_log(PHP_EOL . "Method 'execute' not exists in Task!" . PHP_EOL);
        }
    }

    /**
     * Returns an array of all arguments.
     *
     * Возвращает массив всех аргументов.
     *
     * @return array
     */
    public function getOptions(): array {
        return $this->arguments;
    }

    /**
     * Accessing arguments individually.
     *
     * Обращение к аргументам по отдельности.
     *
     * $this->getOption(0);
     * $this->getOption('name');
     * $this->getOption('name', 'incognito');
     *
     * @return mixed
     */
    public function getOption($value, $default = null) {
        return $this->isOption($value) ? $this->arguments[$value] : $default;
    }

    /**
     * Returns the argument in integer type.
     *
     * Возвращает аргумент в целочисленном виде.
     *
     * @see MainTask::getOption()
     */
    public function getIntOption($value, $default = 0) {
        return $this->isOption($value) ? (int)$this->arguments[$value] : $default;
    }

    /**
     * Returns the argument in string type.
     *
     * Возвращает аргумент в строковом виде.
     *
     * @see MainTask::getOption()
     */
    public function getStringOption($value, $default = '') {
        return $this->isOption($value) ? (string)$this->arguments[$value] : $default;
    }

    /**
     * Returns the argument in float type.
     *
     * Возвращает аргумент в числовом виде.
     *
     * @see MainTask::getOption()
     */
    public function getFloatOption($value, $default = 0.0) {
        return $this->isOption($value) ? (float)$this->arguments[$value] : $default;
    }

    /**
     * Returns the argument converted to a list.
     *
     * Возвращает аргумент, преобразованный в список.
     *
     * @see MainTask::getOption()
     */
    public function getListOption($value, $default = [], $type = StrToList::STRING_TYPE) {
        return $this->isOption($value) ? StrToList::convert((string)$this->arguments[$value], $type) : $default;
    }

    /**
     * Returns the result of checking for the existence of an argument.
     *
     * Возвращает результат проверки на существование аргумента.
     */
    public function isOption($value): bool {
        return isset($this->arguments[$value]);
    }

    // Parsing argument types, both enum and --Name=Value
    // Разбор типов ввода аргументов, как перечислением, так и в виде --Name=Value
    private function parsing(array $arguments): bool {
        $named = [];
        $result = [];
        foreach ($arguments as $key => $arg) {
            $arg = trim($arg);
            if (strpos($arg, '--') === 0 && strpos($arg, '=') !== false) {
                if (in_array(0, $named)) {
                    throw new ErrorException('There are mixed types of arguments');
                }
                $named[] = 1;
                $combs = explode('=', $arg);
                $name = array_shift($combs);
                $value = trim(implode('=', $combs), '"');
                $result[trim($name, '-')] = $value;
            } else {
                if (in_array(1, $named)) {
                    throw new ErrorException('There are mixed types of arguments');
                }
                $named[] = 0;
                $result[]= $arg;
            }
        }
        $this->arguments = $result;

        return in_array(1, $named);
    }

    // Adding the "--quiet" argument removes all output from the command.
    // Добавление аргумента "--quiet" убирает весь вывод команды.
    private function searchSystemParams(array $arguments) {
        foreach ($arguments as $key => $arg) {
            $arg = trim($arg);
            if ($arg === '--quiet') {
                $this->verbosity = false;
                unset($arguments[$key]);
            }
        }
        return $arguments;
    }

}

