<?php

namespace Lenra\App\Test\Components;

use Lenra\App\Components\Base\Builder;
use PHPUnit\Framework\TestCase;


class ComponentTestCase extends TestCase
{
    function checkComponent(Builder $component, mixed $expected)
    {
        $this->assertEquals($this->normalize($component->jsonSerialize()), $this->normalize($expected));
    }

    private function normalize($value): mixed
    {
        return json_decode(json_encode($value), true);
    }
}
