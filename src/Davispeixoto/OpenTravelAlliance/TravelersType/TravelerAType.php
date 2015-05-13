<?php

namespace Davispeixoto\OpenTravelAlliance\TravelersType;

/**
 * Class representing TravelerAType
 */
class TravelerAType
{

    /**
     * This is a reference placeholder, used as an index for this traveler in this
     * reservation.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Basic traveler profile.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ProfileType $profile
     */
    private $profile = null;

    /**
     * Used to define a traveler's physical characteristic.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TravelersType\TravelerAType\TravelerCharacteristicAType[]
     * $travelerCharacteristic
     */
    private $travelerCharacteristic = null;

    /**
     * The SpecialRequest object indicates special requests for a particular traveler.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialRequestType\SpecialRequestAType[]
     * $specialRequests
     */
    private $specialRequests = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as rPH
     *
     * This is a reference placeholder, used as an index for this traveler in this
     * reservation.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * This is a reference placeholder, used as an index for this traveler in this
     * reservation.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as profile
     *
     * Basic traveler profile.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ProfileType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * Basic traveler profile.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ProfileType $profile
     * @return self
     */
    public function setProfile(\Davispeixoto\OpenTravelAlliance\ProfileType $profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Adds as travelerCharacteristic
     *
     * Used to define a traveler's physical characteristic.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelersType\TravelerAType\TravelerCharacteristicAType
     * $travelerCharacteristic
     */
    public function addToTravelerCharacteristic(
        \Davispeixoto\OpenTravelAlliance\TravelersType\TravelerAType\TravelerCharacteristicAType $travelerCharacteristic
    ) {
        $this->travelerCharacteristic[] = $travelerCharacteristic;

        return $this;
    }

    /**
     * isset travelerCharacteristic
     *
     * Used to define a traveler's physical characteristic.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelerCharacteristic($index)
    {
        return isset($this->travelerCharacteristic[$index]);
    }

    /**
     * unset travelerCharacteristic
     *
     * Used to define a traveler's physical characteristic.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelerCharacteristic($index)
    {
        unset($this->travelerCharacteristic[$index]);
    }

    /**
     * Gets as travelerCharacteristic
     *
     * Used to define a traveler's physical characteristic.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TravelersType\TravelerAType\TravelerCharacteristicAType[]
     */
    public function getTravelerCharacteristic()
    {
        return $this->travelerCharacteristic;
    }

    /**
     * Sets a new travelerCharacteristic
     *
     * Used to define a traveler's physical characteristic.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelersType\TravelerAType\TravelerCharacteristicAType[]
     * $travelerCharacteristic
     * @return self
     */
    public function setTravelerCharacteristic(array $travelerCharacteristic)
    {
        $this->travelerCharacteristic = $travelerCharacteristic;

        return $this;
    }

    /**
     * Adds as specialRequest
     *
     * The SpecialRequest object indicates special requests for a particular traveler.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SpecialRequestType\SpecialRequestAType
     * $specialRequest
     */
    public function addToSpecialRequests(
        \Davispeixoto\OpenTravelAlliance\SpecialRequestType\SpecialRequestAType $specialRequest
    ) {
        $this->specialRequests[] = $specialRequest;

        return $this;
    }

    /**
     * isset specialRequests
     *
     * The SpecialRequest object indicates special requests for a particular traveler.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialRequests($index)
    {
        return isset($this->specialRequests[$index]);
    }

    /**
     * unset specialRequests
     *
     * The SpecialRequest object indicates special requests for a particular traveler.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialRequests($index)
    {
        unset($this->specialRequests[$index]);
    }

    /**
     * Gets as specialRequests
     *
     * The SpecialRequest object indicates special requests for a particular traveler.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialRequestType\SpecialRequestAType[]
     */
    public function getSpecialRequests()
    {
        return $this->specialRequests;
    }

    /**
     * Sets a new specialRequests
     *
     * The SpecialRequest object indicates special requests for a particular traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SpecialRequestType\SpecialRequestAType[]
     * $specialRequests
     * @return self
     */
    public function setSpecialRequests(array $specialRequests)
    {
        $this->specialRequests = $specialRequests;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

