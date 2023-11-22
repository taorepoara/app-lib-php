<?php

namespace Lenra\App\Components\Lenra\Model;

class StylesRadioStyle
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
    protected $focusColor;
    /**
     * Color type
     *
     * @var int
     */
    protected $hovercolor;
    /**
     * Color type
     *
     * @var int
     */
    protected $unselectedColor;
    /**
     * The splash radius of the radio button
     *
     * @var float
     */
    protected $splashRadius;
    /**
     * The visual density of UI components.
     *
     * @var string
     */
    protected $visualDensity = 'standard';
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
    public function getFocusColor() : int
    {
        return $this->focusColor;
    }
    /**
     * Color type
     *
     * @param int $focusColor
     *
     * @return self
     */
    public function setFocusColor(int $focusColor) : self
    {
        $this->initialized['focusColor'] = true;
        $this->focusColor = $focusColor;
        return $this;
    }
    /**
     * Color type
     *
     * @return int
     */
    public function getHovercolor() : int
    {
        return $this->hovercolor;
    }
    /**
     * Color type
     *
     * @param int $hovercolor
     *
     * @return self
     */
    public function setHovercolor(int $hovercolor) : self
    {
        $this->initialized['hovercolor'] = true;
        $this->hovercolor = $hovercolor;
        return $this;
    }
    /**
     * Color type
     *
     * @return int
     */
    public function getUnselectedColor() : int
    {
        return $this->unselectedColor;
    }
    /**
     * Color type
     *
     * @param int $unselectedColor
     *
     * @return self
     */
    public function setUnselectedColor(int $unselectedColor) : self
    {
        $this->initialized['unselectedColor'] = true;
        $this->unselectedColor = $unselectedColor;
        return $this;
    }
    /**
     * The splash radius of the radio button
     *
     * @return float
     */
    public function getSplashRadius() : float
    {
        return $this->splashRadius;
    }
    /**
     * The splash radius of the radio button
     *
     * @param float $splashRadius
     *
     * @return self
     */
    public function setSplashRadius(float $splashRadius) : self
    {
        $this->initialized['splashRadius'] = true;
        $this->splashRadius = $splashRadius;
        return $this;
    }
    /**
     * The visual density of UI components.
     *
     * @return string
     */
    public function getVisualDensity() : string
    {
        return $this->visualDensity;
    }
    /**
     * The visual density of UI components.
     *
     * @param string $visualDensity
     *
     * @return self
     */
    public function setVisualDensity(string $visualDensity) : self
    {
        $this->initialized['visualDensity'] = true;
        $this->visualDensity = $visualDensity;
        return $this;
    }
}