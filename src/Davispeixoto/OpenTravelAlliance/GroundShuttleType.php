<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GroundShuttleType
 *
 * Shuttle service information.
 * XSD Type: GroundShuttleType
 */
class GroundShuttleType
{

    /**
     * If true, a ticket is required to board the shuttle.
     *
     * @property boolean $ticketReqInd
     */
    private $ticketReqInd = null;

    /**
     * If true, a reservation is required to board the shuttle.
     *
     * @property boolean $reservationReqInd
     */
    private $reservationReqInd = null;

    /**
     * Shuttle bus vehicle information, including vehicle type and capacity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundShuttleType\VehicleAType
     * $vehicle
     */
    private $vehicle = null;

    /**
     * A collection of service locations.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundShuttleType\ServiceLocationAType[]
     * $serviceLocation
     */
    private $serviceLocation = null;

    /**
     * Gets as ticketReqInd
     *
     * If true, a ticket is required to board the shuttle.
     *
     * @return boolean
     */
    public function getTicketReqInd()
    {
        return $this->ticketReqInd;
    }

    /**
     * Sets a new ticketReqInd
     *
     * If true, a ticket is required to board the shuttle.
     *
     * @param boolean $ticketReqInd
     * @return self
     */
    public function setTicketReqInd($ticketReqInd)
    {
        $this->ticketReqInd = $ticketReqInd;

        return $this;
    }

    /**
     * Gets as reservationReqInd
     *
     * If true, a reservation is required to board the shuttle.
     *
     * @return boolean
     */
    public function getReservationReqInd()
    {
        return $this->reservationReqInd;
    }

    /**
     * Sets a new reservationReqInd
     *
     * If true, a reservation is required to board the shuttle.
     *
     * @param boolean $reservationReqInd
     * @return self
     */
    public function setReservationReqInd($reservationReqInd)
    {
        $this->reservationReqInd = $reservationReqInd;

        return $this;
    }

    /**
     * Gets as vehicle
     *
     * Shuttle bus vehicle information, including vehicle type and capacity.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundShuttleType\VehicleAType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Shuttle bus vehicle information, including vehicle type and capacity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundShuttleType\VehicleAType $vehicle
     * @return self
     */
    public function setVehicle(\Davispeixoto\OpenTravelAlliance\GroundShuttleType\VehicleAType $vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * Adds as serviceLocation
     *
     * A collection of service locations.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GroundShuttleType\ServiceLocationAType
     * $serviceLocation
     */
    public function addToServiceLocation(
        \Davispeixoto\OpenTravelAlliance\GroundShuttleType\ServiceLocationAType $serviceLocation
    ) {
        $this->serviceLocation[] = $serviceLocation;

        return $this;
    }

    /**
     * isset serviceLocation
     *
     * A collection of service locations.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetServiceLocation($index)
    {
        return isset($this->serviceLocation[$index]);
    }

    /**
     * unset serviceLocation
     *
     * A collection of service locations.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetServiceLocation($index)
    {
        unset($this->serviceLocation[$index]);
    }

    /**
     * Gets as serviceLocation
     *
     * A collection of service locations.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundShuttleType\ServiceLocationAType[]
     */
    public function getServiceLocation()
    {
        return $this->serviceLocation;
    }

    /**
     * Sets a new serviceLocation
     *
     * A collection of service locations.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundShuttleType\ServiceLocationAType[]
     * $serviceLocation
     * @return self
     */
    public function setServiceLocation(array $serviceLocation)
    {
        $this->serviceLocation = $serviceLocation;

        return $this;
    }


}

