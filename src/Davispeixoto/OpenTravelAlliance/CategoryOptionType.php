<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CategoryOptionType
 *
 * Specifies category option information.
 * XSD Type: CategoryOptionType
 */
class CategoryOptionType
{

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
     * Category availability status. Refer to OpenTravel Code table Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * When true, all cabins in this category are currently being held.
     *
     * @property boolean $heldIndicator
     */
    private $heldIndicator = null;

    /**
     * Category location in the ship: (I) Inside or (O) Outside.
     *
     * @property string $categoryLocation
     */
    private $categoryLocation = null;

    /**
     * Maximum number of guest per cabin.
     *
     * @property integer $maxOccupancy
     */
    private $maxOccupancy = null;

    /**
     * Contains additional category information. Refer to OpenTravel Code List Cabin
     * Filters (CBF).
     *
     * @property string[] $listOfCategoryQualifierCodes
     */
    private $listOfCategoryQualifierCodes = null;

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
     * Number of remaining cabins allocated to the group.
     *
     * @property integer $availableGroupAllocationQty
     */
    private $availableGroupAllocationQty = null;

    /**
     * Collection of price infos.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CategoryOptionType\PriceInfosAType\PriceInfoAType[]
     * $priceInfos
     */
    private $priceInfos = null;

    /**
     * The status per dining seating.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CategoryOptionType\DiningAType[]
     * $dining
     */
    private $dining = null;

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
     * Gets as status
     *
     * Category availability status. Refer to OpenTravel Code table Status (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Category availability status. Refer to OpenTravel Code table Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as heldIndicator
     *
     * When true, all cabins in this category are currently being held.
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
     * When true, all cabins in this category are currently being held.
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
     * Gets as categoryLocation
     *
     * Category location in the ship: (I) Inside or (O) Outside.
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
     * Category location in the ship: (I) Inside or (O) Outside.
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
     * Gets as maxOccupancy
     *
     * Maximum number of guest per cabin.
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
     * Maximum number of guest per cabin.
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
     * Adds as listOfCategoryQualifierCodes
     *
     * Contains additional category information. Refer to OpenTravel Code List Cabin
     * Filters (CBF).
     *
     * @return self
     * @param string $listOfCategoryQualifierCodes
     */
    public function addToListOfCategoryQualifierCodes($listOfCategoryQualifierCodes)
    {
        $this->listOfCategoryQualifierCodes[] = $listOfCategoryQualifierCodes;

        return $this;
    }

    /**
     * isset listOfCategoryQualifierCodes
     *
     * Contains additional category information. Refer to OpenTravel Code List Cabin
     * Filters (CBF).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListOfCategoryQualifierCodes($index)
    {
        return isset($this->listOfCategoryQualifierCodes[$index]);
    }

    /**
     * unset listOfCategoryQualifierCodes
     *
     * Contains additional category information. Refer to OpenTravel Code List Cabin
     * Filters (CBF).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListOfCategoryQualifierCodes($index)
    {
        unset($this->listOfCategoryQualifierCodes[$index]);
    }

    /**
     * Gets as listOfCategoryQualifierCodes
     *
     * Contains additional category information. Refer to OpenTravel Code List Cabin
     * Filters (CBF).
     *
     * @return string[]
     */
    public function getListOfCategoryQualifierCodes()
    {
        return $this->listOfCategoryQualifierCodes;
    }

    /**
     * Sets a new listOfCategoryQualifierCodes
     *
     * Contains additional category information. Refer to OpenTravel Code List Cabin
     * Filters (CBF).
     *
     * @param string $listOfCategoryQualifierCodes
     * @return self
     */
    public function setListOfCategoryQualifierCodes(array $listOfCategoryQualifierCodes)
    {
        $this->listOfCategoryQualifierCodes = $listOfCategoryQualifierCodes;

        return $this;
    }

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
     * Gets as availableGroupAllocationQty
     *
     * Number of remaining cabins allocated to the group.
     *
     * @return integer
     */
    public function getAvailableGroupAllocationQty()
    {
        return $this->availableGroupAllocationQty;
    }

    /**
     * Sets a new availableGroupAllocationQty
     *
     * Number of remaining cabins allocated to the group.
     *
     * @param integer $availableGroupAllocationQty
     * @return self
     */
    public function setAvailableGroupAllocationQty($availableGroupAllocationQty)
    {
        $this->availableGroupAllocationQty = $availableGroupAllocationQty;

        return $this;
    }

    /**
     * Adds as priceInfo
     *
     * Collection of price infos.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CategoryOptionType\PriceInfosAType\PriceInfoAType
     * $priceInfo
     */
    public function addToPriceInfos(
        \Davispeixoto\OpenTravelAlliance\CategoryOptionType\PriceInfosAType\PriceInfoAType $priceInfo
    ) {
        $this->priceInfos[] = $priceInfo;

        return $this;
    }

    /**
     * isset priceInfos
     *
     * Collection of price infos.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPriceInfos($index)
    {
        return isset($this->priceInfos[$index]);
    }

    /**
     * unset priceInfos
     *
     * Collection of price infos.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPriceInfos($index)
    {
        unset($this->priceInfos[$index]);
    }

    /**
     * Gets as priceInfos
     *
     * Collection of price infos.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CategoryOptionType\PriceInfosAType\PriceInfoAType[]
     */
    public function getPriceInfos()
    {
        return $this->priceInfos;
    }

    /**
     * Sets a new priceInfos
     *
     * Collection of price infos.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CategoryOptionType\PriceInfosAType\PriceInfoAType[]
     * $priceInfos
     * @return self
     */
    public function setPriceInfos(array $priceInfos)
    {
        $this->priceInfos = $priceInfos;

        return $this;
    }

    /**
     * Adds as dining
     *
     * The status per dining seating.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CategoryOptionType\DiningAType $dining
     */
    public function addToDining(\Davispeixoto\OpenTravelAlliance\CategoryOptionType\DiningAType $dining)
    {
        $this->dining[] = $dining;

        return $this;
    }

    /**
     * isset dining
     *
     * The status per dining seating.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDining($index)
    {
        return isset($this->dining[$index]);
    }

    /**
     * unset dining
     *
     * The status per dining seating.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDining($index)
    {
        unset($this->dining[$index]);
    }

    /**
     * Gets as dining
     *
     * The status per dining seating.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CategoryOptionType\DiningAType[]
     */
    public function getDining()
    {
        return $this->dining;
    }

    /**
     * Sets a new dining
     *
     * The status per dining seating.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CategoryOptionType\DiningAType[] $dining
     * @return self
     */
    public function setDining(array $dining)
    {
        $this->dining = $dining;

        return $this;
    }


}

