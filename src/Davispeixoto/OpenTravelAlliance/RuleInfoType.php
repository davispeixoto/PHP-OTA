<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RuleInfoType
 *
 * Contains summary fare rule information as well as detailed Rule Information for
 * Fare Basis Codes. Information may be actual rules data or the results returned
 * from a rules-based inquiry.
 * XSD Type: RuleInfoType
 */
class RuleInfoType
{

    /**
     * General container for rules regarding fare reservation, ticketing and sale
     * restrictions
     *
     * @property \Davispeixoto\OpenTravelAlliance\RuleInfoType\ResTicketingRulesAType
     * $resTicketingRules
     */
    private $resTicketingRules = null;

    /**
     * Rules providing minimum or maximum stay restrictions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StayRestrictionsType
     * $lengthOfStayRules
     */
    private $lengthOfStayRules = null;

    /**
     * General container for rules specifying amounts for such things as: surcharges,
     * deposits, change penalties, cancellation penalties, etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RuleInfoType\ChargesRulesAType
     * $chargesRules
     */
    private $chargesRules = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as resTicketingRules
     *
     * General container for rules regarding fare reservation, ticketing and sale
     * restrictions
     *
     * @return \Davispeixoto\OpenTravelAlliance\RuleInfoType\ResTicketingRulesAType
     */
    public function getResTicketingRules()
    {
        return $this->resTicketingRules;
    }

    /**
     * Sets a new resTicketingRules
     *
     * General container for rules regarding fare reservation, ticketing and sale
     * restrictions
     *
     * @param \Davispeixoto\OpenTravelAlliance\RuleInfoType\ResTicketingRulesAType
     * $resTicketingRules
     * @return self
     */
    public function setResTicketingRules(
        \Davispeixoto\OpenTravelAlliance\RuleInfoType\ResTicketingRulesAType $resTicketingRules
    ) {
        $this->resTicketingRules = $resTicketingRules;

        return $this;
    }

    /**
     * Gets as lengthOfStayRules
     *
     * Rules providing minimum or maximum stay restrictions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StayRestrictionsType
     */
    public function getLengthOfStayRules()
    {
        return $this->lengthOfStayRules;
    }

    /**
     * Sets a new lengthOfStayRules
     *
     * Rules providing minimum or maximum stay restrictions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StayRestrictionsType $lengthOfStayRules
     * @return self
     */
    public function setLengthOfStayRules(\Davispeixoto\OpenTravelAlliance\StayRestrictionsType $lengthOfStayRules)
    {
        $this->lengthOfStayRules = $lengthOfStayRules;

        return $this;
    }

    /**
     * Gets as chargesRules
     *
     * General container for rules specifying amounts for such things as: surcharges,
     * deposits, change penalties, cancellation penalties, etc.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RuleInfoType\ChargesRulesAType
     */
    public function getChargesRules()
    {
        return $this->chargesRules;
    }

    /**
     * Sets a new chargesRules
     *
     * General container for rules specifying amounts for such things as: surcharges,
     * deposits, change penalties, cancellation penalties, etc.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RuleInfoType\ChargesRulesAType
     * $chargesRules
     * @return self
     */
    public function setChargesRules(\Davispeixoto\OpenTravelAlliance\RuleInfoType\ChargesRulesAType $chargesRules)
    {
        $this->chargesRules = $chargesRules;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

