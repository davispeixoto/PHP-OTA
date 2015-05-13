<?php

namespace Davispeixoto\OpenTravelAlliance\RuleInfoType\ResTicketingRulesAType;

use Davispeixoto\OpenTravelAlliance\AdvResTicketingType;

/**
 * Class representing AdvResTicketingAType
 */
class AdvResTicketingAType extends AdvResTicketingType
{

    /**
     * The first date that a ticket may be issued for this fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $firstTicketDate
     */
    private $firstTicketDate = null;

    /**
     * The last date that a ticket may be issued for this fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $lastTicketDate
     */
    private $lastTicketDate = null;

    /**
     * Gets as firstTicketDate
     *
     * The first date that a ticket may be issued for this fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getFirstTicketDate()
    {
        return $this->firstTicketDate;
    }

    /**
     * Sets a new firstTicketDate
     *
     * The first date that a ticket may be issued for this fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $firstTicketDate
     * @return self
     */
    public function setFirstTicketDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $firstTicketDate)
    {
        $this->firstTicketDate = $firstTicketDate;

        return $this;
    }

    /**
     * Gets as lastTicketDate
     *
     * The last date that a ticket may be issued for this fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getLastTicketDate()
    {
        return $this->lastTicketDate;
    }

    /**
     * Sets a new lastTicketDate
     *
     * The last date that a ticket may be issued for this fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $lastTicketDate
     * @return self
     */
    public function setLastTicketDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $lastTicketDate)
    {
        $this->lastTicketDate = $lastTicketDate;

        return $this;
    }


}

