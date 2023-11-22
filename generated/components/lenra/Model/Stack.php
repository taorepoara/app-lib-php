<?php

namespace Lenra\App\Components\Lenra\Model;

class Stack
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
     * The children of the Stack.
     *
     * @var Actionable[]|Button[]|Carousel[]|Checkbox[]|Container[]|DropdownButton[]|Flex[]|Flexible[]|Form[]|Icon[]|Image[]|Menu[]|MenuItem[]|OverlayEntry[]|Radio[]|Slider[]|Stack[]|StatusSticker[]|Text[]|Textfield[]|Toggle[]|View[]|Wrap[]
     */
    protected $children;
    /**
     * The alignment to use.
     *
     * @var string
     */
    protected $alignment = 'center';
    /**
     * The StackFit enum.
     *
     * @var string
     */
    protected $fit = 'passthrough';
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
     * The children of the Stack.
     *
     * @return Actionable[]|Button[]|Carousel[]|Checkbox[]|Container[]|DropdownButton[]|Flex[]|Flexible[]|Form[]|Icon[]|Image[]|Menu[]|MenuItem[]|OverlayEntry[]|Radio[]|Slider[]|Stack[]|StatusSticker[]|Text[]|Textfield[]|Toggle[]|View[]|Wrap[]
     */
    public function getChildren() : array
    {
        return $this->children;
    }
    /**
     * The children of the Stack.
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
     * The StackFit enum.
     *
     * @return string
     */
    public function getFit() : string
    {
        return $this->fit;
    }
    /**
     * The StackFit enum.
     *
     * @param string $fit
     *
     * @return self
     */
    public function setFit(string $fit) : self
    {
        $this->initialized['fit'] = true;
        $this->fit = $fit;
        return $this;
    }
}