<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SearchTravelerType
 *
 * Information about the travelers, including birth date, age, relationship to
 * primary insured and gender.
 * XSD Type: SearchTravelerType
 */
class SearchTravelerType
{

    /**
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
     *
     * @property \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * Used to provide an individuals age.
     *
     * @property integer $age
     */
    private $age = null;

    /**
     * Used to define the relationship to the primary insured.
     *
     * @property string $relation
     */
    private $relation = null;

    /**
     * Used to provide gender information.
     *
     * @property string $gender
     */
    private $gender = null;

    /**
     * Address information for the traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressInfoType $address
     */
    private $address = null;

    /**
     * Information about the traveler's citizenship.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SearchTravelerType\CitizenCountryNameAType
     * $citizenCountryName
     */
    private $citizenCountryName = null;

    /**
     * Insurance coverage requirement information, including estimated trip cost, the
     * amount of requested accidental flight insurance, descriptions of luggage or
     * equipment to be covered and a description of the traveler's pre-existing
     * conditions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType $indCoverageReqs
     */
    private $indCoverageReqs = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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
     * Gets as age
     *
     * Used to provide an individuals age.
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
     * Used to provide an individuals age.
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
     * Gets as relation
     *
     * Used to define the relationship to the primary insured.
     *
     * @return string
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * Sets a new relation
     *
     * Used to define the relationship to the primary insured.
     *
     * @param string $relation
     * @return self
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * Gets as gender
     *
     * Used to provide gender information.
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
     * Used to provide gender information.
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
     * Gets as address
     *
     * Address information for the traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressInfoType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address information for the traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressInfoType $address
     * @return self
     */
    public function setAddress(\Davispeixoto\OpenTravelAlliance\AddressInfoType $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets as citizenCountryName
     *
     * Information about the traveler's citizenship.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SearchTravelerType\CitizenCountryNameAType
     */
    public function getCitizenCountryName()
    {
        return $this->citizenCountryName;
    }

    /**
     * Sets a new citizenCountryName
     *
     * Information about the traveler's citizenship.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SearchTravelerType\CitizenCountryNameAType
     * $citizenCountryName
     * @return self
     */
    public function setCitizenCountryName(
        \Davispeixoto\OpenTravelAlliance\SearchTravelerType\CitizenCountryNameAType $citizenCountryName
    ) {
        $this->citizenCountryName = $citizenCountryName;

        return $this;
    }

    /**
     * Gets as indCoverageReqs
     *
     * Insurance coverage requirement information, including estimated trip cost, the
     * amount of requested accidental flight insurance, descriptions of luggage or
     * equipment to be covered and a description of the traveler's pre-existing
     * conditions.
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
     * Insurance coverage requirement information, including estimated trip cost, the
     * amount of requested accidental flight insurance, descriptions of luggage or
     * equipment to be covered and a description of the traveler's pre-existing
     * conditions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType $indCoverageReqs
     * @return self
     */
    public function setIndCoverageReqs(\Davispeixoto\OpenTravelAlliance\IndCoverageReqsType $indCoverageReqs)
    {
        $this->indCoverageReqs = $indCoverageReqs;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

