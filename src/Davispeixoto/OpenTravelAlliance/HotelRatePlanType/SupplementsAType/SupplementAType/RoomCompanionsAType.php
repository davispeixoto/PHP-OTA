<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRatePlanType\SupplementsAType\SupplementAType;

/**
 * Class representing RoomCompanionsAType
 */
class RoomCompanionsAType
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
     * The minimum number of guests of the specified age group required in the room in
     * order to apply this supplement.
     *
     * @property integer $minCompanions
     */
    private $minCompanions = null;

    /**
     * The maximum number of guests of the specified age group permitted in the room in
     * order to apply this supplement.
     *
     * @property integer $maxCompanions
     */
    private $maxCompanions = null;

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
     * Gets as minCompanions
     *
     * The minimum number of guests of the specified age group required in the room in
     * order to apply this supplement.
     *
     * @return integer
     */
    public function getMinCompanions()
    {
        return $this->minCompanions;
    }

    /**
     * Sets a new minCompanions
     *
     * The minimum number of guests of the specified age group required in the room in
     * order to apply this supplement.
     *
     * @param integer $minCompanions
     * @return self
     */
    public function setMinCompanions($minCompanions)
    {
        $this->minCompanions = $minCompanions;

        return $this;
    }

    /**
     * Gets as maxCompanions
     *
     * The maximum number of guests of the specified age group permitted in the room in
     * order to apply this supplement.
     *
     * @return integer
     */
    public function getMaxCompanions()
    {
        return $this->maxCompanions;
    }

    /**
     * Sets a new maxCompanions
     *
     * The maximum number of guests of the specified age group permitted in the room in
     * order to apply this supplement.
     *
     * @param integer $maxCompanions
     * @return self
     */
    public function setMaxCompanions($maxCompanions)
    {
        $this->maxCompanions = $maxCompanions;

        return $this;
    }


}

