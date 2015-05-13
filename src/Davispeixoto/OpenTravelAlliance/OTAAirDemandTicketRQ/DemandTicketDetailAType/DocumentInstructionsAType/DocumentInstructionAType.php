<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\DocumentInstructionsAType;

/**
 * Class representing DocumentInstructionAType
 */
class DocumentInstructionAType
{

    /**
     * A document number to be used in ticketing the itinerary.
     *
     * @property integer $number
     */
    private $number = null;

    /**
     * Gets as number
     *
     * A document number to be used in ticketing the itinerary.
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * A document number to be used in ticketing the itinerary.
     *
     * @param integer $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }


}

