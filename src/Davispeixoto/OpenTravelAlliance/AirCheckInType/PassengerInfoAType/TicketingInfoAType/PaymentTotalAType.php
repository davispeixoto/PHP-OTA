<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType;

/**
 * Class representing PaymentTotalAType
 */
class PaymentTotalAType
{

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * A monetary amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * The form of payment used to purchase the ticket.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentDetailType[] $formOfPayment
     */
    private $formOfPayment = null;

    /**
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return integer
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param integer $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * Gets as amount
     *
     * A monetary amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A monetary amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Adds as formOfPayment
     *
     * The form of payment used to purchase the ticket.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PaymentDetailType $formOfPayment
     */
    public function addToFormOfPayment(\Davispeixoto\OpenTravelAlliance\PaymentDetailType $formOfPayment)
    {
        $this->formOfPayment[] = $formOfPayment;

        return $this;
    }

    /**
     * isset formOfPayment
     *
     * The form of payment used to purchase the ticket.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFormOfPayment($index)
    {
        return isset($this->formOfPayment[$index]);
    }

    /**
     * unset formOfPayment
     *
     * The form of payment used to purchase the ticket.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFormOfPayment($index)
    {
        unset($this->formOfPayment[$index]);
    }

    /**
     * Gets as formOfPayment
     *
     * The form of payment used to purchase the ticket.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentDetailType[]
     */
    public function getFormOfPayment()
    {
        return $this->formOfPayment;
    }

    /**
     * Sets a new formOfPayment
     *
     * The form of payment used to purchase the ticket.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentDetailType[] $formOfPayment
     * @return self
     */
    public function setFormOfPayment(array $formOfPayment)
    {
        $this->formOfPayment = $formOfPayment;

        return $this;
    }


}

