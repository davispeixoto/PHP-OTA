<?php

namespace Davispeixoto\OpenTravelAlliance\OTACancelRQ\VerificationAType;

/**
 * Class representing PersonNameAType
 */
class PersonNameAType
{

    /**
     * Surname MUST contain the family name (last name) of the guest as found on the
     * reservation.
     *
     * @property string $surname
     */
    private $surname = null;

    /**
     * Gets as surname
     *
     * Surname MUST contain the family name (last name) of the guest as found on the
     * reservation.
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Sets a new surname
     *
     * Surname MUST contain the family name (last name) of the guest as found on the
     * reservation.
     *
     * @param string $surname
     * @return self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }


}

