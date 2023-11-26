<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsCheckbox>
*/
abstract class CheckboxBase extends Builder {
  public function __construct(bool $value)
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsCheckbox::class, Lenra\App\Response\View\Normalizer\ComponentsCheckboxNormalizer::class);
    $this->data->setValue($value);
  }

  public function tristate(bool $tristate): CheckboxBase {
    if ($tristate instanceof Builder) $tristate = $tristate->data;
    $this->data->setTristate($tristate);
    return $this;
  }

  public function onPressed(\Lenra\App\Components\Listener $onPressed): CheckboxBase {
    if ($onPressed instanceof Builder) $onPressed = $onPressed->data;
    $this->data->setOnPressed($onPressed);
    return $this;
  }

  public function style(\Lenra\App\Components\Styles\CheckboxStyle $style): CheckboxBase {
    if ($style instanceof Builder) $style = $style->data;
    $this->data->setStyle($style);
    return $this;
  }

  public function materialTapTargetSize(string $materialTapTargetSize): CheckboxBase {
    if ($materialTapTargetSize instanceof Builder) $materialTapTargetSize = $materialTapTargetSize->data;
    $this->data->setMaterialTapTargetSize($materialTapTargetSize);
    return $this;
  }

  public function autofocus(bool $autofocus): CheckboxBase {
    if ($autofocus instanceof Builder) $autofocus = $autofocus->data;
    $this->data->setAutofocus($autofocus);
    return $this;
  }

  public function name(string $name): CheckboxBase {
    if ($name instanceof Builder) $name = $name->data;
    $this->data->setName($name);
    return $this;
  }

}
