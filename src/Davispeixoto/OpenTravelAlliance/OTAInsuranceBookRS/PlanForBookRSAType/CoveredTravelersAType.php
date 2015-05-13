<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsuranceBookRS\PlanForBookRSAType;

/**
 * Class representing CoveredTravelersAType
 */
class CoveredTravelersAType
{

    /**
     * Contains identifying information, coverage requirements and journey information
     * for each individual requesting coverage by the insurance plan.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CoveredTravelerType[]
     * $coveredTraveler
     */
    private $coveredTraveler = null;

    /**
     * Adds as coveredTraveler
     *
     * Contains identifying information, coverage requirements and journey information
     * for each individual requesting coverage by the insurance plan.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CoveredTravelerType $coveredTraveler
     */
    public function addToCoveredTraveler(\Davispeixoto\OpenTravelAlliance\CoveredTravelerType $coveredTraveler)
    {
        $this->coveredTraveler[] = $coveredTraveler;

        return $this;
    }

    /**
     * isset coveredTraveler
     *
     * Contains identifying information, coverage requirements and journey information
     * for each individual requesting coverage by the insurance plan.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoveredTraveler($index)
    {
        return isset($this->coveredTraveler[$index]);
    }

    /**
     * unset coveredTraveler
     *
     * Contains identifying information, coverage requirements and journey information
     * for each individual requesting coverage by the insurance plan.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoveredTraveler($index)
    {
        unset($this->coveredTraveler[$index]);
    }

    /**
     * Gets as coveredTraveler
     *
     * Contains identifying information, coverage requirements and journey information
     * for each individual requesting coverage by the insurance plan.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoveredTravelerType[]
     */
    public function getCoveredTraveler()
    {
        return $this->coveredTraveler;
    }

    /**
     * Sets a new coveredTraveler
     *
     * Contains identifying information, coverage requirements and journey information
     * for each individual requesting coverage by the insurance plan.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoveredTravelerType[] $coveredTraveler
     * @return self
     */
    public function setCoveredTraveler(array $coveredTraveler)
    {
        $this->coveredTraveler = $coveredTraveler;

        return $this;
    }


}

