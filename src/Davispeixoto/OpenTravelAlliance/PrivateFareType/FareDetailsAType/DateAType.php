<?php

namespace Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType;

/**
 * Class representing DateAType
 */
class DateAType
{

    /**
     * Applicable date.Example: 2013-01-13Note: This is the applicable date for the
     * purpose specified in the Type element.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $date
     */
    private $date = null;

    /**
     * Fare date type.Example: LastTicketing
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListAirFareDateType $type
     */
    private $type = null;

    /**
     * Gets as date
     *
     * Applicable date.Example: 2013-01-13Note: This is the applicable date for the
     * purpose specified in the Type element.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Applicable date.Example: 2013-01-13Note: This is the applicable date for the
     * purpose specified in the Type element.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $date
     * @return self
     */
    public function setDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as type
     *
     * Fare date type.Example: LastTicketing
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListAirFareDateType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Fare date type.Example: LastTicketing
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListAirFareDateType $type
     * @return self
     */
    public function setType(\Davispeixoto\OpenTravelAlliance\ListAirFareDateType $type)
    {
        $this->type = $type;

        return $this;
    }


}

