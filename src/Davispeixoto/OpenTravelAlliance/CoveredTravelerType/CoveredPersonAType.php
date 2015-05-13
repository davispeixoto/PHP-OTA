<?php

namespace Davispeixoto\OpenTravelAlliance\CoveredTravelerType;

use Davispeixoto\OpenTravelAlliance\PersonNameType;

/**
 * Class representing CoveredPersonAType
 */
class CoveredPersonAType extends PersonNameType
{

    /**
     * The relationship of this traveler to the primary traveler.
     *
     * @property string $relation
     */
    private $relation = null;

    /**
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
     *
     * @property \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * The physical age of the traveler.
     *
     * @property integer $age
     */
    private $age = null;

    /**
     * Gets as relation
     *
     * The relationship of this traveler to the primary traveler.
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
     * The relationship of this traveler to the primary traveler.
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
     * The physical age of the traveler.
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
     * The physical age of the traveler.
     *
     * @param integer $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }


}

