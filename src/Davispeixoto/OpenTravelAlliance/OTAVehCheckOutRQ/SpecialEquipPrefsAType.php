<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ;

/**
 * Class representing SpecialEquipPrefsAType
 */
class SpecialEquipPrefsAType
{

    /**
     * Indicates the preferences for one or more specific items of additional
     * equipment, such as ski racks, child seats, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPref
     */
    private $specialEquipPref = null;

    /**
     * Adds as specialEquipPref
     *
     * Indicates the preferences for one or more specific items of additional
     * equipment, such as ski racks, child seats, etc.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\SpecialEquipPrefsAType\SpecialEquipPrefAType
     * $specialEquipPref
     */
    public function addToSpecialEquipPref(
        \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref
    ) {
        $this->specialEquipPref[] = $specialEquipPref;

        return $this;
    }

    /**
     * isset specialEquipPref
     *
     * Indicates the preferences for one or more specific items of additional
     * equipment, such as ski racks, child seats, etc.
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
     * Indicates the preferences for one or more specific items of additional
     * equipment, such as ski racks, child seats, etc.
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
     * Indicates the preferences for one or more specific items of additional
     * equipment, such as ski racks, child seats, etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     */
    public function getSpecialEquipPref()
    {
        return $this->specialEquipPref;
    }

    /**
     * Sets a new specialEquipPref
     *
     * Indicates the preferences for one or more specific items of additional
     * equipment, such as ski racks, child seats, etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPref
     * @return self
     */
    public function setSpecialEquipPref(array $specialEquipPref)
    {
        $this->specialEquipPref = $specialEquipPref;

        return $this;
    }


}

