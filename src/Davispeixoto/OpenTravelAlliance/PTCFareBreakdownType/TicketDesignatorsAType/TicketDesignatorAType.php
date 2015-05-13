<?php

namespace Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TicketDesignatorsAType;

/**
 * Class representing TicketDesignatorAType
 */
class TicketDesignatorAType
{

    /**
     * Identifies the flight to which this ticket designator applies.
     *
     * @property string $flightRefRPH
     */
    private $flightRefRPH = null;

    /**
     * Specifies a discount code applicable to the fare.
     *
     * @property string $ticketDesignatorCode
     */
    private $ticketDesignatorCode = null;

    /**
     * Specifies an extension that a carrier may apply to a ticket designator.
     *
     * @property string $ticketDesignatorExtension
     */
    private $ticketDesignatorExtension = null;

    /**
     * Gets as flightRefRPH
     *
     * Identifies the flight to which this ticket designator applies.
     *
     * @return string
     */
    public function getFlightRefRPH()
    {
        return $this->flightRefRPH;
    }

    /**
     * Sets a new flightRefRPH
     *
     * Identifies the flight to which this ticket designator applies.
     *
     * @param string $flightRefRPH
     * @return self
     */
    public function setFlightRefRPH($flightRefRPH)
    {
        $this->flightRefRPH = $flightRefRPH;

        return $this;
    }

    /**
     * Gets as ticketDesignatorCode
     *
     * Specifies a discount code applicable to the fare.
     *
     * @return string
     */
    public function getTicketDesignatorCode()
    {
        return $this->ticketDesignatorCode;
    }

    /**
     * Sets a new ticketDesignatorCode
     *
     * Specifies a discount code applicable to the fare.
     *
     * @param string $ticketDesignatorCode
     * @return self
     */
    public function setTicketDesignatorCode($ticketDesignatorCode)
    {
        $this->ticketDesignatorCode = $ticketDesignatorCode;

        return $this;
    }

    /**
     * Gets as ticketDesignatorExtension
     *
     * Specifies an extension that a carrier may apply to a ticket designator.
     *
     * @return string
     */
    public function getTicketDesignatorExtension()
    {
        return $this->ticketDesignatorExtension;
    }

    /**
     * Sets a new ticketDesignatorExtension
     *
     * Specifies an extension that a carrier may apply to a ticket designator.
     *
     * @param string $ticketDesignatorExtension
     * @return self
     */
    public function setTicketDesignatorExtension($ticketDesignatorExtension)
    {
        $this->ticketDesignatorExtension = $ticketDesignatorExtension;

        return $this;
    }


}

