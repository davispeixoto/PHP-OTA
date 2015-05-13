<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ;

/**
 * Class representing VehIdentityAType
 */
class VehIdentityAType
{

    /**
     * This is the number assigned by a rental car company to manage inventory, it is
     * not the Vehicle Identification Number (VIN).
     *
     * @property string $vehicleAssetNumber
     */
    private $vehicleAssetNumber = null;

    /**
     * This is the license plate number of the vehicle rented.
     *
     * @property string $licensePlateNumber
     */
    private $licensePlateNumber = null;

    /**
     * This identifies the standard code or abbreviation for the state, province, or
     * region of vehicle registration.
     *
     * @property string $stateProvCode
     */
    private $stateProvCode = null;

    /**
     * This identifies the standard code or abbreviation for the country of vehicle
     * registration.
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * This is the manufacturers' assigned vehicle identification number (VIN).
     *
     * @property string $vehicleIDNumber
     */
    private $vehicleIDNumber = null;

    /**
     * This is the color of the vehicle being rented.
     *
     * @property string $vehicleColor
     */
    private $vehicleColor = null;

    /**
     * Gets as vehicleAssetNumber
     *
     * This is the number assigned by a rental car company to manage inventory, it is
     * not the Vehicle Identification Number (VIN).
     *
     * @return string
     */
    public function getVehicleAssetNumber()
    {
        return $this->vehicleAssetNumber;
    }

    /**
     * Sets a new vehicleAssetNumber
     *
     * This is the number assigned by a rental car company to manage inventory, it is
     * not the Vehicle Identification Number (VIN).
     *
     * @param string $vehicleAssetNumber
     * @return self
     */
    public function setVehicleAssetNumber($vehicleAssetNumber)
    {
        $this->vehicleAssetNumber = $vehicleAssetNumber;

        return $this;
    }

    /**
     * Gets as licensePlateNumber
     *
     * This is the license plate number of the vehicle rented.
     *
     * @return string
     */
    public function getLicensePlateNumber()
    {
        return $this->licensePlateNumber;
    }

    /**
     * Sets a new licensePlateNumber
     *
     * This is the license plate number of the vehicle rented.
     *
     * @param string $licensePlateNumber
     * @return self
     */
    public function setLicensePlateNumber($licensePlateNumber)
    {
        $this->licensePlateNumber = $licensePlateNumber;

        return $this;
    }

    /**
     * Gets as stateProvCode
     *
     * This identifies the standard code or abbreviation for the state, province, or
     * region of vehicle registration.
     *
     * @return string
     */
    public function getStateProvCode()
    {
        return $this->stateProvCode;
    }

    /**
     * Sets a new stateProvCode
     *
     * This identifies the standard code or abbreviation for the state, province, or
     * region of vehicle registration.
     *
     * @param string $stateProvCode
     * @return self
     */
    public function setStateProvCode($stateProvCode)
    {
        $this->stateProvCode = $stateProvCode;

        return $this;
    }

    /**
     * Gets as countryCode
     *
     * This identifies the standard code or abbreviation for the country of vehicle
     * registration.
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
     * This identifies the standard code or abbreviation for the country of vehicle
     * registration.
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
     * Gets as vehicleIDNumber
     *
     * This is the manufacturers' assigned vehicle identification number (VIN).
     *
     * @return string
     */
    public function getVehicleIDNumber()
    {
        return $this->vehicleIDNumber;
    }

    /**
     * Sets a new vehicleIDNumber
     *
     * This is the manufacturers' assigned vehicle identification number (VIN).
     *
     * @param string $vehicleIDNumber
     * @return self
     */
    public function setVehicleIDNumber($vehicleIDNumber)
    {
        $this->vehicleIDNumber = $vehicleIDNumber;

        return $this;
    }

    /**
     * Gets as vehicleColor
     *
     * This is the color of the vehicle being rented.
     *
     * @return string
     */
    public function getVehicleColor()
    {
        return $this->vehicleColor;
    }

    /**
     * Sets a new vehicleColor
     *
     * This is the color of the vehicle being rented.
     *
     * @param string $vehicleColor
     * @return self
     */
    public function setVehicleColor($vehicleColor)
    {
        $this->vehicleColor = $vehicleColor;

        return $this;
    }


}

