<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyLocationType
 *
 * Location information with ontology reference.
 * XSD Type: OntologyLocationType
 */
class OntologyLocationType
{

    /**
     * Location type.Example: Origin
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyLocationType\TypeAType $type
     */
    private $type = null;

    /**
     * General location code and name.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyLocationType\GeneralLocationAType
     * $generalLocation
     */
    private $generalLocation = null;

    /**
     * Geocodes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyLocationType\GeocodeAType
     * $geocode
     */
    private $geocode = null;

    /**
     * Physical location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyLocationType\PhysicalLocationAType
     * $physicalLocation
     */
    private $physicalLocation = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as type
     *
     * Location type.Example: Origin
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyLocationType\TypeAType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Location type.Example: Origin
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyLocationType\TypeAType $type
     * @return self
     */
    public function setType(\Davispeixoto\OpenTravelAlliance\OntologyLocationType\TypeAType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as generalLocation
     *
     * General location code and name.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyLocationType\GeneralLocationAType
     */
    public function getGeneralLocation()
    {
        return $this->generalLocation;
    }

    /**
     * Sets a new generalLocation
     *
     * General location code and name.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyLocationType\GeneralLocationAType
     * $generalLocation
     * @return self
     */
    public function setGeneralLocation(
        \Davispeixoto\OpenTravelAlliance\OntologyLocationType\GeneralLocationAType $generalLocation
    ) {
        $this->generalLocation = $generalLocation;

        return $this;
    }

    /**
     * Gets as geocode
     *
     * Geocodes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyLocationType\GeocodeAType
     */
    public function getGeocode()
    {
        return $this->geocode;
    }

    /**
     * Sets a new geocode
     *
     * Geocodes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyLocationType\GeocodeAType
     * $geocode
     * @return self
     */
    public function setGeocode(\Davispeixoto\OpenTravelAlliance\OntologyLocationType\GeocodeAType $geocode)
    {
        $this->geocode = $geocode;

        return $this;
    }

    /**
     * Gets as physicalLocation
     *
     * Physical location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyLocationType\PhysicalLocationAType
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation;
    }

    /**
     * Sets a new physicalLocation
     *
     * Physical location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyLocationType\PhysicalLocationAType
     * $physicalLocation
     * @return self
     */
    public function setPhysicalLocation(
        \Davispeixoto\OpenTravelAlliance\OntologyLocationType\PhysicalLocationAType $physicalLocation
    ) {
        $this->physicalLocation = $physicalLocation;

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

