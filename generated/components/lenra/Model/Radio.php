<?php

namespace Lenra\App\Components\Lenra\Model;

class Radio
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The identifier of the component
     *
     * @var mixed
     */
    protected $type;
    /**
     * Whether the radio will be selected initially.
     *
     * @var bool
     */
    protected $autofocus;
    /**
     * The value of the radio
     *
     * @var string
     */
    protected $value;
    /**
     * The value group of the radio
     *
     * @var string
     */
    protected $groupValue;
    /**
     * Element of type MaterialTapTargetSize
     *
     * @var string
     */
    protected $materialTapTargetSize;
    /**
     * 
     *
     * @var Listener
     */
    protected $onPressed;
    /**
     * Whether the radio is allowed to go from checked to unchecked when clicking on it.
     *
     * @var bool
     */
    protected $toggleable;
    /**
     * Element of type RadioStyle
     *
     * @var StylesRadioStyle
     */
    protected $style;
    /**
     * The name that will be used in the form.
     *
     * @var string
     */
    protected $name;
    /**
     * The identifier of the component
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * The identifier of the component
     *
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Whether the radio will be selected initially.
     *
     * @return bool
     */
    public function getAutofocus() : bool
    {
        return $this->autofocus;
    }
    /**
     * Whether the radio will be selected initially.
     *
     * @param bool $autofocus
     *
     * @return self
     */
    public function setAutofocus(bool $autofocus) : self
    {
        $this->initialized['autofocus'] = true;
        $this->autofocus = $autofocus;
        return $this;
    }
    /**
     * The value of the radio
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * The value of the radio
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * The value group of the radio
     *
     * @return string
     */
    public function getGroupValue() : string
    {
        return $this->groupValue;
    }
    /**
     * The value group of the radio
     *
     * @param string $groupValue
     *
     * @return self
     */
    public function setGroupValue(string $groupValue) : self
    {
        $this->initialized['groupValue'] = true;
        $this->groupValue = $groupValue;
        return $this;
    }
    /**
     * Element of type MaterialTapTargetSize
     *
     * @return string
     */
    public function getMaterialTapTargetSize() : string
    {
        return $this->materialTapTargetSize;
    }
    /**
     * Element of type MaterialTapTargetSize
     *
     * @param string $materialTapTargetSize
     *
     * @return self
     */
    public function setMaterialTapTargetSize(string $materialTapTargetSize) : self
    {
        $this->initialized['materialTapTargetSize'] = true;
        $this->materialTapTargetSize = $materialTapTargetSize;
        return $this;
    }
    /**
     * 
     *
     * @return Listener
     */
    public function getOnPressed() : Listener
    {
        return $this->onPressed;
    }
    /**
     * 
     *
     * @param Listener $onPressed
     *
     * @return self
     */
    public function setOnPressed(Listener $onPressed) : self
    {
        $this->initialized['onPressed'] = true;
        $this->onPressed = $onPressed;
        return $this;
    }
    /**
     * Whether the radio is allowed to go from checked to unchecked when clicking on it.
     *
     * @return bool
     */
    public function getToggleable() : bool
    {
        return $this->toggleable;
    }
    /**
     * Whether the radio is allowed to go from checked to unchecked when clicking on it.
     *
     * @param bool $toggleable
     *
     * @return self
     */
    public function setToggleable(bool $toggleable) : self
    {
        $this->initialized['toggleable'] = true;
        $this->toggleable = $toggleable;
        return $this;
    }
    /**
     * Element of type RadioStyle
     *
     * @return StylesRadioStyle
     */
    public function getStyle() : StylesRadioStyle
    {
        return $this->style;
    }
    /**
     * Element of type RadioStyle
     *
     * @param StylesRadioStyle $style
     *
     * @return self
     */
    public function setStyle(StylesRadioStyle $style) : self
    {
        $this->initialized['style'] = true;
        $this->style = $style;
        return $this;
    }
    /**
     * The name that will be used in the form.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name that will be used in the form.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}