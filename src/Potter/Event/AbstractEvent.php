<?php

declare(strict_types=1);

namespace Potter\Event;

use \Potter\Event\Emitter\EmitterInterface;

abstract class AbstractEvent implements EventInterface
{
    abstract public function getEmitter(): EmitterInterface;
    abstract protected function setEmitter(EmitterInterface $emitter): void;
    abstract public function getId(): string;
    abstract protected function setId(string $id): void;
}