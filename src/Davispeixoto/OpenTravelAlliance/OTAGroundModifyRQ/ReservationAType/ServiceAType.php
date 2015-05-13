<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType;

/**
 * Class representing ServiceAType
 */
class ServiceAType
{

    /**
     * If TRUE, a child car seat is required or requested.
     *
     * @property boolean $childCarSeatInd
     */
    private $childCarSeatInd = null;

    /**
     * If TRUE, a vehicle is being requested and/or is available that allows domestic
     * pets.
     *
     * @property boolean $petFriendlyInd
     */
    private $petFriendlyInd = null;

    /**
     * If TRUE, the vehicle is fuel efficient.
     *
     * @property boolean $fuelEfficientVehInd
     */
    private $fuelEfficientVehInd = null;

    /**
     * The maximum quantity of passengers this vehicle can accommodate. NOTE: This
     * figure is based on the quantity of seat belts in the vehicle.
     *
     * @property integer $maximumPassengers
     */
    private $maximumPassengers = null;

    /**
     * The (recommended) maximum baggage that can be stored in the vehicles trunk.
     *
     * @property integer $maximumBaggage
     */
    private $maximumBaggage = null;

    /**
     * If TRUE, a greeting sign is requested.
     *
     * @property boolean $greetingSignInd
     */
    private $greetingSignInd = null;

    /**
     * The name to be on the greeting sign.
     *
     * @property string $greetingSignName
     */
    private $greetingSignName = null;

    /**
     * If TRUE, complementary meet and greet services are requested and/or provided..
     *
     * @property boolean $meetAndGreetInd
     */
    private $meetAndGreetInd = null;

    /**
     * If TRUE, personal meet and greet is requested (that may incur an additional
     * charge) or available.
     *
     * @property boolean $personalGreeterInd
     */
    private $personalGreeterInd = null;

    /**
     * If TRUE, specific languages are requested and/or provided.
     *
     * @property boolean $multilingualInd
     */
    private $multilingualInd = null;

    /**
     * A short description of the service type and vehicle (up to 250 characters.)
     *
     * @property string $shortDescription
     */
    private $shortDescription = null;

    /**
     * Other notes related to the ground service, such as "Driver will meet you in
     * baggage claim."
     *
     * @property string $notes
     */
    private $notes = null;

    /**
     * If TRUE, this vehicle is disability compatible.
     *
     * @property boolean $disabilityVehicleInd
     */
    private $disabilityVehicleInd = null;

    /**
     * A reference to a passenger ID set in the Passenger element.
     *
     * @property string $passengerRPH
     */
    private $passengerRPH = null;

    /**
     * The service type, such as Airport Transfer, Hourly and Simple Transfer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListGroundServiceProvidedType $type
     */
    private $type = null;

    /**
     * The level of service, such as deluxe and VIP.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListLevelOfServiceType $serviceLevel
     */
    private $serviceLevel = null;

    /**
     * Pickup, interim stops and drop-off details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LocationsAType
     * $locations
     */
    private $locations = null;

    /**
     * The size of the vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListVehSizeType $vehicleSize
     */
    private $vehicleSize = null;

    /**
     * The type of the vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListVehCategoryType $vehicleType
     */
    private $vehicleType = null;

    /**
     * Collection of language details pertaining to the service.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LanguagesAType\LanguageAType[]
     * $languages
     */
    private $languages = null;

    /**
     * Gets as childCarSeatInd
     *
     * If TRUE, a child car seat is required or requested.
     *
     * @return boolean
     */
    public function getChildCarSeatInd()
    {
        return $this->childCarSeatInd;
    }

    /**
     * Sets a new childCarSeatInd
     *
     * If TRUE, a child car seat is required or requested.
     *
     * @param boolean $childCarSeatInd
     * @return self
     */
    public function setChildCarSeatInd($childCarSeatInd)
    {
        $this->childCarSeatInd = $childCarSeatInd;

        return $this;
    }

    /**
     * Gets as petFriendlyInd
     *
     * If TRUE, a vehicle is being requested and/or is available that allows domestic
     * pets.
     *
     * @return boolean
     */
    public function getPetFriendlyInd()
    {
        return $this->petFriendlyInd;
    }

    /**
     * Sets a new petFriendlyInd
     *
     * If TRUE, a vehicle is being requested and/or is available that allows domestic
     * pets.
     *
     * @param boolean $petFriendlyInd
     * @return self
     */
    public function setPetFriendlyInd($petFriendlyInd)
    {
        $this->petFriendlyInd = $petFriendlyInd;

        return $this;
    }

    /**
     * Gets as fuelEfficientVehInd
     *
     * If TRUE, the vehicle is fuel efficient.
     *
     * @return boolean
     */
    public function getFuelEfficientVehInd()
    {
        return $this->fuelEfficientVehInd;
    }

    /**
     * Sets a new fuelEfficientVehInd
     *
     * If TRUE, the vehicle is fuel efficient.
     *
     * @param boolean $fuelEfficientVehInd
     * @return self
     */
    public function setFuelEfficientVehInd($fuelEfficientVehInd)
    {
        $this->fuelEfficientVehInd = $fuelEfficientVehInd;

        return $this;
    }

    /**
     * Gets as maximumPassengers
     *
     * The maximum quantity of passengers this vehicle can accommodate. NOTE: This
     * figure is based on the quantity of seat belts in the vehicle.
     *
     * @return integer
     */
    public function getMaximumPassengers()
    {
        return $this->maximumPassengers;
    }

    /**
     * Sets a new maximumPassengers
     *
     * The maximum quantity of passengers this vehicle can accommodate. NOTE: This
     * figure is based on the quantity of seat belts in the vehicle.
     *
     * @param integer $maximumPassengers
     * @return self
     */
    public function setMaximumPassengers($maximumPassengers)
    {
        $this->maximumPassengers = $maximumPassengers;

        return $this;
    }

    /**
     * Gets as maximumBaggage
     *
     * The (recommended) maximum baggage that can be stored in the vehicles trunk.
     *
     * @return integer
     */
    public function getMaximumBaggage()
    {
        return $this->maximumBaggage;
    }

    /**
     * Sets a new maximumBaggage
     *
     * The (recommended) maximum baggage that can be stored in the vehicles trunk.
     *
     * @param integer $maximumBaggage
     * @return self
     */
    public function setMaximumBaggage($maximumBaggage)
    {
        $this->maximumBaggage = $maximumBaggage;

        return $this;
    }

    /**
     * Gets as greetingSignInd
     *
     * If TRUE, a greeting sign is requested.
     *
     * @return boolean
     */
    public function getGreetingSignInd()
    {
        return $this->greetingSignInd;
    }

    /**
     * Sets a new greetingSignInd
     *
     * If TRUE, a greeting sign is requested.
     *
     * @param boolean $greetingSignInd
     * @return self
     */
    public function setGreetingSignInd($greetingSignInd)
    {
        $this->greetingSignInd = $greetingSignInd;

        return $this;
    }

    /**
     * Gets as greetingSignName
     *
     * The name to be on the greeting sign.
     *
     * @return string
     */
    public function getGreetingSignName()
    {
        return $this->greetingSignName;
    }

    /**
     * Sets a new greetingSignName
     *
     * The name to be on the greeting sign.
     *
     * @param string $greetingSignName
     * @return self
     */
    public function setGreetingSignName($greetingSignName)
    {
        $this->greetingSignName = $greetingSignName;

        return $this;
    }

    /**
     * Gets as meetAndGreetInd
     *
     * If TRUE, complementary meet and greet services are requested and/or provided..
     *
     * @return boolean
     */
    public function getMeetAndGreetInd()
    {
        return $this->meetAndGreetInd;
    }

    /**
     * Sets a new meetAndGreetInd
     *
     * If TRUE, complementary meet and greet services are requested and/or provided..
     *
     * @param boolean $meetAndGreetInd
     * @return self
     */
    public function setMeetAndGreetInd($meetAndGreetInd)
    {
        $this->meetAndGreetInd = $meetAndGreetInd;

        return $this;
    }

    /**
     * Gets as personalGreeterInd
     *
     * If TRUE, personal meet and greet is requested (that may incur an additional
     * charge) or available.
     *
     * @return boolean
     */
    public function getPersonalGreeterInd()
    {
        return $this->personalGreeterInd;
    }

    /**
     * Sets a new personalGreeterInd
     *
     * If TRUE, personal meet and greet is requested (that may incur an additional
     * charge) or available.
     *
     * @param boolean $personalGreeterInd
     * @return self
     */
    public function setPersonalGreeterInd($personalGreeterInd)
    {
        $this->personalGreeterInd = $personalGreeterInd;

        return $this;
    }

    /**
     * Gets as multilingualInd
     *
     * If TRUE, specific languages are requested and/or provided.
     *
     * @return boolean
     */
    public function getMultilingualInd()
    {
        return $this->multilingualInd;
    }

    /**
     * Sets a new multilingualInd
     *
     * If TRUE, specific languages are requested and/or provided.
     *
     * @param boolean $multilingualInd
     * @return self
     */
    public function setMultilingualInd($multilingualInd)
    {
        $this->multilingualInd = $multilingualInd;

        return $this;
    }

    /**
     * Gets as shortDescription
     *
     * A short description of the service type and vehicle (up to 250 characters.)
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Sets a new shortDescription
     *
     * A short description of the service type and vehicle (up to 250 characters.)
     *
     * @param string $shortDescription
     * @return self
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Gets as notes
     *
     * Other notes related to the ground service, such as "Driver will meet you in
     * baggage claim."
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets a new notes
     *
     * Other notes related to the ground service, such as "Driver will meet you in
     * baggage claim."
     *
     * @param string $notes
     * @return self
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Gets as disabilityVehicleInd
     *
     * If TRUE, this vehicle is disability compatible.
     *
     * @return boolean
     */
    public function getDisabilityVehicleInd()
    {
        return $this->disabilityVehicleInd;
    }

    /**
     * Sets a new disabilityVehicleInd
     *
     * If TRUE, this vehicle is disability compatible.
     *
     * @param boolean $disabilityVehicleInd
     * @return self
     */
    public function setDisabilityVehicleInd($disabilityVehicleInd)
    {
        $this->disabilityVehicleInd = $disabilityVehicleInd;

        return $this;
    }

    /**
     * Gets as passengerRPH
     *
     * A reference to a passenger ID set in the Passenger element.
     *
     * @return string
     */
    public function getPassengerRPH()
    {
        return $this->passengerRPH;
    }

    /**
     * Sets a new passengerRPH
     *
     * A reference to a passenger ID set in the Passenger element.
     *
     * @param string $passengerRPH
     * @return self
     */
    public function setPassengerRPH($passengerRPH)
    {
        $this->passengerRPH = $passengerRPH;

        return $this;
    }

    /**
     * Gets as type
     *
     * The service type, such as Airport Transfer, Hourly and Simple Transfer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListGroundServiceProvidedType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The service type, such as Airport Transfer, Hourly and Simple Transfer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListGroundServiceProvidedType $type
     * @return self
     */
    public function setType(\Davispeixoto\OpenTravelAlliance\ListGroundServiceProvidedType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as serviceLevel
     *
     * The level of service, such as deluxe and VIP.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListLevelOfServiceType
     */
    public function getServiceLevel()
    {
        return $this->serviceLevel;
    }

    /**
     * Sets a new serviceLevel
     *
     * The level of service, such as deluxe and VIP.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListLevelOfServiceType $serviceLevel
     * @return self
     */
    public function setServiceLevel(\Davispeixoto\OpenTravelAlliance\ListLevelOfServiceType $serviceLevel)
    {
        $this->serviceLevel = $serviceLevel;

        return $this;
    }

    /**
     * Gets as locations
     *
     * Pickup, interim stops and drop-off details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LocationsAType
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Sets a new locations
     *
     * Pickup, interim stops and drop-off details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LocationsAType
     * $locations
     * @return self
     */
    public function setLocations(
        \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LocationsAType $locations
    ) {
        $this->locations = $locations;

        return $this;
    }

    /**
     * Gets as vehicleSize
     *
     * The size of the vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListVehSizeType
     */
    public function getVehicleSize()
    {
        return $this->vehicleSize;
    }

    /**
     * Sets a new vehicleSize
     *
     * The size of the vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListVehSizeType $vehicleSize
     * @return self
     */
    public function setVehicleSize(\Davispeixoto\OpenTravelAlliance\ListVehSizeType $vehicleSize)
    {
        $this->vehicleSize = $vehicleSize;

        return $this;
    }

    /**
     * Gets as vehicleType
     *
     * The type of the vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListVehCategoryType
     */
    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * Sets a new vehicleType
     *
     * The type of the vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListVehCategoryType $vehicleType
     * @return self
     */
    public function setVehicleType(\Davispeixoto\OpenTravelAlliance\ListVehCategoryType $vehicleType)
    {
        $this->vehicleType = $vehicleType;

        return $this;
    }

    /**
     * Adds as language
     *
     * Collection of language details pertaining to the service.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LanguagesAType\LanguageAType
     * $language
     */
    public function addToLanguages(
        \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LanguagesAType\LanguageAType $language
    ) {
        $this->languages[] = $language;

        return $this;
    }

    /**
     * isset languages
     *
     * Collection of language details pertaining to the service.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLanguages($index)
    {
        return isset($this->languages[$index]);
    }

    /**
     * unset languages
     *
     * Collection of language details pertaining to the service.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLanguages($index)
    {
        unset($this->languages[$index]);
    }

    /**
     * Gets as languages
     *
     * Collection of language details pertaining to the service.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LanguagesAType\LanguageAType[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Sets a new languages
     *
     * Collection of language details pertaining to the service.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LanguagesAType\LanguageAType[]
     * $languages
     * @return self
     */
    public function setLanguages(array $languages)
    {
        $this->languages = $languages;

        return $this;
    }


}

