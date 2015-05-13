<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RatePlanCandidatesType
 *
 *
 * XSD Type: RatePlanCandidatesType
 */
class RatePlanCandidatesType
{

    /**
     * Element used to identify available products and rates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType[]
     * $ratePlanCandidate
     */
    private $ratePlanCandidate = null;

    /**
     * Adds as ratePlanCandidate
     *
     * Element used to identify available products and rates.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType
     * $ratePlanCandidate
     */
    public function addToRatePlanCandidate(
        \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType $ratePlanCandidate
    ) {
        $this->ratePlanCandidate[] = $ratePlanCandidate;

        return $this;
    }

    /**
     * isset ratePlanCandidate
     *
     * Element used to identify available products and rates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatePlanCandidate($index)
    {
        return isset($this->ratePlanCandidate[$index]);
    }

    /**
     * unset ratePlanCandidate
     *
     * Element used to identify available products and rates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatePlanCandidate($index)
    {
        unset($this->ratePlanCandidate[$index]);
    }

    /**
     * Gets as ratePlanCandidate
     *
     * Element used to identify available products and rates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType[]
     */
    public function getRatePlanCandidate()
    {
        return $this->ratePlanCandidate;
    }

    /**
     * Sets a new ratePlanCandidate
     *
     * Element used to identify available products and rates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType[]
     * $ratePlanCandidate
     * @return self
     */
    public function setRatePlanCandidate(array $ratePlanCandidate)
    {
        $this->ratePlanCandidate = $ratePlanCandidate;

        return $this;
    }


}

