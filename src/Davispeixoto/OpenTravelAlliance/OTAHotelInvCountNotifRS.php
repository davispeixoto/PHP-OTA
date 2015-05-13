<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTAHotelInvCountNotifRS
 */
class OTAHotelInvCountNotifRS extends MessageAcknowledgementType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\InvCountType $inventories
     */
    private $inventories = null;

    /**
     * Gets as inventories
     *
     * @return \Davispeixoto\OpenTravelAlliance\InvCountType
     */
    public function getInventories()
    {
        return $this->inventories;
    }

    /**
     * Sets a new inventories
     *
     * @param \Davispeixoto\OpenTravelAlliance\InvCountType $inventories
     * @return self
     */
    public function setInventories(\Davispeixoto\OpenTravelAlliance\InvCountType $inventories)
    {
        $this->inventories = $inventories;

        return $this;
    }


}

