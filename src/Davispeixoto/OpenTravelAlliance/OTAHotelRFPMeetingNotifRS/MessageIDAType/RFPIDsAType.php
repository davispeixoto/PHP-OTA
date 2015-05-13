<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRFPMeetingNotifRS\MessageIDAType;

/**
 * Class representing RFPIDsAType
 */
class RFPIDsAType
{

    /**
     * Corresponds to the RFP_ID used in OTA_HotelRFP_RQ.xsd and
     * OTA_HotelRFP_NotifRQ.xsd. This is a UniqueID that is associated with an
     * individual RFP.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPMeetingNotifRS\MessageIDAType\RFPIDsAType\RFPIDAType[]
     * $rFPID
     */
    private $rFPID = null;

    /**
     * Adds as rFPID
     *
     * Corresponds to the RFP_ID used in OTA_HotelRFP_RQ.xsd and
     * OTA_HotelRFP_NotifRQ.xsd. This is a UniqueID that is associated with an
     * individual RFP.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPMeetingNotifRS\MessageIDAType\RFPIDsAType\RFPIDAType
     * $rFPID
     */
    public function addToRFPID(
        \Davispeixoto\OpenTravelAlliance\OTAHotelRFPMeetingNotifRS\MessageIDAType\RFPIDsAType\RFPIDAType $rFPID
    ) {
        $this->rFPID[] = $rFPID;

        return $this;
    }

    /**
     * isset rFPID
     *
     * Corresponds to the RFP_ID used in OTA_HotelRFP_RQ.xsd and
     * OTA_HotelRFP_NotifRQ.xsd. This is a UniqueID that is associated with an
     * individual RFP.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRFPID($index)
    {
        return isset($this->rFPID[$index]);
    }

    /**
     * unset rFPID
     *
     * Corresponds to the RFP_ID used in OTA_HotelRFP_RQ.xsd and
     * OTA_HotelRFP_NotifRQ.xsd. This is a UniqueID that is associated with an
     * individual RFP.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRFPID($index)
    {
        unset($this->rFPID[$index]);
    }

    /**
     * Gets as rFPID
     *
     * Corresponds to the RFP_ID used in OTA_HotelRFP_RQ.xsd and
     * OTA_HotelRFP_NotifRQ.xsd. This is a UniqueID that is associated with an
     * individual RFP.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPMeetingNotifRS\MessageIDAType\RFPIDsAType\RFPIDAType[]
     */
    public function getRFPID()
    {
        return $this->rFPID;
    }

    /**
     * Sets a new rFPID
     *
     * Corresponds to the RFP_ID used in OTA_HotelRFP_RQ.xsd and
     * OTA_HotelRFP_NotifRQ.xsd. This is a UniqueID that is associated with an
     * individual RFP.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPMeetingNotifRS\MessageIDAType\RFPIDsAType\RFPIDAType[]
     * $rFPID
     * @return self
     */
    public function setRFPID(array $rFPID)
    {
        $this->rFPID = $rFPID;

        return $this;
    }


}

