<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelProductNotifRQ\HotelProductsAType;

use Davispeixoto\OpenTravelAlliance\HotelProductType;

/**
 * Class representing HotelProductAType
 */
class HotelProductAType extends HotelProductType
{

    /**
     * An enumerated type that indicates whether this is a new product or an update of
     * an existing product.
     *
     * @property string $productNotifType
     */
    private $productNotifType = null;

    /**
     * Gets as productNotifType
     *
     * An enumerated type that indicates whether this is a new product or an update of
     * an existing product.
     *
     * @return string
     */
    public function getProductNotifType()
    {
        return $this->productNotifType;
    }

    /**
     * Sets a new productNotifType
     *
     * An enumerated type that indicates whether this is a new product or an update of
     * an existing product.
     *
     * @param string $productNotifType
     * @return self
     */
    public function setProductNotifType($productNotifType)
    {
        $this->productNotifType = $productNotifType;

        return $this;
    }


}

