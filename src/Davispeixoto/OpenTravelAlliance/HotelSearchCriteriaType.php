<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing HotelSearchCriteriaType
 *
 * A collection of single search criterion items.
 * XSD Type: HotelSearchCriteriaType
 */
class HotelSearchCriteriaType
{

    /**
     * When true, return only hotels that are available.
     *
     * @property boolean $availableOnlyIndicator
     */
    private $availableOnlyIndicator = null;

    /**
     * When true, return only the lowest room rate for hotels that are available.
     *
     * @property boolean $bestOnlyIndicator
     */
    private $bestOnlyIndicator = null;

    /**
     * If true, then all rates with a total amount that does not include taxes should
     * be excluded from the response results set.
     *
     * @property boolean $totalAfterTaxOnlyInd
     */
    private $totalAfterTaxOnlyInd = null;

    /**
     * Child elements that identify a single search criterion by criteria type. Because
     * many of the types include partial matches to string values such as partial
     * addresses (street names without a number) or partial telephone numbers (area
     * code or three-digit prefix area, etc.) a ExactMatch attribute indicates whether
     * the match to the string value must be exact.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriteriaType\CriterionAType[]
     * $criterion
     */
    private $criterion = null;

    /**
     * Gets as availableOnlyIndicator
     *
     * When true, return only hotels that are available.
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
     * When true, return only hotels that are available.
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
     * Gets as bestOnlyIndicator
     *
     * When true, return only the lowest room rate for hotels that are available.
     *
     * @return boolean
     */
    public function getBestOnlyIndicator()
    {
        return $this->bestOnlyIndicator;
    }

    /**
     * Sets a new bestOnlyIndicator
     *
     * When true, return only the lowest room rate for hotels that are available.
     *
     * @param boolean $bestOnlyIndicator
     * @return self
     */
    public function setBestOnlyIndicator($bestOnlyIndicator)
    {
        $this->bestOnlyIndicator = $bestOnlyIndicator;

        return $this;
    }

    /**
     * Gets as totalAfterTaxOnlyInd
     *
     * If true, then all rates with a total amount that does not include taxes should
     * be excluded from the response results set.
     *
     * @return boolean
     */
    public function getTotalAfterTaxOnlyInd()
    {
        return $this->totalAfterTaxOnlyInd;
    }

    /**
     * Sets a new totalAfterTaxOnlyInd
     *
     * If true, then all rates with a total amount that does not include taxes should
     * be excluded from the response results set.
     *
     * @param boolean $totalAfterTaxOnlyInd
     * @return self
     */
    public function setTotalAfterTaxOnlyInd($totalAfterTaxOnlyInd)
    {
        $this->totalAfterTaxOnlyInd = $totalAfterTaxOnlyInd;

        return $this;
    }

    /**
     * Adds as criterion
     *
     * Child elements that identify a single search criterion by criteria type. Because
     * many of the types include partial matches to string values such as partial
     * addresses (street names without a number) or partial telephone numbers (area
     * code or three-digit prefix area, etc.) a ExactMatch attribute indicates whether
     * the match to the string value must be exact.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\HotelSearchCriteriaType\CriterionAType
     * $criterion
     */
    public function addToCriterion(\Davispeixoto\OpenTravelAlliance\HotelSearchCriteriaType\CriterionAType $criterion)
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
     * code or three-digit prefix area, etc.) a ExactMatch attribute indicates whether
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
     * code or three-digit prefix area, etc.) a ExactMatch attribute indicates whether
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
     * code or three-digit prefix area, etc.) a ExactMatch attribute indicates whether
     * the match to the string value must be exact.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriteriaType\CriterionAType[]
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
     * code or three-digit prefix area, etc.) a ExactMatch attribute indicates whether
     * the match to the string value must be exact.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelSearchCriteriaType\CriterionAType[]
     * $criterion
     * @return self
     */
    public function setCriterion(array $criterion)
    {
        $this->criterion = $criterion;

        return $this;
    }


}

