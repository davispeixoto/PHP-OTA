<?php

namespace Davispeixoto\OpenTravelAlliance\HotelInfoType;

/**
 * Class representing LanguagesAType
 */
class LanguagesAType
{

    /**
     * Language details pertaining to the hotel.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\LanguagesAType\LanguageAType[]
     * $language
     */
    private $language = null;

    /**
     * Adds as language
     *
     * Language details pertaining to the hotel.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\LanguagesAType\LanguageAType
     * $language
     */
    public function addToLanguage(\Davispeixoto\OpenTravelAlliance\HotelInfoType\LanguagesAType\LanguageAType $language)
    {
        $this->language[] = $language;

        return $this;
    }

    /**
     * isset language
     *
     * Language details pertaining to the hotel.
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
     * Language details pertaining to the hotel.
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
     * Language details pertaining to the hotel.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\LanguagesAType\LanguageAType[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Language details pertaining to the hotel.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\LanguagesAType\LanguageAType[]
     * $language
     * @return self
     */
    public function setLanguage(array $language)
    {
        $this->language = $language;

        return $this;
    }


}

