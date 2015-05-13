<?php

namespace Davispeixoto\OpenTravelAlliance\RateQualifierType;

/**
 * Class representing RateCommentsAType
 */
class RateCommentsAType
{

    /**
     * This may be used to provide any additional information about rates (e.g., must
     * return by Monday at 8 AM).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RateQualifierType\RateCommentsAType\RateCommentAType[]
     * $rateComment
     */
    private $rateComment = null;

    /**
     * Adds as rateComment
     *
     * This may be used to provide any additional information about rates (e.g., must
     * return by Monday at 8 AM).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RateQualifierType\RateCommentsAType\RateCommentAType
     * $rateComment
     */
    public function addToRateComment(
        \Davispeixoto\OpenTravelAlliance\RateQualifierType\RateCommentsAType\RateCommentAType $rateComment
    ) {
        $this->rateComment[] = $rateComment;

        return $this;
    }

    /**
     * isset rateComment
     *
     * This may be used to provide any additional information about rates (e.g., must
     * return by Monday at 8 AM).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRateComment($index)
    {
        return isset($this->rateComment[$index]);
    }

    /**
     * unset rateComment
     *
     * This may be used to provide any additional information about rates (e.g., must
     * return by Monday at 8 AM).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRateComment($index)
    {
        unset($this->rateComment[$index]);
    }

    /**
     * Gets as rateComment
     *
     * This may be used to provide any additional information about rates (e.g., must
     * return by Monday at 8 AM).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RateQualifierType\RateCommentsAType\RateCommentAType[]
     */
    public function getRateComment()
    {
        return $this->rateComment;
    }

    /**
     * Sets a new rateComment
     *
     * This may be used to provide any additional information about rates (e.g., must
     * return by Monday at 8 AM).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RateQualifierType\RateCommentsAType\RateCommentAType[]
     * $rateComment
     * @return self
     */
    public function setRateComment(array $rateComment)
    {
        $this->rateComment = $rateComment;

        return $this;
    }


}

