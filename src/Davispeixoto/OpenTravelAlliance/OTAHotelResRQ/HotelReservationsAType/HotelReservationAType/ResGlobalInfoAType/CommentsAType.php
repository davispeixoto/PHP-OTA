<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{

    /**
     * Comment May provide textual information which applies to the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType\CommentAType
     * $comment
     */
    private $comment = null;

    /**
     * Gets as comment
     *
     * Comment May provide textual information which applies to the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType\CommentAType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comment May provide textual information which applies to the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType\CommentAType
     * $comment
     * @return self
     */
    public function setComment(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType\CommentAType $comment
    ) {
        $this->comment = $comment;

        return $this;
    }


}

