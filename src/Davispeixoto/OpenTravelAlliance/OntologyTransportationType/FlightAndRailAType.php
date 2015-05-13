<?php

namespace Davispeixoto\OpenTravelAlliance\OntologyTransportationType;

/**
 * Class representing FlightAndRailAType
 */
class FlightAndRailAType
{

    /**
     * Flight number.Example: 1437
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\FlightAndRailAType\NumberAType
     * $number
     */
    private $number = null;

    /**
     * Flight carrier name or code.Example: United
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyCodeType $carrier
     */
    private $carrier = null;

    /**
     * Fare class.Example: First
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\FlightAndRailAType\ClassAType
     * $class
     */
    private $class = null;

    /**
     * Fare code.Example: 1437
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyCodeType $fareCode
     */
    private $fareCode = null;

    /**
     * Gets as number
     *
     * Flight number.Example: 1437
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\FlightAndRailAType\NumberAType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Flight number.Example: 1437
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\FlightAndRailAType\NumberAType
     * $number
     * @return self
     */
    public function setNumber(
        \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\FlightAndRailAType\NumberAType $number
    ) {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as carrier
     *
     * Flight carrier name or code.Example: United
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyCodeType
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Sets a new carrier
     *
     * Flight carrier name or code.Example: United
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyCodeType $carrier
     * @return self
     */
    public function setCarrier(\Davispeixoto\OpenTravelAlliance\OntologyCodeType $carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * Gets as class
     *
     * Fare class.Example: First
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\FlightAndRailAType\ClassAType
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * Fare class.Example: First
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\FlightAndRailAType\ClassAType
     * $class
     * @return self
     */
    public function setClass(
        \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\FlightAndRailAType\ClassAType $class
    ) {
        $this->class = $class;

        return $this;
    }

    /**
     * Gets as fareCode
     *
     * Fare code.Example: 1437
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyCodeType
     */
    public function getFareCode()
    {
        return $this->fareCode;
    }

    /**
     * Sets a new fareCode
     *
     * Fare code.Example: 1437
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyCodeType $fareCode
     * @return self
     */
    public function setFareCode(\Davispeixoto\OpenTravelAlliance\OntologyCodeType $fareCode)
    {
        $this->fareCode = $fareCode;

        return $this;
    }


}

