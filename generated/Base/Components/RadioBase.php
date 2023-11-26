<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsRadio>
*/
abstract class RadioBase extends Builder {
  public function __construct(string $value ,string $groupValue)
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsRadio::class, Lenra\App\Response\View\Normalizer\ComponentsRadioNormalizer::class);
    $this->data->setValue($value);
    $this->data->setGroupValue($groupValue);
  }

  public function autofocus(bool $autofocus): RadioBase {
    if ($autofocus instanceof Builder) $autofocus = $autofocus->data;
    $this->data->setAutofocus($autofocus);
    return $this;
  }

  public function materialTapTargetSize(string $materialTapTargetSize): RadioBase {
    if ($materialTapTargetSize instanceof Builder) $materialTapTargetSize = $materialTapTargetSize->data;
    $this->data->setMaterialTapTargetSize($materialTapTargetSize);
    return $this;
  }

  public function onPressed(\Lenra\App\Components\Listener $onPressed): RadioBase {
    if ($onPressed instanceof Builder) $onPressed = $onPressed->data;
    $this->data->setOnPressed($onPressed);
    return $this;
  }

  public function toggleable(bool $toggleable): RadioBase {
    if ($toggleable instanceof Builder) $toggleable = $toggleable->data;
    $this->data->setToggleable($toggleable);
    return $this;
  }

  public function style(\Lenra\App\Components\Styles\RadioStyle $style): RadioBase {
    if ($style instanceof Builder) $style = $style->data;
    $this->data->setStyle($style);
    return $this;
  }

  public function name(string $name): RadioBase {
    if ($name instanceof Builder) $name = $name->data;
    $this->data->setName($name);
    return $this;
  }

}
