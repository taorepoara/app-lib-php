<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStylesRect
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
     * The left position of the rectangle.
     *
     * @var float
     */
    protected $left;
    /**
     * The top position of the rectangle.
     *
     * @var float
     */
    protected $top;
    /**
     * The width of the rectangle.
     *
     * @var float
     */
    protected $width;
    /**
     * The height of the rectangle.
     *
     * @var float
     */
    protected $height;
    /**
     * The left position of the rectangle.
     *
     * @return float
     */
    public function getLeft() : float
    {
        return $this->left;
    }
    /**
     * The left position of the rectangle.
     *
     * @param float $left
     *
     * @return self
     */
    public function setLeft(float $left) : self
    {
        $this->initialized['left'] = true;
        $this->left = $left;
        return $this;
    }
    /**
     * The top position of the rectangle.
     *
     * @return float
     */
    public function getTop() : float
    {
        return $this->top;
    }
    /**
     * The top position of the rectangle.
     *
     * @param float $top
     *
     * @return self
     */
    public function setTop(float $top) : self
    {
        $this->initialized['top'] = true;
        $this->top = $top;
        return $this;
    }
    /**
     * The width of the rectangle.
     *
     * @return float
     */
    public function getWidth() : float
    {
        return $this->width;
    }
    /**
     * The width of the rectangle.
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
     * The height of the rectangle.
     *
     * @return float
     */
    public function getHeight() : float
    {
        return $this->height;
    }
    /**
     * The height of the rectangle.
     *
     * @param float $height
     *
     * @return self
     */
    public function setHeight(float $height) : self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
}