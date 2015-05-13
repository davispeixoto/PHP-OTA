<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType;

/**
 * Class representing JourneySegmentAType
 */
class JourneySegmentAType
{

    /**
     * Specific inventory-controlled service class code or detailed accommodation
     * information, class and passenger type fares, and other service-related
     * information including reservation class, reservation type, different class codes
     * and auto train vehicle type. This information collectively represents one or
     * more specific classes of service, such as "First class" and/or a seat and berth
     * accommodation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\AvailabilityDetailAType[]
     * $availabilityDetail
     */
    private $availabilityDetail = null;

    /**
     * Train segment information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\TrainSegmentAType
     * $trainSegment
     */
    private $trainSegment = null;

    /**
     * Bus segment information which may be hosted in the rail provider system or a
     * code share.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType
     * $busSegment
     */
    private $busSegment = null;

    /**
     * Adds as availabilityDetail
     *
     * Specific inventory-controlled service class code or detailed accommodation
     * information, class and passenger type fares, and other service-related
     * information including reservation class, reservation type, different class codes
     * and auto train vehicle type. This information collectively represents one or
     * more specific classes of service, such as "First class" and/or a seat and berth
     * accommodation.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\AvailabilityDetailAType
     * $availabilityDetail
     */
    public function addToAvailabilityDetail(
        \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\AvailabilityDetailAType $availabilityDetail
    ) {
        $this->availabilityDetail[] = $availabilityDetail;

        return $this;
    }

    /**
     * isset availabilityDetail
     *
     * Specific inventory-controlled service class code or detailed accommodation
     * information, class and passenger type fares, and other service-related
     * information including reservation class, reservation type, different class codes
     * and auto train vehicle type. This information collectively represents one or
     * more specific classes of service, such as "First class" and/or a seat and berth
     * accommodation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAvailabilityDetail($index)
    {
        return isset($this->availabilityDetail[$index]);
    }

    /**
     * unset availabilityDetail
     *
     * Specific inventory-controlled service class code or detailed accommodation
     * information, class and passenger type fares, and other service-related
     * information including reservation class, reservation type, different class codes
     * and auto train vehicle type. This information collectively represents one or
     * more specific classes of service, such as "First class" and/or a seat and berth
     * accommodation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAvailabilityDetail($index)
    {
        unset($this->availabilityDetail[$index]);
    }

    /**
     * Gets as availabilityDetail
     *
     * Specific inventory-controlled service class code or detailed accommodation
     * information, class and passenger type fares, and other service-related
     * information including reservation class, reservation type, different class codes
     * and auto train vehicle type. This information collectively represents one or
     * more specific classes of service, such as "First class" and/or a seat and berth
     * accommodation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\AvailabilityDetailAType[]
     */
    public function getAvailabilityDetail()
    {
        return $this->availabilityDetail;
    }

    /**
     * Sets a new availabilityDetail
     *
     * Specific inventory-controlled service class code or detailed accommodation
     * information, class and passenger type fares, and other service-related
     * information including reservation class, reservation type, different class codes
     * and auto train vehicle type. This information collectively represents one or
     * more specific classes of service, such as "First class" and/or a seat and berth
     * accommodation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\AvailabilityDetailAType[]
     * $availabilityDetail
     * @return self
     */
    public function setAvailabilityDetail(array $availabilityDetail)
    {
        $this->availabilityDetail = $availabilityDetail;

        return $this;
    }

    /**
     * Gets as trainSegment
     *
     * Train segment information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\TrainSegmentAType
     */
    public function getTrainSegment()
    {
        return $this->trainSegment;
    }

    /**
     * Sets a new trainSegment
     *
     * Train segment information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\TrainSegmentAType
     * $trainSegment
     * @return self
     */
    public function setTrainSegment(
        \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\TrainSegmentAType $trainSegment
    ) {
        $this->trainSegment = $trainSegment;

        return $this;
    }

    /**
     * Gets as busSegment
     *
     * Bus segment information which may be hosted in the rail provider system or a
     * code share.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType
     */
    public function getBusSegment()
    {
        return $this->busSegment;
    }

    /**
     * Sets a new busSegment
     *
     * Bus segment information which may be hosted in the rail provider system or a
     * code share.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType
     * $busSegment
     * @return self
     */
    public function setBusSegment(
        \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType $busSegment
    ) {
        $this->busSegment = $busSegment;

        return $this;
    }


}

