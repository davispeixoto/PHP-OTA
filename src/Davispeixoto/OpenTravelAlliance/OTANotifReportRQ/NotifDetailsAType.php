<?php

namespace Davispeixoto\OpenTravelAlliance\OTANotifReportRQ;

/**
 * Class representing NotifDetailsAType
 */
class NotifDetailsAType
{

    /**
     * Used to provide business details regarding processing of a previous hotel
     * message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType
     * $hotelNotifReport
     */
    private $hotelNotifReport = null;

    /**
     * Used to provide business details regarding processing of a previous vehicle
     * message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\VehNotifReportAType
     * $vehNotifReport
     */
    private $vehNotifReport = null;

    /**
     * Gets as hotelNotifReport
     *
     * Used to provide business details regarding processing of a previous hotel
     * message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType
     */
    public function getHotelNotifReport()
    {
        return $this->hotelNotifReport;
    }

    /**
     * Sets a new hotelNotifReport
     *
     * Used to provide business details regarding processing of a previous hotel
     * message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType
     * $hotelNotifReport
     * @return self
     */
    public function setHotelNotifReport(
        \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType $hotelNotifReport
    ) {
        $this->hotelNotifReport = $hotelNotifReport;

        return $this;
    }

    /**
     * Gets as vehNotifReport
     *
     * Used to provide business details regarding processing of a previous vehicle
     * message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\VehNotifReportAType
     */
    public function getVehNotifReport()
    {
        return $this->vehNotifReport;
    }

    /**
     * Sets a new vehNotifReport
     *
     * Used to provide business details regarding processing of a previous vehicle
     * message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\VehNotifReportAType
     * $vehNotifReport
     * @return self
     */
    public function setVehNotifReport(
        \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\VehNotifReportAType $vehNotifReport
    ) {
        $this->vehNotifReport = $vehNotifReport;

        return $this;
    }


}

