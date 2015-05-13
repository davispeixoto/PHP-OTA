<?php

namespace Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType;

use Davispeixoto\OpenTravelAlliance\GuaranteeType;

/**
 * Class representing AcceptableGuaranteeAType
 */
class AcceptableGuaranteeAType extends GuaranteeType
{

    /**
     * GuaranteePolicyType: An enumerated type that defines the guarantee policy
     * applied to the booking restrictions.
     *
     * @property string $guaranteePolicyType
     */
    private $guaranteePolicyType = null;

    /**
     * Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @property string $paymentType
     */
    private $paymentType = null;

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
     * Used to denote unacceptable forms of payment. Refer to OpenTravel Code List
     * Payment Type (PMT).
     *
     * @property string $unacceptablePaymentType
     */
    private $unacceptablePaymentType = null;

    /**
     * Gets as guaranteePolicyType
     *
     * GuaranteePolicyType: An enumerated type that defines the guarantee policy
     * applied to the booking restrictions.
     *
     * @return string
     */
    public function getGuaranteePolicyType()
    {
        return $this->guaranteePolicyType;
    }

    /**
     * Sets a new guaranteePolicyType
     *
     * GuaranteePolicyType: An enumerated type that defines the guarantee policy
     * applied to the booking restrictions.
     *
     * @param string $guaranteePolicyType
     * @return self
     */
    public function setGuaranteePolicyType($guaranteePolicyType)
    {
        $this->guaranteePolicyType = $guaranteePolicyType;

        return $this;
    }

    /**
     * Gets as paymentType
     *
     * Refer to OpenTravel Code List Payment Type (PMT).
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
     * Refer to OpenTravel Code List Payment Type (PMT).
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
     * Gets as unacceptablePaymentType
     *
     * Used to denote unacceptable forms of payment. Refer to OpenTravel Code List
     * Payment Type (PMT).
     *
     * @return string
     */
    public function getUnacceptablePaymentType()
    {
        return $this->unacceptablePaymentType;
    }

    /**
     * Sets a new unacceptablePaymentType
     *
     * Used to denote unacceptable forms of payment. Refer to OpenTravel Code List
     * Payment Type (PMT).
     *
     * @param string $unacceptablePaymentType
     * @return self
     */
    public function setUnacceptablePaymentType($unacceptablePaymentType)
    {
        $this->unacceptablePaymentType = $unacceptablePaymentType;

        return $this;
    }


}

