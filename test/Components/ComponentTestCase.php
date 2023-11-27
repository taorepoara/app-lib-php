<?php

namespace Lenra\App\Test\Components;

use Lenra\App\Components\Base\Builder;
use PHPUnit\Framework\TestCase;


class ComponentTestCase extends TestCase
{
    function checkComponent(Builder $component, mixed $expected)
    {
        $this->assertEquals($component->jsonSerialize(), $expected);
    }
}
