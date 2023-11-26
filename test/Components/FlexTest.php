<?php

declare(strict_types=1);

namespace Lenra\App\Test\Components;

use Lenra\App\Components\Button;
use Lenra\App\Components\Flex;
use Lenra\App\Components\Listener;
use Lenra\App\Components\Text;

final class FlexTest extends ComponentTest
{
    // public function testEmpty(): void
    // {
    //     $this->checkComponent(Flex::builder([]), [
    //         "_type" => "flex",
    //         "children" => [],
    //     ]);
    // }

    // public function testChildren(): void
    // {
    //     $this->checkComponent(Flex::builder([
    //         Text::builder("My text"),
    //         Button::builder("Test")->onPressed(Listener::builder("test")),
    //     ]), [
    //         "_type" => "flex",
    //         "children" => [
    //             [
    //                 "_type" => "text",
    //                 "value" => "My text",
    //             ],
    //             [
    //                 "_type" => "button",
    //                 "text" => "Test",
    //                 "onPressed" => [
    //                     "_type" => "listener",
    //                     "name" => "test",
    //                 ],
    //             ],
    //         ],
    //     ]);
    // }
}
