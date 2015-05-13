<?php

namespace Davispeixoto\OpenTravelAlliance\OntologyLocationType;

/**
 * Class representing GeocodeAType
 */
class GeocodeAType
{

    /**
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @property string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * Latitude.Example: 28.0847797393799
     *
     * @property string $latitude
     */
    private $latitude = null;

    /**
     * Longitude.Example: -82.6114349365234
     *
     * @property string $longitude
     */
    private $longitude = null;

    /**
     * Geocoded universal address.Example: 83G48 MNDPH
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyLocationType\GeocodeAType\UniversalAddressAType
     * $universalAddress
     */
    private $universalAddress = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

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
     * Gets as latitude
     *
     * Latitude.Example: 28.0847797393799
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
     * Latitude.Example: 28.0847797393799
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
     * Longitude.Example: -82.6114349365234
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
     * Longitude.Example: -82.6114349365234
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
     * Gets as universalAddress
     *
     * Geocoded universal address.Example: 83G48 MNDPH
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyLocationType\GeocodeAType\UniversalAddressAType
     */
    public function getUniversalAddress()
    {
        return $this->universalAddress;
    }

    /**
     * Sets a new universalAddress
     *
     * Geocoded universal address.Example: 83G48 MNDPH
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyLocationType\GeocodeAType\UniversalAddressAType
     * $universalAddress
     * @return self
     */
    public function setUniversalAddress(
        \Davispeixoto\OpenTravelAlliance\OntologyLocationType\GeocodeAType\UniversalAddressAType $universalAddress
    ) {
        $this->universalAddress = $universalAddress;

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

