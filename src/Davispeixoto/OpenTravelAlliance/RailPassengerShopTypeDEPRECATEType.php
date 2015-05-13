<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailPassengerShopTypeDEPRECATEType
 *
 * Classification of passenger demographics and rate qualifying information with
 * passenger category quantity and reference place holder.
 * XSD Type: RailPassengerShopType_DEPRECATE
 */
class RailPassengerShopTypeDEPRECATEType
{

    /**
     * If TRUE, an infant is accompanying a passenger.
     *
     * @property boolean $accompaniedByInfantInd
     */
    private $accompaniedByInfantInd = null;

    /**
     * Identifies the gender.
     *
     * @property string $gender
     */
    private $gender = null;

    /**
     * The passenger occupation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPassengerOccupationType
     * $occupation
     */
    private $occupation = null;

    /**
     * Age qualifying information for the passenger. Refer to OpenTravel code list Rail
     * Passenger Type Code (PXC).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailPassengerShopTypeDEPRECATEType\PassengerQualifyingInfoAType[]
     * $passengerQualifyingInfo
     */
    private $passengerQualifyingInfo = null;

    /**
     * Passenger ADA requirements. Refer to OpenTravel Disability Feature Code (PHY)
     * code list.
     *
     * @property string[] $aDARequirement
     */
    private $aDARequirement = null;

    /**
     * Gets as accompaniedByInfantInd
     *
     * If TRUE, an infant is accompanying a passenger.
     *
     * @return boolean
     */
    public function getAccompaniedByInfantInd()
    {
        return $this->accompaniedByInfantInd;
    }

    /**
     * Sets a new accompaniedByInfantInd
     *
     * If TRUE, an infant is accompanying a passenger.
     *
     * @param boolean $accompaniedByInfantInd
     * @return self
     */
    public function setAccompaniedByInfantInd($accompaniedByInfantInd)
    {
        $this->accompaniedByInfantInd = $accompaniedByInfantInd;

        return $this;
    }

    /**
     * Gets as gender
     *
     * Identifies the gender.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * Identifies the gender.
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Gets as occupation
     *
     * The passenger occupation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPassengerOccupationType
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Sets a new occupation
     *
     * The passenger occupation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerOccupationType $occupation
     * @return self
     */
    public function setOccupation(\Davispeixoto\OpenTravelAlliance\RailPassengerOccupationType $occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Adds as passengerQualifyingInfo
     *
     * Age qualifying information for the passenger. Refer to OpenTravel code list Rail
     * Passenger Type Code (PXC).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailPassengerShopTypeDEPRECATEType\PassengerQualifyingInfoAType
     * $passengerQualifyingInfo
     */
    public function addToPassengerQualifyingInfo(
        \Davispeixoto\OpenTravelAlliance\RailPassengerShopTypeDEPRECATEType\PassengerQualifyingInfoAType $passengerQualifyingInfo
    ) {
        $this->passengerQualifyingInfo[] = $passengerQualifyingInfo;

        return $this;
    }

    /**
     * isset passengerQualifyingInfo
     *
     * Age qualifying information for the passenger. Refer to OpenTravel code list Rail
     * Passenger Type Code (PXC).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerQualifyingInfo($index)
    {
        return isset($this->passengerQualifyingInfo[$index]);
    }

    /**
     * unset passengerQualifyingInfo
     *
     * Age qualifying information for the passenger. Refer to OpenTravel code list Rail
     * Passenger Type Code (PXC).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerQualifyingInfo($index)
    {
        unset($this->passengerQualifyingInfo[$index]);
    }

    /**
     * Gets as passengerQualifyingInfo
     *
     * Age qualifying information for the passenger. Refer to OpenTravel code list Rail
     * Passenger Type Code (PXC).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailPassengerShopTypeDEPRECATEType\PassengerQualifyingInfoAType[]
     */
    public function getPassengerQualifyingInfo()
    {
        return $this->passengerQualifyingInfo;
    }

    /**
     * Sets a new passengerQualifyingInfo
     *
     * Age qualifying information for the passenger. Refer to OpenTravel code list Rail
     * Passenger Type Code (PXC).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailPassengerShopTypeDEPRECATEType\PassengerQualifyingInfoAType[]
     * $passengerQualifyingInfo
     * @return self
     */
    public function setPassengerQualifyingInfo(array $passengerQualifyingInfo)
    {
        $this->passengerQualifyingInfo = $passengerQualifyingInfo;

        return $this;
    }

    /**
     * Adds as aDARequirement
     *
     * Passenger ADA requirements. Refer to OpenTravel Disability Feature Code (PHY)
     * code list.
     *
     * @return self
     * @param string $aDARequirement
     */
    public function addToADARequirement($aDARequirement)
    {
        $this->aDARequirement[] = $aDARequirement;

        return $this;
    }

    /**
     * isset aDARequirement
     *
     * Passenger ADA requirements. Refer to OpenTravel Disability Feature Code (PHY)
     * code list.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetADARequirement($index)
    {
        return isset($this->aDARequirement[$index]);
    }

    /**
     * unset aDARequirement
     *
     * Passenger ADA requirements. Refer to OpenTravel Disability Feature Code (PHY)
     * code list.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetADARequirement($index)
    {
        unset($this->aDARequirement[$index]);
    }

    /**
     * Gets as aDARequirement
     *
     * Passenger ADA requirements. Refer to OpenTravel Disability Feature Code (PHY)
     * code list.
     *
     * @return string[]
     */
    public function getADARequirement()
    {
        return $this->aDARequirement;
    }

    /**
     * Sets a new aDARequirement
     *
     * Passenger ADA requirements. Refer to OpenTravel Disability Feature Code (PHY)
     * code list.
     *
     * @param string $aDARequirement
     * @return self
     */
    public function setADARequirement(array $aDARequirement)
    {
        $this->aDARequirement = $aDARequirement;

        return $this;
    }


}

