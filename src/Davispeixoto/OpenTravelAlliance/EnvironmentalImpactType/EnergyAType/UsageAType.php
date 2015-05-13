<?php

namespace Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\EnergyAType;

/**
 * Class representing UsageAType
 */
class UsageAType
{

    /**
     * Power amount.Example: 677
     *
     * @property float $quantity
     */
    private $quantity = null;

    /**
     * Power type.Example: Electric
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListPowerType $powerType
     */
    private $powerType = null;

    /**
     * Power quantity unit of measure.Example: Killowatt(s)
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListUnitOfMeasureType $powerTypeUOM
     */
    private $powerTypeUOM = null;

    /**
     * Gets as quantity
     *
     * Power amount.Example: 677
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Power amount.Example: 677
     *
     * @param float $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as powerType
     *
     * Power type.Example: Electric
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListPowerType
     */
    public function getPowerType()
    {
        return $this->powerType;
    }

    /**
     * Sets a new powerType
     *
     * Power type.Example: Electric
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListPowerType $powerType
     * @return self
     */
    public function setPowerType(\Davispeixoto\OpenTravelAlliance\ListPowerType $powerType)
    {
        $this->powerType = $powerType;

        return $this;
    }

    /**
     * Gets as powerTypeUOM
     *
     * Power quantity unit of measure.Example: Killowatt(s)
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListUnitOfMeasureType
     */
    public function getPowerTypeUOM()
    {
        return $this->powerTypeUOM;
    }

    /**
     * Sets a new powerTypeUOM
     *
     * Power quantity unit of measure.Example: Killowatt(s)
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListUnitOfMeasureType $powerTypeUOM
     * @return self
     */
    public function setPowerTypeUOM(\Davispeixoto\OpenTravelAlliance\ListUnitOfMeasureType $powerTypeUOM)
    {
        $this->powerTypeUOM = $powerTypeUOM;

        return $this;
    }


}

