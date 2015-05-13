<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\SpecialEquipPrefsAType;

/**
 * Class representing SpecialEquipPrefAType
 */
class SpecialEquipPrefAType
{

    /**
     * Identifies the specific type of special equipment. Refer to OpenTravel Code List
     * Equipment Type (EQP).
     *
     * @property string $equipType
     */
    private $equipType = null;

    /**
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Identifes an action to take place. Typically used to modify the EquipType and/or
     * Quantity.
     *
     * @property string $action
     */
    private $action = null;

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
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
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
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as action
     *
     * Identifes an action to take place. Typically used to modify the EquipType and/or
     * Quantity.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * Identifes an action to take place. Typically used to modify the EquipType and/or
     * Quantity.
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }


}

