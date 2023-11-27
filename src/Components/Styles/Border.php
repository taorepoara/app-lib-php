<?php
// This file is auto-generated by generate-classes.php but it can be edited

namespace Lenra\App\Components\Styles;

class Border extends \Lenra\App\Base\Components\Styles\BorderBase {
  // Add here custom implementations

  public static function builder(): Border {
    return new Border();
  }

  public static function all(BorderSide $side): Border {
    return Border::builder()
      ->top($side)
      ->left($side)
      ->bottom($side)
      ->right($side);
  }

  public static function symmetric(BorderSide $horizontal, BorderSide $vertical): Border {
    return Border::builder()
      ->top($vertical)
      ->left($horizontal)
      ->bottom($vertical)
      ->right($horizontal);
  }
}
