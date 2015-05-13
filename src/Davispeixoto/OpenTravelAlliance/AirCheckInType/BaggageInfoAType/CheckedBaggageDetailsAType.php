<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType;

/**
 * Class representing CheckedBaggageDetailsAType
 */
class CheckedBaggageDetailsAType
{

    /**
     * Specifies whether this bag is part of a baggage pool. If true, this bag is part
     * of a baggage pool.
     *
     * @property boolean $baggagePoolIndicator
     */
    private $baggagePoolIndicator = null;

    /**
     * Indicates whether this is a heavy bag. If true, this is a heavy bag.
     *
     * @property boolean $heavyBagIndicator
     */
    private $heavyBagIndicator = null;

    /**
     * The location code to which the bag is short checked, due to security, customer
     * request or standby not seated.
     *
     * @property string $shortCheckLocationCode
     */
    private $shortCheckLocationCode = null;

    /**
     * Identifies the context of the location code (e.g., IATA, ISO).
     *  IATA
     *
     * @property string $shortCheckCodeContext
     */
    private $shortCheckCodeContext = null;

    /**
     * Specifies whether the bag is a standby bag. For example, in a destination
     * baggage embargo a passenger may only be allowed 2 bags. Any additional bags can
     * be standby. Also, bags for space available riders may be standby.
     *
     * @property boolean $bagStandByIndicator
     */
    private $bagStandByIndicator = null;

    /**
     * If true, the bag qualifies for priority handling.
     *
     * @property boolean $priorityHandlingIndicator
     */
    private $priorityHandlingIndicator = null;

    /**
     * If true, the connection time is below a certain level and priority treatment is
     * required.
     *
     * @property boolean $hotConnectionIndicator
     */
    private $hotConnectionIndicator = null;

    /**
     * Specifies whether the passenger agreed that this bag may be boarded on a
     * different flight than the passenger.
     *
     * @property boolean $voluntarySeparationIndicator
     */
    private $voluntarySeparationIndicator = null;

    /**
     * Specifies current security status of the bag (e.g., CLR. PPBM).
     *
     * @property string $bagSecurityStatus
     */
    private $bagSecurityStatus = null;

    /**
     * Specifies the weight of this checked bag.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType\CheckedBagWeightAType
     * $checkedBagWeight
     */
    private $checkedBagWeight = null;

    /**
     * Speciifies details for the bag tag associated with this bag.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType\BagTagDetailsAType
     * $bagTagDetails
     */
    private $bagTagDetails = null;

    /**
     * Gets as baggagePoolIndicator
     *
     * Specifies whether this bag is part of a baggage pool. If true, this bag is part
     * of a baggage pool.
     *
     * @return boolean
     */
    public function getBaggagePoolIndicator()
    {
        return $this->baggagePoolIndicator;
    }

    /**
     * Sets a new baggagePoolIndicator
     *
     * Specifies whether this bag is part of a baggage pool. If true, this bag is part
     * of a baggage pool.
     *
     * @param boolean $baggagePoolIndicator
     * @return self
     */
    public function setBaggagePoolIndicator($baggagePoolIndicator)
    {
        $this->baggagePoolIndicator = $baggagePoolIndicator;

        return $this;
    }

    /**
     * Gets as heavyBagIndicator
     *
     * Indicates whether this is a heavy bag. If true, this is a heavy bag.
     *
     * @return boolean
     */
    public function getHeavyBagIndicator()
    {
        return $this->heavyBagIndicator;
    }

    /**
     * Sets a new heavyBagIndicator
     *
     * Indicates whether this is a heavy bag. If true, this is a heavy bag.
     *
     * @param boolean $heavyBagIndicator
     * @return self
     */
    public function setHeavyBagIndicator($heavyBagIndicator)
    {
        $this->heavyBagIndicator = $heavyBagIndicator;

        return $this;
    }

    /**
     * Gets as shortCheckLocationCode
     *
     * The location code to which the bag is short checked, due to security, customer
     * request or standby not seated.
     *
     * @return string
     */
    public function getShortCheckLocationCode()
    {
        return $this->shortCheckLocationCode;
    }

    /**
     * Sets a new shortCheckLocationCode
     *
     * The location code to which the bag is short checked, due to security, customer
     * request or standby not seated.
     *
     * @param string $shortCheckLocationCode
     * @return self
     */
    public function setShortCheckLocationCode($shortCheckLocationCode)
    {
        $this->shortCheckLocationCode = $shortCheckLocationCode;

        return $this;
    }

    /**
     * Gets as shortCheckCodeContext
     *
     * Identifies the context of the location code (e.g., IATA, ISO).
     *  IATA
     *
     * @return string
     */
    public function getShortCheckCodeContext()
    {
        return $this->shortCheckCodeContext;
    }

    /**
     * Sets a new shortCheckCodeContext
     *
     * Identifies the context of the location code (e.g., IATA, ISO).
     *  IATA
     *
     * @param string $shortCheckCodeContext
     * @return self
     */
    public function setShortCheckCodeContext($shortCheckCodeContext)
    {
        $this->shortCheckCodeContext = $shortCheckCodeContext;

        return $this;
    }

    /**
     * Gets as bagStandByIndicator
     *
     * Specifies whether the bag is a standby bag. For example, in a destination
     * baggage embargo a passenger may only be allowed 2 bags. Any additional bags can
     * be standby. Also, bags for space available riders may be standby.
     *
     * @return boolean
     */
    public function getBagStandByIndicator()
    {
        return $this->bagStandByIndicator;
    }

    /**
     * Sets a new bagStandByIndicator
     *
     * Specifies whether the bag is a standby bag. For example, in a destination
     * baggage embargo a passenger may only be allowed 2 bags. Any additional bags can
     * be standby. Also, bags for space available riders may be standby.
     *
     * @param boolean $bagStandByIndicator
     * @return self
     */
    public function setBagStandByIndicator($bagStandByIndicator)
    {
        $this->bagStandByIndicator = $bagStandByIndicator;

        return $this;
    }

    /**
     * Gets as priorityHandlingIndicator
     *
     * If true, the bag qualifies for priority handling.
     *
     * @return boolean
     */
    public function getPriorityHandlingIndicator()
    {
        return $this->priorityHandlingIndicator;
    }

    /**
     * Sets a new priorityHandlingIndicator
     *
     * If true, the bag qualifies for priority handling.
     *
     * @param boolean $priorityHandlingIndicator
     * @return self
     */
    public function setPriorityHandlingIndicator($priorityHandlingIndicator)
    {
        $this->priorityHandlingIndicator = $priorityHandlingIndicator;

        return $this;
    }

    /**
     * Gets as hotConnectionIndicator
     *
     * If true, the connection time is below a certain level and priority treatment is
     * required.
     *
     * @return boolean
     */
    public function getHotConnectionIndicator()
    {
        return $this->hotConnectionIndicator;
    }

    /**
     * Sets a new hotConnectionIndicator
     *
     * If true, the connection time is below a certain level and priority treatment is
     * required.
     *
     * @param boolean $hotConnectionIndicator
     * @return self
     */
    public function setHotConnectionIndicator($hotConnectionIndicator)
    {
        $this->hotConnectionIndicator = $hotConnectionIndicator;

        return $this;
    }

    /**
     * Gets as voluntarySeparationIndicator
     *
     * Specifies whether the passenger agreed that this bag may be boarded on a
     * different flight than the passenger.
     *
     * @return boolean
     */
    public function getVoluntarySeparationIndicator()
    {
        return $this->voluntarySeparationIndicator;
    }

    /**
     * Sets a new voluntarySeparationIndicator
     *
     * Specifies whether the passenger agreed that this bag may be boarded on a
     * different flight than the passenger.
     *
     * @param boolean $voluntarySeparationIndicator
     * @return self
     */
    public function setVoluntarySeparationIndicator($voluntarySeparationIndicator)
    {
        $this->voluntarySeparationIndicator = $voluntarySeparationIndicator;

        return $this;
    }

    /**
     * Gets as bagSecurityStatus
     *
     * Specifies current security status of the bag (e.g., CLR. PPBM).
     *
     * @return string
     */
    public function getBagSecurityStatus()
    {
        return $this->bagSecurityStatus;
    }

    /**
     * Sets a new bagSecurityStatus
     *
     * Specifies current security status of the bag (e.g., CLR. PPBM).
     *
     * @param string $bagSecurityStatus
     * @return self
     */
    public function setBagSecurityStatus($bagSecurityStatus)
    {
        $this->bagSecurityStatus = $bagSecurityStatus;

        return $this;
    }

    /**
     * Gets as checkedBagWeight
     *
     * Specifies the weight of this checked bag.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType\CheckedBagWeightAType
     */
    public function getCheckedBagWeight()
    {
        return $this->checkedBagWeight;
    }

    /**
     * Sets a new checkedBagWeight
     *
     * Specifies the weight of this checked bag.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType\CheckedBagWeightAType
     * $checkedBagWeight
     * @return self
     */
    public function setCheckedBagWeight(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType\CheckedBagWeightAType $checkedBagWeight
    ) {
        $this->checkedBagWeight = $checkedBagWeight;

        return $this;
    }

    /**
     * Gets as bagTagDetails
     *
     * Speciifies details for the bag tag associated with this bag.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType\BagTagDetailsAType
     */
    public function getBagTagDetails()
    {
        return $this->bagTagDetails;
    }

    /**
     * Sets a new bagTagDetails
     *
     * Speciifies details for the bag tag associated with this bag.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType\BagTagDetailsAType
     * $bagTagDetails
     * @return self
     */
    public function setBagTagDetails(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType\BagTagDetailsAType $bagTagDetails
    ) {
        $this->bagTagDetails = $bagTagDetails;

        return $this;
    }


}

