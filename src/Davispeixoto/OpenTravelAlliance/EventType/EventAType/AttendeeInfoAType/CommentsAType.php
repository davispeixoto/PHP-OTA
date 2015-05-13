<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\AttendeeInfoAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{

    /**
     * Comments about the attendees as a group (e.g., accessibility or special needs or
     * demographic profile comments).
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     */
    private $comment = null;

    /**
     * Adds as comment
     *
     * Comments about the attendees as a group (e.g., accessibility or special needs or
     * demographic profile comments).
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
     * Comments about the attendees as a group (e.g., accessibility or special needs or
     * demographic profile comments).
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
     * Comments about the attendees as a group (e.g., accessibility or special needs or
     * demographic profile comments).
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
     * Comments about the attendees as a group (e.g., accessibility or special needs or
     * demographic profile comments).
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
     * Comments about the attendees as a group (e.g., accessibility or special needs or
     * demographic profile comments).
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

