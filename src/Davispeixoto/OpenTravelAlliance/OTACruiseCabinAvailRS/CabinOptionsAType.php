<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS;

/**
 * Class representing CabinOptionsAType
 */
class CabinOptionsAType
{

    /**
     * Contains information about the proposed cabin, It locates the cabin on the ship
     * and gives the cabin bed configuration.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType[]
     * $cabinOption
     */
    private $cabinOption = null;

    /**
     * Adds as cabinOption
     *
     * Contains information about the proposed cabin, It locates the cabin on the ship
     * and gives the cabin bed configuration.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType
     * $cabinOption
     */
    public function addToCabinOption(
        \Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType $cabinOption
    ) {
        $this->cabinOption[] = $cabinOption;

        return $this;
    }

    /**
     * isset cabinOption
     *
     * Contains information about the proposed cabin, It locates the cabin on the ship
     * and gives the cabin bed configuration.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCabinOption($index)
    {
        return isset($this->cabinOption[$index]);
    }

    /**
     * unset cabinOption
     *
     * Contains information about the proposed cabin, It locates the cabin on the ship
     * and gives the cabin bed configuration.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCabinOption($index)
    {
        unset($this->cabinOption[$index]);
    }

    /**
     * Gets as cabinOption
     *
     * Contains information about the proposed cabin, It locates the cabin on the ship
     * and gives the cabin bed configuration.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType[]
     */
    public function getCabinOption()
    {
        return $this->cabinOption;
    }

    /**
     * Sets a new cabinOption
     *
     * Contains information about the proposed cabin, It locates the cabin on the ship
     * and gives the cabin bed configuration.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType[]
     * $cabinOption
     * @return self
     */
    public function setCabinOption(array $cabinOption)
    {
        $this->cabinOption = $cabinOption;

        return $this;
    }


}

