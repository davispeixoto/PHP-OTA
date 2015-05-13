<?php

namespace Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType;

/**
 * Class representing VehNotifReportAType
 */
class VehNotifReportAType
{

    /**
     * Vehicle reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\VehNotifReportAType\VehResAType
     * $vehRes
     */
    private $vehRes = null;

    /**
     * Gets as vehRes
     *
     * Vehicle reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\VehNotifReportAType\VehResAType
     */
    public function getVehRes()
    {
        return $this->vehRes;
    }

    /**
     * Sets a new vehRes
     *
     * Vehicle reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\VehNotifReportAType\VehResAType
     * $vehRes
     * @return self
     */
    public function setVehRes(
        \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\VehNotifReportAType\VehResAType $vehRes
    ) {
        $this->vehRes = $vehRes;

        return $this;
    }


}

