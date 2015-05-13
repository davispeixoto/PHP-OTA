<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyNameType
 *
 * Traveler name information with ontology reference.
 * XSD Type: OntologyNameType
 */
class OntologyNameType
{

    /**
     * Information use and sharing restriction indicator.Example: trueImplementer: If
     * true, this traveler information may only be used to determine relevant offers.
     *
     * @property boolean $privacyInd
     */
    private $privacyInd = null;

    /**
     * First name.Example: Bob
     *
     * @property string $givenName
     */
    private $givenName = null;

    /**
     * Last name.Example: Smith
     *
     * @property string $surname
     */
    private $surname = null;

    /**
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @property string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as privacyInd
     *
     * Information use and sharing restriction indicator.Example: trueImplementer: If
     * true, this traveler information may only be used to determine relevant offers.
     *
     * @return boolean
     */
    public function getPrivacyInd()
    {
        return $this->privacyInd;
    }

    /**
     * Sets a new privacyInd
     *
     * Information use and sharing restriction indicator.Example: trueImplementer: If
     * true, this traveler information may only be used to determine relevant offers.
     *
     * @param boolean $privacyInd
     * @return self
     */
    public function setPrivacyInd($privacyInd)
    {
        $this->privacyInd = $privacyInd;

        return $this;
    }

    /**
     * Gets as givenName
     *
     * First name.Example: Bob
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * Sets a new givenName
     *
     * First name.Example: Bob
     *
     * @param string $givenName
     * @return self
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;

        return $this;
    }

    /**
     * Gets as surname
     *
     * Last name.Example: Smith
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Sets a new surname
     *
     * Last name.Example: Smith
     *
     * @param string $surname
     * @return self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

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

