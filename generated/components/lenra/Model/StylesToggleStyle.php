<?php

namespace Lenra\App\Components\Lenra\Model;

class StylesToggleStyle
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
    protected $activeTrackColor;
    /**
     * Color type
     *
     * @var int
     */
    protected $inactiveTrackColor;
    /**
     * Color type
     *
     * @var int
     */
    protected $inactiveThumbColor;
    /**
     * Color type
     *
     * @var int
     */
    protected $hoverColor;
    /**
     * Color type
     *
     * @var int
     */
    protected $focusColor;
    /**
     * Element of type Image
     *
     * @var Image
     */
    protected $activeThumbImage;
    /**
     * Element of type Image
     *
     * @var Image
     */
    protected $inactiveThumbImage;
    /**
     * 
     *
     * @var string
     */
    protected $materialTapTargetSize;
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
    public function getActiveTrackColor() : int
    {
        return $this->activeTrackColor;
    }
    /**
     * Color type
     *
     * @param int $activeTrackColor
     *
     * @return self
     */
    public function setActiveTrackColor(int $activeTrackColor) : self
    {
        $this->initialized['activeTrackColor'] = true;
        $this->activeTrackColor = $activeTrackColor;
        return $this;
    }
    /**
     * Color type
     *
     * @return int
     */
    public function getInactiveTrackColor() : int
    {
        return $this->inactiveTrackColor;
    }
    /**
     * Color type
     *
     * @param int $inactiveTrackColor
     *
     * @return self
     */
    public function setInactiveTrackColor(int $inactiveTrackColor) : self
    {
        $this->initialized['inactiveTrackColor'] = true;
        $this->inactiveTrackColor = $inactiveTrackColor;
        return $this;
    }
    /**
     * Color type
     *
     * @return int
     */
    public function getInactiveThumbColor() : int
    {
        return $this->inactiveThumbColor;
    }
    /**
     * Color type
     *
     * @param int $inactiveThumbColor
     *
     * @return self
     */
    public function setInactiveThumbColor(int $inactiveThumbColor) : self
    {
        $this->initialized['inactiveThumbColor'] = true;
        $this->inactiveThumbColor = $inactiveThumbColor;
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
     * Element of type Image
     *
     * @return Image
     */
    public function getActiveThumbImage() : Image
    {
        return $this->activeThumbImage;
    }
    /**
     * Element of type Image
     *
     * @param Image $activeThumbImage
     *
     * @return self
     */
    public function setActiveThumbImage(Image $activeThumbImage) : self
    {
        $this->initialized['activeThumbImage'] = true;
        $this->activeThumbImage = $activeThumbImage;
        return $this;
    }
    /**
     * Element of type Image
     *
     * @return Image
     */
    public function getInactiveThumbImage() : Image
    {
        return $this->inactiveThumbImage;
    }
    /**
     * Element of type Image
     *
     * @param Image $inactiveThumbImage
     *
     * @return self
     */
    public function setInactiveThumbImage(Image $inactiveThumbImage) : self
    {
        $this->initialized['inactiveThumbImage'] = true;
        $this->inactiveThumbImage = $inactiveThumbImage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMaterialTapTargetSize() : string
    {
        return $this->materialTapTargetSize;
    }
    /**
     * 
     *
     * @param string $materialTapTargetSize
     *
     * @return self
     */
    public function setMaterialTapTargetSize(string $materialTapTargetSize) : self
    {
        $this->initialized['materialTapTargetSize'] = true;
        $this->materialTapTargetSize = $materialTapTargetSize;
        return $this;
    }
}