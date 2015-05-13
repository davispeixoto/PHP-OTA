<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CoveredTravelerType
 *
 * Contains identifying information as well as coverage requirements and journey
 * information for each individual requesting coverage by the insurance plan.
 * XSD Type: CoveredTravelerType
 */
class CoveredTravelerType
{

    /**
     * A reference place holder used within this message.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Identifies an individual requesting to be covered by the insurance policy.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\CoveredPersonAType
     * $coveredPerson
     */
    private $coveredPerson = null;

    /**
     * Defines an electronic mail address of the traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EmailType[] $email
     */
    private $email = null;

    /**
     * Defines a physical address for the traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressInfoType[] $address
     */
    private $address = null;

    /**
     * Identifies a telephone number for the traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\TelephoneAType[]
     * $telephone
     */
    private $telephone = null;

    /**
     * Country of citizenship for the individual requesting to be covered by the
     * insurance policy.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\CitizenCountryNameAType
     * $citizenCountryName
     */
    private $citizenCountryName = null;

    /**
     * Contains information about documents used for travel, such as passports,
     * driver's licenses or social security numbers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DocumentType[] $document
     */
    private $document = null;

    /**
     * Defines an emergency contact person for traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $emergencyContact
     */
    private $emergencyContact = null;

    /**
     * Information about policy beneficiary(s).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\BeneficiaryAType[]
     * $beneficiary
     */
    private $beneficiary = null;

    /**
     * Contains certain traveler-specific information required for quoting or booking
     * an insurance plan.
     *
     * @property \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType $indCoverageReqs
     */
    private $indCoverageReqs = null;

    /**
     * Gets as rPH
     *
     * A reference place holder used within this message.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A reference place holder used within this message.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as coveredPerson
     *
     * Identifies an individual requesting to be covered by the insurance policy.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\CoveredPersonAType
     */
    public function getCoveredPerson()
    {
        return $this->coveredPerson;
    }

    /**
     * Sets a new coveredPerson
     *
     * Identifies an individual requesting to be covered by the insurance policy.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\CoveredPersonAType
     * $coveredPerson
     * @return self
     */
    public function setCoveredPerson(
        \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\CoveredPersonAType $coveredPerson
    ) {
        $this->coveredPerson = $coveredPerson;

        return $this;
    }

    /**
     * Adds as email
     *
     * Defines an electronic mail address of the traveler.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EmailType $email
     */
    public function addToEmail(\Davispeixoto\OpenTravelAlliance\EmailType $email)
    {
        $this->email[] = $email;

        return $this;
    }

    /**
     * isset email
     *
     * Defines an electronic mail address of the traveler.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEmail($index)
    {
        return isset($this->email[$index]);
    }

    /**
     * unset email
     *
     * Defines an electronic mail address of the traveler.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEmail($index)
    {
        unset($this->email[$index]);
    }

    /**
     * Gets as email
     *
     * Defines an electronic mail address of the traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EmailType[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Defines an electronic mail address of the traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EmailType[] $email
     * @return self
     */
    public function setEmail(array $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Adds as address
     *
     * Defines a physical address for the traveler.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AddressInfoType $address
     */
    public function addToAddress(\Davispeixoto\OpenTravelAlliance\AddressInfoType $address)
    {
        $this->address[] = $address;

        return $this;
    }

    /**
     * isset address
     *
     * Defines a physical address for the traveler.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * Defines a physical address for the traveler.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * Defines a physical address for the traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressInfoType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Defines a physical address for the traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressInfoType[] $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Adds as telephone
     *
     * Identifies a telephone number for the traveler.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\TelephoneAType
     * $telephone
     */
    public function addToTelephone(\Davispeixoto\OpenTravelAlliance\CoveredTravelerType\TelephoneAType $telephone)
    {
        $this->telephone[] = $telephone;

        return $this;
    }

    /**
     * isset telephone
     *
     * Identifies a telephone number for the traveler.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTelephone($index)
    {
        return isset($this->telephone[$index]);
    }

    /**
     * unset telephone
     *
     * Identifies a telephone number for the traveler.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTelephone($index)
    {
        unset($this->telephone[$index]);
    }

    /**
     * Gets as telephone
     *
     * Identifies a telephone number for the traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\TelephoneAType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Identifies a telephone number for the traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\TelephoneAType[]
     * $telephone
     * @return self
     */
    public function setTelephone(array $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Gets as citizenCountryName
     *
     * Country of citizenship for the individual requesting to be covered by the
     * insurance policy.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\CitizenCountryNameAType
     */
    public function getCitizenCountryName()
    {
        return $this->citizenCountryName;
    }

    /**
     * Sets a new citizenCountryName
     *
     * Country of citizenship for the individual requesting to be covered by the
     * insurance policy.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\CitizenCountryNameAType
     * $citizenCountryName
     * @return self
     */
    public function setCitizenCountryName(
        \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\CitizenCountryNameAType $citizenCountryName
    ) {
        $this->citizenCountryName = $citizenCountryName;

        return $this;
    }

    /**
     * Adds as document
     *
     * Contains information about documents used for travel, such as passports,
     * driver's licenses or social security numbers.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DocumentType $document
     */
    public function addToDocument(\Davispeixoto\OpenTravelAlliance\DocumentType $document)
    {
        $this->document[] = $document;

        return $this;
    }

    /**
     * isset document
     *
     * Contains information about documents used for travel, such as passports,
     * driver's licenses or social security numbers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDocument($index)
    {
        return isset($this->document[$index]);
    }

    /**
     * unset document
     *
     * Contains information about documents used for travel, such as passports,
     * driver's licenses or social security numbers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDocument($index)
    {
        unset($this->document[$index]);
    }

    /**
     * Gets as document
     *
     * Contains information about documents used for travel, such as passports,
     * driver's licenses or social security numbers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DocumentType[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets a new document
     *
     * Contains information about documents used for travel, such as passports,
     * driver's licenses or social security numbers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DocumentType[] $document
     * @return self
     */
    public function setDocument(array $document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Adds as emergencyContact
     *
     * Defines an emergency contact person for traveler.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $emergencyContact
     */
    public function addToEmergencyContact(\Davispeixoto\OpenTravelAlliance\ContactPersonType $emergencyContact)
    {
        $this->emergencyContact[] = $emergencyContact;

        return $this;
    }

    /**
     * isset emergencyContact
     *
     * Defines an emergency contact person for traveler.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEmergencyContact($index)
    {
        return isset($this->emergencyContact[$index]);
    }

    /**
     * unset emergencyContact
     *
     * Defines an emergency contact person for traveler.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEmergencyContact($index)
    {
        unset($this->emergencyContact[$index]);
    }

    /**
     * Gets as emergencyContact
     *
     * Defines an emergency contact person for traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType[]
     */
    public function getEmergencyContact()
    {
        return $this->emergencyContact;
    }

    /**
     * Sets a new emergencyContact
     *
     * Defines an emergency contact person for traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $emergencyContact
     * @return self
     */
    public function setEmergencyContact(array $emergencyContact)
    {
        $this->emergencyContact = $emergencyContact;

        return $this;
    }

    /**
     * Adds as beneficiary
     *
     * Information about policy beneficiary(s).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\BeneficiaryAType
     * $beneficiary
     */
    public function addToBeneficiary(\Davispeixoto\OpenTravelAlliance\CoveredTravelerType\BeneficiaryAType $beneficiary)
    {
        $this->beneficiary[] = $beneficiary;

        return $this;
    }

    /**
     * isset beneficiary
     *
     * Information about policy beneficiary(s).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBeneficiary($index)
    {
        return isset($this->beneficiary[$index]);
    }

    /**
     * unset beneficiary
     *
     * Information about policy beneficiary(s).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBeneficiary($index)
    {
        unset($this->beneficiary[$index]);
    }

    /**
     * Gets as beneficiary
     *
     * Information about policy beneficiary(s).
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\BeneficiaryAType[]
     */
    public function getBeneficiary()
    {
        return $this->beneficiary;
    }

    /**
     * Sets a new beneficiary
     *
     * Information about policy beneficiary(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\BeneficiaryAType[]
     * $beneficiary
     * @return self
     */
    public function setBeneficiary(array $beneficiary)
    {
        $this->beneficiary = $beneficiary;

        return $this;
    }

    /**
     * Gets as indCoverageReqs
     *
     * Contains certain traveler-specific information required for quoting or booking
     * an insurance plan.
     *
     * @return \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType
     */
    public function getIndCoverageReqs()
    {
        return $this->indCoverageReqs;
    }

    /**
     * Sets a new indCoverageReqs
     *
     * Contains certain traveler-specific information required for quoting or booking
     * an insurance plan.
     *
     * @param \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType $indCoverageReqs
     * @return self
     */
    public function setIndCoverageReqs(\Davispeixoto\OpenTravelAlliance\IndCoverageReqsType $indCoverageReqs)
    {
        $this->indCoverageReqs = $indCoverageReqs;

        return $this;
    }


}

