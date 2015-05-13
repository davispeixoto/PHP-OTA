<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRS;

/**
 * Class representing QueuePNRAType
 */
class QueuePNRAType
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
     * The month and day of the queue on which the PNR is to be placed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrMonthDayType $date
     */
    private $date = null;

    /**
     * A number specifying a range of days (e.g., today plus 3, today plus 6) for the
     * queue on which the PNR is to be placed.
     *
     * @property integer $dateRangeNumber
     */
    private $dateRangeNumber = null;

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
     * Gets as date
     *
     * The month and day of the queue on which the PNR is to be placed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrMonthDayType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The month and day of the queue on which the PNR is to be placed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrMonthDayType $date
     * @return self
     */
    public function setDate(\Davispeixoto\OpenTravelAlliance\DateOrMonthDayType $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as dateRangeNumber
     *
     * A number specifying a range of days (e.g., today plus 3, today plus 6) for the
     * queue on which the PNR is to be placed.
     *
     * @return integer
     */
    public function getDateRangeNumber()
    {
        return $this->dateRangeNumber;
    }

    /**
     * Sets a new dateRangeNumber
     *
     * A number specifying a range of days (e.g., today plus 3, today plus 6) for the
     * queue on which the PNR is to be placed.
     *
     * @param integer $dateRangeNumber
     * @return self
     */
    public function setDateRangeNumber($dateRangeNumber)
    {
        $this->dateRangeNumber = $dateRangeNumber;

        return $this;
    }


}

