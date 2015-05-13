<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ;

/**
 * Class representing TourActivityAType
 */
class TourActivityAType
{

    /**
     * Core identifying information for the tour(s)/activity(s) which availability is
     * being requested for.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\BasicInfoAType[]
     * $basicInfo
     */
    private $basicInfo = null;

    /**
     * Physically challenged accessibility preferences. NOT ALL TOUR/ ACTIVITY
     * RESERVATION SYSTEMS CAN DETERMINE AVAILABILITY BASED ON ACCESSIBILITY CRITERIA.
     * Check with your trading partner before implementing this functionality.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityReqType
     * $accessibilityRequirement
     */
    private $accessibilityRequirement = null;

    /**
     * Promotion codes and discount program information that may influence
     * availability.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\DiscountAType[]
     * $discount
     */
    private $discount = null;

    /**
     * Physical address, region and geocoding tour/ activity location information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityLocationType[] $location
     */
    private $location = null;

    /**
     * Negotiated rate information that may influence availability.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityNegotiatedPricingType[]
     * $negotiatedRate
     */
    private $negotiatedRate = null;

    /**
     * The requested start date(s) and optional time(s) of the tour/ activity search
     * period.
     *
     * Up to nine date/time combinations may be requested.
     *
     * Note that for each start or end period date, up to 5 times may also be
     * requested.Note that the @Duration attribute should not be used.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\ScheduleAType[]
     * $schedule
     */
    private $schedule = null;

    /**
     * Specifies the number of participants and optionally the participant category.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\ParticipantCountAType[]
     * $participantCount
     */
    private $participantCount = null;

    /**
     * Group information for which availability is being requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\GroupInfoAType
     * $groupInfo
     */
    private $groupInfo = null;

    /**
     * Multimodal offer influencers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     */
    private $multimodalOffer = null;

    /**
     * Adds as basicInfo
     *
     * Core identifying information for the tour(s)/activity(s) which availability is
     * being requested for.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\BasicInfoAType
     * $basicInfo
     */
    public function addToBasicInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\BasicInfoAType $basicInfo
    ) {
        $this->basicInfo[] = $basicInfo;

        return $this;
    }

    /**
     * isset basicInfo
     *
     * Core identifying information for the tour(s)/activity(s) which availability is
     * being requested for.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBasicInfo($index)
    {
        return isset($this->basicInfo[$index]);
    }

    /**
     * unset basicInfo
     *
     * Core identifying information for the tour(s)/activity(s) which availability is
     * being requested for.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBasicInfo($index)
    {
        unset($this->basicInfo[$index]);
    }

    /**
     * Gets as basicInfo
     *
     * Core identifying information for the tour(s)/activity(s) which availability is
     * being requested for.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\BasicInfoAType[]
     */
    public function getBasicInfo()
    {
        return $this->basicInfo;
    }

    /**
     * Sets a new basicInfo
     *
     * Core identifying information for the tour(s)/activity(s) which availability is
     * being requested for.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\BasicInfoAType[]
     * $basicInfo
     * @return self
     */
    public function setBasicInfo(array $basicInfo)
    {
        $this->basicInfo = $basicInfo;

        return $this;
    }

    /**
     * Gets as accessibilityRequirement
     *
     * Physically challenged accessibility preferences. NOT ALL TOUR/ ACTIVITY
     * RESERVATION SYSTEMS CAN DETERMINE AVAILABILITY BASED ON ACCESSIBILITY CRITERIA.
     * Check with your trading partner before implementing this functionality.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityReqType
     */
    public function getAccessibilityRequirement()
    {
        return $this->accessibilityRequirement;
    }

    /**
     * Sets a new accessibilityRequirement
     *
     * Physically challenged accessibility preferences. NOT ALL TOUR/ ACTIVITY
     * RESERVATION SYSTEMS CAN DETERMINE AVAILABILITY BASED ON ACCESSIBILITY CRITERIA.
     * Check with your trading partner before implementing this functionality.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityReqType
     * $accessibilityRequirement
     * @return self
     */
    public function setAccessibilityRequirement(
        \Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityReqType $accessibilityRequirement
    ) {
        $this->accessibilityRequirement = $accessibilityRequirement;

        return $this;
    }

    /**
     * Adds as discount
     *
     * Promotion codes and discount program information that may influence
     * availability.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\DiscountAType
     * $discount
     */
    public function addToDiscount(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\DiscountAType $discount
    ) {
        $this->discount[] = $discount;

        return $this;
    }

    /**
     * isset discount
     *
     * Promotion codes and discount program information that may influence
     * availability.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiscount($index)
    {
        return isset($this->discount[$index]);
    }

    /**
     * unset discount
     *
     * Promotion codes and discount program information that may influence
     * availability.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiscount($index)
    {
        unset($this->discount[$index]);
    }

    /**
     * Gets as discount
     *
     * Promotion codes and discount program information that may influence
     * availability.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\DiscountAType[]
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * Promotion codes and discount program information that may influence
     * availability.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\DiscountAType[]
     * $discount
     * @return self
     */
    public function setDiscount(array $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Adds as location
     *
     * Physical address, region and geocoding tour/ activity location information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityLocationType $location
     */
    public function addToLocation(\Davispeixoto\OpenTravelAlliance\TourActivityLocationType $location)
    {
        $this->location[] = $location;

        return $this;
    }

    /**
     * isset location
     *
     * Physical address, region and geocoding tour/ activity location information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * Physical address, region and geocoding tour/ activity location information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * Physical address, region and geocoding tour/ activity location information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityLocationType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Physical address, region and geocoding tour/ activity location information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityLocationType[] $location
     * @return self
     */
    public function setLocation(array $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Adds as negotiatedRate
     *
     * Negotiated rate information that may influence availability.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityNegotiatedPricingType
     * $negotiatedRate
     */
    public function addToNegotiatedRate(
        \Davispeixoto\OpenTravelAlliance\TourActivityNegotiatedPricingType $negotiatedRate
    ) {
        $this->negotiatedRate[] = $negotiatedRate;

        return $this;
    }

    /**
     * isset negotiatedRate
     *
     * Negotiated rate information that may influence availability.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNegotiatedRate($index)
    {
        return isset($this->negotiatedRate[$index]);
    }

    /**
     * unset negotiatedRate
     *
     * Negotiated rate information that may influence availability.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNegotiatedRate($index)
    {
        unset($this->negotiatedRate[$index]);
    }

    /**
     * Gets as negotiatedRate
     *
     * Negotiated rate information that may influence availability.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityNegotiatedPricingType[]
     */
    public function getNegotiatedRate()
    {
        return $this->negotiatedRate;
    }

    /**
     * Sets a new negotiatedRate
     *
     * Negotiated rate information that may influence availability.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityNegotiatedPricingType[]
     * $negotiatedRate
     * @return self
     */
    public function setNegotiatedRate(array $negotiatedRate)
    {
        $this->negotiatedRate = $negotiatedRate;

        return $this;
    }

    /**
     * Adds as schedule
     *
     * The requested start date(s) and optional time(s) of the tour/ activity search
     * period.
     *
     * Up to nine date/time combinations may be requested.
     *
     * Note that for each start or end period date, up to 5 times may also be
     * requested.Note that the @Duration attribute should not be used.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\ScheduleAType
     * $schedule
     */
    public function addToSchedule(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\ScheduleAType $schedule
    ) {
        $this->schedule[] = $schedule;

        return $this;
    }

    /**
     * isset schedule
     *
     * The requested start date(s) and optional time(s) of the tour/ activity search
     * period.
     *
     * Up to nine date/time combinations may be requested.
     *
     * Note that for each start or end period date, up to 5 times may also be
     * requested.Note that the @Duration attribute should not be used.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSchedule($index)
    {
        return isset($this->schedule[$index]);
    }

    /**
     * unset schedule
     *
     * The requested start date(s) and optional time(s) of the tour/ activity search
     * period.
     *
     * Up to nine date/time combinations may be requested.
     *
     * Note that for each start or end period date, up to 5 times may also be
     * requested.Note that the @Duration attribute should not be used.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSchedule($index)
    {
        unset($this->schedule[$index]);
    }

    /**
     * Gets as schedule
     *
     * The requested start date(s) and optional time(s) of the tour/ activity search
     * period.
     *
     * Up to nine date/time combinations may be requested.
     *
     * Note that for each start or end period date, up to 5 times may also be
     * requested.Note that the @Duration attribute should not be used.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\ScheduleAType[]
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * The requested start date(s) and optional time(s) of the tour/ activity search
     * period.
     *
     * Up to nine date/time combinations may be requested.
     *
     * Note that for each start or end period date, up to 5 times may also be
     * requested.Note that the @Duration attribute should not be used.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\ScheduleAType[]
     * $schedule
     * @return self
     */
    public function setSchedule(array $schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Adds as participantCount
     *
     * Specifies the number of participants and optionally the participant category.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\ParticipantCountAType
     * $participantCount
     */
    public function addToParticipantCount(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\ParticipantCountAType $participantCount
    ) {
        $this->participantCount[] = $participantCount;

        return $this;
    }

    /**
     * isset participantCount
     *
     * Specifies the number of participants and optionally the participant category.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParticipantCount($index)
    {
        return isset($this->participantCount[$index]);
    }

    /**
     * unset participantCount
     *
     * Specifies the number of participants and optionally the participant category.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParticipantCount($index)
    {
        unset($this->participantCount[$index]);
    }

    /**
     * Gets as participantCount
     *
     * Specifies the number of participants and optionally the participant category.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\ParticipantCountAType[]
     */
    public function getParticipantCount()
    {
        return $this->participantCount;
    }

    /**
     * Sets a new participantCount
     *
     * Specifies the number of participants and optionally the participant category.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\ParticipantCountAType[]
     * $participantCount
     * @return self
     */
    public function setParticipantCount(array $participantCount)
    {
        $this->participantCount = $participantCount;

        return $this;
    }

    /**
     * Gets as groupInfo
     *
     * Group information for which availability is being requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\GroupInfoAType
     */
    public function getGroupInfo()
    {
        return $this->groupInfo;
    }

    /**
     * Sets a new groupInfo
     *
     * Group information for which availability is being requested.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\GroupInfoAType
     * $groupInfo
     * @return self
     */
    public function setGroupInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\GroupInfoAType $groupInfo
    ) {
        $this->groupInfo = $groupInfo;

        return $this;
    }

    /**
     * Gets as multimodalOffer
     *
     * Multimodal offer influencers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MultiModalOfferType
     */
    public function getMultimodalOffer()
    {
        return $this->multimodalOffer;
    }

    /**
     * Sets a new multimodalOffer
     *
     * Multimodal offer influencers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     * @return self
     */
    public function setMultimodalOffer(\Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer)
    {
        $this->multimodalOffer = $multimodalOffer;

        return $this;
    }


}

