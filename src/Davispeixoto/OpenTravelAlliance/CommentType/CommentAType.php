<?php

namespace Davispeixoto\OpenTravelAlliance\CommentType;

use Davispeixoto\OpenTravelAlliance\ParagraphType;

/**
 * Class representing CommentAType
 */
class CommentAType extends ParagraphType
{

    /**
     * Unique identifier for the system which created the comment.
     *
     * @property string $commentOriginatorCode
     */
    private $commentOriginatorCode = null;

    /**
     * When true, the comment may be shown to the consumer. When false, the comment may
     * not be shown to the consumer.
     *
     * @property boolean $guestViewable
     */
    private $guestViewable = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as commentOriginatorCode
     *
     * Unique identifier for the system which created the comment.
     *
     * @return string
     */
    public function getCommentOriginatorCode()
    {
        return $this->commentOriginatorCode;
    }

    /**
     * Sets a new commentOriginatorCode
     *
     * Unique identifier for the system which created the comment.
     *
     * @param string $commentOriginatorCode
     * @return self
     */
    public function setCommentOriginatorCode($commentOriginatorCode)
    {
        $this->commentOriginatorCode = $commentOriginatorCode;

        return $this;
    }

    /**
     * Gets as guestViewable
     *
     * When true, the comment may be shown to the consumer. When false, the comment may
     * not be shown to the consumer.
     *
     * @return boolean
     */
    public function getGuestViewable()
    {
        return $this->guestViewable;
    }

    /**
     * Sets a new guestViewable
     *
     * When true, the comment may be shown to the consumer. When false, the comment may
     * not be shown to the consumer.
     *
     * @param boolean $guestViewable
     * @return self
     */
    public function setGuestViewable($guestViewable)
    {
        $this->guestViewable = $guestViewable;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

