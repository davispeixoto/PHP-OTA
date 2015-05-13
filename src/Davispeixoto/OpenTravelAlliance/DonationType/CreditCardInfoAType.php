<?php

namespace Davispeixoto\OpenTravelAlliance\DonationType;

use Davispeixoto\OpenTravelAlliance\PaymentCardType;

/**
 * Class representing CreditCardInfoAType
 */
class CreditCardInfoAType extends PaymentCardType
{

    /**
     * The donation currency code (ISO 4217.)
     *
     * @property string $currency
     */
    private $currency = null;

    /**
     * The donation amount.
     *
     * @property float $donationAmount
     */
    private $donationAmount = null;

    /**
     * Gets as currency
     *
     * The donation currency code (ISO 4217.)
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * The donation currency code (ISO 4217.)
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Gets as donationAmount
     *
     * The donation amount.
     *
     * @return float
     */
    public function getDonationAmount()
    {
        return $this->donationAmount;
    }

    /**
     * Sets a new donationAmount
     *
     * The donation amount.
     *
     * @param float $donationAmount
     * @return self
     */
    public function setDonationAmount($donationAmount)
    {
        $this->donationAmount = $donationAmount;

        return $this;
    }


}

