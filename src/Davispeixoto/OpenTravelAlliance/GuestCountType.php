<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GuestCountType
 *
 * Detailed guest count information.
 * XSD Type: GuestCountType
 */
class GuestCountType
{

    /**
     * The AgeQualifyingCode specifies a code representing the age type of the guest
     * and MUST refer to the OpenTravel Code List Age Qualifying Code (AQC). This
     * attribute MUST be used in conjunction with the Count attribute to identify the
     * number of guests of this age type. FastRez RECOMMENDS restricting the use of the
     * code table to codes 7 - Infant, 8 - Child, 10 - Adult, and 11 - Senior.
     *
     * @property string $ageQualifyingCode
     */
    private $ageQualifyingCode = null;

    /**
     * Age MAY be used to specify the age of the guest(s). Age MAY be used to calculate
     * additional person fees by guest age.
     *
     * @property integer $age
     */
    private $age = null;

    /**
     * Count MUST specify the number of guests that are of the age type identified in
     * AgeQualifyingCode and OPTIONALLY of the age identified in the Age attribute.
     *
     * @property integer $count
     */
    private $count = null;

    /**
     * Gets as ageQualifyingCode
     *
     * The AgeQualifyingCode specifies a code representing the age type of the guest
     * and MUST refer to the OpenTravel Code List Age Qualifying Code (AQC). This
     * attribute MUST be used in conjunction with the Count attribute to identify the
     * number of guests of this age type. FastRez RECOMMENDS restricting the use of the
     * code table to codes 7 - Infant, 8 - Child, 10 - Adult, and 11 - Senior.
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
     * The AgeQualifyingCode specifies a code representing the age type of the guest
     * and MUST refer to the OpenTravel Code List Age Qualifying Code (AQC). This
     * attribute MUST be used in conjunction with the Count attribute to identify the
     * number of guests of this age type. FastRez RECOMMENDS restricting the use of the
     * code table to codes 7 - Infant, 8 - Child, 10 - Adult, and 11 - Senior.
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
     * Gets as age
     *
     * Age MAY be used to specify the age of the guest(s). Age MAY be used to calculate
     * additional person fees by guest age.
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
     * Age MAY be used to specify the age of the guest(s). Age MAY be used to calculate
     * additional person fees by guest age.
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
     * Gets as count
     *
     * Count MUST specify the number of guests that are of the age type identified in
     * AgeQualifyingCode and OPTIONALLY of the age identified in the Age attribute.
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * Count MUST specify the number of guests that are of the age type identified in
     * AgeQualifyingCode and OPTIONALLY of the age identified in the Age attribute.
     *
     * @param integer $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }


}

