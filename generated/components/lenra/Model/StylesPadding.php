<?php

namespace Lenra\App\Components\Lenra\Model;

class StylesPadding
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
    protected $top = 0;
    /**
     * 
     *
     * @var float
     */
    protected $left = 0;
    /**
     * 
     *
     * @var float
     */
    protected $bottom = 0;
    /**
     * 
     *
     * @var float
     */
    protected $right = 0;
    /**
     * 
     *
     * @return float
     */
    public function getTop() : float
    {
        return $this->top;
    }
    /**
     * 
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
     * 
     *
     * @return float
     */
    public function getLeft() : float
    {
        return $this->left;
    }
    /**
     * 
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
     * 
     *
     * @return float
     */
    public function getBottom() : float
    {
        return $this->bottom;
    }
    /**
     * 
     *
     * @param float $bottom
     *
     * @return self
     */
    public function setBottom(float $bottom) : self
    {
        $this->initialized['bottom'] = true;
        $this->bottom = $bottom;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRight() : float
    {
        return $this->right;
    }
    /**
     * 
     *
     * @param float $right
     *
     * @return self
     */
    public function setRight(float $right) : self
    {
        $this->initialized['right'] = true;
        $this->right = $right;
        return $this;
    }
}