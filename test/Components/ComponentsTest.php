<?php

namespace Lenra\App\Test\Components;

class ComponentsTest extends ComponentTestCase {
  public function testApiLoaded() {
    $schemaPath = realpath(__DIR__ . '/../../api/responses/view.schema.json');
    $this->assertTrue(file_exists($schemaPath));
  }

  public function testManagedComponent() {
    $schemaPath = realpath(__DIR__ . '/../../api/responses/view.schema.json');
    $mainSchema = json_decode(file_get_contents($schemaPath), true);

    $componentList = array_merge(
      $mainSchema["definitions"]["components.lenra"]["oneOf"],
      $mainSchema["definitions"]["components.json"]["oneOf"]
    );

    foreach ($componentList as $component) {
      $ref = $component['$ref'];
      $content = $this->getPropertyValue($mainSchema, $ref);
      $c = "Lenra\\App\\Components\\" . $content["title"];

      $this->assertTrue(class_exists($c));

      $properties = array_filter(
        $content["properties"],
        function ($key) use ($content) {
          return !in_array($key, $content["required"]);
        },
        ARRAY_FILTER_USE_KEY
      );

      foreach ($properties as $key => $descriptor) {
        $this->assertTrue(method_exists($c, $key));
      }
    }
  }

  private function getPropertyValue($object, $propertyPath) {
    $parts = explode("/", ltrim($propertyPath, "#/"));
    foreach ($parts as $part) {
      $object = $object[$part];
    }
    return $object;
  }
}
