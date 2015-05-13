<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ;

/**
 * Class representing RequestCriterionAType
 */
class RequestCriterionAType
{

    /**
     * Specifies the journey stage at which the ancillary offer request is being made,
     * e.g. shopping and check-in.If used, this is considered an offer processing
     * system "actionable" value. Check with your trading partners to ensure they
     * support this level of offer processing.
     *
     * @property string $offerStage
     */
    private $offerStage = null;

    /**
     * If true, trip insurance offers are being requested.
     *
     * @property boolean $tripInsuranceInd
     */
    private $tripInsuranceInd = null;

    /**
     * The source for service code and sub-code definitions. Note that this may be
     * overidden elsewhere in the message by entering a value into an @CodeSource
     * attribute.
     *
     * @property string $codeSource
     */
    private $codeSource = null;

    /**
     * Reservation details for a completed booking.
     *
     * NOTE: This information only pertains to confirmed and booked reservations. All
     * other offer criteria should be specified in the other elements in this message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\ConfirmedBookingInfoAType
     * $confirmedBookingInfo
     */
    private $confirmedBookingInfo = null;

    /**
     * Air itinerary information, including a choice between (non-priced) air itinerary
     * information or priced air itinerary information and itinerary upgrade
     * instructions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType
     * $airItinerary
     */
    private $airItinerary = null;

    /**
     * Information about a person or entity associated with an air trip who will not be
     * traveling. This is generally used to describe an individual or company paying
     * for a ticket or making the travel plans.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\ArrangerAType
     * $arranger
     */
    private $arranger = null;

    /**
     * Information about traveler(s) and their baggage for baggage services offers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BaggageQueryType[] $baggageInfo
     */
    private $baggageInfo = null;

    /**
     * Service items, including service type, product group(s), and sub-group(s), to be
     * required, included or excluded in the offer response.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AncillaryServiceActionType[]
     * $includeExclude
     */
    private $includeExclude = null;

    /**
     * Origin and Destination location and time information for the trip.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\OriginDestinationAType[]
     * $originDestination
     */
    private $originDestination = null;

    /**
     * Offers that have already been presented to and/or purchased during this
     * session.Note that purchased offers associated with a confirmed booking are in
     * the ConfirmedBookingInfo/ PurchasedOffersInfo element.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\PresentedPurchasedAType[]
     * $presentedPurchased
     */
    private $presentedPurchased = null;

    /**
     * Additional pricing information, including restrictions, promotions and tax
     * exemptions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType[]
     * $pricingQualifier
     */
    private $pricingQualifier = null;

    /**
     * Seats preferences and change information used for seat marketing.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\SeatInfoAType
     * $seatInfo
     */
    private $seatInfo = null;

    /**
     * Specific flight number and airline that availability is being requested for.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType
     * $specificFlight
     */
    private $specificFlight = null;

    /**
     * A choice between traveler quantities and age classification OR detailed traveler
     * information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelerAType
     * $traveler
     */
    private $traveler = null;

    /**
     * Travel preference information that applies to the entire trip, including flight
     * type, cabin type and vendor preferences.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelPreferencesAType[]
     * $travelPreferences
     */
    private $travelPreferences = null;

    /**
     * Third-party trip insurance information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirInsuranceOfferType $tripInsurance
     */
    private $tripInsurance = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as offerStage
     *
     * Specifies the journey stage at which the ancillary offer request is being made,
     * e.g. shopping and check-in.If used, this is considered an offer processing
     * system "actionable" value. Check with your trading partners to ensure they
     * support this level of offer processing.
     *
     * @return string
     */
    public function getOfferStage()
    {
        return $this->offerStage;
    }

    /**
     * Sets a new offerStage
     *
     * Specifies the journey stage at which the ancillary offer request is being made,
     * e.g. shopping and check-in.If used, this is considered an offer processing
     * system "actionable" value. Check with your trading partners to ensure they
     * support this level of offer processing.
     *
     * @param string $offerStage
     * @return self
     */
    public function setOfferStage($offerStage)
    {
        $this->offerStage = $offerStage;

        return $this;
    }

    /**
     * Gets as tripInsuranceInd
     *
     * If true, trip insurance offers are being requested.
     *
     * @return boolean
     */
    public function getTripInsuranceInd()
    {
        return $this->tripInsuranceInd;
    }

    /**
     * Sets a new tripInsuranceInd
     *
     * If true, trip insurance offers are being requested.
     *
     * @param boolean $tripInsuranceInd
     * @return self
     */
    public function setTripInsuranceInd($tripInsuranceInd)
    {
        $this->tripInsuranceInd = $tripInsuranceInd;

        return $this;
    }

    /**
     * Gets as codeSource
     *
     * The source for service code and sub-code definitions. Note that this may be
     * overidden elsewhere in the message by entering a value into an @CodeSource
     * attribute.
     *
     * @return string
     */
    public function getCodeSource()
    {
        return $this->codeSource;
    }

    /**
     * Sets a new codeSource
     *
     * The source for service code and sub-code definitions. Note that this may be
     * overidden elsewhere in the message by entering a value into an @CodeSource
     * attribute.
     *
     * @param string $codeSource
     * @return self
     */
    public function setCodeSource($codeSource)
    {
        $this->codeSource = $codeSource;

        return $this;
    }

    /**
     * Gets as confirmedBookingInfo
     *
     * Reservation details for a completed booking.
     *
     * NOTE: This information only pertains to confirmed and booked reservations. All
     * other offer criteria should be specified in the other elements in this message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\ConfirmedBookingInfoAType
     */
    public function getConfirmedBookingInfo()
    {
        return $this->confirmedBookingInfo;
    }

    /**
     * Sets a new confirmedBookingInfo
     *
     * Reservation details for a completed booking.
     *
     * NOTE: This information only pertains to confirmed and booked reservations. All
     * other offer criteria should be specified in the other elements in this message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\ConfirmedBookingInfoAType
     * $confirmedBookingInfo
     * @return self
     */
    public function setConfirmedBookingInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\ConfirmedBookingInfoAType $confirmedBookingInfo
    ) {
        $this->confirmedBookingInfo = $confirmedBookingInfo;

        return $this;
    }

    /**
     * Gets as airItinerary
     *
     * Air itinerary information, including a choice between (non-priced) air itinerary
     * information or priced air itinerary information and itinerary upgrade
     * instructions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType
     */
    public function getAirItinerary()
    {
        return $this->airItinerary;
    }

    /**
     * Sets a new airItinerary
     *
     * Air itinerary information, including a choice between (non-priced) air itinerary
     * information or priced air itinerary information and itinerary upgrade
     * instructions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType
     * $airItinerary
     * @return self
     */
    public function setAirItinerary(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType $airItinerary
    ) {
        $this->airItinerary = $airItinerary;

        return $this;
    }

    /**
     * Gets as arranger
     *
     * Information about a person or entity associated with an air trip who will not be
     * traveling. This is generally used to describe an individual or company paying
     * for a ticket or making the travel plans.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\ArrangerAType
     */
    public function getArranger()
    {
        return $this->arranger;
    }

    /**
     * Sets a new arranger
     *
     * Information about a person or entity associated with an air trip who will not be
     * traveling. This is generally used to describe an individual or company paying
     * for a ticket or making the travel plans.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\ArrangerAType
     * $arranger
     * @return self
     */
    public function setArranger(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\ArrangerAType $arranger
    ) {
        $this->arranger = $arranger;

        return $this;
    }

    /**
     * Adds as baggageInfo
     *
     * Information about traveler(s) and their baggage for baggage services offers.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\BaggageQueryType $baggageInfo
     */
    public function addToBaggageInfo(\Davispeixoto\OpenTravelAlliance\BaggageQueryType $baggageInfo)
    {
        $this->baggageInfo[] = $baggageInfo;

        return $this;
    }

    /**
     * isset baggageInfo
     *
     * Information about traveler(s) and their baggage for baggage services offers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBaggageInfo($index)
    {
        return isset($this->baggageInfo[$index]);
    }

    /**
     * unset baggageInfo
     *
     * Information about traveler(s) and their baggage for baggage services offers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBaggageInfo($index)
    {
        unset($this->baggageInfo[$index]);
    }

    /**
     * Gets as baggageInfo
     *
     * Information about traveler(s) and their baggage for baggage services offers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BaggageQueryType[]
     */
    public function getBaggageInfo()
    {
        return $this->baggageInfo;
    }

    /**
     * Sets a new baggageInfo
     *
     * Information about traveler(s) and their baggage for baggage services offers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BaggageQueryType[] $baggageInfo
     * @return self
     */
    public function setBaggageInfo(array $baggageInfo)
    {
        $this->baggageInfo = $baggageInfo;

        return $this;
    }

    /**
     * Adds as includeExclude
     *
     * Service items, including service type, product group(s), and sub-group(s), to be
     * required, included or excluded in the offer response.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AncillaryServiceActionType
     * $includeExclude
     */
    public function addToIncludeExclude(\Davispeixoto\OpenTravelAlliance\AncillaryServiceActionType $includeExclude)
    {
        $this->includeExclude[] = $includeExclude;

        return $this;
    }

    /**
     * isset includeExclude
     *
     * Service items, including service type, product group(s), and sub-group(s), to be
     * required, included or excluded in the offer response.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIncludeExclude($index)
    {
        return isset($this->includeExclude[$index]);
    }

    /**
     * unset includeExclude
     *
     * Service items, including service type, product group(s), and sub-group(s), to be
     * required, included or excluded in the offer response.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIncludeExclude($index)
    {
        unset($this->includeExclude[$index]);
    }

    /**
     * Gets as includeExclude
     *
     * Service items, including service type, product group(s), and sub-group(s), to be
     * required, included or excluded in the offer response.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AncillaryServiceActionType[]
     */
    public function getIncludeExclude()
    {
        return $this->includeExclude;
    }

    /**
     * Sets a new includeExclude
     *
     * Service items, including service type, product group(s), and sub-group(s), to be
     * required, included or excluded in the offer response.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AncillaryServiceActionType[]
     * $includeExclude
     * @return self
     */
    public function setIncludeExclude(array $includeExclude)
    {
        $this->includeExclude = $includeExclude;

        return $this;
    }

    /**
     * Adds as originDestination
     *
     * Origin and Destination location and time information for the trip.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\OriginDestinationAType
     * $originDestination
     */
    public function addToOriginDestination(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\OriginDestinationAType $originDestination
    ) {
        $this->originDestination[] = $originDestination;

        return $this;
    }

    /**
     * isset originDestination
     *
     * Origin and Destination location and time information for the trip.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginDestination($index)
    {
        return isset($this->originDestination[$index]);
    }

    /**
     * unset originDestination
     *
     * Origin and Destination location and time information for the trip.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginDestination($index)
    {
        unset($this->originDestination[$index]);
    }

    /**
     * Gets as originDestination
     *
     * Origin and Destination location and time information for the trip.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\OriginDestinationAType[]
     */
    public function getOriginDestination()
    {
        return $this->originDestination;
    }

    /**
     * Sets a new originDestination
     *
     * Origin and Destination location and time information for the trip.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\OriginDestinationAType[]
     * $originDestination
     * @return self
     */
    public function setOriginDestination(array $originDestination)
    {
        $this->originDestination = $originDestination;

        return $this;
    }

    /**
     * Adds as presentedPurchased
     *
     * Offers that have already been presented to and/or purchased during this
     * session.Note that purchased offers associated with a confirmed booking are in
     * the ConfirmedBookingInfo/ PurchasedOffersInfo element.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\PresentedPurchasedAType
     * $presentedPurchased
     */
    public function addToPresentedPurchased(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\PresentedPurchasedAType $presentedPurchased
    ) {
        $this->presentedPurchased[] = $presentedPurchased;

        return $this;
    }

    /**
     * isset presentedPurchased
     *
     * Offers that have already been presented to and/or purchased during this
     * session.Note that purchased offers associated with a confirmed booking are in
     * the ConfirmedBookingInfo/ PurchasedOffersInfo element.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPresentedPurchased($index)
    {
        return isset($this->presentedPurchased[$index]);
    }

    /**
     * unset presentedPurchased
     *
     * Offers that have already been presented to and/or purchased during this
     * session.Note that purchased offers associated with a confirmed booking are in
     * the ConfirmedBookingInfo/ PurchasedOffersInfo element.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPresentedPurchased($index)
    {
        unset($this->presentedPurchased[$index]);
    }

    /**
     * Gets as presentedPurchased
     *
     * Offers that have already been presented to and/or purchased during this
     * session.Note that purchased offers associated with a confirmed booking are in
     * the ConfirmedBookingInfo/ PurchasedOffersInfo element.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\PresentedPurchasedAType[]
     */
    public function getPresentedPurchased()
    {
        return $this->presentedPurchased;
    }

    /**
     * Sets a new presentedPurchased
     *
     * Offers that have already been presented to and/or purchased during this
     * session.Note that purchased offers associated with a confirmed booking are in
     * the ConfirmedBookingInfo/ PurchasedOffersInfo element.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\PresentedPurchasedAType[]
     * $presentedPurchased
     * @return self
     */
    public function setPresentedPurchased(array $presentedPurchased)
    {
        $this->presentedPurchased = $presentedPurchased;

        return $this;
    }

    /**
     * Adds as pricingQualifier
     *
     * Additional pricing information, including restrictions, promotions and tax
     * exemptions.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType
     * $pricingQualifier
     */
    public function addToPricingQualifier(\Davispeixoto\OpenTravelAlliance\AirPricingQualifierType $pricingQualifier)
    {
        $this->pricingQualifier[] = $pricingQualifier;

        return $this;
    }

    /**
     * isset pricingQualifier
     *
     * Additional pricing information, including restrictions, promotions and tax
     * exemptions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricingQualifier($index)
    {
        return isset($this->pricingQualifier[$index]);
    }

    /**
     * unset pricingQualifier
     *
     * Additional pricing information, including restrictions, promotions and tax
     * exemptions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricingQualifier($index)
    {
        unset($this->pricingQualifier[$index]);
    }

    /**
     * Gets as pricingQualifier
     *
     * Additional pricing information, including restrictions, promotions and tax
     * exemptions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType[]
     */
    public function getPricingQualifier()
    {
        return $this->pricingQualifier;
    }

    /**
     * Sets a new pricingQualifier
     *
     * Additional pricing information, including restrictions, promotions and tax
     * exemptions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType[]
     * $pricingQualifier
     * @return self
     */
    public function setPricingQualifier(array $pricingQualifier)
    {
        $this->pricingQualifier = $pricingQualifier;

        return $this;
    }

    /**
     * Gets as seatInfo
     *
     * Seats preferences and change information used for seat marketing.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\SeatInfoAType
     */
    public function getSeatInfo()
    {
        return $this->seatInfo;
    }

    /**
     * Sets a new seatInfo
     *
     * Seats preferences and change information used for seat marketing.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\SeatInfoAType
     * $seatInfo
     * @return self
     */
    public function setSeatInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\SeatInfoAType $seatInfo
    ) {
        $this->seatInfo = $seatInfo;

        return $this;
    }

    /**
     * Gets as specificFlight
     *
     * Specific flight number and airline that availability is being requested for.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType
     */
    public function getSpecificFlight()
    {
        return $this->specificFlight;
    }

    /**
     * Sets a new specificFlight
     *
     * Specific flight number and airline that availability is being requested for.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType $specificFlight
     * @return self
     */
    public function setSpecificFlight(\Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType $specificFlight)
    {
        $this->specificFlight = $specificFlight;

        return $this;
    }

    /**
     * Gets as traveler
     *
     * A choice between traveler quantities and age classification OR detailed traveler
     * information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelerAType
     */
    public function getTraveler()
    {
        return $this->traveler;
    }

    /**
     * Sets a new traveler
     *
     * A choice between traveler quantities and age classification OR detailed traveler
     * information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelerAType
     * $traveler
     * @return self
     */
    public function setTraveler(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelerAType $traveler
    ) {
        $this->traveler = $traveler;

        return $this;
    }

    /**
     * Adds as travelPreferences
     *
     * Travel preference information that applies to the entire trip, including flight
     * type, cabin type and vendor preferences.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelPreferencesAType
     * $travelPreferences
     */
    public function addToTravelPreferences(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelPreferencesAType $travelPreferences
    ) {
        $this->travelPreferences[] = $travelPreferences;

        return $this;
    }

    /**
     * isset travelPreferences
     *
     * Travel preference information that applies to the entire trip, including flight
     * type, cabin type and vendor preferences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelPreferences($index)
    {
        return isset($this->travelPreferences[$index]);
    }

    /**
     * unset travelPreferences
     *
     * Travel preference information that applies to the entire trip, including flight
     * type, cabin type and vendor preferences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelPreferences($index)
    {
        unset($this->travelPreferences[$index]);
    }

    /**
     * Gets as travelPreferences
     *
     * Travel preference information that applies to the entire trip, including flight
     * type, cabin type and vendor preferences.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelPreferencesAType[]
     */
    public function getTravelPreferences()
    {
        return $this->travelPreferences;
    }

    /**
     * Sets a new travelPreferences
     *
     * Travel preference information that applies to the entire trip, including flight
     * type, cabin type and vendor preferences.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\TravelPreferencesAType[]
     * $travelPreferences
     * @return self
     */
    public function setTravelPreferences(array $travelPreferences)
    {
        $this->travelPreferences = $travelPreferences;

        return $this;
    }

    /**
     * Gets as tripInsurance
     *
     * Third-party trip insurance information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirInsuranceOfferType
     */
    public function getTripInsurance()
    {
        return $this->tripInsurance;
    }

    /**
     * Sets a new tripInsurance
     *
     * Third-party trip insurance information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirInsuranceOfferType $tripInsurance
     * @return self
     */
    public function setTripInsurance(\Davispeixoto\OpenTravelAlliance\AirInsuranceOfferType $tripInsurance)
    {
        $this->tripInsurance = $tripInsurance;

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

