<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedPackagesAType;

use Davispeixoto\OpenTravelAlliance\CruisePackageType;

/**
 * Class representing SelectedPackageAType
 */
class SelectedPackageAType extends CruisePackageType
{

    /**
     * Specifies the air travel information for the transfer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirInfoType $airInfo
     */
    private $airInfo = null;

    /**
     * Gets as airInfo
     *
     * Specifies the air travel information for the transfer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirInfoType
     */
    public function getAirInfo()
    {
        return $this->airInfo;
    }

    /**
     * Sets a new airInfo
     *
     * Specifies the air travel information for the transfer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirInfoType $airInfo
     * @return self
     */
    public function setAirInfo(\Davispeixoto\OpenTravelAlliance\AirInfoType $airInfo)
    {
        $this->airInfo = $airInfo;

        return $this;
    }


}

