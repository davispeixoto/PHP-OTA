<?php

namespace Davispeixoto\OpenTravelAlliance\GroundServiceType;

/**
 * Class representing LanguageAType
 */
class LanguageAType
{

    /**
     * Language spoken by the driver or the guide.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * If true, this is the primary language spoken by the driver or the guide.
     *
     * @property boolean $primaryLangInd
     */
    private $primaryLangInd = null;

    /**
     * If true, it is preferred that the driver speak this language.
     *
     * @property boolean $requestedInd
     */
    private $requestedInd = null;

    /**
     * Gets as language
     *
     * Language spoken by the driver or the guide.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Language spoken by the driver or the guide.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Gets as primaryLangInd
     *
     * If true, this is the primary language spoken by the driver or the guide.
     *
     * @return boolean
     */
    public function getPrimaryLangInd()
    {
        return $this->primaryLangInd;
    }

    /**
     * Sets a new primaryLangInd
     *
     * If true, this is the primary language spoken by the driver or the guide.
     *
     * @param boolean $primaryLangInd
     * @return self
     */
    public function setPrimaryLangInd($primaryLangInd)
    {
        $this->primaryLangInd = $primaryLangInd;

        return $this;
    }

    /**
     * Gets as requestedInd
     *
     * If true, it is preferred that the driver speak this language.
     *
     * @return boolean
     */
    public function getRequestedInd()
    {
        return $this->requestedInd;
    }

    /**
     * Sets a new requestedInd
     *
     * If true, it is preferred that the driver speak this language.
     *
     * @param boolean $requestedInd
     * @return self
     */
    public function setRequestedInd($requestedInd)
    {
        $this->requestedInd = $requestedInd;

        return $this;
    }


}

