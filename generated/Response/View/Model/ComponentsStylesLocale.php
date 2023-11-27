<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStylesLocale
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
     * The region subtag for the locale.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The primary language subtag for the locale.
     *
     * @var string
     */
    protected $languageCode;
    /**
     * The script subtag for the locale.
     *
     * @var string
     */
    protected $scriptCode;
    /**
     * The region subtag for the locale.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The region subtag for the locale.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * The primary language subtag for the locale.
     *
     * @return string
     */
    public function getLanguageCode() : string
    {
        return $this->languageCode;
    }
    /**
     * The primary language subtag for the locale.
     *
     * @param string $languageCode
     *
     * @return self
     */
    public function setLanguageCode(string $languageCode) : self
    {
        $this->initialized['languageCode'] = true;
        $this->languageCode = $languageCode;
        return $this;
    }
    /**
     * The script subtag for the locale.
     *
     * @return string
     */
    public function getScriptCode() : string
    {
        return $this->scriptCode;
    }
    /**
     * The script subtag for the locale.
     *
     * @param string $scriptCode
     *
     * @return self
     */
    public function setScriptCode(string $scriptCode) : self
    {
        $this->initialized['scriptCode'] = true;
        $this->scriptCode = $scriptCode;
        return $this;
    }
}