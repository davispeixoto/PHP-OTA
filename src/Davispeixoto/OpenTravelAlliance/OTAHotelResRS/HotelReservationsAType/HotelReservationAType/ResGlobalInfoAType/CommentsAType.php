<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{

    /**
     * Comment MUST provide textual information which applies to the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType\CommentAType
     * $comment
     */
    private $comment = null;

    /**
     * Gets as comment
     *
     * Comment MUST provide textual information which applies to the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType\CommentAType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comment MUST provide textual information which applies to the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType\CommentAType
     * $comment
     * @return self
     */
    public function setComment(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType\CommentAType $comment
    ) {
        $this->comment = $comment;

        return $this;
    }


}

