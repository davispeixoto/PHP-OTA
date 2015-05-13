<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPurchaseItemRS\PurchaseItemInfoAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{

    /**
     * Comments pertaining to the orders.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    private $comment = null;

    /**
     * Gets as comment
     *
     * Comments pertaining to the orders.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comments pertaining to the orders.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     * @return self
     */
    public function setComment(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}

