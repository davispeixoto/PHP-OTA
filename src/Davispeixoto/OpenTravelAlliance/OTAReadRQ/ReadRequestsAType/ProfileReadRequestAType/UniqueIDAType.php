<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\ProfileReadRequestAType;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing UniqueIDAType
 */
class UniqueIDAType extends UniqueIDType
{

    /**
     * The personal identification number (password) for this ID.
     *
     * @property string $pinNumber
     */
    private $pinNumber = null;

    /**
     * Gets as pinNumber
     *
     * The personal identification number (password) for this ID.
     *
     * @return string
     */
    public function getPinNumber()
    {
        return $this->pinNumber;
    }

    /**
     * Sets a new pinNumber
     *
     * The personal identification number (password) for this ID.
     *
     * @param string $pinNumber
     * @return self
     */
    public function setPinNumber($pinNumber)
    {
        $this->pinNumber = $pinNumber;

        return $this;
    }


}

