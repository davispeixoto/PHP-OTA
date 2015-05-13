<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType;

/**
 * Class representing OffLocationServiceAType
 */
class OffLocationServiceAType
{

    /**
     * Identifies the type of Off-Location service that is available.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * A description of this off-location service.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType\OffLocServiceDescAType
     * $offLocServiceDesc
     */
    private $offLocServiceDesc = null;

    /**
     * The hours during which this off-location service are offered.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     * $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * A collection of charges associated with this off-location service. There may be
     * multiple charges if the charge varies by vehicle type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType\OffLocServiceChargesAType\OffLocServiceChargeAType[]
     * $offLocServiceCharges
     */
    private $offLocServiceCharges = null;

    /**
     * Gets as type
     *
     * Identifies the type of Off-Location service that is available.
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
     * Identifies the type of Off-Location service that is available.
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
     * Gets as offLocServiceDesc
     *
     * A description of this off-location service.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType\OffLocServiceDescAType
     */
    public function getOffLocServiceDesc()
    {
        return $this->offLocServiceDesc;
    }

    /**
     * Sets a new offLocServiceDesc
     *
     * A description of this off-location service.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType\OffLocServiceDescAType
     * $offLocServiceDesc
     * @return self
     */
    public function setOffLocServiceDesc(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType\OffLocServiceDescAType $offLocServiceDesc
    ) {
        $this->offLocServiceDesc = $offLocServiceDesc;

        return $this;
    }

    /**
     * Gets as operationSchedules
     *
     * The hours during which this off-location service are offered.
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
     * The hours during which this off-location service are offered.
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
     * Adds as offLocServiceCharge
     *
     * A collection of charges associated with this off-location service. There may be
     * multiple charges if the charge varies by vehicle type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType\OffLocServiceChargesAType\OffLocServiceChargeAType
     * $offLocServiceCharge
     */
    public function addToOffLocServiceCharges(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType\OffLocServiceChargesAType\OffLocServiceChargeAType $offLocServiceCharge
    ) {
        $this->offLocServiceCharges[] = $offLocServiceCharge;

        return $this;
    }

    /**
     * isset offLocServiceCharges
     *
     * A collection of charges associated with this off-location service. There may be
     * multiple charges if the charge varies by vehicle type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOffLocServiceCharges($index)
    {
        return isset($this->offLocServiceCharges[$index]);
    }

    /**
     * unset offLocServiceCharges
     *
     * A collection of charges associated with this off-location service. There may be
     * multiple charges if the charge varies by vehicle type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOffLocServiceCharges($index)
    {
        unset($this->offLocServiceCharges[$index]);
    }

    /**
     * Gets as offLocServiceCharges
     *
     * A collection of charges associated with this off-location service. There may be
     * multiple charges if the charge varies by vehicle type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType\OffLocServiceChargesAType\OffLocServiceChargeAType[]
     */
    public function getOffLocServiceCharges()
    {
        return $this->offLocServiceCharges;
    }

    /**
     * Sets a new offLocServiceCharges
     *
     * A collection of charges associated with this off-location service. There may be
     * multiple charges if the charge varies by vehicle type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType\OffLocServiceChargesAType\OffLocServiceChargeAType[]
     * $offLocServiceCharges
     * @return self
     */
    public function setOffLocServiceCharges(array $offLocServiceCharges)
    {
        $this->offLocServiceCharges = $offLocServiceCharges;

        return $this;
    }


}

