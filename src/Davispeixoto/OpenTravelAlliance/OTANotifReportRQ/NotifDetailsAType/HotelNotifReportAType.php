<?php

namespace Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType;

/**
 * Class representing HotelNotifReportAType
 */
class HotelNotifReportAType
{

    /**
     * Collection of hotel reservations.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\HotelReservationsAType\HotelReservationAType[]
     * $hotelReservations
     */
    private $hotelReservations = null;

    /**
     * Collection of availability status messages.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\AvailStatusMessagesAType
     * $availStatusMessages
     */
    private $availStatusMessages = null;

    /**
     * Collection of rate amount messages.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\RateAmountMessagesAType
     * $rateAmountMessages
     */
    private $rateAmountMessages = null;

    /**
     * Collection of hotel descriptive contents.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\HotelDescriptiveContentsAType
     * $hotelDescriptiveContents
     */
    private $hotelDescriptiveContents = null;

    /**
     * Adds as hotelReservation
     *
     * Collection of hotel reservations.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\HotelReservationsAType\HotelReservationAType
     * $hotelReservation
     */
    public function addToHotelReservations(
        \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\HotelReservationsAType\HotelReservationAType $hotelReservation
    ) {
        $this->hotelReservations[] = $hotelReservation;

        return $this;
    }

    /**
     * isset hotelReservations
     *
     * Collection of hotel reservations.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelReservations($index)
    {
        return isset($this->hotelReservations[$index]);
    }

    /**
     * unset hotelReservations
     *
     * Collection of hotel reservations.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelReservations($index)
    {
        unset($this->hotelReservations[$index]);
    }

    /**
     * Gets as hotelReservations
     *
     * Collection of hotel reservations.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\HotelReservationsAType\HotelReservationAType[]
     */
    public function getHotelReservations()
    {
        return $this->hotelReservations;
    }

    /**
     * Sets a new hotelReservations
     *
     * Collection of hotel reservations.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\HotelReservationsAType\HotelReservationAType[]
     * $hotelReservations
     * @return self
     */
    public function setHotelReservations(array $hotelReservations)
    {
        $this->hotelReservations = $hotelReservations;

        return $this;
    }

    /**
     * Gets as availStatusMessages
     *
     * Collection of availability status messages.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\AvailStatusMessagesAType
     */
    public function getAvailStatusMessages()
    {
        return $this->availStatusMessages;
    }

    /**
     * Sets a new availStatusMessages
     *
     * Collection of availability status messages.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\AvailStatusMessagesAType
     * $availStatusMessages
     * @return self
     */
    public function setAvailStatusMessages(
        \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\AvailStatusMessagesAType $availStatusMessages
    ) {
        $this->availStatusMessages = $availStatusMessages;

        return $this;
    }

    /**
     * Gets as rateAmountMessages
     *
     * Collection of rate amount messages.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\RateAmountMessagesAType
     */
    public function getRateAmountMessages()
    {
        return $this->rateAmountMessages;
    }

    /**
     * Sets a new rateAmountMessages
     *
     * Collection of rate amount messages.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\RateAmountMessagesAType
     * $rateAmountMessages
     * @return self
     */
    public function setRateAmountMessages(
        \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\RateAmountMessagesAType $rateAmountMessages
    ) {
        $this->rateAmountMessages = $rateAmountMessages;

        return $this;
    }

    /**
     * Gets as hotelDescriptiveContents
     *
     * Collection of hotel descriptive contents.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\HotelDescriptiveContentsAType
     */
    public function getHotelDescriptiveContents()
    {
        return $this->hotelDescriptiveContents;
    }

    /**
     * Sets a new hotelDescriptiveContents
     *
     * Collection of hotel descriptive contents.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\HotelDescriptiveContentsAType
     * $hotelDescriptiveContents
     * @return self
     */
    public function setHotelDescriptiveContents(
        \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\HotelDescriptiveContentsAType $hotelDescriptiveContents
    ) {
        $this->hotelDescriptiveContents = $hotelDescriptiveContents;

        return $this;
    }


}

