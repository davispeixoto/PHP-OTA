<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType;

/**
 * Class representing GuestInfoAType
 */
class GuestInfoAType
{

    /**
     * Specifies the fare code and the group code if any. Fare codes are specific to
     * cruise lines.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType\GuestInfoAType\SelectedFareCodeAType[]
     * $selectedFareCode
     */
    private $selectedFareCode = null;

    /**
     * Selected guest mode of transportation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuestTransportationType[]
     * $guestTransportation
     */
    private $guestTransportation = null;

    /**
     * Adds as selectedFareCode
     *
     * Specifies the fare code and the group code if any. Fare codes are specific to
     * cruise lines.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType\GuestInfoAType\SelectedFareCodeAType
     * $selectedFareCode
     */
    public function addToSelectedFareCode(
        \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType\GuestInfoAType\SelectedFareCodeAType $selectedFareCode
    ) {
        $this->selectedFareCode[] = $selectedFareCode;

        return $this;
    }

    /**
     * isset selectedFareCode
     *
     * Specifies the fare code and the group code if any. Fare codes are specific to
     * cruise lines.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSelectedFareCode($index)
    {
        return isset($this->selectedFareCode[$index]);
    }

    /**
     * unset selectedFareCode
     *
     * Specifies the fare code and the group code if any. Fare codes are specific to
     * cruise lines.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSelectedFareCode($index)
    {
        unset($this->selectedFareCode[$index]);
    }

    /**
     * Gets as selectedFareCode
     *
     * Specifies the fare code and the group code if any. Fare codes are specific to
     * cruise lines.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType\GuestInfoAType\SelectedFareCodeAType[]
     */
    public function getSelectedFareCode()
    {
        return $this->selectedFareCode;
    }

    /**
     * Sets a new selectedFareCode
     *
     * Specifies the fare code and the group code if any. Fare codes are specific to
     * cruise lines.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType\GuestInfoAType\SelectedFareCodeAType[]
     * $selectedFareCode
     * @return self
     */
    public function setSelectedFareCode(array $selectedFareCode)
    {
        $this->selectedFareCode = $selectedFareCode;

        return $this;
    }

    /**
     * Adds as guestTransportation
     *
     * Selected guest mode of transportation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GuestTransportationType
     * $guestTransportation
     */
    public function addToGuestTransportation(
        \Davispeixoto\OpenTravelAlliance\GuestTransportationType $guestTransportation
    ) {
        $this->guestTransportation[] = $guestTransportation;

        return $this;
    }

    /**
     * isset guestTransportation
     *
     * Selected guest mode of transportation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestTransportation($index)
    {
        return isset($this->guestTransportation[$index]);
    }

    /**
     * unset guestTransportation
     *
     * Selected guest mode of transportation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestTransportation($index)
    {
        unset($this->guestTransportation[$index]);
    }

    /**
     * Gets as guestTransportation
     *
     * Selected guest mode of transportation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuestTransportationType[]
     */
    public function getGuestTransportation()
    {
        return $this->guestTransportation;
    }

    /**
     * Sets a new guestTransportation
     *
     * Selected guest mode of transportation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuestTransportationType[]
     * $guestTransportation
     * @return self
     */
    public function setGuestTransportation(array $guestTransportation)
    {
        $this->guestTransportation = $guestTransportation;

        return $this;
    }


}

