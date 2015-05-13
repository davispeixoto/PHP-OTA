<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType;

/**
 * Class representing OnLocationServiceAType
 */
class OnLocationServiceAType
{

    /**
     * Identifies the type of On-Location service that is available.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * A description of this on-location service.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType\OnLocServiceDescAType
     * $onLocServiceDesc
     */
    private $onLocServiceDesc = null;

    /**
     * The hours during which this on-location service are offered.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     * $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * A collection of charges associated with this on-location service. There may be
     * multiple charges if the charge varies by vehicle type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType\OnLocServiceChargesAType\OnLocServiceChargeAType[]
     * $onLocServiceCharges
     */
    private $onLocServiceCharges = null;

    /**
     * Gets as type
     *
     * Identifies the type of On-Location service that is available.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Identifies the type of On-Location service that is available.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as onLocServiceDesc
     *
     * A description of this on-location service.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType\OnLocServiceDescAType
     */
    public function getOnLocServiceDesc()
    {
        return $this->onLocServiceDesc;
    }

    /**
     * Sets a new onLocServiceDesc
     *
     * A description of this on-location service.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType\OnLocServiceDescAType
     * $onLocServiceDesc
     * @return self
     */
    public function setOnLocServiceDesc(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType\OnLocServiceDescAType $onLocServiceDesc
    ) {
        $this->onLocServiceDesc = $onLocServiceDesc;

        return $this;
    }

    /**
     * Gets as operationSchedules
     *
     * The hours during which this on-location service are offered.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     */
    public function getOperationSchedules()
    {
        return $this->operationSchedules;
    }

    /**
     * Sets a new operationSchedules
     *
     * The hours during which this on-location service are offered.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     * $operationSchedules
     * @return self
     */
    public function setOperationSchedules(\Davispeixoto\OpenTravelAlliance\OperationSchedulesType $operationSchedules)
    {
        $this->operationSchedules = $operationSchedules;

        return $this;
    }

    /**
     * Adds as onLocServiceCharge
     *
     * A collection of charges associated with this on-location service. There may be
     * multiple charges if the charge varies by vehicle type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType\OnLocServiceChargesAType\OnLocServiceChargeAType
     * $onLocServiceCharge
     */
    public function addToOnLocServiceCharges(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType\OnLocServiceChargesAType\OnLocServiceChargeAType $onLocServiceCharge
    ) {
        $this->onLocServiceCharges[] = $onLocServiceCharge;

        return $this;
    }

    /**
     * isset onLocServiceCharges
     *
     * A collection of charges associated with this on-location service. There may be
     * multiple charges if the charge varies by vehicle type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOnLocServiceCharges($index)
    {
        return isset($this->onLocServiceCharges[$index]);
    }

    /**
     * unset onLocServiceCharges
     *
     * A collection of charges associated with this on-location service. There may be
     * multiple charges if the charge varies by vehicle type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOnLocServiceCharges($index)
    {
        unset($this->onLocServiceCharges[$index]);
    }

    /**
     * Gets as onLocServiceCharges
     *
     * A collection of charges associated with this on-location service. There may be
     * multiple charges if the charge varies by vehicle type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType\OnLocServiceChargesAType\OnLocServiceChargeAType[]
     */
    public function getOnLocServiceCharges()
    {
        return $this->onLocServiceCharges;
    }

    /**
     * Sets a new onLocServiceCharges
     *
     * A collection of charges associated with this on-location service. There may be
     * multiple charges if the charge varies by vehicle type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType\OnLocServiceChargesAType\OnLocServiceChargeAType[]
     * $onLocServiceCharges
     * @return self
     */
    public function setOnLocServiceCharges(array $onLocServiceCharges)
    {
        $this->onLocServiceCharges = $onLocServiceCharges;

        return $this;
    }


}

