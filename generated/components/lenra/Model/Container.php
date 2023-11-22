<?php

namespace Lenra\App\Components\Lenra\Model;

class Container
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
     * The alignment to use.
     *
     * @var string
     */
    protected $alignment = 'center';
    /**
     * Element of type Border
     *
     * @var StylesBorder
     */
    protected $border;
    /**
     * Element of type Padding
     *
     * @var StylesPadding
     */
    protected $padding;
    /**
     * Element of type BoxConstraints
     *
     * @var StylesBoxConstraints
     */
    protected $constraints;
    /**
     * Element of type BoxDecoration
     *
     * @var StylesBoxDecoration
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
     * @return StylesBorder
     */
    public function getBorder() : StylesBorder
    {
        return $this->border;
    }
    /**
     * Element of type Border
     *
     * @param StylesBorder $border
     *
     * @return self
     */
    public function setBorder(StylesBorder $border) : self
    {
        $this->initialized['border'] = true;
        $this->border = $border;
        return $this;
    }
    /**
     * Element of type Padding
     *
     * @return StylesPadding
     */
    public function getPadding() : StylesPadding
    {
        return $this->padding;
    }
    /**
     * Element of type Padding
     *
     * @param StylesPadding $padding
     *
     * @return self
     */
    public function setPadding(StylesPadding $padding) : self
    {
        $this->initialized['padding'] = true;
        $this->padding = $padding;
        return $this;
    }
    /**
     * Element of type BoxConstraints
     *
     * @return StylesBoxConstraints
     */
    public function getConstraints() : StylesBoxConstraints
    {
        return $this->constraints;
    }
    /**
     * Element of type BoxConstraints
     *
     * @param StylesBoxConstraints $constraints
     *
     * @return self
     */
    public function setConstraints(StylesBoxConstraints $constraints) : self
    {
        $this->initialized['constraints'] = true;
        $this->constraints = $constraints;
        return $this;
    }
    /**
     * Element of type BoxDecoration
     *
     * @return StylesBoxDecoration
     */
    public function getDecoration() : StylesBoxDecoration
    {
        return $this->decoration;
    }
    /**
     * Element of type BoxDecoration
     *
     * @param StylesBoxDecoration $decoration
     *
     * @return self
     */
    public function setDecoration(StylesBoxDecoration $decoration) : self
    {
        $this->initialized['decoration'] = true;
        $this->decoration = $decoration;
        return $this;
    }
}