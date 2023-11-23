<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStylesOffset
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
     * The Offset along the x axis
     *
     * @var float
     */
    protected $dx = 0;
    /**
     * The Offset along the y axis
     *
     * @var float
     */
    protected $dy = 0;
    /**
     * The Offset along the x axis
     *
     * @return float
     */
    public function getDx() : float
    {
        return $this->dx;
    }
    /**
     * The Offset along the x axis
     *
     * @param float $dx
     *
     * @return self
     */
    public function setDx(float $dx) : self
    {
        $this->initialized['dx'] = true;
        $this->dx = $dx;
        return $this;
    }
    /**
     * The Offset along the y axis
     *
     * @return float
     */
    public function getDy() : float
    {
        return $this->dy;
    }
    /**
     * The Offset along the y axis
     *
     * @param float $dy
     *
     * @return self
     */
    public function setDy(float $dy) : self
    {
        $this->initialized['dy'] = true;
        $this->dy = $dy;
        return $this;
    }
}