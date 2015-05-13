<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRFPMeetingNotifRS;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing MessageIDAType
 */
class MessageIDAType extends UniqueIDType
{

    /**
     * A collection of RFP_ID.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPMeetingNotifRS\MessageIDAType\RFPIDsAType\RFPIDAType[]
     * $rFPIDs
     */
    private $rFPIDs = null;

    /**
     * Adds as rFPID
     *
     * A collection of RFP_ID.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPMeetingNotifRS\MessageIDAType\RFPIDsAType\RFPIDAType
     * $rFPID
     */
    public function addToRFPIDs(
        \Davispeixoto\OpenTravelAlliance\OTAHotelRFPMeetingNotifRS\MessageIDAType\RFPIDsAType\RFPIDAType $rFPID
    ) {
        $this->rFPIDs[] = $rFPID;

        return $this;
    }

    /**
     * isset rFPIDs
     *
     * A collection of RFP_ID.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRFPIDs($index)
    {
        return isset($this->rFPIDs[$index]);
    }

    /**
     * unset rFPIDs
     *
     * A collection of RFP_ID.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRFPIDs($index)
    {
        unset($this->rFPIDs[$index]);
    }

    /**
     * Gets as rFPIDs
     *
     * A collection of RFP_ID.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPMeetingNotifRS\MessageIDAType\RFPIDsAType\RFPIDAType[]
     */
    public function getRFPIDs()
    {
        return $this->rFPIDs;
    }

    /**
     * Sets a new rFPIDs
     *
     * A collection of RFP_ID.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPMeetingNotifRS\MessageIDAType\RFPIDsAType\RFPIDAType[]
     * $rFPIDs
     * @return self
     */
    public function setRFPIDs(array $rFPIDs)
    {
        $this->rFPIDs = $rFPIDs;

        return $this;
    }


}

