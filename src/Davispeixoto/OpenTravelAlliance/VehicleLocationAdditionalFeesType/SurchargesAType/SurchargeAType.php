<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\SurchargesAType;

use Davispeixoto\OpenTravelAlliance\VehicleChargeType;

/**
 * Class representing SurchargeAType
 */
class SurchargeAType extends VehicleChargeType
{

    /**
     * Information on this one specific surcharge, including a description, etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType $info
     */
    private $info = null;

    /**
     * Gets as info
     *
     * Information on this one specific surcharge, including a description, etc.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * Information on this one specific surcharge, including a description, etc.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $info
     * @return self
     */
    public function setInfo(\Davispeixoto\OpenTravelAlliance\FormattedTextType $info)
    {
        $this->info = $info;

        return $this;
    }


}

