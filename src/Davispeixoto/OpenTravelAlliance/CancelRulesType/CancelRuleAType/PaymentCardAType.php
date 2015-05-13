<?php

namespace Davispeixoto\OpenTravelAlliance\CancelRulesType\CancelRuleAType;

/**
 * Class representing PaymentCardAType
 */
class PaymentCardAType
{

    /**
     * MUST indicate the type of magnetic striped card. Refer to OpenTravel Code
     * ListCard Type (CDT).
     *
     * @property string $cardType
     */
    private $cardType = null;

    /**
     * CardCode MUST contain the 2 character code of the credit card issuer.
     *
     * @property string $cardCode
     */
    private $cardCode = null;

    /**
     * CardNumber MAY contain the credit card number embossed on the card to which this
     * charge will be applied.
     *
     * @property string $cardNumber
     */
    private $cardNumber = null;

    /**
     * ExpireDate MAY indicate the ending date for the payment card.
     *
     * @property string $expireDate
     */
    private $expireDate = null;

    /**
     * MaskedCardNumber MAY contain the concealed credit card number (e.g.,
     * xxxxxxxxxxxx9922) to which this cancellation penalty will be applied.
     *
     * @property string $maskedCardNumber
     */
    private $maskedCardNumber = null;

    /**
     * CardHolderName MUST specify the name of the holder of the payment card.
     *
     * @property string $cardHolderName
     */
    private $cardHolderName = null;

    /**
     * Gets as cardType
     *
     * MUST indicate the type of magnetic striped card. Refer to OpenTravel Code
     * ListCard Type (CDT).
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * Sets a new cardType
     *
     * MUST indicate the type of magnetic striped card. Refer to OpenTravel Code
     * ListCard Type (CDT).
     *
     * @param string $cardType
     * @return self
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;

        return $this;
    }

    /**
     * Gets as cardCode
     *
     * CardCode MUST contain the 2 character code of the credit card issuer.
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
     * CardCode MUST contain the 2 character code of the credit card issuer.
     *
     * @param string $cardCode
     * @return self
     */
    public function setCardCode($cardCode)
    {
        $this->cardCode = $cardCode;

        return $this;
    }

    /**
     * Gets as cardNumber
     *
     * CardNumber MAY contain the credit card number embossed on the card to which this
     * charge will be applied.
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Sets a new cardNumber
     *
     * CardNumber MAY contain the credit card number embossed on the card to which this
     * charge will be applied.
     *
     * @param string $cardNumber
     * @return self
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Gets as expireDate
     *
     * ExpireDate MAY indicate the ending date for the payment card.
     *
     * @return string
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * ExpireDate MAY indicate the ending date for the payment card.
     *
     * @param string $expireDate
     * @return self
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Gets as maskedCardNumber
     *
     * MaskedCardNumber MAY contain the concealed credit card number (e.g.,
     * xxxxxxxxxxxx9922) to which this cancellation penalty will be applied.
     *
     * @return string
     */
    public function getMaskedCardNumber()
    {
        return $this->maskedCardNumber;
    }

    /**
     * Sets a new maskedCardNumber
     *
     * MaskedCardNumber MAY contain the concealed credit card number (e.g.,
     * xxxxxxxxxxxx9922) to which this cancellation penalty will be applied.
     *
     * @param string $maskedCardNumber
     * @return self
     */
    public function setMaskedCardNumber($maskedCardNumber)
    {
        $this->maskedCardNumber = $maskedCardNumber;

        return $this;
    }

    /**
     * Gets as cardHolderName
     *
     * CardHolderName MUST specify the name of the holder of the payment card.
     *
     * @return string
     */
    public function getCardHolderName()
    {
        return $this->cardHolderName;
    }

    /**
     * Sets a new cardHolderName
     *
     * CardHolderName MUST specify the name of the holder of the payment card.
     *
     * @param string $cardHolderName
     * @return self
     */
    public function setCardHolderName($cardHolderName)
    {
        $this->cardHolderName = $cardHolderName;

        return $this;
    }


}

