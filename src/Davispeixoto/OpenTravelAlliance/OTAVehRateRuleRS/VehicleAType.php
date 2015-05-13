<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS;

use Davispeixoto\OpenTravelAlliance\VehicleType;

/**
 * Class representing VehicleAType
 */
class VehicleAType extends VehicleType
{

    /**
     * The lowest mileage per fuel unit.
     *
     * @property integer $lowMileage
     */
    private $lowMileage = null;

    /**
     * The highest mileage per fuel unit.
     *
     * @property integer $highMileage
     */
    private $highMileage = null;

    /**
     * The description of this vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description
     */
    private $description = null;

    /**
     * Gets as lowMileage
     *
     * The lowest mileage per fuel unit.
     *
     * @return integer
     */
    public function getLowMileage()
    {
        return $this->lowMileage;
    }

    /**
     * Sets a new lowMileage
     *
     * The lowest mileage per fuel unit.
     *
     * @param integer $lowMileage
     * @return self
     */
    public function setLowMileage($lowMileage)
    {
        $this->lowMileage = $lowMileage;

        return $this;
    }

    /**
     * Gets as highMileage
     *
     * The highest mileage per fuel unit.
     *
     * @return integer
     */
    public function getHighMileage()
    {
        return $this->highMileage;
    }

    /**
     * Sets a new highMileage
     *
     * The highest mileage per fuel unit.
     *
     * @param integer $highMileage
     * @return self
     */
    public function setHighMileage($highMileage)
    {
        $this->highMileage = $highMileage;

        return $this;
    }

    /**
     * Gets as description
     *
     * The description of this vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextTextType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The description of this vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description)
    {
        $this->description = $description;

        return $this;
    }


}

