<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleType
 *
 * The VehicleType complex type identifie sthe data that fully describes a vehicle.
 * This includes the core information along with supplemental information such as
 * make and model, and a link to a picture.
 * XSD Type: VehicleType
 */
class VehicleType extends VehicleCoreType
{

    /**
     * Number of passengers that can be accommodated by this vehicle. This may be an
     * exact number or may be a range, i.e., 4-5, 5-6.
     *
     * @property string $passengerQuantity
     */
    private $passengerQuantity = null;

    /**
     * Number of bags/suitcases that can be accommodated by this vehicle.
     *
     * @property integer $baggageQuantity
     */
    private $baggageQuantity = null;

    /**
     * An internal car type assigned by the vendor. This is not the SIPP code.
     *
     * @property string $vendorCarType
     */
    private $vendorCarType = null;

    /**
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Identifies the source authority for the code.
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * This is the numeric value associated with the measurement.
     *
     * @property float $unitOfMeasureQuantity
     */
    private $unitOfMeasureQuantity = null;

    /**
     * This is the standard unit of measure name (e.g., it could be generic such as
     * metric or imperial or specific such as inches, feet, yards, miles, millimeters,
     * centimeters, meters, kilometers- according to usage).
     *
     * @property string $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @property string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * Provides the units in which distance is measured, when applied to a vehicle
     * (i.e., miles or kilometers)
     *
     * @property string $odometerUnitOfMeasure
     */
    private $odometerUnitOfMeasure = null;

    /**
     * A description of the vehicle.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * The make and model of the vehicle (e.g., Ford Focus). The Code attribute may be
     * used for the SIPP code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleType\VehMakeModelAType
     * $vehMakeModel
     */
    private $vehMakeModel = null;

    /**
     * URL that identifies the location of a picture to describe this vehicle.
     *
     * @property string $pictureURL
     */
    private $pictureURL = null;

    /**
     * The specific identifiers of the vehicle (e.g., Motor Vehicle Asset Number).
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleType\VehIdentityAType
     * $vehIdentity
     */
    private $vehIdentity = null;

    /**
     * Gets as passengerQuantity
     *
     * Number of passengers that can be accommodated by this vehicle. This may be an
     * exact number or may be a range, i.e., 4-5, 5-6.
     *
     * @return string
     */
    public function getPassengerQuantity()
    {
        return $this->passengerQuantity;
    }

    /**
     * Sets a new passengerQuantity
     *
     * Number of passengers that can be accommodated by this vehicle. This may be an
     * exact number or may be a range, i.e., 4-5, 5-6.
     *
     * @param string $passengerQuantity
     * @return self
     */
    public function setPassengerQuantity($passengerQuantity)
    {
        $this->passengerQuantity = $passengerQuantity;

        return $this;
    }

    /**
     * Gets as baggageQuantity
     *
     * Number of bags/suitcases that can be accommodated by this vehicle.
     *
     * @return integer
     */
    public function getBaggageQuantity()
    {
        return $this->baggageQuantity;
    }

    /**
     * Sets a new baggageQuantity
     *
     * Number of bags/suitcases that can be accommodated by this vehicle.
     *
     * @param integer $baggageQuantity
     * @return self
     */
    public function setBaggageQuantity($baggageQuantity)
    {
        $this->baggageQuantity = $baggageQuantity;

        return $this;
    }

    /**
     * Gets as vendorCarType
     *
     * An internal car type assigned by the vendor. This is not the SIPP code.
     *
     * @return string
     */
    public function getVendorCarType()
    {
        return $this->vendorCarType;
    }

    /**
     * Sets a new vendorCarType
     *
     * An internal car type assigned by the vendor. This is not the SIPP code.
     *
     * @param string $vendorCarType
     * @return self
     */
    public function setVendorCarType($vendorCarType)
    {
        $this->vendorCarType = $vendorCarType;

        return $this;
    }

    /**
     * Gets as code
     *
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
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
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
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
     * Gets as codeContext
     *
     * Identifies the source authority for the code.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the source authority for the code.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @return float
     */
    public function getUnitOfMeasureQuantity()
    {
        return $this->unitOfMeasureQuantity;
    }

    /**
     * Sets a new unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @param float $unitOfMeasureQuantity
     * @return self
     */
    public function setUnitOfMeasureQuantity($unitOfMeasureQuantity)
    {
        $this->unitOfMeasureQuantity = $unitOfMeasureQuantity;

        return $this;
    }

    /**
     * Gets as unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as
     * metric or imperial or specific such as inches, feet, yards, miles, millimeters,
     * centimeters, meters, kilometers- according to usage).
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as
     * metric or imperial or specific such as inches, feet, yards, miles, millimeters,
     * centimeters, meters, kilometers- according to usage).
     *
     * @param string $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;

        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as odometerUnitOfMeasure
     *
     * Provides the units in which distance is measured, when applied to a vehicle
     * (i.e., miles or kilometers)
     *
     * @return string
     */
    public function getOdometerUnitOfMeasure()
    {
        return $this->odometerUnitOfMeasure;
    }

    /**
     * Sets a new odometerUnitOfMeasure
     *
     * Provides the units in which distance is measured, when applied to a vehicle
     * (i.e., miles or kilometers)
     *
     * @param string $odometerUnitOfMeasure
     * @return self
     */
    public function setOdometerUnitOfMeasure($odometerUnitOfMeasure)
    {
        $this->odometerUnitOfMeasure = $odometerUnitOfMeasure;

        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the vehicle.
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
     * A description of the vehicle.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as vehMakeModel
     *
     * The make and model of the vehicle (e.g., Ford Focus). The Code attribute may be
     * used for the SIPP code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleType\VehMakeModelAType
     */
    public function getVehMakeModel()
    {
        return $this->vehMakeModel;
    }

    /**
     * Sets a new vehMakeModel
     *
     * The make and model of the vehicle (e.g., Ford Focus). The Code attribute may be
     * used for the SIPP code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleType\VehMakeModelAType
     * $vehMakeModel
     * @return self
     */
    public function setVehMakeModel(\Davispeixoto\OpenTravelAlliance\VehicleType\VehMakeModelAType $vehMakeModel)
    {
        $this->vehMakeModel = $vehMakeModel;

        return $this;
    }

    /**
     * Gets as pictureURL
     *
     * URL that identifies the location of a picture to describe this vehicle.
     *
     * @return string
     */
    public function getPictureURL()
    {
        return $this->pictureURL;
    }

    /**
     * Sets a new pictureURL
     *
     * URL that identifies the location of a picture to describe this vehicle.
     *
     * @param string $pictureURL
     * @return self
     */
    public function setPictureURL($pictureURL)
    {
        $this->pictureURL = $pictureURL;

        return $this;
    }

    /**
     * Gets as vehIdentity
     *
     * The specific identifiers of the vehicle (e.g., Motor Vehicle Asset Number).
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleType\VehIdentityAType
     */
    public function getVehIdentity()
    {
        return $this->vehIdentity;
    }

    /**
     * Sets a new vehIdentity
     *
     * The specific identifiers of the vehicle (e.g., Motor Vehicle Asset Number).
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleType\VehIdentityAType
     * $vehIdentity
     * @return self
     */
    public function setVehIdentity(\Davispeixoto\OpenTravelAlliance\VehicleType\VehIdentityAType $vehIdentity)
    {
        $this->vehIdentity = $vehIdentity;

        return $this;
    }


}

