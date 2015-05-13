<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType;

/**
 * Class representing RoomBlockAType
 */
class RoomBlockAType
{

    /**
     * A collection of multiple StayDates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType[]
     * $stayDates
     */
    private $stayDates = null;

    /**
     * These fees apply to the dates or date range specified in the Date element. This
     * provides the ability to apply fees to all room types being returned.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $fees
     */
    private $fees = null;

    /**
     * An open field to comment on the room block.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Adds as stayDate
     *
     * A collection of multiple StayDates.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType
     * $stayDate
     */
    public function addToStayDates(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType $stayDate
    ) {
        $this->stayDates[] = $stayDate;

        return $this;
    }

    /**
     * isset stayDates
     *
     * A collection of multiple StayDates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStayDates($index)
    {
        return isset($this->stayDates[$index]);
    }

    /**
     * unset stayDates
     *
     * A collection of multiple StayDates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStayDates($index)
    {
        unset($this->stayDates[$index]);
    }

    /**
     * Gets as stayDates
     *
     * A collection of multiple StayDates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType[]
     */
    public function getStayDates()
    {
        return $this->stayDates;
    }

    /**
     * Sets a new stayDates
     *
     * A collection of multiple StayDates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType[]
     * $stayDates
     * @return self
     */
    public function setStayDates(array $stayDates)
    {
        $this->stayDates = $stayDates;

        return $this;
    }

    /**
     * Adds as fee
     *
     * These fees apply to the dates or date range specified in the Date element. This
     * provides the ability to apply fees to all room types being returned.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $fee
     */
    public function addToFees(\Davispeixoto\OpenTravelAlliance\FeeType $fee)
    {
        $this->fees[] = $fee;

        return $this;
    }

    /**
     * isset fees
     *
     * These fees apply to the dates or date range specified in the Date element. This
     * provides the ability to apply fees to all room types being returned.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * These fees apply to the dates or date range specified in the Date element. This
     * provides the ability to apply fees to all room types being returned.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * These fees apply to the dates or date range specified in the Date element. This
     * provides the ability to apply fees to all room types being returned.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * These fees apply to the dates or date range specified in the Date element. This
     * provides the ability to apply fees to all room types being returned.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;

        return $this;
    }

    /**
     * Adds as comments
     *
     * An open field to comment on the room block.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comments
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * isset comments
     *
     * An open field to comment on the room block.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * An open field to comment on the room block.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * An open field to comment on the room block.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * An open field to comment on the room block.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

