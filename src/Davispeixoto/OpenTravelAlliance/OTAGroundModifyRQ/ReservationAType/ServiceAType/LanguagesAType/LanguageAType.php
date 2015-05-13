<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LanguagesAType;

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
     * If TRUE, this is the primary language spoken by the driver or the guide.
     *
     * @property boolean $primaryLangInd
     */
    private $primaryLangInd = null;

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
     * If TRUE, this is the primary language spoken by the driver or the guide.
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
     * If TRUE, this is the primary language spoken by the driver or the guide.
     *
     * @param boolean $primaryLangInd
     * @return self
     */
    public function setPrimaryLangInd($primaryLangInd)
    {
        $this->primaryLangInd = $primaryLangInd;

        return $this;
    }


}

