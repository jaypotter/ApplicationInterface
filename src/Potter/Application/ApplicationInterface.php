<?php

declare(strict_types=1);

namespace Potter\Application;

use \Potter\Session\SessionInterface;

interface ApplicationInterface 
{
    public function getSession(): SessionInterface;
    public function runningInConsole(): bool;
}