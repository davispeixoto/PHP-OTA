<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ\CacheSearchCriteriaAType\CacheSearchCriterionAType\GeographicalInfoAType;

/**
 * Class representing RadiusAType
 */
class RadiusAType
{

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

