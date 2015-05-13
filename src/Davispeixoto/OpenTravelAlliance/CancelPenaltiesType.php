<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CancelPenaltiesType
 *
 * A collection of CancelPenalty.
 * XSD Type: CancelPenaltiesType
 */
class CancelPenaltiesType
{

    /**
     * When true, indicates a cancel policy exits. When false, no cancel policy exists.
     * Typically this indicator is used when details are not being sent.
     *
     * @property boolean $cancelPolicyIndicator
     */
    private $cancelPolicyIndicator = null;

    /**
     * Defines the cancellation penalty of the hotel facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CancelPenaltyType[] $cancelPenalty
     */
    private $cancelPenalty = null;

    /**
     * Gets as cancelPolicyIndicator
     *
     * When true, indicates a cancel policy exits. When false, no cancel policy exists.
     * Typically this indicator is used when details are not being sent.
     *
     * @return boolean
     */
    public function getCancelPolicyIndicator()
    {
        return $this->cancelPolicyIndicator;
    }

    /**
     * Sets a new cancelPolicyIndicator
     *
     * When true, indicates a cancel policy exits. When false, no cancel policy exists.
     * Typically this indicator is used when details are not being sent.
     *
     * @param boolean $cancelPolicyIndicator
     * @return self
     */
    public function setCancelPolicyIndicator($cancelPolicyIndicator)
    {
        $this->cancelPolicyIndicator = $cancelPolicyIndicator;

        return $this;
    }

    /**
     * Adds as cancelPenalty
     *
     * Defines the cancellation penalty of the hotel facility.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CancelPenaltyType $cancelPenalty
     */
    public function addToCancelPenalty(\Davispeixoto\OpenTravelAlliance\CancelPenaltyType $cancelPenalty)
    {
        $this->cancelPenalty[] = $cancelPenalty;

        return $this;
    }

    /**
     * isset cancelPenalty
     *
     * Defines the cancellation penalty of the hotel facility.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCancelPenalty($index)
    {
        return isset($this->cancelPenalty[$index]);
    }

    /**
     * unset cancelPenalty
     *
     * Defines the cancellation penalty of the hotel facility.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCancelPenalty($index)
    {
        unset($this->cancelPenalty[$index]);
    }

    /**
     * Gets as cancelPenalty
     *
     * Defines the cancellation penalty of the hotel facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CancelPenaltyType[]
     */
    public function getCancelPenalty()
    {
        return $this->cancelPenalty;
    }

    /**
     * Sets a new cancelPenalty
     *
     * Defines the cancellation penalty of the hotel facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CancelPenaltyType[] $cancelPenalty
     * @return self
     */
    public function setCancelPenalty(array $cancelPenalty)
    {
        $this->cancelPenalty = $cancelPenalty;

        return $this;
    }


}

