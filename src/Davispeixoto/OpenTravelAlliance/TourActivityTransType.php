<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityTransType
 *
 * Detailed pickup and drop off information for the tour/activity.
 * XSD Type: TourActivityTransType
 */
class TourActivityTransType
{

    /**
     * The date and time for the pickup or dropoff.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateTime
     */
    private $dateTime = null;

    /**
     * The name of the pickup/ dropoff location.
     *
     * @property string $locationName
     */
    private $locationName = null;

    /**
     * Directions to the pickup/dropoff location.
     *
     * @property string $directions
     */
    private $directions = null;

    /**
     * The specific meeting location, e.g. "Front Desk".
     *
     * @property string $meetingLocation
     */
    private $meetingLocation = null;

    /**
     * Other instructions pertaining to the pickup/ dropoff.
     *
     * @property string $otherInfo
     */
    private $otherInfo = null;

    /**
     * If true, this is pickup information.
     *
     * @property boolean $pickupInd
     */
    private $pickupInd = null;

    /**
     * If true, this is dropoff information.
     *
     * @property boolean $dropoffInd
     */
    private $dropoffInd = null;

    /**
     * Charge information there is a fee for pickup and/or dropoff.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityChargeType $charges
     */
    private $charges = null;

    /**
     * Pickup and dropoff schedules for the available tour/ activity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperationScheduleType $schedule
     */
    private $schedule = null;

    /**
     * Gets as dateTime
     *
     * The date and time for the pickup or dropoff.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Sets a new dateTime
     *
     * The date and time for the pickup or dropoff.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateTime
     * @return self
     */
    public function setDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Gets as locationName
     *
     * The name of the pickup/ dropoff location.
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * Sets a new locationName
     *
     * The name of the pickup/ dropoff location.
     *
     * @param string $locationName
     * @return self
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;

        return $this;
    }

    /**
     * Gets as directions
     *
     * Directions to the pickup/dropoff location.
     *
     * @return string
     */
    public function getDirections()
    {
        return $this->directions;
    }

    /**
     * Sets a new directions
     *
     * Directions to the pickup/dropoff location.
     *
     * @param string $directions
     * @return self
     */
    public function setDirections($directions)
    {
        $this->directions = $directions;

        return $this;
    }

    /**
     * Gets as meetingLocation
     *
     * The specific meeting location, e.g. "Front Desk".
     *
     * @return string
     */
    public function getMeetingLocation()
    {
        return $this->meetingLocation;
    }

    /**
     * Sets a new meetingLocation
     *
     * The specific meeting location, e.g. "Front Desk".
     *
     * @param string $meetingLocation
     * @return self
     */
    public function setMeetingLocation($meetingLocation)
    {
        $this->meetingLocation = $meetingLocation;

        return $this;
    }

    /**
     * Gets as otherInfo
     *
     * Other instructions pertaining to the pickup/ dropoff.
     *
     * @return string
     */
    public function getOtherInfo()
    {
        return $this->otherInfo;
    }

    /**
     * Sets a new otherInfo
     *
     * Other instructions pertaining to the pickup/ dropoff.
     *
     * @param string $otherInfo
     * @return self
     */
    public function setOtherInfo($otherInfo)
    {
        $this->otherInfo = $otherInfo;

        return $this;
    }

    /**
     * Gets as pickupInd
     *
     * If true, this is pickup information.
     *
     * @return boolean
     */
    public function getPickupInd()
    {
        return $this->pickupInd;
    }

    /**
     * Sets a new pickupInd
     *
     * If true, this is pickup information.
     *
     * @param boolean $pickupInd
     * @return self
     */
    public function setPickupInd($pickupInd)
    {
        $this->pickupInd = $pickupInd;

        return $this;
    }

    /**
     * Gets as dropoffInd
     *
     * If true, this is dropoff information.
     *
     * @return boolean
     */
    public function getDropoffInd()
    {
        return $this->dropoffInd;
    }

    /**
     * Sets a new dropoffInd
     *
     * If true, this is dropoff information.
     *
     * @param boolean $dropoffInd
     * @return self
     */
    public function setDropoffInd($dropoffInd)
    {
        $this->dropoffInd = $dropoffInd;

        return $this;
    }

    /**
     * Gets as charges
     *
     * Charge information there is a fee for pickup and/or dropoff.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityChargeType
     */
    public function getCharges()
    {
        return $this->charges;
    }

    /**
     * Sets a new charges
     *
     * Charge information there is a fee for pickup and/or dropoff.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityChargeType $charges
     * @return self
     */
    public function setCharges(\Davispeixoto\OpenTravelAlliance\TourActivityChargeType $charges)
    {
        $this->charges = $charges;

        return $this;
    }

    /**
     * Gets as schedule
     *
     * Pickup and dropoff schedules for the available tour/ activity.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OperationScheduleType
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * Pickup and dropoff schedules for the available tour/ activity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperationScheduleType $schedule
     * @return self
     */
    public function setSchedule(\Davispeixoto\OpenTravelAlliance\OperationScheduleType $schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }


}

