<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType;

/**
 * Class representing StayDatesAType
 */
class StayDatesAType
{

    /**
     * Contains the date or date span for the room type availability.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType[]
     * $stayDate
     */
    private $stayDate = null;

    /**
     * Adds as stayDate
     *
     * Contains the date or date span for the room type availability.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType
     * $stayDate
     */
    public function addToStayDate(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType $stayDate
    ) {
        $this->stayDate[] = $stayDate;

        return $this;
    }

    /**
     * isset stayDate
     *
     * Contains the date or date span for the room type availability.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStayDate($index)
    {
        return isset($this->stayDate[$index]);
    }

    /**
     * unset stayDate
     *
     * Contains the date or date span for the room type availability.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStayDate($index)
    {
        unset($this->stayDate[$index]);
    }

    /**
     * Gets as stayDate
     *
     * Contains the date or date span for the room type availability.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType[]
     */
    public function getStayDate()
    {
        return $this->stayDate;
    }

    /**
     * Sets a new stayDate
     *
     * Contains the date or date span for the room type availability.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType[]
     * $stayDate
     * @return self
     */
    public function setStayDate(array $stayDate)
    {
        $this->stayDate = $stayDate;

        return $this;
    }


}

