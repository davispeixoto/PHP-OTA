<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS;

/**
 * Class representing CriteriaAType
 */
class CriteriaAType
{

    /**
     * Criterion MUST return the search criterion that was submitted in the
     * availability request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CriteriaAType\CriterionAType
     * $criterion
     */
    private $criterion = null;

    /**
     * Gets as criterion
     *
     * Criterion MUST return the search criterion that was submitted in the
     * availability request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CriteriaAType\CriterionAType
     */
    public function getCriterion()
    {
        return $this->criterion;
    }

    /**
     * Sets a new criterion
     *
     * Criterion MUST return the search criterion that was submitted in the
     * availability request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CriteriaAType\CriterionAType
     * $criterion
     * @return self
     */
    public function setCriterion(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CriteriaAType\CriterionAType $criterion
    ) {
        $this->criterion = $criterion;

        return $this;
    }


}

