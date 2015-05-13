<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirPricedOfferType
 *
 * Priced ancillary offer information.
 * XSD Type: AirPricedOfferType
 */
class AirPricedOfferType
{

    /**
     * The unique ID of this priced offer.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * If true, this offer is associated with another offer and may not be sold
     * individually.
     *
     * @property boolean $bundleInd
     */
    private $bundleInd = null;

    /**
     * The unique ID of a priced offer that this offer is associated with.
     *
     * @property string $bundleID
     */
    private $bundleID = null;

    /**
     * The name of the ancillary item.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * If true, this is an offer that must be shown to the customer.
     *
     * @property boolean $mandatoryInd
     */
    private $mandatoryInd = null;

    /**
     * If true, this is an offer that must be accepted by the customer.
     *
     * @property boolean $acceptInd
     */
    private $acceptInd = null;

    /**
     * If true, trip insurance offers are included.
     *
     * @property boolean $tripInsuranceInd
     */
    private $tripInsuranceInd = null;

    /**
     * Airline or ATPCO encoded service family(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\AncillaryServiceDetailType
     * $serviceFamily
     */
    private $serviceFamily = null;

    /**
     * A detailed description of the ancillary item.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextTextType[]
     * $shortDescription
     */
    private $shortDescription = null;

    /**
     * A detailed description of the ancillary item.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType[] $longDescription
     */
    private $longDescription = null;

    /**
     * Offer pricing information, including amounts, tax(s), service family, pricing
     * rules, pricing influencers, exchange rate and redemption amounts.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\PricingAType
     * $pricing
     */
    private $pricing = null;

    /**
     * Origin and Destination location and time information for the trip.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\OriginDestinationAType[]
     * $originDestination
     */
    private $originDestination = null;

    /**
     * Additional details on seat offers or change requests.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\SeatInfoAType
     * $seatInfo
     */
    private $seatInfo = null;

    /**
     * Information related to non air products, such as lounge passes and clothing.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\OtherServicesAType[]
     * $otherServices
     */
    private $otherServices = null;

    /**
     * Trip insurance offer information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TripInsuranceAType
     * $tripInsurance
     */
    private $tripInsurance = null;

    /**
     * Booking and upgrade instructions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\BookingInstructionAType
     * $bookingInstruction
     */
    private $bookingInstruction = null;

    /**
     * Restrictions that apply to the priced offer, such as “Seat requests available
     * up to 24 hours before departure".
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\RestrictionAType[]
     * $restriction
     */
    private $restriction = null;

    /**
     * Terms and conditions that apply to the offer.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TermsAndConditionsAType[]
     * $termsAndConditions
     */
    private $termsAndConditions = null;

    /**
     * Commission information associated with the offer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommissionType[] $commission
     */
    private $commission = null;

    /**
     * Images, etc. of the ancillary item.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\MultimediaAType[]
     * $multimedia
     */
    private $multimedia = null;

    /**
     * The passenger PNR or other booking reference ID.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as iD
     *
     * The unique ID of this priced offer.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * The unique ID of this priced offer.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as bundleInd
     *
     * If true, this offer is associated with another offer and may not be sold
     * individually.
     *
     * @return boolean
     */
    public function getBundleInd()
    {
        return $this->bundleInd;
    }

    /**
     * Sets a new bundleInd
     *
     * If true, this offer is associated with another offer and may not be sold
     * individually.
     *
     * @param boolean $bundleInd
     * @return self
     */
    public function setBundleInd($bundleInd)
    {
        $this->bundleInd = $bundleInd;

        return $this;
    }

    /**
     * Gets as bundleID
     *
     * The unique ID of a priced offer that this offer is associated with.
     *
     * @return string
     */
    public function getBundleID()
    {
        return $this->bundleID;
    }

    /**
     * Sets a new bundleID
     *
     * The unique ID of a priced offer that this offer is associated with.
     *
     * @param string $bundleID
     * @return self
     */
    public function setBundleID($bundleID)
    {
        $this->bundleID = $bundleID;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the ancillary item.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the ancillary item.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as mandatoryInd
     *
     * If true, this is an offer that must be shown to the customer.
     *
     * @return boolean
     */
    public function getMandatoryInd()
    {
        return $this->mandatoryInd;
    }

    /**
     * Sets a new mandatoryInd
     *
     * If true, this is an offer that must be shown to the customer.
     *
     * @param boolean $mandatoryInd
     * @return self
     */
    public function setMandatoryInd($mandatoryInd)
    {
        $this->mandatoryInd = $mandatoryInd;

        return $this;
    }

    /**
     * Gets as acceptInd
     *
     * If true, this is an offer that must be accepted by the customer.
     *
     * @return boolean
     */
    public function getAcceptInd()
    {
        return $this->acceptInd;
    }

    /**
     * Sets a new acceptInd
     *
     * If true, this is an offer that must be accepted by the customer.
     *
     * @param boolean $acceptInd
     * @return self
     */
    public function setAcceptInd($acceptInd)
    {
        $this->acceptInd = $acceptInd;

        return $this;
    }

    /**
     * Gets as tripInsuranceInd
     *
     * If true, trip insurance offers are included.
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
     * If true, trip insurance offers are included.
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
     * Gets as serviceFamily
     *
     * Airline or ATPCO encoded service family(s).
     *
     * @return \Davispeixoto\OpenTravelAlliance\AncillaryServiceDetailType
     */
    public function getServiceFamily()
    {
        return $this->serviceFamily;
    }

    /**
     * Sets a new serviceFamily
     *
     * Airline or ATPCO encoded service family(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\AncillaryServiceDetailType
     * $serviceFamily
     * @return self
     */
    public function setServiceFamily(\Davispeixoto\OpenTravelAlliance\AncillaryServiceDetailType $serviceFamily)
    {
        $this->serviceFamily = $serviceFamily;

        return $this;
    }

    /**
     * Adds as shortDescription
     *
     * A detailed description of the ancillary item.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $shortDescription
     */
    public function addToShortDescription(\Davispeixoto\OpenTravelAlliance\FormattedTextTextType $shortDescription)
    {
        $this->shortDescription[] = $shortDescription;

        return $this;
    }

    /**
     * isset shortDescription
     *
     * A detailed description of the ancillary item.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShortDescription($index)
    {
        return isset($this->shortDescription[$index]);
    }

    /**
     * unset shortDescription
     *
     * A detailed description of the ancillary item.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShortDescription($index)
    {
        unset($this->shortDescription[$index]);
    }

    /**
     * Gets as shortDescription
     *
     * A detailed description of the ancillary item.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextTextType[]
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Sets a new shortDescription
     *
     * A detailed description of the ancillary item.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType[]
     * $shortDescription
     * @return self
     */
    public function setShortDescription(array $shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Adds as longDescription
     *
     * A detailed description of the ancillary item.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $longDescription
     */
    public function addToLongDescription(\Davispeixoto\OpenTravelAlliance\FormattedTextType $longDescription)
    {
        $this->longDescription[] = $longDescription;

        return $this;
    }

    /**
     * isset longDescription
     *
     * A detailed description of the ancillary item.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLongDescription($index)
    {
        return isset($this->longDescription[$index]);
    }

    /**
     * unset longDescription
     *
     * A detailed description of the ancillary item.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLongDescription($index)
    {
        unset($this->longDescription[$index]);
    }

    /**
     * Gets as longDescription
     *
     * A detailed description of the ancillary item.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType[]
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * Sets a new longDescription
     *
     * A detailed description of the ancillary item.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType[] $longDescription
     * @return self
     */
    public function setLongDescription(array $longDescription)
    {
        $this->longDescription = $longDescription;

        return $this;
    }

    /**
     * Gets as pricing
     *
     * Offer pricing information, including amounts, tax(s), service family, pricing
     * rules, pricing influencers, exchange rate and redemption amounts.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\PricingAType
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets a new pricing
     *
     * Offer pricing information, including amounts, tax(s), service family, pricing
     * rules, pricing influencers, exchange rate and redemption amounts.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\PricingAType $pricing
     * @return self
     */
    public function setPricing(\Davispeixoto\OpenTravelAlliance\AirPricedOfferType\PricingAType $pricing)
    {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Adds as originDestination
     *
     * Origin and Destination location and time information for the trip.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\OriginDestinationAType
     * $originDestination
     */
    public function addToOriginDestination(
        \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\OriginDestinationAType $originDestination
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
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\OriginDestinationAType[]
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
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\OriginDestinationAType[]
     * $originDestination
     * @return self
     */
    public function setOriginDestination(array $originDestination)
    {
        $this->originDestination = $originDestination;

        return $this;
    }

    /**
     * Gets as seatInfo
     *
     * Additional details on seat offers or change requests.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\SeatInfoAType
     */
    public function getSeatInfo()
    {
        return $this->seatInfo;
    }

    /**
     * Sets a new seatInfo
     *
     * Additional details on seat offers or change requests.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\SeatInfoAType
     * $seatInfo
     * @return self
     */
    public function setSeatInfo(\Davispeixoto\OpenTravelAlliance\AirPricedOfferType\SeatInfoAType $seatInfo)
    {
        $this->seatInfo = $seatInfo;

        return $this;
    }

    /**
     * Adds as otherServices
     *
     * Information related to non air products, such as lounge passes and clothing.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\OtherServicesAType
     * $otherServices
     */
    public function addToOtherServices(
        \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\OtherServicesAType $otherServices
    ) {
        $this->otherServices[] = $otherServices;

        return $this;
    }

    /**
     * isset otherServices
     *
     * Information related to non air products, such as lounge passes and clothing.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOtherServices($index)
    {
        return isset($this->otherServices[$index]);
    }

    /**
     * unset otherServices
     *
     * Information related to non air products, such as lounge passes and clothing.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOtherServices($index)
    {
        unset($this->otherServices[$index]);
    }

    /**
     * Gets as otherServices
     *
     * Information related to non air products, such as lounge passes and clothing.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\OtherServicesAType[]
     */
    public function getOtherServices()
    {
        return $this->otherServices;
    }

    /**
     * Sets a new otherServices
     *
     * Information related to non air products, such as lounge passes and clothing.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\OtherServicesAType[]
     * $otherServices
     * @return self
     */
    public function setOtherServices(array $otherServices)
    {
        $this->otherServices = $otherServices;

        return $this;
    }

    /**
     * Gets as tripInsurance
     *
     * Trip insurance offer information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TripInsuranceAType
     */
    public function getTripInsurance()
    {
        return $this->tripInsurance;
    }

    /**
     * Sets a new tripInsurance
     *
     * Trip insurance offer information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TripInsuranceAType
     * $tripInsurance
     * @return self
     */
    public function setTripInsurance(
        \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TripInsuranceAType $tripInsurance
    ) {
        $this->tripInsurance = $tripInsurance;

        return $this;
    }

    /**
     * Gets as bookingInstruction
     *
     * Booking and upgrade instructions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\BookingInstructionAType
     */
    public function getBookingInstruction()
    {
        return $this->bookingInstruction;
    }

    /**
     * Sets a new bookingInstruction
     *
     * Booking and upgrade instructions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\BookingInstructionAType
     * $bookingInstruction
     * @return self
     */
    public function setBookingInstruction(
        \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\BookingInstructionAType $bookingInstruction
    ) {
        $this->bookingInstruction = $bookingInstruction;

        return $this;
    }

    /**
     * Adds as restriction
     *
     * Restrictions that apply to the priced offer, such as “Seat requests available
     * up to 24 hours before departure".
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\RestrictionAType
     * $restriction
     */
    public function addToRestriction(\Davispeixoto\OpenTravelAlliance\AirPricedOfferType\RestrictionAType $restriction)
    {
        $this->restriction[] = $restriction;

        return $this;
    }

    /**
     * isset restriction
     *
     * Restrictions that apply to the priced offer, such as “Seat requests available
     * up to 24 hours before departure".
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRestriction($index)
    {
        return isset($this->restriction[$index]);
    }

    /**
     * unset restriction
     *
     * Restrictions that apply to the priced offer, such as “Seat requests available
     * up to 24 hours before departure".
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRestriction($index)
    {
        unset($this->restriction[$index]);
    }

    /**
     * Gets as restriction
     *
     * Restrictions that apply to the priced offer, such as “Seat requests available
     * up to 24 hours before departure".
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\RestrictionAType[]
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * Sets a new restriction
     *
     * Restrictions that apply to the priced offer, such as “Seat requests available
     * up to 24 hours before departure".
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\RestrictionAType[]
     * $restriction
     * @return self
     */
    public function setRestriction(array $restriction)
    {
        $this->restriction = $restriction;

        return $this;
    }

    /**
     * Adds as termsAndConditions
     *
     * Terms and conditions that apply to the offer.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TermsAndConditionsAType
     * $termsAndConditions
     */
    public function addToTermsAndConditions(
        \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TermsAndConditionsAType $termsAndConditions
    ) {
        $this->termsAndConditions[] = $termsAndConditions;

        return $this;
    }

    /**
     * isset termsAndConditions
     *
     * Terms and conditions that apply to the offer.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTermsAndConditions($index)
    {
        return isset($this->termsAndConditions[$index]);
    }

    /**
     * unset termsAndConditions
     *
     * Terms and conditions that apply to the offer.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTermsAndConditions($index)
    {
        unset($this->termsAndConditions[$index]);
    }

    /**
     * Gets as termsAndConditions
     *
     * Terms and conditions that apply to the offer.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TermsAndConditionsAType[]
     */
    public function getTermsAndConditions()
    {
        return $this->termsAndConditions;
    }

    /**
     * Sets a new termsAndConditions
     *
     * Terms and conditions that apply to the offer.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TermsAndConditionsAType[]
     * $termsAndConditions
     * @return self
     */
    public function setTermsAndConditions(array $termsAndConditions)
    {
        $this->termsAndConditions = $termsAndConditions;

        return $this;
    }

    /**
     * Adds as commission
     *
     * Commission information associated with the offer.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType $commission
     */
    public function addToCommission(\Davispeixoto\OpenTravelAlliance\CommissionType $commission)
    {
        $this->commission[] = $commission;

        return $this;
    }

    /**
     * isset commission
     *
     * Commission information associated with the offer.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCommission($index)
    {
        return isset($this->commission[$index]);
    }

    /**
     * unset commission
     *
     * Commission information associated with the offer.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCommission($index)
    {
        unset($this->commission[$index]);
    }

    /**
     * Gets as commission
     *
     * Commission information associated with the offer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommissionType[]
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * Commission information associated with the offer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType[] $commission
     * @return self
     */
    public function setCommission(array $commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Adds as multimedia
     *
     * Images, etc. of the ancillary item.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\MultimediaAType
     * $multimedia
     */
    public function addToMultimedia(\Davispeixoto\OpenTravelAlliance\AirPricedOfferType\MultimediaAType $multimedia)
    {
        $this->multimedia[] = $multimedia;

        return $this;
    }

    /**
     * isset multimedia
     *
     * Images, etc. of the ancillary item.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMultimedia($index)
    {
        return isset($this->multimedia[$index]);
    }

    /**
     * unset multimedia
     *
     * Images, etc. of the ancillary item.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMultimedia($index)
    {
        unset($this->multimedia[$index]);
    }

    /**
     * Gets as multimedia
     *
     * Images, etc. of the ancillary item.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\MultimediaAType[]
     */
    public function getMultimedia()
    {
        return $this->multimedia;
    }

    /**
     * Sets a new multimedia
     *
     * Images, etc. of the ancillary item.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\MultimediaAType[]
     * $multimedia
     * @return self
     */
    public function setMultimedia(array $multimedia)
    {
        $this->multimedia = $multimedia;

        return $this;
    }

    /**
     * Adds as bookingReferenceID
     *
     * The passenger PNR or other booking reference ID.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID
     */
    public function addToBookingReferenceID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID)
    {
        $this->bookingReferenceID[] = $bookingReferenceID;

        return $this;
    }

    /**
     * isset bookingReferenceID
     *
     * The passenger PNR or other booking reference ID.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingReferenceID($index)
    {
        return isset($this->bookingReferenceID[$index]);
    }

    /**
     * unset bookingReferenceID
     *
     * The passenger PNR or other booking reference ID.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingReferenceID($index)
    {
        unset($this->bookingReferenceID[$index]);
    }

    /**
     * Gets as bookingReferenceID
     *
     * The passenger PNR or other booking reference ID.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * The passenger PNR or other booking reference ID.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(array $bookingReferenceID)
    {
        $this->bookingReferenceID = $bookingReferenceID;

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

