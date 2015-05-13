<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType;

/**
 * Class representing AvailRequestSegmentAType
 */
class AvailRequestSegmentAType
{

    /**
     * The HotelSearchCriteria container allows for future expansion of the message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType
     * $hotelSearchCriteria
     */
    private $hotelSearchCriteria = null;

    /**
     * Gets as hotelSearchCriteria
     *
     * The HotelSearchCriteria container allows for future expansion of the message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType
     */
    public function getHotelSearchCriteria()
    {
        return $this->hotelSearchCriteria;
    }

    /**
     * Sets a new hotelSearchCriteria
     *
     * The HotelSearchCriteria container allows for future expansion of the message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType
     * $hotelSearchCriteria
     * @return self
     */
    public function setHotelSearchCriteria(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType $hotelSearchCriteria
    ) {
        $this->hotelSearchCriteria = $hotelSearchCriteria;

        return $this;
    }


}

