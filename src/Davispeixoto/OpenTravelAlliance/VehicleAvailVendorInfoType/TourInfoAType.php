<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAvailVendorInfoType;

use Davispeixoto\OpenTravelAlliance\VehicleTourInfoType;

/**
 * Class representing TourInfoAType
 */
class TourInfoAType extends VehicleTourInfoType
{

    /**
     * A reference placeholder for this tour info.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as rPH
     *
     * A reference placeholder for this tour info.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A reference placeholder for this tour info.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }


}

