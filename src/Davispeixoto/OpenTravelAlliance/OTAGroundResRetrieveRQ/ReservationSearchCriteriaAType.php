<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundResRetrieveRQ;

/**
 * Class representing ReservationSearchCriteriaAType
 */
class ReservationSearchCriteriaAType
{

    /**
     * The date and time of the service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateTime
     */
    private $dateTime = null;

    /**
     * Primary and additional passenger(s) associated with the reservation name and
     * contact information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType[]
     * $passenger
     */
    private $passenger = null;

    /**
     * Rate qualifier and promotions that apply to this reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType
     * $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * Gets as dateTime
     *
     * The date and time of the service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Sets a new dateTime
     *
     * The date and time of the service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateTime
     * @return self
     */
    public function setDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Adds as passenger
     *
     * Primary and additional passenger(s) associated with the reservation name and
     * contact information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType
     * $passenger
     */
    public function addToPassenger(\Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType $passenger)
    {
        $this->passenger[] = $passenger;

        return $this;
    }

    /**
     * isset passenger
     *
     * Primary and additional passenger(s) associated with the reservation name and
     * contact information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassenger($index)
    {
        return isset($this->passenger[$index]);
    }

    /**
     * unset passenger
     *
     * Primary and additional passenger(s) associated with the reservation name and
     * contact information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassenger($index)
    {
        unset($this->passenger[$index]);
    }

    /**
     * Gets as passenger
     *
     * Primary and additional passenger(s) associated with the reservation name and
     * contact information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType[]
     */
    public function getPassenger()
    {
        return $this->passenger;
    }

    /**
     * Sets a new passenger
     *
     * Primary and additional passenger(s) associated with the reservation name and
     * contact information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType[]
     * $passenger
     * @return self
     */
    public function setPassenger(array $passenger)
    {
        $this->passenger = $passenger;

        return $this;
    }

    /**
     * Gets as rateQualifier
     *
     * Rate qualifier and promotions that apply to this reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Rate qualifier and promotions that apply to this reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType $rateQualifier
     * @return self
     */
    public function setRateQualifier(\Davispeixoto\OpenTravelAlliance\GroundRateQualifierType $rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }


}

