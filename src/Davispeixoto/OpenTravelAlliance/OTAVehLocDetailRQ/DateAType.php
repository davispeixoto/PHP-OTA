<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailRQ;

/**
 * Class representing DateAType
 */
class DateAType
{

    /**
     * The date and time a car will be picked up at this location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $pickUpDateTime
     */
    private $pickUpDateTime = null;

    /**
     * The date and time a car will be returned at this location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $returnDateTime
     */
    private $returnDateTime = null;

    /**
     * Gets as pickUpDateTime
     *
     * The date and time a car will be picked up at this location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getPickUpDateTime()
    {
        return $this->pickUpDateTime;
    }

    /**
     * Sets a new pickUpDateTime
     *
     * The date and time a car will be picked up at this location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $pickUpDateTime
     * @return self
     */
    public function setPickUpDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $pickUpDateTime)
    {
        $this->pickUpDateTime = $pickUpDateTime;

        return $this;
    }

    /**
     * Gets as returnDateTime
     *
     * The date and time a car will be returned at this location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getReturnDateTime()
    {
        return $this->returnDateTime;
    }

    /**
     * Sets a new returnDateTime
     *
     * The date and time a car will be returned at this location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $returnDateTime
     * @return self
     */
    public function setReturnDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $returnDateTime)
    {
        $this->returnDateTime = $returnDateTime;

        return $this;
    }


}

