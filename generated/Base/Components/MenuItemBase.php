<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsMenuItem>
*/
abstract class MenuItemBase extends Builder {
  public function __construct(string $text)
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsMenuItem::class, Lenra\App\Response\View\Normalizer\ComponentsMenuItemNormalizer::class);
    $this->data->setText($text);
  }

  public function isSelected(bool $isSelected): MenuItemBase {
    if ($isSelected instanceof Builder) $isSelected = $isSelected->data;
    $this->data->setIsSelected($isSelected);
    return $this;
  }

  public function disabled(bool $disabled): MenuItemBase {
    if ($disabled instanceof Builder) $disabled = $disabled->data;
    $this->data->setDisabled($disabled);
    return $this;
  }

  public function icon(\Lenra\App\Components\Icon $icon): MenuItemBase {
    if ($icon instanceof Builder) $icon = $icon->data;
    $this->data->setIcon($icon);
    return $this;
  }

  public function onPressed(\Lenra\App\Components\Listener $onPressed): MenuItemBase {
    if ($onPressed instanceof Builder) $onPressed = $onPressed->data;
    $this->data->setOnPressed($onPressed);
    return $this;
  }

}
