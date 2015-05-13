<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTANotifReportRQ
 */
class OTANotifReportRQ extends MessageAcknowledgementType
{

    /**
     * A container used to specify a certain set of previous messages.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType
     * $notifDetails
     */
    private $notifDetails = null;

    /**
     * Gets as notifDetails
     *
     * A container used to specify a certain set of previous messages.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType
     */
    public function getNotifDetails()
    {
        return $this->notifDetails;
    }

    /**
     * Sets a new notifDetails
     *
     * A container used to specify a certain set of previous messages.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType
     * $notifDetails
     * @return self
     */
    public function setNotifDetails(\Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType $notifDetails)
    {
        $this->notifDetails = $notifDetails;

        return $this;
    }


}

