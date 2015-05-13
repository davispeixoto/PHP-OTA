<?php

namespace Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType;

/**
 * Class representing BreakoutSessionsAType
 */
class BreakoutSessionsAType
{

    /**
     * The greatest number of breakout sessions running concurrently.
     *
     * @property integer $largestConcurrentQuantity
     */
    private $largestConcurrentQuantity = null;

    /**
     * The greatest number of breakout sessions during a single day.
     *
     * @property integer $largestDailyQuantity
     */
    private $largestDailyQuantity = null;

    /**
     * Number of seats for which breakout sessions are typically set.
     *
     * @property integer $typicalSeatQuantity
     */
    private $typicalSeatQuantity = null;

    /**
     * Indicates the typical arrangement of the breakout space (e.g. conference or
     * banquet style) for this event. Refer to OpenTravel Code List Meeting Room Format
     * Code (MRF).
     *
     * @property string $typicalRoomSetupCode
     */
    private $typicalRoomSetupCode = null;

    /**
     * Gets as largestConcurrentQuantity
     *
     * The greatest number of breakout sessions running concurrently.
     *
     * @return integer
     */
    public function getLargestConcurrentQuantity()
    {
        return $this->largestConcurrentQuantity;
    }

    /**
     * Sets a new largestConcurrentQuantity
     *
     * The greatest number of breakout sessions running concurrently.
     *
     * @param integer $largestConcurrentQuantity
     * @return self
     */
    public function setLargestConcurrentQuantity($largestConcurrentQuantity)
    {
        $this->largestConcurrentQuantity = $largestConcurrentQuantity;

        return $this;
    }

    /**
     * Gets as largestDailyQuantity
     *
     * The greatest number of breakout sessions during a single day.
     *
     * @return integer
     */
    public function getLargestDailyQuantity()
    {
        return $this->largestDailyQuantity;
    }

    /**
     * Sets a new largestDailyQuantity
     *
     * The greatest number of breakout sessions during a single day.
     *
     * @param integer $largestDailyQuantity
     * @return self
     */
    public function setLargestDailyQuantity($largestDailyQuantity)
    {
        $this->largestDailyQuantity = $largestDailyQuantity;

        return $this;
    }

    /**
     * Gets as typicalSeatQuantity
     *
     * Number of seats for which breakout sessions are typically set.
     *
     * @return integer
     */
    public function getTypicalSeatQuantity()
    {
        return $this->typicalSeatQuantity;
    }

    /**
     * Sets a new typicalSeatQuantity
     *
     * Number of seats for which breakout sessions are typically set.
     *
     * @param integer $typicalSeatQuantity
     * @return self
     */
    public function setTypicalSeatQuantity($typicalSeatQuantity)
    {
        $this->typicalSeatQuantity = $typicalSeatQuantity;

        return $this;
    }

    /**
     * Gets as typicalRoomSetupCode
     *
     * Indicates the typical arrangement of the breakout space (e.g. conference or
     * banquet style) for this event. Refer to OpenTravel Code List Meeting Room Format
     * Code (MRF).
     *
     * @return string
     */
    public function getTypicalRoomSetupCode()
    {
        return $this->typicalRoomSetupCode;
    }

    /**
     * Sets a new typicalRoomSetupCode
     *
     * Indicates the typical arrangement of the breakout space (e.g. conference or
     * banquet style) for this event. Refer to OpenTravel Code List Meeting Room Format
     * Code (MRF).
     *
     * @param string $typicalRoomSetupCode
     * @return self
     */
    public function setTypicalRoomSetupCode($typicalRoomSetupCode)
    {
        $this->typicalRoomSetupCode = $typicalRoomSetupCode;

        return $this;
    }


}

