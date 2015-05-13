<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CruisePackageType
 *
 * Defines pre/post/shorex/bus/transfers packages.
 * XSD Type: CruisePackageType
 */
class CruisePackageType
{

    /**
     * Specifies the type of the package. Refer to OpenTravel Codelist Cruise Package
     * Type (CPK).
     *
     * @property string $packageTypeCode
     */
    private $packageTypeCode = null;

    /**
     * Specifies the inclusive package code as defined by the cruise line.
     *
     * @property string $cruisePackageCode
     */
    private $cruisePackageCode = null;

    /**
     * When true, specifies the package is included in the cruise arrangement.
     *
     * @property boolean $inclusiveIndicator
     */
    private $inclusiveIndicator = null;

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
     * Specifies the Status of the package. Refer to OpenTravel Code table Status
     * (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Specifies the activity location (e.g., port city for excursion, bus stop for
     * transfer).
     *
     * @property \Davispeixoto\OpenTravelAlliance\CruisePackageType\LocationAType[]
     * $location
     */
    private $location = null;

    /**
     * Gets as packageTypeCode
     *
     * Specifies the type of the package. Refer to OpenTravel Codelist Cruise Package
     * Type (CPK).
     *
     * @return string
     */
    public function getPackageTypeCode()
    {
        return $this->packageTypeCode;
    }

    /**
     * Sets a new packageTypeCode
     *
     * Specifies the type of the package. Refer to OpenTravel Codelist Cruise Package
     * Type (CPK).
     *
     * @param string $packageTypeCode
     * @return self
     */
    public function setPackageTypeCode($packageTypeCode)
    {
        $this->packageTypeCode = $packageTypeCode;

        return $this;
    }

    /**
     * Gets as cruisePackageCode
     *
     * Specifies the inclusive package code as defined by the cruise line.
     *
     * @return string
     */
    public function getCruisePackageCode()
    {
        return $this->cruisePackageCode;
    }

    /**
     * Sets a new cruisePackageCode
     *
     * Specifies the inclusive package code as defined by the cruise line.
     *
     * @param string $cruisePackageCode
     * @return self
     */
    public function setCruisePackageCode($cruisePackageCode)
    {
        $this->cruisePackageCode = $cruisePackageCode;

        return $this;
    }

    /**
     * Gets as inclusiveIndicator
     *
     * When true, specifies the package is included in the cruise arrangement.
     *
     * @return boolean
     */
    public function getInclusiveIndicator()
    {
        return $this->inclusiveIndicator;
    }

    /**
     * Sets a new inclusiveIndicator
     *
     * When true, specifies the package is included in the cruise arrangement.
     *
     * @param boolean $inclusiveIndicator
     * @return self
     */
    public function setInclusiveIndicator($inclusiveIndicator)
    {
        $this->inclusiveIndicator = $inclusiveIndicator;

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
     * Gets as status
     *
     * Specifies the Status of the package. Refer to OpenTravel Code table Status
     * (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Specifies the Status of the package. Refer to OpenTravel Code table Status
     * (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Adds as location
     *
     * Specifies the activity location (e.g., port city for excursion, bus stop for
     * transfer).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CruisePackageType\LocationAType
     * $location
     */
    public function addToLocation(\Davispeixoto\OpenTravelAlliance\CruisePackageType\LocationAType $location)
    {
        $this->location[] = $location;

        return $this;
    }

    /**
     * isset location
     *
     * Specifies the activity location (e.g., port city for excursion, bus stop for
     * transfer).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * Specifies the activity location (e.g., port city for excursion, bus stop for
     * transfer).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * Specifies the activity location (e.g., port city for excursion, bus stop for
     * transfer).
     *
     * @return \Davispeixoto\OpenTravelAlliance\CruisePackageType\LocationAType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Specifies the activity location (e.g., port city for excursion, bus stop for
     * transfer).
     *
     * @param \Davispeixoto\OpenTravelAlliance\CruisePackageType\LocationAType[]
     * $location
     * @return self
     */
    public function setLocation(array $location)
    {
        $this->location = $location;

        return $this;
    }


}

