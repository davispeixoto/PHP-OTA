<?php

namespace Davispeixoto\OpenTravelAlliance\DynamicPkgOptionSearchType;

/**
 * Class representing OptionSearchCriteriaAType
 */
class OptionSearchCriteriaAType
{

    /**
     * When true, only available features are returned.
     *
     * @property boolean $availableOnlyIndicator
     */
    private $availableOnlyIndicator = null;

    /**
     * Child elements that identify a single search criterion by criteria type. Because
     * many of the types include partial matches to string values such as partial
     * addresses (street names without a number) or partial telephone numbers (area
     * code or three-digit prefix area, etc.) An ExactMatch attribute indicates whether
     * the match to the string value must be exact.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType[]
     * $criterion
     */
    private $criterion = null;

    /**
     * Gets as availableOnlyIndicator
     *
     * When true, only available features are returned.
     *
     * @return boolean
     */
    public function getAvailableOnlyIndicator()
    {
        return $this->availableOnlyIndicator;
    }

    /**
     * Sets a new availableOnlyIndicator
     *
     * When true, only available features are returned.
     *
     * @param boolean $availableOnlyIndicator
     * @return self
     */
    public function setAvailableOnlyIndicator($availableOnlyIndicator)
    {
        $this->availableOnlyIndicator = $availableOnlyIndicator;

        return $this;
    }

    /**
     * Adds as criterion
     *
     * Child elements that identify a single search criterion by criteria type. Because
     * many of the types include partial matches to string values such as partial
     * addresses (street names without a number) or partial telephone numbers (area
     * code or three-digit prefix area, etc.) An ExactMatch attribute indicates whether
     * the match to the string value must be exact.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType
     * $criterion
     */
    public function addToCriterion(\Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType $criterion)
    {
        $this->criterion[] = $criterion;

        return $this;
    }

    /**
     * isset criterion
     *
     * Child elements that identify a single search criterion by criteria type. Because
     * many of the types include partial matches to string values such as partial
     * addresses (street names without a number) or partial telephone numbers (area
     * code or three-digit prefix area, etc.) An ExactMatch attribute indicates whether
     * the match to the string value must be exact.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCriterion($index)
    {
        return isset($this->criterion[$index]);
    }

    /**
     * unset criterion
     *
     * Child elements that identify a single search criterion by criteria type. Because
     * many of the types include partial matches to string values such as partial
     * addresses (street names without a number) or partial telephone numbers (area
     * code or three-digit prefix area, etc.) An ExactMatch attribute indicates whether
     * the match to the string value must be exact.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCriterion($index)
    {
        unset($this->criterion[$index]);
    }

    /**
     * Gets as criterion
     *
     * Child elements that identify a single search criterion by criteria type. Because
     * many of the types include partial matches to string values such as partial
     * addresses (street names without a number) or partial telephone numbers (area
     * code or three-digit prefix area, etc.) An ExactMatch attribute indicates whether
     * the match to the string value must be exact.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType[]
     */
    public function getCriterion()
    {
        return $this->criterion;
    }

    /**
     * Sets a new criterion
     *
     * Child elements that identify a single search criterion by criteria type. Because
     * many of the types include partial matches to string values such as partial
     * addresses (street names without a number) or partial telephone numbers (area
     * code or three-digit prefix area, etc.) An ExactMatch attribute indicates whether
     * the match to the string value must be exact.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType[]
     * $criterion
     * @return self
     */
    public function setCriterion(array $criterion)
    {
        $this->criterion = $criterion;

        return $this;
    }


}

