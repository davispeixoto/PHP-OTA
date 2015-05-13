<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType;

/**
 * Class representing VehPrefsAType
 */
class VehPrefsAType
{

    /**
     * A preference for one specific vehicle type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[]
     * $vehPref
     */
    private $vehPref = null;

    /**
     * Adds as vehPref
     *
     * A preference for one specific vehicle type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType
     * $vehPref
     */
    public function addToVehPref(
        \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType $vehPref
    ) {
        $this->vehPref[] = $vehPref;

        return $this;
    }

    /**
     * isset vehPref
     *
     * A preference for one specific vehicle type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehPref($index)
    {
        return isset($this->vehPref[$index]);
    }

    /**
     * unset vehPref
     *
     * A preference for one specific vehicle type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehPref($index)
    {
        unset($this->vehPref[$index]);
    }

    /**
     * Gets as vehPref
     *
     * A preference for one specific vehicle type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[]
     */
    public function getVehPref()
    {
        return $this->vehPref;
    }

    /**
     * Sets a new vehPref
     *
     * A preference for one specific vehicle type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[]
     * $vehPref
     * @return self
     */
    public function setVehPref(array $vehPref)
    {
        $this->vehPref = $vehPref;

        return $this;
    }


}

