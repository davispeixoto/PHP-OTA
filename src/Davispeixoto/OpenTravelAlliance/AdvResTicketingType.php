<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AdvResTicketingType
 *
 * Container used to hold information regarding advance reservation and/or advance
 * ticketing.
 * XSD Type: AdvResTicketingType
 */
class AdvResTicketingType
{

    /**
     * Indicator for identifying whether or not advance reservation restrictions are
     * involved in the request or response.
     *
     * @property boolean $advResInd
     */
    private $advResInd = null;

    /**
     * Indicator for identifying whether or not advance ticketing restrictions are
     * involved in the request or response.
     *
     * @property boolean $advTicketingInd
     */
    private $advTicketingInd = null;

    /**
     * The date a traveller wishes to ticket their reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $requestedTicketingDate
     */
    private $requestedTicketingDate = null;

    /**
     * Specifies constraints on when advance reservations can be made.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AdvResTicketingType\AdvReservationAType
     * $advReservation
     */
    private $advReservation = null;

    /**
     * Specifies advance ticketing restrictions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AdvResTicketingType\AdvTicketingAType
     * $advTicketing
     */
    private $advTicketing = null;

    /**
     * Gets as advResInd
     *
     * Indicator for identifying whether or not advance reservation restrictions are
     * involved in the request or response.
     *
     * @return boolean
     */
    public function getAdvResInd()
    {
        return $this->advResInd;
    }

    /**
     * Sets a new advResInd
     *
     * Indicator for identifying whether or not advance reservation restrictions are
     * involved in the request or response.
     *
     * @param boolean $advResInd
     * @return self
     */
    public function setAdvResInd($advResInd)
    {
        $this->advResInd = $advResInd;

        return $this;
    }

    /**
     * Gets as advTicketingInd
     *
     * Indicator for identifying whether or not advance ticketing restrictions are
     * involved in the request or response.
     *
     * @return boolean
     */
    public function getAdvTicketingInd()
    {
        return $this->advTicketingInd;
    }

    /**
     * Sets a new advTicketingInd
     *
     * Indicator for identifying whether or not advance ticketing restrictions are
     * involved in the request or response.
     *
     * @param boolean $advTicketingInd
     * @return self
     */
    public function setAdvTicketingInd($advTicketingInd)
    {
        $this->advTicketingInd = $advTicketingInd;

        return $this;
    }

    /**
     * Gets as requestedTicketingDate
     *
     * The date a traveller wishes to ticket their reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getRequestedTicketingDate()
    {
        return $this->requestedTicketingDate;
    }

    /**
     * Sets a new requestedTicketingDate
     *
     * The date a traveller wishes to ticket their reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $requestedTicketingDate
     * @return self
     */
    public function setRequestedTicketingDate(
        \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $requestedTicketingDate
    ) {
        $this->requestedTicketingDate = $requestedTicketingDate;

        return $this;
    }

    /**
     * Gets as advReservation
     *
     * Specifies constraints on when advance reservations can be made.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AdvResTicketingType\AdvReservationAType
     */
    public function getAdvReservation()
    {
        return $this->advReservation;
    }

    /**
     * Sets a new advReservation
     *
     * Specifies constraints on when advance reservations can be made.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AdvResTicketingType\AdvReservationAType
     * $advReservation
     * @return self
     */
    public function setAdvReservation(
        \Davispeixoto\OpenTravelAlliance\AdvResTicketingType\AdvReservationAType $advReservation
    ) {
        $this->advReservation = $advReservation;

        return $this;
    }

    /**
     * Gets as advTicketing
     *
     * Specifies advance ticketing restrictions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AdvResTicketingType\AdvTicketingAType
     */
    public function getAdvTicketing()
    {
        return $this->advTicketing;
    }

    /**
     * Sets a new advTicketing
     *
     * Specifies advance ticketing restrictions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AdvResTicketingType\AdvTicketingAType
     * $advTicketing
     * @return self
     */
    public function setAdvTicketing(
        \Davispeixoto\OpenTravelAlliance\AdvResTicketingType\AdvTicketingAType $advTicketing
    ) {
        $this->advTicketing = $advTicketing;

        return $this;
    }


}

