<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType;

/**
 * Class representing SpecialEquipPrefsAType
 */
class SpecialEquipPrefsAType
{

    /**
     * A preference for one specific piece of equipment
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPref
     */
    private $specialEquipPref = null;

    /**
     * Adds as specialEquipPref
     *
     * A preference for one specific piece of equipment
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType
     * $specialEquipPref
     */
    public function addToSpecialEquipPref(
        \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref
    ) {
        $this->specialEquipPref[] = $specialEquipPref;

        return $this;
    }

    /**
     * isset specialEquipPref
     *
     * A preference for one specific piece of equipment
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialEquipPref($index)
    {
        return isset($this->specialEquipPref[$index]);
    }

    /**
     * unset specialEquipPref
     *
     * A preference for one specific piece of equipment
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialEquipPref($index)
    {
        unset($this->specialEquipPref[$index]);
    }

    /**
     * Gets as specialEquipPref
     *
     * A preference for one specific piece of equipment
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     */
    public function getSpecialEquipPref()
    {
        return $this->specialEquipPref;
    }

    /**
     * Sets a new specialEquipPref
     *
     * A preference for one specific piece of equipment
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPref
     * @return self
     */
    public function setSpecialEquipPref(array $specialEquipPref)
    {
        $this->specialEquipPref = $specialEquipPref;

        return $this;
    }


}

