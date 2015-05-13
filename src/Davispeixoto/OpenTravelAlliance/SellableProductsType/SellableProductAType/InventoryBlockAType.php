<?php

namespace Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType;

/**
 * Class representing InventoryBlockAType
 */
class InventoryBlockAType
{

    /**
     * Trading partner code associated with a room block.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * Trading partner code associated with a room block.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Trading partner code associated with a room block.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


}

