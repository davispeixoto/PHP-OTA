<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType;

/**
 * Class representing OriginDestinationOptionAType
 */
class OriginDestinationOptionAType
{

    /**
     * The last date after which the priced journey will be cancelled if not ticketed.
     *
     * @property \DateTime $lastHoldDate
     */
    private $lastHoldDate = null;

    /**
     * The duration of the journey plus stop over time.
     *
     * @property \DateInterval $journeyDuration
     */
    private $journeyDuration = null;

    /**
     * When TRUE, indicates that the returned journey was not the same as the requested
     * journey.
     *
     * @property boolean $alternativeInd
     */
    private $alternativeInd = null;

    /**
     * The origin location code and optional code context.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $originLocation
     */
    private $originLocation = null;

    /**
     * The destination location code and optional code context.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * Journey Segment information which may be a train or a bus segment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType[]
     * $journeySegment
     */
    private $journeySegment = null;

    /**
     * Pricing details for one origin/ destination pair, including basic fare,
     * alternate currency with exchange rate details, terms and conditions,
     * adjustments, discounts, fees, taxes and ancillary charges.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPriceType[] $pricing
     */
    private $pricing = null;

    /**
     * Remarks about the specified origin-destination pair.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WarningType[] $remark
     */
    private $remark = null;

    /**
     * Gets as lastHoldDate
     *
     * The last date after which the priced journey will be cancelled if not ticketed.
     *
     * @return \DateTime
     */
    public function getLastHoldDate()
    {
        return $this->lastHoldDate;
    }

    /**
     * Sets a new lastHoldDate
     *
     * The last date after which the priced journey will be cancelled if not ticketed.
     *
     * @param \DateTime $lastHoldDate
     * @return self
     */
    public function setLastHoldDate(\DateTime $lastHoldDate)
    {
        $this->lastHoldDate = $lastHoldDate;

        return $this;
    }

    /**
     * Gets as journeyDuration
     *
     * The duration of the journey plus stop over time.
     *
     * @return \DateInterval
     */
    public function getJourneyDuration()
    {
        return $this->journeyDuration;
    }

    /**
     * Sets a new journeyDuration
     *
     * The duration of the journey plus stop over time.
     *
     * @param \DateInterval $journeyDuration
     * @return self
     */
    public function setJourneyDuration(\DateInterval $journeyDuration)
    {
        $this->journeyDuration = $journeyDuration;

        return $this;
    }

    /**
     * Gets as alternativeInd
     *
     * When TRUE, indicates that the returned journey was not the same as the requested
     * journey.
     *
     * @return boolean
     */
    public function getAlternativeInd()
    {
        return $this->alternativeInd;
    }

    /**
     * Sets a new alternativeInd
     *
     * When TRUE, indicates that the returned journey was not the same as the requested
     * journey.
     *
     * @param boolean $alternativeInd
     * @return self
     */
    public function setAlternativeInd($alternativeInd)
    {
        $this->alternativeInd = $alternativeInd;

        return $this;
    }

    /**
     * Gets as originLocation
     *
     * The origin location code and optional code context.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getOriginLocation()
    {
        return $this->originLocation;
    }

    /**
     * Sets a new originLocation
     *
     * The origin location code and optional code context.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $originLocation
     * @return self
     */
    public function setOriginLocation(\Davispeixoto\OpenTravelAlliance\LocationType $originLocation)
    {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * Gets as destinationLocation
     *
     * The destination location code and optional code context.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Sets a new destinationLocation
     *
     * The destination location code and optional code context.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation
     * @return self
     */
    public function setDestinationLocation(\Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation)
    {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }

    /**
     * Adds as journeySegment
     *
     * Journey Segment information which may be a train or a bus segment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType
     * $journeySegment
     */
    public function addToJourneySegment(
        \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType $journeySegment
    ) {
        $this->journeySegment[] = $journeySegment;

        return $this;
    }

    /**
     * isset journeySegment
     *
     * Journey Segment information which may be a train or a bus segment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetJourneySegment($index)
    {
        return isset($this->journeySegment[$index]);
    }

    /**
     * unset journeySegment
     *
     * Journey Segment information which may be a train or a bus segment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetJourneySegment($index)
    {
        unset($this->journeySegment[$index]);
    }

    /**
     * Gets as journeySegment
     *
     * Journey Segment information which may be a train or a bus segment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType[]
     */
    public function getJourneySegment()
    {
        return $this->journeySegment;
    }

    /**
     * Sets a new journeySegment
     *
     * Journey Segment information which may be a train or a bus segment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType[]
     * $journeySegment
     * @return self
     */
    public function setJourneySegment(array $journeySegment)
    {
        $this->journeySegment = $journeySegment;

        return $this;
    }

    /**
     * Adds as pricing
     *
     * Pricing details for one origin/ destination pair, including basic fare,
     * alternate currency with exchange rate details, terms and conditions,
     * adjustments, discounts, fees, taxes and ancillary charges.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPriceType $pricing
     */
    public function addToPricing(\Davispeixoto\OpenTravelAlliance\RailPriceType $pricing)
    {
        $this->pricing[] = $pricing;

        return $this;
    }

    /**
     * isset pricing
     *
     * Pricing details for one origin/ destination pair, including basic fare,
     * alternate currency with exchange rate details, terms and conditions,
     * adjustments, discounts, fees, taxes and ancillary charges.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricing($index)
    {
        return isset($this->pricing[$index]);
    }

    /**
     * unset pricing
     *
     * Pricing details for one origin/ destination pair, including basic fare,
     * alternate currency with exchange rate details, terms and conditions,
     * adjustments, discounts, fees, taxes and ancillary charges.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricing($index)
    {
        unset($this->pricing[$index]);
    }

    /**
     * Gets as pricing
     *
     * Pricing details for one origin/ destination pair, including basic fare,
     * alternate currency with exchange rate details, terms and conditions,
     * adjustments, discounts, fees, taxes and ancillary charges.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPriceType[]
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets a new pricing
     *
     * Pricing details for one origin/ destination pair, including basic fare,
     * alternate currency with exchange rate details, terms and conditions,
     * adjustments, discounts, fees, taxes and ancillary charges.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPriceType[] $pricing
     * @return self
     */
    public function setPricing(array $pricing)
    {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Adds as remark
     *
     * Remarks about the specified origin-destination pair.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\WarningType $remark
     */
    public function addToRemark(\Davispeixoto\OpenTravelAlliance\WarningType $remark)
    {
        $this->remark[] = $remark;

        return $this;
    }

    /**
     * isset remark
     *
     * Remarks about the specified origin-destination pair.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRemark($index)
    {
        return isset($this->remark[$index]);
    }

    /**
     * unset remark
     *
     * Remarks about the specified origin-destination pair.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRemark($index)
    {
        unset($this->remark[$index]);
    }

    /**
     * Gets as remark
     *
     * Remarks about the specified origin-destination pair.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WarningType[]
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * Remarks about the specified origin-destination pair.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WarningType[] $remark
     * @return self
     */
    public function setRemark(array $remark)
    {
        $this->remark = $remark;

        return $this;
    }


}

