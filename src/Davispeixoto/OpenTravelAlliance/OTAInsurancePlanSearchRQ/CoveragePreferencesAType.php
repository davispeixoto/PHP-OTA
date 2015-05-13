<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ;

/**
 * Class representing CoveragePreferencesAType
 */
class CoveragePreferencesAType
{

    /**
     * Lists a specific insurance coverage type (baggage, medical, etc) to search for
     * and allows searcher to specify preferences on different coverages.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\CoveragePreferencesAType\CoveragePreferenceAType[]
     * $coveragePreference
     */
    private $coveragePreference = null;

    /**
     * Adds as coveragePreference
     *
     * Lists a specific insurance coverage type (baggage, medical, etc) to search for
     * and allows searcher to specify preferences on different coverages.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\CoveragePreferencesAType\CoveragePreferenceAType
     * $coveragePreference
     */
    public function addToCoveragePreference(
        \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\CoveragePreferencesAType\CoveragePreferenceAType $coveragePreference
    ) {
        $this->coveragePreference[] = $coveragePreference;

        return $this;
    }

    /**
     * isset coveragePreference
     *
     * Lists a specific insurance coverage type (baggage, medical, etc) to search for
     * and allows searcher to specify preferences on different coverages.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoveragePreference($index)
    {
        return isset($this->coveragePreference[$index]);
    }

    /**
     * unset coveragePreference
     *
     * Lists a specific insurance coverage type (baggage, medical, etc) to search for
     * and allows searcher to specify preferences on different coverages.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoveragePreference($index)
    {
        unset($this->coveragePreference[$index]);
    }

    /**
     * Gets as coveragePreference
     *
     * Lists a specific insurance coverage type (baggage, medical, etc) to search for
     * and allows searcher to specify preferences on different coverages.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\CoveragePreferencesAType\CoveragePreferenceAType[]
     */
    public function getCoveragePreference()
    {
        return $this->coveragePreference;
    }

    /**
     * Sets a new coveragePreference
     *
     * Lists a specific insurance coverage type (baggage, medical, etc) to search for
     * and allows searcher to specify preferences on different coverages.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\CoveragePreferencesAType\CoveragePreferenceAType[]
     * $coveragePreference
     * @return self
     */
    public function setCoveragePreference(array $coveragePreference)
    {
        $this->coveragePreference = $coveragePreference;

        return $this;
    }


}

