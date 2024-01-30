<?php

declare(strict_types=1);

namespace Hleb\Main\Routes\Methods\Traits;


use Hleb\Route\Protect;

trait InsertProtectTrait
{
    /**
     * Applies the specified protection to the route.
     *
     * Применяет указанную защиту к маршруту.
     */
    public function protect(string|array $rules = 'CSRF'): Protect
    {
        return new Protect($rules);
    }
}
