<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseBookingDocumentRS;

use Davispeixoto\OpenTravelAlliance\DocumentHandlingType;

/**
 * Class representing CruiseDocumentAType
 */
class CruiseDocumentAType extends DocumentHandlingType
{

    /**
     * Provides the status of the cruise booking document (e.g. "confirmed" or
     * "declined"). Refer to OpenTravel Code List Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Provides a short description of the reason for why the document has a particular
     * status.
     *
     * @property string $reason
     */
    private $reason = null;

    /**
     * Gets as status
     *
     * Provides the status of the cruise booking document (e.g. "confirmed" or
     * "declined"). Refer to OpenTravel Code List Status (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Provides the status of the cruise booking document (e.g. "confirmed" or
     * "declined"). Refer to OpenTravel Code List Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as reason
     *
     * Provides a short description of the reason for why the document has a particular
     * status.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Provides a short description of the reason for why the document has a particular
     * status.
     *
     * @param string $reason
     * @return self
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }


}

