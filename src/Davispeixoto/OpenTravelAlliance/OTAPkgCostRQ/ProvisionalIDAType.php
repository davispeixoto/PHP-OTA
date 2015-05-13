<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgCostRQ;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing ProvisionalIDAType
 */
class ProvisionalIDAType extends UniqueIDType
{

    /**
     * The date and/or time at which the inventory will be returned to stock if the
     * temporary booking has not been confirmed
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     * $expireDateTime
     */
    private $expireDateTime = null;

    /**
     * Gets as expireDateTime
     *
     * The date and/or time at which the inventory will be returned to stock if the
     * temporary booking has not been confirmed
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getExpireDateTime()
    {
        return $this->expireDateTime;
    }

    /**
     * Sets a new expireDateTime
     *
     * The date and/or time at which the inventory will be returned to stock if the
     * temporary booking has not been confirmed
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $expireDateTime
     * @return self
     */
    public function setExpireDateTime(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $expireDateTime)
    {
        $this->expireDateTime = $expireDateTime;

        return $this;
    }


}

