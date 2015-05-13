<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirLowFareSearchRQ;

use Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType;

/**
 * Class representing TravelerInfoSummaryAType
 */
class TravelerInfoSummaryAType extends TravelerInfoSummaryType
{

    /**
     * To specify the country code where ticketing of the reservation will take place.
     *
     * @property string $ticketingCountryCode
     */
    private $ticketingCountryCode = null;

    /**
     * If true, this request is for a specific PTC and only fares applicable to that
     * PTC will be checked and returned.
     *
     * @property boolean $specificPTCIndicator
     */
    private $specificPTCIndicator = null;

    /**
     * Gets as ticketingCountryCode
     *
     * To specify the country code where ticketing of the reservation will take place.
     *
     * @return string
     */
    public function getTicketingCountryCode()
    {
        return $this->ticketingCountryCode;
    }

    /**
     * Sets a new ticketingCountryCode
     *
     * To specify the country code where ticketing of the reservation will take place.
     *
     * @param string $ticketingCountryCode
     * @return self
     */
    public function setTicketingCountryCode($ticketingCountryCode)
    {
        $this->ticketingCountryCode = $ticketingCountryCode;

        return $this;
    }

    /**
     * Gets as specificPTCIndicator
     *
     * If true, this request is for a specific PTC and only fares applicable to that
     * PTC will be checked and returned.
     *
     * @return boolean
     */
    public function getSpecificPTCIndicator()
    {
        return $this->specificPTCIndicator;
    }

    /**
     * Sets a new specificPTCIndicator
     *
     * If true, this request is for a specific PTC and only fares applicable to that
     * PTC will be checked and returned.
     *
     * @param boolean $specificPTCIndicator
     * @return self
     */
    public function setSpecificPTCIndicator($specificPTCIndicator)
    {
        $this->specificPTCIndicator = $specificPTCIndicator;

        return $this;
    }


}

