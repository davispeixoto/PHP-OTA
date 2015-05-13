<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing FulfillmentType
 *
 * Payment information relevant to a booking.
 * XSD Type: FulfillmentType
 */
class FulfillmentType
{

    /**
     * Container for Payment Detail.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FulfillmentType\PaymentDetailsAType\PaymentDetailAType[]
     * $paymentDetails
     */
    private $paymentDetails = null;

    /**
     * Ticket delivery information for the booking request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressType $deliveryAddress
     */
    private $deliveryAddress = null;

    /**
     * Purchaser name details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $name
     */
    private $name = null;

    /**
     * Specifies the requested distribution method for the ticket receipt.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FulfillmentType\ReceiptAType $receipt
     */
    private $receipt = null;

    /**
     * Used to provide textual information concerning fulfillment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FulfillmentType\PaymentTextAType[]
     * $paymentText
     */
    private $paymentText = null;

    /**
     * Adds as paymentDetail
     *
     * Container for Payment Detail.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\FulfillmentType\PaymentDetailsAType\PaymentDetailAType
     * $paymentDetail
     */
    public function addToPaymentDetails(
        \Davispeixoto\OpenTravelAlliance\FulfillmentType\PaymentDetailsAType\PaymentDetailAType $paymentDetail
    ) {
        $this->paymentDetails[] = $paymentDetail;

        return $this;
    }

    /**
     * isset paymentDetails
     *
     * Container for Payment Detail.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentDetails($index)
    {
        return isset($this->paymentDetails[$index]);
    }

    /**
     * unset paymentDetails
     *
     * Container for Payment Detail.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentDetails($index)
    {
        unset($this->paymentDetails[$index]);
    }

    /**
     * Gets as paymentDetails
     *
     * Container for Payment Detail.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FulfillmentType\PaymentDetailsAType\PaymentDetailAType[]
     */
    public function getPaymentDetails()
    {
        return $this->paymentDetails;
    }

    /**
     * Sets a new paymentDetails
     *
     * Container for Payment Detail.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FulfillmentType\PaymentDetailsAType\PaymentDetailAType[]
     * $paymentDetails
     * @return self
     */
    public function setPaymentDetails(array $paymentDetails)
    {
        $this->paymentDetails = $paymentDetails;

        return $this;
    }

    /**
     * Gets as deliveryAddress
     *
     * Ticket delivery information for the booking request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressType
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Sets a new deliveryAddress
     *
     * Ticket delivery information for the booking request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressType $deliveryAddress
     * @return self
     */
    public function setDeliveryAddress(\Davispeixoto\OpenTravelAlliance\AddressType $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * Gets as name
     *
     * Purchaser name details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Purchaser name details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $name
     * @return self
     */
    public function setName(\Davispeixoto\OpenTravelAlliance\PersonNameType $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as receipt
     *
     * Specifies the requested distribution method for the ticket receipt.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FulfillmentType\ReceiptAType
     */
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     * Sets a new receipt
     *
     * Specifies the requested distribution method for the ticket receipt.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FulfillmentType\ReceiptAType $receipt
     * @return self
     */
    public function setReceipt(\Davispeixoto\OpenTravelAlliance\FulfillmentType\ReceiptAType $receipt)
    {
        $this->receipt = $receipt;

        return $this;
    }

    /**
     * Adds as paymentText
     *
     * Used to provide textual information concerning fulfillment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FulfillmentType\PaymentTextAType
     * $paymentText
     */
    public function addToPaymentText(\Davispeixoto\OpenTravelAlliance\FulfillmentType\PaymentTextAType $paymentText)
    {
        $this->paymentText[] = $paymentText;

        return $this;
    }

    /**
     * isset paymentText
     *
     * Used to provide textual information concerning fulfillment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentText($index)
    {
        return isset($this->paymentText[$index]);
    }

    /**
     * unset paymentText
     *
     * Used to provide textual information concerning fulfillment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentText($index)
    {
        unset($this->paymentText[$index]);
    }

    /**
     * Gets as paymentText
     *
     * Used to provide textual information concerning fulfillment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FulfillmentType\PaymentTextAType[]
     */
    public function getPaymentText()
    {
        return $this->paymentText;
    }

    /**
     * Sets a new paymentText
     *
     * Used to provide textual information concerning fulfillment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FulfillmentType\PaymentTextAType[]
     * $paymentText
     * @return self
     */
    public function setPaymentText(array $paymentText)
    {
        $this->paymentText = $paymentText;

        return $this;
    }


}

