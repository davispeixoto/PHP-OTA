<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType;

/**
 * Class representing QueueItemsAType
 */
class QueueItemsAType
{

    /**
     * An ATA/IATA airport/city code, office code, pseudo city code, etc. of the queue
     * to be returned. If this is omitted, the pseudo city code contained in the point
     * of sale information should be used.
     *
     * @property string $pseudoCityCode
     */
    private $pseudoCityCode = null;

    /**
     * Identifies the airline and/or system where the queue resides. If this is
     * omitted, the airline and/or system code (AirlineVendorID) contained in the point
     * of sale information should be used.
     *
     * @property string $systemCode
     */
    private $systemCode = null;

    /**
     * An identifier specifying the requested queue on which the booking file resides
     * in the system.
     *
     * @property string $queueNumber
     */
    private $queueNumber = null;

    /**
     * Condensed information about the queued booking file.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\QueueItemsAType\QueueItemAType[]
     * $queueItem
     */
    private $queueItem = null;

    /**
     * Gets as pseudoCityCode
     *
     * An ATA/IATA airport/city code, office code, pseudo city code, etc. of the queue
     * to be returned. If this is omitted, the pseudo city code contained in the point
     * of sale information should be used.
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
     * An ATA/IATA airport/city code, office code, pseudo city code, etc. of the queue
     * to be returned. If this is omitted, the pseudo city code contained in the point
     * of sale information should be used.
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
     * Gets as queueNumber
     *
     * An identifier specifying the requested queue on which the booking file resides
     * in the system.
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
     * An identifier specifying the requested queue on which the booking file resides
     * in the system.
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
     * Adds as queueItem
     *
     * Condensed information about the queued booking file.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\QueueItemsAType\QueueItemAType
     * $queueItem
     */
    public function addToQueueItem(
        \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\QueueItemsAType\QueueItemAType $queueItem
    ) {
        $this->queueItem[] = $queueItem;

        return $this;
    }

    /**
     * isset queueItem
     *
     * Condensed information about the queued booking file.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQueueItem($index)
    {
        return isset($this->queueItem[$index]);
    }

    /**
     * unset queueItem
     *
     * Condensed information about the queued booking file.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQueueItem($index)
    {
        unset($this->queueItem[$index]);
    }

    /**
     * Gets as queueItem
     *
     * Condensed information about the queued booking file.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\QueueItemsAType\QueueItemAType[]
     */
    public function getQueueItem()
    {
        return $this->queueItem;
    }

    /**
     * Sets a new queueItem
     *
     * Condensed information about the queued booking file.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\QueueItemsAType\QueueItemAType[]
     * $queueItem
     * @return self
     */
    public function setQueueItem(array $queueItem)
    {
        $this->queueItem = $queueItem;

        return $this;
    }


}

