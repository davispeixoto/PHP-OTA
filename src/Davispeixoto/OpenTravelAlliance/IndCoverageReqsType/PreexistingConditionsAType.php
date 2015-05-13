<?php

namespace Davispeixoto\OpenTravelAlliance\IndCoverageReqsType;

/**
 * Class representing PreexistingConditionsAType
 */
class PreexistingConditionsAType
{

    /**
     * Contains information on a single pre-existing condition.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\PreexistingConditionsAType\PreexistingConditionAType[]
     * $preexistingCondition
     */
    private $preexistingCondition = null;

    /**
     * Adds as preexistingCondition
     *
     * Contains information on a single pre-existing condition.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\PreexistingConditionsAType\PreexistingConditionAType
     * $preexistingCondition
     */
    public function addToPreexistingCondition(
        \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\PreexistingConditionsAType\PreexistingConditionAType $preexistingCondition
    ) {
        $this->preexistingCondition[] = $preexistingCondition;

        return $this;
    }

    /**
     * isset preexistingCondition
     *
     * Contains information on a single pre-existing condition.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPreexistingCondition($index)
    {
        return isset($this->preexistingCondition[$index]);
    }

    /**
     * unset preexistingCondition
     *
     * Contains information on a single pre-existing condition.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPreexistingCondition($index)
    {
        unset($this->preexistingCondition[$index]);
    }

    /**
     * Gets as preexistingCondition
     *
     * Contains information on a single pre-existing condition.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\PreexistingConditionsAType\PreexistingConditionAType[]
     */
    public function getPreexistingCondition()
    {
        return $this->preexistingCondition;
    }

    /**
     * Sets a new preexistingCondition
     *
     * Contains information on a single pre-existing condition.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\PreexistingConditionsAType\PreexistingConditionAType[]
     * $preexistingCondition
     * @return self
     */
    public function setPreexistingCondition(array $preexistingCondition)
    {
        $this->preexistingCondition = $preexistingCondition;

        return $this;
    }


}

