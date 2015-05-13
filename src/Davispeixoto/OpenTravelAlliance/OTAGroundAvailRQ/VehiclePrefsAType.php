<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundAvailRQ;

/**
 * Class representing VehiclePrefsAType
 */
class VehiclePrefsAType
{

    /**
     * The quantity associated with Vehicle Type and/or Vehicle Size.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * An extensible list of vehicle types and/or categories.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListVehCategoryType $type
     */
    private $type = null;

    /**
     * An extensible list of vehicle sizes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListVehSizeType $size
     */
    private $size = null;

    /**
     * An extensible list of service levels.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListLevelOfServiceType $serviceLevel
     */
    private $serviceLevel = null;

    /**
     * Gets as quantity
     *
     * The quantity associated with Vehicle Type and/or Vehicle Size.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The quantity associated with Vehicle Type and/or Vehicle Size.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as type
     *
     * An extensible list of vehicle types and/or categories.
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
     * An extensible list of vehicle types and/or categories.
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
     * Gets as size
     *
     * An extensible list of vehicle sizes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListVehSizeType
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * An extensible list of vehicle sizes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListVehSizeType $size
     * @return self
     */
    public function setSize(\Davispeixoto\OpenTravelAlliance\ListVehSizeType $size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Gets as serviceLevel
     *
     * An extensible list of service levels.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListLevelOfServiceType
     */
    public function getServiceLevel()
    {
        return $this->serviceLevel;
    }

    /**
     * Sets a new serviceLevel
     *
     * An extensible list of service levels.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListLevelOfServiceType $serviceLevel
     * @return self
     */
    public function setServiceLevel(\Davispeixoto\OpenTravelAlliance\ListLevelOfServiceType $serviceLevel)
    {
        $this->serviceLevel = $serviceLevel;

        return $this;
    }


}

