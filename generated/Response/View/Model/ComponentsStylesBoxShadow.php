<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStylesBoxShadow
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
     * Color type
     *
     * @var int
     */
    protected $color;
    /**
     * The blur radius
     *
     * @var float
     */
    protected $blurRadius = 0;
    /**
     * The spread radius
     *
     * @var float
     */
    protected $spreadRadius = 0;
    /**
     * Element of type Offset
     *
     * @var ComponentsStylesOffset
     */
    protected $offset;
    /**
     * Color type
     *
     * @return int
     */
    public function getColor() : int
    {
        return $this->color;
    }
    /**
     * Color type
     *
     * @param int $color
     *
     * @return self
     */
    public function setColor(int $color) : self
    {
        $this->initialized['color'] = true;
        $this->color = $color;
        return $this;
    }
    /**
     * The blur radius
     *
     * @return float
     */
    public function getBlurRadius() : float
    {
        return $this->blurRadius;
    }
    /**
     * The blur radius
     *
     * @param float $blurRadius
     *
     * @return self
     */
    public function setBlurRadius(float $blurRadius) : self
    {
        $this->initialized['blurRadius'] = true;
        $this->blurRadius = $blurRadius;
        return $this;
    }
    /**
     * The spread radius
     *
     * @return float
     */
    public function getSpreadRadius() : float
    {
        return $this->spreadRadius;
    }
    /**
     * The spread radius
     *
     * @param float $spreadRadius
     *
     * @return self
     */
    public function setSpreadRadius(float $spreadRadius) : self
    {
        $this->initialized['spreadRadius'] = true;
        $this->spreadRadius = $spreadRadius;
        return $this;
    }
    /**
     * Element of type Offset
     *
     * @return ComponentsStylesOffset
     */
    public function getOffset() : ComponentsStylesOffset
    {
        return $this->offset;
    }
    /**
     * Element of type Offset
     *
     * @param ComponentsStylesOffset $offset
     *
     * @return self
     */
    public function setOffset(ComponentsStylesOffset $offset) : self
    {
        $this->initialized['offset'] = true;
        $this->offset = $offset;
        return $this;
    }
}