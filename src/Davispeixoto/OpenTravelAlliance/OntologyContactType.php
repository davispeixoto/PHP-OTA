<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyContactType
 *
 * Contact information with ontology reference.
 * XSD Type: OntologyContactType
 */
class OntologyContactType
{

    /**
     * Email.Example: abc@opentrravel.org
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyContactType\EmailAType $email
     */
    private $email = null;

    /**
     * Phone.Example: OpenTravel
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyContactType\PhoneAType $phone
     */
    private $phone = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as email
     *
     * Email.Example: abc@opentrravel.org
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyContactType\EmailAType
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Email.Example: abc@opentrravel.org
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyContactType\EmailAType $email
     * @return self
     */
    public function setEmail(\Davispeixoto\OpenTravelAlliance\OntologyContactType\EmailAType $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets as phone
     *
     * Phone.Example: OpenTravel
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyContactType\PhoneAType
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * Phone.Example: OpenTravel
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyContactType\PhoneAType $phone
     * @return self
     */
    public function setPhone(\Davispeixoto\OpenTravelAlliance\OntologyContactType\PhoneAType $phone)
    {
        $this->phone = $phone;

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

