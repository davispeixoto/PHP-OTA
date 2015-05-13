<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing HotelProductType
 *
 * Specifies product information for a hotel. A product may be a room type, a rate
 * plan, a room type rate plan combination or hotel policy information.
 * XSD Type: HotelProductType
 */
class HotelProductType
{

    /**
     * Identifies the status of the product ( i.e. Active, Deactivate).
     *
     * @property string $productStatusType
     */
    private $productStatusType = null;

    /**
     * The code that identifies a hotel chain or management group. The hotel chain code
     * is decided between vendors. This attribute is optional if the hotel is an
     * independent property that can be identified by the HotelCode attribute.
     *
     * @property string $chainCode
     */
    private $chainCode = null;

    /**
     * A code that identifies the brand or flag of a hotel, often used for
     * independently-owned or franchised properties who are known by a specific brand.
     *
     * @property string $brandCode
     */
    private $brandCode = null;

    /**
     * The code that uniquely identifies a single hotel property. The hotel code is
     * decided between vendors.
     *
     * @property string $hotelCode
     */
    private $hotelCode = null;

    /**
     * The IATA city code; for example DCA, ORD.
     *
     * @property string $hotelCityCode
     */
    private $hotelCityCode = null;

    /**
     * A text field used to communicate the proper name of the hotel.
     *
     * @property string $hotelName
     */
    private $hotelName = null;

    /**
     * A text field used to communicate the context (or source of - ex Sabre, Galileo,
     * Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @property string $hotelCodeContext
     */
    private $hotelCodeContext = null;

    /**
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @property string $chainName
     */
    private $chainName = null;

    /**
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @property string $brandName
     */
    private $brandName = null;

    /**
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @property string $areaID
     */
    private $areaID = null;

    /**
     * TTI hotel reference code.Example: 123Note: This code is maintained by the Travel
     * Technology Initiative (TTI) and provides a unique way to identify a property
     * across a multiplicity of channels, service providers, tour companies,
     * representation companies and third parties involved in the booking,
     * administration and fulfillment of travel within the hospitality industry. For
     * more information: http://www.tti.org/tticodes.html
     *
     * @property integer $tTIcode
     */
    private $tTIcode = null;

    /**
     * The unique identifier element allows the trading partners to uniquely identify
     * each HotelProduct for tracing of transactions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * A collection of HotelRef elements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\HotelRefsAType\HotelRefAType[]
     * $hotelRefs
     */
    private $hotelRefs = null;

    /**
     * A collection of room types.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType[]
     * $roomTypes
     */
    private $roomTypes = null;

    /**
     * A collection of rate plans.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType[]
     * $ratePlans
     */
    private $ratePlans = null;

    /**
     * Identifies items that are included with this product that add value or
     * differentiate this product from other products at no additional charge (i.e.
     * breakfast, internet, parking).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\ValueAddInclusionsAType
     * $valueAddInclusions
     */
    private $valueAddInclusions = null;

    /**
     * Policy Information for this product.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelProductType\PolicyInfoAType
     * $policyInfo
     */
    private $policyInfo = null;

    /**
     * A collection of contacts.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contacts
     */
    private $contacts = null;

    /**
     * Taxes that apply to the product.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TaxType[] $taxes
     */
    private $taxes = null;

    /**
     * Fees that apply to the product.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $fees
     */
    private $fees = null;

    /**
     * A Container for the repeating description element.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\DescriptionsAType\DescriptionAType[]
     * $descriptions
     */
    private $descriptions = null;

    /**
     * A collection of charges related to additional guests.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[]
     * $additionalGuestAmounts
     */
    private $additionalGuestAmounts = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as productStatusType
     *
     * Identifies the status of the product ( i.e. Active, Deactivate).
     *
     * @return string
     */
    public function getProductStatusType()
    {
        return $this->productStatusType;
    }

    /**
     * Sets a new productStatusType
     *
     * Identifies the status of the product ( i.e. Active, Deactivate).
     *
     * @param string $productStatusType
     * @return self
     */
    public function setProductStatusType($productStatusType)
    {
        $this->productStatusType = $productStatusType;

        return $this;
    }

    /**
     * Gets as chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code
     * is decided between vendors. This attribute is optional if the hotel is an
     * independent property that can be identified by the HotelCode attribute.
     *
     * @return string
     */
    public function getChainCode()
    {
        return $this->chainCode;
    }

    /**
     * Sets a new chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code
     * is decided between vendors. This attribute is optional if the hotel is an
     * independent property that can be identified by the HotelCode attribute.
     *
     * @param string $chainCode
     * @return self
     */
    public function setChainCode($chainCode)
    {
        $this->chainCode = $chainCode;

        return $this;
    }

    /**
     * Gets as brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for
     * independently-owned or franchised properties who are known by a specific brand.
     *
     * @return string
     */
    public function getBrandCode()
    {
        return $this->brandCode;
    }

    /**
     * Sets a new brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for
     * independently-owned or franchised properties who are known by a specific brand.
     *
     * @param string $brandCode
     * @return self
     */
    public function setBrandCode($brandCode)
    {
        $this->brandCode = $brandCode;

        return $this;
    }

    /**
     * Gets as hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is
     * decided between vendors.
     *
     * @return string
     */
    public function getHotelCode()
    {
        return $this->hotelCode;
    }

    /**
     * Sets a new hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is
     * decided between vendors.
     *
     * @param string $hotelCode
     * @return self
     */
    public function setHotelCode($hotelCode)
    {
        $this->hotelCode = $hotelCode;

        return $this;
    }

    /**
     * Gets as hotelCityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @return string
     */
    public function getHotelCityCode()
    {
        return $this->hotelCityCode;
    }

    /**
     * Sets a new hotelCityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @param string $hotelCityCode
     * @return self
     */
    public function setHotelCityCode($hotelCityCode)
    {
        $this->hotelCityCode = $hotelCityCode;

        return $this;
    }

    /**
     * Gets as hotelName
     *
     * A text field used to communicate the proper name of the hotel.
     *
     * @return string
     */
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * Sets a new hotelName
     *
     * A text field used to communicate the proper name of the hotel.
     *
     * @param string $hotelName
     * @return self
     */
    public function setHotelName($hotelName)
    {
        $this->hotelName = $hotelName;

        return $this;
    }

    /**
     * Gets as hotelCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo,
     * Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @return string
     */
    public function getHotelCodeContext()
    {
        return $this->hotelCodeContext;
    }

    /**
     * Sets a new hotelCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo,
     * Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @param string $hotelCodeContext
     * @return self
     */
    public function setHotelCodeContext($hotelCodeContext)
    {
        $this->hotelCodeContext = $hotelCodeContext;

        return $this;
    }

    /**
     * Gets as chainName
     *
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @return string
     */
    public function getChainName()
    {
        return $this->chainName;
    }

    /**
     * Sets a new chainName
     *
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @param string $chainName
     * @return self
     */
    public function setChainName($chainName)
    {
        $this->chainName = $chainName;

        return $this;
    }

    /**
     * Gets as brandName
     *
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Sets a new brandName
     *
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @param string $brandName
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * Gets as areaID
     *
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @return string
     */
    public function getAreaID()
    {
        return $this->areaID;
    }

    /**
     * Sets a new areaID
     *
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @param string $areaID
     * @return self
     */
    public function setAreaID($areaID)
    {
        $this->areaID = $areaID;

        return $this;
    }

    /**
     * Gets as tTIcode
     *
     * TTI hotel reference code.Example: 123Note: This code is maintained by the Travel
     * Technology Initiative (TTI) and provides a unique way to identify a property
     * across a multiplicity of channels, service providers, tour companies,
     * representation companies and third parties involved in the booking,
     * administration and fulfillment of travel within the hospitality industry. For
     * more information: http://www.tti.org/tticodes.html
     *
     * @return integer
     */
    public function getTTIcode()
    {
        return $this->tTIcode;
    }

    /**
     * Sets a new tTIcode
     *
     * TTI hotel reference code.Example: 123Note: This code is maintained by the Travel
     * Technology Initiative (TTI) and provides a unique way to identify a property
     * across a multiplicity of channels, service providers, tour companies,
     * representation companies and third parties involved in the booking,
     * administration and fulfillment of travel within the hospitality industry. For
     * more information: http://www.tti.org/tticodes.html
     *
     * @param integer $tTIcode
     * @return self
     */
    public function setTTIcode($tTIcode)
    {
        $this->tTIcode = $tTIcode;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify
     * each HotelProduct for tracing of transactions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify
     * each HotelProduct for tracing of transactions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Adds as hotelRef
     *
     * A collection of HotelRef elements.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\HotelRefsAType\HotelRefAType
     * $hotelRef
     */
    public function addToHotelRefs(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\HotelRefsAType\HotelRefAType $hotelRef
    ) {
        $this->hotelRefs[] = $hotelRef;

        return $this;
    }

    /**
     * isset hotelRefs
     *
     * A collection of HotelRef elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelRefs($index)
    {
        return isset($this->hotelRefs[$index]);
    }

    /**
     * unset hotelRefs
     *
     * A collection of HotelRef elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelRefs($index)
    {
        unset($this->hotelRefs[$index]);
    }

    /**
     * Gets as hotelRefs
     *
     * A collection of HotelRef elements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\HotelRefsAType\HotelRefAType[]
     */
    public function getHotelRefs()
    {
        return $this->hotelRefs;
    }

    /**
     * Sets a new hotelRefs
     *
     * A collection of HotelRef elements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\HotelRefsAType\HotelRefAType[]
     * $hotelRefs
     * @return self
     */
    public function setHotelRefs(array $hotelRefs)
    {
        $this->hotelRefs = $hotelRefs;

        return $this;
    }

    /**
     * Adds as roomType
     *
     * A collection of room types.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType
     * $roomType
     */
    public function addToRoomTypes(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType $roomType
    ) {
        $this->roomTypes[] = $roomType;

        return $this;
    }

    /**
     * isset roomTypes
     *
     * A collection of room types.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomTypes($index)
    {
        return isset($this->roomTypes[$index]);
    }

    /**
     * unset roomTypes
     *
     * A collection of room types.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomTypes($index)
    {
        unset($this->roomTypes[$index]);
    }

    /**
     * Gets as roomTypes
     *
     * A collection of room types.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType[]
     */
    public function getRoomTypes()
    {
        return $this->roomTypes;
    }

    /**
     * Sets a new roomTypes
     *
     * A collection of room types.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType[]
     * $roomTypes
     * @return self
     */
    public function setRoomTypes(array $roomTypes)
    {
        $this->roomTypes = $roomTypes;

        return $this;
    }

    /**
     * Adds as ratePlan
     *
     * A collection of rate plans.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType
     * $ratePlan
     */
    public function addToRatePlans(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType $ratePlan
    ) {
        $this->ratePlans[] = $ratePlan;

        return $this;
    }

    /**
     * isset ratePlans
     *
     * A collection of rate plans.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatePlans($index)
    {
        return isset($this->ratePlans[$index]);
    }

    /**
     * unset ratePlans
     *
     * A collection of rate plans.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatePlans($index)
    {
        unset($this->ratePlans[$index]);
    }

    /**
     * Gets as ratePlans
     *
     * A collection of rate plans.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType[]
     */
    public function getRatePlans()
    {
        return $this->ratePlans;
    }

    /**
     * Sets a new ratePlans
     *
     * A collection of rate plans.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType[]
     * $ratePlans
     * @return self
     */
    public function setRatePlans(array $ratePlans)
    {
        $this->ratePlans = $ratePlans;

        return $this;
    }

    /**
     * Gets as valueAddInclusions
     *
     * Identifies items that are included with this product that add value or
     * differentiate this product from other products at no additional charge (i.e.
     * breakfast, internet, parking).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\ValueAddInclusionsAType
     */
    public function getValueAddInclusions()
    {
        return $this->valueAddInclusions;
    }

    /**
     * Sets a new valueAddInclusions
     *
     * Identifies items that are included with this product that add value or
     * differentiate this product from other products at no additional charge (i.e.
     * breakfast, internet, parking).
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelProductType\ValueAddInclusionsAType
     * $valueAddInclusions
     * @return self
     */
    public function setValueAddInclusions(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\ValueAddInclusionsAType $valueAddInclusions
    ) {
        $this->valueAddInclusions = $valueAddInclusions;

        return $this;
    }

    /**
     * Gets as policyInfo
     *
     * Policy Information for this product.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelProductType\PolicyInfoAType
     */
    public function getPolicyInfo()
    {
        return $this->policyInfo;
    }

    /**
     * Sets a new policyInfo
     *
     * Policy Information for this product.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelProductType\PolicyInfoAType
     * $policyInfo
     * @return self
     */
    public function setPolicyInfo(\Davispeixoto\OpenTravelAlliance\HotelProductType\PolicyInfoAType $policyInfo)
    {
        $this->policyInfo = $policyInfo;

        return $this;
    }

    /**
     * Adds as contact
     *
     * A collection of contacts.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contact
     */
    public function addToContacts(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contact)
    {
        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * isset contacts
     *
     * A collection of contacts.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContacts($index)
    {
        return isset($this->contacts[$index]);
    }

    /**
     * unset contacts
     *
     * A collection of contacts.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContacts($index)
    {
        unset($this->contacts[$index]);
    }

    /**
     * Gets as contacts
     *
     * A collection of contacts.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * A collection of contacts.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contacts
     * @return self
     */
    public function setContacts(array $contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Adds as tax
     *
     * Taxes that apply to the product.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TaxType $tax
     */
    public function addToTaxes(\Davispeixoto\OpenTravelAlliance\TaxType $tax)
    {
        $this->taxes[] = $tax;

        return $this;
    }

    /**
     * isset taxes
     *
     * Taxes that apply to the product.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxes($index)
    {
        return isset($this->taxes[$index]);
    }

    /**
     * unset taxes
     *
     * Taxes that apply to the product.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxes($index)
    {
        unset($this->taxes[$index]);
    }

    /**
     * Gets as taxes
     *
     * Taxes that apply to the product.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TaxType[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * Taxes that apply to the product.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TaxType[] $taxes
     * @return self
     */
    public function setTaxes(array $taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Adds as fee
     *
     * Fees that apply to the product.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $fee
     */
    public function addToFees(\Davispeixoto\OpenTravelAlliance\FeeType $fee)
    {
        $this->fees[] = $fee;

        return $this;
    }

    /**
     * isset fees
     *
     * Fees that apply to the product.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * Fees that apply to the product.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * Fees that apply to the product.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * Fees that apply to the product.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;

        return $this;
    }

    /**
     * Adds as description
     *
     * A Container for the repeating description element.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\DescriptionsAType\DescriptionAType
     * $description
     */
    public function addToDescriptions(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\DescriptionsAType\DescriptionAType $description
    ) {
        $this->descriptions[] = $description;

        return $this;
    }

    /**
     * isset descriptions
     *
     * A Container for the repeating description element.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescriptions($index)
    {
        return isset($this->descriptions[$index]);
    }

    /**
     * unset descriptions
     *
     * A Container for the repeating description element.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescriptions($index)
    {
        unset($this->descriptions[$index]);
    }

    /**
     * Gets as descriptions
     *
     * A Container for the repeating description element.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\DescriptionsAType\DescriptionAType[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * A Container for the repeating description element.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\DescriptionsAType\DescriptionAType[]
     * $descriptions
     * @return self
     */
    public function setDescriptions(array $descriptions)
    {
        $this->descriptions = $descriptions;

        return $this;
    }

    /**
     * Adds as additionalGuestAmount
     *
     * A collection of charges related to additional guests.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType
     * $additionalGuestAmount
     */
    public function addToAdditionalGuestAmounts(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType $additionalGuestAmount
    ) {
        $this->additionalGuestAmounts[] = $additionalGuestAmount;

        return $this;
    }

    /**
     * isset additionalGuestAmounts
     *
     * A collection of charges related to additional guests.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalGuestAmounts($index)
    {
        return isset($this->additionalGuestAmounts[$index]);
    }

    /**
     * unset additionalGuestAmounts
     *
     * A collection of charges related to additional guests.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalGuestAmounts($index)
    {
        unset($this->additionalGuestAmounts[$index]);
    }

    /**
     * Gets as additionalGuestAmounts
     *
     * A collection of charges related to additional guests.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[]
     */
    public function getAdditionalGuestAmounts()
    {
        return $this->additionalGuestAmounts;
    }

    /**
     * Sets a new additionalGuestAmounts
     *
     * A collection of charges related to additional guests.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[]
     * $additionalGuestAmounts
     * @return self
     */
    public function setAdditionalGuestAmounts(array $additionalGuestAmounts)
    {
        $this->additionalGuestAmounts = $additionalGuestAmounts;

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

