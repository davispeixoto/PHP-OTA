<?php

namespace Davispeixoto\OpenTravelAlliance\GolfFacilityType;

use Davispeixoto\OpenTravelAlliance\AddressType;

/**
 * Class representing LocationAType
 */
class LocationAType extends AddressType
{

    /**
     * The measure of the angular distance on a meridian north or south of the equator.
     *
     * @property string $latitude
     */
    private $latitude = null;

    /**
     * The measure of the angular distance on a meridian east or west of the prime
     * meridian.
     *
     * @property string $longitude
     */
    private $longitude = null;

    /**
     * The height of an item, typically above sea level.
     *
     * @property string $altitude
     */
    private $altitude = null;

    /**
     * Provides the unit of measure for the altitude (e.g., feet, meters, miles,
     * kilometers). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @property string $altitudeUnitOfMeasureCode
     */
    private $altitudeUnitOfMeasureCode = null;

    /**
     * Indicates the accuracy of the property's geo-coding, since the property's
     * longitude and latitude may not always be exact. Refer to OpenTravel Code List
     * Position Accuracy Code (PAC).
     *
     * @property string $positionAccuracyCode
     */
    private $positionAccuracyCode = null;

    /**
     * Gets as latitude
     *
     * The measure of the angular distance on a meridian north or south of the equator.
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets a new latitude
     *
     * The measure of the angular distance on a meridian north or south of the equator.
     *
     * @param string $latitude
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Gets as longitude
     *
     * The measure of the angular distance on a meridian east or west of the prime
     * meridian.
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets a new longitude
     *
     * The measure of the angular distance on a meridian east or west of the prime
     * meridian.
     *
     * @param string $longitude
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Gets as altitude
     *
     * The height of an item, typically above sea level.
     *
     * @return string
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Sets a new altitude
     *
     * The height of an item, typically above sea level.
     *
     * @param string $altitude
     * @return self
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Gets as altitudeUnitOfMeasureCode
     *
     * Provides the unit of measure for the altitude (e.g., feet, meters, miles,
     * kilometers). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @return string
     */
    public function getAltitudeUnitOfMeasureCode()
    {
        return $this->altitudeUnitOfMeasureCode;
    }

    /**
     * Sets a new altitudeUnitOfMeasureCode
     *
     * Provides the unit of measure for the altitude (e.g., feet, meters, miles,
     * kilometers). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @param string $altitudeUnitOfMeasureCode
     * @return self
     */
    public function setAltitudeUnitOfMeasureCode($altitudeUnitOfMeasureCode)
    {
        $this->altitudeUnitOfMeasureCode = $altitudeUnitOfMeasureCode;

        return $this;
    }

    /**
     * Gets as positionAccuracyCode
     *
     * Indicates the accuracy of the property's geo-coding, since the property's
     * longitude and latitude may not always be exact. Refer to OpenTravel Code List
     * Position Accuracy Code (PAC).
     *
     * @return string
     */
    public function getPositionAccuracyCode()
    {
        return $this->positionAccuracyCode;
    }

    /**
     * Sets a new positionAccuracyCode
     *
     * Indicates the accuracy of the property's geo-coding, since the property's
     * longitude and latitude may not always be exact. Refer to OpenTravel Code List
     * Position Accuracy Code (PAC).
     *
     * @param string $positionAccuracyCode
     * @return self
     */
    public function setPositionAccuracyCode($positionAccuracyCode)
    {
        $this->positionAccuracyCode = $positionAccuracyCode;

        return $this;
    }


}

