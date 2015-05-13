<?php

namespace Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{

    /**
     * A comment that pertains to the overall event (e.g., event overview, event
     * objectives).
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     */
    private $comment = null;

    /**
     * Adds as comment
     *
     * A comment that pertains to the overall event (e.g., event overview, event
     * objectives).
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
     * A comment that pertains to the overall event (e.g., event overview, event
     * objectives).
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
     * A comment that pertains to the overall event (e.g., event overview, event
     * objectives).
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
     * A comment that pertains to the overall event (e.g., event overview, event
     * objectives).
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
     * A comment that pertains to the overall event (e.g., event overview, event
     * objectives).
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

