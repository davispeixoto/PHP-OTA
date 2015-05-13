<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitorInfoAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{

    /**
     * A comment about the exhibitors as a group (e.g., accessibility or special needs
     * or demographic profile comments).
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     */
    private $comment = null;

    /**
     * Adds as comment
     *
     * A comment about the exhibitors as a group (e.g., accessibility or special needs
     * or demographic profile comments).
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
     * A comment about the exhibitors as a group (e.g., accessibility or special needs
     * or demographic profile comments).
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
     * A comment about the exhibitors as a group (e.g., accessibility or special needs
     * or demographic profile comments).
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
     * A comment about the exhibitors as a group (e.g., accessibility or special needs
     * or demographic profile comments).
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
     * A comment about the exhibitors as a group (e.g., accessibility or special needs
     * or demographic profile comments).
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

