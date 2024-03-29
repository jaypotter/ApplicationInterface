<?php

declare(strict_types=1);

namespace Potter\Application;

use \Potter\Session\SessionInterface;

abstract class AbstractApplication implements ApplicationInterface
{
    abstract public function getSession(): SessionInterface;
    abstract protected function setSession(SessionInterface $session): void;
    
    abstract public function runningInConsole(): bool;
}