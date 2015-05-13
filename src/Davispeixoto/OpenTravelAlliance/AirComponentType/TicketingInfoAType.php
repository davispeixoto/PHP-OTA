<?php

namespace Davispeixoto\OpenTravelAlliance\AirComponentType;

use Davispeixoto\OpenTravelAlliance\TicketingInfoRSType;

/**
 * Class representing TicketingInfoAType
 */
class TicketingInfoAType extends TicketingInfoRSType
{

    /**
     * Specifies the allowable forms of payment (i.e., check, cash, credit card). Refer
     * to OpenTravel Code List Payment Type (PMT).
     *
     * @property string[] $paymentType
     */
    private $paymentType = null;

    /**
     * Shipping information for the ticket.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirComponentType\TicketingInfoAType\DeliveryInfoAType[]
     * $deliveryInfo
     */
    private $deliveryInfo = null;

    /**
     * Adds as paymentType
     *
     * Specifies the allowable forms of payment (i.e., check, cash, credit card). Refer
     * to OpenTravel Code List Payment Type (PMT).
     *
     * @return self
     * @param string $paymentType
     */
    public function addToPaymentType($paymentType)
    {
        $this->paymentType[] = $paymentType;

        return $this;
    }

    /**
     * isset paymentType
     *
     * Specifies the allowable forms of payment (i.e., check, cash, credit card). Refer
     * to OpenTravel Code List Payment Type (PMT).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentType($index)
    {
        return isset($this->paymentType[$index]);
    }

    /**
     * unset paymentType
     *
     * Specifies the allowable forms of payment (i.e., check, cash, credit card). Refer
     * to OpenTravel Code List Payment Type (PMT).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentType($index)
    {
        unset($this->paymentType[$index]);
    }

    /**
     * Gets as paymentType
     *
     * Specifies the allowable forms of payment (i.e., check, cash, credit card). Refer
     * to OpenTravel Code List Payment Type (PMT).
     *
     * @return string[]
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType
     *
     * Specifies the allowable forms of payment (i.e., check, cash, credit card). Refer
     * to OpenTravel Code List Payment Type (PMT).
     *
     * @param string $paymentType
     * @return self
     */
    public function setPaymentType(array $paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Adds as deliveryInfo
     *
     * Shipping information for the ticket.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirComponentType\TicketingInfoAType\DeliveryInfoAType
     * $deliveryInfo
     */
    public function addToDeliveryInfo(
        \Davispeixoto\OpenTravelAlliance\AirComponentType\TicketingInfoAType\DeliveryInfoAType $deliveryInfo
    ) {
        $this->deliveryInfo[] = $deliveryInfo;

        return $this;
    }

    /**
     * isset deliveryInfo
     *
     * Shipping information for the ticket.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeliveryInfo($index)
    {
        return isset($this->deliveryInfo[$index]);
    }

    /**
     * unset deliveryInfo
     *
     * Shipping information for the ticket.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeliveryInfo($index)
    {
        unset($this->deliveryInfo[$index]);
    }

    /**
     * Gets as deliveryInfo
     *
     * Shipping information for the ticket.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirComponentType\TicketingInfoAType\DeliveryInfoAType[]
     */
    public function getDeliveryInfo()
    {
        return $this->deliveryInfo;
    }

    /**
     * Sets a new deliveryInfo
     *
     * Shipping information for the ticket.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirComponentType\TicketingInfoAType\DeliveryInfoAType[]
     * $deliveryInfo
     * @return self
     */
    public function setDeliveryInfo(array $deliveryInfo)
    {
        $this->deliveryInfo = $deliveryInfo;

        return $this;
    }


}

