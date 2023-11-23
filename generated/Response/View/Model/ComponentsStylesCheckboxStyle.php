<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStylesCheckboxStyle
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
    protected $checkColor;
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
    protected $hoverColor;
    /**
     * The splash radius.
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
     * Element of type OutlinedBorder
     *
     * @var ComponentsStylesOutlinedBorder
     */
    protected $shape;
    /**
     * Element of type BorderSide
     *
     * @var ComponentsStylesBorderSide
     */
    protected $side;
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
    public function getCheckColor() : int
    {
        return $this->checkColor;
    }
    /**
     * Color type
     *
     * @param int $checkColor
     *
     * @return self
     */
    public function setCheckColor(int $checkColor) : self
    {
        $this->initialized['checkColor'] = true;
        $this->checkColor = $checkColor;
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
    public function getHoverColor() : int
    {
        return $this->hoverColor;
    }
    /**
     * Color type
     *
     * @param int $hoverColor
     *
     * @return self
     */
    public function setHoverColor(int $hoverColor) : self
    {
        $this->initialized['hoverColor'] = true;
        $this->hoverColor = $hoverColor;
        return $this;
    }
    /**
     * The splash radius.
     *
     * @return float
     */
    public function getSplashRadius() : float
    {
        return $this->splashRadius;
    }
    /**
     * The splash radius.
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
    /**
     * Element of type OutlinedBorder
     *
     * @return ComponentsStylesOutlinedBorder
     */
    public function getShape() : ComponentsStylesOutlinedBorder
    {
        return $this->shape;
    }
    /**
     * Element of type OutlinedBorder
     *
     * @param ComponentsStylesOutlinedBorder $shape
     *
     * @return self
     */
    public function setShape(ComponentsStylesOutlinedBorder $shape) : self
    {
        $this->initialized['shape'] = true;
        $this->shape = $shape;
        return $this;
    }
    /**
     * Element of type BorderSide
     *
     * @return ComponentsStylesBorderSide
     */
    public function getSide() : ComponentsStylesBorderSide
    {
        return $this->side;
    }
    /**
     * Element of type BorderSide
     *
     * @param ComponentsStylesBorderSide $side
     *
     * @return self
     */
    public function setSide(ComponentsStylesBorderSide $side) : self
    {
        $this->initialized['side'] = true;
        $this->side = $side;
        return $this;
    }
}