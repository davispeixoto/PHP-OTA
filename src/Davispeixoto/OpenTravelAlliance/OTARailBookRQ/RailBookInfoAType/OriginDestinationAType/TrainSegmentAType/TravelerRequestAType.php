<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType\TrainSegmentAType;

/**
 * Class representing TravelerRequestAType
 */
class TravelerRequestAType
{

    /**
     * A reference to the traveler or traveler category. Note that this is only used to
     * relate data within this message.
     *
     * @property string $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * A traveler requested discount type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType\DiscountTypeAType
     * $discountType
     */
    private $discountType = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\AccommodationService
     * $accommodationService
     */
    private $accommodationService = null;

    /**
     * Gets as travelerRPH
     *
     * A reference to the traveler or traveler category. Note that this is only used to
     * relate data within this message.
     *
     * @return string
     */
    public function getTravelerRPH()
    {
        return $this->travelerRPH;
    }

    /**
     * Sets a new travelerRPH
     *
     * A reference to the traveler or traveler category. Note that this is only used to
     * relate data within this message.
     *
     * @param string $travelerRPH
     * @return self
     */
    public function setTravelerRPH($travelerRPH)
    {
        $this->travelerRPH = $travelerRPH;

        return $this;
    }

    /**
     * Gets as discountType
     *
     * A traveler requested discount type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType\DiscountTypeAType
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * Sets a new discountType
     *
     * A traveler requested discount type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType\DiscountTypeAType
     * $discountType
     * @return self
     */
    public function setDiscountType(
        \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType\DiscountTypeAType $discountType
    ) {
        $this->discountType = $discountType;

        return $this;
    }

    /**
     * Gets as accommodationService
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccommodationService
     */
    public function getAccommodationService()
    {
        return $this->accommodationService;
    }

    /**
     * Sets a new accommodationService
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccommodationService
     * $accommodationService
     * @return self
     */
    public function setAccommodationService(\Davispeixoto\OpenTravelAlliance\AccommodationService $accommodationService)
    {
        $this->accommodationService = $accommodationService;

        return $this;
    }


}

