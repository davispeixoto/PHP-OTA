<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType;

/**
 * Class representing SpecialEquipPrefsAType
 */
class SpecialEquipPrefsAType
{

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPref
     */
    private $specialEquipPref = null;

    /**
     * Used when the customer was previously quoted a rate for the equipment in an
     * availability search response.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * Adds as specialEquipPref
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType
     * $specialEquipPref
     */
    public function addToSpecialEquipPref(
        \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref
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
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     */
    public function getSpecialEquipPref()
    {
        return $this->specialEquipPref;
    }

    /**
     * Sets a new specialEquipPref
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPref
     * @return self
     */
    public function setSpecialEquipPref(array $specialEquipPref)
    {
        $this->specialEquipPref = $specialEquipPref;

        return $this;
    }

    /**
     * Gets as charge
     *
     * Used when the customer was previously quoted a rate for the equipment in an
     * availability search response.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargeType
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * Used when the customer was previously quoted a rate for the equipment in an
     * availability search response.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge
     * @return self
     */
    public function setCharge(\Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge)
    {
        $this->charge = $charge;

        return $this;
    }


}

