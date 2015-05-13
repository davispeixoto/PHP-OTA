<?php

namespace Davispeixoto\OpenTravelAlliance\TripFeaturesType;

/**
 * Class representing OriginAType
 */
class OriginAType
{

    /**
     * Country name (e.g., Ireland).
     *
     * @property \Davispeixoto\OpenTravelAlliance\CountryNameType $countryName
     */
    private $countryName = null;

    /**
     * Gets as countryName
     *
     * Country name (e.g., Ireland).
     *
     * @return \Davispeixoto\OpenTravelAlliance\CountryNameType
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets a new countryName
     *
     * Country name (e.g., Ireland).
     *
     * @param \Davispeixoto\OpenTravelAlliance\CountryNameType $countryName
     * @return self
     */
    public function setCountryName(\Davispeixoto\OpenTravelAlliance\CountryNameType $countryName)
    {
        $this->countryName = $countryName;

        return $this;
    }


}

