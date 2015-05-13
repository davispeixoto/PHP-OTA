<?php

namespace Davispeixoto\OpenTravelAlliance\MeetingRoomCapacityType;

/**
 * Class representing OccupancyAType
 */
class OccupancyAType
{

    /**
     * The minimum number of people in this meeting room.
     *
     * @property integer $minOccupancy
     */
    private $minOccupancy = null;

    /**
     * The maximum number of people in this meeting room.
     *
     * @property integer $maxOccupancy
     */
    private $maxOccupancy = null;

    /**
     * The standard number of people in this meeting room.
     *
     * @property integer $standardOccupancy
     */
    private $standardOccupancy = null;

    /**
     * The minimum room charge for this meeting room such as room rental fee.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType $minRoomCharge
     */
    private $minRoomCharge = null;

    /**
     * Gets as minOccupancy
     *
     * The minimum number of people in this meeting room.
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
     * The minimum number of people in this meeting room.
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
     * Gets as maxOccupancy
     *
     * The maximum number of people in this meeting room.
     *
     * @return integer
     */
    public function getMaxOccupancy()
    {
        return $this->maxOccupancy;
    }

    /**
     * Sets a new maxOccupancy
     *
     * The maximum number of people in this meeting room.
     *
     * @param integer $maxOccupancy
     * @return self
     */
    public function setMaxOccupancy($maxOccupancy)
    {
        $this->maxOccupancy = $maxOccupancy;

        return $this;
    }

    /**
     * Gets as standardOccupancy
     *
     * The standard number of people in this meeting room.
     *
     * @return integer
     */
    public function getStandardOccupancy()
    {
        return $this->standardOccupancy;
    }

    /**
     * Sets a new standardOccupancy
     *
     * The standard number of people in this meeting room.
     *
     * @param integer $standardOccupancy
     * @return self
     */
    public function setStandardOccupancy($standardOccupancy)
    {
        $this->standardOccupancy = $standardOccupancy;

        return $this;
    }

    /**
     * Gets as minRoomCharge
     *
     * The minimum room charge for this meeting room such as room rental fee.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType
     */
    public function getMinRoomCharge()
    {
        return $this->minRoomCharge;
    }

    /**
     * Sets a new minRoomCharge
     *
     * The minimum room charge for this meeting room such as room rental fee.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $minRoomCharge
     * @return self
     */
    public function setMinRoomCharge(\Davispeixoto\OpenTravelAlliance\FeeType $minRoomCharge)
    {
        $this->minRoomCharge = $minRoomCharge;

        return $this;
    }


}

