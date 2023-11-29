<?php

namespace Lenra\App\Response\View\Model;

class ComponentsFlex
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
     * The children
     *
     * @var ComponentsActionable[]|ComponentsButton[]|ComponentsCarousel[]|ComponentsCheckbox[]|ComponentsContainer[]|ComponentsDropdownButton[]|ComponentsFlex[]|ComponentsFlexible[]|ComponentsForm[]|ComponentsIcon[]|ComponentsImage[]|ComponentsMenu[]|ComponentsMenuItem[]|ComponentsOverlayEntry[]|ComponentsRadio[]|ComponentsSlider[]|ComponentsStack[]|ComponentsStatusSticker[]|ComponentsText[]|ComponentsTextField[]|ComponentsToggle[]|ComponentsView[]|ComponentsWrap[]
     */
    protected $children;
    /**
     * The direction of the component (horizontal/vertical)
     *
     * @var string
     */
    protected $direction = 'horizontal';
    /**
     * The alignment along the main axis
     *
     * @var string
     */
    protected $mainAxisAlignment = 'start';
    /**
     * The alignment along the cross axis
     *
     * @var string
     */
    protected $crossAxisAlignment = 'start';
    /**
     * The multiplier of the base size for the minimal spacing
     *
     * @var float
     */
    protected $spacing = 0;
    /**
     * if true the flex will fill the main axis. Otherwise it will take the children size.
     *
     * @var bool
     */
    protected $fillParent = false;
    /**
     * If true the flex will scroll if there is too many item in the Main Axis.
     *
     * @var bool
     */
    protected $scroll = false;
    /**
     * Element of type Padding
     *
     * @var ComponentsStylesPadding
     */
    protected $padding;
    /**
     * In which direction the elements should be placed following the horizontal axis.
     *
     * @var string
     */
    protected $horizontalDirection = 'ltr';
    /**
     * How the objects should be aligned following the vertical axis.
     *
     * @var string
     */
    protected $verticalDirection = 'down';
    /**
     * A horizontal line used for aligning text.
     *
     * @var string
     */
    protected $textBaseline = 'alphabetic';
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
     * The children
     *
     * @return ComponentsActionable[]|ComponentsButton[]|ComponentsCarousel[]|ComponentsCheckbox[]|ComponentsContainer[]|ComponentsDropdownButton[]|ComponentsFlex[]|ComponentsFlexible[]|ComponentsForm[]|ComponentsIcon[]|ComponentsImage[]|ComponentsMenu[]|ComponentsMenuItem[]|ComponentsOverlayEntry[]|ComponentsRadio[]|ComponentsSlider[]|ComponentsStack[]|ComponentsStatusSticker[]|ComponentsText[]|ComponentsTextField[]|ComponentsToggle[]|ComponentsView[]|ComponentsWrap[]
     */
    public function getChildren() : array
    {
        return $this->children;
    }
    /**
     * The children
     *
     * @param ComponentsActionable[]|ComponentsButton[]|ComponentsCarousel[]|ComponentsCheckbox[]|ComponentsContainer[]|ComponentsDropdownButton[]|ComponentsFlex[]|ComponentsFlexible[]|ComponentsForm[]|ComponentsIcon[]|ComponentsImage[]|ComponentsMenu[]|ComponentsMenuItem[]|ComponentsOverlayEntry[]|ComponentsRadio[]|ComponentsSlider[]|ComponentsStack[]|ComponentsStatusSticker[]|ComponentsText[]|ComponentsTextField[]|ComponentsToggle[]|ComponentsView[]|ComponentsWrap[] $children
     *
     * @return self
     */
    public function setChildren(array $children) : self
    {
        $this->initialized['children'] = true;
        $this->children = $children;
        return $this;
    }
    /**
     * The direction of the component (horizontal/vertical)
     *
     * @return string
     */
    public function getDirection() : string
    {
        return $this->direction;
    }
    /**
     * The direction of the component (horizontal/vertical)
     *
     * @param string $direction
     *
     * @return self
     */
    public function setDirection(string $direction) : self
    {
        $this->initialized['direction'] = true;
        $this->direction = $direction;
        return $this;
    }
    /**
     * The alignment along the main axis
     *
     * @return string
     */
    public function getMainAxisAlignment() : string
    {
        return $this->mainAxisAlignment;
    }
    /**
     * The alignment along the main axis
     *
     * @param string $mainAxisAlignment
     *
     * @return self
     */
    public function setMainAxisAlignment(string $mainAxisAlignment) : self
    {
        $this->initialized['mainAxisAlignment'] = true;
        $this->mainAxisAlignment = $mainAxisAlignment;
        return $this;
    }
    /**
     * The alignment along the cross axis
     *
     * @return string
     */
    public function getCrossAxisAlignment() : string
    {
        return $this->crossAxisAlignment;
    }
    /**
     * The alignment along the cross axis
     *
     * @param string $crossAxisAlignment
     *
     * @return self
     */
    public function setCrossAxisAlignment(string $crossAxisAlignment) : self
    {
        $this->initialized['crossAxisAlignment'] = true;
        $this->crossAxisAlignment = $crossAxisAlignment;
        return $this;
    }
    /**
     * The multiplier of the base size for the minimal spacing
     *
     * @return float
     */
    public function getSpacing() : float
    {
        return $this->spacing;
    }
    /**
     * The multiplier of the base size for the minimal spacing
     *
     * @param float $spacing
     *
     * @return self
     */
    public function setSpacing(float $spacing) : self
    {
        $this->initialized['spacing'] = true;
        $this->spacing = $spacing;
        return $this;
    }
    /**
     * if true the flex will fill the main axis. Otherwise it will take the children size.
     *
     * @return bool
     */
    public function getFillParent() : bool
    {
        return $this->fillParent;
    }
    /**
     * if true the flex will fill the main axis. Otherwise it will take the children size.
     *
     * @param bool $fillParent
     *
     * @return self
     */
    public function setFillParent(bool $fillParent) : self
    {
        $this->initialized['fillParent'] = true;
        $this->fillParent = $fillParent;
        return $this;
    }
    /**
     * If true the flex will scroll if there is too many item in the Main Axis.
     *
     * @return bool
     */
    public function getScroll() : bool
    {
        return $this->scroll;
    }
    /**
     * If true the flex will scroll if there is too many item in the Main Axis.
     *
     * @param bool $scroll
     *
     * @return self
     */
    public function setScroll(bool $scroll) : self
    {
        $this->initialized['scroll'] = true;
        $this->scroll = $scroll;
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
     * In which direction the elements should be placed following the horizontal axis.
     *
     * @return string
     */
    public function getHorizontalDirection() : string
    {
        return $this->horizontalDirection;
    }
    /**
     * In which direction the elements should be placed following the horizontal axis.
     *
     * @param string $horizontalDirection
     *
     * @return self
     */
    public function setHorizontalDirection(string $horizontalDirection) : self
    {
        $this->initialized['horizontalDirection'] = true;
        $this->horizontalDirection = $horizontalDirection;
        return $this;
    }
    /**
     * How the objects should be aligned following the vertical axis.
     *
     * @return string
     */
    public function getVerticalDirection() : string
    {
        return $this->verticalDirection;
    }
    /**
     * How the objects should be aligned following the vertical axis.
     *
     * @param string $verticalDirection
     *
     * @return self
     */
    public function setVerticalDirection(string $verticalDirection) : self
    {
        $this->initialized['verticalDirection'] = true;
        $this->verticalDirection = $verticalDirection;
        return $this;
    }
    /**
     * A horizontal line used for aligning text.
     *
     * @return string
     */
    public function getTextBaseline() : string
    {
        return $this->textBaseline;
    }
    /**
     * A horizontal line used for aligning text.
     *
     * @param string $textBaseline
     *
     * @return self
     */
    public function setTextBaseline(string $textBaseline) : self
    {
        $this->initialized['textBaseline'] = true;
        $this->textBaseline = $textBaseline;
        return $this;
    }
}