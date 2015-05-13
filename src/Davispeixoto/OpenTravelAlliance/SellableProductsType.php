<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SellableProductsType
 *
 * The SellableProduct class defines the inventoried item for this rate plan.
 * XSD Type: SellableProductsType
 */
class SellableProductsType
{

    /**
     * The individual sellable product. A sellable product may be a guest room, a
     * meeting room or an inventory block. Attributes of SellableProduct are the
     * inventory codes, information on the use, application and sequencing of the
     * inventory information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType[]
     * $sellableProduct
     */
    private $sellableProduct = null;

    /**
     * Adds as sellableProduct
     *
     * The individual sellable product. A sellable product may be a guest room, a
     * meeting room or an inventory block. Attributes of SellableProduct are the
     * inventory codes, information on the use, application and sequencing of the
     * inventory information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType
     * $sellableProduct
     */
    public function addToSellableProduct(
        \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType $sellableProduct
    ) {
        $this->sellableProduct[] = $sellableProduct;

        return $this;
    }

    /**
     * isset sellableProduct
     *
     * The individual sellable product. A sellable product may be a guest room, a
     * meeting room or an inventory block. Attributes of SellableProduct are the
     * inventory codes, information on the use, application and sequencing of the
     * inventory information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSellableProduct($index)
    {
        return isset($this->sellableProduct[$index]);
    }

    /**
     * unset sellableProduct
     *
     * The individual sellable product. A sellable product may be a guest room, a
     * meeting room or an inventory block. Attributes of SellableProduct are the
     * inventory codes, information on the use, application and sequencing of the
     * inventory information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSellableProduct($index)
    {
        unset($this->sellableProduct[$index]);
    }

    /**
     * Gets as sellableProduct
     *
     * The individual sellable product. A sellable product may be a guest room, a
     * meeting room or an inventory block. Attributes of SellableProduct are the
     * inventory codes, information on the use, application and sequencing of the
     * inventory information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType[]
     */
    public function getSellableProduct()
    {
        return $this->sellableProduct;
    }

    /**
     * Sets a new sellableProduct
     *
     * The individual sellable product. A sellable product may be a guest room, a
     * meeting room or an inventory block. Attributes of SellableProduct are the
     * inventory codes, information on the use, application and sequencing of the
     * inventory information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType[]
     * $sellableProduct
     * @return self
     */
    public function setSellableProduct(array $sellableProduct)
    {
        $this->sellableProduct = $sellableProduct;

        return $this;
    }


}

