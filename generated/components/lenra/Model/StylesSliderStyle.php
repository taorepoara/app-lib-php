<?php

namespace Lenra\App\Components\Lenra\Model;

class StylesSliderStyle
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
    protected $activeColor;
    /**
     * Color type
     *
     * @var int
     */
    protected $inactiveColor;
    /**
     * Color type
     *
     * @var int
     */
    protected $thumbColor;
    /**
     * Color type
     *
     * @return int
     */
    public function getActiveColor() : int
    {
        return $this->activeColor;
    }
    /**
     * Color type
     *
     * @param int $activeColor
     *
     * @return self
     */
    public function setActiveColor(int $activeColor) : self
    {
        $this->initialized['activeColor'] = true;
        $this->activeColor = $activeColor;
        return $this;
    }
    /**
     * Color type
     *
     * @return int
     */
    public function getInactiveColor() : int
    {
        return $this->inactiveColor;
    }
    /**
     * Color type
     *
     * @param int $inactiveColor
     *
     * @return self
     */
    public function setInactiveColor(int $inactiveColor) : self
    {
        $this->initialized['inactiveColor'] = true;
        $this->inactiveColor = $inactiveColor;
        return $this;
    }
    /**
     * Color type
     *
     * @return int
     */
    public function getThumbColor() : int
    {
        return $this->thumbColor;
    }
    /**
     * Color type
     *
     * @param int $thumbColor
     *
     * @return self
     */
    public function setThumbColor(int $thumbColor) : self
    {
        $this->initialized['thumbColor'] = true;
        $this->thumbColor = $thumbColor;
        return $this;
    }
}