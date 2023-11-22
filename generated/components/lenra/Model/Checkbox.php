<?php

namespace Lenra\App\Components\Lenra\Model;

class Checkbox
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
     * The default state of the checkbox
     *
     * @var bool
     */
    protected $value;
    /**
     * Whether the checkbox can have 3 states.
     *
     * @var bool
     */
    protected $tristate;
    /**
     * 
     *
     * @var Listener
     */
    protected $onPressed;
    /**
     * Element of type CheckboxStyle
     *
     * @var StylesCheckboxStyle
     */
    protected $style;
    /**
     * Element of type MaterialTapTargetSize
     *
     * @var string
     */
    protected $materialTapTargetSize;
    /**
     * Whether the checkbox is focused initially.
     *
     * @var bool
     */
    protected $autofocus;
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
     * The default state of the checkbox
     *
     * @return bool
     */
    public function getValue() : bool
    {
        return $this->value;
    }
    /**
     * The default state of the checkbox
     *
     * @param bool $value
     *
     * @return self
     */
    public function setValue(bool $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Whether the checkbox can have 3 states.
     *
     * @return bool
     */
    public function getTristate() : bool
    {
        return $this->tristate;
    }
    /**
     * Whether the checkbox can have 3 states.
     *
     * @param bool $tristate
     *
     * @return self
     */
    public function setTristate(bool $tristate) : self
    {
        $this->initialized['tristate'] = true;
        $this->tristate = $tristate;
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
     * Element of type CheckboxStyle
     *
     * @return StylesCheckboxStyle
     */
    public function getStyle() : StylesCheckboxStyle
    {
        return $this->style;
    }
    /**
     * Element of type CheckboxStyle
     *
     * @param StylesCheckboxStyle $style
     *
     * @return self
     */
    public function setStyle(StylesCheckboxStyle $style) : self
    {
        $this->initialized['style'] = true;
        $this->style = $style;
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
     * Whether the checkbox is focused initially.
     *
     * @return bool
     */
    public function getAutofocus() : bool
    {
        return $this->autofocus;
    }
    /**
     * Whether the checkbox is focused initially.
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