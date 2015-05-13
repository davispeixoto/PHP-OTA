<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirPriceRQ;

use Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType;

/**
 * Class representing TravelerInfoSummaryAType
 */
class TravelerInfoSummaryAType extends TravelerInfoSummaryType
{

    /**
     * Used to specify the planned method of payment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentDetailType $paymentDetail
     */
    private $paymentDetail = null;

    /**
     * Used to specify a passenger or processing pricing preference.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirPriceRQ\TravelerInfoSummaryAType\PricingPrefAType[]
     * $pricingPref
     */
    private $pricingPref = null;

    /**
     * Gets as paymentDetail
     *
     * Used to specify the planned method of payment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentDetailType
     */
    public function getPaymentDetail()
    {
        return $this->paymentDetail;
    }

    /**
     * Sets a new paymentDetail
     *
     * Used to specify the planned method of payment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentDetailType $paymentDetail
     * @return self
     */
    public function setPaymentDetail(\Davispeixoto\OpenTravelAlliance\PaymentDetailType $paymentDetail)
    {
        $this->paymentDetail = $paymentDetail;

        return $this;
    }

    /**
     * Adds as pricingPref
     *
     * Used to specify a passenger or processing pricing preference.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirPriceRQ\TravelerInfoSummaryAType\PricingPrefAType
     * $pricingPref
     */
    public function addToPricingPref(
        \Davispeixoto\OpenTravelAlliance\OTAAirPriceRQ\TravelerInfoSummaryAType\PricingPrefAType $pricingPref
    ) {
        $this->pricingPref[] = $pricingPref;

        return $this;
    }

    /**
     * isset pricingPref
     *
     * Used to specify a passenger or processing pricing preference.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricingPref($index)
    {
        return isset($this->pricingPref[$index]);
    }

    /**
     * unset pricingPref
     *
     * Used to specify a passenger or processing pricing preference.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricingPref($index)
    {
        unset($this->pricingPref[$index]);
    }

    /**
     * Gets as pricingPref
     *
     * Used to specify a passenger or processing pricing preference.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirPriceRQ\TravelerInfoSummaryAType\PricingPrefAType[]
     */
    public function getPricingPref()
    {
        return $this->pricingPref;
    }

    /**
     * Sets a new pricingPref
     *
     * Used to specify a passenger or processing pricing preference.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirPriceRQ\TravelerInfoSummaryAType\PricingPrefAType[]
     * $pricingPref
     * @return self
     */
    public function setPricingPref(array $pricingPref)
    {
        $this->pricingPref = $pricingPref;

        return $this;
    }


}

