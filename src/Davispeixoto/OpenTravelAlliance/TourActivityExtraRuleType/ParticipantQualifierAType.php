<?php

namespace Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType;

/**
 * Class representing ParticipantQualifierAType
 */
class ParticipantQualifierAType
{

    /**
     * The minimum age qualification for an extra.
     *
     * @property integer $minimumAge
     */
    private $minimumAge = null;

    /**
     * The maximum age qualification for an extra.
     *
     * @property integer $maximumAge
     */
    private $maximumAge = null;

    /**
     * The minimum number of years of experience required to book this extra e.g.
     * driving experiience for car rental.
     *
     * @property integer $yearsExperience
     */
    private $yearsExperience = null;

    /**
     * This is used to specify a customers age in years.
     *
     * @property integer $age
     */
    private $age = null;

    /**
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
     *
     * @property \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * A specific type of age qualifier, such as "Adult". Select a value from the
     * pre-defined list or select "Other_" and enter a value known between trading
     * partners in the @Extension attribute.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AgeQualifierType $ageQualifier
     */
    private $ageQualifier = null;

    /**
     * Gets as minimumAge
     *
     * The minimum age qualification for an extra.
     *
     * @return integer
     */
    public function getMinimumAge()
    {
        return $this->minimumAge;
    }

    /**
     * Sets a new minimumAge
     *
     * The minimum age qualification for an extra.
     *
     * @param integer $minimumAge
     * @return self
     */
    public function setMinimumAge($minimumAge)
    {
        $this->minimumAge = $minimumAge;

        return $this;
    }

    /**
     * Gets as maximumAge
     *
     * The maximum age qualification for an extra.
     *
     * @return integer
     */
    public function getMaximumAge()
    {
        return $this->maximumAge;
    }

    /**
     * Sets a new maximumAge
     *
     * The maximum age qualification for an extra.
     *
     * @param integer $maximumAge
     * @return self
     */
    public function setMaximumAge($maximumAge)
    {
        $this->maximumAge = $maximumAge;

        return $this;
    }

    /**
     * Gets as yearsExperience
     *
     * The minimum number of years of experience required to book this extra e.g.
     * driving experiience for car rental.
     *
     * @return integer
     */
    public function getYearsExperience()
    {
        return $this->yearsExperience;
    }

    /**
     * Sets a new yearsExperience
     *
     * The minimum number of years of experience required to book this extra e.g.
     * driving experiience for car rental.
     *
     * @param integer $yearsExperience
     * @return self
     */
    public function setYearsExperience($yearsExperience)
    {
        $this->yearsExperience = $yearsExperience;

        return $this;
    }

    /**
     * Gets as age
     *
     * This is used to specify a customers age in years.
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
     * This is used to specify a customers age in years.
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
     * Gets as ageQualifier
     *
     * A specific type of age qualifier, such as "Adult". Select a value from the
     * pre-defined list or select "Other_" and enter a value known between trading
     * partners in the @Extension attribute.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AgeQualifierType
     */
    public function getAgeQualifier()
    {
        return $this->ageQualifier;
    }

    /**
     * Sets a new ageQualifier
     *
     * A specific type of age qualifier, such as "Adult". Select a value from the
     * pre-defined list or select "Other_" and enter a value known between trading
     * partners in the @Extension attribute.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AgeQualifierType $ageQualifier
     * @return self
     */
    public function setAgeQualifier(\Davispeixoto\OpenTravelAlliance\AgeQualifierType $ageQualifier)
    {
        $this->ageQualifier = $ageQualifier;

        return $this;
    }


}

