<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseBookingDocumentRQ;

use Davispeixoto\OpenTravelAlliance\DocumentHandlingType;

/**
 * Class representing CruiseDocumentAType
 */
class CruiseDocumentAType extends DocumentHandlingType
{

    /**
     * Provides the address details for a recipient. The address is only sent when
     * different than that of the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType $recipientInfo
     */
    private $recipientInfo = null;

    /**
     * Gets as recipientInfo
     *
     * Provides the address details for a recipient. The address is only sent when
     * different than that of the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType
     */
    public function getRecipientInfo()
    {
        return $this->recipientInfo;
    }

    /**
     * Sets a new recipientInfo
     *
     * Provides the address details for a recipient. The address is only sent when
     * different than that of the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $recipientInfo
     * @return self
     */
    public function setRecipientInfo(\Davispeixoto\OpenTravelAlliance\ContactPersonType $recipientInfo)
    {
        $this->recipientInfo = $recipientInfo;

        return $this;
    }


}

