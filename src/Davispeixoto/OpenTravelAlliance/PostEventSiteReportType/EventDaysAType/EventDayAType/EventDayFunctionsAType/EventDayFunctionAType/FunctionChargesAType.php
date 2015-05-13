<?php

namespace Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType;

/**
 * Class representing FunctionChargesAType
 */
class FunctionChargesAType
{

    /**
     * A summary of a specific charge associated with a function (i.e., total
     * audiovisual charges for the function).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType\FunctionChargeAType[]
     * $functionCharge
     */
    private $functionCharge = null;

    /**
     * Adds as functionCharge
     *
     * A summary of a specific charge associated with a function (i.e., total
     * audiovisual charges for the function).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType\FunctionChargeAType
     * $functionCharge
     */
    public function addToFunctionCharge(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType\FunctionChargeAType $functionCharge
    ) {
        $this->functionCharge[] = $functionCharge;

        return $this;
    }

    /**
     * isset functionCharge
     *
     * A summary of a specific charge associated with a function (i.e., total
     * audiovisual charges for the function).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFunctionCharge($index)
    {
        return isset($this->functionCharge[$index]);
    }

    /**
     * unset functionCharge
     *
     * A summary of a specific charge associated with a function (i.e., total
     * audiovisual charges for the function).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFunctionCharge($index)
    {
        unset($this->functionCharge[$index]);
    }

    /**
     * Gets as functionCharge
     *
     * A summary of a specific charge associated with a function (i.e., total
     * audiovisual charges for the function).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType\FunctionChargeAType[]
     */
    public function getFunctionCharge()
    {
        return $this->functionCharge;
    }

    /**
     * Sets a new functionCharge
     *
     * A summary of a specific charge associated with a function (i.e., total
     * audiovisual charges for the function).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType\FunctionChargeAType[]
     * $functionCharge
     * @return self
     */
    public function setFunctionCharge(array $functionCharge)
    {
        $this->functionCharge = $functionCharge;

        return $this;
    }


}

