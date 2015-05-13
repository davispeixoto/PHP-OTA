<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType;

/**
 * Class representing ResGlobalInfoAType
 */
class ResGlobalInfoAType
{

    /**
     * The TimeSpan MUST specify the arrival date and departure date which covers the
     * whole Reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\TimeSpanAType
     * $timeSpan
     */
    private $timeSpan = null;

    /**
     * The Comments container allows for future expansion of the message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType
     * $comments
     */
    private $comments = null;

    /**
     * Guarantee MUST specify the guarantee information for the Reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType
     * $guarantee
     */
    private $guarantee = null;

    /**
     * The CancelPenalties container allows for future expansion of the message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType[]
     * $cancelPenalties
     */
    private $cancelPenalties = null;

    /**
     * A collection of ID's for the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType\HotelReservationIDAType[]
     * $hotelReservationIDs
     */
    private $hotelReservationIDs = null;

    /**
     * Gets as timeSpan
     *
     * The TimeSpan MUST specify the arrival date and departure date which covers the
     * whole Reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\TimeSpanAType
     */
    public function getTimeSpan()
    {
        return $this->timeSpan;
    }

    /**
     * Sets a new timeSpan
     *
     * The TimeSpan MUST specify the arrival date and departure date which covers the
     * whole Reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\TimeSpanAType
     * $timeSpan
     * @return self
     */
    public function setTimeSpan(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\TimeSpanAType $timeSpan
    ) {
        $this->timeSpan = $timeSpan;

        return $this;
    }

    /**
     * Gets as comments
     *
     * The Comments container allows for future expansion of the message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * The Comments container allows for future expansion of the message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType
     * $comments
     * @return self
     */
    public function setComments(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType $comments
    ) {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Gets as guarantee
     *
     * Guarantee MUST specify the guarantee information for the Reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Sets a new guarantee
     *
     * Guarantee MUST specify the guarantee information for the Reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType
     * $guarantee
     * @return self
     */
    public function setGuarantee(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType $guarantee
    ) {
        $this->guarantee = $guarantee;

        return $this;
    }

    /**
     * Adds as cancelPenalty
     *
     * The CancelPenalties container allows for future expansion of the message.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType
     * $cancelPenalty
     */
    public function addToCancelPenalties(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType $cancelPenalty
    ) {
        $this->cancelPenalties[] = $cancelPenalty;

        return $this;
    }

    /**
     * isset cancelPenalties
     *
     * The CancelPenalties container allows for future expansion of the message.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCancelPenalties($index)
    {
        return isset($this->cancelPenalties[$index]);
    }

    /**
     * unset cancelPenalties
     *
     * The CancelPenalties container allows for future expansion of the message.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCancelPenalties($index)
    {
        unset($this->cancelPenalties[$index]);
    }

    /**
     * Gets as cancelPenalties
     *
     * The CancelPenalties container allows for future expansion of the message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType[]
     */
    public function getCancelPenalties()
    {
        return $this->cancelPenalties;
    }

    /**
     * Sets a new cancelPenalties
     *
     * The CancelPenalties container allows for future expansion of the message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType[]
     * $cancelPenalties
     * @return self
     */
    public function setCancelPenalties(array $cancelPenalties)
    {
        $this->cancelPenalties = $cancelPenalties;

        return $this;
    }

    /**
     * Adds as hotelReservationID
     *
     * A collection of ID's for the reservation.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType\HotelReservationIDAType
     * $hotelReservationID
     */
    public function addToHotelReservationIDs(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType\HotelReservationIDAType $hotelReservationID
    ) {
        $this->hotelReservationIDs[] = $hotelReservationID;

        return $this;
    }

    /**
     * isset hotelReservationIDs
     *
     * A collection of ID's for the reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelReservationIDs($index)
    {
        return isset($this->hotelReservationIDs[$index]);
    }

    /**
     * unset hotelReservationIDs
     *
     * A collection of ID's for the reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelReservationIDs($index)
    {
        unset($this->hotelReservationIDs[$index]);
    }

    /**
     * Gets as hotelReservationIDs
     *
     * A collection of ID's for the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType\HotelReservationIDAType[]
     */
    public function getHotelReservationIDs()
    {
        return $this->hotelReservationIDs;
    }

    /**
     * Sets a new hotelReservationIDs
     *
     * A collection of ID's for the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType\HotelReservationIDAType[]
     * $hotelReservationIDs
     * @return self
     */
    public function setHotelReservationIDs(array $hotelReservationIDs)
    {
        $this->hotelReservationIDs = $hotelReservationIDs;

        return $this;
    }


}

