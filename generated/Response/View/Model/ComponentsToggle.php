<?php

namespace Lenra\App\Response\View\Model;

class ComponentsToggle
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
     * The value of the element.
     *
     * @var bool
     */
    protected $value;
    /**
     * The splash radius when you click on the toggle.
     *
     * @var float
     */
    protected $splashRadius;
    /**
     * The default focus in boolean.
     *
     * @var bool
     */
    protected $autofocus;
    /**
     * Determines the way that drag start behavior is handled.
     *
     * @var string
     */
    protected $dragStartBehavior;
    /**
     * 
     *
     * @var ComponentsListener
     */
    protected $onPressed;
    /**
     * Element of type ToggleStyle
     *
     * @var ComponentsStylesToggleStyle
     */
    protected $style;
    /**
     * The name that will be used in the form.
     *
     * @var string
     */
    protected $name;
    /**
     * The toggle is disabled if true
     *
     * @var bool
     */
    protected $disabled = false;
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
     * The value of the element.
     *
     * @return bool
     */
    public function getValue() : bool
    {
        return $this->value;
    }
    /**
     * The value of the element.
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
     * The splash radius when you click on the toggle.
     *
     * @return float
     */
    public function getSplashRadius() : float
    {
        return $this->splashRadius;
    }
    /**
     * The splash radius when you click on the toggle.
     *
     * @param float $splashRadius
     *
     * @return self
     */
    public function setSplashRadius(float $splashRadius) : self
    {
        $this->initialized['splashRadius'] = true;
        $this->splashRadius = $splashRadius;
        return $this;
    }
    /**
     * The default focus in boolean.
     *
     * @return bool
     */
    public function getAutofocus() : bool
    {
        return $this->autofocus;
    }
    /**
     * The default focus in boolean.
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
     * Determines the way that drag start behavior is handled.
     *
     * @return string
     */
    public function getDragStartBehavior() : string
    {
        return $this->dragStartBehavior;
    }
    /**
     * Determines the way that drag start behavior is handled.
     *
     * @param string $dragStartBehavior
     *
     * @return self
     */
    public function setDragStartBehavior(string $dragStartBehavior) : self
    {
        $this->initialized['dragStartBehavior'] = true;
        $this->dragStartBehavior = $dragStartBehavior;
        return $this;
    }
    /**
     * 
     *
     * @return ComponentsListener
     */
    public function getOnPressed() : ComponentsListener
    {
        return $this->onPressed;
    }
    /**
     * 
     *
     * @param ComponentsListener $onPressed
     *
     * @return self
     */
    public function setOnPressed(ComponentsListener $onPressed) : self
    {
        $this->initialized['onPressed'] = true;
        $this->onPressed = $onPressed;
        return $this;
    }
    /**
     * Element of type ToggleStyle
     *
     * @return ComponentsStylesToggleStyle
     */
    public function getStyle() : ComponentsStylesToggleStyle
    {
        return $this->style;
    }
    /**
     * Element of type ToggleStyle
     *
     * @param ComponentsStylesToggleStyle $style
     *
     * @return self
     */
    public function setStyle(ComponentsStylesToggleStyle $style) : self
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
    /**
     * The toggle is disabled if true
     *
     * @return bool
     */
    public function getDisabled() : bool
    {
        return $this->disabled;
    }
    /**
     * The toggle is disabled if true
     *
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled) : self
    {
        $this->initialized['disabled'] = true;
        $this->disabled = $disabled;
        return $this;
    }
}