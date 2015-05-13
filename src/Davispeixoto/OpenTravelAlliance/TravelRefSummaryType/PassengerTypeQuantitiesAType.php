<?php

namespace Davispeixoto\OpenTravelAlliance\TravelRefSummaryType;

/**
 * Class representing PassengerTypeQuantitiesAType
 */
class PassengerTypeQuantitiesAType
{

    /**
     * Number of individuals traveling under this PTC.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType[]
     * $passengerTypeQuantity
     */
    private $passengerTypeQuantity = null;

    /**
     * Adds as passengerTypeQuantity
     *
     * Number of individuals traveling under this PTC.
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
     * Number of individuals traveling under this PTC.
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
     * Number of individuals traveling under this PTC.
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
     * Number of individuals traveling under this PTC.
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
     * Number of individuals traveling under this PTC.
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


}

