<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GolferType
 *
 * Information about the individual golfer for which the reservation is being
 * requested.
 * XSD Type: GolferType
 */
class GolferType
{

    /**
     * Identifies the gender.
     *
     * @property string $gender
     */
    private $gender = null;

    /**
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
     *
     * @property \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * A unique ID that identifies this golfer.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * The name of the golfer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType[] $golferInfo
     */
    private $golferInfo = null;

    /**
     * Summary golfer type qualifying information.(Developer Notes): You may specify a
     * golfer type using any of these methods:
     * 1. Select a named value from the list (such as ClubMember) and enter a quantity.
     * 2. Select the "Other_" option from the named list, enter your golfer type in the
     * @extension attribute and the quantity. Note, make sure the unique golfer type
     * entered is known to your trading partners.
     * 3. Enter an age qualifying code and a quantity.(Reference): OpenTravel Online
     * Code List.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolferType\TypeAType[] $type
     */
    private $type = null;

    /**
     * The address of the golfer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressType $address
     */
    private $address = null;

    /**
     * Telephone information for the golfer. Note that up to 3 unique phone numbers may
     * be entered for the golfer, such as home, cell and work.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolferType\TelephoneAType[]
     * $telephone
     */
    private $telephone = null;

    /**
     * An email address for the golfer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EmailType $email
     */
    private $email = null;

    /**
     * Membership program(s) associated with a golfer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolferType\MembershipProgramAType[]
     * $membershipProgram
     */
    private $membershipProgram = null;

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
     * Gets as rPH
     *
     * A unique ID that identifies this golfer.
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
     * A unique ID that identifies this golfer.
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
     * Adds as golferInfo
     *
     * The name of the golfer.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $golferInfo
     */
    public function addToGolferInfo(\Davispeixoto\OpenTravelAlliance\PersonNameType $golferInfo)
    {
        $this->golferInfo[] = $golferInfo;

        return $this;
    }

    /**
     * isset golferInfo
     *
     * The name of the golfer.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGolferInfo($index)
    {
        return isset($this->golferInfo[$index]);
    }

    /**
     * unset golferInfo
     *
     * The name of the golfer.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGolferInfo($index)
    {
        unset($this->golferInfo[$index]);
    }

    /**
     * Gets as golferInfo
     *
     * The name of the golfer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType[]
     */
    public function getGolferInfo()
    {
        return $this->golferInfo;
    }

    /**
     * Sets a new golferInfo
     *
     * The name of the golfer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType[] $golferInfo
     * @return self
     */
    public function setGolferInfo(array $golferInfo)
    {
        $this->golferInfo = $golferInfo;

        return $this;
    }

    /**
     * Adds as type
     *
     * Summary golfer type qualifying information.(Developer Notes): You may specify a
     * golfer type using any of these methods:
     * 1. Select a named value from the list (such as ClubMember) and enter a quantity.
     * 2. Select the "Other_" option from the named list, enter your golfer type in the
     * @extension attribute and the quantity. Note, make sure the unique golfer type
     * entered is known to your trading partners.
     * 3. Enter an age qualifying code and a quantity.(Reference): OpenTravel Online
     * Code List.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolferType\TypeAType $type
     */
    public function addToType(\Davispeixoto\OpenTravelAlliance\GolferType\TypeAType $type)
    {
        $this->type[] = $type;

        return $this;
    }

    /**
     * isset type
     *
     * Summary golfer type qualifying information.(Developer Notes): You may specify a
     * golfer type using any of these methods:
     * 1. Select a named value from the list (such as ClubMember) and enter a quantity.
     * 2. Select the "Other_" option from the named list, enter your golfer type in the
     * @extension attribute and the quantity. Note, make sure the unique golfer type
     * entered is known to your trading partners.
     * 3. Enter an age qualifying code and a quantity.(Reference): OpenTravel Online
     * Code List.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * Summary golfer type qualifying information.(Developer Notes): You may specify a
     * golfer type using any of these methods:
     * 1. Select a named value from the list (such as ClubMember) and enter a quantity.
     * 2. Select the "Other_" option from the named list, enter your golfer type in the
     * @extension attribute and the quantity. Note, make sure the unique golfer type
     * entered is known to your trading partners.
     * 3. Enter an age qualifying code and a quantity.(Reference): OpenTravel Online
     * Code List.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * Summary golfer type qualifying information.(Developer Notes): You may specify a
     * golfer type using any of these methods:
     * 1. Select a named value from the list (such as ClubMember) and enter a quantity.
     * 2. Select the "Other_" option from the named list, enter your golfer type in the
     * @extension attribute and the quantity. Note, make sure the unique golfer type
     * entered is known to your trading partners.
     * 3. Enter an age qualifying code and a quantity.(Reference): OpenTravel Online
     * Code List.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolferType\TypeAType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Summary golfer type qualifying information.(Developer Notes): You may specify a
     * golfer type using any of these methods:
     * 1. Select a named value from the list (such as ClubMember) and enter a quantity.
     * 2. Select the "Other_" option from the named list, enter your golfer type in the
     * @extension attribute and the quantity. Note, make sure the unique golfer type
     * entered is known to your trading partners.
     * 3. Enter an age qualifying code and a quantity.(Reference): OpenTravel Online
     * Code List.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolferType\TypeAType[] $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as address
     *
     * The address of the golfer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * The address of the golfer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressType $address
     * @return self
     */
    public function setAddress(\Davispeixoto\OpenTravelAlliance\AddressType $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Adds as telephone
     *
     * Telephone information for the golfer. Note that up to 3 unique phone numbers may
     * be entered for the golfer, such as home, cell and work.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolferType\TelephoneAType $telephone
     */
    public function addToTelephone(\Davispeixoto\OpenTravelAlliance\GolferType\TelephoneAType $telephone)
    {
        $this->telephone[] = $telephone;

        return $this;
    }

    /**
     * isset telephone
     *
     * Telephone information for the golfer. Note that up to 3 unique phone numbers may
     * be entered for the golfer, such as home, cell and work.
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
     * Telephone information for the golfer. Note that up to 3 unique phone numbers may
     * be entered for the golfer, such as home, cell and work.
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
     * Telephone information for the golfer. Note that up to 3 unique phone numbers may
     * be entered for the golfer, such as home, cell and work.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolferType\TelephoneAType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Telephone information for the golfer. Note that up to 3 unique phone numbers may
     * be entered for the golfer, such as home, cell and work.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolferType\TelephoneAType[] $telephone
     * @return self
     */
    public function setTelephone(array $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Gets as email
     *
     * An email address for the golfer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EmailType
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * An email address for the golfer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EmailType $email
     * @return self
     */
    public function setEmail(\Davispeixoto\OpenTravelAlliance\EmailType $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Adds as membershipProgram
     *
     * Membership program(s) associated with a golfer.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolferType\MembershipProgramAType
     * $membershipProgram
     */
    public function addToMembershipProgram(
        \Davispeixoto\OpenTravelAlliance\GolferType\MembershipProgramAType $membershipProgram
    ) {
        $this->membershipProgram[] = $membershipProgram;

        return $this;
    }

    /**
     * isset membershipProgram
     *
     * Membership program(s) associated with a golfer.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMembershipProgram($index)
    {
        return isset($this->membershipProgram[$index]);
    }

    /**
     * unset membershipProgram
     *
     * Membership program(s) associated with a golfer.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMembershipProgram($index)
    {
        unset($this->membershipProgram[$index]);
    }

    /**
     * Gets as membershipProgram
     *
     * Membership program(s) associated with a golfer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolferType\MembershipProgramAType[]
     */
    public function getMembershipProgram()
    {
        return $this->membershipProgram;
    }

    /**
     * Sets a new membershipProgram
     *
     * Membership program(s) associated with a golfer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolferType\MembershipProgramAType[]
     * $membershipProgram
     * @return self
     */
    public function setMembershipProgram(array $membershipProgram)
    {
        $this->membershipProgram = $membershipProgram;

        return $this;
    }


}

