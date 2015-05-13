<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType;

use Davispeixoto\OpenTravelAlliance\ContactPersonType;

/**
 * Class representing ContactInfoAType
 */
class ContactInfoAType extends ContactPersonType
{

    /**
     * If true, the passenger chooses to decline providing emergency contact
     * information.
     *
     * @property boolean $optionToDecline
     */
    private $optionToDecline = null;

    /**
     * Specifies the relationship of this emergency contact to the passenger.
     *
     * @property string $relationship
     */
    private $relationship = null;

    /**
     * Gets as optionToDecline
     *
     * If true, the passenger chooses to decline providing emergency contact
     * information.
     *
     * @return boolean
     */
    public function getOptionToDecline()
    {
        return $this->optionToDecline;
    }

    /**
     * Sets a new optionToDecline
     *
     * If true, the passenger chooses to decline providing emergency contact
     * information.
     *
     * @param boolean $optionToDecline
     * @return self
     */
    public function setOptionToDecline($optionToDecline)
    {
        $this->optionToDecline = $optionToDecline;

        return $this;
    }

    /**
     * Gets as relationship
     *
     * Specifies the relationship of this emergency contact to the passenger.
     *
     * @return string
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * Specifies the relationship of this emergency contact to the passenger.
     *
     * @param string $relationship
     * @return self
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;

        return $this;
    }


}

