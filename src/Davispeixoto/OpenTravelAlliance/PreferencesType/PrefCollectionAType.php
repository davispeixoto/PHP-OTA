<?php

namespace Davispeixoto\OpenTravelAlliance\PreferencesType;

/**
 * Class representing PrefCollectionAType
 */
class PrefCollectionAType
{

    /**
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @property string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @property string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @property string $travelPurpose
     */
    private $travelPurpose = null;

    /**
     * Supplier-independent preferences.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommonPrefType[] $commonPref
     */
    private $commonPref = null;

    /**
     * A set of preferences for vehicle rental.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType[]
     * $vehicleRentalPref
     */
    private $vehicleRentalPref = null;

    /**
     * A set of preferences for air travel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirlinePrefType[] $airlinePref
     */
    private $airlinePref = null;

    /**
     * A set of preferences for hotel stay.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelPrefType[] $hotelPref
     */
    private $hotelPref = null;

    /**
     * A set of preferences for rail travel
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPrefType[] $railPref
     */
    private $railPref = null;

    /**
     * A set of preferences for other services.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OtherSrvcPrefType[] $otherSrvcPref
     */
    private $otherSrvcPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;

        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;

        return $this;
    }

    /**
     * Gets as travelPurpose
     *
     * Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @return string
     */
    public function getTravelPurpose()
    {
        return $this->travelPurpose;
    }

    /**
     * Sets a new travelPurpose
     *
     * Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @param string $travelPurpose
     * @return self
     */
    public function setTravelPurpose($travelPurpose)
    {
        $this->travelPurpose = $travelPurpose;

        return $this;
    }

    /**
     * Adds as commonPref
     *
     * Supplier-independent preferences.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CommonPrefType $commonPref
     */
    public function addToCommonPref(\Davispeixoto\OpenTravelAlliance\CommonPrefType $commonPref)
    {
        $this->commonPref[] = $commonPref;

        return $this;
    }

    /**
     * isset commonPref
     *
     * Supplier-independent preferences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCommonPref($index)
    {
        return isset($this->commonPref[$index]);
    }

    /**
     * unset commonPref
     *
     * Supplier-independent preferences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCommonPref($index)
    {
        unset($this->commonPref[$index]);
    }

    /**
     * Gets as commonPref
     *
     * Supplier-independent preferences.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommonPrefType[]
     */
    public function getCommonPref()
    {
        return $this->commonPref;
    }

    /**
     * Sets a new commonPref
     *
     * Supplier-independent preferences.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommonPrefType[] $commonPref
     * @return self
     */
    public function setCommonPref(array $commonPref)
    {
        $this->commonPref = $commonPref;

        return $this;
    }

    /**
     * Adds as vehicleRentalPref
     *
     * A set of preferences for vehicle rental.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType
     * $vehicleRentalPref
     */
    public function addToVehicleRentalPref(
        \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType $vehicleRentalPref
    ) {
        $this->vehicleRentalPref[] = $vehicleRentalPref;

        return $this;
    }

    /**
     * isset vehicleRentalPref
     *
     * A set of preferences for vehicle rental.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehicleRentalPref($index)
    {
        return isset($this->vehicleRentalPref[$index]);
    }

    /**
     * unset vehicleRentalPref
     *
     * A set of preferences for vehicle rental.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehicleRentalPref($index)
    {
        unset($this->vehicleRentalPref[$index]);
    }

    /**
     * Gets as vehicleRentalPref
     *
     * A set of preferences for vehicle rental.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType[]
     */
    public function getVehicleRentalPref()
    {
        return $this->vehicleRentalPref;
    }

    /**
     * Sets a new vehicleRentalPref
     *
     * A set of preferences for vehicle rental.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType[]
     * $vehicleRentalPref
     * @return self
     */
    public function setVehicleRentalPref(array $vehicleRentalPref)
    {
        $this->vehicleRentalPref = $vehicleRentalPref;

        return $this;
    }

    /**
     * Adds as airlinePref
     *
     * A set of preferences for air travel.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType $airlinePref
     */
    public function addToAirlinePref(\Davispeixoto\OpenTravelAlliance\AirlinePrefType $airlinePref)
    {
        $this->airlinePref[] = $airlinePref;

        return $this;
    }

    /**
     * isset airlinePref
     *
     * A set of preferences for air travel.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirlinePref($index)
    {
        return isset($this->airlinePref[$index]);
    }

    /**
     * unset airlinePref
     *
     * A set of preferences for air travel.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirlinePref($index)
    {
        unset($this->airlinePref[$index]);
    }

    /**
     * Gets as airlinePref
     *
     * A set of preferences for air travel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirlinePrefType[]
     */
    public function getAirlinePref()
    {
        return $this->airlinePref;
    }

    /**
     * Sets a new airlinePref
     *
     * A set of preferences for air travel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType[] $airlinePref
     * @return self
     */
    public function setAirlinePref(array $airlinePref)
    {
        $this->airlinePref = $airlinePref;

        return $this;
    }

    /**
     * Adds as hotelPref
     *
     * A set of preferences for hotel stay.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\HotelPrefType $hotelPref
     */
    public function addToHotelPref(\Davispeixoto\OpenTravelAlliance\HotelPrefType $hotelPref)
    {
        $this->hotelPref[] = $hotelPref;

        return $this;
    }

    /**
     * isset hotelPref
     *
     * A set of preferences for hotel stay.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelPref($index)
    {
        return isset($this->hotelPref[$index]);
    }

    /**
     * unset hotelPref
     *
     * A set of preferences for hotel stay.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelPref($index)
    {
        unset($this->hotelPref[$index]);
    }

    /**
     * Gets as hotelPref
     *
     * A set of preferences for hotel stay.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelPrefType[]
     */
    public function getHotelPref()
    {
        return $this->hotelPref;
    }

    /**
     * Sets a new hotelPref
     *
     * A set of preferences for hotel stay.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelPrefType[] $hotelPref
     * @return self
     */
    public function setHotelPref(array $hotelPref)
    {
        $this->hotelPref = $hotelPref;

        return $this;
    }

    /**
     * Adds as railPref
     *
     * A set of preferences for rail travel
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType $railPref
     */
    public function addToRailPref(\Davispeixoto\OpenTravelAlliance\RailPrefType $railPref)
    {
        $this->railPref[] = $railPref;

        return $this;
    }

    /**
     * isset railPref
     *
     * A set of preferences for rail travel
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRailPref($index)
    {
        return isset($this->railPref[$index]);
    }

    /**
     * unset railPref
     *
     * A set of preferences for rail travel
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRailPref($index)
    {
        unset($this->railPref[$index]);
    }

    /**
     * Gets as railPref
     *
     * A set of preferences for rail travel
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPrefType[]
     */
    public function getRailPref()
    {
        return $this->railPref;
    }

    /**
     * Sets a new railPref
     *
     * A set of preferences for rail travel
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType[] $railPref
     * @return self
     */
    public function setRailPref(array $railPref)
    {
        $this->railPref = $railPref;

        return $this;
    }

    /**
     * Adds as otherSrvcPref
     *
     * A set of preferences for other services.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OtherSrvcPrefType $otherSrvcPref
     */
    public function addToOtherSrvcPref(\Davispeixoto\OpenTravelAlliance\OtherSrvcPrefType $otherSrvcPref)
    {
        $this->otherSrvcPref[] = $otherSrvcPref;

        return $this;
    }

    /**
     * isset otherSrvcPref
     *
     * A set of preferences for other services.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOtherSrvcPref($index)
    {
        return isset($this->otherSrvcPref[$index]);
    }

    /**
     * unset otherSrvcPref
     *
     * A set of preferences for other services.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOtherSrvcPref($index)
    {
        unset($this->otherSrvcPref[$index]);
    }

    /**
     * Gets as otherSrvcPref
     *
     * A set of preferences for other services.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OtherSrvcPrefType[]
     */
    public function getOtherSrvcPref()
    {
        return $this->otherSrvcPref;
    }

    /**
     * Sets a new otherSrvcPref
     *
     * A set of preferences for other services.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OtherSrvcPrefType[] $otherSrvcPref
     * @return self
     */
    public function setOtherSrvcPref(array $otherSrvcPref)
    {
        $this->otherSrvcPref = $otherSrvcPref;

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

