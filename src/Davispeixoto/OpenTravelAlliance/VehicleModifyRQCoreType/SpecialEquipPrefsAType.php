<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType;

/**
 * Class representing SpecialEquipPrefsAType
 */
class SpecialEquipPrefsAType
{

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPref
     */
    private $specialEquipPref = null;

    /**
     * Adds as specialEquipPref
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType
     * $specialEquipPref
     */
    public function addToSpecialEquipPref(
        \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref
    ) {
        $this->specialEquipPref[] = $specialEquipPref;

        return $this;
    }

    /**
     * isset specialEquipPref
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
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     */
    public function getSpecialEquipPref()
    {
        return $this->specialEquipPref;
    }

    /**
     * Sets a new specialEquipPref
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPref
     * @return self
     */
    public function setSpecialEquipPref(array $specialEquipPref)
    {
        $this->specialEquipPref = $specialEquipPref;

        return $this;
    }


}

