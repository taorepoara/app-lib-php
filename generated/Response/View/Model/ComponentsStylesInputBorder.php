<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStylesInputBorder
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
     * @var ComponentsStylesBorderRadius
     */
    protected $borderRadius;
    /**
     * Element of type BorderSide
     *
     * @var ComponentsStylesBorderSide
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
     * @return ComponentsStylesBorderRadius
     */
    public function getBorderRadius() : ComponentsStylesBorderRadius
    {
        return $this->borderRadius;
    }
    /**
     * Element of type BorderRadius
     *
     * @param ComponentsStylesBorderRadius $borderRadius
     *
     * @return self
     */
    public function setBorderRadius(ComponentsStylesBorderRadius $borderRadius) : self
    {
        $this->initialized['borderRadius'] = true;
        $this->borderRadius = $borderRadius;
        return $this;
    }
    /**
     * Element of type BorderSide
     *
     * @return ComponentsStylesBorderSide
     */
    public function getBorderSide() : ComponentsStylesBorderSide
    {
        return $this->borderSide;
    }
    /**
     * Element of type BorderSide
     *
     * @param ComponentsStylesBorderSide $borderSide
     *
     * @return self
     */
    public function setBorderSide(ComponentsStylesBorderSide $borderSide) : self
    {
        $this->initialized['borderSide'] = true;
        $this->borderSide = $borderSide;
        return $this;
    }
}