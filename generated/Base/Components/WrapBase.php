<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsWrap>
*/
abstract class WrapBase extends Builder {
  public function __construct(array $children)
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsWrap::class, Lenra\App\Response\View\Normalizer\ComponentsWrapNormalizer::class);
    $this->data->setChildren($children);
  }

  public function direction(string $direction): WrapBase {
    if ($direction instanceof Builder) $direction = $direction->data;
    $this->data->setDirection($direction);
    return $this;
  }

  public function crossAxisAlignment(string $crossAxisAlignment): WrapBase {
    if ($crossAxisAlignment instanceof Builder) $crossAxisAlignment = $crossAxisAlignment->data;
    $this->data->setCrossAxisAlignment($crossAxisAlignment);
    return $this;
  }

  public function spacing(float $spacing): WrapBase {
    if ($spacing instanceof Builder) $spacing = $spacing->data;
    $this->data->setSpacing($spacing);
    return $this;
  }

  public function runSpacing(float $runSpacing): WrapBase {
    if ($runSpacing instanceof Builder) $runSpacing = $runSpacing->data;
    $this->data->setRunSpacing($runSpacing);
    return $this;
  }

  public function alignment(string $alignment): WrapBase {
    if ($alignment instanceof Builder) $alignment = $alignment->data;
    $this->data->setAlignment($alignment);
    return $this;
  }

  public function runAlignment(string $runAlignment): WrapBase {
    if ($runAlignment instanceof Builder) $runAlignment = $runAlignment->data;
    $this->data->setRunAlignment($runAlignment);
    return $this;
  }

  public function horizontalDirection(string $horizontalDirection): WrapBase {
    if ($horizontalDirection instanceof Builder) $horizontalDirection = $horizontalDirection->data;
    $this->data->setHorizontalDirection($horizontalDirection);
    return $this;
  }

  public function verticalDirection(string $verticalDirection): WrapBase {
    if ($verticalDirection instanceof Builder) $verticalDirection = $verticalDirection->data;
    $this->data->setVerticalDirection($verticalDirection);
    return $this;
  }

}
