<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ;

/**
 * Class representing TravelerInfoSummaryAType
 */
class TravelerInfoSummaryAType
{

    /**
     * Specify number of passengers using Passenger Type Codes.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelerInfoSummaryAType\PassengerTypeQuantityAType[]
     * $passengerTypeQuantity
     */
    private $passengerTypeQuantity = null;

    /**
     * Adds as passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelerInfoSummaryAType\PassengerTypeQuantityAType
     * $passengerTypeQuantity
     */
    public function addToPassengerTypeQuantity(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelerInfoSummaryAType\PassengerTypeQuantityAType $passengerTypeQuantity
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
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelerInfoSummaryAType\PassengerTypeQuantityAType[]
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelerInfoSummaryAType\PassengerTypeQuantityAType[]
     * $passengerTypeQuantity
     * @return self
     */
    public function setPassengerTypeQuantity(array $passengerTypeQuantity)
    {
        $this->passengerTypeQuantity = $passengerTypeQuantity;

        return $this;
    }


}

