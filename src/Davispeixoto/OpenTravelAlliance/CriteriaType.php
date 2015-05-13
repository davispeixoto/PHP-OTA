<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CriteriaType
 *
 * Hotel search criteria information that includes hotel reference, stay date range
 * and room stay information.
 * XSD Type: CriteriaType
 */
class CriteriaType
{

    /**
     * Criterion MUST return the search criterion that was submitted in the
     * availability request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CriterionType $criterion
     */
    private $criterion = null;

    /**
     * Gets as criterion
     *
     * Criterion MUST return the search criterion that was submitted in the
     * availability request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CriterionType
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
     * @param \Davispeixoto\OpenTravelAlliance\CriterionType $criterion
     * @return self
     */
    public function setCriterion(\Davispeixoto\OpenTravelAlliance\CriterionType $criterion)
    {
        $this->criterion = $criterion;

        return $this;
    }


}

