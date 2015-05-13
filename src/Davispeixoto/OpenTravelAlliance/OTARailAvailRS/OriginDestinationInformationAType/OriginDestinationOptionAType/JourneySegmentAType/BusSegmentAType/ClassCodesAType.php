<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType;

use Davispeixoto\OpenTravelAlliance\ClassCodeType;

/**
 * Class representing ClassCodesAType
 */
class ClassCodesAType extends ClassCodeType
{

    /**
     * Specifies class, such as Coach, Premium and Sleeper.
     *
     * @property string $reservationClass
     */
    private $reservationClass = null;

    /**
     * Specifies the type of the reservation.
     *
     * @property string $reservationType
     */
    private $reservationType = null;

    /**
     * Specifies the type of the vehicle or bus.
     *
     * @property string $vehicleType
     */
    private $vehicleType = null;

    /**
     * When true, this is an alternate form of transportation.
     *
     * @property boolean $alternativeInd
     */
    private $alternativeInd = null;

    /**
     * Gets as reservationClass
     *
     * Specifies class, such as Coach, Premium and Sleeper.
     *
     * @return string
     */
    public function getReservationClass()
    {
        return $this->reservationClass;
    }

    /**
     * Sets a new reservationClass
     *
     * Specifies class, such as Coach, Premium and Sleeper.
     *
     * @param string $reservationClass
     * @return self
     */
    public function setReservationClass($reservationClass)
    {
        $this->reservationClass = $reservationClass;

        return $this;
    }

    /**
     * Gets as reservationType
     *
     * Specifies the type of the reservation.
     *
     * @return string
     */
    public function getReservationType()
    {
        return $this->reservationType;
    }

    /**
     * Sets a new reservationType
     *
     * Specifies the type of the reservation.
     *
     * @param string $reservationType
     * @return self
     */
    public function setReservationType($reservationType)
    {
        $this->reservationType = $reservationType;

        return $this;
    }

    /**
     * Gets as vehicleType
     *
     * Specifies the type of the vehicle or bus.
     *
     * @return string
     */
    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * Sets a new vehicleType
     *
     * Specifies the type of the vehicle or bus.
     *
     * @param string $vehicleType
     * @return self
     */
    public function setVehicleType($vehicleType)
    {
        $this->vehicleType = $vehicleType;

        return $this;
    }

    /**
     * Gets as alternativeInd
     *
     * When true, this is an alternate form of transportation.
     *
     * @return boolean
     */
    public function getAlternativeInd()
    {
        return $this->alternativeInd;
    }

    /**
     * Sets a new alternativeInd
     *
     * When true, this is an alternate form of transportation.
     *
     * @param boolean $alternativeInd
     * @return self
     */
    public function setAlternativeInd($alternativeInd)
    {
        $this->alternativeInd = $alternativeInd;

        return $this;
    }


}

