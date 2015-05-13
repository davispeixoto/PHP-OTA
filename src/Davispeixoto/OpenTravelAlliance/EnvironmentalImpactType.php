<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing EnvironmentalImpactType
 *
 * Property environmental impact and green program and initiative information.
 * XSD Type: EnvironmentalImpactType
 */
class EnvironmentalImpactType
{

    /**
     * Carbon foot print information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\CarbonFootprintAType
     * $carbonFootprint
     */
    private $carbonFootprint = null;

    /**
     * Water usage information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\WaterAType
     * $water
     */
    private $water = null;

    /**
     * Property energy and power usage information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\EnergyAType
     * $energy
     */
    private $energy = null;

    /**
     * Recycling information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\RecyclingAType
     * $recycling
     */
    private $recycling = null;

    /**
     * Other environmental program information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\GeneralAType
     * $general
     */
    private $general = null;

    /**
     * Gets as carbonFootprint
     *
     * Carbon foot print information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\CarbonFootprintAType
     */
    public function getCarbonFootprint()
    {
        return $this->carbonFootprint;
    }

    /**
     * Sets a new carbonFootprint
     *
     * Carbon foot print information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\CarbonFootprintAType
     * $carbonFootprint
     * @return self
     */
    public function setCarbonFootprint(
        \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\CarbonFootprintAType $carbonFootprint
    ) {
        $this->carbonFootprint = $carbonFootprint;

        return $this;
    }

    /**
     * Gets as water
     *
     * Water usage information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\WaterAType
     */
    public function getWater()
    {
        return $this->water;
    }

    /**
     * Sets a new water
     *
     * Water usage information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\WaterAType
     * $water
     * @return self
     */
    public function setWater(\Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\WaterAType $water)
    {
        $this->water = $water;

        return $this;
    }

    /**
     * Gets as energy
     *
     * Property energy and power usage information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\EnergyAType
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Sets a new energy
     *
     * Property energy and power usage information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\EnergyAType
     * $energy
     * @return self
     */
    public function setEnergy(\Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\EnergyAType $energy)
    {
        $this->energy = $energy;

        return $this;
    }

    /**
     * Gets as recycling
     *
     * Recycling information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\RecyclingAType
     */
    public function getRecycling()
    {
        return $this->recycling;
    }

    /**
     * Sets a new recycling
     *
     * Recycling information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\RecyclingAType
     * $recycling
     * @return self
     */
    public function setRecycling(\Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\RecyclingAType $recycling)
    {
        $this->recycling = $recycling;

        return $this;
    }

    /**
     * Gets as general
     *
     * Other environmental program information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\GeneralAType
     */
    public function getGeneral()
    {
        return $this->general;
    }

    /**
     * Sets a new general
     *
     * Other environmental program information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\GeneralAType
     * $general
     * @return self
     */
    public function setGeneral(\Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\GeneralAType $general)
    {
        $this->general = $general;

        return $this;
    }


}

