<?php

declare(strict_types=1);

namespace Potter\Event;

use \Potter\Event\Emitter\EmitterInterface;

interface EventInterface
{
    public function getEmitter(): EmitterInterface;
    public function getId(): string;
}