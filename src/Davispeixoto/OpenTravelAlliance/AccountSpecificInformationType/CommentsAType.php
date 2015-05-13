<?php

namespace Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{

    /**
     * Provides additional account specific information (e.g. notes about all rates or
     * questions specific to this account).
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     */
    private $comment = null;

    /**
     * Adds as comment
     *
     * Provides additional account specific information (e.g. notes about all rates or
     * questions specific to this account).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComment(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * isset comment
     *
     * Provides additional account specific information (e.g. notes about all rates or
     * questions specific to this account).
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
     * Provides additional account specific information (e.g. notes about all rates or
     * questions specific to this account).
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
     * Provides additional account specific information (e.g. notes about all rates or
     * questions specific to this account).
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Provides additional account specific information (e.g. notes about all rates or
     * questions specific to this account).
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}

