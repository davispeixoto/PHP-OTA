<?php

namespace Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\PreexistingConditionsAType;

use Davispeixoto\OpenTravelAlliance\FreeTextType;

/**
 * Class representing PreexistingConditionAType
 */
class PreexistingConditionAType extends FreeTextType
{

    /**
     * Date first diagnosed with condition.
     *
     * @property \DateTime $diagnosisDate
     */
    private $diagnosisDate = null;

    /**
     * Most recent date treatment was received for condition.
     *
     * @property \DateTime $lastTreatmentDate
     */
    private $lastTreatmentDate = null;

    /**
     * Gets as diagnosisDate
     *
     * Date first diagnosed with condition.
     *
     * @return \DateTime
     */
    public function getDiagnosisDate()
    {
        return $this->diagnosisDate;
    }

    /**
     * Sets a new diagnosisDate
     *
     * Date first diagnosed with condition.
     *
     * @param \DateTime $diagnosisDate
     * @return self
     */
    public function setDiagnosisDate(\DateTime $diagnosisDate)
    {
        $this->diagnosisDate = $diagnosisDate;

        return $this;
    }

    /**
     * Gets as lastTreatmentDate
     *
     * Most recent date treatment was received for condition.
     *
     * @return \DateTime
     */
    public function getLastTreatmentDate()
    {
        return $this->lastTreatmentDate;
    }

    /**
     * Sets a new lastTreatmentDate
     *
     * Most recent date treatment was received for condition.
     *
     * @param \DateTime $lastTreatmentDate
     * @return self
     */
    public function setLastTreatmentDate(\DateTime $lastTreatmentDate)
    {
        $this->lastTreatmentDate = $lastTreatmentDate;

        return $this;
    }


}

