<?php

namespace Davispeixoto\OpenTravelAlliance\GroundReservationType\ServiceAType;

/**
 * Class representing VehicleMakeModelAType
 */
class VehicleMakeModelAType
{

    /**
     * The name of an item.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Provides the code identifying the item.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The model year of the vehicle.
     *
     * @property integer $modelYear
     */
    private $modelYear = null;

    /**
     * Gets as name
     *
     * The name of an item.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of an item.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as code
     *
     * Provides the code identifying the item.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Provides the code identifying the item.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as modelYear
     *
     * The model year of the vehicle.
     *
     * @return integer
     */
    public function getModelYear()
    {
        return $this->modelYear;
    }

    /**
     * Sets a new modelYear
     *
     * The model year of the vehicle.
     *
     * @param integer $modelYear
     * @return self
     */
    public function setModelYear($modelYear)
    {
        $this->modelYear = $modelYear;

        return $this;
    }


}

