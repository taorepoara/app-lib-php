<?php

namespace Lenra\App\Response\View\Model;

class ComponentsWrap
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
     * The children of the wrap.
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
     * How the objects in the Wrap should be aligned on the CrossAxis.
     *
     * @var string
     */
    protected $crossAxisAlignment = 'start';
    /**
     * The spacing between each child of the wrap.
     *
     * @var float
     */
    protected $spacing = 0;
    /**
     * The spacing between each run of the wrap.
     *
     * @var float
     */
    protected $runSpacing = 0;
    /**
     * How the objects in the Wrap should be aligned.
     *
     * @var string
     */
    protected $alignment = 'start';
    /**
     * How the objects in the Wrap should be aligned.
     *
     * @var string
     */
    protected $runAlignment = 'start';
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
     * The children of the wrap.
     *
     * @return ComponentsActionable[]|ComponentsButton[]|ComponentsCarousel[]|ComponentsCheckbox[]|ComponentsContainer[]|ComponentsDropdownButton[]|ComponentsFlex[]|ComponentsFlexible[]|ComponentsForm[]|ComponentsIcon[]|ComponentsImage[]|ComponentsMenu[]|ComponentsMenuItem[]|ComponentsOverlayEntry[]|ComponentsRadio[]|ComponentsSlider[]|ComponentsStack[]|ComponentsStatusSticker[]|ComponentsText[]|ComponentsTextField[]|ComponentsToggle[]|ComponentsView[]|ComponentsWrap[]
     */
    public function getChildren() : array
    {
        return $this->children;
    }
    /**
     * The children of the wrap.
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
     * How the objects in the Wrap should be aligned on the CrossAxis.
     *
     * @return string
     */
    public function getCrossAxisAlignment() : string
    {
        return $this->crossAxisAlignment;
    }
    /**
     * How the objects in the Wrap should be aligned on the CrossAxis.
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
     * The spacing between each child of the wrap.
     *
     * @return float
     */
    public function getSpacing() : float
    {
        return $this->spacing;
    }
    /**
     * The spacing between each child of the wrap.
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
     * The spacing between each run of the wrap.
     *
     * @return float
     */
    public function getRunSpacing() : float
    {
        return $this->runSpacing;
    }
    /**
     * The spacing between each run of the wrap.
     *
     * @param float $runSpacing
     *
     * @return self
     */
    public function setRunSpacing(float $runSpacing) : self
    {
        $this->initialized['runSpacing'] = true;
        $this->runSpacing = $runSpacing;
        return $this;
    }
    /**
     * How the objects in the Wrap should be aligned.
     *
     * @return string
     */
    public function getAlignment() : string
    {
        return $this->alignment;
    }
    /**
     * How the objects in the Wrap should be aligned.
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
     * How the objects in the Wrap should be aligned.
     *
     * @return string
     */
    public function getRunAlignment() : string
    {
        return $this->runAlignment;
    }
    /**
     * How the objects in the Wrap should be aligned.
     *
     * @param string $runAlignment
     *
     * @return self
     */
    public function setRunAlignment(string $runAlignment) : self
    {
        $this->initialized['runAlignment'] = true;
        $this->runAlignment = $runAlignment;
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
}