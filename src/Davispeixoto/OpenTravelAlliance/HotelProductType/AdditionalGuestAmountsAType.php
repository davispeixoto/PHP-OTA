<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType;

/**
 * Class representing AdditionalGuestAmountsAType
 */
class AdditionalGuestAmountsAType
{

    /**
     * Charges related to additional guests.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[]
     * $additionalGuestAmount
     */
    private $additionalGuestAmount = null;

    /**
     * Adds as additionalGuestAmount
     *
     * Charges related to additional guests.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType
     * $additionalGuestAmount
     */
    public function addToAdditionalGuestAmount(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType $additionalGuestAmount
    ) {
        $this->additionalGuestAmount[] = $additionalGuestAmount;

        return $this;
    }

    /**
     * isset additionalGuestAmount
     *
     * Charges related to additional guests.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalGuestAmount($index)
    {
        return isset($this->additionalGuestAmount[$index]);
    }

    /**
     * unset additionalGuestAmount
     *
     * Charges related to additional guests.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalGuestAmount($index)
    {
        unset($this->additionalGuestAmount[$index]);
    }

    /**
     * Gets as additionalGuestAmount
     *
     * Charges related to additional guests.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[]
     */
    public function getAdditionalGuestAmount()
    {
        return $this->additionalGuestAmount;
    }

    /**
     * Sets a new additionalGuestAmount
     *
     * Charges related to additional guests.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[]
     * $additionalGuestAmount
     * @return self
     */
    public function setAdditionalGuestAmount(array $additionalGuestAmount)
    {
        $this->additionalGuestAmount = $additionalGuestAmount;

        return $this;
    }


}

