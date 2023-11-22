<?php

namespace Lenra\App\Components\Lenra\Model;

class Slider
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
     * Element of type SliderStyle
     *
     * @var StylesSliderStyle
     */
    protected $style;
    /**
     * Whether the slider should be focused initially.
     *
     * @var bool
     */
    protected $autofocus = false;
    /**
     * The number of divisions to show on the slider.
     *
     * @var float
     */
    protected $divisions;
    /**
     * The label of the slider.
     *
     * @var string
     */
    protected $label;
    /**
     * The minimum value of the slider.
     *
     * @var float
     */
    protected $min = 0;
    /**
     * The maximum value of the slider.
     *
     * @var float
     */
    protected $max = 1;
    /**
     * 
     *
     * @var Listener
     */
    protected $onChanged;
    /**
     * 
     *
     * @var Listener
     */
    protected $onChangeEnd;
    /**
     * 
     *
     * @var Listener
     */
    protected $onChangeStart;
    /**
     * The current value of the slider.
     *
     * @var float
     */
    protected $value = 0;
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
     * Element of type SliderStyle
     *
     * @return StylesSliderStyle
     */
    public function getStyle() : StylesSliderStyle
    {
        return $this->style;
    }
    /**
     * Element of type SliderStyle
     *
     * @param StylesSliderStyle $style
     *
     * @return self
     */
    public function setStyle(StylesSliderStyle $style) : self
    {
        $this->initialized['style'] = true;
        $this->style = $style;
        return $this;
    }
    /**
     * Whether the slider should be focused initially.
     *
     * @return bool
     */
    public function getAutofocus() : bool
    {
        return $this->autofocus;
    }
    /**
     * Whether the slider should be focused initially.
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
     * The number of divisions to show on the slider.
     *
     * @return float
     */
    public function getDivisions() : float
    {
        return $this->divisions;
    }
    /**
     * The number of divisions to show on the slider.
     *
     * @param float $divisions
     *
     * @return self
     */
    public function setDivisions(float $divisions) : self
    {
        $this->initialized['divisions'] = true;
        $this->divisions = $divisions;
        return $this;
    }
    /**
     * The label of the slider.
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * The label of the slider.
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * The minimum value of the slider.
     *
     * @return float
     */
    public function getMin() : float
    {
        return $this->min;
    }
    /**
     * The minimum value of the slider.
     *
     * @param float $min
     *
     * @return self
     */
    public function setMin(float $min) : self
    {
        $this->initialized['min'] = true;
        $this->min = $min;
        return $this;
    }
    /**
     * The maximum value of the slider.
     *
     * @return float
     */
    public function getMax() : float
    {
        return $this->max;
    }
    /**
     * The maximum value of the slider.
     *
     * @param float $max
     *
     * @return self
     */
    public function setMax(float $max) : self
    {
        $this->initialized['max'] = true;
        $this->max = $max;
        return $this;
    }
    /**
     * 
     *
     * @return Listener
     */
    public function getOnChanged() : Listener
    {
        return $this->onChanged;
    }
    /**
     * 
     *
     * @param Listener $onChanged
     *
     * @return self
     */
    public function setOnChanged(Listener $onChanged) : self
    {
        $this->initialized['onChanged'] = true;
        $this->onChanged = $onChanged;
        return $this;
    }
    /**
     * 
     *
     * @return Listener
     */
    public function getOnChangeEnd() : Listener
    {
        return $this->onChangeEnd;
    }
    /**
     * 
     *
     * @param Listener $onChangeEnd
     *
     * @return self
     */
    public function setOnChangeEnd(Listener $onChangeEnd) : self
    {
        $this->initialized['onChangeEnd'] = true;
        $this->onChangeEnd = $onChangeEnd;
        return $this;
    }
    /**
     * 
     *
     * @return Listener
     */
    public function getOnChangeStart() : Listener
    {
        return $this->onChangeStart;
    }
    /**
     * 
     *
     * @param Listener $onChangeStart
     *
     * @return self
     */
    public function setOnChangeStart(Listener $onChangeStart) : self
    {
        $this->initialized['onChangeStart'] = true;
        $this->onChangeStart = $onChangeStart;
        return $this;
    }
    /**
     * The current value of the slider.
     *
     * @return float
     */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
     * The current value of the slider.
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
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