<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType;

/**
 * Class representing ServiceDetailsAType
 */
class ServiceDetailsAType
{

    /**
     * Identifies solicitation for denied boarding volunteers. If true, the airline is
     * soliciting volunteers for denied boarding for this flight.
     *
     * @property boolean $deniedBoardingIndicator
     */
    private $deniedBoardingIndicator = null;

    /**
     * Identifies special flight details for generic partner use. May be used to
     * specify the low cost or regional carrier name (e.g., 'TED', 'UAX')
     *
     * @property string $flightProductName
     */
    private $flightProductName = null;

    /**
     * Other non-meal service codes (e.g., audio, video, movie). Refer to OpenTravel
     * Code list Flight Service Code (FSC).
     *
     * @property string[] $inFlightServiceCodes
     */
    private $inFlightServiceCodes = null;

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
     * Indicates the type of inflight meal service.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\ServiceDetailsAType\MealServiceAType[]
     * $mealService
     */
    private $mealService = null;

    /**
     * Gets as deniedBoardingIndicator
     *
     * Identifies solicitation for denied boarding volunteers. If true, the airline is
     * soliciting volunteers for denied boarding for this flight.
     *
     * @return boolean
     */
    public function getDeniedBoardingIndicator()
    {
        return $this->deniedBoardingIndicator;
    }

    /**
     * Sets a new deniedBoardingIndicator
     *
     * Identifies solicitation for denied boarding volunteers. If true, the airline is
     * soliciting volunteers for denied boarding for this flight.
     *
     * @param boolean $deniedBoardingIndicator
     * @return self
     */
    public function setDeniedBoardingIndicator($deniedBoardingIndicator)
    {
        $this->deniedBoardingIndicator = $deniedBoardingIndicator;

        return $this;
    }

    /**
     * Gets as flightProductName
     *
     * Identifies special flight details for generic partner use. May be used to
     * specify the low cost or regional carrier name (e.g., 'TED', 'UAX')
     *
     * @return string
     */
    public function getFlightProductName()
    {
        return $this->flightProductName;
    }

    /**
     * Sets a new flightProductName
     *
     * Identifies special flight details for generic partner use. May be used to
     * specify the low cost or regional carrier name (e.g., 'TED', 'UAX')
     *
     * @param string $flightProductName
     * @return self
     */
    public function setFlightProductName($flightProductName)
    {
        $this->flightProductName = $flightProductName;

        return $this;
    }

    /**
     * Adds as inFlightServiceCodes
     *
     * Other non-meal service codes (e.g., audio, video, movie). Refer to OpenTravel
     * Code list Flight Service Code (FSC).
     *
     * @return self
     * @param string $inFlightServiceCodes
     */
    public function addToInFlightServiceCodes($inFlightServiceCodes)
    {
        $this->inFlightServiceCodes[] = $inFlightServiceCodes;

        return $this;
    }

    /**
     * isset inFlightServiceCodes
     *
     * Other non-meal service codes (e.g., audio, video, movie). Refer to OpenTravel
     * Code list Flight Service Code (FSC).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInFlightServiceCodes($index)
    {
        return isset($this->inFlightServiceCodes[$index]);
    }

    /**
     * unset inFlightServiceCodes
     *
     * Other non-meal service codes (e.g., audio, video, movie). Refer to OpenTravel
     * Code list Flight Service Code (FSC).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInFlightServiceCodes($index)
    {
        unset($this->inFlightServiceCodes[$index]);
    }

    /**
     * Gets as inFlightServiceCodes
     *
     * Other non-meal service codes (e.g., audio, video, movie). Refer to OpenTravel
     * Code list Flight Service Code (FSC).
     *
     * @return string[]
     */
    public function getInFlightServiceCodes()
    {
        return $this->inFlightServiceCodes;
    }

    /**
     * Sets a new inFlightServiceCodes
     *
     * Other non-meal service codes (e.g., audio, video, movie). Refer to OpenTravel
     * Code list Flight Service Code (FSC).
     *
     * @param string $inFlightServiceCodes
     * @return self
     */
    public function setInFlightServiceCodes(array $inFlightServiceCodes)
    {
        $this->inFlightServiceCodes = $inFlightServiceCodes;

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
     * Adds as mealService
     *
     * Indicates the type of inflight meal service.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\ServiceDetailsAType\MealServiceAType
     * $mealService
     */
    public function addToMealService(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\ServiceDetailsAType\MealServiceAType $mealService
    ) {
        $this->mealService[] = $mealService;

        return $this;
    }

    /**
     * isset mealService
     *
     * Indicates the type of inflight meal service.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMealService($index)
    {
        return isset($this->mealService[$index]);
    }

    /**
     * unset mealService
     *
     * Indicates the type of inflight meal service.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMealService($index)
    {
        unset($this->mealService[$index]);
    }

    /**
     * Gets as mealService
     *
     * Indicates the type of inflight meal service.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\ServiceDetailsAType\MealServiceAType[]
     */
    public function getMealService()
    {
        return $this->mealService;
    }

    /**
     * Sets a new mealService
     *
     * Indicates the type of inflight meal service.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\ServiceDetailsAType\MealServiceAType[]
     * $mealService
     * @return self
     */
    public function setMealService(array $mealService)
    {
        $this->mealService = $mealService;

        return $this;
    }


}

