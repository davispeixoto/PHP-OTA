<?php

namespace Davispeixoto\OpenTravelAlliance\CruisePackageType;

use Davispeixoto\OpenTravelAlliance\LocationGeneralType;

/**
 * Class representing LocationAType
 */
class LocationAType extends LocationGeneralType
{

    /**
     * A code used to identify a location.
     *
     * @property string $locationCode
     */
    private $locationCode = null;

    /**
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal
     * code).
     *  IATA
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Specifies the full name of the port city.
     *
     * @property string $locationName
     */
    private $locationName = null;

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
     * Provides additional information pertaining to the location or cruise package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $information
     */
    private $information = null;

    /**
     * Gets as locationCode
     *
     * A code used to identify a location.
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * A code used to identify a location.
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal
     * code).
     *  IATA
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal
     * code).
     *  IATA
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as locationName
     *
     * Specifies the full name of the port city.
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * Sets a new locationName
     *
     * Specifies the full name of the port city.
     *
     * @param string $locationName
     * @return self
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;

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
     * Gets as information
     *
     * Provides additional information pertaining to the location or cruise package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * Provides additional information pertaining to the location or cruise package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $information
     * @return self
     */
    public function setInformation(\Davispeixoto\OpenTravelAlliance\ParagraphType $information)
    {
        $this->information = $information;

        return $this;
    }


}

