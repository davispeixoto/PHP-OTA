<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TravelSegmentType
 *
 * Travel segment information for air, vehicle, hotel, rail, cruise, tour, general
 * and package.
 * XSD Type: TravelSegmentType
 */
class TravelSegmentType
{

    /**
     * Reference to this reservation item.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Status of the current itinerary item (e.g. confirmed, pending, waitlisted).
     * Refer to OpenTravel Code List Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Flight reservation information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType $air
     */
    private $air = null;

    /**
     * Vehicle rental information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleSegmentCoreType $vehicle
     */
    private $vehicle = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TravelSegmentType\HotelAType $hotel
     */
    private $hotel = null;

    /**
     * Rail reservation information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelSegmentType\RailAType $rail
     */
    private $rail = null;

    /**
     * Cruise reservation information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelSegmentType\CruiseAType $cruise
     */
    private $cruise = null;

    /**
     * Tour reservation information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelSegmentType\TourAType $tour
     */
    private $tour = null;

    /**
     * General travel reservation information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelSegmentType\GeneralAType
     * $general
     */
    private $general = null;

    /**
     * Package reservation information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelSegmentType\PackageAType
     * $package
     */
    private $package = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as rPH
     *
     * Reference to this reservation item.
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
     * Reference to this reservation item.
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
     * Gets as status
     *
     * Status of the current itinerary item (e.g. confirmed, pending, waitlisted).
     * Refer to OpenTravel Code List Status (STS).
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
     * Status of the current itinerary item (e.g. confirmed, pending, waitlisted).
     * Refer to OpenTravel Code List Status (STS).
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
     * Gets as air
     *
     * Flight reservation information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType
     */
    public function getAir()
    {
        return $this->air;
    }

    /**
     * Sets a new air
     *
     * Flight reservation information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType $air
     * @return self
     */
    public function setAir(\Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType $air)
    {
        $this->air = $air;

        return $this;
    }

    /**
     * Gets as vehicle
     *
     * Vehicle rental information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleSegmentCoreType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Vehicle rental information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleSegmentCoreType $vehicle
     * @return self
     */
    public function setVehicle(\Davispeixoto\OpenTravelAlliance\VehicleSegmentCoreType $vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * Gets as hotel
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelSegmentType\HotelAType
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Sets a new hotel
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelSegmentType\HotelAType $hotel
     * @return self
     */
    public function setHotel(\Davispeixoto\OpenTravelAlliance\TravelSegmentType\HotelAType $hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

    /**
     * Gets as rail
     *
     * Rail reservation information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelSegmentType\RailAType
     */
    public function getRail()
    {
        return $this->rail;
    }

    /**
     * Sets a new rail
     *
     * Rail reservation information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelSegmentType\RailAType $rail
     * @return self
     */
    public function setRail(\Davispeixoto\OpenTravelAlliance\TravelSegmentType\RailAType $rail)
    {
        $this->rail = $rail;

        return $this;
    }

    /**
     * Gets as cruise
     *
     * Cruise reservation information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelSegmentType\CruiseAType
     */
    public function getCruise()
    {
        return $this->cruise;
    }

    /**
     * Sets a new cruise
     *
     * Cruise reservation information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelSegmentType\CruiseAType $cruise
     * @return self
     */
    public function setCruise(\Davispeixoto\OpenTravelAlliance\TravelSegmentType\CruiseAType $cruise)
    {
        $this->cruise = $cruise;

        return $this;
    }

    /**
     * Gets as tour
     *
     * Tour reservation information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelSegmentType\TourAType
     */
    public function getTour()
    {
        return $this->tour;
    }

    /**
     * Sets a new tour
     *
     * Tour reservation information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelSegmentType\TourAType $tour
     * @return self
     */
    public function setTour(\Davispeixoto\OpenTravelAlliance\TravelSegmentType\TourAType $tour)
    {
        $this->tour = $tour;

        return $this;
    }

    /**
     * Gets as general
     *
     * General travel reservation information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelSegmentType\GeneralAType
     */
    public function getGeneral()
    {
        return $this->general;
    }

    /**
     * Sets a new general
     *
     * General travel reservation information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelSegmentType\GeneralAType $general
     * @return self
     */
    public function setGeneral(\Davispeixoto\OpenTravelAlliance\TravelSegmentType\GeneralAType $general)
    {
        $this->general = $general;

        return $this;
    }

    /**
     * Gets as package
     *
     * Package reservation information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelSegmentType\PackageAType
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * Package reservation information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelSegmentType\PackageAType $package
     * @return self
     */
    public function setPackage(\Davispeixoto\OpenTravelAlliance\TravelSegmentType\PackageAType $package)
    {
        $this->package = $package;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

