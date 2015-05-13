<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VehPrefsAType;

use Davispeixoto\OpenTravelAlliance\VehiclePrefType;

/**
 * Class representing VehPrefAType
 */
class VehPrefAType extends VehiclePrefType
{

    /**
     * When true, a higher class of vehicle than those specified, may be returned.
     *
     * @property boolean $upSellInd
     */
    private $upSellInd = null;

    /**
     * Gets as upSellInd
     *
     * When true, a higher class of vehicle than those specified, may be returned.
     *
     * @return boolean
     */
    public function getUpSellInd()
    {
        return $this->upSellInd;
    }

    /**
     * Sets a new upSellInd
     *
     * When true, a higher class of vehicle than those specified, may be returned.
     *
     * @param boolean $upSellInd
     * @return self
     */
    public function setUpSellInd($upSellInd)
    {
        $this->upSellInd = $upSellInd;

        return $this;
    }


}

