<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyDefinitionType
 *
 * Ontology specification.
 * XSD Type: OntologyDefinitionType
 */
class OntologyDefinitionType
{

    /**
     * URI.Example: http://www.thistravelcompany.com/myontology
     *
     * @property string $uRI
     */
    private $uRI = null;

    /**
     * Version.Example: 1.3
     *
     * @property string $version
     */
    private $version = null;

    /**
     * Name.Example: OpenTravel Car Ontology
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Reference ID.Example: 1Implementer: This is a unique reference for this set of
     * ontology information that is defined here and referenced in @OntologyRefID
     * attributes.
     *
     * @property string $refID
     */
    private $refID = null;

    /**
     * Gets as uRI
     *
     * URI.Example: http://www.thistravelcompany.com/myontology
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * URI.Example: http://www.thistravelcompany.com/myontology
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;

        return $this;
    }

    /**
     * Gets as version
     *
     * Version.Example: 1.3
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Version.Example: 1.3
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as name
     *
     * Name.Example: OpenTravel Car Ontology
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name.Example: OpenTravel Car Ontology
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as refID
     *
     * Reference ID.Example: 1Implementer: This is a unique reference for this set of
     * ontology information that is defined here and referenced in @OntologyRefID
     * attributes.
     *
     * @return string
     */
    public function getRefID()
    {
        return $this->refID;
    }

    /**
     * Sets a new refID
     *
     * Reference ID.Example: 1Implementer: This is a unique reference for this set of
     * ontology information that is defined here and referenced in @OntologyRefID
     * attributes.
     *
     * @param string $refID
     * @return self
     */
    public function setRefID($refID)
    {
        $this->refID = $refID;

        return $this;
    }


}

