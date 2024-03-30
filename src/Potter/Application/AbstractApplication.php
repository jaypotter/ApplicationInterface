<?php

declare(strict_types=1);

namespace Potter\Application;

abstract class AbstractApplication implements ApplicationInterface
{
    abstract public function runningInConsole(): bool;
    abstract public function start(): void;
}