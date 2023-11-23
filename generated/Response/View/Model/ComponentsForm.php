<?php

namespace Lenra\App\Response\View\Model;

class ComponentsForm
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
     * @var ComponentsActionable|ComponentsButton|ComponentsCarousel|ComponentsCheckbox|ComponentsContainer|ComponentsDropdownButton|ComponentsFlex|ComponentsFlexible|ComponentsForm|ComponentsIcon|ComponentsImage|ComponentsMenu|ComponentsMenuItem|ComponentsOverlayEntry|ComponentsRadio|ComponentsSlider|ComponentsStack|ComponentsStatusSticker|ComponentsText|ComponentsTextfield|ComponentsToggle|ComponentsView|ComponentsWrap
     */
    protected $child;
    /**
     * 
     *
     * @var ComponentsListener
     */
    protected $onSubmit;
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
     * @return ComponentsActionable|ComponentsButton|ComponentsCarousel|ComponentsCheckbox|ComponentsContainer|ComponentsDropdownButton|ComponentsFlex|ComponentsFlexible|ComponentsForm|ComponentsIcon|ComponentsImage|ComponentsMenu|ComponentsMenuItem|ComponentsOverlayEntry|ComponentsRadio|ComponentsSlider|ComponentsStack|ComponentsStatusSticker|ComponentsText|ComponentsTextfield|ComponentsToggle|ComponentsView|ComponentsWrap
     */
    public function getChild()
    {
        return $this->child;
    }
    /**
     * Any component
     *
     * @param ComponentsActionable|ComponentsButton|ComponentsCarousel|ComponentsCheckbox|ComponentsContainer|ComponentsDropdownButton|ComponentsFlex|ComponentsFlexible|ComponentsForm|ComponentsIcon|ComponentsImage|ComponentsMenu|ComponentsMenuItem|ComponentsOverlayEntry|ComponentsRadio|ComponentsSlider|ComponentsStack|ComponentsStatusSticker|ComponentsText|ComponentsTextfield|ComponentsToggle|ComponentsView|ComponentsWrap $child
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
    public function getOnSubmit() : ComponentsListener
    {
        return $this->onSubmit;
    }
    /**
     * 
     *
     * @param ComponentsListener $onSubmit
     *
     * @return self
     */
    public function setOnSubmit(ComponentsListener $onSubmit) : self
    {
        $this->initialized['onSubmit'] = true;
        $this->onSubmit = $onSubmit;
        return $this;
    }
}