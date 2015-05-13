<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyPaymentType
 *
 * Payment information with ontology reference.
 * XSD Type: OntologyPaymentType
 */
class OntologyPaymentType
{

    /**
     * Travel rewards indicator.Implementer: If true, a card that accumulates travel
     * rewards was used.
     *
     * @property boolean $rewardsInd
     */
    private $rewardsInd = null;

    /**
     * Total trip price.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\TotalTripPriceAType
     * $totalTripPrice
     */
    private $totalTripPrice = null;

    /**
     * Rate information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\RateAType $rate
     */
    private $rate = null;

    /**
     * Payment status.Example: Prepaid
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\PaymentStatusAType
     * $paymentStatus
     */
    private $paymentStatus = null;

    /**
     * Payment method.Example: CreditCard
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\PaymentMethodAType
     * $paymentMethod
     */
    private $paymentMethod = null;

    /**
     * Payment card type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\CardTypeAType
     * $cardType
     */
    private $cardType = null;

    /**
     * Payment card issuer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\CardIssuerAType
     * $cardIssuer
     */
    private $cardIssuer = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as rewardsInd
     *
     * Travel rewards indicator.Implementer: If true, a card that accumulates travel
     * rewards was used.
     *
     * @return boolean
     */
    public function getRewardsInd()
    {
        return $this->rewardsInd;
    }

    /**
     * Sets a new rewardsInd
     *
     * Travel rewards indicator.Implementer: If true, a card that accumulates travel
     * rewards was used.
     *
     * @param boolean $rewardsInd
     * @return self
     */
    public function setRewardsInd($rewardsInd)
    {
        $this->rewardsInd = $rewardsInd;

        return $this;
    }

    /**
     * Gets as totalTripPrice
     *
     * Total trip price.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\TotalTripPriceAType
     */
    public function getTotalTripPrice()
    {
        return $this->totalTripPrice;
    }

    /**
     * Sets a new totalTripPrice
     *
     * Total trip price.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\TotalTripPriceAType
     * $totalTripPrice
     * @return self
     */
    public function setTotalTripPrice(
        \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\TotalTripPriceAType $totalTripPrice
    ) {
        $this->totalTripPrice = $totalTripPrice;

        return $this;
    }

    /**
     * Gets as rate
     *
     * Rate information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\RateAType
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * Rate information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\RateAType $rate
     * @return self
     */
    public function setRate(\Davispeixoto\OpenTravelAlliance\OntologyPaymentType\RateAType $rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Gets as paymentStatus
     *
     * Payment status.Example: Prepaid
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\PaymentStatusAType
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Sets a new paymentStatus
     *
     * Payment status.Example: Prepaid
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\PaymentStatusAType
     * $paymentStatus
     * @return self
     */
    public function setPaymentStatus(
        \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\PaymentStatusAType $paymentStatus
    ) {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * Gets as paymentMethod
     *
     * Payment method.Example: CreditCard
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\PaymentMethodAType
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets a new paymentMethod
     *
     * Payment method.Example: CreditCard
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\PaymentMethodAType
     * $paymentMethod
     * @return self
     */
    public function setPaymentMethod(
        \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\PaymentMethodAType $paymentMethod
    ) {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Gets as cardType
     *
     * Payment card type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\CardTypeAType
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * Sets a new cardType
     *
     * Payment card type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\CardTypeAType
     * $cardType
     * @return self
     */
    public function setCardType(\Davispeixoto\OpenTravelAlliance\OntologyPaymentType\CardTypeAType $cardType)
    {
        $this->cardType = $cardType;

        return $this;
    }

    /**
     * Gets as cardIssuer
     *
     * Payment card issuer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\CardIssuerAType
     */
    public function getCardIssuer()
    {
        return $this->cardIssuer;
    }

    /**
     * Sets a new cardIssuer
     *
     * Payment card issuer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\CardIssuerAType
     * $cardIssuer
     * @return self
     */
    public function setCardIssuer(\Davispeixoto\OpenTravelAlliance\OntologyPaymentType\CardIssuerAType $cardIssuer)
    {
        $this->cardIssuer = $cardIssuer;

        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(\Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension)
    {
        $this->ontologyExtension = $ontologyExtension;

        return $this;
    }


}

