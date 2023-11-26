<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsStylesSliderStyle>
*/
abstract class SliderStyleBase extends Builder {
  public function __construct()
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsStylesSliderStyle::class, Lenra\App\Response\View\Normalizer\ComponentsStylesSliderStyleNormalizer::class);
  }

  public function activeColor(int $activeColor): SliderStyleBase {
    if ($activeColor instanceof Builder) $activeColor = $activeColor->data;
    $this->data->setActiveColor($activeColor);
    return $this;
  }

  public function inactiveColor(int $inactiveColor): SliderStyleBase {
    if ($inactiveColor instanceof Builder) $inactiveColor = $inactiveColor->data;
    $this->data->setInactiveColor($inactiveColor);
    return $this;
  }

  public function thumbColor(int $thumbColor): SliderStyleBase {
    if ($thumbColor instanceof Builder) $thumbColor = $thumbColor->data;
    $this->data->setThumbColor($thumbColor);
    return $this;
  }

}
