<?php

namespace Davispeixoto\OpenTravelAlliance\OrdersType;

/**
 * Class representing OrderAType
 */
class OrderAType
{

    /**
     * Identifies the type of order.
     *
     * @property string $orderType
     */
    private $orderType = null;

    /**
     * The identification number associated to the orders.
     *
     * @property string $orderID
     */
    private $orderID = null;

    /**
     * The recipient(s) to whom the order pertains.
     *
     * @property string[] $listOfRecipientRPH
     */
    private $listOfRecipientRPH = null;

    /**
     * A collection of products.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType\ProductsAType
     * $products
     */
    private $products = null;

    /**
     * Gets as orderType
     *
     * Identifies the type of order.
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
     * Identifies the type of order.
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
     * Adds as listOfRecipientRPH
     *
     * The recipient(s) to whom the order pertains.
     *
     * @return self
     * @param string $listOfRecipientRPH
     */
    public function addToListOfRecipientRPH($listOfRecipientRPH)
    {
        $this->listOfRecipientRPH[] = $listOfRecipientRPH;

        return $this;
    }

    /**
     * isset listOfRecipientRPH
     *
     * The recipient(s) to whom the order pertains.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListOfRecipientRPH($index)
    {
        return isset($this->listOfRecipientRPH[$index]);
    }

    /**
     * unset listOfRecipientRPH
     *
     * The recipient(s) to whom the order pertains.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListOfRecipientRPH($index)
    {
        unset($this->listOfRecipientRPH[$index]);
    }

    /**
     * Gets as listOfRecipientRPH
     *
     * The recipient(s) to whom the order pertains.
     *
     * @return string[]
     */
    public function getListOfRecipientRPH()
    {
        return $this->listOfRecipientRPH;
    }

    /**
     * Sets a new listOfRecipientRPH
     *
     * The recipient(s) to whom the order pertains.
     *
     * @param string $listOfRecipientRPH
     * @return self
     */
    public function setListOfRecipientRPH(array $listOfRecipientRPH)
    {
        $this->listOfRecipientRPH = $listOfRecipientRPH;

        return $this;
    }

    /**
     * Gets as products
     *
     * A collection of products.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType\ProductsAType
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Sets a new products
     *
     * A collection of products.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType\ProductsAType
     * $products
     * @return self
     */
    public function setProducts(\Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType\ProductsAType $products)
    {
        $this->products = $products;

        return $this;
    }


}

