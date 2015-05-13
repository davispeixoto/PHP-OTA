<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType;

/**
 * Class representing PaymentInfoAType
 */
class PaymentInfoAType
{

    /**
     * Provides a unique reference to one or more passengers.
     *
     * @property string[] $passengerRPH
     */
    private $passengerRPH = null;

    /**
     * Specifies the form of payment, i.e., check, cash, credit card. Refer to
     * OpenTravel Code List Payment Type (PMT).
     *
     * @property string $paymentType
     */
    private $paymentType = null;

    /**
     * When true, the form of payment on the document requested.
     *
     * @property boolean $printFormOfPaymentInd
     */
    private $printFormOfPaymentInd = null;

    /**
     * Textual information for the form of payment.
     *
     * @property string $text
     */
    private $text = null;

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
     * The details for the card when form of payment is a credit card.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PaymentInfoAType\CreditCardInfoAType[]
     * $creditCardInfo
     */
    private $creditCardInfo = null;

    /**
     * Adds as passengerRPH
     *
     * Provides a unique reference to one or more passengers.
     *
     * @return self
     * @param string $passengerRPH
     */
    public function addToPassengerRPH($passengerRPH)
    {
        $this->passengerRPH[] = $passengerRPH;

        return $this;
    }

    /**
     * isset passengerRPH
     *
     * Provides a unique reference to one or more passengers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerRPH($index)
    {
        return isset($this->passengerRPH[$index]);
    }

    /**
     * unset passengerRPH
     *
     * Provides a unique reference to one or more passengers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerRPH($index)
    {
        unset($this->passengerRPH[$index]);
    }

    /**
     * Gets as passengerRPH
     *
     * Provides a unique reference to one or more passengers.
     *
     * @return string[]
     */
    public function getPassengerRPH()
    {
        return $this->passengerRPH;
    }

    /**
     * Sets a new passengerRPH
     *
     * Provides a unique reference to one or more passengers.
     *
     * @param string $passengerRPH
     * @return self
     */
    public function setPassengerRPH(array $passengerRPH)
    {
        $this->passengerRPH = $passengerRPH;

        return $this;
    }

    /**
     * Gets as paymentType
     *
     * Specifies the form of payment, i.e., check, cash, credit card. Refer to
     * OpenTravel Code List Payment Type (PMT).
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType
     *
     * Specifies the form of payment, i.e., check, cash, credit card. Refer to
     * OpenTravel Code List Payment Type (PMT).
     *
     * @param string $paymentType
     * @return self
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Gets as printFormOfPaymentInd
     *
     * When true, the form of payment on the document requested.
     *
     * @return boolean
     */
    public function getPrintFormOfPaymentInd()
    {
        return $this->printFormOfPaymentInd;
    }

    /**
     * Sets a new printFormOfPaymentInd
     *
     * When true, the form of payment on the document requested.
     *
     * @param boolean $printFormOfPaymentInd
     * @return self
     */
    public function setPrintFormOfPaymentInd($printFormOfPaymentInd)
    {
        $this->printFormOfPaymentInd = $printFormOfPaymentInd;

        return $this;
    }

    /**
     * Gets as text
     *
     * Textual information for the form of payment.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Textual information for the form of payment.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

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
     * Adds as creditCardInfo
     *
     * The details for the card when form of payment is a credit card.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PaymentInfoAType\CreditCardInfoAType
     * $creditCardInfo
     */
    public function addToCreditCardInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PaymentInfoAType\CreditCardInfoAType $creditCardInfo
    ) {
        $this->creditCardInfo[] = $creditCardInfo;

        return $this;
    }

    /**
     * isset creditCardInfo
     *
     * The details for the card when form of payment is a credit card.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCreditCardInfo($index)
    {
        return isset($this->creditCardInfo[$index]);
    }

    /**
     * unset creditCardInfo
     *
     * The details for the card when form of payment is a credit card.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCreditCardInfo($index)
    {
        unset($this->creditCardInfo[$index]);
    }

    /**
     * Gets as creditCardInfo
     *
     * The details for the card when form of payment is a credit card.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PaymentInfoAType\CreditCardInfoAType[]
     */
    public function getCreditCardInfo()
    {
        return $this->creditCardInfo;
    }

    /**
     * Sets a new creditCardInfo
     *
     * The details for the card when form of payment is a credit card.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PaymentInfoAType\CreditCardInfoAType[]
     * $creditCardInfo
     * @return self
     */
    public function setCreditCardInfo(array $creditCardInfo)
    {
        $this->creditCardInfo = $creditCardInfo;

        return $this;
    }


}

