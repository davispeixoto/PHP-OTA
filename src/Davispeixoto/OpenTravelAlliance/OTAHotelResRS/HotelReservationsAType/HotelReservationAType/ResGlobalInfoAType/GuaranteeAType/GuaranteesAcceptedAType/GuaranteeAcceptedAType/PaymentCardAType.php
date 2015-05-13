<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType;

/**
 * Class representing PaymentCardAType
 */
class PaymentCardAType
{

    /**
     * CardType MUST indicate the type of magnetic striped card. CardType MUST refer to
     * OpenTravel Code ListCard Type (CDT).
     *
     * @property string $cardType
     */
    private $cardType = null;

    /**
     * CardCode MUST specify the 2 character code of the credit card issuer.
     *
     * @property string $cardCode
     */
    private $cardCode = null;

    /**
     * ExpireDate MAY indicate the ending date of the payment card.
     *
     * @property string $expireDate
     */
    private $expireDate = null;

    /**
     * MaskedCardNumber MUST specify the payment card number in a concealed format
     * (e.g., xxxxxxxxxxxx9922).
     *
     * @property string $maskedCardNumber
     */
    private $maskedCardNumber = null;

    /**
     * CardHolderName specifies the name of the card holder.
     *
     * @property string $cardHolderName
     */
    private $cardHolderName = null;

    /**
     * Gets as cardType
     *
     * CardType MUST indicate the type of magnetic striped card. CardType MUST refer to
     * OpenTravel Code ListCard Type (CDT).
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
     * CardType MUST indicate the type of magnetic striped card. CardType MUST refer to
     * OpenTravel Code ListCard Type (CDT).
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
     * CardCode MUST specify the 2 character code of the credit card issuer.
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
     * CardCode MUST specify the 2 character code of the credit card issuer.
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
     * Gets as expireDate
     *
     * ExpireDate MAY indicate the ending date of the payment card.
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
     * ExpireDate MAY indicate the ending date of the payment card.
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
     * MaskedCardNumber MUST specify the payment card number in a concealed format
     * (e.g., xxxxxxxxxxxx9922).
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
     * MaskedCardNumber MUST specify the payment card number in a concealed format
     * (e.g., xxxxxxxxxxxx9922).
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
     * CardHolderName specifies the name of the card holder.
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
     * CardHolderName specifies the name of the card holder.
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

