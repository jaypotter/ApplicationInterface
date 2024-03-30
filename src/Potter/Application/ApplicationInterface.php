<?php

declare(strict_types=1);

namespace Potter\Application;

interface ApplicationInterface 
{
    public function runningInConsole(): bool;
}