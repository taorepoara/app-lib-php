<?php

namespace Lenra\App\Components\Lenra\Model;

class Menu
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
     * The menu items
     *
     * @var Actionable[]|Button[]|Carousel[]|Checkbox[]|Container[]|DropdownButton[]|Flex[]|Flexible[]|Form[]|Icon[]|Image[]|Menu[]|MenuItem[]|OverlayEntry[]|Radio[]|Slider[]|Stack[]|StatusSticker[]|Text[]|Textfield[]|Toggle[]|View[]|Wrap[]
     */
    protected $children;
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
     * The menu items
     *
     * @return Actionable[]|Button[]|Carousel[]|Checkbox[]|Container[]|DropdownButton[]|Flex[]|Flexible[]|Form[]|Icon[]|Image[]|Menu[]|MenuItem[]|OverlayEntry[]|Radio[]|Slider[]|Stack[]|StatusSticker[]|Text[]|Textfield[]|Toggle[]|View[]|Wrap[]
     */
    public function getChildren() : array
    {
        return $this->children;
    }
    /**
     * The menu items
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
}