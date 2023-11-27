<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStylesBorderRadius
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
     * @var ComponentsStylesBorderRadiusDefinitionsRadiusType
     */
    protected $topLeft;
    /**
     * 
     *
     * @var ComponentsStylesBorderRadiusDefinitionsRadiusType
     */
    protected $topRight;
    /**
     * 
     *
     * @var ComponentsStylesBorderRadiusDefinitionsRadiusType
     */
    protected $bottomLeft;
    /**
     * 
     *
     * @var ComponentsStylesBorderRadiusDefinitionsRadiusType
     */
    protected $bottomRight;
    /**
     * 
     *
     * @return ComponentsStylesBorderRadiusDefinitionsRadiusType
     */
    public function getTopLeft() : ComponentsStylesBorderRadiusDefinitionsRadiusType
    {
        return $this->topLeft;
    }
    /**
     * 
     *
     * @param ComponentsStylesBorderRadiusDefinitionsRadiusType $topLeft
     *
     * @return self
     */
    public function setTopLeft(ComponentsStylesBorderRadiusDefinitionsRadiusType $topLeft) : self
    {
        $this->initialized['topLeft'] = true;
        $this->topLeft = $topLeft;
        return $this;
    }
    /**
     * 
     *
     * @return ComponentsStylesBorderRadiusDefinitionsRadiusType
     */
    public function getTopRight() : ComponentsStylesBorderRadiusDefinitionsRadiusType
    {
        return $this->topRight;
    }
    /**
     * 
     *
     * @param ComponentsStylesBorderRadiusDefinitionsRadiusType $topRight
     *
     * @return self
     */
    public function setTopRight(ComponentsStylesBorderRadiusDefinitionsRadiusType $topRight) : self
    {
        $this->initialized['topRight'] = true;
        $this->topRight = $topRight;
        return $this;
    }
    /**
     * 
     *
     * @return ComponentsStylesBorderRadiusDefinitionsRadiusType
     */
    public function getBottomLeft() : ComponentsStylesBorderRadiusDefinitionsRadiusType
    {
        return $this->bottomLeft;
    }
    /**
     * 
     *
     * @param ComponentsStylesBorderRadiusDefinitionsRadiusType $bottomLeft
     *
     * @return self
     */
    public function setBottomLeft(ComponentsStylesBorderRadiusDefinitionsRadiusType $bottomLeft) : self
    {
        $this->initialized['bottomLeft'] = true;
        $this->bottomLeft = $bottomLeft;
        return $this;
    }
    /**
     * 
     *
     * @return ComponentsStylesBorderRadiusDefinitionsRadiusType
     */
    public function getBottomRight() : ComponentsStylesBorderRadiusDefinitionsRadiusType
    {
        return $this->bottomRight;
    }
    /**
     * 
     *
     * @param ComponentsStylesBorderRadiusDefinitionsRadiusType $bottomRight
     *
     * @return self
     */
    public function setBottomRight(ComponentsStylesBorderRadiusDefinitionsRadiusType $bottomRight) : self
    {
        $this->initialized['bottomRight'] = true;
        $this->bottomRight = $bottomRight;
        return $this;
    }
}