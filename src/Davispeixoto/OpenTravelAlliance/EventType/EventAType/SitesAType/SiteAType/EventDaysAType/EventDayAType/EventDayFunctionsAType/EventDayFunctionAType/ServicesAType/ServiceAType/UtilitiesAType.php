<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType;

/**
 * Class representing UtilitiesAType
 */
class UtilitiesAType
{

    /**
     * A utility requirement for this function.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType\UtilitiesAType\UtilityAType[]
     * $utility
     */
    private $utility = null;

    /**
     * Adds as utility
     *
     * A utility requirement for this function.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType\UtilitiesAType\UtilityAType
     * $utility
     */
    public function addToUtility(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType\UtilitiesAType\UtilityAType $utility
    ) {
        $this->utility[] = $utility;

        return $this;
    }

    /**
     * isset utility
     *
     * A utility requirement for this function.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUtility($index)
    {
        return isset($this->utility[$index]);
    }

    /**
     * unset utility
     *
     * A utility requirement for this function.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUtility($index)
    {
        unset($this->utility[$index]);
    }

    /**
     * Gets as utility
     *
     * A utility requirement for this function.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType\UtilitiesAType\UtilityAType[]
     */
    public function getUtility()
    {
        return $this->utility;
    }

    /**
     * Sets a new utility
     *
     * A utility requirement for this function.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType\UtilitiesAType\UtilityAType[]
     * $utility
     * @return self
     */
    public function setUtility(array $utility)
    {
        $this->utility = $utility;

        return $this;
    }


}

