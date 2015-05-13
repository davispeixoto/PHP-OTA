<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing HotelSearchCriterionType
 *
 * A collection of Profile objects or Unique IDs of Profiles.
 * XSD Type: HotelSearchCriterionType
 */
class HotelSearchCriterionType extends ItemSearchCriterionType
{

    /**
     * Hotel level amenities for searches.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\HotelAmenityAType[]
     * $hotelAmenity
     */
    private $hotelAmenity = null;

    /**
     * Room level amenities for searches.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType[] $roomAmenity
     */
    private $roomAmenity = null;

    /**
     * Used to search for hotels based on hotel features.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\HotelFeatureAType[]
     * $hotelFeature
     */
    private $hotelFeature = null;

    /**
     * An element that identifies the hotel ratings.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\AwardAType[]
     * $award
     */
    private $award = null;

    /**
     * Identifies recreation facilities or amenities of interest.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\RecreationAType[]
     * $recreation
     */
    private $recreation = null;

    /**
     * Identifies business services of interest.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\ServiceAType[]
     * $service
     */
    private $service = null;

    /**
     * Identifies transportation facilities.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\TransportationAType[]
     * $transportation
     */
    private $transportation = null;

    /**
     * Range of dates, or fixed set of dates for Availability Request. Date range can
     * also be specified by using start dates and number of nights (minimum, maximum or
     * fixed).
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $stayDateRange
     */
    private $stayDateRange = null;

    /**
     * Requested rate or rate range. Repeats to allow the identification of multiple
     * ranges for multiple room stay candidates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\RateRangeAType[]
     * $rateRange
     */
    private $rateRange = null;

    /**
     * Collection of requested rate plans.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\RatePlanCandidatesAType
     * $ratePlanCandidates
     */
    private $ratePlanCandidates = null;

    /**
     * A collection of profile objects or unique IDs of profiles.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType[]
     * $profiles
     */
    private $profiles = null;

    /**
     * Collection of room stay candidates.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomStayCandidateType[]
     * $roomStayCandidates
     */
    private $roomStayCandidates = null;

    /**
     * Provides the ability to search for hotel(s) based on whether they accept
     * specific form(s) of payment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType[]
     * $acceptedPayments
     */
    private $acceptedPayments = null;

    /**
     * Used to search for hotels based on available media content.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\MediaAType[]
     * $media
     */
    private $media = null;

    /**
     * Used to search for hotels based on meeting facility requirements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\HotelMeetingFacilityAType[]
     * $hotelMeetingFacility
     */
    private $hotelMeetingFacility = null;

    /**
     * Used to search for hotels that offer types of meal plan, such as
     * "all-inclusive". This matches against the static property content, not the meal
     * included in the rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\MealPlanAType
     * $mealPlan
     */
    private $mealPlan = null;

    /**
     * Collection of rebate programs the hotel participates in.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RebateType[] $rebatePrograms
     */
    private $rebatePrograms = null;

    /**
     * Information linked to user content.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\UserGeneratedContentAType
     * $userGeneratedContent
     */
    private $userGeneratedContent = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as hotelAmenity
     *
     * Hotel level amenities for searches.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\HotelAmenityAType
     * $hotelAmenity
     */
    public function addToHotelAmenity(
        \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\HotelAmenityAType $hotelAmenity
    ) {
        $this->hotelAmenity[] = $hotelAmenity;

        return $this;
    }

    /**
     * isset hotelAmenity
     *
     * Hotel level amenities for searches.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelAmenity($index)
    {
        return isset($this->hotelAmenity[$index]);
    }

    /**
     * unset hotelAmenity
     *
     * Hotel level amenities for searches.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelAmenity($index)
    {
        unset($this->hotelAmenity[$index]);
    }

    /**
     * Gets as hotelAmenity
     *
     * Hotel level amenities for searches.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\HotelAmenityAType[]
     */
    public function getHotelAmenity()
    {
        return $this->hotelAmenity;
    }

    /**
     * Sets a new hotelAmenity
     *
     * Hotel level amenities for searches.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\HotelAmenityAType[]
     * $hotelAmenity
     * @return self
     */
    public function setHotelAmenity(array $hotelAmenity)
    {
        $this->hotelAmenity = $hotelAmenity;

        return $this;
    }

    /**
     * Adds as roomAmenity
     *
     * Room level amenities for searches.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType $roomAmenity
     */
    public function addToRoomAmenity(\Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType $roomAmenity)
    {
        $this->roomAmenity[] = $roomAmenity;

        return $this;
    }

    /**
     * isset roomAmenity
     *
     * Room level amenities for searches.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomAmenity($index)
    {
        return isset($this->roomAmenity[$index]);
    }

    /**
     * unset roomAmenity
     *
     * Room level amenities for searches.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomAmenity($index)
    {
        unset($this->roomAmenity[$index]);
    }

    /**
     * Gets as roomAmenity
     *
     * Room level amenities for searches.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType[]
     */
    public function getRoomAmenity()
    {
        return $this->roomAmenity;
    }

    /**
     * Sets a new roomAmenity
     *
     * Room level amenities for searches.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType[] $roomAmenity
     * @return self
     */
    public function setRoomAmenity(array $roomAmenity)
    {
        $this->roomAmenity = $roomAmenity;

        return $this;
    }

    /**
     * Adds as hotelFeature
     *
     * Used to search for hotels based on hotel features.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\HotelFeatureAType
     * $hotelFeature
     */
    public function addToHotelFeature(
        \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\HotelFeatureAType $hotelFeature
    ) {
        $this->hotelFeature[] = $hotelFeature;

        return $this;
    }

    /**
     * isset hotelFeature
     *
     * Used to search for hotels based on hotel features.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelFeature($index)
    {
        return isset($this->hotelFeature[$index]);
    }

    /**
     * unset hotelFeature
     *
     * Used to search for hotels based on hotel features.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelFeature($index)
    {
        unset($this->hotelFeature[$index]);
    }

    /**
     * Gets as hotelFeature
     *
     * Used to search for hotels based on hotel features.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\HotelFeatureAType[]
     */
    public function getHotelFeature()
    {
        return $this->hotelFeature;
    }

    /**
     * Sets a new hotelFeature
     *
     * Used to search for hotels based on hotel features.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\HotelFeatureAType[]
     * $hotelFeature
     * @return self
     */
    public function setHotelFeature(array $hotelFeature)
    {
        $this->hotelFeature = $hotelFeature;

        return $this;
    }

    /**
     * Adds as award
     *
     * An element that identifies the hotel ratings.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\AwardAType
     * $award
     */
    public function addToAward(\Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\AwardAType $award)
    {
        $this->award[] = $award;

        return $this;
    }

    /**
     * isset award
     *
     * An element that identifies the hotel ratings.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAward($index)
    {
        return isset($this->award[$index]);
    }

    /**
     * unset award
     *
     * An element that identifies the hotel ratings.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAward($index)
    {
        unset($this->award[$index]);
    }

    /**
     * Gets as award
     *
     * An element that identifies the hotel ratings.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\AwardAType[]
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * Sets a new award
     *
     * An element that identifies the hotel ratings.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\AwardAType[]
     * $award
     * @return self
     */
    public function setAward(array $award)
    {
        $this->award = $award;

        return $this;
    }

    /**
     * Adds as recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\RecreationAType
     * $recreation
     */
    public function addToRecreation(
        \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\RecreationAType $recreation
    ) {
        $this->recreation[] = $recreation;

        return $this;
    }

    /**
     * isset recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRecreation($index)
    {
        return isset($this->recreation[$index]);
    }

    /**
     * unset recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRecreation($index)
    {
        unset($this->recreation[$index]);
    }

    /**
     * Gets as recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\RecreationAType[]
     */
    public function getRecreation()
    {
        return $this->recreation;
    }

    /**
     * Sets a new recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\RecreationAType[]
     * $recreation
     * @return self
     */
    public function setRecreation(array $recreation)
    {
        $this->recreation = $recreation;

        return $this;
    }

    /**
     * Adds as service
     *
     * Identifies business services of interest.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\ServiceAType
     * $service
     */
    public function addToService(\Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\ServiceAType $service)
    {
        $this->service[] = $service;

        return $this;
    }

    /**
     * isset service
     *
     * Identifies business services of interest.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * Identifies business services of interest.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * Identifies business services of interest.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\ServiceAType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Identifies business services of interest.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\ServiceAType[]
     * $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Adds as transportation
     *
     * Identifies transportation facilities.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\TransportationAType
     * $transportation
     */
    public function addToTransportation(
        \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\TransportationAType $transportation
    ) {
        $this->transportation[] = $transportation;

        return $this;
    }

    /**
     * isset transportation
     *
     * Identifies transportation facilities.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransportation($index)
    {
        return isset($this->transportation[$index]);
    }

    /**
     * unset transportation
     *
     * Identifies transportation facilities.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransportation($index)
    {
        unset($this->transportation[$index]);
    }

    /**
     * Gets as transportation
     *
     * Identifies transportation facilities.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\TransportationAType[]
     */
    public function getTransportation()
    {
        return $this->transportation;
    }

    /**
     * Sets a new transportation
     *
     * Identifies transportation facilities.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\TransportationAType[]
     * $transportation
     * @return self
     */
    public function setTransportation(array $transportation)
    {
        $this->transportation = $transportation;

        return $this;
    }

    /**
     * Gets as stayDateRange
     *
     * Range of dates, or fixed set of dates for Availability Request. Date range can
     * also be specified by using start dates and number of nights (minimum, maximum or
     * fixed).
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateTimeSpanType
     */
    public function getStayDateRange()
    {
        return $this->stayDateRange;
    }

    /**
     * Sets a new stayDateRange
     *
     * Range of dates, or fixed set of dates for Availability Request. Date range can
     * also be specified by using start dates and number of nights (minimum, maximum or
     * fixed).
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $stayDateRange
     * @return self
     */
    public function setStayDateRange(\Davispeixoto\OpenTravelAlliance\DateTimeSpanType $stayDateRange)
    {
        $this->stayDateRange = $stayDateRange;

        return $this;
    }

    /**
     * Adds as rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple
     * ranges for multiple room stay candidates.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\RateRangeAType
     * $rateRange
     */
    public function addToRateRange(\Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\RateRangeAType $rateRange)
    {
        $this->rateRange[] = $rateRange;

        return $this;
    }

    /**
     * isset rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple
     * ranges for multiple room stay candidates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRateRange($index)
    {
        return isset($this->rateRange[$index]);
    }

    /**
     * unset rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple
     * ranges for multiple room stay candidates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRateRange($index)
    {
        unset($this->rateRange[$index]);
    }

    /**
     * Gets as rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple
     * ranges for multiple room stay candidates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\RateRangeAType[]
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * Sets a new rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple
     * ranges for multiple room stay candidates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\RateRangeAType[]
     * $rateRange
     * @return self
     */
    public function setRateRange(array $rateRange)
    {
        $this->rateRange = $rateRange;

        return $this;
    }

    /**
     * Gets as ratePlanCandidates
     *
     * Collection of requested rate plans.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\RatePlanCandidatesAType
     */
    public function getRatePlanCandidates()
    {
        return $this->ratePlanCandidates;
    }

    /**
     * Sets a new ratePlanCandidates
     *
     * Collection of requested rate plans.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\RatePlanCandidatesAType
     * $ratePlanCandidates
     * @return self
     */
    public function setRatePlanCandidates(
        \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\RatePlanCandidatesAType $ratePlanCandidates
    ) {
        $this->ratePlanCandidates = $ratePlanCandidates;

        return $this;
    }

    /**
     * Adds as profileInfo
     *
     * A collection of profile objects or unique IDs of profiles.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType
     * $profileInfo
     */
    public function addToProfiles(\Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType $profileInfo)
    {
        $this->profiles[] = $profileInfo;

        return $this;
    }

    /**
     * isset profiles
     *
     * A collection of profile objects or unique IDs of profiles.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProfiles($index)
    {
        return isset($this->profiles[$index]);
    }

    /**
     * unset profiles
     *
     * A collection of profile objects or unique IDs of profiles.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProfiles($index)
    {
        unset($this->profiles[$index]);
    }

    /**
     * Gets as profiles
     *
     * A collection of profile objects or unique IDs of profiles.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * A collection of profile objects or unique IDs of profiles.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType[]
     * $profiles
     * @return self
     */
    public function setProfiles(array $profiles)
    {
        $this->profiles = $profiles;

        return $this;
    }

    /**
     * Adds as roomStayCandidate
     *
     * Collection of room stay candidates.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomStayCandidateType $roomStayCandidate
     */
    public function addToRoomStayCandidates(\Davispeixoto\OpenTravelAlliance\RoomStayCandidateType $roomStayCandidate)
    {
        $this->roomStayCandidates[] = $roomStayCandidate;

        return $this;
    }

    /**
     * isset roomStayCandidates
     *
     * Collection of room stay candidates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomStayCandidates($index)
    {
        return isset($this->roomStayCandidates[$index]);
    }

    /**
     * unset roomStayCandidates
     *
     * Collection of room stay candidates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomStayCandidates($index)
    {
        unset($this->roomStayCandidates[$index]);
    }

    /**
     * Gets as roomStayCandidates
     *
     * Collection of room stay candidates.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomStayCandidateType[]
     */
    public function getRoomStayCandidates()
    {
        return $this->roomStayCandidates;
    }

    /**
     * Sets a new roomStayCandidates
     *
     * Collection of room stay candidates.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomStayCandidateType[]
     * $roomStayCandidates
     * @return self
     */
    public function setRoomStayCandidates(array $roomStayCandidates)
    {
        $this->roomStayCandidates = $roomStayCandidates;

        return $this;
    }

    /**
     * Adds as acceptedPayment
     *
     * Provides the ability to search for hotel(s) based on whether they accept
     * specific form(s) of payment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType
     * $acceptedPayment
     */
    public function addToAcceptedPayments(
        \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType $acceptedPayment
    ) {
        $this->acceptedPayments[] = $acceptedPayment;

        return $this;
    }

    /**
     * isset acceptedPayments
     *
     * Provides the ability to search for hotel(s) based on whether they accept
     * specific form(s) of payment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAcceptedPayments($index)
    {
        return isset($this->acceptedPayments[$index]);
    }

    /**
     * unset acceptedPayments
     *
     * Provides the ability to search for hotel(s) based on whether they accept
     * specific form(s) of payment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAcceptedPayments($index)
    {
        unset($this->acceptedPayments[$index]);
    }

    /**
     * Gets as acceptedPayments
     *
     * Provides the ability to search for hotel(s) based on whether they accept
     * specific form(s) of payment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType[]
     */
    public function getAcceptedPayments()
    {
        return $this->acceptedPayments;
    }

    /**
     * Sets a new acceptedPayments
     *
     * Provides the ability to search for hotel(s) based on whether they accept
     * specific form(s) of payment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType[]
     * $acceptedPayments
     * @return self
     */
    public function setAcceptedPayments(array $acceptedPayments)
    {
        $this->acceptedPayments = $acceptedPayments;

        return $this;
    }

    /**
     * Adds as media
     *
     * Used to search for hotels based on available media content.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\MediaAType
     * $media
     */
    public function addToMedia(\Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\MediaAType $media)
    {
        $this->media[] = $media;

        return $this;
    }

    /**
     * isset media
     *
     * Used to search for hotels based on available media content.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMedia($index)
    {
        return isset($this->media[$index]);
    }

    /**
     * unset media
     *
     * Used to search for hotels based on available media content.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMedia($index)
    {
        unset($this->media[$index]);
    }

    /**
     * Gets as media
     *
     * Used to search for hotels based on available media content.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\MediaAType[]
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Sets a new media
     *
     * Used to search for hotels based on available media content.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\MediaAType[]
     * $media
     * @return self
     */
    public function setMedia(array $media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Adds as hotelMeetingFacility
     *
     * Used to search for hotels based on meeting facility requirements.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\HotelMeetingFacilityAType
     * $hotelMeetingFacility
     */
    public function addToHotelMeetingFacility(
        \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\HotelMeetingFacilityAType $hotelMeetingFacility
    ) {
        $this->hotelMeetingFacility[] = $hotelMeetingFacility;

        return $this;
    }

    /**
     * isset hotelMeetingFacility
     *
     * Used to search for hotels based on meeting facility requirements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelMeetingFacility($index)
    {
        return isset($this->hotelMeetingFacility[$index]);
    }

    /**
     * unset hotelMeetingFacility
     *
     * Used to search for hotels based on meeting facility requirements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelMeetingFacility($index)
    {
        unset($this->hotelMeetingFacility[$index]);
    }

    /**
     * Gets as hotelMeetingFacility
     *
     * Used to search for hotels based on meeting facility requirements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\HotelMeetingFacilityAType[]
     */
    public function getHotelMeetingFacility()
    {
        return $this->hotelMeetingFacility;
    }

    /**
     * Sets a new hotelMeetingFacility
     *
     * Used to search for hotels based on meeting facility requirements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\HotelMeetingFacilityAType[]
     * $hotelMeetingFacility
     * @return self
     */
    public function setHotelMeetingFacility(array $hotelMeetingFacility)
    {
        $this->hotelMeetingFacility = $hotelMeetingFacility;

        return $this;
    }

    /**
     * Gets as mealPlan
     *
     * Used to search for hotels that offer types of meal plan, such as
     * "all-inclusive". This matches against the static property content, not the meal
     * included in the rate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\MealPlanAType
     */
    public function getMealPlan()
    {
        return $this->mealPlan;
    }

    /**
     * Sets a new mealPlan
     *
     * Used to search for hotels that offer types of meal plan, such as
     * "all-inclusive". This matches against the static property content, not the meal
     * included in the rate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\MealPlanAType
     * $mealPlan
     * @return self
     */
    public function setMealPlan(\Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\MealPlanAType $mealPlan)
    {
        $this->mealPlan = $mealPlan;

        return $this;
    }

    /**
     * Adds as rebateProgram
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RebateType $rebateProgram
     */
    public function addToRebatePrograms(\Davispeixoto\OpenTravelAlliance\RebateType $rebateProgram)
    {
        $this->rebatePrograms[] = $rebateProgram;

        return $this;
    }

    /**
     * isset rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRebatePrograms($index)
    {
        return isset($this->rebatePrograms[$index]);
    }

    /**
     * unset rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRebatePrograms($index)
    {
        unset($this->rebatePrograms[$index]);
    }

    /**
     * Gets as rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RebateType[]
     */
    public function getRebatePrograms()
    {
        return $this->rebatePrograms;
    }

    /**
     * Sets a new rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RebateType[] $rebatePrograms
     * @return self
     */
    public function setRebatePrograms(array $rebatePrograms)
    {
        $this->rebatePrograms = $rebatePrograms;

        return $this;
    }

    /**
     * Gets as userGeneratedContent
     *
     * Information linked to user content.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\UserGeneratedContentAType
     */
    public function getUserGeneratedContent()
    {
        return $this->userGeneratedContent;
    }

    /**
     * Sets a new userGeneratedContent
     *
     * Information linked to user content.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\UserGeneratedContentAType
     * $userGeneratedContent
     * @return self
     */
    public function setUserGeneratedContent(
        \Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType\UserGeneratedContentAType $userGeneratedContent
    ) {
        $this->userGeneratedContent = $userGeneratedContent;

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

