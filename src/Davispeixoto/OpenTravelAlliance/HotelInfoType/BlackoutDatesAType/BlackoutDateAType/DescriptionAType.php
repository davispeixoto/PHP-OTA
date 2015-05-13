<?php

namespace Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType\BlackoutDateAType;

/**
 * Class representing DescriptionAType
 */
class DescriptionAType
{

    /**
     * The language associated with the description.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * Gets as language
     *
     * The language associated with the description.
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
     * The language associated with the description.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }


}

