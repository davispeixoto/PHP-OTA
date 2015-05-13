<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleCoreType;

/**
 * Class representing VehTypeAType
 */
class VehTypeAType
{

    /**
     * The VehicleCategory attribute provides the catgeory of a vehicle. Refer to
     * OpenTravel Code List Vehicle Category (VEC).
     *
     * @property string $vehicleCategory
     */
    private $vehicleCategory = null;

    /**
     * The number of doors on a vehicle. This may be an exact number or a range, i.e.
     * 2-4.
     *
     * @property string $doorCount
     */
    private $doorCount = null;

    /**
     * Gets as vehicleCategory
     *
     * The VehicleCategory attribute provides the catgeory of a vehicle. Refer to
     * OpenTravel Code List Vehicle Category (VEC).
     *
     * @return string
     */
    public function getVehicleCategory()
    {
        return $this->vehicleCategory;
    }

    /**
     * Sets a new vehicleCategory
     *
     * The VehicleCategory attribute provides the catgeory of a vehicle. Refer to
     * OpenTravel Code List Vehicle Category (VEC).
     *
     * @param string $vehicleCategory
     * @return self
     */
    public function setVehicleCategory($vehicleCategory)
    {
        $this->vehicleCategory = $vehicleCategory;

        return $this;
    }

    /**
     * Gets as doorCount
     *
     * The number of doors on a vehicle. This may be an exact number or a range, i.e.
     * 2-4.
     *
     * @return string
     */
    public function getDoorCount()
    {
        return $this->doorCount;
    }

    /**
     * Sets a new doorCount
     *
     * The number of doors on a vehicle. This may be an exact number or a range, i.e.
     * 2-4.
     *
     * @param string $doorCount
     * @return self
     */
    public function setDoorCount($doorCount)
    {
        $this->doorCount = $doorCount;

        return $this;
    }


}

