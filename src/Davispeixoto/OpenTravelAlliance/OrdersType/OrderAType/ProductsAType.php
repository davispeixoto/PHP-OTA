<?php

namespace Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType;

/**
 * Class representing ProductsAType
 */
class ProductsAType
{

    /**
     * The details associated to a specific product.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType\ProductsAType\ProductAType[]
     * $product
     */
    private $product = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as product
     *
     * The details associated to a specific product.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType\ProductsAType\ProductAType
     * $product
     */
    public function addToProduct(
        \Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType\ProductsAType\ProductAType $product
    ) {
        $this->product[] = $product;

        return $this;
    }

    /**
     * isset product
     *
     * The details associated to a specific product.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProduct($index)
    {
        return isset($this->product[$index]);
    }

    /**
     * unset product
     *
     * The details associated to a specific product.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProduct($index)
    {
        unset($this->product[$index]);
    }

    /**
     * Gets as product
     *
     * The details associated to a specific product.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType\ProductsAType\ProductAType[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * The details associated to a specific product.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType\ProductsAType\ProductAType[]
     * $product
     * @return self
     */
    public function setProduct(array $product)
    {
        $this->product = $product;

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

