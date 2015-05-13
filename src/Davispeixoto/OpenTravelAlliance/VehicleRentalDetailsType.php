<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleRentalDetailsType
 *
 * This provides specific information regarding the milage and condition of the
 * vehicle being rented.
 * XSD Type: VehicleRentalDetailsType
 */
class VehicleRentalDetailsType
{

    /**
     * This identifies the physical location of the vehicle being rented (e.g., the
     * parking space or stall number).
     *
     * @property string $parkingLocation
     */
    private $parkingLocation = null;

    /**
     * This provides values based on the amount of fuel present.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType\FuelLevelDetailsAType
     * $fuelLevelDetails
     */
    private $fuelLevelDetails = null;

    /**
     * This provides values for the odometer reading.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType\OdometerReadingAType
     * $odometerReading
     */
    private $odometerReading = null;

    /**
     * Used to describe condition of a vehicle (e.g., scratches, broken tail light). It
     * is not intended for insurance purposes.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType\ConditionReportAType[]
     * $conditionReport
     */
    private $conditionReport = null;

    /**
     * Gets as parkingLocation
     *
     * This identifies the physical location of the vehicle being rented (e.g., the
     * parking space or stall number).
     *
     * @return string
     */
    public function getParkingLocation()
    {
        return $this->parkingLocation;
    }

    /**
     * Sets a new parkingLocation
     *
     * This identifies the physical location of the vehicle being rented (e.g., the
     * parking space or stall number).
     *
     * @param string $parkingLocation
     * @return self
     */
    public function setParkingLocation($parkingLocation)
    {
        $this->parkingLocation = $parkingLocation;

        return $this;
    }

    /**
     * Gets as fuelLevelDetails
     *
     * This provides values based on the amount of fuel present.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType\FuelLevelDetailsAType
     */
    public function getFuelLevelDetails()
    {
        return $this->fuelLevelDetails;
    }

    /**
     * Sets a new fuelLevelDetails
     *
     * This provides values based on the amount of fuel present.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType\FuelLevelDetailsAType
     * $fuelLevelDetails
     * @return self
     */
    public function setFuelLevelDetails(
        \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType\FuelLevelDetailsAType $fuelLevelDetails
    ) {
        $this->fuelLevelDetails = $fuelLevelDetails;

        return $this;
    }

    /**
     * Gets as odometerReading
     *
     * This provides values for the odometer reading.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType\OdometerReadingAType
     */
    public function getOdometerReading()
    {
        return $this->odometerReading;
    }

    /**
     * Sets a new odometerReading
     *
     * This provides values for the odometer reading.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType\OdometerReadingAType
     * $odometerReading
     * @return self
     */
    public function setOdometerReading(
        \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType\OdometerReadingAType $odometerReading
    ) {
        $this->odometerReading = $odometerReading;

        return $this;
    }

    /**
     * Adds as conditionReport
     *
     * Used to describe condition of a vehicle (e.g., scratches, broken tail light). It
     * is not intended for insurance purposes.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType\ConditionReportAType
     * $conditionReport
     */
    public function addToConditionReport(
        \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType\ConditionReportAType $conditionReport
    ) {
        $this->conditionReport[] = $conditionReport;

        return $this;
    }

    /**
     * isset conditionReport
     *
     * Used to describe condition of a vehicle (e.g., scratches, broken tail light). It
     * is not intended for insurance purposes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConditionReport($index)
    {
        return isset($this->conditionReport[$index]);
    }

    /**
     * unset conditionReport
     *
     * Used to describe condition of a vehicle (e.g., scratches, broken tail light). It
     * is not intended for insurance purposes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConditionReport($index)
    {
        unset($this->conditionReport[$index]);
    }

    /**
     * Gets as conditionReport
     *
     * Used to describe condition of a vehicle (e.g., scratches, broken tail light). It
     * is not intended for insurance purposes.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType\ConditionReportAType[]
     */
    public function getConditionReport()
    {
        return $this->conditionReport;
    }

    /**
     * Sets a new conditionReport
     *
     * Used to describe condition of a vehicle (e.g., scratches, broken tail light). It
     * is not intended for insurance purposes.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType\ConditionReportAType[]
     * $conditionReport
     * @return self
     */
    public function setConditionReport(array $conditionReport)
    {
        $this->conditionReport = $conditionReport;

        return $this;
    }


}

