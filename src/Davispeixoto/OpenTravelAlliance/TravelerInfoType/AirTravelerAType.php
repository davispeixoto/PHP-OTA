<?php

namespace Davispeixoto\OpenTravelAlliance\TravelerInfoType;

use Davispeixoto\OpenTravelAlliance\AirTravelerType;

/**
 * Class representing AirTravelerAType
 */
class AirTravelerAType extends AirTravelerType
{

    /**
     * A comment about the air traveler.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoType\AirTravelerAType\CommentAType[]
     * $comment
     */
    private $comment = null;

    /**
     * Adds as comment
     *
     * A comment about the air traveler.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoType\AirTravelerAType\CommentAType
     * $comment
     */
    public function addToComment(
        \Davispeixoto\OpenTravelAlliance\TravelerInfoType\AirTravelerAType\CommentAType $comment
    ) {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * isset comment
     *
     * A comment about the air traveler.
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
     * A comment about the air traveler.
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
     * A comment about the air traveler.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoType\AirTravelerAType\CommentAType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A comment about the air traveler.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoType\AirTravelerAType\CommentAType[]
     * $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}

