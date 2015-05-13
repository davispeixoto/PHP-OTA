<?php

namespace Davispeixoto\OpenTravelAlliance\RateType;

use Davispeixoto\OpenTravelAlliance\AmountType;

/**
 * Class representing RateAType
 */
class RateAType extends AmountType
{

    /**
     * @property \DateInterval $duration
     */
    private $duration = null;

    /**
     * This supports returning a type of rate (minimum, maximum, etc.) as an
     * alternative to returning a specific rate. Refer to OpenTravel Code List Rate
     * Mode (RMO).
     *
     * @property string $rateMode
     */
    private $rateMode = null;

    /**
     * When true, this indicates the rate data is not real-time.
     *
     * @property boolean $cachedIndicator
     */
    private $cachedIndicator = null;

    /**
     * The source from which the rate was acquired.
     *
     * @property string $rateSource
     */
    private $rateSource = null;

    /**
     * Used to identify the type of rate. Refer to OpenTravel Code list Rate Plan Type
     * (RPT).
     *
     * @property string $rateTypeCode
     */
    private $rateTypeCode = null;

    /**
     * Specifies how the room is priced (per night, per person, etc.).
     *
     * @property string $roomPricingType
     */
    private $roomPricingType = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as duration
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as rateMode
     *
     * This supports returning a type of rate (minimum, maximum, etc.) as an
     * alternative to returning a specific rate. Refer to OpenTravel Code List Rate
     * Mode (RMO).
     *
     * @return string
     */
    public function getRateMode()
    {
        return $this->rateMode;
    }

    /**
     * Sets a new rateMode
     *
     * This supports returning a type of rate (minimum, maximum, etc.) as an
     * alternative to returning a specific rate. Refer to OpenTravel Code List Rate
     * Mode (RMO).
     *
     * @param string $rateMode
     * @return self
     */
    public function setRateMode($rateMode)
    {
        $this->rateMode = $rateMode;

        return $this;
    }

    /**
     * Gets as cachedIndicator
     *
     * When true, this indicates the rate data is not real-time.
     *
     * @return boolean
     */
    public function getCachedIndicator()
    {
        return $this->cachedIndicator;
    }

    /**
     * Sets a new cachedIndicator
     *
     * When true, this indicates the rate data is not real-time.
     *
     * @param boolean $cachedIndicator
     * @return self
     */
    public function setCachedIndicator($cachedIndicator)
    {
        $this->cachedIndicator = $cachedIndicator;

        return $this;
    }

    /**
     * Gets as rateSource
     *
     * The source from which the rate was acquired.
     *
     * @return string
     */
    public function getRateSource()
    {
        return $this->rateSource;
    }

    /**
     * Sets a new rateSource
     *
     * The source from which the rate was acquired.
     *
     * @param string $rateSource
     * @return self
     */
    public function setRateSource($rateSource)
    {
        $this->rateSource = $rateSource;

        return $this;
    }

    /**
     * Gets as rateTypeCode
     *
     * Used to identify the type of rate. Refer to OpenTravel Code list Rate Plan Type
     * (RPT).
     *
     * @return string
     */
    public function getRateTypeCode()
    {
        return $this->rateTypeCode;
    }

    /**
     * Sets a new rateTypeCode
     *
     * Used to identify the type of rate. Refer to OpenTravel Code list Rate Plan Type
     * (RPT).
     *
     * @param string $rateTypeCode
     * @return self
     */
    public function setRateTypeCode($rateTypeCode)
    {
        $this->rateTypeCode = $rateTypeCode;

        return $this;
    }

    /**
     * Gets as roomPricingType
     *
     * Specifies how the room is priced (per night, per person, etc.).
     *
     * @return string
     */
    public function getRoomPricingType()
    {
        return $this->roomPricingType;
    }

    /**
     * Sets a new roomPricingType
     *
     * Specifies how the room is priced (per night, per person, etc.).
     *
     * @param string $roomPricingType
     * @return self
     */
    public function setRoomPricingType($roomPricingType)
    {
        $this->roomPricingType = $roomPricingType;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

