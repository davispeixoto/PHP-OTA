<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DOWRestrictionsType
 *
 *
 * XSD Type: DOW_RestrictionsType
 */
class DOWRestrictionsType
{

    /**
     * Days of week on which this room/rate combination is available.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\AvailableDaysOfWeekAType
     * $availableDaysOfWeek
     */
    private $availableDaysOfWeek = null;

    /**
     * Days of Week on which the guest can arrive.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\ArrivalDaysOfWeekAType
     * $arrivalDaysOfWeek
     */
    private $arrivalDaysOfWeek = null;

    /**
     * Days of Week on which the guest can leave.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\DepartureDaysOfWeekAType
     * $departureDaysOfWeek
     */
    private $departureDaysOfWeek = null;

    /**
     * Days of Week on which the guest has to stay at the hotel.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\RequiredDaysOfWeekAType
     * $requiredDaysOfWeek
     */
    private $requiredDaysOfWeek = null;

    /**
     * Gets as availableDaysOfWeek
     *
     * Days of week on which this room/rate combination is available.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\AvailableDaysOfWeekAType
     */
    public function getAvailableDaysOfWeek()
    {
        return $this->availableDaysOfWeek;
    }

    /**
     * Sets a new availableDaysOfWeek
     *
     * Days of week on which this room/rate combination is available.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\AvailableDaysOfWeekAType
     * $availableDaysOfWeek
     * @return self
     */
    public function setAvailableDaysOfWeek(
        \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\AvailableDaysOfWeekAType $availableDaysOfWeek
    ) {
        $this->availableDaysOfWeek = $availableDaysOfWeek;

        return $this;
    }

    /**
     * Gets as arrivalDaysOfWeek
     *
     * Days of Week on which the guest can arrive.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\ArrivalDaysOfWeekAType
     */
    public function getArrivalDaysOfWeek()
    {
        return $this->arrivalDaysOfWeek;
    }

    /**
     * Sets a new arrivalDaysOfWeek
     *
     * Days of Week on which the guest can arrive.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\ArrivalDaysOfWeekAType
     * $arrivalDaysOfWeek
     * @return self
     */
    public function setArrivalDaysOfWeek(
        \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\ArrivalDaysOfWeekAType $arrivalDaysOfWeek
    ) {
        $this->arrivalDaysOfWeek = $arrivalDaysOfWeek;

        return $this;
    }

    /**
     * Gets as departureDaysOfWeek
     *
     * Days of Week on which the guest can leave.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\DepartureDaysOfWeekAType
     */
    public function getDepartureDaysOfWeek()
    {
        return $this->departureDaysOfWeek;
    }

    /**
     * Sets a new departureDaysOfWeek
     *
     * Days of Week on which the guest can leave.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\DepartureDaysOfWeekAType
     * $departureDaysOfWeek
     * @return self
     */
    public function setDepartureDaysOfWeek(
        \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\DepartureDaysOfWeekAType $departureDaysOfWeek
    ) {
        $this->departureDaysOfWeek = $departureDaysOfWeek;

        return $this;
    }

    /**
     * Gets as requiredDaysOfWeek
     *
     * Days of Week on which the guest has to stay at the hotel.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\RequiredDaysOfWeekAType
     */
    public function getRequiredDaysOfWeek()
    {
        return $this->requiredDaysOfWeek;
    }

    /**
     * Sets a new requiredDaysOfWeek
     *
     * Days of Week on which the guest has to stay at the hotel.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\RequiredDaysOfWeekAType
     * $requiredDaysOfWeek
     * @return self
     */
    public function setRequiredDaysOfWeek(
        \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType\RequiredDaysOfWeekAType $requiredDaysOfWeek
    ) {
        $this->requiredDaysOfWeek = $requiredDaysOfWeek;

        return $this;
    }


}

