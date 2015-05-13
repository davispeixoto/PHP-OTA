<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType;

/**
 * Class representing RateAType
 */
class RateAType
{

    /**
     * The CancelPolicies container allows for future expansion of the message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType[]
     * $cancelPolicies
     */
    private $cancelPolicies = null;

    /**
     * Total MUST specify he nightly room charge before and/or after taxes for this
     * room rate. Either AmountBeforeTax or AmountAfterTax MUST be returned.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\TotalAType
     * $total
     */
    private $total = null;

    /**
     * Adds as cancelPenalty
     *
     * The CancelPolicies container allows for future expansion of the message.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType
     * $cancelPenalty
     */
    public function addToCancelPolicies(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType $cancelPenalty
    ) {
        $this->cancelPolicies[] = $cancelPenalty;

        return $this;
    }

    /**
     * isset cancelPolicies
     *
     * The CancelPolicies container allows for future expansion of the message.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCancelPolicies($index)
    {
        return isset($this->cancelPolicies[$index]);
    }

    /**
     * unset cancelPolicies
     *
     * The CancelPolicies container allows for future expansion of the message.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCancelPolicies($index)
    {
        unset($this->cancelPolicies[$index]);
    }

    /**
     * Gets as cancelPolicies
     *
     * The CancelPolicies container allows for future expansion of the message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType[]
     */
    public function getCancelPolicies()
    {
        return $this->cancelPolicies;
    }

    /**
     * Sets a new cancelPolicies
     *
     * The CancelPolicies container allows for future expansion of the message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType[]
     * $cancelPolicies
     * @return self
     */
    public function setCancelPolicies(array $cancelPolicies)
    {
        $this->cancelPolicies = $cancelPolicies;

        return $this;
    }

    /**
     * Gets as total
     *
     * Total MUST specify he nightly room charge before and/or after taxes for this
     * room rate. Either AmountBeforeTax or AmountAfterTax MUST be returned.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\TotalAType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * Total MUST specify he nightly room charge before and/or after taxes for this
     * room rate. Either AmountBeforeTax or AmountAfterTax MUST be returned.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\TotalAType
     * $total
     * @return self
     */
    public function setTotal(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\TotalAType $total
    ) {
        $this->total = $total;

        return $this;
    }


}

