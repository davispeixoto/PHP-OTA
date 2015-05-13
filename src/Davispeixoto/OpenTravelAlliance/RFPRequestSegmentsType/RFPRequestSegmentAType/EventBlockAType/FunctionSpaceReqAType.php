<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType;

/**
 * Class representing FunctionSpaceReqAType
 */
class FunctionSpaceReqAType
{

    /**
     * The minimum size required for the largest function space.
     *
     * @property integer $largestRoomSpace
     */
    private $largestRoomSpace = null;

    /**
     * The code for the format of the meeting that will take place in the largest room
     * space (as denoted in the LargestRoomSpaceAttribute), such as U-shape, banquet,
     * conference style, etc. Refer to OpenTravel Code List Meeting Room Format Code
     * (MRF).
     *
     * @property string $meetingRoomFormatCode
     */
    private $meetingRoomFormatCode = null;

    /**
     * Describes the minimum occupancy required for the largest function based on the
     * MeetingRoomFormatCode. APEX added.
     *
     * @property integer $minOccupancy
     */
    private $minOccupancy = null;

    /**
     * The minimum height required for the ceiling in the largest function space. APEX
     * added.
     *
     * @property float $ceilingHeight
     */
    private $ceilingHeight = null;

    /**
     * This is the standard unit of measure for the largest function space required
     * (e.g. it could be generic such as metric or imperial or specific such as inches,
     * feet, yards, miles, millimeters, centimeters, meters, kilometers).
     *
     * @property string $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * Minimum number of breakout rooms required simultaneously.
     *
     * @property integer $minBreakoutRoomQuantity
     */
    private $minBreakoutRoomQuantity = null;

    /**
     * Gets as largestRoomSpace
     *
     * The minimum size required for the largest function space.
     *
     * @return integer
     */
    public function getLargestRoomSpace()
    {
        return $this->largestRoomSpace;
    }

    /**
     * Sets a new largestRoomSpace
     *
     * The minimum size required for the largest function space.
     *
     * @param integer $largestRoomSpace
     * @return self
     */
    public function setLargestRoomSpace($largestRoomSpace)
    {
        $this->largestRoomSpace = $largestRoomSpace;

        return $this;
    }

    /**
     * Gets as meetingRoomFormatCode
     *
     * The code for the format of the meeting that will take place in the largest room
     * space (as denoted in the LargestRoomSpaceAttribute), such as U-shape, banquet,
     * conference style, etc. Refer to OpenTravel Code List Meeting Room Format Code
     * (MRF).
     *
     * @return string
     */
    public function getMeetingRoomFormatCode()
    {
        return $this->meetingRoomFormatCode;
    }

    /**
     * Sets a new meetingRoomFormatCode
     *
     * The code for the format of the meeting that will take place in the largest room
     * space (as denoted in the LargestRoomSpaceAttribute), such as U-shape, banquet,
     * conference style, etc. Refer to OpenTravel Code List Meeting Room Format Code
     * (MRF).
     *
     * @param string $meetingRoomFormatCode
     * @return self
     */
    public function setMeetingRoomFormatCode($meetingRoomFormatCode)
    {
        $this->meetingRoomFormatCode = $meetingRoomFormatCode;

        return $this;
    }

    /**
     * Gets as minOccupancy
     *
     * Describes the minimum occupancy required for the largest function based on the
     * MeetingRoomFormatCode. APEX added.
     *
     * @return integer
     */
    public function getMinOccupancy()
    {
        return $this->minOccupancy;
    }

    /**
     * Sets a new minOccupancy
     *
     * Describes the minimum occupancy required for the largest function based on the
     * MeetingRoomFormatCode. APEX added.
     *
     * @param integer $minOccupancy
     * @return self
     */
    public function setMinOccupancy($minOccupancy)
    {
        $this->minOccupancy = $minOccupancy;

        return $this;
    }

    /**
     * Gets as ceilingHeight
     *
     * The minimum height required for the ceiling in the largest function space. APEX
     * added.
     *
     * @return float
     */
    public function getCeilingHeight()
    {
        return $this->ceilingHeight;
    }

    /**
     * Sets a new ceilingHeight
     *
     * The minimum height required for the ceiling in the largest function space. APEX
     * added.
     *
     * @param float $ceilingHeight
     * @return self
     */
    public function setCeilingHeight($ceilingHeight)
    {
        $this->ceilingHeight = $ceilingHeight;

        return $this;
    }

    /**
     * Gets as unitOfMeasure
     *
     * This is the standard unit of measure for the largest function space required
     * (e.g. it could be generic such as metric or imperial or specific such as inches,
     * feet, yards, miles, millimeters, centimeters, meters, kilometers).
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure
     *
     * This is the standard unit of measure for the largest function space required
     * (e.g. it could be generic such as metric or imperial or specific such as inches,
     * feet, yards, miles, millimeters, centimeters, meters, kilometers).
     *
     * @param string $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;

        return $this;
    }

    /**
     * Gets as minBreakoutRoomQuantity
     *
     * Minimum number of breakout rooms required simultaneously.
     *
     * @return integer
     */
    public function getMinBreakoutRoomQuantity()
    {
        return $this->minBreakoutRoomQuantity;
    }

    /**
     * Sets a new minBreakoutRoomQuantity
     *
     * Minimum number of breakout rooms required simultaneously.
     *
     * @param integer $minBreakoutRoomQuantity
     * @return self
     */
    public function setMinBreakoutRoomQuantity($minBreakoutRoomQuantity)
    {
        $this->minBreakoutRoomQuantity = $minBreakoutRoomQuantity;

        return $this;
    }


}

