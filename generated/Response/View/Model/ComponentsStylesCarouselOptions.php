<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStylesCarouselOptions
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
    protected $height;
    /**
     * 
     *
     * @var bool
     */
    protected $enlargeCenterPage = false;
    /**
     * 
     *
     * @var bool
     */
    protected $autoPlay = false;
    /**
     * Element of type Duration
     *
     * @var ComponentsStylesDuration
     */
    protected $autoPlayInterval;
    /**
     * Element of type Duration
     *
     * @var ComponentsStylesDuration
     */
    protected $autoPlayAnimationDuration;
    /**
     * 
     *
     * @var bool
     */
    protected $pauseAutoPlayOnTouch = true;
    /**
     * 
     *
     * @var float
     */
    protected $aspectRatio;
    /**
     * 
     *
     * @var int
     */
    protected $initialPage;
    /**
     * 
     *
     * @var bool
     */
    protected $enableInfiniteScroll = true;
    /**
     * 
     *
     * @var bool
     */
    protected $reverse = false;
    /**
     * The direction of the component (horizontal/vertical)
     *
     * @var string
     */
    protected $scrollDirection = 'horizontal';
    /**
     * 
     *
     * @var float
     */
    protected $viewportFraction = 0.8;
    /**
     * 
     *
     * @var string
     */
    protected $enlargeStrategy = 'scale';
    /**
     * 
     *
     * @return float
     */
    public function getHeight() : float
    {
        return $this->height;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return bool
     */
    public function getEnlargeCenterPage() : bool
    {
        return $this->enlargeCenterPage;
    }
    /**
     * 
     *
     * @param bool $enlargeCenterPage
     *
     * @return self
     */
    public function setEnlargeCenterPage(bool $enlargeCenterPage) : self
    {
        $this->initialized['enlargeCenterPage'] = true;
        $this->enlargeCenterPage = $enlargeCenterPage;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAutoPlay() : bool
    {
        return $this->autoPlay;
    }
    /**
     * 
     *
     * @param bool $autoPlay
     *
     * @return self
     */
    public function setAutoPlay(bool $autoPlay) : self
    {
        $this->initialized['autoPlay'] = true;
        $this->autoPlay = $autoPlay;
        return $this;
    }
    /**
     * Element of type Duration
     *
     * @return ComponentsStylesDuration
     */
    public function getAutoPlayInterval() : ComponentsStylesDuration
    {
        return $this->autoPlayInterval;
    }
    /**
     * Element of type Duration
     *
     * @param ComponentsStylesDuration $autoPlayInterval
     *
     * @return self
     */
    public function setAutoPlayInterval(ComponentsStylesDuration $autoPlayInterval) : self
    {
        $this->initialized['autoPlayInterval'] = true;
        $this->autoPlayInterval = $autoPlayInterval;
        return $this;
    }
    /**
     * Element of type Duration
     *
     * @return ComponentsStylesDuration
     */
    public function getAutoPlayAnimationDuration() : ComponentsStylesDuration
    {
        return $this->autoPlayAnimationDuration;
    }
    /**
     * Element of type Duration
     *
     * @param ComponentsStylesDuration $autoPlayAnimationDuration
     *
     * @return self
     */
    public function setAutoPlayAnimationDuration(ComponentsStylesDuration $autoPlayAnimationDuration) : self
    {
        $this->initialized['autoPlayAnimationDuration'] = true;
        $this->autoPlayAnimationDuration = $autoPlayAnimationDuration;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPauseAutoPlayOnTouch() : bool
    {
        return $this->pauseAutoPlayOnTouch;
    }
    /**
     * 
     *
     * @param bool $pauseAutoPlayOnTouch
     *
     * @return self
     */
    public function setPauseAutoPlayOnTouch(bool $pauseAutoPlayOnTouch) : self
    {
        $this->initialized['pauseAutoPlayOnTouch'] = true;
        $this->pauseAutoPlayOnTouch = $pauseAutoPlayOnTouch;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAspectRatio() : float
    {
        return $this->aspectRatio;
    }
    /**
     * 
     *
     * @param float $aspectRatio
     *
     * @return self
     */
    public function setAspectRatio(float $aspectRatio) : self
    {
        $this->initialized['aspectRatio'] = true;
        $this->aspectRatio = $aspectRatio;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInitialPage() : int
    {
        return $this->initialPage;
    }
    /**
     * 
     *
     * @param int $initialPage
     *
     * @return self
     */
    public function setInitialPage(int $initialPage) : self
    {
        $this->initialized['initialPage'] = true;
        $this->initialPage = $initialPage;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEnableInfiniteScroll() : bool
    {
        return $this->enableInfiniteScroll;
    }
    /**
     * 
     *
     * @param bool $enableInfiniteScroll
     *
     * @return self
     */
    public function setEnableInfiniteScroll(bool $enableInfiniteScroll) : self
    {
        $this->initialized['enableInfiniteScroll'] = true;
        $this->enableInfiniteScroll = $enableInfiniteScroll;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getReverse() : bool
    {
        return $this->reverse;
    }
    /**
     * 
     *
     * @param bool $reverse
     *
     * @return self
     */
    public function setReverse(bool $reverse) : self
    {
        $this->initialized['reverse'] = true;
        $this->reverse = $reverse;
        return $this;
    }
    /**
     * The direction of the component (horizontal/vertical)
     *
     * @return string
     */
    public function getScrollDirection() : string
    {
        return $this->scrollDirection;
    }
    /**
     * The direction of the component (horizontal/vertical)
     *
     * @param string $scrollDirection
     *
     * @return self
     */
    public function setScrollDirection(string $scrollDirection) : self
    {
        $this->initialized['scrollDirection'] = true;
        $this->scrollDirection = $scrollDirection;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getViewportFraction() : float
    {
        return $this->viewportFraction;
    }
    /**
     * 
     *
     * @param float $viewportFraction
     *
     * @return self
     */
    public function setViewportFraction(float $viewportFraction) : self
    {
        $this->initialized['viewportFraction'] = true;
        $this->viewportFraction = $viewportFraction;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnlargeStrategy() : string
    {
        return $this->enlargeStrategy;
    }
    /**
     * 
     *
     * @param string $enlargeStrategy
     *
     * @return self
     */
    public function setEnlargeStrategy(string $enlargeStrategy) : self
    {
        $this->initialized['enlargeStrategy'] = true;
        $this->enlargeStrategy = $enlargeStrategy;
        return $this;
    }
}