<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType;

/**
 * Class representing HotelSearchCriteriaAType
 */
class HotelSearchCriteriaAType
{

    /**
     * Criterion MUST specify the search criterion for the availability request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType
     * $criterion
     */
    private $criterion = null;

    /**
     * Gets as criterion
     *
     * Criterion MUST specify the search criterion for the availability request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType
     */
    public function getCriterion()
    {
        return $this->criterion;
    }

    /**
     * Sets a new criterion
     *
     * Criterion MUST specify the search criterion for the availability request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType
     * $criterion
     * @return self
     */
    public function setCriterion(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType $criterion
    ) {
        $this->criterion = $criterion;

        return $this;
    }


}

