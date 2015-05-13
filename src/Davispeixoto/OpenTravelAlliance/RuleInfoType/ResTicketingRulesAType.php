<?php

namespace Davispeixoto\OpenTravelAlliance\RuleInfoType;

/**
 * Class representing ResTicketingRulesAType
 */
class ResTicketingRulesAType
{

    /**
     * Container for holding rules regarding advance reservation or ticketing
     * restrictions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType
     * $advResTicketing
     */
    private $advResTicketing = null;

    /**
     * Gets as advResTicketing
     *
     * Container for holding rules regarding advance reservation or ticketing
     * restrictions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType
     */
    public function getAdvResTicketing()
    {
        return $this->advResTicketing;
    }

    /**
     * Sets a new advResTicketing
     *
     * Container for holding rules regarding advance reservation or ticketing
     * restrictions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType
     * $advResTicketing
     * @return self
     */
    public function setAdvResTicketing(
        \Davispeixoto\OpenTravelAlliance\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType $advResTicketing
    ) {
        $this->advResTicketing = $advResTicketing;

        return $this;
    }


}

