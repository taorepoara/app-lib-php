<?php

namespace Lenra\App\Components\Lenra\Model;

class Carousel
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
     * @var Actionable[]|Button[]|Carousel[]|Checkbox[]|Container[]|DropdownButton[]|Flex[]|Flexible[]|Form[]|Icon[]|Image[]|Menu[]|MenuItem[]|OverlayEntry[]|Radio[]|Slider[]|Stack[]|StatusSticker[]|Text[]|Textfield[]|Toggle[]|View[]|Wrap[]
     */
    protected $children;
    /**
     * Element of type CarouselOptions
     *
     * @var StylesCarouselOptions
     */
    protected $options;
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
     * @return Actionable[]|Button[]|Carousel[]|Checkbox[]|Container[]|DropdownButton[]|Flex[]|Flexible[]|Form[]|Icon[]|Image[]|Menu[]|MenuItem[]|OverlayEntry[]|Radio[]|Slider[]|Stack[]|StatusSticker[]|Text[]|Textfield[]|Toggle[]|View[]|Wrap[]
     */
    public function getChildren() : array
    {
        return $this->children;
    }
    /**
     * The children
     *
     * @param Actionable[]|Button[]|Carousel[]|Checkbox[]|Container[]|DropdownButton[]|Flex[]|Flexible[]|Form[]|Icon[]|Image[]|Menu[]|MenuItem[]|OverlayEntry[]|Radio[]|Slider[]|Stack[]|StatusSticker[]|Text[]|Textfield[]|Toggle[]|View[]|Wrap[] $children
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
     * Element of type CarouselOptions
     *
     * @return StylesCarouselOptions
     */
    public function getOptions() : StylesCarouselOptions
    {
        return $this->options;
    }
    /**
     * Element of type CarouselOptions
     *
     * @param StylesCarouselOptions $options
     *
     * @return self
     */
    public function setOptions(StylesCarouselOptions $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}