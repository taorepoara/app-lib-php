<?php

namespace Lenra\App\Components\Lenra\Model;

class StylesInputBorder
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
     * @var string
     */
    protected $type = 'underline';
    /**
     * Element of type BorderRadius
     *
     * @var StylesBorderRadius
     */
    protected $borderRadius;
    /**
     * Element of type BorderSide
     *
     * @var StylesBorderSide
     */
    protected $borderSide;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Element of type BorderRadius
     *
     * @return StylesBorderRadius
     */
    public function getBorderRadius() : StylesBorderRadius
    {
        return $this->borderRadius;
    }
    /**
     * Element of type BorderRadius
     *
     * @param StylesBorderRadius $borderRadius
     *
     * @return self
     */
    public function setBorderRadius(StylesBorderRadius $borderRadius) : self
    {
        $this->initialized['borderRadius'] = true;
        $this->borderRadius = $borderRadius;
        return $this;
    }
    /**
     * Element of type BorderSide
     *
     * @return StylesBorderSide
     */
    public function getBorderSide() : StylesBorderSide
    {
        return $this->borderSide;
    }
    /**
     * Element of type BorderSide
     *
     * @param StylesBorderSide $borderSide
     *
     * @return self
     */
    public function setBorderSide(StylesBorderSide $borderSide) : self
    {
        $this->initialized['borderSide'] = true;
        $this->borderSide = $borderSide;
        return $this;
    }
}