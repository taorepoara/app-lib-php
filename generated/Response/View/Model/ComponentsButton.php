<?php

namespace Lenra\App\Response\View\Model;

class ComponentsButton
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
     * The value of the text inside the button
     *
     * @var string
     */
    protected $text;
    /**
     * The button is disabled if true
     *
     * @var bool
     */
    protected $disabled = false;
    /**
     * The size to use, the component will be sized according to the value.
     *
     * @var string
     */
    protected $size = 'medium';
    /**
     * The style to use, the component will be changed according to the theme.
     *
     * @var string
     */
    protected $mainStyle = 'primary';
    /**
     * 
     *
     * @var ComponentsListener
     */
    protected $onPressed;
    /**
     * The Icon to use
     *
     * @var ComponentsIcon
     */
    protected $leftIcon;
    /**
     * The Icon to use
     *
     * @var ComponentsIcon
     */
    protected $rightIcon;
    /**
     * Whether the button is a submit button for a form.
     *
     * @var bool
     */
    protected $submit = false;
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
     * The value of the text inside the button
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * The value of the text inside the button
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * The button is disabled if true
     *
     * @return bool
     */
    public function getDisabled() : bool
    {
        return $this->disabled;
    }
    /**
     * The button is disabled if true
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
    /**
     * The size to use, the component will be sized according to the value.
     *
     * @return string
     */
    public function getSize() : string
    {
        return $this->size;
    }
    /**
     * The size to use, the component will be sized according to the value.
     *
     * @param string $size
     *
     * @return self
     */
    public function setSize(string $size) : self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * The style to use, the component will be changed according to the theme.
     *
     * @return string
     */
    public function getMainStyle() : string
    {
        return $this->mainStyle;
    }
    /**
     * The style to use, the component will be changed according to the theme.
     *
     * @param string $mainStyle
     *
     * @return self
     */
    public function setMainStyle(string $mainStyle) : self
    {
        $this->initialized['mainStyle'] = true;
        $this->mainStyle = $mainStyle;
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
     * The Icon to use
     *
     * @return ComponentsIcon
     */
    public function getLeftIcon() : ComponentsIcon
    {
        return $this->leftIcon;
    }
    /**
     * The Icon to use
     *
     * @param ComponentsIcon $leftIcon
     *
     * @return self
     */
    public function setLeftIcon(ComponentsIcon $leftIcon) : self
    {
        $this->initialized['leftIcon'] = true;
        $this->leftIcon = $leftIcon;
        return $this;
    }
    /**
     * The Icon to use
     *
     * @return ComponentsIcon
     */
    public function getRightIcon() : ComponentsIcon
    {
        return $this->rightIcon;
    }
    /**
     * The Icon to use
     *
     * @param ComponentsIcon $rightIcon
     *
     * @return self
     */
    public function setRightIcon(ComponentsIcon $rightIcon) : self
    {
        $this->initialized['rightIcon'] = true;
        $this->rightIcon = $rightIcon;
        return $this;
    }
    /**
     * Whether the button is a submit button for a form.
     *
     * @return bool
     */
    public function getSubmit() : bool
    {
        return $this->submit;
    }
    /**
     * Whether the button is a submit button for a form.
     *
     * @param bool $submit
     *
     * @return self
     */
    public function setSubmit(bool $submit) : self
    {
        $this->initialized['submit'] = true;
        $this->submit = $submit;
        return $this;
    }
}