<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockNotifRQ\InvBlocksAType;

use Davispeixoto\OpenTravelAlliance\InvBlockType;

/**
 * Class representing InvBlockAType
 */
class InvBlockAType extends InvBlockType
{

    /**
     * The guarantee information to hold a reservation
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuaranteeType $guarantee
     */
    private $guarantee = null;

    /**
     * This is user specific information used for tracking and market segmentation
     * reporting.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockNotifRQ\InvBlocksAType\InvBlockAType\MarketCodeAType[]
     * $marketCode
     */
    private $marketCode = null;

    /**
     * Gets as guarantee
     *
     * The guarantee information to hold a reservation
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuaranteeType
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Sets a new guarantee
     *
     * The guarantee information to hold a reservation
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuaranteeType $guarantee
     * @return self
     */
    public function setGuarantee(\Davispeixoto\OpenTravelAlliance\GuaranteeType $guarantee)
    {
        $this->guarantee = $guarantee;

        return $this;
    }

    /**
     * Adds as marketCode
     *
     * This is user specific information used for tracking and market segmentation
     * reporting.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockNotifRQ\InvBlocksAType\InvBlockAType\MarketCodeAType
     * $marketCode
     */
    public function addToMarketCode(
        \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockNotifRQ\InvBlocksAType\InvBlockAType\MarketCodeAType $marketCode
    ) {
        $this->marketCode[] = $marketCode;

        return $this;
    }

    /**
     * isset marketCode
     *
     * This is user specific information used for tracking and market segmentation
     * reporting.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMarketCode($index)
    {
        return isset($this->marketCode[$index]);
    }

    /**
     * unset marketCode
     *
     * This is user specific information used for tracking and market segmentation
     * reporting.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMarketCode($index)
    {
        unset($this->marketCode[$index]);
    }

    /**
     * Gets as marketCode
     *
     * This is user specific information used for tracking and market segmentation
     * reporting.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockNotifRQ\InvBlocksAType\InvBlockAType\MarketCodeAType[]
     */
    public function getMarketCode()
    {
        return $this->marketCode;
    }

    /**
     * Sets a new marketCode
     *
     * This is user specific information used for tracking and market segmentation
     * reporting.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockNotifRQ\InvBlocksAType\InvBlockAType\MarketCodeAType[]
     * $marketCode
     * @return self
     */
    public function setMarketCode(array $marketCode)
    {
        $this->marketCode = $marketCode;

        return $this;
    }


}

