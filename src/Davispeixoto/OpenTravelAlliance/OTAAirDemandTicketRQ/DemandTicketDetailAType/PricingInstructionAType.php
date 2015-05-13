<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType;

/**
 * Class representing PricingInstructionAType
 */
class PricingInstructionAType
{

    /**
     * When true, the fare stored in the booking record should be used instead of any
     * stored pricing instructions.
     *
     * @property boolean $useStoredFareInd
     */
    private $useStoredFareInd = null;

    /**
     * Provides a pricing instruction number to be used for pricing the itinerary at
     * the time of issuing the ticket.
     *
     * @property integer $number
     */
    private $number = null;

    /**
     * Gets as useStoredFareInd
     *
     * When true, the fare stored in the booking record should be used instead of any
     * stored pricing instructions.
     *
     * @return boolean
     */
    public function getUseStoredFareInd()
    {
        return $this->useStoredFareInd;
    }

    /**
     * Sets a new useStoredFareInd
     *
     * When true, the fare stored in the booking record should be used instead of any
     * stored pricing instructions.
     *
     * @param boolean $useStoredFareInd
     * @return self
     */
    public function setUseStoredFareInd($useStoredFareInd)
    {
        $this->useStoredFareInd = $useStoredFareInd;

        return $this;
    }

    /**
     * Gets as number
     *
     * Provides a pricing instruction number to be used for pricing the itinerary at
     * the time of issuing the ticket.
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
     * Provides a pricing instruction number to be used for pricing the itinerary at
     * the time of issuing the ticket.
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

