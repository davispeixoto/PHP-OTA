<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPurchaseItemRS;

/**
 * Class representing PurchaseItemInfoAType
 */
class PurchaseItemInfoAType
{

    /**
     * Provides the details of one or more orders.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OrdersType $orders
     */
    private $orders = null;

    /**
     * Information about one or more recipients.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RecipientInfosType\RecipientInfoAType[]
     * $recipientInfos
     */
    private $recipientInfos = null;

    /**
     * Payment information for the purchaser of the order.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentDetailType $paymentInformation
     */
    private $paymentInformation = null;

    /**
     * Comments pertaining to the orders.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAPurchaseItemRS\PurchaseItemInfoAType\CommentsAType
     * $comments
     */
    private $comments = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as orders
     *
     * Provides the details of one or more orders.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OrdersType
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Sets a new orders
     *
     * Provides the details of one or more orders.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OrdersType $orders
     * @return self
     */
    public function setOrders(\Davispeixoto\OpenTravelAlliance\OrdersType $orders)
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * Adds as recipientInfo
     *
     * Information about one or more recipients.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RecipientInfosType\RecipientInfoAType
     * $recipientInfo
     */
    public function addToRecipientInfos(
        \Davispeixoto\OpenTravelAlliance\RecipientInfosType\RecipientInfoAType $recipientInfo
    ) {
        $this->recipientInfos[] = $recipientInfo;

        return $this;
    }

    /**
     * isset recipientInfos
     *
     * Information about one or more recipients.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRecipientInfos($index)
    {
        return isset($this->recipientInfos[$index]);
    }

    /**
     * unset recipientInfos
     *
     * Information about one or more recipients.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRecipientInfos($index)
    {
        unset($this->recipientInfos[$index]);
    }

    /**
     * Gets as recipientInfos
     *
     * Information about one or more recipients.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RecipientInfosType\RecipientInfoAType[]
     */
    public function getRecipientInfos()
    {
        return $this->recipientInfos;
    }

    /**
     * Sets a new recipientInfos
     *
     * Information about one or more recipients.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RecipientInfosType\RecipientInfoAType[]
     * $recipientInfos
     * @return self
     */
    public function setRecipientInfos(array $recipientInfos)
    {
        $this->recipientInfos = $recipientInfos;

        return $this;
    }

    /**
     * Gets as paymentInformation
     *
     * Payment information for the purchaser of the order.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentDetailType
     */
    public function getPaymentInformation()
    {
        return $this->paymentInformation;
    }

    /**
     * Sets a new paymentInformation
     *
     * Payment information for the purchaser of the order.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentDetailType $paymentInformation
     * @return self
     */
    public function setPaymentInformation(\Davispeixoto\OpenTravelAlliance\PaymentDetailType $paymentInformation)
    {
        $this->paymentInformation = $paymentInformation;

        return $this;
    }

    /**
     * Gets as comments
     *
     * Comments pertaining to the orders.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAPurchaseItemRS\PurchaseItemInfoAType\CommentsAType
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * Comments pertaining to the orders.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPurchaseItemRS\PurchaseItemInfoAType\CommentsAType
     * $comments
     * @return self
     */
    public function setComments(
        \Davispeixoto\OpenTravelAlliance\OTAPurchaseItemRS\PurchaseItemInfoAType\CommentsAType $comments
    ) {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

