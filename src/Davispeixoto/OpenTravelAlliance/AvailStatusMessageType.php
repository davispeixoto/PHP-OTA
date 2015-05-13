<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AvailStatusMessageType
 *
 *
 * XSD Type: AvailStatusMessageType
 */
class AvailStatusMessageType
{

    /**
     * Mechanism to allow the user to override settings at the reservation system and
     * to allow the RMS to replace this overridden values: If value = "false", the
     * reservations system may ignore the settings passed and keep values overridden by
     * the user. If value = "true", the reservations system must replace values
     * overridden by the user.
     *
     * @property boolean $override
     */
    private $override = null;

    /**
     * An enumerated type defining the function of the booking limit message. Values:
     * RemoveLimit, SetLimit, AdjustLimit.
     *
     * @property string $bookingLimitMessageType
     */
    private $bookingLimitMessageType = null;

    /**
     * Number of units of inventory that can be sold.
     *
     * @property integer $bookingLimit
     */
    private $bookingLimit = null;

    /**
     * Can be used to communicate back to the sender exactly which transaction may have
     * had a problem (e.g. "Message 214 had an invalid date range").
     *
     * @property integer $locatorID
     */
    private $locatorID = null;

    /**
     * Number of units down to which inventory can be sold.
     *
     * @property integer $bookingThreshold
     */
    private $bookingThreshold = null;

    /**
     * Used to request or specify a gender assignment for a room. Note: Typically used
     * by Hosteliers.
     *
     * @property string $roomGender
     */
    private $roomGender = null;

    /**
     * If TRUE, the room requires or has sharing available. Note: Typically used by
     * Hosteliers.
     *
     * @property boolean $sharedRoomInd
     */
    private $sharedRoomInd = null;

    /**
     * Information on what the AvailStatus Message applies to (i.e. the combination of
     * inventory and rate codes) and the period of application.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StatusApplicationControlType
     * $statusApplicationControl
     */
    private $statusApplicationControl = null;

    /**
     * Collection of Length of Stay elements. These LOS elements indicate what LOS
     * restrictions are to be added or removed. Some systems include this information
     * directly with the Availability Status as opposed to the booking restriction.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LengthsOfStayType $lengthsOfStay
     */
    private $lengthsOfStay = null;

    /**
     * A collection of the best rates available.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[]
     * $bestAvailableRates
     */
    private $bestAvailableRates = null;

    /**
     * Restriction based on the minimum rate to be considered for availability, ex. can
     * sell weekend rate only if charging the hurdle rate or more.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\HurdleRateAType
     * $hurdleRate
     */
    private $hurdleRate = null;

    /**
     * Incremental amount added to the hurdle rate (e.g. Amount= 20 USD and Ceiling=5,
     * the maximum Delta would be 100 USD).
     *
     * @property \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\DeltaAType
     * $delta
     */
    private $delta = null;

    /**
     * The unique identifier element allows the trading partners to uniquely identify
     * each AvailStatusMessage, for tracing of transactions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Availability status assigned to the room rate combination.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\RestrictionStatusAType
     * $restrictionStatus
     */
    private $restrictionStatus = null;

    /**
     * Gets as override
     *
     * Mechanism to allow the user to override settings at the reservation system and
     * to allow the RMS to replace this overridden values: If value = "false", the
     * reservations system may ignore the settings passed and keep values overridden by
     * the user. If value = "true", the reservations system must replace values
     * overridden by the user.
     *
     * @return boolean
     */
    public function getOverride()
    {
        return $this->override;
    }

    /**
     * Sets a new override
     *
     * Mechanism to allow the user to override settings at the reservation system and
     * to allow the RMS to replace this overridden values: If value = "false", the
     * reservations system may ignore the settings passed and keep values overridden by
     * the user. If value = "true", the reservations system must replace values
     * overridden by the user.
     *
     * @param boolean $override
     * @return self
     */
    public function setOverride($override)
    {
        $this->override = $override;

        return $this;
    }

    /**
     * Gets as bookingLimitMessageType
     *
     * An enumerated type defining the function of the booking limit message. Values:
     * RemoveLimit, SetLimit, AdjustLimit.
     *
     * @return string
     */
    public function getBookingLimitMessageType()
    {
        return $this->bookingLimitMessageType;
    }

    /**
     * Sets a new bookingLimitMessageType
     *
     * An enumerated type defining the function of the booking limit message. Values:
     * RemoveLimit, SetLimit, AdjustLimit.
     *
     * @param string $bookingLimitMessageType
     * @return self
     */
    public function setBookingLimitMessageType($bookingLimitMessageType)
    {
        $this->bookingLimitMessageType = $bookingLimitMessageType;

        return $this;
    }

    /**
     * Gets as bookingLimit
     *
     * Number of units of inventory that can be sold.
     *
     * @return integer
     */
    public function getBookingLimit()
    {
        return $this->bookingLimit;
    }

    /**
     * Sets a new bookingLimit
     *
     * Number of units of inventory that can be sold.
     *
     * @param integer $bookingLimit
     * @return self
     */
    public function setBookingLimit($bookingLimit)
    {
        $this->bookingLimit = $bookingLimit;

        return $this;
    }

    /**
     * Gets as locatorID
     *
     * Can be used to communicate back to the sender exactly which transaction may have
     * had a problem (e.g. "Message 214 had an invalid date range").
     *
     * @return integer
     */
    public function getLocatorID()
    {
        return $this->locatorID;
    }

    /**
     * Sets a new locatorID
     *
     * Can be used to communicate back to the sender exactly which transaction may have
     * had a problem (e.g. "Message 214 had an invalid date range").
     *
     * @param integer $locatorID
     * @return self
     */
    public function setLocatorID($locatorID)
    {
        $this->locatorID = $locatorID;

        return $this;
    }

    /**
     * Gets as bookingThreshold
     *
     * Number of units down to which inventory can be sold.
     *
     * @return integer
     */
    public function getBookingThreshold()
    {
        return $this->bookingThreshold;
    }

    /**
     * Sets a new bookingThreshold
     *
     * Number of units down to which inventory can be sold.
     *
     * @param integer $bookingThreshold
     * @return self
     */
    public function setBookingThreshold($bookingThreshold)
    {
        $this->bookingThreshold = $bookingThreshold;

        return $this;
    }

    /**
     * Gets as roomGender
     *
     * Used to request or specify a gender assignment for a room. Note: Typically used
     * by Hosteliers.
     *
     * @return string
     */
    public function getRoomGender()
    {
        return $this->roomGender;
    }

    /**
     * Sets a new roomGender
     *
     * Used to request or specify a gender assignment for a room. Note: Typically used
     * by Hosteliers.
     *
     * @param string $roomGender
     * @return self
     */
    public function setRoomGender($roomGender)
    {
        $this->roomGender = $roomGender;

        return $this;
    }

    /**
     * Gets as sharedRoomInd
     *
     * If TRUE, the room requires or has sharing available. Note: Typically used by
     * Hosteliers.
     *
     * @return boolean
     */
    public function getSharedRoomInd()
    {
        return $this->sharedRoomInd;
    }

    /**
     * Sets a new sharedRoomInd
     *
     * If TRUE, the room requires or has sharing available. Note: Typically used by
     * Hosteliers.
     *
     * @param boolean $sharedRoomInd
     * @return self
     */
    public function setSharedRoomInd($sharedRoomInd)
    {
        $this->sharedRoomInd = $sharedRoomInd;

        return $this;
    }

    /**
     * Gets as statusApplicationControl
     *
     * Information on what the AvailStatus Message applies to (i.e. the combination of
     * inventory and rate codes) and the period of application.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StatusApplicationControlType
     */
    public function getStatusApplicationControl()
    {
        return $this->statusApplicationControl;
    }

    /**
     * Sets a new statusApplicationControl
     *
     * Information on what the AvailStatus Message applies to (i.e. the combination of
     * inventory and rate codes) and the period of application.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StatusApplicationControlType
     * $statusApplicationControl
     * @return self
     */
    public function setStatusApplicationControl(
        \Davispeixoto\OpenTravelAlliance\StatusApplicationControlType $statusApplicationControl
    ) {
        $this->statusApplicationControl = $statusApplicationControl;

        return $this;
    }

    /**
     * Gets as lengthsOfStay
     *
     * Collection of Length of Stay elements. These LOS elements indicate what LOS
     * restrictions are to be added or removed. Some systems include this information
     * directly with the Availability Status as opposed to the booking restriction.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LengthsOfStayType
     */
    public function getLengthsOfStay()
    {
        return $this->lengthsOfStay;
    }

    /**
     * Sets a new lengthsOfStay
     *
     * Collection of Length of Stay elements. These LOS elements indicate what LOS
     * restrictions are to be added or removed. Some systems include this information
     * directly with the Availability Status as opposed to the booking restriction.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LengthsOfStayType $lengthsOfStay
     * @return self
     */
    public function setLengthsOfStay(\Davispeixoto\OpenTravelAlliance\LengthsOfStayType $lengthsOfStay)
    {
        $this->lengthsOfStay = $lengthsOfStay;

        return $this;
    }

    /**
     * Adds as bestAvailableRate
     *
     * A collection of the best rates available.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType
     * $bestAvailableRate
     */
    public function addToBestAvailableRates(
        \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType $bestAvailableRate
    ) {
        $this->bestAvailableRates[] = $bestAvailableRate;

        return $this;
    }

    /**
     * isset bestAvailableRates
     *
     * A collection of the best rates available.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBestAvailableRates($index)
    {
        return isset($this->bestAvailableRates[$index]);
    }

    /**
     * unset bestAvailableRates
     *
     * A collection of the best rates available.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBestAvailableRates($index)
    {
        unset($this->bestAvailableRates[$index]);
    }

    /**
     * Gets as bestAvailableRates
     *
     * A collection of the best rates available.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[]
     */
    public function getBestAvailableRates()
    {
        return $this->bestAvailableRates;
    }

    /**
     * Sets a new bestAvailableRates
     *
     * A collection of the best rates available.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[]
     * $bestAvailableRates
     * @return self
     */
    public function setBestAvailableRates(array $bestAvailableRates)
    {
        $this->bestAvailableRates = $bestAvailableRates;

        return $this;
    }

    /**
     * Gets as hurdleRate
     *
     * Restriction based on the minimum rate to be considered for availability, ex. can
     * sell weekend rate only if charging the hurdle rate or more.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\HurdleRateAType
     */
    public function getHurdleRate()
    {
        return $this->hurdleRate;
    }

    /**
     * Sets a new hurdleRate
     *
     * Restriction based on the minimum rate to be considered for availability, ex. can
     * sell weekend rate only if charging the hurdle rate or more.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\HurdleRateAType
     * $hurdleRate
     * @return self
     */
    public function setHurdleRate(\Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\HurdleRateAType $hurdleRate)
    {
        $this->hurdleRate = $hurdleRate;

        return $this;
    }

    /**
     * Gets as delta
     *
     * Incremental amount added to the hurdle rate (e.g. Amount= 20 USD and Ceiling=5,
     * the maximum Delta would be 100 USD).
     *
     * @return \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\DeltaAType
     */
    public function getDelta()
    {
        return $this->delta;
    }

    /**
     * Sets a new delta
     *
     * Incremental amount added to the hurdle rate (e.g. Amount= 20 USD and Ceiling=5,
     * the maximum Delta would be 100 USD).
     *
     * @param \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\DeltaAType $delta
     * @return self
     */
    public function setDelta(\Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\DeltaAType $delta)
    {
        $this->delta = $delta;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify
     * each AvailStatusMessage, for tracing of transactions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify
     * each AvailStatusMessage, for tracing of transactions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Gets as restrictionStatus
     *
     * Availability status assigned to the room rate combination.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\RestrictionStatusAType
     */
    public function getRestrictionStatus()
    {
        return $this->restrictionStatus;
    }

    /**
     * Sets a new restrictionStatus
     *
     * Availability status assigned to the room rate combination.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\RestrictionStatusAType
     * $restrictionStatus
     * @return self
     */
    public function setRestrictionStatus(
        \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\RestrictionStatusAType $restrictionStatus
    ) {
        $this->restrictionStatus = $restrictionStatus;

        return $this;
    }


}

