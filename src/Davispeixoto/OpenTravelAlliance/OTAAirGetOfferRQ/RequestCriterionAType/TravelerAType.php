<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType;

/**
 * Class representing TravelerAType
 */
class TravelerAType
{

    /**
     * Number of travelers and their age classification if traveler details are not
     * known or required for a specific type of offer request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelerAType\PassengerTypeQuantityAType[]
     * $passengerTypeQuantity
     */
    private $passengerTypeQuantity = null;

    /**
     * Detailed information about the traveler, including gender, age, name, contact,
     * loyalty and profile reference.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelerAType\AirTravelerAType[]
     * $airTraveler
     */
    private $airTraveler = null;

    /**
     * Adds as passengerTypeQuantity
     *
     * Number of travelers and their age classification if traveler details are not
     * known or required for a specific type of offer request.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelerAType\PassengerTypeQuantityAType
     * $passengerTypeQuantity
     */
    public function addToPassengerTypeQuantity(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelerAType\PassengerTypeQuantityAType $passengerTypeQuantity
    ) {
        $this->passengerTypeQuantity[] = $passengerTypeQuantity;

        return $this;
    }

    /**
     * isset passengerTypeQuantity
     *
     * Number of travelers and their age classification if traveler details are not
     * known or required for a specific type of offer request.
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
     * Number of travelers and their age classification if traveler details are not
     * known or required for a specific type of offer request.
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
     * Number of travelers and their age classification if traveler details are not
     * known or required for a specific type of offer request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelerAType\PassengerTypeQuantityAType[]
     */
    public function getPassengerTypeQuantity()
    {
        return $this->passengerTypeQuantity;
    }

    /**
     * Sets a new passengerTypeQuantity
     *
     * Number of travelers and their age classification if traveler details are not
     * known or required for a specific type of offer request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelerAType\PassengerTypeQuantityAType[]
     * $passengerTypeQuantity
     * @return self
     */
    public function setPassengerTypeQuantity(array $passengerTypeQuantity)
    {
        $this->passengerTypeQuantity = $passengerTypeQuantity;

        return $this;
    }

    /**
     * Adds as airTraveler
     *
     * Detailed information about the traveler, including gender, age, name, contact,
     * loyalty and profile reference.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelerAType\AirTravelerAType
     * $airTraveler
     */
    public function addToAirTraveler(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelerAType\AirTravelerAType $airTraveler
    ) {
        $this->airTraveler[] = $airTraveler;

        return $this;
    }

    /**
     * isset airTraveler
     *
     * Detailed information about the traveler, including gender, age, name, contact,
     * loyalty and profile reference.
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
     * Detailed information about the traveler, including gender, age, name, contact,
     * loyalty and profile reference.
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
     * Detailed information about the traveler, including gender, age, name, contact,
     * loyalty and profile reference.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelerAType\AirTravelerAType[]
     */
    public function getAirTraveler()
    {
        return $this->airTraveler;
    }

    /**
     * Sets a new airTraveler
     *
     * Detailed information about the traveler, including gender, age, name, contact,
     * loyalty and profile reference.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelerAType\AirTravelerAType[]
     * $airTraveler
     * @return self
     */
    public function setAirTraveler(array $airTraveler)
    {
        $this->airTraveler = $airTraveler;

        return $this;
    }


}

