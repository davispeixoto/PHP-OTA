<?php

namespace Davispeixoto\OpenTravelAlliance\ProfileType\CommentsAType;

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
     * An industry segment (e.g., Air, Hotel, Car) to which the comment refers.
     *
     * @property string $category
     */
    private $category = null;

    /**
     * Reference to an airline in AirlinePrefType/VendorPref.
     *
     * @property string $airlineVendorPrefRPH
     */
    private $airlineVendorPrefRPH = null;

    /**
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @property string $transferAction
     */
    private $transferAction = null;

    /**
     * Indicates at which date an action described in the comment must be taken.
     *
     * @property \DateTime $actionDate
     */
    private $actionDate = null;

    /**
     * Specifies those authorized to view a comment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ProfileType\CommentsAType\CommentAType\AuthorizedViewerAType[]
     * $authorizedViewer
     */
    private $authorizedViewer = null;

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
     * Gets as category
     *
     * An industry segment (e.g., Air, Hotel, Car) to which the comment refers.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * An industry segment (e.g., Air, Hotel, Car) to which the comment refers.
     *
     * @param string $category
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Gets as airlineVendorPrefRPH
     *
     * Reference to an airline in AirlinePrefType/VendorPref.
     *
     * @return string
     */
    public function getAirlineVendorPrefRPH()
    {
        return $this->airlineVendorPrefRPH;
    }

    /**
     * Sets a new airlineVendorPrefRPH
     *
     * Reference to an airline in AirlinePrefType/VendorPref.
     *
     * @param string $airlineVendorPrefRPH
     * @return self
     */
    public function setAirlineVendorPrefRPH($airlineVendorPrefRPH)
    {
        $this->airlineVendorPrefRPH = $airlineVendorPrefRPH;

        return $this;
    }

    /**
     * Gets as transferAction
     *
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @return string
     */
    public function getTransferAction()
    {
        return $this->transferAction;
    }

    /**
     * Sets a new transferAction
     *
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @param string $transferAction
     * @return self
     */
    public function setTransferAction($transferAction)
    {
        $this->transferAction = $transferAction;

        return $this;
    }

    /**
     * Gets as actionDate
     *
     * Indicates at which date an action described in the comment must be taken.
     *
     * @return \DateTime
     */
    public function getActionDate()
    {
        return $this->actionDate;
    }

    /**
     * Sets a new actionDate
     *
     * Indicates at which date an action described in the comment must be taken.
     *
     * @param \DateTime $actionDate
     * @return self
     */
    public function setActionDate(\DateTime $actionDate)
    {
        $this->actionDate = $actionDate;

        return $this;
    }

    /**
     * Adds as authorizedViewer
     *
     * Specifies those authorized to view a comment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ProfileType\CommentsAType\CommentAType\AuthorizedViewerAType
     * $authorizedViewer
     */
    public function addToAuthorizedViewer(
        \Davispeixoto\OpenTravelAlliance\ProfileType\CommentsAType\CommentAType\AuthorizedViewerAType $authorizedViewer
    ) {
        $this->authorizedViewer[] = $authorizedViewer;

        return $this;
    }

    /**
     * isset authorizedViewer
     *
     * Specifies those authorized to view a comment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuthorizedViewer($index)
    {
        return isset($this->authorizedViewer[$index]);
    }

    /**
     * unset authorizedViewer
     *
     * Specifies those authorized to view a comment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuthorizedViewer($index)
    {
        unset($this->authorizedViewer[$index]);
    }

    /**
     * Gets as authorizedViewer
     *
     * Specifies those authorized to view a comment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ProfileType\CommentsAType\CommentAType\AuthorizedViewerAType[]
     */
    public function getAuthorizedViewer()
    {
        return $this->authorizedViewer;
    }

    /**
     * Sets a new authorizedViewer
     *
     * Specifies those authorized to view a comment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ProfileType\CommentsAType\CommentAType\AuthorizedViewerAType[]
     * $authorizedViewer
     * @return self
     */
    public function setAuthorizedViewer(array $authorizedViewer)
    {
        $this->authorizedViewer = $authorizedViewer;

        return $this;
    }


}

