<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType;

/**
 * Class representing PaymentCardAType
 */
class PaymentCardAType
{

    /**
     * CardType specifies the type of magnetic striped card and MUST refer to
     * OpenTravel Code ListCard Type (CDT). FastRez RECOMMENDS restricting the use of
     * the code table to the codes 1 - Credit and 2 - Debit.
     *
     * @property string $cardType
     */
    private $cardType = null;

    /**
     * The CardCode MUST specify the 2 character code of the payment card issuer.
     *
     * @property string $cardCode
     */
    private $cardCode = null;

    /**
     * Gets as cardType
     *
     * CardType specifies the type of magnetic striped card and MUST refer to
     * OpenTravel Code ListCard Type (CDT). FastRez RECOMMENDS restricting the use of
     * the code table to the codes 1 - Credit and 2 - Debit.
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
     * CardType specifies the type of magnetic striped card and MUST refer to
     * OpenTravel Code ListCard Type (CDT). FastRez RECOMMENDS restricting the use of
     * the code table to the codes 1 - Credit and 2 - Debit.
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
     * The CardCode MUST specify the 2 character code of the payment card issuer.
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
     * The CardCode MUST specify the 2 character code of the payment card issuer.
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

