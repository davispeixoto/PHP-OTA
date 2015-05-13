<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\QueueItemsAType;

/**
 * Class representing QueueItemAType
 */
class QueueItemAType
{

    /**
     * The ATA/ IATA airport/city code, office code, pseudo city code, etc. of the
     * queue.
     *
     * @property string $pseudoCityCode
     */
    private $pseudoCityCode = null;

    /**
     * An identifier specifying the queue on which the booking file resides in the
     * system.
     *
     * @property string $queueNumber
     */
    private $queueNumber = null;

    /**
     * The category of the queue.
     *
     * @property string $queueCategory
     */
    private $queueCategory = null;

    /**
     * Identifies the airline and/or system where the queue resides. If this is
     * omitted, the airline and/or system code (AirlineVendorID) contained in the point
     * of sale information should be used.
     *
     * @property string $systemCode
     */
    private $systemCode = null;

    /**
     * An additional identifier to determine the exact queue on which a reservation
     * record should be placed.
     *
     * @property string $queueID
     */
    private $queueID = null;

    /**
     * Identifies the reason and method for queuing.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\QueueItemsAType\QueueItemAType\ReasonAType
     * $reason
     */
    private $reason = null;

    /**
     * This is the identifier stored on the booking system, also referred to as a PNR
     * locator, confirmation number or reservation number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * Gets as pseudoCityCode
     *
     * The ATA/ IATA airport/city code, office code, pseudo city code, etc. of the
     * queue.
     *
     * @return string
     */
    public function getPseudoCityCode()
    {
        return $this->pseudoCityCode;
    }

    /**
     * Sets a new pseudoCityCode
     *
     * The ATA/ IATA airport/city code, office code, pseudo city code, etc. of the
     * queue.
     *
     * @param string $pseudoCityCode
     * @return self
     */
    public function setPseudoCityCode($pseudoCityCode)
    {
        $this->pseudoCityCode = $pseudoCityCode;

        return $this;
    }

    /**
     * Gets as queueNumber
     *
     * An identifier specifying the queue on which the booking file resides in the
     * system.
     *
     * @return string
     */
    public function getQueueNumber()
    {
        return $this->queueNumber;
    }

    /**
     * Sets a new queueNumber
     *
     * An identifier specifying the queue on which the booking file resides in the
     * system.
     *
     * @param string $queueNumber
     * @return self
     */
    public function setQueueNumber($queueNumber)
    {
        $this->queueNumber = $queueNumber;

        return $this;
    }

    /**
     * Gets as queueCategory
     *
     * The category of the queue.
     *
     * @return string
     */
    public function getQueueCategory()
    {
        return $this->queueCategory;
    }

    /**
     * Sets a new queueCategory
     *
     * The category of the queue.
     *
     * @param string $queueCategory
     * @return self
     */
    public function setQueueCategory($queueCategory)
    {
        $this->queueCategory = $queueCategory;

        return $this;
    }

    /**
     * Gets as systemCode
     *
     * Identifies the airline and/or system where the queue resides. If this is
     * omitted, the airline and/or system code (AirlineVendorID) contained in the point
     * of sale information should be used.
     *
     * @return string
     */
    public function getSystemCode()
    {
        return $this->systemCode;
    }

    /**
     * Sets a new systemCode
     *
     * Identifies the airline and/or system where the queue resides. If this is
     * omitted, the airline and/or system code (AirlineVendorID) contained in the point
     * of sale information should be used.
     *
     * @param string $systemCode
     * @return self
     */
    public function setSystemCode($systemCode)
    {
        $this->systemCode = $systemCode;

        return $this;
    }

    /**
     * Gets as queueID
     *
     * An additional identifier to determine the exact queue on which a reservation
     * record should be placed.
     *
     * @return string
     */
    public function getQueueID()
    {
        return $this->queueID;
    }

    /**
     * Sets a new queueID
     *
     * An additional identifier to determine the exact queue on which a reservation
     * record should be placed.
     *
     * @param string $queueID
     * @return self
     */
    public function setQueueID($queueID)
    {
        $this->queueID = $queueID;

        return $this;
    }

    /**
     * Gets as reason
     *
     * Identifies the reason and method for queuing.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\QueueItemsAType\QueueItemAType\ReasonAType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Identifies the reason and method for queuing.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\QueueItemsAType\QueueItemAType\ReasonAType
     * $reason
     * @return self
     */
    public function setReason(
        \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\QueueItemsAType\QueueItemAType\ReasonAType $reason
    ) {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Gets as bookingReferenceID
     *
     * This is the identifier stored on the booking system, also referred to as a PNR
     * locator, confirmation number or reservation number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * This is the identifier stored on the booking system, also referred to as a PNR
     * locator, confirmation number or reservation number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID)
    {
        $this->bookingReferenceID = $bookingReferenceID;

        return $this;
    }


}

