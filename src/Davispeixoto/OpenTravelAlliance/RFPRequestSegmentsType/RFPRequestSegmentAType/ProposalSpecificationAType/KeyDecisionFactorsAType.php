<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType;

/**
 * Class representing KeyDecisionFactorsAType
 */
class KeyDecisionFactorsAType
{

    /**
     * Defines what each key decision factor is and how important it is in the proposal
     * evaluation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType[]
     * $keyDecisionFactor
     */
    private $keyDecisionFactor = null;

    /**
     * Adds as keyDecisionFactor
     *
     * Defines what each key decision factor is and how important it is in the proposal
     * evaluation.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType
     * $keyDecisionFactor
     */
    public function addToKeyDecisionFactor(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType $keyDecisionFactor
    ) {
        $this->keyDecisionFactor[] = $keyDecisionFactor;

        return $this;
    }

    /**
     * isset keyDecisionFactor
     *
     * Defines what each key decision factor is and how important it is in the proposal
     * evaluation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetKeyDecisionFactor($index)
    {
        return isset($this->keyDecisionFactor[$index]);
    }

    /**
     * unset keyDecisionFactor
     *
     * Defines what each key decision factor is and how important it is in the proposal
     * evaluation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetKeyDecisionFactor($index)
    {
        unset($this->keyDecisionFactor[$index]);
    }

    /**
     * Gets as keyDecisionFactor
     *
     * Defines what each key decision factor is and how important it is in the proposal
     * evaluation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType[]
     */
    public function getKeyDecisionFactor()
    {
        return $this->keyDecisionFactor;
    }

    /**
     * Sets a new keyDecisionFactor
     *
     * Defines what each key decision factor is and how important it is in the proposal
     * evaluation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType[]
     * $keyDecisionFactor
     * @return self
     */
    public function setKeyDecisionFactor(array $keyDecisionFactor)
    {
        $this->keyDecisionFactor = $keyDecisionFactor;

        return $this;
    }


}

