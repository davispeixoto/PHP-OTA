<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AcceptablePaymentCardsInfoType
 *
 * This complex type identifies payment cards that are acceptable for a specific
 * form of payment, along with the ability to provide free text information
 * regarding payment cards.
 * XSD Type: AcceptablePaymentCardsInfoType
 */
class AcceptablePaymentCardsInfoType
{

    /**
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType[]
     * $acceptablePaymentCards
     */
    private $acceptablePaymentCards = null;

    /**
     * General information regarding the use of payment cards.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType $info
     */
    private $info = null;

    /**
     * Adds as acceptablePaymentCard
     *
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType
     * $acceptablePaymentCard
     */
    public function addToAcceptablePaymentCards(
        \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType $acceptablePaymentCard
    ) {
        $this->acceptablePaymentCards[] = $acceptablePaymentCard;

        return $this;
    }

    /**
     * isset acceptablePaymentCards
     *
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAcceptablePaymentCards($index)
    {
        return isset($this->acceptablePaymentCards[$index]);
    }

    /**
     * unset acceptablePaymentCards
     *
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAcceptablePaymentCards($index)
    {
        unset($this->acceptablePaymentCards[$index]);
    }

    /**
     * Gets as acceptablePaymentCards
     *
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType[]
     */
    public function getAcceptablePaymentCards()
    {
        return $this->acceptablePaymentCards;
    }

    /**
     * Sets a new acceptablePaymentCards
     *
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType[]
     * $acceptablePaymentCards
     * @return self
     */
    public function setAcceptablePaymentCards(array $acceptablePaymentCards)
    {
        $this->acceptablePaymentCards = $acceptablePaymentCards;

        return $this;
    }

    /**
     * Gets as info
     *
     * General information regarding the use of payment cards.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * General information regarding the use of payment cards.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $info
     * @return self
     */
    public function setInfo(\Davispeixoto\OpenTravelAlliance\FormattedTextType $info)
    {
        $this->info = $info;

        return $this;
    }


}

