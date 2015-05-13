<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CostingItemType
 *
 * Details of an invoice item
 * XSD Type: CostingItemType
 */
class CostingItemType
{

    /**
     * A description of an invoice item.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Used to associate a cost with a specific inventory item, e.g. a supplement for a
     * flight leg.
     *
     * @property string $inventoryItemRPH
     */
    private $inventoryItemRPH = null;

    /**
     * Used to associate a cost with a specific passenger, e.g. a vegetarian meal
     * supplement.
     *
     * @property string $passengerRPH
     */
    private $passengerRPH = null;

    /**
     * Used to indicate what the cost is based on e.g., per Passenger, per Room, per
     * Booking. Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @property string $costBasis
     */
    private $costBasis = null;

    /**
     * Specifies what the invoice item is for. Refer to the OpenTravel Code Table Price
     * Type Code (PRI).
     *
     * @property string $priceTypeCode
     */
    private $priceTypeCode = null;

    /**
     * Unit cost in a given monetary unit.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CostingItemType\UnitCostAType
     * $unitCost
     */
    private $unitCost = null;

    /**
     * Unit cost multiplied by quantity
     *
     * @property \Davispeixoto\OpenTravelAlliance\CostingItemType\ExtendedCostAType
     * $extendedCost
     */
    private $extendedCost = null;

    /**
     * The commission payable to the agent.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CostingItemType\CommissionAType
     * $commission
     */
    private $commission = null;

    /**
     * Gets as description
     *
     * A description of an invoice item.
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
     * A description of an invoice item.
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
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
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
     * Used to define the quantity for an associated element or attribute.
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
     * Gets as inventoryItemRPH
     *
     * Used to associate a cost with a specific inventory item, e.g. a supplement for a
     * flight leg.
     *
     * @return string
     */
    public function getInventoryItemRPH()
    {
        return $this->inventoryItemRPH;
    }

    /**
     * Sets a new inventoryItemRPH
     *
     * Used to associate a cost with a specific inventory item, e.g. a supplement for a
     * flight leg.
     *
     * @param string $inventoryItemRPH
     * @return self
     */
    public function setInventoryItemRPH($inventoryItemRPH)
    {
        $this->inventoryItemRPH = $inventoryItemRPH;

        return $this;
    }

    /**
     * Gets as passengerRPH
     *
     * Used to associate a cost with a specific passenger, e.g. a vegetarian meal
     * supplement.
     *
     * @return string
     */
    public function getPassengerRPH()
    {
        return $this->passengerRPH;
    }

    /**
     * Sets a new passengerRPH
     *
     * Used to associate a cost with a specific passenger, e.g. a vegetarian meal
     * supplement.
     *
     * @param string $passengerRPH
     * @return self
     */
    public function setPassengerRPH($passengerRPH)
    {
        $this->passengerRPH = $passengerRPH;

        return $this;
    }

    /**
     * Gets as costBasis
     *
     * Used to indicate what the cost is based on e.g., per Passenger, per Room, per
     * Booking. Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @return string
     */
    public function getCostBasis()
    {
        return $this->costBasis;
    }

    /**
     * Sets a new costBasis
     *
     * Used to indicate what the cost is based on e.g., per Passenger, per Room, per
     * Booking. Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @param string $costBasis
     * @return self
     */
    public function setCostBasis($costBasis)
    {
        $this->costBasis = $costBasis;

        return $this;
    }

    /**
     * Gets as priceTypeCode
     *
     * Specifies what the invoice item is for. Refer to the OpenTravel Code Table Price
     * Type Code (PRI).
     *
     * @return string
     */
    public function getPriceTypeCode()
    {
        return $this->priceTypeCode;
    }

    /**
     * Sets a new priceTypeCode
     *
     * Specifies what the invoice item is for. Refer to the OpenTravel Code Table Price
     * Type Code (PRI).
     *
     * @param string $priceTypeCode
     * @return self
     */
    public function setPriceTypeCode($priceTypeCode)
    {
        $this->priceTypeCode = $priceTypeCode;

        return $this;
    }

    /**
     * Gets as unitCost
     *
     * Unit cost in a given monetary unit.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CostingItemType\UnitCostAType
     */
    public function getUnitCost()
    {
        return $this->unitCost;
    }

    /**
     * Sets a new unitCost
     *
     * Unit cost in a given monetary unit.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CostingItemType\UnitCostAType $unitCost
     * @return self
     */
    public function setUnitCost(\Davispeixoto\OpenTravelAlliance\CostingItemType\UnitCostAType $unitCost)
    {
        $this->unitCost = $unitCost;

        return $this;
    }

    /**
     * Gets as extendedCost
     *
     * Unit cost multiplied by quantity
     *
     * @return \Davispeixoto\OpenTravelAlliance\CostingItemType\ExtendedCostAType
     */
    public function getExtendedCost()
    {
        return $this->extendedCost;
    }

    /**
     * Sets a new extendedCost
     *
     * Unit cost multiplied by quantity
     *
     * @param \Davispeixoto\OpenTravelAlliance\CostingItemType\ExtendedCostAType
     * $extendedCost
     * @return self
     */
    public function setExtendedCost(\Davispeixoto\OpenTravelAlliance\CostingItemType\ExtendedCostAType $extendedCost)
    {
        $this->extendedCost = $extendedCost;

        return $this;
    }

    /**
     * Gets as commission
     *
     * The commission payable to the agent.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CostingItemType\CommissionAType
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * The commission payable to the agent.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CostingItemType\CommissionAType
     * $commission
     * @return self
     */
    public function setCommission(\Davispeixoto\OpenTravelAlliance\CostingItemType\CommissionAType $commission)
    {
        $this->commission = $commission;

        return $this;
    }


}

