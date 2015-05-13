<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ\CriteriaAType;

/**
 * Class representing ProximityAType
 */
class ProximityAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * A postal code used for a proximity search.
     *
     * @property mixed $postalCode
     */
    private $postalCode = null;

    /**
     * The name of the city associated with this reference point.
     *
     * @property string $cityName
     */
    private $cityName = null;

    /**
     * The state or province in which the reference point is located.
     *
     * @property string $stateProv
     */
    private $stateProv = null;

    /**
     * The country in which the reference point is located.
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * The name of a resort that the golf course is associated with.
     *
     * @property string $resortName
     */
    private $resortName = null;

    /**
     * Indicates the type of location being referenced (e.g., Airport, Hotel). Refer to
     * the OpenTravel Code table Index Point Code (IPC).
     *
     * @property string $refPointType
     */
    private $refPointType = null;

    /**
     * The name of the reference point.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * An optional attribute indicating the distance to/from a reference point. When
     * used in conjunction with DistanceMax, this represents the minimum distance.
     *
     * @property string $distance
     */
    private $distance = null;

    /**
     * When the Distance attribute contains a value, (presumably a numerical value),
     * the unit of measure is a string value that indicate what units are used for the
     * value.
     *
     * @property string $distanceMeasure
     */
    private $distanceMeasure = null;

    /**
     * An optional string value used to indicate the compass point(s) direction, e.g.:
     * S, SE (South, Southeast), FROM the Reference Point TO the hotel location if the
     * search is not a full circumference from the reference point.
     *
     * @property string $direction
     */
    private $direction = null;

    /**
     * An optional attribute indicating the maximum distance to/from a reference point.
     *
     * @property string $distanceMax
     */
    private $distanceMax = null;

    /**
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of
     * Measure Code (UOM).
     *
     * @property string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as postalCode
     *
     * A postal code used for a proximity search.
     *
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * A postal code used for a proximity search.
     *
     * @param mixed $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Gets as cityName
     *
     * The name of the city associated with this reference point.
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Sets a new cityName
     *
     * The name of the city associated with this reference point.
     *
     * @param string $cityName
     * @return self
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Gets as stateProv
     *
     * The state or province in which the reference point is located.
     *
     * @return string
     */
    public function getStateProv()
    {
        return $this->stateProv;
    }

    /**
     * Sets a new stateProv
     *
     * The state or province in which the reference point is located.
     *
     * @param string $stateProv
     * @return self
     */
    public function setStateProv($stateProv)
    {
        $this->stateProv = $stateProv;

        return $this;
    }

    /**
     * Gets as countryCode
     *
     * The country in which the reference point is located.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * The country in which the reference point is located.
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Gets as resortName
     *
     * The name of a resort that the golf course is associated with.
     *
     * @return string
     */
    public function getResortName()
    {
        return $this->resortName;
    }

    /**
     * Sets a new resortName
     *
     * The name of a resort that the golf course is associated with.
     *
     * @param string $resortName
     * @return self
     */
    public function setResortName($resortName)
    {
        $this->resortName = $resortName;

        return $this;
    }

    /**
     * Gets as refPointType
     *
     * Indicates the type of location being referenced (e.g., Airport, Hotel). Refer to
     * the OpenTravel Code table Index Point Code (IPC).
     *
     * @return string
     */
    public function getRefPointType()
    {
        return $this->refPointType;
    }

    /**
     * Sets a new refPointType
     *
     * Indicates the type of location being referenced (e.g., Airport, Hotel). Refer to
     * the OpenTravel Code table Index Point Code (IPC).
     *
     * @param string $refPointType
     * @return self
     */
    public function setRefPointType($refPointType)
    {
        $this->refPointType = $refPointType;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the reference point.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the reference point.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as distance
     *
     * An optional attribute indicating the distance to/from a reference point. When
     * used in conjunction with DistanceMax, this represents the minimum distance.
     *
     * @return string
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Sets a new distance
     *
     * An optional attribute indicating the distance to/from a reference point. When
     * used in conjunction with DistanceMax, this represents the minimum distance.
     *
     * @param string $distance
     * @return self
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Gets as distanceMeasure
     *
     * When the Distance attribute contains a value, (presumably a numerical value),
     * the unit of measure is a string value that indicate what units are used for the
     * value.
     *
     * @return string
     */
    public function getDistanceMeasure()
    {
        return $this->distanceMeasure;
    }

    /**
     * Sets a new distanceMeasure
     *
     * When the Distance attribute contains a value, (presumably a numerical value),
     * the unit of measure is a string value that indicate what units are used for the
     * value.
     *
     * @param string $distanceMeasure
     * @return self
     */
    public function setDistanceMeasure($distanceMeasure)
    {
        $this->distanceMeasure = $distanceMeasure;

        return $this;
    }

    /**
     * Gets as direction
     *
     * An optional string value used to indicate the compass point(s) direction, e.g.:
     * S, SE (South, Southeast), FROM the Reference Point TO the hotel location if the
     * search is not a full circumference from the reference point.
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Sets a new direction
     *
     * An optional string value used to indicate the compass point(s) direction, e.g.:
     * S, SE (South, Southeast), FROM the Reference Point TO the hotel location if the
     * search is not a full circumference from the reference point.
     *
     * @param string $direction
     * @return self
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Gets as distanceMax
     *
     * An optional attribute indicating the maximum distance to/from a reference point.
     *
     * @return string
     */
    public function getDistanceMax()
    {
        return $this->distanceMax;
    }

    /**
     * Sets a new distanceMax
     *
     * An optional attribute indicating the maximum distance to/from a reference point.
     *
     * @param string $distanceMax
     * @return self
     */
    public function setDistanceMax($distanceMax)
    {
        $this->distanceMax = $distanceMax;

        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of
     * Measure Code (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of
     * Measure Code (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;

        return $this;
    }


}

