<?php

namespace Lenra\App\Test\Components;

use Lenra\App\Components\Button;
use Lenra\App\Components\Listener;
use Lenra\App\Components\Stack;

class StackTest extends ComponentTestCase {
  public function testEmpty() {
    $this->checkComponent(Stack::builder([]), [
      '_type' => 'stack',
      'children' => [],
    ]);
  }

  public function testChildren() {
    $this->checkComponent(Stack::builder([
      Button::builder('Test')
        ->onPressed(Listener::builder('test'))
    ]), [
      '_type' => 'stack',
      'children' => [
        [
          '_type' => 'button',
          'text' => 'Test',
          'onPressed' => [
            '_type' => 'listener',
            'name' => 'test',
          ],
        ],
      ],
    ]);
  }
}
