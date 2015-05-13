<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GroundServiceType
 *
 * Service and vehicle information.
 * XSD Type: GroundServiceType
 */
class GroundServiceType
{

    /**
     * If true, a child car seat is required or requested.
     *
     * @property boolean $childCarSeatInd
     */
    private $childCarSeatInd = null;

    /**
     * If true, a vehicle is being requested and/or is available that allows domestic
     * pets.
     *
     * @property boolean $petFriendlyInd
     */
    private $petFriendlyInd = null;

    /**
     * If true, the vehicle is fuel efficient.
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
     * If true, a greeting sign is requested.
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
     * If true, complementary meet and greet services are requested and/or provided..
     *
     * @property boolean $meetAndGreetInd
     */
    private $meetAndGreetInd = null;

    /**
     * If true, personal meet and greet is requested (that may incur an additional
     * charge) or available.
     *
     * @property boolean $personalGreeterInd
     */
    private $personalGreeterInd = null;

    /**
     * If true, guide services are requested and/or provided for local area knowledge
     * and information.
     *
     * @property boolean $guideInd
     */
    private $guideInd = null;

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
     * If true, specific languages are requested and/or provided in the Language
     * element.
     *
     * @property boolean $multilingualInd
     */
    private $multilingualInd = null;

    /**
     * Language details pertaining to the service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundServiceType\LanguageAType[]
     * $language
     */
    private $language = null;

    /**
     * Gets as childCarSeatInd
     *
     * If true, a child car seat is required or requested.
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
     * If true, a child car seat is required or requested.
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
     * If true, a vehicle is being requested and/or is available that allows domestic
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
     * If true, a vehicle is being requested and/or is available that allows domestic
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
     * If true, the vehicle is fuel efficient.
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
     * If true, the vehicle is fuel efficient.
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
     * If true, a greeting sign is requested.
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
     * If true, a greeting sign is requested.
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
     * If true, complementary meet and greet services are requested and/or provided..
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
     * If true, complementary meet and greet services are requested and/or provided..
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
     * If true, personal meet and greet is requested (that may incur an additional
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
     * If true, personal meet and greet is requested (that may incur an additional
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
     * Gets as guideInd
     *
     * If true, guide services are requested and/or provided for local area knowledge
     * and information.
     *
     * @return boolean
     */
    public function getGuideInd()
    {
        return $this->guideInd;
    }

    /**
     * Sets a new guideInd
     *
     * If true, guide services are requested and/or provided for local area knowledge
     * and information.
     *
     * @param boolean $guideInd
     * @return self
     */
    public function setGuideInd($guideInd)
    {
        $this->guideInd = $guideInd;

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
     * Gets as multilingualInd
     *
     * If true, specific languages are requested and/or provided in the Language
     * element.
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
     * If true, specific languages are requested and/or provided in the Language
     * element.
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
     * Adds as language
     *
     * Language details pertaining to the service.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceType\LanguageAType
     * $language
     */
    public function addToLanguage(\Davispeixoto\OpenTravelAlliance\GroundServiceType\LanguageAType $language)
    {
        $this->language[] = $language;

        return $this;
    }

    /**
     * isset language
     *
     * Language details pertaining to the service.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLanguage($index)
    {
        return isset($this->language[$index]);
    }

    /**
     * unset language
     *
     * Language details pertaining to the service.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLanguage($index)
    {
        unset($this->language[$index]);
    }

    /**
     * Gets as language
     *
     * Language details pertaining to the service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundServiceType\LanguageAType[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Language details pertaining to the service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceType\LanguageAType[]
     * $language
     * @return self
     */
    public function setLanguage(array $language)
    {
        $this->language = $language;

        return $this;
    }


}

