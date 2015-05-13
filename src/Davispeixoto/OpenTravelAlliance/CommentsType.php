<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CommentsType
 *
 * A collection of comments associated with a reservation.
 * XSD Type: CommentsType
 */
class CommentsType
{

    /**
     * Comment May provide textual information which applies to the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommentType $comment
     */
    private $comment = null;

    /**
     * Gets as comment
     *
     * Comment May provide textual information which applies to the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommentType
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
     * @param \Davispeixoto\OpenTravelAlliance\CommentType $comment
     * @return self
     */
    public function setComment(\Davispeixoto\OpenTravelAlliance\CommentType $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}

