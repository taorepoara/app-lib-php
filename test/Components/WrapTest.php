<?php

namespace Lenra\App\Test\Components;

use Lenra\App\Components\Button;
use Lenra\App\Components\Listener;
use Lenra\App\Components\Wrap;

class WrapTest extends ComponentTestCase {
  public function testEmpty() {
    $this->checkComponent(
      Wrap::builder([]),
      [
        "_type" => "wrap",
        "children" => [],
      ]
    );
  }

  public function testChildren() {
    $this->checkComponent(Wrap::builder([
      Button::builder('Test')
        ->onPressed(Listener::builder('test'))
    ]), [
      "_type" => "wrap",
      "children" => [
        [
          "_type" => "button",
          "text" => "Test",
          "onPressed" => [
            "_type" => "listener",
            "name" => "test",
          ],
        ],
      ],
    ]);
  }
}
