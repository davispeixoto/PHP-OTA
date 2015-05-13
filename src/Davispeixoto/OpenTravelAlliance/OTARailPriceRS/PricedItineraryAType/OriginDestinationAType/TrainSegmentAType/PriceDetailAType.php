<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType;

use Davispeixoto\OpenTravelAlliance\RailPriceType;

/**
 * Class representing PriceDetailAType
 */
class PriceDetailAType extends RailPriceType
{

    /**
     * Reference to the passenger category.
     *
     * @property string $passengerCategoryRPH
     */
    private $passengerCategoryRPH = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\AccommodationService
     * $accommodationService
     */
    private $accommodationService = null;

    /**
     * The class of inventory controlled services available.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType\PriceDetailAType\ClassCodeAType[]
     * $classCode
     */
    private $classCode = null;

    /**
     * Gets as passengerCategoryRPH
     *
     * Reference to the passenger category.
     *
     * @return string
     */
    public function getPassengerCategoryRPH()
    {
        return $this->passengerCategoryRPH;
    }

    /**
     * Sets a new passengerCategoryRPH
     *
     * Reference to the passenger category.
     *
     * @param string $passengerCategoryRPH
     * @return self
     */
    public function setPassengerCategoryRPH($passengerCategoryRPH)
    {
        $this->passengerCategoryRPH = $passengerCategoryRPH;

        return $this;
    }

    /**
     * Gets as accommodationService
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccommodationService
     */
    public function getAccommodationService()
    {
        return $this->accommodationService;
    }

    /**
     * Sets a new accommodationService
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccommodationService
     * $accommodationService
     * @return self
     */
    public function setAccommodationService(\Davispeixoto\OpenTravelAlliance\AccommodationService $accommodationService)
    {
        $this->accommodationService = $accommodationService;

        return $this;
    }

    /**
     * Adds as classCode
     *
     * The class of inventory controlled services available.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType\PriceDetailAType\ClassCodeAType
     * $classCode
     */
    public function addToClassCode(
        \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType\PriceDetailAType\ClassCodeAType $classCode
    ) {
        $this->classCode[] = $classCode;

        return $this;
    }

    /**
     * isset classCode
     *
     * The class of inventory controlled services available.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetClassCode($index)
    {
        return isset($this->classCode[$index]);
    }

    /**
     * unset classCode
     *
     * The class of inventory controlled services available.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetClassCode($index)
    {
        unset($this->classCode[$index]);
    }

    /**
     * Gets as classCode
     *
     * The class of inventory controlled services available.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType\PriceDetailAType\ClassCodeAType[]
     */
    public function getClassCode()
    {
        return $this->classCode;
    }

    /**
     * Sets a new classCode
     *
     * The class of inventory controlled services available.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType\PriceDetailAType\ClassCodeAType[]
     * $classCode
     * @return self
     */
    public function setClassCode(array $classCode)
    {
        $this->classCode = $classCode;

        return $this;
    }


}

