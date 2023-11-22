<?php

namespace Lenra\App\Components\Lenra\Model;

class Flexible
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
     * How a flexible child is inscribed into the available space.
     *
     * @var int
     */
    protected $flex = 1;
    /**
     * How a flexible child is inscribed into the available space.
     *
     * @var string
     */
    protected $fit = 'loose';
    /**
     * Any component
     *
     * @var Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap
     */
    protected $child;
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
     * How a flexible child is inscribed into the available space.
     *
     * @return int
     */
    public function getFlex() : int
    {
        return $this->flex;
    }
    /**
     * How a flexible child is inscribed into the available space.
     *
     * @param int $flex
     *
     * @return self
     */
    public function setFlex(int $flex) : self
    {
        $this->initialized['flex'] = true;
        $this->flex = $flex;
        return $this;
    }
    /**
     * How a flexible child is inscribed into the available space.
     *
     * @return string
     */
    public function getFit() : string
    {
        return $this->fit;
    }
    /**
     * How a flexible child is inscribed into the available space.
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
}