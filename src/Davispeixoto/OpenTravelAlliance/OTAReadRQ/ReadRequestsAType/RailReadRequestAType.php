<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType;

/**
 * Class representing RailReadRequestAType
 */
class RailReadRequestAType
{

    /**
     * Used to request a list of reservations made by specified travel agent, ERSP,
     * booking channel, etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * Used to retrieve reservations based on the Network Code of Train Operator, or
     * specific Train that was booked.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TrainQueryType $train
     */
    private $train = null;

    /**
     * Used to retrieve reservation(s) based on known traveler information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $traveler
     */
    private $traveler = null;

    /**
     * Used to retrieve reservation(s) based on a booking date and time.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\RailReadRequestAType\BookingDateTimeAType
     * $bookingDateTime
     */
    private $bookingDateTime = null;

    /**
     * Used to retrieve reservation(s) based on a departure date and time.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\RailReadRequestAType\DepartureDateTimeAType
     * $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * Adds as source
     *
     * Used to request a list of reservations made by specified travel agent, ERSP,
     * booking channel, etc.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SourceType $source
     */
    public function addToPOS(\Davispeixoto\OpenTravelAlliance\SourceType $source)
    {
        $this->pOS[] = $source;

        return $this;
    }

    /**
     * isset pOS
     *
     * Used to request a list of reservations made by specified travel agent, ERSP,
     * booking channel, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPOS($index)
    {
        return isset($this->pOS[$index]);
    }

    /**
     * unset pOS
     *
     * Used to request a list of reservations made by specified travel agent, ERSP,
     * booking channel, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPOS($index)
    {
        unset($this->pOS[$index]);
    }

    /**
     * Gets as pOS
     *
     * Used to request a list of reservations made by specified travel agent, ERSP,
     * booking channel, etc.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SourceType[]
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * Used to request a list of reservations made by specified travel agent, ERSP,
     * booking channel, etc.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     * @return self
     */
    public function setPOS(array $pOS)
    {
        $this->pOS = $pOS;

        return $this;
    }

    /**
     * Gets as train
     *
     * Used to retrieve reservations based on the Network Code of Train Operator, or
     * specific Train that was booked.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TrainQueryType
     */
    public function getTrain()
    {
        return $this->train;
    }

    /**
     * Sets a new train
     *
     * Used to retrieve reservations based on the Network Code of Train Operator, or
     * specific Train that was booked.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TrainQueryType $train
     * @return self
     */
    public function setTrain(\Davispeixoto\OpenTravelAlliance\TrainQueryType $train)
    {
        $this->train = $train;

        return $this;
    }

    /**
     * Gets as traveler
     *
     * Used to retrieve reservation(s) based on known traveler information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getTraveler()
    {
        return $this->traveler;
    }

    /**
     * Sets a new traveler
     *
     * Used to retrieve reservation(s) based on known traveler information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $traveler
     * @return self
     */
    public function setTraveler(\Davispeixoto\OpenTravelAlliance\PersonNameType $traveler)
    {
        $this->traveler = $traveler;

        return $this;
    }

    /**
     * Gets as bookingDateTime
     *
     * Used to retrieve reservation(s) based on a booking date and time.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\RailReadRequestAType\BookingDateTimeAType
     */
    public function getBookingDateTime()
    {
        return $this->bookingDateTime;
    }

    /**
     * Sets a new bookingDateTime
     *
     * Used to retrieve reservation(s) based on a booking date and time.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\RailReadRequestAType\BookingDateTimeAType
     * $bookingDateTime
     * @return self
     */
    public function setBookingDateTime(
        \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\RailReadRequestAType\BookingDateTimeAType $bookingDateTime
    ) {
        $this->bookingDateTime = $bookingDateTime;

        return $this;
    }

    /**
     * Gets as departureDateTime
     *
     * Used to retrieve reservation(s) based on a departure date and time.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\RailReadRequestAType\DepartureDateTimeAType
     */
    public function getDepartureDateTime()
    {
        return $this->departureDateTime;
    }

    /**
     * Sets a new departureDateTime
     *
     * Used to retrieve reservation(s) based on a departure date and time.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\RailReadRequestAType\DepartureDateTimeAType
     * $departureDateTime
     * @return self
     */
    public function setDepartureDateTime(
        \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\RailReadRequestAType\DepartureDateTimeAType $departureDateTime
    ) {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }


}

