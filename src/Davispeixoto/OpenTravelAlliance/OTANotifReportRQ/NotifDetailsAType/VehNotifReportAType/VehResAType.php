<?php

namespace Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\VehNotifReportAType;

/**
 * Class representing VehResAType
 */
class VehResAType
{

    /**
     * Identifies the common, or core, information associated with the request
     * providing information on the reservation of a rental vehicle.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\VehNotifReportAType\VehResAType\VehNotifReportRQCoreAType
     * $vehNotifReportRQCore
     */
    private $vehNotifReportRQCore = null;

    /**
     * Identifies the supplemental information associated with the request providing
     * information on the reservation of a rental vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleResRSAdditionalInfoType
     * $vehNotifReportRQInfo
     */
    private $vehNotifReportRQInfo = null;

    /**
     * Gets as vehNotifReportRQCore
     *
     * Identifies the common, or core, information associated with the request
     * providing information on the reservation of a rental vehicle.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\VehNotifReportAType\VehResAType\VehNotifReportRQCoreAType
     */
    public function getVehNotifReportRQCore()
    {
        return $this->vehNotifReportRQCore;
    }

    /**
     * Sets a new vehNotifReportRQCore
     *
     * Identifies the common, or core, information associated with the request
     * providing information on the reservation of a rental vehicle.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\VehNotifReportAType\VehResAType\VehNotifReportRQCoreAType
     * $vehNotifReportRQCore
     * @return self
     */
    public function setVehNotifReportRQCore(
        \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\VehNotifReportAType\VehResAType\VehNotifReportRQCoreAType $vehNotifReportRQCore
    ) {
        $this->vehNotifReportRQCore = $vehNotifReportRQCore;

        return $this;
    }

    /**
     * Gets as vehNotifReportRQInfo
     *
     * Identifies the supplemental information associated with the request providing
     * information on the reservation of a rental vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleResRSAdditionalInfoType
     */
    public function getVehNotifReportRQInfo()
    {
        return $this->vehNotifReportRQInfo;
    }

    /**
     * Sets a new vehNotifReportRQInfo
     *
     * Identifies the supplemental information associated with the request providing
     * information on the reservation of a rental vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleResRSAdditionalInfoType
     * $vehNotifReportRQInfo
     * @return self
     */
    public function setVehNotifReportRQInfo(
        \Davispeixoto\OpenTravelAlliance\VehicleResRSAdditionalInfoType $vehNotifReportRQInfo
    ) {
        $this->vehNotifReportRQInfo = $vehNotifReportRQInfo;

        return $this;
    }


}

