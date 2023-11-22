<?php

namespace Lenra\App\Components\Lenra\Model;

class Actionable
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
     * Any component
     *
     * @var Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap
     */
    protected $child;
    /**
     * 
     *
     * @var Listener
     */
    protected $onPressed;
    /**
     * 
     *
     * @var Listener
     */
    protected $onDoublePressed;
    /**
     * 
     *
     * @var Listener
     */
    protected $onLongPressed;
    /**
     * 
     *
     * @var Listener
     */
    protected $onPressedCancel;
    /**
     * 
     *
     * @var Listener
     */
    protected $onHovered;
    /**
     * Whether the actionable can submit a form.
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
     * Any component
     *
     * @return Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap
     */
    public function getChild()
    {
        return $this->child;
    }
    /**
     * Any component
     *
     * @param Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap $child
     *
     * @return self
     */
    public function setChild($child) : self
    {
        $this->initialized['child'] = true;
        $this->child = $child;
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
     * 
     *
     * @return Listener
     */
    public function getOnDoublePressed() : Listener
    {
        return $this->onDoublePressed;
    }
    /**
     * 
     *
     * @param Listener $onDoublePressed
     *
     * @return self
     */
    public function setOnDoublePressed(Listener $onDoublePressed) : self
    {
        $this->initialized['onDoublePressed'] = true;
        $this->onDoublePressed = $onDoublePressed;
        return $this;
    }
    /**
     * 
     *
     * @return Listener
     */
    public function getOnLongPressed() : Listener
    {
        return $this->onLongPressed;
    }
    /**
     * 
     *
     * @param Listener $onLongPressed
     *
     * @return self
     */
    public function setOnLongPressed(Listener $onLongPressed) : self
    {
        $this->initialized['onLongPressed'] = true;
        $this->onLongPressed = $onLongPressed;
        return $this;
    }
    /**
     * 
     *
     * @return Listener
     */
    public function getOnPressedCancel() : Listener
    {
        return $this->onPressedCancel;
    }
    /**
     * 
     *
     * @param Listener $onPressedCancel
     *
     * @return self
     */
    public function setOnPressedCancel(Listener $onPressedCancel) : self
    {
        $this->initialized['onPressedCancel'] = true;
        $this->onPressedCancel = $onPressedCancel;
        return $this;
    }
    /**
     * 
     *
     * @return Listener
     */
    public function getOnHovered() : Listener
    {
        return $this->onHovered;
    }
    /**
     * 
     *
     * @param Listener $onHovered
     *
     * @return self
     */
    public function setOnHovered(Listener $onHovered) : self
    {
        $this->initialized['onHovered'] = true;
        $this->onHovered = $onHovered;
        return $this;
    }
    /**
     * Whether the actionable can submit a form.
     *
     * @return bool
     */
    public function getSubmit() : bool
    {
        return $this->submit;
    }
    /**
     * Whether the actionable can submit a form.
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