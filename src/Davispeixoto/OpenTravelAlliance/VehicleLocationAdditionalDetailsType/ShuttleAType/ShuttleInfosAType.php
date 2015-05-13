<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType;

/**
 * Class representing ShuttleInfosAType
 */
class ShuttleInfosAType
{

    /**
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[]
     * $shuttleInfo
     */
    private $shuttleInfo = null;

    /**
     * Adds as shuttleInfo
     *
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType
     * $shuttleInfo
     */
    public function addToShuttleInfo(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType $shuttleInfo
    ) {
        $this->shuttleInfo[] = $shuttleInfo;

        return $this;
    }

    /**
     * isset shuttleInfo
     *
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShuttleInfo($index)
    {
        return isset($this->shuttleInfo[$index]);
    }

    /**
     * unset shuttleInfo
     *
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShuttleInfo($index)
    {
        unset($this->shuttleInfo[$index]);
    }

    /**
     * Gets as shuttleInfo
     *
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[]
     */
    public function getShuttleInfo()
    {
        return $this->shuttleInfo;
    }

    /**
     * Sets a new shuttleInfo
     *
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[]
     * $shuttleInfo
     * @return self
     */
    public function setShuttleInfo(array $shuttleInfo)
    {
        $this->shuttleInfo = $shuttleInfo;

        return $this;
    }


}

