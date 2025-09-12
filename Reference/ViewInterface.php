<?php

namespace Hleb\Reference;

use Hleb\Constructor\Data\View;

interface ViewInterface
{
    /**
     * @see view()
     *
     * @param array<string, mixed> $params
     */
    public function view(string $template, array $params = [], ?int $status = null): View;
}
