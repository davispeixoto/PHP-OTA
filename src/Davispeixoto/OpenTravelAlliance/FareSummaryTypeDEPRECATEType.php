<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing FareSummaryTypeDEPRECATEType
 *
 * Defines summary information about the rail fare including amount and any
 * discounts applied.
 * XSD Type: FareSummaryType_DEPRECATE
 */
class FareSummaryTypeDEPRECATEType
{

    /**
     * The total rail fare including any discounts.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FareSummaryTypeDEPRECATEType\TotalFareAType
     * $totalFare
     */
    private $totalFare = null;

    /**
     * A collection of discounts applied to the total rail fare.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FareSummaryTypeDEPRECATEType\DiscountAType[]
     * $discount
     */
    private $discount = null;

    /**
     * Gets as totalFare
     *
     * The total rail fare including any discounts.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FareSummaryTypeDEPRECATEType\TotalFareAType
     */
    public function getTotalFare()
    {
        return $this->totalFare;
    }

    /**
     * Sets a new totalFare
     *
     * The total rail fare including any discounts.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareSummaryTypeDEPRECATEType\TotalFareAType
     * $totalFare
     * @return self
     */
    public function setTotalFare(
        \Davispeixoto\OpenTravelAlliance\FareSummaryTypeDEPRECATEType\TotalFareAType $totalFare
    ) {
        $this->totalFare = $totalFare;

        return $this;
    }

    /**
     * Adds as discount
     *
     * A collection of discounts applied to the total rail fare.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareSummaryTypeDEPRECATEType\DiscountAType
     * $discount
     */
    public function addToDiscount(\Davispeixoto\OpenTravelAlliance\FareSummaryTypeDEPRECATEType\DiscountAType $discount)
    {
        $this->discount[] = $discount;

        return $this;
    }

    /**
     * isset discount
     *
     * A collection of discounts applied to the total rail fare.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiscount($index)
    {
        return isset($this->discount[$index]);
    }

    /**
     * unset discount
     *
     * A collection of discounts applied to the total rail fare.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiscount($index)
    {
        unset($this->discount[$index]);
    }

    /**
     * Gets as discount
     *
     * A collection of discounts applied to the total rail fare.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FareSummaryTypeDEPRECATEType\DiscountAType[]
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * A collection of discounts applied to the total rail fare.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareSummaryTypeDEPRECATEType\DiscountAType[]
     * $discount
     * @return self
     */
    public function setDiscount(array $discount)
    {
        $this->discount = $discount;

        return $this;
    }


}

