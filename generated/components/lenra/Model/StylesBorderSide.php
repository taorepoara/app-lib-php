<?php

namespace Lenra\App\Components\Lenra\Model;

class StylesBorderSide
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
     * The width of the Border
     *
     * @var float
     */
    protected $width = 1;
    /**
     * Color type
     *
     * @var int
     */
    protected $color;
    /**
     * The width of the Border
     *
     * @return float
     */
    public function getWidth() : float
    {
        return $this->width;
    }
    /**
     * The width of the Border
     *
     * @param float $width
     *
     * @return self
     */
    public function setWidth(float $width) : self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
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
}