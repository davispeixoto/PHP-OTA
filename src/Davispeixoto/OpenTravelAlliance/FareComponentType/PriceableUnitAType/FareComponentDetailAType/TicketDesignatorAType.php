<?php

namespace Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType;

/**
 * Class representing TicketDesignatorAType
 */
class TicketDesignatorAType
{

    /**
     * The applicable code as provided for in ATA SIPP Reso 110.16 or IATA Reso 728.
     *
     * @property string $ticketDesignatorCode
     */
    private $ticketDesignatorCode = null;

    /**
     * Used to qualify the ticket designator.
     *
     * @property string $ticketDesignatorQualifier
     */
    private $ticketDesignatorQualifier = null;

    /**
     * Gets as ticketDesignatorCode
     *
     * The applicable code as provided for in ATA SIPP Reso 110.16 or IATA Reso 728.
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
     * The applicable code as provided for in ATA SIPP Reso 110.16 or IATA Reso 728.
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
     * Gets as ticketDesignatorQualifier
     *
     * Used to qualify the ticket designator.
     *
     * @return string
     */
    public function getTicketDesignatorQualifier()
    {
        return $this->ticketDesignatorQualifier;
    }

    /**
     * Sets a new ticketDesignatorQualifier
     *
     * Used to qualify the ticket designator.
     *
     * @param string $ticketDesignatorQualifier
     * @return self
     */
    public function setTicketDesignatorQualifier($ticketDesignatorQualifier)
    {
        $this->ticketDesignatorQualifier = $ticketDesignatorQualifier;

        return $this;
    }


}

