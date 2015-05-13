<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType;

/**
 * Class representing DatesAType
 */
class DatesAType
{

    /**
     * The dates correspond to the appropriate primary or secondary dates identified in
     * the request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType
     * $date
     */
    private $date = null;

    /**
     * Gets as date
     *
     * The dates correspond to the appropriate primary or secondary dates identified in
     * the request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The dates correspond to the appropriate primary or secondary dates identified in
     * the request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType
     * $date
     * @return self
     */
    public function setDate(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType $date
    ) {
        $this->date = $date;

        return $this;
    }


}

