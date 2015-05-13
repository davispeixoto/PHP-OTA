<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType;

/**
 * Class representing ShuttleAType
 */
class ShuttleAType
{

    /**
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[]
     * $shuttleInfos
     */
    private $shuttleInfos = null;

    /**
     * A collection of operation schedules, used to define the hours of operation for
     * the shuttle services.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     * $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * Adds as shuttleInfo
     *
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType
     * $shuttleInfo
     */
    public function addToShuttleInfos(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType $shuttleInfo
    ) {
        $this->shuttleInfos[] = $shuttleInfo;

        return $this;
    }

    /**
     * isset shuttleInfos
     *
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShuttleInfos($index)
    {
        return isset($this->shuttleInfos[$index]);
    }

    /**
     * unset shuttleInfos
     *
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShuttleInfos($index)
    {
        unset($this->shuttleInfos[$index]);
    }

    /**
     * Gets as shuttleInfos
     *
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[]
     */
    public function getShuttleInfos()
    {
        return $this->shuttleInfos;
    }

    /**
     * Sets a new shuttleInfos
     *
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[]
     * $shuttleInfos
     * @return self
     */
    public function setShuttleInfos(array $shuttleInfos)
    {
        $this->shuttleInfos = $shuttleInfos;

        return $this;
    }

    /**
     * Gets as operationSchedules
     *
     * A collection of operation schedules, used to define the hours of operation for
     * the shuttle services.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     */
    public function getOperationSchedules()
    {
        return $this->operationSchedules;
    }

    /**
     * Sets a new operationSchedules
     *
     * A collection of operation schedules, used to define the hours of operation for
     * the shuttle services.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     * $operationSchedules
     * @return self
     */
    public function setOperationSchedules(\Davispeixoto\OpenTravelAlliance\OperationSchedulesType $operationSchedules)
    {
        $this->operationSchedules = $operationSchedules;

        return $this;
    }


}

