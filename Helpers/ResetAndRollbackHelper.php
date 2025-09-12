<?php

/*declare(strict_types=1);*/

namespace Hleb\Helpers;

use Hleb\Base\ResetInterface;
use Hleb\Reference\LogInterface;
use ReflectionClass;

/**
 * @internal
 */
final class ResetAndRollbackHelper
{
    /**
     * @internal
     *
     * @param array<string, mixed> $services
     */
   public static function resetInContainer(array $services, ?LogInterface $logger): void
   {
       foreach($services as $service) {
           if (!\is_object($service)) {
               continue;
           }
           $errors = [];
           if ($service instanceof ResetInterface) {
               if (self::isUninitializedLazyObject($service)) {
                   continue;
               }
               try {
                   $service->reset();
               } catch (\Throwable $e) {
                   $errors[] = $e->getMessage() . ' ' . $e->getTraceAsString();
               }
           }
           if ($logger && $errors) {
               foreach ($errors as $error) {
                   $logger->error($error);
               }
           }
       }
   }

    /**
     * @internal
     *
     * @param string[] $classes
     */
    public static function rollbackClassState(array $classes, ?LogInterface $logger): void
    {
        $errors = [];
        foreach($classes as $class) {
            try {
                \class_exists($class, false) and $class::rollback();
            } catch (\Throwable $e) {
                $errors[] = $e->getMessage() . ' ' . $e->getTraceAsString();
            }
            if ($errors && $logger) {
                foreach ($errors as $error) {
                    $logger->error($error);
                }
            }
        }
    }

    private static function isUninitializedLazyObject(object $object): bool
    {
        if (PHP_VERSION_ID < 80400) {
            return false;
        }
        return (new ReflectionClass($object))->isUninitializedLazyObject($object);
    }
}
