<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType;

/**
 * Class representing TravelerRequestAType
 */
class TravelerRequestAType
{

    /**
     * A reference to a Passenger Category. Note that this is only used to relate data
     * within this message.
     *
     * @property string $passengerCategoryRPH
     */
    private $passengerCategoryRPH = null;

    /**
     * The class of inventory controlled services available.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType\ClassCodeAType[]
     * $classCode
     */
    private $classCode = null;

    /**
     * Up to 9 requested fare basis codes.
     *
     * @property string[] $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\AccommodationService
     * $accommodationService
     */
    private $accommodationService = null;

    /**
     * Gets as passengerCategoryRPH
     *
     * A reference to a Passenger Category. Note that this is only used to relate data
     * within this message.
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
     * A reference to a Passenger Category. Note that this is only used to relate data
     * within this message.
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
     * Adds as classCode
     *
     * The class of inventory controlled services available.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType\ClassCodeAType
     * $classCode
     */
    public function addToClassCode(
        \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType\ClassCodeAType $classCode
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
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType\ClassCodeAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType\ClassCodeAType[]
     * $classCode
     * @return self
     */
    public function setClassCode(array $classCode)
    {
        $this->classCode = $classCode;

        return $this;
    }

    /**
     * Adds as fareBasisCode
     *
     * Up to 9 requested fare basis codes.
     *
     * @return self
     * @param string $fareBasisCode
     */
    public function addToFareBasisCode($fareBasisCode)
    {
        $this->fareBasisCode[] = $fareBasisCode;

        return $this;
    }

    /**
     * isset fareBasisCode
     *
     * Up to 9 requested fare basis codes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareBasisCode($index)
    {
        return isset($this->fareBasisCode[$index]);
    }

    /**
     * unset fareBasisCode
     *
     * Up to 9 requested fare basis codes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareBasisCode($index)
    {
        unset($this->fareBasisCode[$index]);
    }

    /**
     * Gets as fareBasisCode
     *
     * Up to 9 requested fare basis codes.
     *
     * @return string[]
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * Up to 9 requested fare basis codes.
     *
     * @param string $fareBasisCode
     * @return self
     */
    public function setFareBasisCode(array $fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;

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


}

