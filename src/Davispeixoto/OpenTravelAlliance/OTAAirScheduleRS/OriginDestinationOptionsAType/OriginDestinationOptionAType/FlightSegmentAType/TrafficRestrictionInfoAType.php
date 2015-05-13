<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType;

/**
 * Class representing TrafficRestrictionInfoAType
 */
class TrafficRestrictionInfoAType
{

    /**
     * A restriction in coded format that may affect the flight schedule. Refer to
     * OpenTravel Code list Traffic Restriction Code (TRC).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * A restriction in text format that may affect the flight schedule.
     *
     * @property string $text
     */
    private $text = null;

    /**
     * Gets as code
     *
     * A restriction in coded format that may affect the flight schedule. Refer to
     * OpenTravel Code list Traffic Restriction Code (TRC).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A restriction in coded format that may affect the flight schedule. Refer to
     * OpenTravel Code list Traffic Restriction Code (TRC).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as text
     *
     * A restriction in text format that may affect the flight schedule.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * A restriction in text format that may affect the flight schedule.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }


}

