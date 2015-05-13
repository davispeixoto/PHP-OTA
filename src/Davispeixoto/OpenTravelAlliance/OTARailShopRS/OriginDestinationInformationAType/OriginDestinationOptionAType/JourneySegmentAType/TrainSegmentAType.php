<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType;

use Davispeixoto\OpenTravelAlliance\TrainSegmentType;

/**
 * Class representing TrainSegmentAType
 */
class TrainSegmentAType extends TrainSegmentType
{

    /**
     * Specifies the Dept. of Transport on time rate of the train.
     *
     * @property float $onTimeRate
     */
    private $onTimeRate = null;

    /**
     * When true, indicates that the priced segment information returned was not the
     * same as requested segment.
     *
     * @property boolean $alternativeInd
     */
    private $alternativeInd = null;

    /**
     * When true, indicates that this is a restricted service.
     *
     * @property boolean $restrictedServiceInd
     */
    private $restrictedServiceInd = null;

    /**
     * When true, indicates that a segment has been cancelled.
     *
     * @property boolean $cancelledInd
     */
    private $cancelledInd = null;

    /**
     * Represents the start location of this train service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $trainOrigin
     */
    private $trainOrigin = null;

    /**
     * Represents the final destination location of this train service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $trainDestination
     */
    private $trainDestination = null;

    /**
     * A collection of preferred or offered rail amenities, including an amenity code,
     * quantity and/or an associated preference level.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailAmenityType\RailAmenityAType[]
     * $railAmenities
     */
    private $railAmenities = null;

    /**
     * A collection of special comments on the segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VendorMessageType[] $vendorMessages
     */
    private $vendorMessages = null;

    /**
     * A collection of remarks about the segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WarningType[] $remarks
     */
    private $remarks = null;

    /**
     * Gets as onTimeRate
     *
     * Specifies the Dept. of Transport on time rate of the train.
     *
     * @return float
     */
    public function getOnTimeRate()
    {
        return $this->onTimeRate;
    }

    /**
     * Sets a new onTimeRate
     *
     * Specifies the Dept. of Transport on time rate of the train.
     *
     * @param float $onTimeRate
     * @return self
     */
    public function setOnTimeRate($onTimeRate)
    {
        $this->onTimeRate = $onTimeRate;

        return $this;
    }

    /**
     * Gets as alternativeInd
     *
     * When true, indicates that the priced segment information returned was not the
     * same as requested segment.
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
     * When true, indicates that the priced segment information returned was not the
     * same as requested segment.
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
     * Gets as restrictedServiceInd
     *
     * When true, indicates that this is a restricted service.
     *
     * @return boolean
     */
    public function getRestrictedServiceInd()
    {
        return $this->restrictedServiceInd;
    }

    /**
     * Sets a new restrictedServiceInd
     *
     * When true, indicates that this is a restricted service.
     *
     * @param boolean $restrictedServiceInd
     * @return self
     */
    public function setRestrictedServiceInd($restrictedServiceInd)
    {
        $this->restrictedServiceInd = $restrictedServiceInd;

        return $this;
    }

    /**
     * Gets as cancelledInd
     *
     * When true, indicates that a segment has been cancelled.
     *
     * @return boolean
     */
    public function getCancelledInd()
    {
        return $this->cancelledInd;
    }

    /**
     * Sets a new cancelledInd
     *
     * When true, indicates that a segment has been cancelled.
     *
     * @param boolean $cancelledInd
     * @return self
     */
    public function setCancelledInd($cancelledInd)
    {
        $this->cancelledInd = $cancelledInd;

        return $this;
    }

    /**
     * Gets as trainOrigin
     *
     * Represents the start location of this train service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getTrainOrigin()
    {
        return $this->trainOrigin;
    }

    /**
     * Sets a new trainOrigin
     *
     * Represents the start location of this train service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $trainOrigin
     * @return self
     */
    public function setTrainOrigin(\Davispeixoto\OpenTravelAlliance\LocationType $trainOrigin)
    {
        $this->trainOrigin = $trainOrigin;

        return $this;
    }

    /**
     * Gets as trainDestination
     *
     * Represents the final destination location of this train service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getTrainDestination()
    {
        return $this->trainDestination;
    }

    /**
     * Sets a new trainDestination
     *
     * Represents the final destination location of this train service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $trainDestination
     * @return self
     */
    public function setTrainDestination(\Davispeixoto\OpenTravelAlliance\LocationType $trainDestination)
    {
        $this->trainDestination = $trainDestination;

        return $this;
    }

    /**
     * Adds as railAmenity
     *
     * A collection of preferred or offered rail amenities, including an amenity code,
     * quantity and/or an associated preference level.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailAmenityType\RailAmenityAType
     * $railAmenity
     */
    public function addToRailAmenities(\Davispeixoto\OpenTravelAlliance\RailAmenityType\RailAmenityAType $railAmenity)
    {
        $this->railAmenities[] = $railAmenity;

        return $this;
    }

    /**
     * isset railAmenities
     *
     * A collection of preferred or offered rail amenities, including an amenity code,
     * quantity and/or an associated preference level.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRailAmenities($index)
    {
        return isset($this->railAmenities[$index]);
    }

    /**
     * unset railAmenities
     *
     * A collection of preferred or offered rail amenities, including an amenity code,
     * quantity and/or an associated preference level.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRailAmenities($index)
    {
        unset($this->railAmenities[$index]);
    }

    /**
     * Gets as railAmenities
     *
     * A collection of preferred or offered rail amenities, including an amenity code,
     * quantity and/or an associated preference level.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailAmenityType\RailAmenityAType[]
     */
    public function getRailAmenities()
    {
        return $this->railAmenities;
    }

    /**
     * Sets a new railAmenities
     *
     * A collection of preferred or offered rail amenities, including an amenity code,
     * quantity and/or an associated preference level.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailAmenityType\RailAmenityAType[]
     * $railAmenities
     * @return self
     */
    public function setRailAmenities(array $railAmenities)
    {
        $this->railAmenities = $railAmenities;

        return $this;
    }

    /**
     * Adds as vendorMessage
     *
     * A collection of special comments on the segment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VendorMessageType $vendorMessage
     */
    public function addToVendorMessages(\Davispeixoto\OpenTravelAlliance\VendorMessageType $vendorMessage)
    {
        $this->vendorMessages[] = $vendorMessage;

        return $this;
    }

    /**
     * isset vendorMessages
     *
     * A collection of special comments on the segment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorMessages($index)
    {
        return isset($this->vendorMessages[$index]);
    }

    /**
     * unset vendorMessages
     *
     * A collection of special comments on the segment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorMessages($index)
    {
        unset($this->vendorMessages[$index]);
    }

    /**
     * Gets as vendorMessages
     *
     * A collection of special comments on the segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VendorMessageType[]
     */
    public function getVendorMessages()
    {
        return $this->vendorMessages;
    }

    /**
     * Sets a new vendorMessages
     *
     * A collection of special comments on the segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VendorMessageType[] $vendorMessages
     * @return self
     */
    public function setVendorMessages(array $vendorMessages)
    {
        $this->vendorMessages = $vendorMessages;

        return $this;
    }

    /**
     * Adds as remark
     *
     * A collection of remarks about the segment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\WarningType $remark
     */
    public function addToRemarks(\Davispeixoto\OpenTravelAlliance\WarningType $remark)
    {
        $this->remarks[] = $remark;

        return $this;
    }

    /**
     * isset remarks
     *
     * A collection of remarks about the segment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * A collection of remarks about the segment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * A collection of remarks about the segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WarningType[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * A collection of remarks about the segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WarningType[] $remarks
     * @return self
     */
    public function setRemarks(array $remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }


}

