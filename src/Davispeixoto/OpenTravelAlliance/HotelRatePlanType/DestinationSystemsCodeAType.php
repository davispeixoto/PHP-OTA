<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRatePlanType;

/**
 * Class representing DestinationSystemsCodeAType
 */
class DestinationSystemsCodeAType
{

    /**
     * The destination system code defines a system to which information is to be
     * provided.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\DestinationSystemsCodeAType\DestinationSystemCodeAType[]
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
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\DestinationSystemsCodeAType\DestinationSystemCodeAType
     * $destinationSystemCode
     */
    public function addToDestinationSystemCode(
        \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\DestinationSystemsCodeAType\DestinationSystemCodeAType $destinationSystemCode
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
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\DestinationSystemsCodeAType\DestinationSystemCodeAType[]
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
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\DestinationSystemsCodeAType\DestinationSystemCodeAType[]
     * $destinationSystemCode
     * @return self
     */
    public function setDestinationSystemCode(array $destinationSystemCode)
    {
        $this->destinationSystemCode = $destinationSystemCode;

        return $this;
    }


}

