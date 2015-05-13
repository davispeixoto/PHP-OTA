<?php

namespace Davispeixoto\OpenTravelAlliance\TravelerType\PartyMixAType;

/**
 * Class representing TravelerAType
 */
class TravelerAType
{

    /**
     * The age of the traveler.
     *
     * @property integer $age
     */
    private $age = null;

    /**
     * Defines the age range category or bucket to which the traveler belongs.
     *
     * @property string $ageBucket
     */
    private $ageBucket = null;

    /**
     * Gets as age
     *
     * The age of the traveler.
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
     * The age of the traveler.
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
     * Gets as ageBucket
     *
     * Defines the age range category or bucket to which the traveler belongs.
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
     * Defines the age range category or bucket to which the traveler belongs.
     *
     * @param string $ageBucket
     * @return self
     */
    public function setAgeBucket($ageBucket)
    {
        $this->ageBucket = $ageBucket;

        return $this;
    }


}

