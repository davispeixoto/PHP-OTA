<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PhonePrefType
 *
 * Identifies a telephone number preference.
 * XSD Type: PhonePrefType
 */
class PhonePrefType
{

    /**
     * Identifies a telephone number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PhonePrefType\TelephoneAType
     * $telephone
     */
    private $telephone = null;

    /**
     * Gets as telephone
     *
     * Identifies a telephone number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PhonePrefType\TelephoneAType
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Identifies a telephone number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PhonePrefType\TelephoneAType $telephone
     * @return self
     */
    public function setTelephone(\Davispeixoto\OpenTravelAlliance\PhonePrefType\TelephoneAType $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }


}

