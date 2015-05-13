<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyDistanceType
 *
 * Distance unit of measure and value with ontology reference.
 * XSD Type: OntologyDistanceType
 */
class OntologyDistanceType
{

    /**
     * Measurement system for size information.Example: US_Customary
     *
     * @property string $measurementSystem
     */
    private $measurementSystem = null;

    /**
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @property string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * Distance unit of measure and value.Example: Mile
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyDistanceType\DistanceAType
     * $distance
     */
    private $distance = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as measurementSystem
     *
     * Measurement system for size information.Example: US_Customary
     *
     * @return string
     */
    public function getMeasurementSystem()
    {
        return $this->measurementSystem;
    }

    /**
     * Sets a new measurementSystem
     *
     * Measurement system for size information.Example: US_Customary
     *
     * @param string $measurementSystem
     * @return self
     */
    public function setMeasurementSystem($measurementSystem)
    {
        $this->measurementSystem = $measurementSystem;

        return $this;
    }

    /**
     * Gets as ontologyRefID
     *
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @return string
     */
    public function getOntologyRefID()
    {
        return $this->ontologyRefID;
    }

    /**
     * Sets a new ontologyRefID
     *
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @param string $ontologyRefID
     * @return self
     */
    public function setOntologyRefID($ontologyRefID)
    {
        $this->ontologyRefID = $ontologyRefID;

        return $this;
    }

    /**
     * Gets as distance
     *
     * Distance unit of measure and value.Example: Mile
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyDistanceType\DistanceAType
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Sets a new distance
     *
     * Distance unit of measure and value.Example: Mile
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyDistanceType\DistanceAType
     * $distance
     * @return self
     */
    public function setDistance(\Davispeixoto\OpenTravelAlliance\OntologyDistanceType\DistanceAType $distance)
    {
        $this->distance = $distance;

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

