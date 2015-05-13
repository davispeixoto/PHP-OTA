<?php

namespace Davispeixoto\OpenTravelAlliance\AuthorizationType;

/**
 * Class representing CreditCardAuthorizationAType
 */
class CreditCardAuthorizationAType
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
     * Information describing the point of sale.
     *
     * @property string $sourceType
     */
    private $sourceType = null;

    /**
     * If true, the requester would like to apply extended payment conditions to this
     * authorization.
     *
     * @property boolean $extendedPaymentInd
     */
    private $extendedPaymentInd = null;

    /**
     * The number of equal amount, partial payments for the extended payment.
     *
     * @property integer $extendedPaymentQuantity
     */
    private $extendedPaymentQuantity = null;

    /**
     * The frequency of extended payment installments.
     *
     * @property string $extendedPaymentFrequency
     */
    private $extendedPaymentFrequency = null;

    /**
     * This is the approval code received on the original authorization request. Only
     * used in the case where the requested transaction is to reverse the
     * authorization.
     *
     * @property string $authorizationCode
     */
    private $authorizationCode = null;

    /**
     * If true, indicates a request to reverse a credit authorization.
     *
     * @property boolean $reversalIndicator
     */
    private $reversalIndicator = null;

    /**
     * When true, the customer has actually presented the credit card.
     *
     * @property boolean $cardPresentInd
     */
    private $cardPresentInd = null;

    /**
     * The electronic commerce indicator required for some credit card authorizations,
     * such as the Verified by Visa Process.
     *
     * @property string $eCommerceCode
     */
    private $eCommerceCode = null;

    /**
     * The authentication transaction identifier required for some credit card
     * authorizations, such as the Verified by Visa Process.
     *
     * @property string $authTransactionID
     */
    private $authTransactionID = null;

    /**
     * The cardholder authentication verfication value required for some credit card
     * authorization, such as the Verified by Visa Process.
     *
     * @property string $authVerificationValue
     */
    private $authVerificationValue = null;

    /**
     * Specifies the credit card information for which authorization is required.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentCardType $creditCard
     */
    private $creditCard = null;

    /**
     * Identification of an authorization party (e.g., merchant, acquirer).
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $iD
     */
    private $iD = null;

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
     * Gets as sourceType
     *
     * Information describing the point of sale.
     *
     * @return string
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * Sets a new sourceType
     *
     * Information describing the point of sale.
     *
     * @param string $sourceType
     * @return self
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;

        return $this;
    }

    /**
     * Gets as extendedPaymentInd
     *
     * If true, the requester would like to apply extended payment conditions to this
     * authorization.
     *
     * @return boolean
     */
    public function getExtendedPaymentInd()
    {
        return $this->extendedPaymentInd;
    }

    /**
     * Sets a new extendedPaymentInd
     *
     * If true, the requester would like to apply extended payment conditions to this
     * authorization.
     *
     * @param boolean $extendedPaymentInd
     * @return self
     */
    public function setExtendedPaymentInd($extendedPaymentInd)
    {
        $this->extendedPaymentInd = $extendedPaymentInd;

        return $this;
    }

    /**
     * Gets as extendedPaymentQuantity
     *
     * The number of equal amount, partial payments for the extended payment.
     *
     * @return integer
     */
    public function getExtendedPaymentQuantity()
    {
        return $this->extendedPaymentQuantity;
    }

    /**
     * Sets a new extendedPaymentQuantity
     *
     * The number of equal amount, partial payments for the extended payment.
     *
     * @param integer $extendedPaymentQuantity
     * @return self
     */
    public function setExtendedPaymentQuantity($extendedPaymentQuantity)
    {
        $this->extendedPaymentQuantity = $extendedPaymentQuantity;

        return $this;
    }

    /**
     * Gets as extendedPaymentFrequency
     *
     * The frequency of extended payment installments.
     *
     * @return string
     */
    public function getExtendedPaymentFrequency()
    {
        return $this->extendedPaymentFrequency;
    }

    /**
     * Sets a new extendedPaymentFrequency
     *
     * The frequency of extended payment installments.
     *
     * @param string $extendedPaymentFrequency
     * @return self
     */
    public function setExtendedPaymentFrequency($extendedPaymentFrequency)
    {
        $this->extendedPaymentFrequency = $extendedPaymentFrequency;

        return $this;
    }

    /**
     * Gets as authorizationCode
     *
     * This is the approval code received on the original authorization request. Only
     * used in the case where the requested transaction is to reverse the
     * authorization.
     *
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * Sets a new authorizationCode
     *
     * This is the approval code received on the original authorization request. Only
     * used in the case where the requested transaction is to reverse the
     * authorization.
     *
     * @param string $authorizationCode
     * @return self
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;

        return $this;
    }

    /**
     * Gets as reversalIndicator
     *
     * If true, indicates a request to reverse a credit authorization.
     *
     * @return boolean
     */
    public function getReversalIndicator()
    {
        return $this->reversalIndicator;
    }

    /**
     * Sets a new reversalIndicator
     *
     * If true, indicates a request to reverse a credit authorization.
     *
     * @param boolean $reversalIndicator
     * @return self
     */
    public function setReversalIndicator($reversalIndicator)
    {
        $this->reversalIndicator = $reversalIndicator;

        return $this;
    }

    /**
     * Gets as cardPresentInd
     *
     * When true, the customer has actually presented the credit card.
     *
     * @return boolean
     */
    public function getCardPresentInd()
    {
        return $this->cardPresentInd;
    }

    /**
     * Sets a new cardPresentInd
     *
     * When true, the customer has actually presented the credit card.
     *
     * @param boolean $cardPresentInd
     * @return self
     */
    public function setCardPresentInd($cardPresentInd)
    {
        $this->cardPresentInd = $cardPresentInd;

        return $this;
    }

    /**
     * Gets as eCommerceCode
     *
     * The electronic commerce indicator required for some credit card authorizations,
     * such as the Verified by Visa Process.
     *
     * @return string
     */
    public function getECommerceCode()
    {
        return $this->eCommerceCode;
    }

    /**
     * Sets a new eCommerceCode
     *
     * The electronic commerce indicator required for some credit card authorizations,
     * such as the Verified by Visa Process.
     *
     * @param string $eCommerceCode
     * @return self
     */
    public function setECommerceCode($eCommerceCode)
    {
        $this->eCommerceCode = $eCommerceCode;

        return $this;
    }

    /**
     * Gets as authTransactionID
     *
     * The authentication transaction identifier required for some credit card
     * authorizations, such as the Verified by Visa Process.
     *
     * @return string
     */
    public function getAuthTransactionID()
    {
        return $this->authTransactionID;
    }

    /**
     * Sets a new authTransactionID
     *
     * The authentication transaction identifier required for some credit card
     * authorizations, such as the Verified by Visa Process.
     *
     * @param string $authTransactionID
     * @return self
     */
    public function setAuthTransactionID($authTransactionID)
    {
        $this->authTransactionID = $authTransactionID;

        return $this;
    }

    /**
     * Gets as authVerificationValue
     *
     * The cardholder authentication verfication value required for some credit card
     * authorization, such as the Verified by Visa Process.
     *
     * @return string
     */
    public function getAuthVerificationValue()
    {
        return $this->authVerificationValue;
    }

    /**
     * Sets a new authVerificationValue
     *
     * The cardholder authentication verfication value required for some credit card
     * authorization, such as the Verified by Visa Process.
     *
     * @param string $authVerificationValue
     * @return self
     */
    public function setAuthVerificationValue($authVerificationValue)
    {
        $this->authVerificationValue = $authVerificationValue;

        return $this;
    }

    /**
     * Gets as creditCard
     *
     * Specifies the credit card information for which authorization is required.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentCardType
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * Sets a new creditCard
     *
     * Specifies the credit card information for which authorization is required.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentCardType $creditCard
     * @return self
     */
    public function setCreditCard(\Davispeixoto\OpenTravelAlliance\PaymentCardType $creditCard)
    {
        $this->creditCard = $creditCard;

        return $this;
    }

    /**
     * Adds as iD
     *
     * Identification of an authorization party (e.g., merchant, acquirer).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $iD
     */
    public function addToID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $iD)
    {
        $this->iD[] = $iD;

        return $this;
    }

    /**
     * isset iD
     *
     * Identification of an authorization party (e.g., merchant, acquirer).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetID($index)
    {
        return isset($this->iD[$index]);
    }

    /**
     * unset iD
     *
     * Identification of an authorization party (e.g., merchant, acquirer).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetID($index)
    {
        unset($this->iD[$index]);
    }

    /**
     * Gets as iD
     *
     * Identification of an authorization party (e.g., merchant, acquirer).
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * Identification of an authorization party (e.g., merchant, acquirer).
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $iD
     * @return self
     */
    public function setID(array $iD)
    {
        $this->iD = $iD;

        return $this;
    }


}

