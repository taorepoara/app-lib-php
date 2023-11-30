<?php

namespace Lenra\App\Test\Components;

use Lenra\App\Components\View;
use Lenra\App\Components\View\Definitions\Find;
use Lenra\App\Data;

class TestData extends Data {
  public function __construct(public string $name) {
  }
}

class ViewTest extends ComponentTestCase {
  public function testBasic(): void {
    $this->checkComponent(
      View::builder("test"),
      [
        "_type" => "view",
        "name" => "test"
      ]
    );
  }

  public function testFindByString(): void {
    $this->checkComponent(
      View::builder("test")->find(Find::builder("coll", ["name" => "my name"])),
      [
        "_type" => "view",
        "name" => "test",
        "find" => [
          "coll" => "coll",
          "query" => [
            "name" => "my name"
          ]
        ]
      ]
    );
  }

  public function testFindByClass(): void {
    $this->checkComponent(
      View::builder("test")->find(Find::builder(TestData::class, ["name" => "my name"])),
      [
        "_type" => "view",
        "name" => "test",
        "find" => [
          "coll" => "Lenra\App\Test\Components\TestData",
          "query" => [
            "name" => "my name"
          ]
        ]
      ]
    );
  }

  // Generated tests
  public function testBuilder(): void {
    $this->checkComponent(
      View::builder("test"),
      [
        "_type" => "view",
        "name" => "test"
      ]
    );
  }
}
