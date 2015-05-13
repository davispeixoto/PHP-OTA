<?php

namespace Davispeixoto\OpenTravelAlliance\AirSearchPrefsType;

use Davispeixoto\OpenTravelAlliance\TicketDistribPrefType;

/**
 * Class representing TicketDistribPrefAType
 */
class TicketDistribPrefAType extends TicketDistribPrefType
{

    /**
     * @property \DateTime $lastTicketDate
     */
    private $lastTicketDate = null;

    /**
     * @property \DateTime $firstTicketDate
     */
    private $firstTicketDate = null;

    /**
     * Gets as lastTicketDate
     *
     * @return \DateTime
     */
    public function getLastTicketDate()
    {
        return $this->lastTicketDate;
    }

    /**
     * Sets a new lastTicketDate
     *
     * @param \DateTime $lastTicketDate
     * @return self
     */
    public function setLastTicketDate(\DateTime $lastTicketDate)
    {
        $this->lastTicketDate = $lastTicketDate;

        return $this;
    }

    /**
     * Gets as firstTicketDate
     *
     * @return \DateTime
     */
    public function getFirstTicketDate()
    {
        return $this->firstTicketDate;
    }

    /**
     * Sets a new firstTicketDate
     *
     * @param \DateTime $firstTicketDate
     * @return self
     */
    public function setFirstTicketDate(\DateTime $firstTicketDate)
    {
        $this->firstTicketDate = $firstTicketDate;

        return $this;
    }


}

