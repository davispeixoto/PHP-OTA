<?php

namespace Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType;

/**
 * Class representing TicketDesignatorsAType
 */
class TicketDesignatorsAType
{

    /**
     * Contains the discount code and a flight reference applicable to the fare.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TicketDesignatorsAType\TicketDesignatorAType[]
     * $ticketDesignator
     */
    private $ticketDesignator = null;

    /**
     * Adds as ticketDesignator
     *
     * Contains the discount code and a flight reference applicable to the fare.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TicketDesignatorsAType\TicketDesignatorAType
     * $ticketDesignator
     */
    public function addToTicketDesignator(
        \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TicketDesignatorsAType\TicketDesignatorAType $ticketDesignator
    ) {
        $this->ticketDesignator[] = $ticketDesignator;

        return $this;
    }

    /**
     * isset ticketDesignator
     *
     * Contains the discount code and a flight reference applicable to the fare.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTicketDesignator($index)
    {
        return isset($this->ticketDesignator[$index]);
    }

    /**
     * unset ticketDesignator
     *
     * Contains the discount code and a flight reference applicable to the fare.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTicketDesignator($index)
    {
        unset($this->ticketDesignator[$index]);
    }

    /**
     * Gets as ticketDesignator
     *
     * Contains the discount code and a flight reference applicable to the fare.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TicketDesignatorsAType\TicketDesignatorAType[]
     */
    public function getTicketDesignator()
    {
        return $this->ticketDesignator;
    }

    /**
     * Sets a new ticketDesignator
     *
     * Contains the discount code and a flight reference applicable to the fare.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TicketDesignatorsAType\TicketDesignatorAType[]
     * $ticketDesignator
     * @return self
     */
    public function setTicketDesignator(array $ticketDesignator)
    {
        $this->ticketDesignator = $ticketDesignator;

        return $this;
    }


}

