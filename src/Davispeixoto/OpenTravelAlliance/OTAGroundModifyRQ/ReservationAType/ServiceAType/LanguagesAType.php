<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType;

/**
 * Class representing LanguagesAType
 */
class LanguagesAType
{

    /**
     * Language details pertaining to the service.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LanguagesAType\LanguageAType[]
     * $language
     */
    private $language = null;

    /**
     * Adds as language
     *
     * Language details pertaining to the service.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LanguagesAType\LanguageAType
     * $language
     */
    public function addToLanguage(
        \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LanguagesAType\LanguageAType $language
    ) {
        $this->language[] = $language;

        return $this;
    }

    /**
     * isset language
     *
     * Language details pertaining to the service.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLanguage($index)
    {
        return isset($this->language[$index]);
    }

    /**
     * unset language
     *
     * Language details pertaining to the service.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLanguage($index)
    {
        unset($this->language[$index]);
    }

    /**
     * Gets as language
     *
     * Language details pertaining to the service.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LanguagesAType\LanguageAType[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Language details pertaining to the service.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LanguagesAType\LanguageAType[]
     * $language
     * @return self
     */
    public function setLanguage(array $language)
    {
        $this->language = $language;

        return $this;
    }


}

