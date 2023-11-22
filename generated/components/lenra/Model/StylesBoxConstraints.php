<?php

namespace Lenra\App\Components\Lenra\Model;

class StylesBoxConstraints
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
     * The minWidth of the constraint
     *
     * @var float
     */
    protected $minWidth = 0;
    /**
     * The maxWidth of the constraint, -1 means Infinity
     *
     * @var float
     */
    protected $maxWidth = -1;
    /**
     * The minHeight of the constraint
     *
     * @var float
     */
    protected $minHeight = 0;
    /**
     * The maxHeight of the constraint, -1 means Infinity
     *
     * @var float
     */
    protected $maxHeight = -1;
    /**
     * The minWidth of the constraint
     *
     * @return float
     */
    public function getMinWidth() : float
    {
        return $this->minWidth;
    }
    /**
     * The minWidth of the constraint
     *
     * @param float $minWidth
     *
     * @return self
     */
    public function setMinWidth(float $minWidth) : self
    {
        $this->initialized['minWidth'] = true;
        $this->minWidth = $minWidth;
        return $this;
    }
    /**
     * The maxWidth of the constraint, -1 means Infinity
     *
     * @return float
     */
    public function getMaxWidth() : float
    {
        return $this->maxWidth;
    }
    /**
     * The maxWidth of the constraint, -1 means Infinity
     *
     * @param float $maxWidth
     *
     * @return self
     */
    public function setMaxWidth(float $maxWidth) : self
    {
        $this->initialized['maxWidth'] = true;
        $this->maxWidth = $maxWidth;
        return $this;
    }
    /**
     * The minHeight of the constraint
     *
     * @return float
     */
    public function getMinHeight() : float
    {
        return $this->minHeight;
    }
    /**
     * The minHeight of the constraint
     *
     * @param float $minHeight
     *
     * @return self
     */
    public function setMinHeight(float $minHeight) : self
    {
        $this->initialized['minHeight'] = true;
        $this->minHeight = $minHeight;
        return $this;
    }
    /**
     * The maxHeight of the constraint, -1 means Infinity
     *
     * @return float
     */
    public function getMaxHeight() : float
    {
        return $this->maxHeight;
    }
    /**
     * The maxHeight of the constraint, -1 means Infinity
     *
     * @param float $maxHeight
     *
     * @return self
     */
    public function setMaxHeight(float $maxHeight) : self
    {
        $this->initialized['maxHeight'] = true;
        $this->maxHeight = $maxHeight;
        return $this;
    }
}