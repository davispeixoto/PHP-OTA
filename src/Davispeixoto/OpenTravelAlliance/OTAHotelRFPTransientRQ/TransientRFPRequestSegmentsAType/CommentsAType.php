<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{

    /**
     * May be used to send textual information regarding the request such as questions,
     * legal text, special requests, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\CommentsAType\CommentAType[]
     * $comment
     */
    private $comment = null;

    /**
     * Adds as comment
     *
     * May be used to send textual information regarding the request such as questions,
     * legal text, special requests, etc.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\CommentsAType\CommentAType
     * $comment
     */
    public function addToComment(
        \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\CommentsAType\CommentAType $comment
    ) {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * isset comment
     *
     * May be used to send textual information regarding the request such as questions,
     * legal text, special requests, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * May be used to send textual information regarding the request such as questions,
     * legal text, special requests, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * May be used to send textual information regarding the request such as questions,
     * legal text, special requests, etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\CommentsAType\CommentAType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * May be used to send textual information regarding the request such as questions,
     * legal text, special requests, etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\CommentsAType\CommentAType[]
     * $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}

