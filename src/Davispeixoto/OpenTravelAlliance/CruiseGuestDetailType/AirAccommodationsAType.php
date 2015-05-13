<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType;

/**
 * Class representing AirAccommodationsAType
 */
class AirAccommodationsAType
{

    /**
     * Specifies guest air accommodation information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\AirAccommodationsAType\AirAccommodationAType[]
     * $airAccommodation
     */
    private $airAccommodation = null;

    /**
     * Adds as airAccommodation
     *
     * Specifies guest air accommodation information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\AirAccommodationsAType\AirAccommodationAType
     * $airAccommodation
     */
    public function addToAirAccommodation(
        \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\AirAccommodationsAType\AirAccommodationAType $airAccommodation
    ) {
        $this->airAccommodation[] = $airAccommodation;

        return $this;
    }

    /**
     * isset airAccommodation
     *
     * Specifies guest air accommodation information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirAccommodation($index)
    {
        return isset($this->airAccommodation[$index]);
    }

    /**
     * unset airAccommodation
     *
     * Specifies guest air accommodation information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirAccommodation($index)
    {
        unset($this->airAccommodation[$index]);
    }

    /**
     * Gets as airAccommodation
     *
     * Specifies guest air accommodation information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\AirAccommodationsAType\AirAccommodationAType[]
     */
    public function getAirAccommodation()
    {
        return $this->airAccommodation;
    }

    /**
     * Sets a new airAccommodation
     *
     * Specifies guest air accommodation information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\AirAccommodationsAType\AirAccommodationAType[]
     * $airAccommodation
     * @return self
     */
    public function setAirAccommodation(array $airAccommodation)
    {
        $this->airAccommodation = $airAccommodation;

        return $this;
    }


}

