<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TravelerInformationType
 *
 * Specify passenger numbers and types.
 * XSD Type: TravelerInformationType
 */
class TravelerInformationType
{

    /**
     * Specify number of passengers using Passenger Type Codes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType[]
     * $passengerTypeQuantity
     */
    private $passengerTypeQuantity = null;

    /**
     * Information profiling the person traveling: Gender - the gender of the customer,
     * if needed; BirthDate - Date of Birth; Currency - the preferred currency in which
     * monetary amounts should be returned.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirTravelerType $airTraveler
     */
    private $airTraveler = null;

    /**
     * Adds as passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType
     * $passengerTypeQuantity
     */
    public function addToPassengerTypeQuantity(
        \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType $passengerTypeQuantity
    ) {
        $this->passengerTypeQuantity[] = $passengerTypeQuantity;

        return $this;
    }

    /**
     * isset passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerTypeQuantity($index)
    {
        return isset($this->passengerTypeQuantity[$index]);
    }

    /**
     * unset passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerTypeQuantity($index)
    {
        unset($this->passengerTypeQuantity[$index]);
    }

    /**
     * Gets as passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType[]
     */
    public function getPassengerTypeQuantity()
    {
        return $this->passengerTypeQuantity;
    }

    /**
     * Sets a new passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType[]
     * $passengerTypeQuantity
     * @return self
     */
    public function setPassengerTypeQuantity(array $passengerTypeQuantity)
    {
        $this->passengerTypeQuantity = $passengerTypeQuantity;

        return $this;
    }

    /**
     * Gets as airTraveler
     *
     * Information profiling the person traveling: Gender - the gender of the customer,
     * if needed; BirthDate - Date of Birth; Currency - the preferred currency in which
     * monetary amounts should be returned.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirTravelerType
     */
    public function getAirTraveler()
    {
        return $this->airTraveler;
    }

    /**
     * Sets a new airTraveler
     *
     * Information profiling the person traveling: Gender - the gender of the customer,
     * if needed; BirthDate - Date of Birth; Currency - the preferred currency in which
     * monetary amounts should be returned.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirTravelerType $airTraveler
     * @return self
     */
    public function setAirTraveler(\Davispeixoto\OpenTravelAlliance\AirTravelerType $airTraveler)
    {
        $this->airTraveler = $airTraveler;

        return $this;
    }


}

