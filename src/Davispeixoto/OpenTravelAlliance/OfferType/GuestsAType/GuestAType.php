<?php

namespace Davispeixoto\OpenTravelAlliance\OfferType\GuestsAType;

/**
 * Class representing GuestAType
 */
class GuestAType
{

    /**
     * Defines an age range or age category of a guest (e.g., under 21, over 65, teen,
     * infant). Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @property string $ageQualifyingCode
     */
    private $ageQualifyingCode = null;

    /**
     * MinAge: The minimum age to qualify for AgeQualifyingCode.
     *
     * @property integer $minAge
     */
    private $minAge = null;

    /**
     * Max Age: The maximum age to qualify for AgeQualifyingCode.
     *
     * @property integer $maxAge
     */
    private $maxAge = null;

    /**
     * TimeUnit : Qualifier for Age.
     *
     * @property string $ageTimeUnit
     */
    private $ageTimeUnit = null;

    /**
     * Defines the age range category or bucket a guest can be booked into.
     *
     * @property string $ageBucket
     */
    private $ageBucket = null;

    /**
     * Minimum number of guests of this age group needed to qualify for this offer.
     *
     * @property integer $minCount
     */
    private $minCount = null;

    /**
     * Maximum number of guests of this age group allowed to qualify for this offer.
     *
     * @property integer $maxCount
     */
    private $maxCount = null;

    /**
     * First person in this age group to which this offer applies.
     *
     * @property integer $firstQualifyingPosition
     */
    private $firstQualifyingPosition = null;

    /**
     * Last person in this age group to which this offer applies.
     *
     * @property integer $lastQualifyingPosition
     */
    private $lastQualifyingPosition = null;

    /**
     * Gets as ageQualifyingCode
     *
     * Defines an age range or age category of a guest (e.g., under 21, over 65, teen,
     * infant). Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @return string
     */
    public function getAgeQualifyingCode()
    {
        return $this->ageQualifyingCode;
    }

    /**
     * Sets a new ageQualifyingCode
     *
     * Defines an age range or age category of a guest (e.g., under 21, over 65, teen,
     * infant). Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @param string $ageQualifyingCode
     * @return self
     */
    public function setAgeQualifyingCode($ageQualifyingCode)
    {
        $this->ageQualifyingCode = $ageQualifyingCode;

        return $this;
    }

    /**
     * Gets as minAge
     *
     * MinAge: The minimum age to qualify for AgeQualifyingCode.
     *
     * @return integer
     */
    public function getMinAge()
    {
        return $this->minAge;
    }

    /**
     * Sets a new minAge
     *
     * MinAge: The minimum age to qualify for AgeQualifyingCode.
     *
     * @param integer $minAge
     * @return self
     */
    public function setMinAge($minAge)
    {
        $this->minAge = $minAge;

        return $this;
    }

    /**
     * Gets as maxAge
     *
     * Max Age: The maximum age to qualify for AgeQualifyingCode.
     *
     * @return integer
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }

    /**
     * Sets a new maxAge
     *
     * Max Age: The maximum age to qualify for AgeQualifyingCode.
     *
     * @param integer $maxAge
     * @return self
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;

        return $this;
    }

    /**
     * Gets as ageTimeUnit
     *
     * TimeUnit : Qualifier for Age.
     *
     * @return string
     */
    public function getAgeTimeUnit()
    {
        return $this->ageTimeUnit;
    }

    /**
     * Sets a new ageTimeUnit
     *
     * TimeUnit : Qualifier for Age.
     *
     * @param string $ageTimeUnit
     * @return self
     */
    public function setAgeTimeUnit($ageTimeUnit)
    {
        $this->ageTimeUnit = $ageTimeUnit;

        return $this;
    }

    /**
     * Gets as ageBucket
     *
     * Defines the age range category or bucket a guest can be booked into.
     *
     * @return string
     */
    public function getAgeBucket()
    {
        return $this->ageBucket;
    }

    /**
     * Sets a new ageBucket
     *
     * Defines the age range category or bucket a guest can be booked into.
     *
     * @param string $ageBucket
     * @return self
     */
    public function setAgeBucket($ageBucket)
    {
        $this->ageBucket = $ageBucket;

        return $this;
    }

    /**
     * Gets as minCount
     *
     * Minimum number of guests of this age group needed to qualify for this offer.
     *
     * @return integer
     */
    public function getMinCount()
    {
        return $this->minCount;
    }

    /**
     * Sets a new minCount
     *
     * Minimum number of guests of this age group needed to qualify for this offer.
     *
     * @param integer $minCount
     * @return self
     */
    public function setMinCount($minCount)
    {
        $this->minCount = $minCount;

        return $this;
    }

    /**
     * Gets as maxCount
     *
     * Maximum number of guests of this age group allowed to qualify for this offer.
     *
     * @return integer
     */
    public function getMaxCount()
    {
        return $this->maxCount;
    }

    /**
     * Sets a new maxCount
     *
     * Maximum number of guests of this age group allowed to qualify for this offer.
     *
     * @param integer $maxCount
     * @return self
     */
    public function setMaxCount($maxCount)
    {
        $this->maxCount = $maxCount;

        return $this;
    }

    /**
     * Gets as firstQualifyingPosition
     *
     * First person in this age group to which this offer applies.
     *
     * @return integer
     */
    public function getFirstQualifyingPosition()
    {
        return $this->firstQualifyingPosition;
    }

    /**
     * Sets a new firstQualifyingPosition
     *
     * First person in this age group to which this offer applies.
     *
     * @param integer $firstQualifyingPosition
     * @return self
     */
    public function setFirstQualifyingPosition($firstQualifyingPosition)
    {
        $this->firstQualifyingPosition = $firstQualifyingPosition;

        return $this;
    }

    /**
     * Gets as lastQualifyingPosition
     *
     * Last person in this age group to which this offer applies.
     *
     * @return integer
     */
    public function getLastQualifyingPosition()
    {
        return $this->lastQualifyingPosition;
    }

    /**
     * Sets a new lastQualifyingPosition
     *
     * Last person in this age group to which this offer applies.
     *
     * @param integer $lastQualifyingPosition
     * @return self
     */
    public function setLastQualifyingPosition($lastQualifyingPosition)
    {
        $this->lastQualifyingPosition = $lastQualifyingPosition;

        return $this;
    }


}

