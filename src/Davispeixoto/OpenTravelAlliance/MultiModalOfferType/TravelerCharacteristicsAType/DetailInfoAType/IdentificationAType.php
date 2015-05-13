<?php

namespace Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType;

/**
 * Class representing IdentificationAType
 */
class IdentificationAType
{

    /**
     * Traveler name.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyNameType $name
     */
    private $name = null;

    /**
     * Traveler age and birth information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyAgeBirthDateType $age
     */
    private $age = null;

    /**
     * Traveler address.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyAddressType $address
     */
    private $address = null;

    /**
     * Traveler contact information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyContactType $contact
     */
    private $contact = null;

    /**
     * Traveler loyalty program information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType[] $loyaltyProgram
     */
    private $loyaltyProgram = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as name
     *
     * Traveler name.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyNameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Traveler name.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyNameType $name
     * @return self
     */
    public function setName(\Davispeixoto\OpenTravelAlliance\OntologyNameType $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as age
     *
     * Traveler age and birth information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyAgeBirthDateType
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * Traveler age and birth information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyAgeBirthDateType $age
     * @return self
     */
    public function setAge(\Davispeixoto\OpenTravelAlliance\OntologyAgeBirthDateType $age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Gets as address
     *
     * Traveler address.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyAddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Traveler address.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyAddressType $address
     * @return self
     */
    public function setAddress(\Davispeixoto\OpenTravelAlliance\OntologyAddressType $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets as contact
     *
     * Traveler contact information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyContactType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Traveler contact information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyContactType $contact
     * @return self
     */
    public function setContact(\Davispeixoto\OpenTravelAlliance\OntologyContactType $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Adds as loyaltyProgram
     *
     * Traveler loyalty program information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType $loyaltyProgram
     */
    public function addToLoyaltyProgram(\Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType $loyaltyProgram)
    {
        $this->loyaltyProgram[] = $loyaltyProgram;

        return $this;
    }

    /**
     * isset loyaltyProgram
     *
     * Traveler loyalty program information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLoyaltyProgram($index)
    {
        return isset($this->loyaltyProgram[$index]);
    }

    /**
     * unset loyaltyProgram
     *
     * Traveler loyalty program information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLoyaltyProgram($index)
    {
        unset($this->loyaltyProgram[$index]);
    }

    /**
     * Gets as loyaltyProgram
     *
     * Traveler loyalty program information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType[]
     */
    public function getLoyaltyProgram()
    {
        return $this->loyaltyProgram;
    }

    /**
     * Sets a new loyaltyProgram
     *
     * Traveler loyalty program information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType[] $loyaltyProgram
     * @return self
     */
    public function setLoyaltyProgram(array $loyaltyProgram)
    {
        $this->loyaltyProgram = $loyaltyProgram;

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

