<?php

namespace Lenra\App\Test\Components;

use Lenra\App\Components\Button;
use Lenra\App\Components\Container;
use Lenra\App\Components\Listener;

class ContainerTest extends ComponentTestCase {
    public function testBasic() {
        $this->checkComponent(Container::builder(), [
            '_type' => 'container',
        ]);
    }

    public function testChild() {
        $this->checkComponent(Container::builder(Button::builder('Test')->onPressed(Listener::builder('test'))), [
            '_type' => 'container',
            'child' => [
                '_type' => 'button',
                'text' => 'Test',
                'onPressed' => [
                    '_type' => 'listener',
                    'name' => 'test',
                ],
            ],
        ]);
    }

    public function testCard() {
        $this->checkComponent(Container::card(Button::builder('Test')->onPressed(Listener::builder('test'))), [
            '_type' => 'container',
            'border' => [
                'top' => [
                    'width' => 1,
                    'color' => 4292665575,
                ],
                'bottom' => [
                    'width' => 1,
                    'color' => 4292665575,
                ],
                'left' => [
                    'width' => 1,
                    'color' => 4292665575,
                ],
                'right' => [
                    'width' => 1,
                    'color' => 4292665575,
                ],
            ],
            "padding" => [
                "top" => 16,
                "bottom" => 16,
                "left" => 16,
                "right" => 16,
            ],
            "decoration" => [
                "color" => 4294967295,
                "borderRadius" => [
                    "topLeft" => [
                        "x" => 8,
                        "y" => 8,
                    ],
                    "topRight" => [
                        "x" => 8,
                        "y" => 8,
                    ],
                    "bottomRight" => [
                        "x" => 8,
                        "y" => 8,
                    ],
                    "bottomLeft" => [
                        "x" => 8,
                        "y" => 8,
                    ],
                ],
                "boxShadow" => [
                    "blurRadius" => 10,
                    "offset" => [
                        "dx" => 4,
                        "dy" => 4,
                    ],
                    "color" => 2147483648,
                ],
            ],
            "child" => [
                "_type" => "button",
                "text" => "Test",
                "onPressed" => [
                    "_type" => "listener",
                    "name" => "test",
                ],
            ],
        ]);
    }
}
