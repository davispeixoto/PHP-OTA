<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\TrainSegmentAType;

/**
 * Class representing AvailabilityDetailAType
 */
class AvailabilityDetailAType
{

    /**
     * Specifies class, such as Coach, Premium and Sleeper.
     *
     * @property string $reservationClass
     */
    private $reservationClass = null;

    /**
     * Specifies if the class code is reserved or unreserved.
     *
     * @property string $reservationType
     */
    private $reservationType = null;

    /**
     * The vehicle type for autotrains, such as a Channel Tunnel, including car, van,
     * motorcycle, etc.
     *
     * @property string $vehicleType
     */
    private $vehicleType = null;

    /**
     * When true, the class code is for a bicycle which many types of trains
     * accommodate.
     *
     * @property boolean $isBicycleInd
     */
    private $isBicycleInd = null;

    /**
     * When true, the class code returned is different from the requested class code.
     *
     * @property boolean $alternativeInd
     */
    private $alternativeInd = null;

    /**
     * The class of inventory controlled services available.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\TrainSegmentAType\AvailabilityDetailAType\ClassCodeAType
     * $classCode
     */
    private $classCode = null;

    /**
     * A reference code for the available service(s) returned in this message that may
     * be used in a booking message. This is used as a reference number in the booking
     * request so availability service details do not need to be replicated in the
     * booking request message.
     *
     * @property string $reference
     */
    private $reference = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\AncillaryService $ancillaryService
     */
    private $ancillaryService = null;

    /**
     * Type, class and compartment categories of train accommodations.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AccommodationType $accommodation
     */
    private $accommodation = null;

    /**
     * Gets as reservationClass
     *
     * Specifies class, such as Coach, Premium and Sleeper.
     *
     * @return string
     */
    public function getReservationClass()
    {
        return $this->reservationClass;
    }

    /**
     * Sets a new reservationClass
     *
     * Specifies class, such as Coach, Premium and Sleeper.
     *
     * @param string $reservationClass
     * @return self
     */
    public function setReservationClass($reservationClass)
    {
        $this->reservationClass = $reservationClass;

        return $this;
    }

    /**
     * Gets as reservationType
     *
     * Specifies if the class code is reserved or unreserved.
     *
     * @return string
     */
    public function getReservationType()
    {
        return $this->reservationType;
    }

    /**
     * Sets a new reservationType
     *
     * Specifies if the class code is reserved or unreserved.
     *
     * @param string $reservationType
     * @return self
     */
    public function setReservationType($reservationType)
    {
        $this->reservationType = $reservationType;

        return $this;
    }

    /**
     * Gets as vehicleType
     *
     * The vehicle type for autotrains, such as a Channel Tunnel, including car, van,
     * motorcycle, etc.
     *
     * @return string
     */
    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * Sets a new vehicleType
     *
     * The vehicle type for autotrains, such as a Channel Tunnel, including car, van,
     * motorcycle, etc.
     *
     * @param string $vehicleType
     * @return self
     */
    public function setVehicleType($vehicleType)
    {
        $this->vehicleType = $vehicleType;

        return $this;
    }

    /**
     * Gets as isBicycleInd
     *
     * When true, the class code is for a bicycle which many types of trains
     * accommodate.
     *
     * @return boolean
     */
    public function getIsBicycleInd()
    {
        return $this->isBicycleInd;
    }

    /**
     * Sets a new isBicycleInd
     *
     * When true, the class code is for a bicycle which many types of trains
     * accommodate.
     *
     * @param boolean $isBicycleInd
     * @return self
     */
    public function setIsBicycleInd($isBicycleInd)
    {
        $this->isBicycleInd = $isBicycleInd;

        return $this;
    }

    /**
     * Gets as alternativeInd
     *
     * When true, the class code returned is different from the requested class code.
     *
     * @return boolean
     */
    public function getAlternativeInd()
    {
        return $this->alternativeInd;
    }

    /**
     * Sets a new alternativeInd
     *
     * When true, the class code returned is different from the requested class code.
     *
     * @param boolean $alternativeInd
     * @return self
     */
    public function setAlternativeInd($alternativeInd)
    {
        $this->alternativeInd = $alternativeInd;

        return $this;
    }

    /**
     * Gets as classCode
     *
     * The class of inventory controlled services available.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\TrainSegmentAType\AvailabilityDetailAType\ClassCodeAType
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
     * \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\TrainSegmentAType\AvailabilityDetailAType\ClassCodeAType
     * $classCode
     * @return self
     */
    public function setClassCode(
        \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\TrainSegmentAType\AvailabilityDetailAType\ClassCodeAType $classCode
    ) {
        $this->classCode = $classCode;

        return $this;
    }

    /**
     * Gets as reference
     *
     * A reference code for the available service(s) returned in this message that may
     * be used in a booking message. This is used as a reference number in the booking
     * request so availability service details do not need to be replicated in the
     * booking request message.
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * A reference code for the available service(s) returned in this message that may
     * be used in a booking message. This is used as a reference number in the booking
     * request so availability service details do not need to be replicated in the
     * booking request message.
     *
     * @param string $reference
     * @return self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Gets as ancillaryService
     *
     * @return \Davispeixoto\OpenTravelAlliance\AncillaryService
     */
    public function getAncillaryService()
    {
        return $this->ancillaryService;
    }

    /**
     * Sets a new ancillaryService
     *
     * @param \Davispeixoto\OpenTravelAlliance\AncillaryService $ancillaryService
     * @return self
     */
    public function setAncillaryService(\Davispeixoto\OpenTravelAlliance\AncillaryService $ancillaryService)
    {
        $this->ancillaryService = $ancillaryService;

        return $this;
    }

    /**
     * Gets as accommodation
     *
     * Type, class and compartment categories of train accommodations.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccommodationType
     */
    public function getAccommodation()
    {
        return $this->accommodation;
    }

    /**
     * Sets a new accommodation
     *
     * Type, class and compartment categories of train accommodations.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccommodationType $accommodation
     * @return self
     */
    public function setAccommodation(\Davispeixoto\OpenTravelAlliance\AccommodationType $accommodation)
    {
        $this->accommodation = $accommodation;

        return $this;
    }


}

