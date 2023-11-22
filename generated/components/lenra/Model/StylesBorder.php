<?php

namespace Lenra\App\Components\Lenra\Model;

class StylesBorder
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
     * Element of type BorderSide
     *
     * @var StylesBorderSide
     */
    protected $top;
    /**
     * Element of type BorderSide
     *
     * @var StylesBorderSide
     */
    protected $left;
    /**
     * Element of type BorderSide
     *
     * @var StylesBorderSide
     */
    protected $bottom;
    /**
     * Element of type BorderSide
     *
     * @var StylesBorderSide
     */
    protected $right;
    /**
     * Element of type BorderSide
     *
     * @return StylesBorderSide
     */
    public function getTop() : StylesBorderSide
    {
        return $this->top;
    }
    /**
     * Element of type BorderSide
     *
     * @param StylesBorderSide $top
     *
     * @return self
     */
    public function setTop(StylesBorderSide $top) : self
    {
        $this->initialized['top'] = true;
        $this->top = $top;
        return $this;
    }
    /**
     * Element of type BorderSide
     *
     * @return StylesBorderSide
     */
    public function getLeft() : StylesBorderSide
    {
        return $this->left;
    }
    /**
     * Element of type BorderSide
     *
     * @param StylesBorderSide $left
     *
     * @return self
     */
    public function setLeft(StylesBorderSide $left) : self
    {
        $this->initialized['left'] = true;
        $this->left = $left;
        return $this;
    }
    /**
     * Element of type BorderSide
     *
     * @return StylesBorderSide
     */
    public function getBottom() : StylesBorderSide
    {
        return $this->bottom;
    }
    /**
     * Element of type BorderSide
     *
     * @param StylesBorderSide $bottom
     *
     * @return self
     */
    public function setBottom(StylesBorderSide $bottom) : self
    {
        $this->initialized['bottom'] = true;
        $this->bottom = $bottom;
        return $this;
    }
    /**
     * Element of type BorderSide
     *
     * @return StylesBorderSide
     */
    public function getRight() : StylesBorderSide
    {
        return $this->right;
    }
    /**
     * Element of type BorderSide
     *
     * @param StylesBorderSide $right
     *
     * @return self
     */
    public function setRight(StylesBorderSide $right) : self
    {
        $this->initialized['right'] = true;
        $this->right = $right;
        return $this;
    }
}