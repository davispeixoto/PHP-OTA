<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehExchangeRS;

use Davispeixoto\OpenTravelAlliance\VehicleType;

/**
 * Class representing VehicleAType
 */
class VehicleAType extends VehicleType
{

    /**
     * When true, this vehicle is being returned. When false, this vehicle is being
     * given in exchange.
     *
     * @property boolean $returnVehicleIndicator
     */
    private $returnVehicleIndicator = null;

    /**
     * Provides details of the vehicle at checkout, exchange in, or exchange out.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehExchangeRS\VehicleAType\VehRentalDetailsAType[]
     * $vehRentalDetails
     */
    private $vehRentalDetails = null;

    /**
     * Collection of priced equipment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleEquipmentType[] $pricedEquips
     */
    private $pricedEquips = null;

    /**
     * Gets as returnVehicleIndicator
     *
     * When true, this vehicle is being returned. When false, this vehicle is being
     * given in exchange.
     *
     * @return boolean
     */
    public function getReturnVehicleIndicator()
    {
        return $this->returnVehicleIndicator;
    }

    /**
     * Sets a new returnVehicleIndicator
     *
     * When true, this vehicle is being returned. When false, this vehicle is being
     * given in exchange.
     *
     * @param boolean $returnVehicleIndicator
     * @return self
     */
    public function setReturnVehicleIndicator($returnVehicleIndicator)
    {
        $this->returnVehicleIndicator = $returnVehicleIndicator;

        return $this;
    }

    /**
     * Adds as vehRentalDetails
     *
     * Provides details of the vehicle at checkout, exchange in, or exchange out.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehExchangeRS\VehicleAType\VehRentalDetailsAType
     * $vehRentalDetails
     */
    public function addToVehRentalDetails(
        \Davispeixoto\OpenTravelAlliance\OTAVehExchangeRS\VehicleAType\VehRentalDetailsAType $vehRentalDetails
    ) {
        $this->vehRentalDetails[] = $vehRentalDetails;

        return $this;
    }

    /**
     * isset vehRentalDetails
     *
     * Provides details of the vehicle at checkout, exchange in, or exchange out.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehRentalDetails($index)
    {
        return isset($this->vehRentalDetails[$index]);
    }

    /**
     * unset vehRentalDetails
     *
     * Provides details of the vehicle at checkout, exchange in, or exchange out.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehRentalDetails($index)
    {
        unset($this->vehRentalDetails[$index]);
    }

    /**
     * Gets as vehRentalDetails
     *
     * Provides details of the vehicle at checkout, exchange in, or exchange out.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehExchangeRS\VehicleAType\VehRentalDetailsAType[]
     */
    public function getVehRentalDetails()
    {
        return $this->vehRentalDetails;
    }

    /**
     * Sets a new vehRentalDetails
     *
     * Provides details of the vehicle at checkout, exchange in, or exchange out.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehExchangeRS\VehicleAType\VehRentalDetailsAType[]
     * $vehRentalDetails
     * @return self
     */
    public function setVehRentalDetails(array $vehRentalDetails)
    {
        $this->vehRentalDetails = $vehRentalDetails;

        return $this;
    }

    /**
     * Adds as pricedEquip
     *
     * Collection of priced equipment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleEquipmentType $pricedEquip
     */
    public function addToPricedEquips(\Davispeixoto\OpenTravelAlliance\VehicleEquipmentType $pricedEquip)
    {
        $this->pricedEquips[] = $pricedEquip;

        return $this;
    }

    /**
     * isset pricedEquips
     *
     * Collection of priced equipment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricedEquips($index)
    {
        return isset($this->pricedEquips[$index]);
    }

    /**
     * unset pricedEquips
     *
     * Collection of priced equipment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricedEquips($index)
    {
        unset($this->pricedEquips[$index]);
    }

    /**
     * Gets as pricedEquips
     *
     * Collection of priced equipment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleEquipmentType[]
     */
    public function getPricedEquips()
    {
        return $this->pricedEquips;
    }

    /**
     * Sets a new pricedEquips
     *
     * Collection of priced equipment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleEquipmentType[] $pricedEquips
     * @return self
     */
    public function setPricedEquips(array $pricedEquips)
    {
        $this->pricedEquips = $pricedEquips;

        return $this;
    }


}

