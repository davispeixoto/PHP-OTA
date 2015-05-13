<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\PricingAType;

use Davispeixoto\OpenTravelAlliance\TourActivityChargeType;

/**
 * Class representing SummaryAType
 */
class SummaryAType extends TourActivityChargeType
{

    /**
     * The pricing type, e.g. per person and per group. Select a predefined pricing
     * type from the list or select the "Other_" value and enter a pricing type known
     * to your trading partners in the @Extension field.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\PricingAType\SummaryAType\PricingTypeAType
     * $pricingType
     */
    private $pricingType = null;

    /**
     * Gets as pricingType
     *
     * The pricing type, e.g. per person and per group. Select a predefined pricing
     * type from the list or select the "Other_" value and enter a pricing type known
     * to your trading partners in the @Extension field.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\PricingAType\SummaryAType\PricingTypeAType
     */
    public function getPricingType()
    {
        return $this->pricingType;
    }

    /**
     * Sets a new pricingType
     *
     * The pricing type, e.g. per person and per group. Select a predefined pricing
     * type from the list or select the "Other_" value and enter a pricing type known
     * to your trading partners in the @Extension field.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\PricingAType\SummaryAType\PricingTypeAType
     * $pricingType
     * @return self
     */
    public function setPricingType(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\PricingAType\SummaryAType\PricingTypeAType $pricingType
    ) {
        $this->pricingType = $pricingType;

        return $this;
    }


}

