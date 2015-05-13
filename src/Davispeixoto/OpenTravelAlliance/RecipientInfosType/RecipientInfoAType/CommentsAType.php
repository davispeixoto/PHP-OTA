<?php

namespace Davispeixoto\OpenTravelAlliance\RecipientInfosType\RecipientInfoAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{

    /**
     * Comment information pertaining to the purchase. This may be used to pass a
     * message to be printed on a note card.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     */
    private $comment = null;

    /**
     * Adds as comment
     *
     * Comment information pertaining to the purchase. This may be used to pass a
     * message to be printed on a note card.
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
     * Comment information pertaining to the purchase. This may be used to pass a
     * message to be printed on a note card.
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
     * Comment information pertaining to the purchase. This may be used to pass a
     * message to be printed on a note card.
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
     * Comment information pertaining to the purchase. This may be used to pass a
     * message to be printed on a note card.
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
     * Comment information pertaining to the purchase. This may be used to pass a
     * message to be printed on a note card.
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

