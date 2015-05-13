<?php

namespace Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType;

/**
 * Class representing ServicesAType
 */
class ServicesAType
{

    /**
     * Details regarding an additional service (e.g., security, first aid).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType[]
     * $service
     */
    private $service = null;

    /**
     * Adds as service
     *
     * Details regarding an additional service (e.g., security, first aid).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType
     * $service
     */
    public function addToService(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType $service
    ) {
        $this->service[] = $service;

        return $this;
    }

    /**
     * isset service
     *
     * Details regarding an additional service (e.g., security, first aid).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * Details regarding an additional service (e.g., security, first aid).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * Details regarding an additional service (e.g., security, first aid).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Details regarding an additional service (e.g., security, first aid).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType[]
     * $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;

        return $this;
    }


}

