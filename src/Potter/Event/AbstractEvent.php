<?php

declare(strict_types=1);

namespace Potter\Event;

abstract class AbstractEvent implements EventInterface
{
    abstract public function getId(): string;
    abstract protected function setId(string $id): void;
}