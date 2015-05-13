<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AvailRequestSegmentType
 *
 * Availability request segment information in which hotel search criteria is
 * specified that includes hotel reference, stay date range and room stay
 * information.
 * XSD Type: AvailRequestSegmentType
 */
class AvailRequestSegmentType
{

    /**
     * The HotelSearchCriteria container allows for future expansion of the message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelSearchCriteriaType
     * $hotelSearchCriteria
     */
    private $hotelSearchCriteria = null;

    /**
     * Gets as hotelSearchCriteria
     *
     * The HotelSearchCriteria container allows for future expansion of the message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelSearchCriteriaType
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
     * @param \Davispeixoto\OpenTravelAlliance\HotelSearchCriteriaType
     * $hotelSearchCriteria
     * @return self
     */
    public function setHotelSearchCriteria(
        \Davispeixoto\OpenTravelAlliance\HotelSearchCriteriaType $hotelSearchCriteria
    ) {
        $this->hotelSearchCriteria = $hotelSearchCriteria;

        return $this;
    }


}

