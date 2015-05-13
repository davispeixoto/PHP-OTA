<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleEquipmentType
 *
 * The VehicleEquipmentType complex type identifies the data that fully describes a
 * piece of special equipment, including the description and any restrictions that
 * may apply to its rental.
 * XSD Type: VehicleEquipmentType
 */
class VehicleEquipmentType
{

    /**
     * Identifies the specific type of special equipment. Refer to OpenTravel Code List
     * Equipment Type (EQP).
     *
     * @property string $equipType
     */
    private $equipType = null;

    /**
     * Quantity.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Equipment restriction that may apply.
     *
     * @property string $restriction
     */
    private $restriction = null;

    /**
     * Equipment description.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as equipType
     *
     * Identifies the specific type of special equipment. Refer to OpenTravel Code List
     * Equipment Type (EQP).
     *
     * @return string
     */
    public function getEquipType()
    {
        return $this->equipType;
    }

    /**
     * Sets a new equipType
     *
     * Identifies the specific type of special equipment. Refer to OpenTravel Code List
     * Equipment Type (EQP).
     *
     * @param string $equipType
     * @return self
     */
    public function setEquipType($equipType)
    {
        $this->equipType = $equipType;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Quantity.
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
     * Quantity.
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
     * Gets as restriction
     *
     * Equipment restriction that may apply.
     *
     * @return string
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * Sets a new restriction
     *
     * Equipment restriction that may apply.
     *
     * @param string $restriction
     * @return self
     */
    public function setRestriction($restriction)
    {
        $this->restriction = $restriction;

        return $this;
    }

    /**
     * Gets as description
     *
     * Equipment description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Equipment description.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }


}

