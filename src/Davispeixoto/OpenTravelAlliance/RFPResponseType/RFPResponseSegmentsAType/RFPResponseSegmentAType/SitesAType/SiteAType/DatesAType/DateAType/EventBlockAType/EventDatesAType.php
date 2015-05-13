<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType;

/**
 * Class representing EventDatesAType
 */
class EventDatesAType
{

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType[]
     * $eventDate
     */
    private $eventDate = null;

    /**
     * Adds as eventDate
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType
     * $eventDate
     */
    public function addToEventDate(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType $eventDate
    ) {
        $this->eventDate[] = $eventDate;

        return $this;
    }

    /**
     * isset eventDate
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventDate($index)
    {
        return isset($this->eventDate[$index]);
    }

    /**
     * unset eventDate
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventDate($index)
    {
        unset($this->eventDate[$index]);
    }

    /**
     * Gets as eventDate
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType[]
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Sets a new eventDate
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType[]
     * $eventDate
     * @return self
     */
    public function setEventDate(array $eventDate)
    {
        $this->eventDate = $eventDate;

        return $this;
    }


}

