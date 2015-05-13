<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType;

use Davispeixoto\OpenTravelAlliance\VehicleChargeType;

/**
 * Class representing MiscellaneousChargeAType
 */
class MiscellaneousChargeAType extends VehicleChargeType
{

    /**
     * Information on this one specific miscellaneous charge, including a description,
     * etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType $info
     */
    private $info = null;

    /**
     * Gets as info
     *
     * Information on this one specific miscellaneous charge, including a description,
     * etc.
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
     * Information on this one specific miscellaneous charge, including a description,
     * etc.
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

