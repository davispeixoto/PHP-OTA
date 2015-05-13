<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType;

/**
 * Class representing PickupDropoffAType
 */
class PickupDropoffAType
{

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
     * Pickup and dropoff schedules for the tour/ activity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperationScheduleType $schedule
     */
    private $schedule = null;

    /**
     * Guideline pricing for pickup and dropoff services if pricing applies.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityChargeType $price
     */
    private $price = null;

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
     * Gets as schedule
     *
     * Pickup and dropoff schedules for the tour/ activity.
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
     * Pickup and dropoff schedules for the tour/ activity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperationScheduleType $schedule
     * @return self
     */
    public function setSchedule(\Davispeixoto\OpenTravelAlliance\OperationScheduleType $schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Gets as price
     *
     * Guideline pricing for pickup and dropoff services if pricing applies.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityChargeType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * Guideline pricing for pickup and dropoff services if pricing applies.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityChargeType $price
     * @return self
     */
    public function setPrice(\Davispeixoto\OpenTravelAlliance\TourActivityChargeType $price)
    {
        $this->price = $price;

        return $this;
    }


}

