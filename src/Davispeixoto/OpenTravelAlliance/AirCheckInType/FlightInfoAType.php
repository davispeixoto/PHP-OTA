<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType;

/**
 * Class representing FlightInfoAType
 */
class FlightInfoAType
{

    /**
     * Identifies this flight.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * The airline cabin.
     *
     * @property string $cabinType
     */
    private $cabinType = null;

    /**
     * The marketing name that a particular airline / CRS may give to the cabin class.
     *
     * @property string $cabinName
     */
    private $cabinName = null;

    /**
     * Specifies information for the operating carrier or marketing carrier (code
     * share) for the flight.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperatingAirlineType[] $carrierInfo
     */
    private $carrierInfo = null;

    /**
     * The company that owns the operating aircraft.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $aircraftOwner
     */
    private $aircraftOwner = null;

    /**
     * Specifies departure information for a flight.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\DepartureInformationAType
     * $departureInformation
     */
    private $departureInformation = null;

    /**
     * Specifies arrival information for a flight.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\ArrivalInformationAType
     * $arrivalInformation
     */
    private $arrivalInformation = null;

    /**
     * Specifies additional service details for this flight.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\ServiceDetailsAType
     * $serviceDetails
     */
    private $serviceDetails = null;

    /**
     * Identifies one or more intermediate stops for this flight (e.g., change of
     * gauge).
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType[] $transitPoint
     */
    private $transitPoint = null;

    /**
     * Gets as rPH
     *
     * Identifies this flight.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Identifies this flight.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as cabinType
     *
     * The airline cabin.
     *
     * @return string
     */
    public function getCabinType()
    {
        return $this->cabinType;
    }

    /**
     * Sets a new cabinType
     *
     * The airline cabin.
     *
     * @param string $cabinType
     * @return self
     */
    public function setCabinType($cabinType)
    {
        $this->cabinType = $cabinType;

        return $this;
    }

    /**
     * Gets as cabinName
     *
     * The marketing name that a particular airline / CRS may give to the cabin class.
     *
     * @return string
     */
    public function getCabinName()
    {
        return $this->cabinName;
    }

    /**
     * Sets a new cabinName
     *
     * The marketing name that a particular airline / CRS may give to the cabin class.
     *
     * @param string $cabinName
     * @return self
     */
    public function setCabinName($cabinName)
    {
        $this->cabinName = $cabinName;

        return $this;
    }

    /**
     * Adds as carrierInfo
     *
     * Specifies information for the operating carrier or marketing carrier (code
     * share) for the flight.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OperatingAirlineType $carrierInfo
     */
    public function addToCarrierInfo(\Davispeixoto\OpenTravelAlliance\OperatingAirlineType $carrierInfo)
    {
        $this->carrierInfo[] = $carrierInfo;

        return $this;
    }

    /**
     * isset carrierInfo
     *
     * Specifies information for the operating carrier or marketing carrier (code
     * share) for the flight.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCarrierInfo($index)
    {
        return isset($this->carrierInfo[$index]);
    }

    /**
     * unset carrierInfo
     *
     * Specifies information for the operating carrier or marketing carrier (code
     * share) for the flight.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCarrierInfo($index)
    {
        unset($this->carrierInfo[$index]);
    }

    /**
     * Gets as carrierInfo
     *
     * Specifies information for the operating carrier or marketing carrier (code
     * share) for the flight.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OperatingAirlineType[]
     */
    public function getCarrierInfo()
    {
        return $this->carrierInfo;
    }

    /**
     * Sets a new carrierInfo
     *
     * Specifies information for the operating carrier or marketing carrier (code
     * share) for the flight.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperatingAirlineType[] $carrierInfo
     * @return self
     */
    public function setCarrierInfo(array $carrierInfo)
    {
        $this->carrierInfo = $carrierInfo;

        return $this;
    }

    /**
     * Gets as aircraftOwner
     *
     * The company that owns the operating aircraft.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getAircraftOwner()
    {
        return $this->aircraftOwner;
    }

    /**
     * Sets a new aircraftOwner
     *
     * The company that owns the operating aircraft.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $aircraftOwner
     * @return self
     */
    public function setAircraftOwner(\Davispeixoto\OpenTravelAlliance\CompanyNameType $aircraftOwner)
    {
        $this->aircraftOwner = $aircraftOwner;

        return $this;
    }

    /**
     * Gets as departureInformation
     *
     * Specifies departure information for a flight.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\DepartureInformationAType
     */
    public function getDepartureInformation()
    {
        return $this->departureInformation;
    }

    /**
     * Sets a new departureInformation
     *
     * Specifies departure information for a flight.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\DepartureInformationAType
     * $departureInformation
     * @return self
     */
    public function setDepartureInformation(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\DepartureInformationAType $departureInformation
    ) {
        $this->departureInformation = $departureInformation;

        return $this;
    }

    /**
     * Gets as arrivalInformation
     *
     * Specifies arrival information for a flight.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\ArrivalInformationAType
     */
    public function getArrivalInformation()
    {
        return $this->arrivalInformation;
    }

    /**
     * Sets a new arrivalInformation
     *
     * Specifies arrival information for a flight.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\ArrivalInformationAType
     * $arrivalInformation
     * @return self
     */
    public function setArrivalInformation(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\ArrivalInformationAType $arrivalInformation
    ) {
        $this->arrivalInformation = $arrivalInformation;

        return $this;
    }

    /**
     * Gets as serviceDetails
     *
     * Specifies additional service details for this flight.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\ServiceDetailsAType
     */
    public function getServiceDetails()
    {
        return $this->serviceDetails;
    }

    /**
     * Sets a new serviceDetails
     *
     * Specifies additional service details for this flight.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\ServiceDetailsAType
     * $serviceDetails
     * @return self
     */
    public function setServiceDetails(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\ServiceDetailsAType $serviceDetails
    ) {
        $this->serviceDetails = $serviceDetails;

        return $this;
    }

    /**
     * Adds as transitPoint
     *
     * Identifies one or more intermediate stops for this flight (e.g., change of
     * gauge).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $transitPoint
     */
    public function addToTransitPoint(\Davispeixoto\OpenTravelAlliance\LocationType $transitPoint)
    {
        $this->transitPoint[] = $transitPoint;

        return $this;
    }

    /**
     * isset transitPoint
     *
     * Identifies one or more intermediate stops for this flight (e.g., change of
     * gauge).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransitPoint($index)
    {
        return isset($this->transitPoint[$index]);
    }

    /**
     * unset transitPoint
     *
     * Identifies one or more intermediate stops for this flight (e.g., change of
     * gauge).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransitPoint($index)
    {
        unset($this->transitPoint[$index]);
    }

    /**
     * Gets as transitPoint
     *
     * Identifies one or more intermediate stops for this flight (e.g., change of
     * gauge).
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType[]
     */
    public function getTransitPoint()
    {
        return $this->transitPoint;
    }

    /**
     * Sets a new transitPoint
     *
     * Identifies one or more intermediate stops for this flight (e.g., change of
     * gauge).
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType[] $transitPoint
     * @return self
     */
    public function setTransitPoint(array $transitPoint)
    {
        $this->transitPoint = $transitPoint;

        return $this;
    }


}

