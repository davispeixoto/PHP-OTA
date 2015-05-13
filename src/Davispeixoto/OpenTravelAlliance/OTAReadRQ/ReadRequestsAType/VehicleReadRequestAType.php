<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType;

use Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQCoreType;

/**
 * Class representing VehicleReadRequestAType
 */
class VehicleReadRequestAType extends VehicleRetrieveResRQCoreType
{

    /**
     * Identifies the core and supplemental information associated with the request for
     * the retrieval of a rental vehicle reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQAdditionalInfoType
     * $vehRetResRQInfo
     */
    private $vehRetResRQInfo = null;

    /**
     * Gets as vehRetResRQInfo
     *
     * Identifies the core and supplemental information associated with the request for
     * the retrieval of a rental vehicle reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQAdditionalInfoType
     */
    public function getVehRetResRQInfo()
    {
        return $this->vehRetResRQInfo;
    }

    /**
     * Sets a new vehRetResRQInfo
     *
     * Identifies the core and supplemental information associated with the request for
     * the retrieval of a rental vehicle reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQAdditionalInfoType
     * $vehRetResRQInfo
     * @return self
     */
    public function setVehRetResRQInfo(
        \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQAdditionalInfoType $vehRetResRQInfo
    ) {
        $this->vehRetResRQInfo = $vehRetResRQInfo;

        return $this;
    }


}

