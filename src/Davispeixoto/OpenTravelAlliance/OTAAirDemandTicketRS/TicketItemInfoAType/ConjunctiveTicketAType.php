<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRS\TicketItemInfoAType;

/**
 * Class representing ConjunctiveTicketAType
 */
class ConjunctiveTicketAType
{

    /**
     * The number of the conjunctive ticket/document that was issued.
     *
     * @property string $ticketNumber
     */
    private $ticketNumber = null;

    /**
     * Gets as ticketNumber
     *
     * The number of the conjunctive ticket/document that was issued.
     *
     * @return string
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * Sets a new ticketNumber
     *
     * The number of the conjunctive ticket/document that was issued.
     *
     * @param string $ticketNumber
     * @return self
     */
    public function setTicketNumber($ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;

        return $this;
    }


}

