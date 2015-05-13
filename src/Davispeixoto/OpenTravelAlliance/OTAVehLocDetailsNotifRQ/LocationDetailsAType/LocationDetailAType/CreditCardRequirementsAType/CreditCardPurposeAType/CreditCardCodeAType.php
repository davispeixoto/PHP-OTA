<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType\CreditCardPurposeAType;

/**
 * Class representing CreditCardCodeAType
 */
class CreditCardCodeAType
{

    /**
     * The 2 digit code that references the credit card vendor.
     *
     * @property string $cardCode
     */
    private $cardCode = null;

    /**
     * Gets as cardCode
     *
     * The 2 digit code that references the credit card vendor.
     *
     * @return string
     */
    public function getCardCode()
    {
        return $this->cardCode;
    }

    /**
     * Sets a new cardCode
     *
     * The 2 digit code that references the credit card vendor.
     *
     * @param string $cardCode
     * @return self
     */
    public function setCardCode($cardCode)
    {
        $this->cardCode = $cardCode;

        return $this;
    }


}

