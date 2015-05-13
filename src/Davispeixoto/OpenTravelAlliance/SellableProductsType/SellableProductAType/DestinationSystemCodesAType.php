<?php

namespace Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType;

/**
 * Class representing DestinationSystemCodesAType
 */
class DestinationSystemCodesAType
{

    /**
     * The destination system code defines a system to which information is to be
     * provided.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType\DestinationSystemCodesAType\DestinationSystemCodeAType[]
     * $destinationSystemCode
     */
    private $destinationSystemCode = null;

    /**
     * Adds as destinationSystemCode
     *
     * The destination system code defines a system to which information is to be
     * provided.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType\DestinationSystemCodesAType\DestinationSystemCodeAType
     * $destinationSystemCode
     */
    public function addToDestinationSystemCode(
        \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType\DestinationSystemCodesAType\DestinationSystemCodeAType $destinationSystemCode
    ) {
        $this->destinationSystemCode[] = $destinationSystemCode;

        return $this;
    }

    /**
     * isset destinationSystemCode
     *
     * The destination system code defines a system to which information is to be
     * provided.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDestinationSystemCode($index)
    {
        return isset($this->destinationSystemCode[$index]);
    }

    /**
     * unset destinationSystemCode
     *
     * The destination system code defines a system to which information is to be
     * provided.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDestinationSystemCode($index)
    {
        unset($this->destinationSystemCode[$index]);
    }

    /**
     * Gets as destinationSystemCode
     *
     * The destination system code defines a system to which information is to be
     * provided.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType\DestinationSystemCodesAType\DestinationSystemCodeAType[]
     */
    public function getDestinationSystemCode()
    {
        return $this->destinationSystemCode;
    }

    /**
     * Sets a new destinationSystemCode
     *
     * The destination system code defines a system to which information is to be
     * provided.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType\DestinationSystemCodesAType\DestinationSystemCodeAType[]
     * $destinationSystemCode
     * @return self
     */
    public function setDestinationSystemCode(array $destinationSystemCode)
    {
        $this->destinationSystemCode = $destinationSystemCode;

        return $this;
    }


}

