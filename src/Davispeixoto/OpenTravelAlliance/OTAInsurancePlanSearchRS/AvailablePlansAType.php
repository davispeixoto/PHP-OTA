<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS;

/**
 * Class representing AvailablePlansAType
 */
class AvailablePlansAType
{

    /**
     * Container for information about a single insurance plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType[]
     * $availablePlan
     */
    private $availablePlan = null;

    /**
     * Adds as availablePlan
     *
     * Container for information about a single insurance plan.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType
     * $availablePlan
     */
    public function addToAvailablePlan(
        \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType $availablePlan
    ) {
        $this->availablePlan[] = $availablePlan;

        return $this;
    }

    /**
     * isset availablePlan
     *
     * Container for information about a single insurance plan.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAvailablePlan($index)
    {
        return isset($this->availablePlan[$index]);
    }

    /**
     * unset availablePlan
     *
     * Container for information about a single insurance plan.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAvailablePlan($index)
    {
        unset($this->availablePlan[$index]);
    }

    /**
     * Gets as availablePlan
     *
     * Container for information about a single insurance plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType[]
     */
    public function getAvailablePlan()
    {
        return $this->availablePlan;
    }

    /**
     * Sets a new availablePlan
     *
     * Container for information about a single insurance plan.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType[]
     * $availablePlan
     * @return self
     */
    public function setAvailablePlan(array $availablePlan)
    {
        $this->availablePlan = $availablePlan;

        return $this;
    }


}

