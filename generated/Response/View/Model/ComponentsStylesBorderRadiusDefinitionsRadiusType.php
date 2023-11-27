<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStylesBorderRadiusDefinitionsRadiusType
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
     * 
     *
     * @var float
     */
    protected $x = 0;
    /**
     * 
     *
     * @var float
     */
    protected $y = 0;
    /**
     * 
     *
     * @return float
     */
    public function getX() : float
    {
        return $this->x;
    }
    /**
     * 
     *
     * @param float $x
     *
     * @return self
     */
    public function setX(float $x) : self
    {
        $this->initialized['x'] = true;
        $this->x = $x;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getY() : float
    {
        return $this->y;
    }
    /**
     * 
     *
     * @param float $y
     *
     * @return self
     */
    public function setY(float $y) : self
    {
        $this->initialized['y'] = true;
        $this->y = $y;
        return $this;
    }
}