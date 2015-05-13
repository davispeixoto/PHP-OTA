<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType;

/**
 * Class representing ReadRequestByParameterAType
 */
class ReadRequestByParameterAType
{

    /**
     * Used to request a list of reservations made by specified travel agent, ERSP,
     * booking channel, etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * Used to retrieve reservations based on the network code of the train operator,
     * or a specific train that was booked.
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
     * \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestByParameterAType\BookingDateTimeAType
     * $bookingDateTime
     */
    private $bookingDateTime = null;

    /**
     * Used to retrieve reservation(s) based on a departure date and time.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestByParameterAType\DepartureDateTimeAType
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
     * Used to retrieve reservations based on the network code of the train operator,
     * or a specific train that was booked.
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
     * Used to retrieve reservations based on the network code of the train operator,
     * or a specific train that was booked.
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
     * \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestByParameterAType\BookingDateTimeAType
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
     * \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestByParameterAType\BookingDateTimeAType
     * $bookingDateTime
     * @return self
     */
    public function setBookingDateTime(
        \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestByParameterAType\BookingDateTimeAType $bookingDateTime
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
     * \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestByParameterAType\DepartureDateTimeAType
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
     * \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestByParameterAType\DepartureDateTimeAType
     * $departureDateTime
     * @return self
     */
    public function setDepartureDateTime(
        \Davispeixoto\OpenTravelAlliance\OTARailReadRQ\ReadRequestsAType\ReadRequestByParameterAType\DepartureDateTimeAType $departureDateTime
    ) {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }


}

