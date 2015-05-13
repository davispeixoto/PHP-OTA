<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CabinOptionType
 *
 * Specifies cabin option info.
 * XSD Type: CabinOptionType
 */
class CabinOptionType
{

    /**
     * Specifies the status of the cabin. Refer to OpenTravel Code table Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Specifies the category location.
     *
     * @property string $categoryLocation
     */
    private $categoryLocation = null;

    /**
     * Identifies the ship side location of the cabin.
     *
     * @property string $shipSide
     */
    private $shipSide = null;

    /**
     * Position of the cabin in ship (e.g., aft).
     *
     * @property string $positionInShip
     */
    private $positionInShip = null;

    /**
     * Specifies the bed type for this cabin. Refer to OpenTravel Codelist Bed Type
     * (BED).
     *
     * @property string $bedType
     */
    private $bedType = null;

    /**
     * The number identifying the cabin.
     *
     * @property string $cabinNumber
     */
    private $cabinNumber = null;

    /**
     * Specifies the Max occupancy of the Cabin.
     *
     * @property integer $maxOccupancy
     */
    private $maxOccupancy = null;

    /**
     * Can be true in event that wait list category is cleared at booking retrieval
     * time. (Possibly used by CabinUnhold.)
     *
     * @property boolean $declineIndicator
     */
    private $declineIndicator = null;

    /**
     * When true, the cabin is held. When false, the cabin is not being held.
     *
     * @property boolean $heldIndicator
     */
    private $heldIndicator = null;

    /**
     * The date and time the held cabin will be released back to inventory if not
     * booked. Typically, this is the same ReleaseDateTime that was provided in the
     * CabinHoldRS.
     *
     * @property \DateTime $releaseDateTime
     */
    private $releaseDateTime = null;

    /**
     * Number of the deck on the ship where the cabin is located.
     *
     * @property string $deckNumber
     */
    private $deckNumber = null;

    /**
     * Name of the deck on the ship where the cabin is located.
     *
     * @property string $deckName
     */
    private $deckName = null;

    /**
     * The status of the berth category of the cabin. Refer to OpenTravel Code Table
     * STS (Status).
     *
     * @property string $cabinCategoryStatusCode
     */
    private $cabinCategoryStatusCode = null;

    /**
     * The berth category of the cabin.
     *
     * @property string $cabinCategoryCode
     */
    private $cabinCategoryCode = null;

    /**
     * The relative ranking of the cabin based on location preference, a better view,
     * etc.
     *
     * @property integer $cabinRanking
     */
    private $cabinRanking = null;

    /**
     * If true, the cabin is connected to another cabin.
     *
     * @property boolean $connectingCabinIndicator
     */
    private $connectingCabinIndicator = null;

    /**
     * The number of the connecting cabin.
     *
     * @property string $connectingCabinNumber
     */
    private $connectingCabinNumber = null;

    /**
     * Indicates gender preference for cabin sharing.
     *
     * @property string $sharedCabinGender
     */
    private $sharedCabinGender = null;

    /**
     * Specifies the number of occupants currently assigned to a shared cabin. The
     * value will be zero for an unoccupied cabin.
     *
     * @property integer $confirmedOccupancy
     */
    private $confirmedOccupancy = null;

    /**
     * Specifies cabin bed configuration.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CabinOptionType\CabinConfigurationAType[]
     * $cabinConfiguration
     */
    private $cabinConfiguration = null;

    /**
     * Provides area information related to the cabin.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CabinOptionType\MeasurementInfoAType[]
     * $measurementInfo
     */
    private $measurementInfo = null;

    /**
     * Remark information related to the cabin option.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType $remark
     */
    private $remark = null;

    /**
     * Gets as status
     *
     * Specifies the status of the cabin. Refer to OpenTravel Code table Status (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Specifies the status of the cabin. Refer to OpenTravel Code table Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as categoryLocation
     *
     * Specifies the category location.
     *
     * @return string
     */
    public function getCategoryLocation()
    {
        return $this->categoryLocation;
    }

    /**
     * Sets a new categoryLocation
     *
     * Specifies the category location.
     *
     * @param string $categoryLocation
     * @return self
     */
    public function setCategoryLocation($categoryLocation)
    {
        $this->categoryLocation = $categoryLocation;

        return $this;
    }

    /**
     * Gets as shipSide
     *
     * Identifies the ship side location of the cabin.
     *
     * @return string
     */
    public function getShipSide()
    {
        return $this->shipSide;
    }

    /**
     * Sets a new shipSide
     *
     * Identifies the ship side location of the cabin.
     *
     * @param string $shipSide
     * @return self
     */
    public function setShipSide($shipSide)
    {
        $this->shipSide = $shipSide;

        return $this;
    }

    /**
     * Gets as positionInShip
     *
     * Position of the cabin in ship (e.g., aft).
     *
     * @return string
     */
    public function getPositionInShip()
    {
        return $this->positionInShip;
    }

    /**
     * Sets a new positionInShip
     *
     * Position of the cabin in ship (e.g., aft).
     *
     * @param string $positionInShip
     * @return self
     */
    public function setPositionInShip($positionInShip)
    {
        $this->positionInShip = $positionInShip;

        return $this;
    }

    /**
     * Gets as bedType
     *
     * Specifies the bed type for this cabin. Refer to OpenTravel Codelist Bed Type
     * (BED).
     *
     * @return string
     */
    public function getBedType()
    {
        return $this->bedType;
    }

    /**
     * Sets a new bedType
     *
     * Specifies the bed type for this cabin. Refer to OpenTravel Codelist Bed Type
     * (BED).
     *
     * @param string $bedType
     * @return self
     */
    public function setBedType($bedType)
    {
        $this->bedType = $bedType;

        return $this;
    }

    /**
     * Gets as cabinNumber
     *
     * The number identifying the cabin.
     *
     * @return string
     */
    public function getCabinNumber()
    {
        return $this->cabinNumber;
    }

    /**
     * Sets a new cabinNumber
     *
     * The number identifying the cabin.
     *
     * @param string $cabinNumber
     * @return self
     */
    public function setCabinNumber($cabinNumber)
    {
        $this->cabinNumber = $cabinNumber;

        return $this;
    }

    /**
     * Gets as maxOccupancy
     *
     * Specifies the Max occupancy of the Cabin.
     *
     * @return integer
     */
    public function getMaxOccupancy()
    {
        return $this->maxOccupancy;
    }

    /**
     * Sets a new maxOccupancy
     *
     * Specifies the Max occupancy of the Cabin.
     *
     * @param integer $maxOccupancy
     * @return self
     */
    public function setMaxOccupancy($maxOccupancy)
    {
        $this->maxOccupancy = $maxOccupancy;

        return $this;
    }

    /**
     * Gets as declineIndicator
     *
     * Can be true in event that wait list category is cleared at booking retrieval
     * time. (Possibly used by CabinUnhold.)
     *
     * @return boolean
     */
    public function getDeclineIndicator()
    {
        return $this->declineIndicator;
    }

    /**
     * Sets a new declineIndicator
     *
     * Can be true in event that wait list category is cleared at booking retrieval
     * time. (Possibly used by CabinUnhold.)
     *
     * @param boolean $declineIndicator
     * @return self
     */
    public function setDeclineIndicator($declineIndicator)
    {
        $this->declineIndicator = $declineIndicator;

        return $this;
    }

    /**
     * Gets as heldIndicator
     *
     * When true, the cabin is held. When false, the cabin is not being held.
     *
     * @return boolean
     */
    public function getHeldIndicator()
    {
        return $this->heldIndicator;
    }

    /**
     * Sets a new heldIndicator
     *
     * When true, the cabin is held. When false, the cabin is not being held.
     *
     * @param boolean $heldIndicator
     * @return self
     */
    public function setHeldIndicator($heldIndicator)
    {
        $this->heldIndicator = $heldIndicator;

        return $this;
    }

    /**
     * Gets as releaseDateTime
     *
     * The date and time the held cabin will be released back to inventory if not
     * booked. Typically, this is the same ReleaseDateTime that was provided in the
     * CabinHoldRS.
     *
     * @return \DateTime
     */
    public function getReleaseDateTime()
    {
        return $this->releaseDateTime;
    }

    /**
     * Sets a new releaseDateTime
     *
     * The date and time the held cabin will be released back to inventory if not
     * booked. Typically, this is the same ReleaseDateTime that was provided in the
     * CabinHoldRS.
     *
     * @param \DateTime $releaseDateTime
     * @return self
     */
    public function setReleaseDateTime(\DateTime $releaseDateTime)
    {
        $this->releaseDateTime = $releaseDateTime;

        return $this;
    }

    /**
     * Gets as deckNumber
     *
     * Number of the deck on the ship where the cabin is located.
     *
     * @return string
     */
    public function getDeckNumber()
    {
        return $this->deckNumber;
    }

    /**
     * Sets a new deckNumber
     *
     * Number of the deck on the ship where the cabin is located.
     *
     * @param string $deckNumber
     * @return self
     */
    public function setDeckNumber($deckNumber)
    {
        $this->deckNumber = $deckNumber;

        return $this;
    }

    /**
     * Gets as deckName
     *
     * Name of the deck on the ship where the cabin is located.
     *
     * @return string
     */
    public function getDeckName()
    {
        return $this->deckName;
    }

    /**
     * Sets a new deckName
     *
     * Name of the deck on the ship where the cabin is located.
     *
     * @param string $deckName
     * @return self
     */
    public function setDeckName($deckName)
    {
        $this->deckName = $deckName;

        return $this;
    }

    /**
     * Gets as cabinCategoryStatusCode
     *
     * The status of the berth category of the cabin. Refer to OpenTravel Code Table
     * STS (Status).
     *
     * @return string
     */
    public function getCabinCategoryStatusCode()
    {
        return $this->cabinCategoryStatusCode;
    }

    /**
     * Sets a new cabinCategoryStatusCode
     *
     * The status of the berth category of the cabin. Refer to OpenTravel Code Table
     * STS (Status).
     *
     * @param string $cabinCategoryStatusCode
     * @return self
     */
    public function setCabinCategoryStatusCode($cabinCategoryStatusCode)
    {
        $this->cabinCategoryStatusCode = $cabinCategoryStatusCode;

        return $this;
    }

    /**
     * Gets as cabinCategoryCode
     *
     * The berth category of the cabin.
     *
     * @return string
     */
    public function getCabinCategoryCode()
    {
        return $this->cabinCategoryCode;
    }

    /**
     * Sets a new cabinCategoryCode
     *
     * The berth category of the cabin.
     *
     * @param string $cabinCategoryCode
     * @return self
     */
    public function setCabinCategoryCode($cabinCategoryCode)
    {
        $this->cabinCategoryCode = $cabinCategoryCode;

        return $this;
    }

    /**
     * Gets as cabinRanking
     *
     * The relative ranking of the cabin based on location preference, a better view,
     * etc.
     *
     * @return integer
     */
    public function getCabinRanking()
    {
        return $this->cabinRanking;
    }

    /**
     * Sets a new cabinRanking
     *
     * The relative ranking of the cabin based on location preference, a better view,
     * etc.
     *
     * @param integer $cabinRanking
     * @return self
     */
    public function setCabinRanking($cabinRanking)
    {
        $this->cabinRanking = $cabinRanking;

        return $this;
    }

    /**
     * Gets as connectingCabinIndicator
     *
     * If true, the cabin is connected to another cabin.
     *
     * @return boolean
     */
    public function getConnectingCabinIndicator()
    {
        return $this->connectingCabinIndicator;
    }

    /**
     * Sets a new connectingCabinIndicator
     *
     * If true, the cabin is connected to another cabin.
     *
     * @param boolean $connectingCabinIndicator
     * @return self
     */
    public function setConnectingCabinIndicator($connectingCabinIndicator)
    {
        $this->connectingCabinIndicator = $connectingCabinIndicator;

        return $this;
    }

    /**
     * Gets as connectingCabinNumber
     *
     * The number of the connecting cabin.
     *
     * @return string
     */
    public function getConnectingCabinNumber()
    {
        return $this->connectingCabinNumber;
    }

    /**
     * Sets a new connectingCabinNumber
     *
     * The number of the connecting cabin.
     *
     * @param string $connectingCabinNumber
     * @return self
     */
    public function setConnectingCabinNumber($connectingCabinNumber)
    {
        $this->connectingCabinNumber = $connectingCabinNumber;

        return $this;
    }

    /**
     * Gets as sharedCabinGender
     *
     * Indicates gender preference for cabin sharing.
     *
     * @return string
     */
    public function getSharedCabinGender()
    {
        return $this->sharedCabinGender;
    }

    /**
     * Sets a new sharedCabinGender
     *
     * Indicates gender preference for cabin sharing.
     *
     * @param string $sharedCabinGender
     * @return self
     */
    public function setSharedCabinGender($sharedCabinGender)
    {
        $this->sharedCabinGender = $sharedCabinGender;

        return $this;
    }

    /**
     * Gets as confirmedOccupancy
     *
     * Specifies the number of occupants currently assigned to a shared cabin. The
     * value will be zero for an unoccupied cabin.
     *
     * @return integer
     */
    public function getConfirmedOccupancy()
    {
        return $this->confirmedOccupancy;
    }

    /**
     * Sets a new confirmedOccupancy
     *
     * Specifies the number of occupants currently assigned to a shared cabin. The
     * value will be zero for an unoccupied cabin.
     *
     * @param integer $confirmedOccupancy
     * @return self
     */
    public function setConfirmedOccupancy($confirmedOccupancy)
    {
        $this->confirmedOccupancy = $confirmedOccupancy;

        return $this;
    }

    /**
     * Adds as cabinConfiguration
     *
     * Specifies cabin bed configuration.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CabinOptionType\CabinConfigurationAType
     * $cabinConfiguration
     */
    public function addToCabinConfiguration(
        \Davispeixoto\OpenTravelAlliance\CabinOptionType\CabinConfigurationAType $cabinConfiguration
    ) {
        $this->cabinConfiguration[] = $cabinConfiguration;

        return $this;
    }

    /**
     * isset cabinConfiguration
     *
     * Specifies cabin bed configuration.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCabinConfiguration($index)
    {
        return isset($this->cabinConfiguration[$index]);
    }

    /**
     * unset cabinConfiguration
     *
     * Specifies cabin bed configuration.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCabinConfiguration($index)
    {
        unset($this->cabinConfiguration[$index]);
    }

    /**
     * Gets as cabinConfiguration
     *
     * Specifies cabin bed configuration.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CabinOptionType\CabinConfigurationAType[]
     */
    public function getCabinConfiguration()
    {
        return $this->cabinConfiguration;
    }

    /**
     * Sets a new cabinConfiguration
     *
     * Specifies cabin bed configuration.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CabinOptionType\CabinConfigurationAType[]
     * $cabinConfiguration
     * @return self
     */
    public function setCabinConfiguration(array $cabinConfiguration)
    {
        $this->cabinConfiguration = $cabinConfiguration;

        return $this;
    }

    /**
     * Adds as measurementInfo
     *
     * Provides area information related to the cabin.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CabinOptionType\MeasurementInfoAType
     * $measurementInfo
     */
    public function addToMeasurementInfo(
        \Davispeixoto\OpenTravelAlliance\CabinOptionType\MeasurementInfoAType $measurementInfo
    ) {
        $this->measurementInfo[] = $measurementInfo;

        return $this;
    }

    /**
     * isset measurementInfo
     *
     * Provides area information related to the cabin.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMeasurementInfo($index)
    {
        return isset($this->measurementInfo[$index]);
    }

    /**
     * unset measurementInfo
     *
     * Provides area information related to the cabin.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMeasurementInfo($index)
    {
        unset($this->measurementInfo[$index]);
    }

    /**
     * Gets as measurementInfo
     *
     * Provides area information related to the cabin.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CabinOptionType\MeasurementInfoAType[]
     */
    public function getMeasurementInfo()
    {
        return $this->measurementInfo;
    }

    /**
     * Sets a new measurementInfo
     *
     * Provides area information related to the cabin.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CabinOptionType\MeasurementInfoAType[]
     * $measurementInfo
     * @return self
     */
    public function setMeasurementInfo(array $measurementInfo)
    {
        $this->measurementInfo = $measurementInfo;

        return $this;
    }

    /**
     * Gets as remark
     *
     * Remark information related to the cabin option.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * Remark information related to the cabin option.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $remark
     * @return self
     */
    public function setRemark(\Davispeixoto\OpenTravelAlliance\FreeTextType $remark)
    {
        $this->remark = $remark;

        return $this;
    }


}

