<?php

namespace Davispeixoto\OpenTravelAlliance\TicketingInfoType;

use Davispeixoto\OpenTravelAlliance\FreeTextType;

/**
 * Class representing TicketAdvisoryAType
 */
class TicketAdvisoryAType extends FreeTextType
{

    /**
     * Indicates the required modification to the element.
     *
     * @property string $operation
     */
    private $operation = null;

    /**
     * Gets as operation
     *
     * Indicates the required modification to the element.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Indicates the required modification to the element.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }


}

