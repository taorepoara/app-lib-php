<?php
// This file is auto-generated by generate-classes.php but it can be edited

namespace Lenra\App\Components;

class StatusSticker extends \Lenra\App\Base\Components\StatusStickerBase {
  // Add here custom implementations

  public static function builder(string $status): StatusSticker {
    return new StatusSticker($status);
  }
}
