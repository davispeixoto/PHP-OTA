<?php

namespace Davispeixoto\OpenTravelAlliance\VerificationType;

use Davispeixoto\OpenTravelAlliance\PersonNameType;

/**
 * Class representing PersonNameAType
 */
class PersonNameAType extends PersonNameType
{

    /**
     * When true the full name is not provided.
     *
     * @property boolean $partialName
     */
    private $partialName = null;

    /**
     * Gets as partialName
     *
     * When true the full name is not provided.
     *
     * @return boolean
     */
    public function getPartialName()
    {
        return $this->partialName;
    }

    /**
     * Sets a new partialName
     *
     * When true the full name is not provided.
     *
     * @param boolean $partialName
     * @return self
     */
    public function setPartialName($partialName)
    {
        $this->partialName = $partialName;

        return $this;
    }


}

