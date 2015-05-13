<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ServiceRequestType
 *
 * Describes a customer request for a service or facility which is not directly
 * bookable in the supplier's system and may have to be passed on to the ultimate
 * provider of the service e.g. flowers in room; low floor room etc.
 * XSD Type: ServiceRequestType
 */
class ServiceRequestType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @property string $travelSector
     */
    private $travelSector = null;

    /**
     * Identifies the inventory item to which this request relates.
     *
     * @property string $inventoryItemRPH
     */
    private $inventoryItemRPH = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as travelSector
     *
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @return string
     */
    public function getTravelSector()
    {
        return $this->travelSector;
    }

    /**
     * Sets a new travelSector
     *
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @param string $travelSector
     * @return self
     */
    public function setTravelSector($travelSector)
    {
        $this->travelSector = $travelSector;

        return $this;
    }

    /**
     * Gets as inventoryItemRPH
     *
     * Identifies the inventory item to which this request relates.
     *
     * @return string
     */
    public function getInventoryItemRPH()
    {
        return $this->inventoryItemRPH;
    }

    /**
     * Sets a new inventoryItemRPH
     *
     * Identifies the inventory item to which this request relates.
     *
     * @param string $inventoryItemRPH
     * @return self
     */
    public function setInventoryItemRPH($inventoryItemRPH)
    {
        $this->inventoryItemRPH = $inventoryItemRPH;

        return $this;
    }


}

