<?php

namespace Lenra\App\Response\View\Model;

class ComponentsOverlayEntry
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
     * Whether this entry must be included in the tree even if there is a fully opaque entry above it.
     *
     * @var bool
     */
    protected $maintainState = false;
    /**
     * Whether this entry occludes the entire overlay.
     *
     * @var bool
     */
    protected $opaque = false;
    /**
     * Whether this entry should be shown.
     *
     * @var bool
     */
    protected $showOverlay = false;
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
     * Whether this entry must be included in the tree even if there is a fully opaque entry above it.
     *
     * @return bool
     */
    public function getMaintainState() : bool
    {
        return $this->maintainState;
    }
    /**
     * Whether this entry must be included in the tree even if there is a fully opaque entry above it.
     *
     * @param bool $maintainState
     *
     * @return self
     */
    public function setMaintainState(bool $maintainState) : self
    {
        $this->initialized['maintainState'] = true;
        $this->maintainState = $maintainState;
        return $this;
    }
    /**
     * Whether this entry occludes the entire overlay.
     *
     * @return bool
     */
    public function getOpaque() : bool
    {
        return $this->opaque;
    }
    /**
     * Whether this entry occludes the entire overlay.
     *
     * @param bool $opaque
     *
     * @return self
     */
    public function setOpaque(bool $opaque) : self
    {
        $this->initialized['opaque'] = true;
        $this->opaque = $opaque;
        return $this;
    }
    /**
     * Whether this entry should be shown.
     *
     * @return bool
     */
    public function getShowOverlay() : bool
    {
        return $this->showOverlay;
    }
    /**
     * Whether this entry should be shown.
     *
     * @param bool $showOverlay
     *
     * @return self
     */
    public function setShowOverlay(bool $showOverlay) : self
    {
        $this->initialized['showOverlay'] = true;
        $this->showOverlay = $showOverlay;
        return $this;
    }
}