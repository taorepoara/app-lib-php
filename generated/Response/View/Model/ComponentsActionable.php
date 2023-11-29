<?php

namespace Lenra\App\Response\View\Model;

class ComponentsActionable
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
     * @var ComponentsActionable|ComponentsButton|ComponentsCarousel|ComponentsCheckbox|ComponentsContainer|ComponentsDropdownButton|ComponentsFlex|ComponentsFlexible|ComponentsForm|ComponentsIcon|ComponentsImage|ComponentsMenu|ComponentsMenuItem|ComponentsOverlayEntry|ComponentsRadio|ComponentsSlider|ComponentsStack|ComponentsStatusSticker|ComponentsText|ComponentsTextField|ComponentsToggle|ComponentsView|ComponentsWrap
     */
    protected $child;
    /**
     * 
     *
     * @var ComponentsListener
     */
    protected $onPressed;
    /**
     * 
     *
     * @var ComponentsListener
     */
    protected $onDoublePressed;
    /**
     * 
     *
     * @var ComponentsListener
     */
    protected $onLongPressed;
    /**
     * 
     *
     * @var ComponentsListener
     */
    protected $onPressedCancel;
    /**
     * 
     *
     * @var ComponentsListener
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
     * @return ComponentsActionable|ComponentsButton|ComponentsCarousel|ComponentsCheckbox|ComponentsContainer|ComponentsDropdownButton|ComponentsFlex|ComponentsFlexible|ComponentsForm|ComponentsIcon|ComponentsImage|ComponentsMenu|ComponentsMenuItem|ComponentsOverlayEntry|ComponentsRadio|ComponentsSlider|ComponentsStack|ComponentsStatusSticker|ComponentsText|ComponentsTextField|ComponentsToggle|ComponentsView|ComponentsWrap
     */
    public function getChild()
    {
        return $this->child;
    }
    /**
     * Any component
     *
     * @param ComponentsActionable|ComponentsButton|ComponentsCarousel|ComponentsCheckbox|ComponentsContainer|ComponentsDropdownButton|ComponentsFlex|ComponentsFlexible|ComponentsForm|ComponentsIcon|ComponentsImage|ComponentsMenu|ComponentsMenuItem|ComponentsOverlayEntry|ComponentsRadio|ComponentsSlider|ComponentsStack|ComponentsStatusSticker|ComponentsText|ComponentsTextField|ComponentsToggle|ComponentsView|ComponentsWrap $child
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
     * 
     *
     * @return ComponentsListener
     */
    public function getOnDoublePressed() : ComponentsListener
    {
        return $this->onDoublePressed;
    }
    /**
     * 
     *
     * @param ComponentsListener $onDoublePressed
     *
     * @return self
     */
    public function setOnDoublePressed(ComponentsListener $onDoublePressed) : self
    {
        $this->initialized['onDoublePressed'] = true;
        $this->onDoublePressed = $onDoublePressed;
        return $this;
    }
    /**
     * 
     *
     * @return ComponentsListener
     */
    public function getOnLongPressed() : ComponentsListener
    {
        return $this->onLongPressed;
    }
    /**
     * 
     *
     * @param ComponentsListener $onLongPressed
     *
     * @return self
     */
    public function setOnLongPressed(ComponentsListener $onLongPressed) : self
    {
        $this->initialized['onLongPressed'] = true;
        $this->onLongPressed = $onLongPressed;
        return $this;
    }
    /**
     * 
     *
     * @return ComponentsListener
     */
    public function getOnPressedCancel() : ComponentsListener
    {
        return $this->onPressedCancel;
    }
    /**
     * 
     *
     * @param ComponentsListener $onPressedCancel
     *
     * @return self
     */
    public function setOnPressedCancel(ComponentsListener $onPressedCancel) : self
    {
        $this->initialized['onPressedCancel'] = true;
        $this->onPressedCancel = $onPressedCancel;
        return $this;
    }
    /**
     * 
     *
     * @return ComponentsListener
     */
    public function getOnHovered() : ComponentsListener
    {
        return $this->onHovered;
    }
    /**
     * 
     *
     * @param ComponentsListener $onHovered
     *
     * @return self
     */
    public function setOnHovered(ComponentsListener $onHovered) : self
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