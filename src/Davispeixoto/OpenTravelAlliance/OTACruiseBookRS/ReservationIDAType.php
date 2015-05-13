<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseBookRS;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing ReservationIDAType
 */
class ReservationIDAType extends UniqueIDType
{

    /**
     * Specifies the booking status. Refer to OpenTravel Code list Status (STS).
     *
     * @property string $statusCode
     */
    private $statusCode = null;

    /**
     * Specifies the synchronization date and time of the record between two systems.
     *
     * @property \DateTime $lastModifyDateTime
     */
    private $lastModifyDateTime = null;

    /**
     * The date or date/time associated with the original reservation booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $bookedDate
     */
    private $bookedDate = null;

    /**
     * The date or date/time associated with the original reservation offer or quote.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $offerDate
     */
    private $offerDate = null;

    /**
     * Specifies the synchronization date of the record between GDS and CruiseLine.
     *
     * @property \DateTime $syncDateTime
     */
    private $syncDateTime = null;

    /**
     * Gets as statusCode
     *
     * Specifies the booking status. Refer to OpenTravel Code list Status (STS).
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * Specifies the booking status. Refer to OpenTravel Code list Status (STS).
     *
     * @param string $statusCode
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Gets as lastModifyDateTime
     *
     * Specifies the synchronization date and time of the record between two systems.
     *
     * @return \DateTime
     */
    public function getLastModifyDateTime()
    {
        return $this->lastModifyDateTime;
    }

    /**
     * Sets a new lastModifyDateTime
     *
     * Specifies the synchronization date and time of the record between two systems.
     *
     * @param \DateTime $lastModifyDateTime
     * @return self
     */
    public function setLastModifyDateTime(\DateTime $lastModifyDateTime)
    {
        $this->lastModifyDateTime = $lastModifyDateTime;

        return $this;
    }

    /**
     * Gets as bookedDate
     *
     * The date or date/time associated with the original reservation booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getBookedDate()
    {
        return $this->bookedDate;
    }

    /**
     * Sets a new bookedDate
     *
     * The date or date/time associated with the original reservation booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $bookedDate
     * @return self
     */
    public function setBookedDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $bookedDate)
    {
        $this->bookedDate = $bookedDate;

        return $this;
    }

    /**
     * Gets as offerDate
     *
     * The date or date/time associated with the original reservation offer or quote.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getOfferDate()
    {
        return $this->offerDate;
    }

    /**
     * Sets a new offerDate
     *
     * The date or date/time associated with the original reservation offer or quote.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $offerDate
     * @return self
     */
    public function setOfferDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $offerDate)
    {
        $this->offerDate = $offerDate;

        return $this;
    }

    /**
     * Gets as syncDateTime
     *
     * Specifies the synchronization date of the record between GDS and CruiseLine.
     *
     * @return \DateTime
     */
    public function getSyncDateTime()
    {
        return $this->syncDateTime;
    }

    /**
     * Sets a new syncDateTime
     *
     * Specifies the synchronization date of the record between GDS and CruiseLine.
     *
     * @param \DateTime $syncDateTime
     * @return self
     */
    public function setSyncDateTime(\DateTime $syncDateTime)
    {
        $this->syncDateTime = $syncDateTime;

        return $this;
    }


}

