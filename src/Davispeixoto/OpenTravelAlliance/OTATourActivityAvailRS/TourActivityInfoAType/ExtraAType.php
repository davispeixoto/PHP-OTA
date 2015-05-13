<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType;

/**
 * Class representing ExtraAType
 */
class ExtraAType
{

    /**
     * The code issued by the supplier that uniquely identifies the extra.
     *
     * @property string $supplierCode
     */
    private $supplierCode = null;

    /**
     * The trading partner issued code that uniquely identifies the extra and is
     * associated with the supplier code.
     *
     * @property string $partnerCode
     */
    private $partnerCode = null;

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
     * The quantity of this extra that is/are available.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * If true, this extra is required to participate in the tour/ activity.
     *
     * @property boolean $requiredInd
     */
    private $requiredInd = null;

    /**
     * If true, this extra may be reserved.
     *
     * @property boolean $reserveInd
     */
    private $reserveInd = null;

    /**
     * Deposit information if a deposit is required for the extra.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\DepositAType
     * $deposit
     */
    private $deposit = null;

    /**
     * Indicates where the extra can be obtained and returned.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\LocationAType[]
     * $location
     */
    private $location = null;

    /**
     * Summary and/or detailed pricing.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\PricingAType
     * $pricing
     */
    private $pricing = null;

    /**
     * Rules associated with the extra.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType[] $rule
     */
    private $rule = null;

    /**
     * Gets as supplierCode
     *
     * The code issued by the supplier that uniquely identifies the extra.
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
     * The code issued by the supplier that uniquely identifies the extra.
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
     * Gets as partnerCode
     *
     * The trading partner issued code that uniquely identifies the extra and is
     * associated with the supplier code.
     *
     * @return string
     */
    public function getPartnerCode()
    {
        return $this->partnerCode;
    }

    /**
     * Sets a new partnerCode
     *
     * The trading partner issued code that uniquely identifies the extra and is
     * associated with the supplier code.
     *
     * @param string $partnerCode
     * @return self
     */
    public function setPartnerCode($partnerCode)
    {
        $this->partnerCode = $partnerCode;

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
     * The quantity of this extra that is/are available.
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
     * The quantity of this extra that is/are available.
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
     * Gets as requiredInd
     *
     * If true, this extra is required to participate in the tour/ activity.
     *
     * @return boolean
     */
    public function getRequiredInd()
    {
        return $this->requiredInd;
    }

    /**
     * Sets a new requiredInd
     *
     * If true, this extra is required to participate in the tour/ activity.
     *
     * @param boolean $requiredInd
     * @return self
     */
    public function setRequiredInd($requiredInd)
    {
        $this->requiredInd = $requiredInd;

        return $this;
    }

    /**
     * Gets as reserveInd
     *
     * If true, this extra may be reserved.
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
     * If true, this extra may be reserved.
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
     * Gets as deposit
     *
     * Deposit information if a deposit is required for the extra.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\DepositAType
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * Sets a new deposit
     *
     * Deposit information if a deposit is required for the extra.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\DepositAType
     * $deposit
     * @return self
     */
    public function setDeposit(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\DepositAType $deposit
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\LocationAType
     * $location
     */
    public function addToLocation(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\LocationAType $location
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\LocationAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\LocationAType[]
     * $location
     * @return self
     */
    public function setLocation(array $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Gets as pricing
     *
     * Summary and/or detailed pricing.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\PricingAType
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets a new pricing
     *
     * Summary and/or detailed pricing.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\PricingAType
     * $pricing
     * @return self
     */
    public function setPricing(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\PricingAType $pricing
    ) {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Adds as rule
     *
     * Rules associated with the extra.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType $rule
     */
    public function addToRule(\Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType $rule)
    {
        $this->rule[] = $rule;

        return $this;
    }

    /**
     * isset rule
     *
     * Rules associated with the extra.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRule($index)
    {
        return isset($this->rule[$index]);
    }

    /**
     * unset rule
     *
     * Rules associated with the extra.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRule($index)
    {
        unset($this->rule[$index]);
    }

    /**
     * Gets as rule
     *
     * Rules associated with the extra.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Sets a new rule
     *
     * Rules associated with the extra.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType[] $rule
     * @return self
     */
    public function setRule(array $rule)
    {
        $this->rule = $rule;

        return $this;
    }


}

