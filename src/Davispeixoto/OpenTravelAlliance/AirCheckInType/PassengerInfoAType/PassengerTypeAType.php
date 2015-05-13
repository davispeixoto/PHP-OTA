<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType;

use Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType;

/**
 * Class representing PassengerTypeAType
 */
class PassengerTypeAType extends PassengerTypeQuantityType
{

    /**
     * Identifies the gender.
     *
     * @property string $gender
     */
    private $gender = null;

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


}

