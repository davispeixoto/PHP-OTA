<?php

namespace Davispeixoto\OpenTravelAlliance\GroundShuttleType;

/**
 * Class representing VehicleAType
 */
class VehicleAType
{

    /**
     * If true, this shuttle is disability compatible.
     *
     * @property boolean $disabilityInd
     */
    private $disabilityInd = null;

    /**
     * A unqiue ID for this shuttle that is set here and may be referenced elsewhere in
     * the message.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * An extensible list of shuttle types and/or categories.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListVehCategoryType $type
     */
    private $type = null;

    /**
     * An extensible list of shuttle sizes.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundShuttleType\VehicleAType\VehicleSizeAType
     * $vehicleSize
     */
    private $vehicleSize = null;

    /**
     * Gets as disabilityInd
     *
     * If true, this shuttle is disability compatible.
     *
     * @return boolean
     */
    public function getDisabilityInd()
    {
        return $this->disabilityInd;
    }

    /**
     * Sets a new disabilityInd
     *
     * If true, this shuttle is disability compatible.
     *
     * @param boolean $disabilityInd
     * @return self
     */
    public function setDisabilityInd($disabilityInd)
    {
        $this->disabilityInd = $disabilityInd;

        return $this;
    }

    /**
     * Gets as iD
     *
     * A unqiue ID for this shuttle that is set here and may be referenced elsewhere in
     * the message.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unqiue ID for this shuttle that is set here and may be referenced elsewhere in
     * the message.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as type
     *
     * An extensible list of shuttle types and/or categories.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListVehCategoryType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * An extensible list of shuttle types and/or categories.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListVehCategoryType $type
     * @return self
     */
    public function setType(\Davispeixoto\OpenTravelAlliance\ListVehCategoryType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as vehicleSize
     *
     * An extensible list of shuttle sizes.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundShuttleType\VehicleAType\VehicleSizeAType
     */
    public function getVehicleSize()
    {
        return $this->vehicleSize;
    }

    /**
     * Sets a new vehicleSize
     *
     * An extensible list of shuttle sizes.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundShuttleType\VehicleAType\VehicleSizeAType
     * $vehicleSize
     * @return self
     */
    public function setVehicleSize(
        \Davispeixoto\OpenTravelAlliance\GroundShuttleType\VehicleAType\VehicleSizeAType $vehicleSize
    ) {
        $this->vehicleSize = $vehicleSize;

        return $this;
    }


}

