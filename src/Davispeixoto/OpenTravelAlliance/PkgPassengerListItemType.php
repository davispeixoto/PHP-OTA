<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PkgPassengerListItemType
 *
 * Details of a passenger or of a quantity of generic passengers e.g. 2 children
 * aged 5.
 * XSD Type: PkgPassengerListItem
 */
class PkgPassengerListItemType
{

    /**
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Used to associate this passenger with their insurance cover provided by the
     * supplier.
     *
     * @property string $insuranceRPH
     */
    private $insuranceRPH = null;

    /**
     * Identifies the gender.
     *
     * @property string $gender
     */
    private $gender = null;

    /**
     * Used to indicate the nationality of a person, if known. Uses ISO 3166 Country
     * Codes.
     *
     * @property string $nationality
     */
    private $nationality = null;

    /**
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
     *
     * @property \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * When 'true', indicates that this is the 'lead' passenger (i.e., the primary
     * contact making the booking).
     *
     * @property boolean $leadCustomerInd
     */
    private $leadCustomerInd = null;

    /**
     * This is used to specify age in years.
     *
     * @property integer $age
     */
    private $age = null;

    /**
     * Refer to OpenTravel Code List Age Qualifying Code (AQC), Rail Passenger Type
     * Code (PXC), or use StringLength1to8 with CodeContext to use a non-OpenTravel
     * Code.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Identifies the source authority for the code.
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Identifies the location of the code table.
     *
     * @property string $uRI
     */
    private $uRI = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * The name of the passenger or traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $name
     */
    private $name = null;

    /**
     * A special requirement e.g. wheelchair or vegetarian meal.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType\SpecialNeedAType[]
     * $specialNeed
     */
    private $specialNeed = null;

    /**
     * Details of the passenger's passport.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DocumentType $passportInformation
     */
    private $passportInformation = null;

    /**
     * Gets as rPH
     *
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
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
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
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
     * Gets as insuranceRPH
     *
     * Used to associate this passenger with their insurance cover provided by the
     * supplier.
     *
     * @return string
     */
    public function getInsuranceRPH()
    {
        return $this->insuranceRPH;
    }

    /**
     * Sets a new insuranceRPH
     *
     * Used to associate this passenger with their insurance cover provided by the
     * supplier.
     *
     * @param string $insuranceRPH
     * @return self
     */
    public function setInsuranceRPH($insuranceRPH)
    {
        $this->insuranceRPH = $insuranceRPH;

        return $this;
    }

    /**
     * Gets as gender
     *
     * Identifies the gender.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * Identifies the gender.
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Gets as nationality
     *
     * Used to indicate the nationality of a person, if known. Uses ISO 3166 Country
     * Codes.
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Sets a new nationality
     *
     * Used to indicate the nationality of a person, if known. Uses ISO 3166 Country
     * Codes.
     *
     * @param string $nationality
     * @return self
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Gets as birthDate
     *
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
     *
     * @param \DateTime $birthDate
     * @return self
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Gets as leadCustomerInd
     *
     * When 'true', indicates that this is the 'lead' passenger (i.e., the primary
     * contact making the booking).
     *
     * @return boolean
     */
    public function getLeadCustomerInd()
    {
        return $this->leadCustomerInd;
    }

    /**
     * Sets a new leadCustomerInd
     *
     * When 'true', indicates that this is the 'lead' passenger (i.e., the primary
     * contact making the booking).
     *
     * @param boolean $leadCustomerInd
     * @return self
     */
    public function setLeadCustomerInd($leadCustomerInd)
    {
        $this->leadCustomerInd = $leadCustomerInd;

        return $this;
    }

    /**
     * Gets as age
     *
     * This is used to specify age in years.
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * This is used to specify age in years.
     *
     * @param integer $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Gets as code
     *
     * Refer to OpenTravel Code List Age Qualifying Code (AQC), Rail Passenger Type
     * Code (PXC), or use StringLength1to8 with CodeContext to use a non-OpenTravel
     * Code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Refer to OpenTravel Code List Age Qualifying Code (AQC), Rail Passenger Type
     * Code (PXC), or use StringLength1to8 with CodeContext to use a non-OpenTravel
     * Code.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the source authority for the code.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the source authority for the code.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as uRI
     *
     * Identifies the location of the code table.
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
     * Identifies the location of the code table.
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
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the passenger or traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the passenger or traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $name
     * @return self
     */
    public function setName(\Davispeixoto\OpenTravelAlliance\PersonNameType $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Adds as specialNeed
     *
     * A special requirement e.g. wheelchair or vegetarian meal.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType\SpecialNeedAType
     * $specialNeed
     */
    public function addToSpecialNeed(
        \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType\SpecialNeedAType $specialNeed
    ) {
        $this->specialNeed[] = $specialNeed;

        return $this;
    }

    /**
     * isset specialNeed
     *
     * A special requirement e.g. wheelchair or vegetarian meal.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialNeed($index)
    {
        return isset($this->specialNeed[$index]);
    }

    /**
     * unset specialNeed
     *
     * A special requirement e.g. wheelchair or vegetarian meal.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialNeed($index)
    {
        unset($this->specialNeed[$index]);
    }

    /**
     * Gets as specialNeed
     *
     * A special requirement e.g. wheelchair or vegetarian meal.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType\SpecialNeedAType[]
     */
    public function getSpecialNeed()
    {
        return $this->specialNeed;
    }

    /**
     * Sets a new specialNeed
     *
     * A special requirement e.g. wheelchair or vegetarian meal.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType\SpecialNeedAType[]
     * $specialNeed
     * @return self
     */
    public function setSpecialNeed(array $specialNeed)
    {
        $this->specialNeed = $specialNeed;

        return $this;
    }

    /**
     * Gets as passportInformation
     *
     * Details of the passenger's passport.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DocumentType
     */
    public function getPassportInformation()
    {
        return $this->passportInformation;
    }

    /**
     * Sets a new passportInformation
     *
     * Details of the passenger's passport.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DocumentType $passportInformation
     * @return self
     */
    public function setPassportInformation(\Davispeixoto\OpenTravelAlliance\DocumentType $passportInformation)
    {
        $this->passportInformation = $passportInformation;

        return $this;
    }


}

