<?php

namespace Lenra\App\Response\View\Model;

class ComponentsContainer
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
     * The alignment to use.
     *
     * @var string
     */
    protected $alignment = 'center';
    /**
     * Element of type Border
     *
     * @var ComponentsStylesBorder
     */
    protected $border;
    /**
     * Element of type Padding
     *
     * @var ComponentsStylesPadding
     */
    protected $padding;
    /**
     * Element of type BoxConstraints
     *
     * @var ComponentsStylesBoxConstraints
     */
    protected $constraints;
    /**
     * Element of type BoxDecoration
     *
     * @var ComponentsStylesBoxDecoration
     */
    protected $decoration;
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
     * The alignment to use.
     *
     * @return string
     */
    public function getAlignment() : string
    {
        return $this->alignment;
    }
    /**
     * The alignment to use.
     *
     * @param string $alignment
     *
     * @return self
     */
    public function setAlignment(string $alignment) : self
    {
        $this->initialized['alignment'] = true;
        $this->alignment = $alignment;
        return $this;
    }
    /**
     * Element of type Border
     *
     * @return ComponentsStylesBorder
     */
    public function getBorder() : ComponentsStylesBorder
    {
        return $this->border;
    }
    /**
     * Element of type Border
     *
     * @param ComponentsStylesBorder $border
     *
     * @return self
     */
    public function setBorder(ComponentsStylesBorder $border) : self
    {
        $this->initialized['border'] = true;
        $this->border = $border;
        return $this;
    }
    /**
     * Element of type Padding
     *
     * @return ComponentsStylesPadding
     */
    public function getPadding() : ComponentsStylesPadding
    {
        return $this->padding;
    }
    /**
     * Element of type Padding
     *
     * @param ComponentsStylesPadding $padding
     *
     * @return self
     */
    public function setPadding(ComponentsStylesPadding $padding) : self
    {
        $this->initialized['padding'] = true;
        $this->padding = $padding;
        return $this;
    }
    /**
     * Element of type BoxConstraints
     *
     * @return ComponentsStylesBoxConstraints
     */
    public function getConstraints() : ComponentsStylesBoxConstraints
    {
        return $this->constraints;
    }
    /**
     * Element of type BoxConstraints
     *
     * @param ComponentsStylesBoxConstraints $constraints
     *
     * @return self
     */
    public function setConstraints(ComponentsStylesBoxConstraints $constraints) : self
    {
        $this->initialized['constraints'] = true;
        $this->constraints = $constraints;
        return $this;
    }
    /**
     * Element of type BoxDecoration
     *
     * @return ComponentsStylesBoxDecoration
     */
    public function getDecoration() : ComponentsStylesBoxDecoration
    {
        return $this->decoration;
    }
    /**
     * Element of type BoxDecoration
     *
     * @param ComponentsStylesBoxDecoration $decoration
     *
     * @return self
     */
    public function setDecoration(ComponentsStylesBoxDecoration $decoration) : self
    {
        $this->initialized['decoration'] = true;
        $this->decoration = $decoration;
        return $this;
    }
}