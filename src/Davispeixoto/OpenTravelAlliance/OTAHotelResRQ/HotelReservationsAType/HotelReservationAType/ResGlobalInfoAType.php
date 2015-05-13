<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType;

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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\TimeSpanAType
     * $timeSpan
     */
    private $timeSpan = null;

    /**
     * The Comments container allows for future expansion of the message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType
     * $comments
     */
    private $comments = null;

    /**
     * Guarantee MUST specify the guarantee information for the Reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType
     * $guarantee
     */
    private $guarantee = null;

    /**
     * The HotelReservationIDs container allows for future expansion of the message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\TimeSpanAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\TimeSpanAType
     * $timeSpan
     * @return self
     */
    public function setTimeSpan(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\TimeSpanAType $timeSpan
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType
     * $comments
     * @return self
     */
    public function setComments(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType $comments
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType
     * $guarantee
     * @return self
     */
    public function setGuarantee(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType $guarantee
    ) {
        $this->guarantee = $guarantee;

        return $this;
    }

    /**
     * Gets as hotelReservationIDs
     *
     * The HotelReservationIDs container allows for future expansion of the message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType
     */
    public function getHotelReservationIDs()
    {
        return $this->hotelReservationIDs;
    }

    /**
     * Sets a new hotelReservationIDs
     *
     * The HotelReservationIDs container allows for future expansion of the message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType
     * $hotelReservationIDs
     * @return self
     */
    public function setHotelReservationIDs(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType $hotelReservationIDs
    ) {
        $this->hotelReservationIDs = $hotelReservationIDs;

        return $this;
    }


}

