<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStylesBorder
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
     * @var ComponentsStylesBorderSide
     */
    protected $top;
    /**
     * Element of type BorderSide
     *
     * @var ComponentsStylesBorderSide
     */
    protected $left;
    /**
     * Element of type BorderSide
     *
     * @var ComponentsStylesBorderSide
     */
    protected $bottom;
    /**
     * Element of type BorderSide
     *
     * @var ComponentsStylesBorderSide
     */
    protected $right;
    /**
     * Element of type BorderSide
     *
     * @return ComponentsStylesBorderSide
     */
    public function getTop() : ComponentsStylesBorderSide
    {
        return $this->top;
    }
    /**
     * Element of type BorderSide
     *
     * @param ComponentsStylesBorderSide $top
     *
     * @return self
     */
    public function setTop(ComponentsStylesBorderSide $top) : self
    {
        $this->initialized['top'] = true;
        $this->top = $top;
        return $this;
    }
    /**
     * Element of type BorderSide
     *
     * @return ComponentsStylesBorderSide
     */
    public function getLeft() : ComponentsStylesBorderSide
    {
        return $this->left;
    }
    /**
     * Element of type BorderSide
     *
     * @param ComponentsStylesBorderSide $left
     *
     * @return self
     */
    public function setLeft(ComponentsStylesBorderSide $left) : self
    {
        $this->initialized['left'] = true;
        $this->left = $left;
        return $this;
    }
    /**
     * Element of type BorderSide
     *
     * @return ComponentsStylesBorderSide
     */
    public function getBottom() : ComponentsStylesBorderSide
    {
        return $this->bottom;
    }
    /**
     * Element of type BorderSide
     *
     * @param ComponentsStylesBorderSide $bottom
     *
     * @return self
     */
    public function setBottom(ComponentsStylesBorderSide $bottom) : self
    {
        $this->initialized['bottom'] = true;
        $this->bottom = $bottom;
        return $this;
    }
    /**
     * Element of type BorderSide
     *
     * @return ComponentsStylesBorderSide
     */
    public function getRight() : ComponentsStylesBorderSide
    {
        return $this->right;
    }
    /**
     * Element of type BorderSide
     *
     * @param ComponentsStylesBorderSide $right
     *
     * @return self
     */
    public function setRight(ComponentsStylesBorderSide $right) : self
    {
        $this->initialized['right'] = true;
        $this->right = $right;
        return $this;
    }
}