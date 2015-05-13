<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType;

/**
 * Class representing CreditCardPurposeAType
 */
class CreditCardPurposeAType
{

    /**
     * To specify if the credit cards may be used for deposits, guarantee, or payment.
     *
     * @property string $purposeType
     */
    private $purposeType = null;

    /**
     * The credit card vendor that will be accepted for payment, guarantee, or deposit.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType\CreditCardPurposeAType\CreditCardCodeAType[]
     * $creditCardCode
     */
    private $creditCardCode = null;

    /**
     * Gets as purposeType
     *
     * To specify if the credit cards may be used for deposits, guarantee, or payment.
     *
     * @return string
     */
    public function getPurposeType()
    {
        return $this->purposeType;
    }

    /**
     * Sets a new purposeType
     *
     * To specify if the credit cards may be used for deposits, guarantee, or payment.
     *
     * @param string $purposeType
     * @return self
     */
    public function setPurposeType($purposeType)
    {
        $this->purposeType = $purposeType;

        return $this;
    }

    /**
     * Adds as creditCardCode
     *
     * The credit card vendor that will be accepted for payment, guarantee, or deposit.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType\CreditCardPurposeAType\CreditCardCodeAType
     * $creditCardCode
     */
    public function addToCreditCardCode(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType\CreditCardPurposeAType\CreditCardCodeAType $creditCardCode
    ) {
        $this->creditCardCode[] = $creditCardCode;

        return $this;
    }

    /**
     * isset creditCardCode
     *
     * The credit card vendor that will be accepted for payment, guarantee, or deposit.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCreditCardCode($index)
    {
        return isset($this->creditCardCode[$index]);
    }

    /**
     * unset creditCardCode
     *
     * The credit card vendor that will be accepted for payment, guarantee, or deposit.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCreditCardCode($index)
    {
        unset($this->creditCardCode[$index]);
    }

    /**
     * Gets as creditCardCode
     *
     * The credit card vendor that will be accepted for payment, guarantee, or deposit.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType\CreditCardPurposeAType\CreditCardCodeAType[]
     */
    public function getCreditCardCode()
    {
        return $this->creditCardCode;
    }

    /**
     * Sets a new creditCardCode
     *
     * The credit card vendor that will be accepted for payment, guarantee, or deposit.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType\CreditCardPurposeAType\CreditCardCodeAType[]
     * $creditCardCode
     * @return self
     */
    public function setCreditCardCode(array $creditCardCode)
    {
        $this->creditCardCode = $creditCardCode;

        return $this;
    }


}

