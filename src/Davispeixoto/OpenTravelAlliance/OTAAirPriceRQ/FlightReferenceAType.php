<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirPriceRQ;

/**
 * Class representing FlightReferenceAType
 */
class FlightReferenceAType
{

    /**
     * The flight number(s) for which pricing is requested.
     *
     * @property string $flightRefNumber
     */
    private $flightRefNumber = null;

    /**
     * Used to specify the fare basis code to be used in pricing for these flight
     * segments.
     *
     * @property string $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * When true, the flight segment is to be priced as open jaw. When false, do not
     * price as open jaw.
     *
     * @property boolean $openJawInd
     */
    private $openJawInd = null;

    /**
     * Gets as flightRefNumber
     *
     * The flight number(s) for which pricing is requested.
     *
     * @return string
     */
    public function getFlightRefNumber()
    {
        return $this->flightRefNumber;
    }

    /**
     * Sets a new flightRefNumber
     *
     * The flight number(s) for which pricing is requested.
     *
     * @param string $flightRefNumber
     * @return self
     */
    public function setFlightRefNumber($flightRefNumber)
    {
        $this->flightRefNumber = $flightRefNumber;

        return $this;
    }

    /**
     * Gets as fareBasisCode
     *
     * Used to specify the fare basis code to be used in pricing for these flight
     * segments.
     *
     * @return string
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * Used to specify the fare basis code to be used in pricing for these flight
     * segments.
     *
     * @param string $fareBasisCode
     * @return self
     */
    public function setFareBasisCode($fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as openJawInd
     *
     * When true, the flight segment is to be priced as open jaw. When false, do not
     * price as open jaw.
     *
     * @return boolean
     */
    public function getOpenJawInd()
    {
        return $this->openJawInd;
    }

    /**
     * Sets a new openJawInd
     *
     * When true, the flight segment is to be priced as open jaw. When false, do not
     * price as open jaw.
     *
     * @param boolean $openJawInd
     * @return self
     */
    public function setOpenJawInd($openJawInd)
    {
        $this->openJawInd = $openJawInd;

        return $this;
    }


}

