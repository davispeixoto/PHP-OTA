<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientNotifRS;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{

    /**
     * This is an open text field available to an organization to allow them to return
     * a response indicating additional information is needed from the hotelier (e.g.
     * not all requested information was supplied by the responding hotel and in order
     * for the organization to review the proposal all information must be sent, please
     * resend the information with all appropriate information).
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    private $comment = null;

    /**
     * Gets as comment
     *
     * This is an open text field available to an organization to allow them to return
     * a response indicating additional information is needed from the hotelier (e.g.
     * not all requested information was supplied by the responding hotel and in order
     * for the organization to review the proposal all information must be sent, please
     * resend the information with all appropriate information).
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * This is an open text field available to an organization to allow them to return
     * a response indicating additional information is needed from the hotelier (e.g.
     * not all requested information was supplied by the responding hotel and in order
     * for the organization to review the proposal all information must be sent, please
     * resend the information with all appropriate information).
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     * @return self
     */
    public function setComment(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}

