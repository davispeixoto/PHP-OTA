<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SearchQualifierType
 *
 * Search qualifiers that can be used in cruise availability/fare/category to avail
 * special search data.
 * XSD Type: SearchQualifierType
 */
class SearchQualifierType
{

    /**
     * Contains the cruise line's category code for the general cabin location.
     * BerthedCategoryCode will differ from the PricedCategoryCode if the customer
     * receives an upgrade.
     *
     * @property string $berthedCategoryCode
     */
    private $berthedCategoryCode = null;

    /**
     * Contains the cruise line's category code for the general cabin location for
     * which the customer pays. PricedCategoryCode will differ from the
     * BerthedCategoryCode if the customer receives an upgrade.
     *
     * @property string $pricedCategoryCode
     */
    private $pricedCategoryCode = null;

    /**
     * Specifies the cabin number.
     *
     * @property string $cabinNumber
     */
    private $cabinNumber = null;

    /**
     * When true, indicates the CabinNumber has a hold on it. When false, the
     * CabinNumber does not have a hold.
     *
     * @property boolean $heldIndicator
     */
    private $heldIndicator = null;

    /**
     * Specifies the fare code. Fare codes are specific to individual cruise lines.
     *
     * @property string $fareCode
     */
    private $fareCode = null;

    /**
     * Specifies the group code. Group codes are specific to individual cruise lines.
     *
     * @property string $groupCode
     */
    private $groupCode = null;

    /**
     * Specifies the Max occupancy of the Cabin.
     *
     * @property integer $maxOccupancy
     */
    private $maxOccupancy = null;

    /**
     * Specifies the cabin category location (e.g., inside, outside).
     *
     * @property string $categoryLocation
     */
    private $categoryLocation = null;

    /**
     * Unique identifier of the member in the program (membership number, account
     * number, etc.).
     *
     * @property string $loyaltyMembershipID
     */
    private $loyaltyMembershipID = null;

    /**
     * Indicates special privileges in program assigned to individual.
     *
     * @property string $loyalLevel
     */
    private $loyalLevel = null;

    /**
     * Provides a numeric code assigned to a particular loyalty level.
     *
     * @property integer $loyalLevelCode
     */
    private $loyalLevelCode = null;

    /**
     * Specifies the order in which the response information should be sorted. Refer to
     * OpenTravel Code List Sort Order (SOC).
     *
     * @property string $sortOrderCode
     */
    private $sortOrderCode = null;

    /**
     * Identifies a category for the guest. Refer to OpenTravel Code List Hotel Guest
     * Type (GUE).
     *
     * @property string $passengerType
     */
    private $passengerType = null;

    /**
     * Identifies a theme type for a cruise (e.g. Honeymoon, Adventure).
     *
     * @property string $cruiseTheme
     */
    private $cruiseTheme = null;

    /**
     * When true, return cruises options that include flights.
     *
     * @property boolean $flightIncludedInd
     */
    private $flightIncludedInd = null;

    /**
     * Promotion code is the identifier used by the host to link directly with a
     * specific named advertising campaign. By including the required code, the client
     * is able to gain access to special offers which may have been created for a
     * specifically targeted group via a CRM system or for a wider advertising campaign
     * using Television or press adverts.
     *
     * @property string $promotionCode
     */
    private $promotionCode = null;

    /**
     * Indicates gender preference for cabin sharing.
     *
     * @property string $sharedCabinGender
     */
    private $sharedCabinGender = null;

    /**
     * Specifies the passenger's reservation number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $reservationID
     */
    private $reservationID = null;

    /**
     * Defines where the passenger resides for fare calculation purposes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SearchQualifierType\ResidencyAType
     * $residency
     */
    private $residency = null;

    /**
     * Provides a minimum and maximum price to qualify a search.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SearchQualifierType\PriceRangeAType
     * $priceRange
     */
    private $priceRange = null;

    /**
     * Provides a search filter by the status of sailing, category, fare, or cabin.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SearchQualifierType\StatusAType[]
     * $status
     */
    private $status = null;

    /**
     * Provides a search filter by dining sitting.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SearchQualifierType\DiningAType
     * $dining
     */
    private $dining = null;

    /**
     * Multimodal offer influencers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     */
    private $multimodalOffer = null;

    /**
     * Gets as berthedCategoryCode
     *
     * Contains the cruise line's category code for the general cabin location.
     * BerthedCategoryCode will differ from the PricedCategoryCode if the customer
     * receives an upgrade.
     *
     * @return string
     */
    public function getBerthedCategoryCode()
    {
        return $this->berthedCategoryCode;
    }

    /**
     * Sets a new berthedCategoryCode
     *
     * Contains the cruise line's category code for the general cabin location.
     * BerthedCategoryCode will differ from the PricedCategoryCode if the customer
     * receives an upgrade.
     *
     * @param string $berthedCategoryCode
     * @return self
     */
    public function setBerthedCategoryCode($berthedCategoryCode)
    {
        $this->berthedCategoryCode = $berthedCategoryCode;

        return $this;
    }

    /**
     * Gets as pricedCategoryCode
     *
     * Contains the cruise line's category code for the general cabin location for
     * which the customer pays. PricedCategoryCode will differ from the
     * BerthedCategoryCode if the customer receives an upgrade.
     *
     * @return string
     */
    public function getPricedCategoryCode()
    {
        return $this->pricedCategoryCode;
    }

    /**
     * Sets a new pricedCategoryCode
     *
     * Contains the cruise line's category code for the general cabin location for
     * which the customer pays. PricedCategoryCode will differ from the
     * BerthedCategoryCode if the customer receives an upgrade.
     *
     * @param string $pricedCategoryCode
     * @return self
     */
    public function setPricedCategoryCode($pricedCategoryCode)
    {
        $this->pricedCategoryCode = $pricedCategoryCode;

        return $this;
    }

    /**
     * Gets as cabinNumber
     *
     * Specifies the cabin number.
     *
     * @return string
     */
    public function getCabinNumber()
    {
        return $this->cabinNumber;
    }

    /**
     * Sets a new cabinNumber
     *
     * Specifies the cabin number.
     *
     * @param string $cabinNumber
     * @return self
     */
    public function setCabinNumber($cabinNumber)
    {
        $this->cabinNumber = $cabinNumber;

        return $this;
    }

    /**
     * Gets as heldIndicator
     *
     * When true, indicates the CabinNumber has a hold on it. When false, the
     * CabinNumber does not have a hold.
     *
     * @return boolean
     */
    public function getHeldIndicator()
    {
        return $this->heldIndicator;
    }

    /**
     * Sets a new heldIndicator
     *
     * When true, indicates the CabinNumber has a hold on it. When false, the
     * CabinNumber does not have a hold.
     *
     * @param boolean $heldIndicator
     * @return self
     */
    public function setHeldIndicator($heldIndicator)
    {
        $this->heldIndicator = $heldIndicator;

        return $this;
    }

    /**
     * Gets as fareCode
     *
     * Specifies the fare code. Fare codes are specific to individual cruise lines.
     *
     * @return string
     */
    public function getFareCode()
    {
        return $this->fareCode;
    }

    /**
     * Sets a new fareCode
     *
     * Specifies the fare code. Fare codes are specific to individual cruise lines.
     *
     * @param string $fareCode
     * @return self
     */
    public function setFareCode($fareCode)
    {
        $this->fareCode = $fareCode;

        return $this;
    }

    /**
     * Gets as groupCode
     *
     * Specifies the group code. Group codes are specific to individual cruise lines.
     *
     * @return string
     */
    public function getGroupCode()
    {
        return $this->groupCode;
    }

    /**
     * Sets a new groupCode
     *
     * Specifies the group code. Group codes are specific to individual cruise lines.
     *
     * @param string $groupCode
     * @return self
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;

        return $this;
    }

    /**
     * Gets as maxOccupancy
     *
     * Specifies the Max occupancy of the Cabin.
     *
     * @return integer
     */
    public function getMaxOccupancy()
    {
        return $this->maxOccupancy;
    }

    /**
     * Sets a new maxOccupancy
     *
     * Specifies the Max occupancy of the Cabin.
     *
     * @param integer $maxOccupancy
     * @return self
     */
    public function setMaxOccupancy($maxOccupancy)
    {
        $this->maxOccupancy = $maxOccupancy;

        return $this;
    }

    /**
     * Gets as categoryLocation
     *
     * Specifies the cabin category location (e.g., inside, outside).
     *
     * @return string
     */
    public function getCategoryLocation()
    {
        return $this->categoryLocation;
    }

    /**
     * Sets a new categoryLocation
     *
     * Specifies the cabin category location (e.g., inside, outside).
     *
     * @param string $categoryLocation
     * @return self
     */
    public function setCategoryLocation($categoryLocation)
    {
        $this->categoryLocation = $categoryLocation;

        return $this;
    }

    /**
     * Gets as loyaltyMembershipID
     *
     * Unique identifier of the member in the program (membership number, account
     * number, etc.).
     *
     * @return string
     */
    public function getLoyaltyMembershipID()
    {
        return $this->loyaltyMembershipID;
    }

    /**
     * Sets a new loyaltyMembershipID
     *
     * Unique identifier of the member in the program (membership number, account
     * number, etc.).
     *
     * @param string $loyaltyMembershipID
     * @return self
     */
    public function setLoyaltyMembershipID($loyaltyMembershipID)
    {
        $this->loyaltyMembershipID = $loyaltyMembershipID;

        return $this;
    }

    /**
     * Gets as loyalLevel
     *
     * Indicates special privileges in program assigned to individual.
     *
     * @return string
     */
    public function getLoyalLevel()
    {
        return $this->loyalLevel;
    }

    /**
     * Sets a new loyalLevel
     *
     * Indicates special privileges in program assigned to individual.
     *
     * @param string $loyalLevel
     * @return self
     */
    public function setLoyalLevel($loyalLevel)
    {
        $this->loyalLevel = $loyalLevel;

        return $this;
    }

    /**
     * Gets as loyalLevelCode
     *
     * Provides a numeric code assigned to a particular loyalty level.
     *
     * @return integer
     */
    public function getLoyalLevelCode()
    {
        return $this->loyalLevelCode;
    }

    /**
     * Sets a new loyalLevelCode
     *
     * Provides a numeric code assigned to a particular loyalty level.
     *
     * @param integer $loyalLevelCode
     * @return self
     */
    public function setLoyalLevelCode($loyalLevelCode)
    {
        $this->loyalLevelCode = $loyalLevelCode;

        return $this;
    }

    /**
     * Gets as sortOrderCode
     *
     * Specifies the order in which the response information should be sorted. Refer to
     * OpenTravel Code List Sort Order (SOC).
     *
     * @return string
     */
    public function getSortOrderCode()
    {
        return $this->sortOrderCode;
    }

    /**
     * Sets a new sortOrderCode
     *
     * Specifies the order in which the response information should be sorted. Refer to
     * OpenTravel Code List Sort Order (SOC).
     *
     * @param string $sortOrderCode
     * @return self
     */
    public function setSortOrderCode($sortOrderCode)
    {
        $this->sortOrderCode = $sortOrderCode;

        return $this;
    }

    /**
     * Gets as passengerType
     *
     * Identifies a category for the guest. Refer to OpenTravel Code List Hotel Guest
     * Type (GUE).
     *
     * @return string
     */
    public function getPassengerType()
    {
        return $this->passengerType;
    }

    /**
     * Sets a new passengerType
     *
     * Identifies a category for the guest. Refer to OpenTravel Code List Hotel Guest
     * Type (GUE).
     *
     * @param string $passengerType
     * @return self
     */
    public function setPassengerType($passengerType)
    {
        $this->passengerType = $passengerType;

        return $this;
    }

    /**
     * Gets as cruiseTheme
     *
     * Identifies a theme type for a cruise (e.g. Honeymoon, Adventure).
     *
     * @return string
     */
    public function getCruiseTheme()
    {
        return $this->cruiseTheme;
    }

    /**
     * Sets a new cruiseTheme
     *
     * Identifies a theme type for a cruise (e.g. Honeymoon, Adventure).
     *
     * @param string $cruiseTheme
     * @return self
     */
    public function setCruiseTheme($cruiseTheme)
    {
        $this->cruiseTheme = $cruiseTheme;

        return $this;
    }

    /**
     * Gets as flightIncludedInd
     *
     * When true, return cruises options that include flights.
     *
     * @return boolean
     */
    public function getFlightIncludedInd()
    {
        return $this->flightIncludedInd;
    }

    /**
     * Sets a new flightIncludedInd
     *
     * When true, return cruises options that include flights.
     *
     * @param boolean $flightIncludedInd
     * @return self
     */
    public function setFlightIncludedInd($flightIncludedInd)
    {
        $this->flightIncludedInd = $flightIncludedInd;

        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * Promotion code is the identifier used by the host to link directly with a
     * specific named advertising campaign. By including the required code, the client
     * is able to gain access to special offers which may have been created for a
     * specifically targeted group via a CRM system or for a wider advertising campaign
     * using Television or press adverts.
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * Promotion code is the identifier used by the host to link directly with a
     * specific named advertising campaign. By including the required code, the client
     * is able to gain access to special offers which may have been created for a
     * specifically targeted group via a CRM system or for a wider advertising campaign
     * using Television or press adverts.
     *
     * @param string $promotionCode
     * @return self
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;

        return $this;
    }

    /**
     * Gets as sharedCabinGender
     *
     * Indicates gender preference for cabin sharing.
     *
     * @return string
     */
    public function getSharedCabinGender()
    {
        return $this->sharedCabinGender;
    }

    /**
     * Sets a new sharedCabinGender
     *
     * Indicates gender preference for cabin sharing.
     *
     * @param string $sharedCabinGender
     * @return self
     */
    public function setSharedCabinGender($sharedCabinGender)
    {
        $this->sharedCabinGender = $sharedCabinGender;

        return $this;
    }

    /**
     * Gets as reservationID
     *
     * Specifies the passenger's reservation number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getReservationID()
    {
        return $this->reservationID;
    }

    /**
     * Sets a new reservationID
     *
     * Specifies the passenger's reservation number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $reservationID
     * @return self
     */
    public function setReservationID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $reservationID)
    {
        $this->reservationID = $reservationID;

        return $this;
    }

    /**
     * Gets as residency
     *
     * Defines where the passenger resides for fare calculation purposes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SearchQualifierType\ResidencyAType
     */
    public function getResidency()
    {
        return $this->residency;
    }

    /**
     * Sets a new residency
     *
     * Defines where the passenger resides for fare calculation purposes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SearchQualifierType\ResidencyAType
     * $residency
     * @return self
     */
    public function setResidency(\Davispeixoto\OpenTravelAlliance\SearchQualifierType\ResidencyAType $residency)
    {
        $this->residency = $residency;

        return $this;
    }

    /**
     * Gets as priceRange
     *
     * Provides a minimum and maximum price to qualify a search.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SearchQualifierType\PriceRangeAType
     */
    public function getPriceRange()
    {
        return $this->priceRange;
    }

    /**
     * Sets a new priceRange
     *
     * Provides a minimum and maximum price to qualify a search.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SearchQualifierType\PriceRangeAType
     * $priceRange
     * @return self
     */
    public function setPriceRange(\Davispeixoto\OpenTravelAlliance\SearchQualifierType\PriceRangeAType $priceRange)
    {
        $this->priceRange = $priceRange;

        return $this;
    }

    /**
     * Adds as status
     *
     * Provides a search filter by the status of sailing, category, fare, or cabin.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SearchQualifierType\StatusAType $status
     */
    public function addToStatus(\Davispeixoto\OpenTravelAlliance\SearchQualifierType\StatusAType $status)
    {
        $this->status[] = $status;

        return $this;
    }

    /**
     * isset status
     *
     * Provides a search filter by the status of sailing, category, fare, or cabin.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStatus($index)
    {
        return isset($this->status[$index]);
    }

    /**
     * unset status
     *
     * Provides a search filter by the status of sailing, category, fare, or cabin.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStatus($index)
    {
        unset($this->status[$index]);
    }

    /**
     * Gets as status
     *
     * Provides a search filter by the status of sailing, category, fare, or cabin.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SearchQualifierType\StatusAType[]
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Provides a search filter by the status of sailing, category, fare, or cabin.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SearchQualifierType\StatusAType[]
     * $status
     * @return self
     */
    public function setStatus(array $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as dining
     *
     * Provides a search filter by dining sitting.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SearchQualifierType\DiningAType
     */
    public function getDining()
    {
        return $this->dining;
    }

    /**
     * Sets a new dining
     *
     * Provides a search filter by dining sitting.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SearchQualifierType\DiningAType $dining
     * @return self
     */
    public function setDining(\Davispeixoto\OpenTravelAlliance\SearchQualifierType\DiningAType $dining)
    {
        $this->dining = $dining;

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

