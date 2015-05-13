<?php

namespace Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType;

/**
 * Class representing AcceptablePaymentCardsAType
 */
class AcceptablePaymentCardsAType
{

    /**
     * Specific information of one payment card that is acceptable as a form of
     * payment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType[]
     * $acceptablePaymentCard
     */
    private $acceptablePaymentCard = null;

    /**
     * Adds as acceptablePaymentCard
     *
     * Specific information of one payment card that is acceptable as a form of
     * payment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType
     * $acceptablePaymentCard
     */
    public function addToAcceptablePaymentCard(
        \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType $acceptablePaymentCard
    ) {
        $this->acceptablePaymentCard[] = $acceptablePaymentCard;

        return $this;
    }

    /**
     * isset acceptablePaymentCard
     *
     * Specific information of one payment card that is acceptable as a form of
     * payment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAcceptablePaymentCard($index)
    {
        return isset($this->acceptablePaymentCard[$index]);
    }

    /**
     * unset acceptablePaymentCard
     *
     * Specific information of one payment card that is acceptable as a form of
     * payment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAcceptablePaymentCard($index)
    {
        unset($this->acceptablePaymentCard[$index]);
    }

    /**
     * Gets as acceptablePaymentCard
     *
     * Specific information of one payment card that is acceptable as a form of
     * payment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType[]
     */
    public function getAcceptablePaymentCard()
    {
        return $this->acceptablePaymentCard;
    }

    /**
     * Sets a new acceptablePaymentCard
     *
     * Specific information of one payment card that is acceptable as a form of
     * payment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType[]
     * $acceptablePaymentCard
     * @return self
     */
    public function setAcceptablePaymentCard(array $acceptablePaymentCard)
    {
        $this->acceptablePaymentCard = $acceptablePaymentCard;

        return $this;
    }


}

