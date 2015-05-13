<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\SpecialEquipmentsAType;

use Davispeixoto\OpenTravelAlliance\VehicleEquipmentType;

/**
 * Class representing SpecialEquipmentAType
 */
class SpecialEquipmentAType extends VehicleEquipmentType
{

    /**
     * The GDS specific code that is used to identify the special equipment.
     *
     * @property string $gDSTypeCode
     */
    private $gDSTypeCode = null;

    /**
     * The name of the special equipment.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * If true, there is no charge for the special equipment. If false, there is a
     * charge for the special equipment.
     *
     * @property boolean $freeInd
     */
    private $freeInd = null;

    /**
     * If true, the equipment policy information for this type of equipment should be
     * read.
     *
     * @property boolean $readEquipPolicyInd
     */
    private $readEquipPolicyInd = null;

    /**
     * Identifies charges associated with the special equipment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * Gets as gDSTypeCode
     *
     * The GDS specific code that is used to identify the special equipment.
     *
     * @return string
     */
    public function getGDSTypeCode()
    {
        return $this->gDSTypeCode;
    }

    /**
     * Sets a new gDSTypeCode
     *
     * The GDS specific code that is used to identify the special equipment.
     *
     * @param string $gDSTypeCode
     * @return self
     */
    public function setGDSTypeCode($gDSTypeCode)
    {
        $this->gDSTypeCode = $gDSTypeCode;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the special equipment.
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
     * The name of the special equipment.
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
     * Gets as freeInd
     *
     * If true, there is no charge for the special equipment. If false, there is a
     * charge for the special equipment.
     *
     * @return boolean
     */
    public function getFreeInd()
    {
        return $this->freeInd;
    }

    /**
     * Sets a new freeInd
     *
     * If true, there is no charge for the special equipment. If false, there is a
     * charge for the special equipment.
     *
     * @param boolean $freeInd
     * @return self
     */
    public function setFreeInd($freeInd)
    {
        $this->freeInd = $freeInd;

        return $this;
    }

    /**
     * Gets as readEquipPolicyInd
     *
     * If true, the equipment policy information for this type of equipment should be
     * read.
     *
     * @return boolean
     */
    public function getReadEquipPolicyInd()
    {
        return $this->readEquipPolicyInd;
    }

    /**
     * Sets a new readEquipPolicyInd
     *
     * If true, the equipment policy information for this type of equipment should be
     * read.
     *
     * @param boolean $readEquipPolicyInd
     * @return self
     */
    public function setReadEquipPolicyInd($readEquipPolicyInd)
    {
        $this->readEquipPolicyInd = $readEquipPolicyInd;

        return $this;
    }

    /**
     * Gets as charge
     *
     * Identifies charges associated with the special equipment.
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
     * Identifies charges associated with the special equipment.
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

