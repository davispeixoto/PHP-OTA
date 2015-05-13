<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyTransportationType
 *
 * Transportation information with ontology reference.
 * XSD Type: OntologyTransportationType
 */
class OntologyTransportationType
{

    /**
     * Trip direction.Example: Outbound
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\TripDirectionAType
     * $tripDirection
     */
    private $tripDirection = null;

    /**
     * Flight and rail information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\FlightAndRailAType
     * $flightAndRail
     */
    private $flightAndRail = null;

    /**
     * Vehicle information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType
     * $vehicle
     */
    private $vehicle = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as tripDirection
     *
     * Trip direction.Example: Outbound
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\TripDirectionAType
     */
    public function getTripDirection()
    {
        return $this->tripDirection;
    }

    /**
     * Sets a new tripDirection
     *
     * Trip direction.Example: Outbound
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\TripDirectionAType
     * $tripDirection
     * @return self
     */
    public function setTripDirection(
        \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\TripDirectionAType $tripDirection
    ) {
        $this->tripDirection = $tripDirection;

        return $this;
    }

    /**
     * Gets as flightAndRail
     *
     * Flight and rail information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\FlightAndRailAType
     */
    public function getFlightAndRail()
    {
        return $this->flightAndRail;
    }

    /**
     * Sets a new flightAndRail
     *
     * Flight and rail information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\FlightAndRailAType
     * $flightAndRail
     * @return self
     */
    public function setFlightAndRail(
        \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\FlightAndRailAType $flightAndRail
    ) {
        $this->flightAndRail = $flightAndRail;

        return $this;
    }

    /**
     * Gets as vehicle
     *
     * Vehicle information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Vehicle information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType
     * $vehicle
     * @return self
     */
    public function setVehicle(\Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType $vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(\Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension)
    {
        $this->ontologyExtension = $ontologyExtension;

        return $this;
    }


}

