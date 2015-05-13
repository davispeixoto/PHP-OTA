<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TravelerInfoType
 *
 * Identifies passenger(s) who will travel on the reservation.
 * XSD Type: TravelerInfoType
 */
class TravelerInfoType
{

    /**
     * Information about the person traveling.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelerInfoType\AirTravelerAType[]
     * $airTraveler
     */
    private $airTraveler = null;

    /**
     * Provides detailed information regarding any special needs, requests, or remarks
     * associated with the traveler
     *
     * @property \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType[]
     * $specialReqDetails
     */
    private $specialReqDetails = null;

    /**
     * Adds as airTraveler
     *
     * Information about the person traveling.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TravelerInfoType\AirTravelerAType
     * $airTraveler
     */
    public function addToAirTraveler(\Davispeixoto\OpenTravelAlliance\TravelerInfoType\AirTravelerAType $airTraveler)
    {
        $this->airTraveler[] = $airTraveler;

        return $this;
    }

    /**
     * isset airTraveler
     *
     * Information about the person traveling.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirTraveler($index)
    {
        return isset($this->airTraveler[$index]);
    }

    /**
     * unset airTraveler
     *
     * Information about the person traveling.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirTraveler($index)
    {
        unset($this->airTraveler[$index]);
    }

    /**
     * Gets as airTraveler
     *
     * Information about the person traveling.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelerInfoType\AirTravelerAType[]
     */
    public function getAirTraveler()
    {
        return $this->airTraveler;
    }

    /**
     * Sets a new airTraveler
     *
     * Information about the person traveling.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelerInfoType\AirTravelerAType[]
     * $airTraveler
     * @return self
     */
    public function setAirTraveler(array $airTraveler)
    {
        $this->airTraveler = $airTraveler;

        return $this;
    }

    /**
     * Adds as specialReqDetails
     *
     * Provides detailed information regarding any special needs, requests, or remarks
     * associated with the traveler
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType $specialReqDetails
     */
    public function addToSpecialReqDetails(\Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType $specialReqDetails)
    {
        $this->specialReqDetails[] = $specialReqDetails;

        return $this;
    }

    /**
     * isset specialReqDetails
     *
     * Provides detailed information regarding any special needs, requests, or remarks
     * associated with the traveler
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialReqDetails($index)
    {
        return isset($this->specialReqDetails[$index]);
    }

    /**
     * unset specialReqDetails
     *
     * Provides detailed information regarding any special needs, requests, or remarks
     * associated with the traveler
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialReqDetails($index)
    {
        unset($this->specialReqDetails[$index]);
    }

    /**
     * Gets as specialReqDetails
     *
     * Provides detailed information regarding any special needs, requests, or remarks
     * associated with the traveler
     *
     * @return \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType[]
     */
    public function getSpecialReqDetails()
    {
        return $this->specialReqDetails;
    }

    /**
     * Sets a new specialReqDetails
     *
     * Provides detailed information regarding any special needs, requests, or remarks
     * associated with the traveler
     *
     * @param \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType[]
     * $specialReqDetails
     * @return self
     */
    public function setSpecialReqDetails(array $specialReqDetails)
    {
        $this->specialReqDetails = $specialReqDetails;

        return $this;
    }


}

