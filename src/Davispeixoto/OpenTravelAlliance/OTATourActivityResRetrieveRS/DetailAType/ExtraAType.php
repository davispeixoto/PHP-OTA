<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType;

/**
 * Class representing ExtraAType
 */
class ExtraAType
{

    /**
     * The supplier code that uniquely identifies the extra.
     *
     * @property string $supplierCode
     */
    private $supplierCode = null;

    /**
     * The trading partner code that uniquely identifies the extra and is associated
     * with the supplier code.
     *
     * @property string $otherCode
     */
    private $otherCode = null;

    /**
     * The extra amenity name.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * A description of the extra.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Identifies additional information for an extra. E.g. "Large", "Medium" or
     * "Small" frame for a mountain bike.
     *
     * @property string $additionalInfo
     */
    private $additionalInfo = null;

    /**
     * The quantity of this extra required.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * If true, a reservation for this this extra is has been confirmed.
     *
     * @property boolean $reserveInd
     */
    private $reserveInd = null;

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @property string $participantID
     */
    private $participantID = null;

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant category with other information.
     *
     * @property string $participantCategoryID
     */
    private $participantCategoryID = null;

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @property string $groupID
     */
    private $groupID = null;

    /**
     * Deposit payment information if a deposit is required for the extra.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\DepositAType
     * $deposit
     */
    private $deposit = null;

    /**
     * Indicates where the extra can be obtained and returned.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\LocationAType[]
     * $location
     */
    private $location = null;

    /**
     * Summary and detailed pricing.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\PricingAType[]
     * $pricing
     */
    private $pricing = null;

    /**
     * Gets as supplierCode
     *
     * The supplier code that uniquely identifies the extra.
     *
     * @return string
     */
    public function getSupplierCode()
    {
        return $this->supplierCode;
    }

    /**
     * Sets a new supplierCode
     *
     * The supplier code that uniquely identifies the extra.
     *
     * @param string $supplierCode
     * @return self
     */
    public function setSupplierCode($supplierCode)
    {
        $this->supplierCode = $supplierCode;

        return $this;
    }

    /**
     * Gets as otherCode
     *
     * The trading partner code that uniquely identifies the extra and is associated
     * with the supplier code.
     *
     * @return string
     */
    public function getOtherCode()
    {
        return $this->otherCode;
    }

    /**
     * Sets a new otherCode
     *
     * The trading partner code that uniquely identifies the extra and is associated
     * with the supplier code.
     *
     * @param string $otherCode
     * @return self
     */
    public function setOtherCode($otherCode)
    {
        $this->otherCode = $otherCode;

        return $this;
    }

    /**
     * Gets as name
     *
     * The extra amenity name.
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
     * The extra amenity name.
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
     * Gets as description
     *
     * A description of the extra.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the extra.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as additionalInfo
     *
     * Identifies additional information for an extra. E.g. "Large", "Medium" or
     * "Small" frame for a mountain bike.
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets a new additionalInfo
     *
     * Identifies additional information for an extra. E.g. "Large", "Medium" or
     * "Small" frame for a mountain bike.
     *
     * @param string $additionalInfo
     * @return self
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity of this extra required.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The quantity of this extra required.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as reserveInd
     *
     * If true, a reservation for this this extra is has been confirmed.
     *
     * @return boolean
     */
    public function getReserveInd()
    {
        return $this->reserveInd;
    }

    /**
     * Sets a new reserveInd
     *
     * If true, a reservation for this this extra is has been confirmed.
     *
     * @param boolean $reserveInd
     * @return self
     */
    public function setReserveInd($reserveInd)
    {
        $this->reserveInd = $reserveInd;

        return $this;
    }

    /**
     * Gets as participantID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @return string
     */
    public function getParticipantID()
    {
        return $this->participantID;
    }

    /**
     * Sets a new participantID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @param string $participantID
     * @return self
     */
    public function setParticipantID($participantID)
    {
        $this->participantID = $participantID;

        return $this;
    }

    /**
     * Gets as participantCategoryID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant category with other information.
     *
     * @return string
     */
    public function getParticipantCategoryID()
    {
        return $this->participantCategoryID;
    }

    /**
     * Sets a new participantCategoryID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant category with other information.
     *
     * @param string $participantCategoryID
     * @return self
     */
    public function setParticipantCategoryID($participantCategoryID)
    {
        $this->participantCategoryID = $participantCategoryID;

        return $this;
    }

    /**
     * Gets as groupID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @return string
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * Sets a new groupID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @param string $groupID
     * @return self
     */
    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;

        return $this;
    }

    /**
     * Gets as deposit
     *
     * Deposit payment information if a deposit is required for the extra.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\DepositAType
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * Sets a new deposit
     *
     * Deposit payment information if a deposit is required for the extra.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\DepositAType
     * $deposit
     * @return self
     */
    public function setDeposit(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\DepositAType $deposit
    ) {
        $this->deposit = $deposit;

        return $this;
    }

    /**
     * Adds as location
     *
     * Indicates where the extra can be obtained and returned.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\LocationAType
     * $location
     */
    public function addToLocation(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\LocationAType $location
    ) {
        $this->location[] = $location;

        return $this;
    }

    /**
     * isset location
     *
     * Indicates where the extra can be obtained and returned.
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
     * Indicates where the extra can be obtained and returned.
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
     * Indicates where the extra can be obtained and returned.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\LocationAType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Indicates where the extra can be obtained and returned.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\LocationAType[]
     * $location
     * @return self
     */
    public function setLocation(array $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Adds as pricing
     *
     * Summary and detailed pricing.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\PricingAType
     * $pricing
     */
    public function addToPricing(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\PricingAType $pricing
    ) {
        $this->pricing[] = $pricing;

        return $this;
    }

    /**
     * isset pricing
     *
     * Summary and detailed pricing.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricing($index)
    {
        return isset($this->pricing[$index]);
    }

    /**
     * unset pricing
     *
     * Summary and detailed pricing.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricing($index)
    {
        unset($this->pricing[$index]);
    }

    /**
     * Gets as pricing
     *
     * Summary and detailed pricing.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\PricingAType[]
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets a new pricing
     *
     * Summary and detailed pricing.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\PricingAType[]
     * $pricing
     * @return self
     */
    public function setPricing(array $pricing)
    {
        $this->pricing = $pricing;

        return $this;
    }


}

