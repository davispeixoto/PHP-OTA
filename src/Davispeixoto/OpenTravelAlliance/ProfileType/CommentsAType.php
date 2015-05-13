<?php

namespace Davispeixoto\OpenTravelAlliance\ProfileType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{

    /**
     * Comment details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ProfileType\CommentsAType\CommentAType[]
     * $comment
     */
    private $comment = null;

    /**
     * Adds as comment
     *
     * Comment details.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ProfileType\CommentsAType\CommentAType
     * $comment
     */
    public function addToComment(\Davispeixoto\OpenTravelAlliance\ProfileType\CommentsAType\CommentAType $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * isset comment
     *
     * Comment details.
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
     * Comment details.
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
     * Comment details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ProfileType\CommentsAType\CommentAType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comment details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ProfileType\CommentsAType\CommentAType[]
     * $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}

