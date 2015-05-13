<?php

namespace Davispeixoto\OpenTravelAlliance\RuleInfoType;

/**
 * Class representing ChargesRulesAType
 */
class ChargesRulesAType
{

    /**
     * Specifies a voluntary change charge.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VoluntaryChangesType
     * $voluntaryChanges
     */
    private $voluntaryChanges = null;

    /**
     * Specifies a Voluntary Refund (cancellation) charge.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VoluntaryChangesType
     * $voluntaryRefunds
     */
    private $voluntaryRefunds = null;

    /**
     * Gets as voluntaryChanges
     *
     * Specifies a voluntary change charge.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VoluntaryChangesType
     */
    public function getVoluntaryChanges()
    {
        return $this->voluntaryChanges;
    }

    /**
     * Sets a new voluntaryChanges
     *
     * Specifies a voluntary change charge.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VoluntaryChangesType $voluntaryChanges
     * @return self
     */
    public function setVoluntaryChanges(\Davispeixoto\OpenTravelAlliance\VoluntaryChangesType $voluntaryChanges)
    {
        $this->voluntaryChanges = $voluntaryChanges;

        return $this;
    }

    /**
     * Gets as voluntaryRefunds
     *
     * Specifies a Voluntary Refund (cancellation) charge.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VoluntaryChangesType
     */
    public function getVoluntaryRefunds()
    {
        return $this->voluntaryRefunds;
    }

    /**
     * Sets a new voluntaryRefunds
     *
     * Specifies a Voluntary Refund (cancellation) charge.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VoluntaryChangesType $voluntaryRefunds
     * @return self
     */
    public function setVoluntaryRefunds(\Davispeixoto\OpenTravelAlliance\VoluntaryChangesType $voluntaryRefunds)
    {
        $this->voluntaryRefunds = $voluntaryRefunds;

        return $this;
    }


}

