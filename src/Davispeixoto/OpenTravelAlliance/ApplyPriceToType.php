<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ApplyPriceToType
 *
 * Indicates the specific traveler, itinerary, paid origin/destination or flight
 * segment a priced item applies to.
 * XSD Type: ApplyPriceToType
 */
class ApplyPriceToType
{

    /**
     * A reference to a seat product ID.
     *
     * @property string $seatRPH
     */
    private $seatRPH = null;

    /**
     * A reference to a unique other service ID defined elsewhere in this message.
     *
     * @property string $otherServiceRPH
     */
    private $otherServiceRPH = null;

    /**
     * Gets as seatRPH
     *
     * A reference to a seat product ID.
     *
     * @return string
     */
    public function getSeatRPH()
    {
        return $this->seatRPH;
    }

    /**
     * Sets a new seatRPH
     *
     * A reference to a seat product ID.
     *
     * @param string $seatRPH
     * @return self
     */
    public function setSeatRPH($seatRPH)
    {
        $this->seatRPH = $seatRPH;

        return $this;
    }

    /**
     * Gets as otherServiceRPH
     *
     * A reference to a unique other service ID defined elsewhere in this message.
     *
     * @return string
     */
    public function getOtherServiceRPH()
    {
        return $this->otherServiceRPH;
    }

    /**
     * Sets a new otherServiceRPH
     *
     * A reference to a unique other service ID defined elsewhere in this message.
     *
     * @param string $otherServiceRPH
     * @return self
     */
    public function setOtherServiceRPH($otherServiceRPH)
    {
        $this->otherServiceRPH = $otherServiceRPH;

        return $this;
    }


}

