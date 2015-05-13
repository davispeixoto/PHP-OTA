<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OrdersType
 *
 * Provides the details of one or more orders.
 * XSD Type: OrdersType
 */
class OrdersType
{

    /**
     * Identifies the type of orders.
     *
     * @property string $orderType
     */
    private $orderType = null;

    /**
     * A discount code that applies to the orders.
     *
     * @property string $discountCode
     */
    private $discountCode = null;

    /**
     * The purchase order number of a sales intermediary.
     *
     * @property string $vendorPurchaseOrderID
     */
    private $vendorPurchaseOrderID = null;

    /**
     * The identification number associated to the orders.
     *
     * @property string $orderID
     */
    private $orderID = null;

    /**
     * Information pertaining to a specific order.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType[] $order
     */
    private $order = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as orderType
     *
     * Identifies the type of orders.
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Sets a new orderType
     *
     * Identifies the type of orders.
     *
     * @param string $orderType
     * @return self
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;

        return $this;
    }

    /**
     * Gets as discountCode
     *
     * A discount code that applies to the orders.
     *
     * @return string
     */
    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    /**
     * Sets a new discountCode
     *
     * A discount code that applies to the orders.
     *
     * @param string $discountCode
     * @return self
     */
    public function setDiscountCode($discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    /**
     * Gets as vendorPurchaseOrderID
     *
     * The purchase order number of a sales intermediary.
     *
     * @return string
     */
    public function getVendorPurchaseOrderID()
    {
        return $this->vendorPurchaseOrderID;
    }

    /**
     * Sets a new vendorPurchaseOrderID
     *
     * The purchase order number of a sales intermediary.
     *
     * @param string $vendorPurchaseOrderID
     * @return self
     */
    public function setVendorPurchaseOrderID($vendorPurchaseOrderID)
    {
        $this->vendorPurchaseOrderID = $vendorPurchaseOrderID;

        return $this;
    }

    /**
     * Gets as orderID
     *
     * The identification number associated to the orders.
     *
     * @return string
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Sets a new orderID
     *
     * The identification number associated to the orders.
     *
     * @param string $orderID
     * @return self
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;

        return $this;
    }

    /**
     * Adds as order
     *
     * Information pertaining to a specific order.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType $order
     */
    public function addToOrder(\Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType $order)
    {
        $this->order[] = $order;

        return $this;
    }

    /**
     * isset order
     *
     * Information pertaining to a specific order.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrder($index)
    {
        return isset($this->order[$index]);
    }

    /**
     * unset order
     *
     * Information pertaining to a specific order.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrder($index)
    {
        unset($this->order[$index]);
    }

    /**
     * Gets as order
     *
     * Information pertaining to a specific order.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType[]
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * Information pertaining to a specific order.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType[] $order
     * @return self
     */
    public function setOrder(array $order)
    {
        $this->order = $order;

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

