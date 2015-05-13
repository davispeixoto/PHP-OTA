<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RequiredPaymentLiteType
 *
 * Summary version of the RequiredPaymentType, initially created for the Travel
 * Itinerary Message set.
 * XSD Type: RequiredPaymentLiteType
 */
class RequiredPaymentLiteType
{

    /**
     * An enumerated type defining the type of action taken when the deadline has been
     * exceeded. Valid values: Res Automatically Cancelled, Res No Longer Guaranteed.
     *
     * @property string $retributionType
     */
    private $retributionType = null;

    /**
     * Collection of forms of payment accepted for payment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType[]
     * $acceptedPayments
     */
    private $acceptedPayments = null;

    /**
     * Payment expressed as a fixed amount, or a percentage of/or room nights.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AmountPercentType $amountPercent
     */
    private $amountPercent = null;

    /**
     * Gets as retributionType
     *
     * An enumerated type defining the type of action taken when the deadline has been
     * exceeded. Valid values: Res Automatically Cancelled, Res No Longer Guaranteed.
     *
     * @return string
     */
    public function getRetributionType()
    {
        return $this->retributionType;
    }

    /**
     * Sets a new retributionType
     *
     * An enumerated type defining the type of action taken when the deadline has been
     * exceeded. Valid values: Res Automatically Cancelled, Res No Longer Guaranteed.
     *
     * @param string $retributionType
     * @return self
     */
    public function setRetributionType($retributionType)
    {
        $this->retributionType = $retributionType;

        return $this;
    }

    /**
     * Adds as acceptedPayment
     *
     * Collection of forms of payment accepted for payment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType
     * $acceptedPayment
     */
    public function addToAcceptedPayments(
        \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType $acceptedPayment
    ) {
        $this->acceptedPayments[] = $acceptedPayment;

        return $this;
    }

    /**
     * isset acceptedPayments
     *
     * Collection of forms of payment accepted for payment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAcceptedPayments($index)
    {
        return isset($this->acceptedPayments[$index]);
    }

    /**
     * unset acceptedPayments
     *
     * Collection of forms of payment accepted for payment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAcceptedPayments($index)
    {
        unset($this->acceptedPayments[$index]);
    }

    /**
     * Gets as acceptedPayments
     *
     * Collection of forms of payment accepted for payment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType[]
     */
    public function getAcceptedPayments()
    {
        return $this->acceptedPayments;
    }

    /**
     * Sets a new acceptedPayments
     *
     * Collection of forms of payment accepted for payment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType[]
     * $acceptedPayments
     * @return self
     */
    public function setAcceptedPayments(array $acceptedPayments)
    {
        $this->acceptedPayments = $acceptedPayments;

        return $this;
    }

    /**
     * Gets as amountPercent
     *
     * Payment expressed as a fixed amount, or a percentage of/or room nights.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AmountPercentType
     */
    public function getAmountPercent()
    {
        return $this->amountPercent;
    }

    /**
     * Sets a new amountPercent
     *
     * Payment expressed as a fixed amount, or a percentage of/or room nights.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AmountPercentType $amountPercent
     * @return self
     */
    public function setAmountPercent(\Davispeixoto\OpenTravelAlliance\AmountPercentType $amountPercent)
    {
        $this->amountPercent = $amountPercent;

        return $this;
    }


}

