<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityTransRequestType
 *
 * Pickup and drop off requirement information for the tour/activity.
 * XSD Type: TourActivityTransRequestType
 */
class TourActivityTransRequestType
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
     * Other instructions pertaining to the pickup/ dropoff.
     *
     * @property string $otherInfo
     */
    private $otherInfo = null;

    /**
     * The quantity of persons to be picked up or dropped off.
     *
     * @property integer $personQty
     */
    private $personQty = null;

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
     * Gets as personQty
     *
     * The quantity of persons to be picked up or dropped off.
     *
     * @return integer
     */
    public function getPersonQty()
    {
        return $this->personQty;
    }

    /**
     * Sets a new personQty
     *
     * The quantity of persons to be picked up or dropped off.
     *
     * @param integer $personQty
     * @return self
     */
    public function setPersonQty($personQty)
    {
        $this->personQty = $personQty;

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


}

