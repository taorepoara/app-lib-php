<?php

declare(strict_types=1);
namespace Lenra\App\Test\Components;

use Lenra\App\Components\Button;
use Lenra\App\Components\Listener;

final class ButtonTest extends ComponentTest
{
    // public function testBasic(): void
    // {
    //     $this->checkComponent(Button::builder("My text"), [
    //         "_type" => "button",
    //         "text" => "My text",
    //     ]);
    // }

    public function testOnPressed(): void
    {
        $this->checkComponent(Button::builder("My text")->onPressed(Listener::builder("test")), [
            "_type" => "button",
            "text" => "My text",
            "onPressed" => [
                "_type" => "listener",
                "name" => "test",
            ],
        ]);
    }
}
