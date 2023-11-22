<?php

namespace Lenra\App\Components\Lenra\Model;

class StylesBorderRadius
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
     * @var StylesBorderRadiusDefinitionsRadiusType
     */
    protected $topLeft;
    /**
     * 
     *
     * @var StylesBorderRadiusDefinitionsRadiusType
     */
    protected $topRight;
    /**
     * 
     *
     * @var StylesBorderRadiusDefinitionsRadiusType
     */
    protected $bottomLeft;
    /**
     * 
     *
     * @var StylesBorderRadiusDefinitionsRadiusType
     */
    protected $bottomRight;
    /**
     * 
     *
     * @return StylesBorderRadiusDefinitionsRadiusType
     */
    public function getTopLeft() : StylesBorderRadiusDefinitionsRadiusType
    {
        return $this->topLeft;
    }
    /**
     * 
     *
     * @param StylesBorderRadiusDefinitionsRadiusType $topLeft
     *
     * @return self
     */
    public function setTopLeft(StylesBorderRadiusDefinitionsRadiusType $topLeft) : self
    {
        $this->initialized['topLeft'] = true;
        $this->topLeft = $topLeft;
        return $this;
    }
    /**
     * 
     *
     * @return StylesBorderRadiusDefinitionsRadiusType
     */
    public function getTopRight() : StylesBorderRadiusDefinitionsRadiusType
    {
        return $this->topRight;
    }
    /**
     * 
     *
     * @param StylesBorderRadiusDefinitionsRadiusType $topRight
     *
     * @return self
     */
    public function setTopRight(StylesBorderRadiusDefinitionsRadiusType $topRight) : self
    {
        $this->initialized['topRight'] = true;
        $this->topRight = $topRight;
        return $this;
    }
    /**
     * 
     *
     * @return StylesBorderRadiusDefinitionsRadiusType
     */
    public function getBottomLeft() : StylesBorderRadiusDefinitionsRadiusType
    {
        return $this->bottomLeft;
    }
    /**
     * 
     *
     * @param StylesBorderRadiusDefinitionsRadiusType $bottomLeft
     *
     * @return self
     */
    public function setBottomLeft(StylesBorderRadiusDefinitionsRadiusType $bottomLeft) : self
    {
        $this->initialized['bottomLeft'] = true;
        $this->bottomLeft = $bottomLeft;
        return $this;
    }
    /**
     * 
     *
     * @return StylesBorderRadiusDefinitionsRadiusType
     */
    public function getBottomRight() : StylesBorderRadiusDefinitionsRadiusType
    {
        return $this->bottomRight;
    }
    /**
     * 
     *
     * @param StylesBorderRadiusDefinitionsRadiusType $bottomRight
     *
     * @return self
     */
    public function setBottomRight(StylesBorderRadiusDefinitionsRadiusType $bottomRight) : self
    {
        $this->initialized['bottomRight'] = true;
        $this->bottomRight = $bottomRight;
        return $this;
    }
}