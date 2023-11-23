<?php

namespace Lenra\App\Response\View\Model;

class ComponentsCarousel
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
     * The identifier of the component
     *
     * @var mixed
     */
    protected $type;
    /**
     * The children
     *
     * @var ComponentsActionable[]|ComponentsButton[]|ComponentsCarousel[]|ComponentsCheckbox[]|ComponentsContainer[]|ComponentsDropdownButton[]|ComponentsFlex[]|ComponentsFlexible[]|ComponentsForm[]|ComponentsIcon[]|ComponentsImage[]|ComponentsMenu[]|ComponentsMenuItem[]|ComponentsOverlayEntry[]|ComponentsRadio[]|ComponentsSlider[]|ComponentsStack[]|ComponentsStatusSticker[]|ComponentsText[]|ComponentsTextfield[]|ComponentsToggle[]|ComponentsView[]|ComponentsWrap[]
     */
    protected $children;
    /**
     * Element of type CarouselOptions
     *
     * @var ComponentsStylesCarouselOptions
     */
    protected $options;
    /**
     * The identifier of the component
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * The identifier of the component
     *
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The children
     *
     * @return ComponentsActionable[]|ComponentsButton[]|ComponentsCarousel[]|ComponentsCheckbox[]|ComponentsContainer[]|ComponentsDropdownButton[]|ComponentsFlex[]|ComponentsFlexible[]|ComponentsForm[]|ComponentsIcon[]|ComponentsImage[]|ComponentsMenu[]|ComponentsMenuItem[]|ComponentsOverlayEntry[]|ComponentsRadio[]|ComponentsSlider[]|ComponentsStack[]|ComponentsStatusSticker[]|ComponentsText[]|ComponentsTextfield[]|ComponentsToggle[]|ComponentsView[]|ComponentsWrap[]
     */
    public function getChildren() : array
    {
        return $this->children;
    }
    /**
     * The children
     *
     * @param ComponentsActionable[]|ComponentsButton[]|ComponentsCarousel[]|ComponentsCheckbox[]|ComponentsContainer[]|ComponentsDropdownButton[]|ComponentsFlex[]|ComponentsFlexible[]|ComponentsForm[]|ComponentsIcon[]|ComponentsImage[]|ComponentsMenu[]|ComponentsMenuItem[]|ComponentsOverlayEntry[]|ComponentsRadio[]|ComponentsSlider[]|ComponentsStack[]|ComponentsStatusSticker[]|ComponentsText[]|ComponentsTextfield[]|ComponentsToggle[]|ComponentsView[]|ComponentsWrap[] $children
     *
     * @return self
     */
    public function setChildren(array $children) : self
    {
        $this->initialized['children'] = true;
        $this->children = $children;
        return $this;
    }
    /**
     * Element of type CarouselOptions
     *
     * @return ComponentsStylesCarouselOptions
     */
    public function getOptions() : ComponentsStylesCarouselOptions
    {
        return $this->options;
    }
    /**
     * Element of type CarouselOptions
     *
     * @param ComponentsStylesCarouselOptions $options
     *
     * @return self
     */
    public function setOptions(ComponentsStylesCarouselOptions $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}