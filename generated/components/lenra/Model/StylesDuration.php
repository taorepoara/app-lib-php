<?php

namespace Lenra\App\Components\Lenra\Model;

class StylesDuration
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
     * @var int
     */
    protected $days = 0;
    /**
     * 
     *
     * @var int
     */
    protected $hours = 0;
    /**
     * 
     *
     * @var int
     */
    protected $minutes = 0;
    /**
     * 
     *
     * @var int
     */
    protected $seconds = 0;
    /**
     * 
     *
     * @var int
     */
    protected $milliseconds = 0;
    /**
     * 
     *
     * @var int
     */
    protected $microseconds = 0;
    /**
     * 
     *
     * @return int
     */
    public function getDays() : int
    {
        return $this->days;
    }
    /**
     * 
     *
     * @param int $days
     *
     * @return self
     */
    public function setDays(int $days) : self
    {
        $this->initialized['days'] = true;
        $this->days = $days;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHours() : int
    {
        return $this->hours;
    }
    /**
     * 
     *
     * @param int $hours
     *
     * @return self
     */
    public function setHours(int $hours) : self
    {
        $this->initialized['hours'] = true;
        $this->hours = $hours;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMinutes() : int
    {
        return $this->minutes;
    }
    /**
     * 
     *
     * @param int $minutes
     *
     * @return self
     */
    public function setMinutes(int $minutes) : self
    {
        $this->initialized['minutes'] = true;
        $this->minutes = $minutes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSeconds() : int
    {
        return $this->seconds;
    }
    /**
     * 
     *
     * @param int $seconds
     *
     * @return self
     */
    public function setSeconds(int $seconds) : self
    {
        $this->initialized['seconds'] = true;
        $this->seconds = $seconds;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMilliseconds() : int
    {
        return $this->milliseconds;
    }
    /**
     * 
     *
     * @param int $milliseconds
     *
     * @return self
     */
    public function setMilliseconds(int $milliseconds) : self
    {
        $this->initialized['milliseconds'] = true;
        $this->milliseconds = $milliseconds;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMicroseconds() : int
    {
        return $this->microseconds;
    }
    /**
     * 
     *
     * @param int $microseconds
     *
     * @return self
     */
    public function setMicroseconds(int $microseconds) : self
    {
        $this->initialized['microseconds'] = true;
        $this->microseconds = $microseconds;
        return $this;
    }
}