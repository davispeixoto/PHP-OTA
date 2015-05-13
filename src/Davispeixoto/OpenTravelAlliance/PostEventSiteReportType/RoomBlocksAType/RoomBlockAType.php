<?php

namespace Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType;

/**
 * Class representing RoomBlockAType
 */
class RoomBlockAType
{

    /**
     * Total number of room nights needed.
     *
     * @property integer $totalRoomNightQuantity
     */
    private $totalRoomNightQuantity = null;

    /**
     * Total number of rooms needed on the peak night.
     *
     * @property integer $peakRoomNightQuantity
     */
    private $peakRoomNightQuantity = null;

    /**
     * A third party housing providor name.
     *
     * @property string $housingProviderName
     */
    private $housingProviderName = null;

    /**
     * The group id that identifies this event's room block within a specific hotel.
     *
     * @property string $invBlockCode
     */
    private $invBlockCode = null;

    /**
     * Total number of complimentary room nights used at this property.
     *
     * @property integer $compRoomQuantity
     */
    private $compRoomQuantity = null;

    /**
     * Total number of staff room nights used at this property.
     *
     * @property integer $staffRoomQuantity
     */
    private $staffRoomQuantity = null;

    /**
     * The date the contract was signed for the room block.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     * $contractedDate
     */
    private $contractedDate = null;

    /**
     * The date the room block was closed to booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $cutoffDate
     */
    private $cutoffDate = null;

    /**
     * When true, the cutoff date was excercised.
     *
     * @property boolean $cutoffDateExercisedIndicator
     */
    private $cutoffDateExercisedIndicator = null;

    /**
     * Percentage of rooms requested by the housing provider above the contracted room
     * block.
     *
     * @property float $requestedOversellPercentage
     */
    private $requestedOversellPercentage = null;

    /**
     * Information regarding the reservation method.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\ReservationMethodAType[]
     * $reservationMethod
     */
    private $reservationMethod = null;

    /**
     * A collection of stay days.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType
     * $stayDays
     */
    private $stayDays = null;

    /**
     * Total room pick-up for the room block for a specific time parameter.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\TotalRoomPickUpAType[]
     * $totalRoomPickUp
     */
    private $totalRoomPickUp = null;

    /**
     * Gets as totalRoomNightQuantity
     *
     * Total number of room nights needed.
     *
     * @return integer
     */
    public function getTotalRoomNightQuantity()
    {
        return $this->totalRoomNightQuantity;
    }

    /**
     * Sets a new totalRoomNightQuantity
     *
     * Total number of room nights needed.
     *
     * @param integer $totalRoomNightQuantity
     * @return self
     */
    public function setTotalRoomNightQuantity($totalRoomNightQuantity)
    {
        $this->totalRoomNightQuantity = $totalRoomNightQuantity;

        return $this;
    }

    /**
     * Gets as peakRoomNightQuantity
     *
     * Total number of rooms needed on the peak night.
     *
     * @return integer
     */
    public function getPeakRoomNightQuantity()
    {
        return $this->peakRoomNightQuantity;
    }

    /**
     * Sets a new peakRoomNightQuantity
     *
     * Total number of rooms needed on the peak night.
     *
     * @param integer $peakRoomNightQuantity
     * @return self
     */
    public function setPeakRoomNightQuantity($peakRoomNightQuantity)
    {
        $this->peakRoomNightQuantity = $peakRoomNightQuantity;

        return $this;
    }

    /**
     * Gets as housingProviderName
     *
     * A third party housing providor name.
     *
     * @return string
     */
    public function getHousingProviderName()
    {
        return $this->housingProviderName;
    }

    /**
     * Sets a new housingProviderName
     *
     * A third party housing providor name.
     *
     * @param string $housingProviderName
     * @return self
     */
    public function setHousingProviderName($housingProviderName)
    {
        $this->housingProviderName = $housingProviderName;

        return $this;
    }

    /**
     * Gets as invBlockCode
     *
     * The group id that identifies this event's room block within a specific hotel.
     *
     * @return string
     */
    public function getInvBlockCode()
    {
        return $this->invBlockCode;
    }

    /**
     * Sets a new invBlockCode
     *
     * The group id that identifies this event's room block within a specific hotel.
     *
     * @param string $invBlockCode
     * @return self
     */
    public function setInvBlockCode($invBlockCode)
    {
        $this->invBlockCode = $invBlockCode;

        return $this;
    }

    /**
     * Gets as compRoomQuantity
     *
     * Total number of complimentary room nights used at this property.
     *
     * @return integer
     */
    public function getCompRoomQuantity()
    {
        return $this->compRoomQuantity;
    }

    /**
     * Sets a new compRoomQuantity
     *
     * Total number of complimentary room nights used at this property.
     *
     * @param integer $compRoomQuantity
     * @return self
     */
    public function setCompRoomQuantity($compRoomQuantity)
    {
        $this->compRoomQuantity = $compRoomQuantity;

        return $this;
    }

    /**
     * Gets as staffRoomQuantity
     *
     * Total number of staff room nights used at this property.
     *
     * @return integer
     */
    public function getStaffRoomQuantity()
    {
        return $this->staffRoomQuantity;
    }

    /**
     * Sets a new staffRoomQuantity
     *
     * Total number of staff room nights used at this property.
     *
     * @param integer $staffRoomQuantity
     * @return self
     */
    public function setStaffRoomQuantity($staffRoomQuantity)
    {
        $this->staffRoomQuantity = $staffRoomQuantity;

        return $this;
    }

    /**
     * Gets as contractedDate
     *
     * The date the contract was signed for the room block.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getContractedDate()
    {
        return $this->contractedDate;
    }

    /**
     * Sets a new contractedDate
     *
     * The date the contract was signed for the room block.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $contractedDate
     * @return self
     */
    public function setContractedDate(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $contractedDate)
    {
        $this->contractedDate = $contractedDate;

        return $this;
    }

    /**
     * Gets as cutoffDate
     *
     * The date the room block was closed to booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getCutoffDate()
    {
        return $this->cutoffDate;
    }

    /**
     * Sets a new cutoffDate
     *
     * The date the room block was closed to booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $cutoffDate
     * @return self
     */
    public function setCutoffDate(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $cutoffDate)
    {
        $this->cutoffDate = $cutoffDate;

        return $this;
    }

    /**
     * Gets as cutoffDateExercisedIndicator
     *
     * When true, the cutoff date was excercised.
     *
     * @return boolean
     */
    public function getCutoffDateExercisedIndicator()
    {
        return $this->cutoffDateExercisedIndicator;
    }

    /**
     * Sets a new cutoffDateExercisedIndicator
     *
     * When true, the cutoff date was excercised.
     *
     * @param boolean $cutoffDateExercisedIndicator
     * @return self
     */
    public function setCutoffDateExercisedIndicator($cutoffDateExercisedIndicator)
    {
        $this->cutoffDateExercisedIndicator = $cutoffDateExercisedIndicator;

        return $this;
    }

    /**
     * Gets as requestedOversellPercentage
     *
     * Percentage of rooms requested by the housing provider above the contracted room
     * block.
     *
     * @return float
     */
    public function getRequestedOversellPercentage()
    {
        return $this->requestedOversellPercentage;
    }

    /**
     * Sets a new requestedOversellPercentage
     *
     * Percentage of rooms requested by the housing provider above the contracted room
     * block.
     *
     * @param float $requestedOversellPercentage
     * @return self
     */
    public function setRequestedOversellPercentage($requestedOversellPercentage)
    {
        $this->requestedOversellPercentage = $requestedOversellPercentage;

        return $this;
    }

    /**
     * Adds as reservationMethod
     *
     * Information regarding the reservation method.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\ReservationMethodAType
     * $reservationMethod
     */
    public function addToReservationMethod(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\ReservationMethodAType $reservationMethod
    ) {
        $this->reservationMethod[] = $reservationMethod;

        return $this;
    }

    /**
     * isset reservationMethod
     *
     * Information regarding the reservation method.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReservationMethod($index)
    {
        return isset($this->reservationMethod[$index]);
    }

    /**
     * unset reservationMethod
     *
     * Information regarding the reservation method.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReservationMethod($index)
    {
        unset($this->reservationMethod[$index]);
    }

    /**
     * Gets as reservationMethod
     *
     * Information regarding the reservation method.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\ReservationMethodAType[]
     */
    public function getReservationMethod()
    {
        return $this->reservationMethod;
    }

    /**
     * Sets a new reservationMethod
     *
     * Information regarding the reservation method.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\ReservationMethodAType[]
     * $reservationMethod
     * @return self
     */
    public function setReservationMethod(array $reservationMethod)
    {
        $this->reservationMethod = $reservationMethod;

        return $this;
    }

    /**
     * Gets as stayDays
     *
     * A collection of stay days.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType
     */
    public function getStayDays()
    {
        return $this->stayDays;
    }

    /**
     * Sets a new stayDays
     *
     * A collection of stay days.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType
     * $stayDays
     * @return self
     */
    public function setStayDays(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType $stayDays
    ) {
        $this->stayDays = $stayDays;

        return $this;
    }

    /**
     * Adds as totalRoomPickUp
     *
     * Total room pick-up for the room block for a specific time parameter.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\TotalRoomPickUpAType
     * $totalRoomPickUp
     */
    public function addToTotalRoomPickUp(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\TotalRoomPickUpAType $totalRoomPickUp
    ) {
        $this->totalRoomPickUp[] = $totalRoomPickUp;

        return $this;
    }

    /**
     * isset totalRoomPickUp
     *
     * Total room pick-up for the room block for a specific time parameter.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTotalRoomPickUp($index)
    {
        return isset($this->totalRoomPickUp[$index]);
    }

    /**
     * unset totalRoomPickUp
     *
     * Total room pick-up for the room block for a specific time parameter.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTotalRoomPickUp($index)
    {
        unset($this->totalRoomPickUp[$index]);
    }

    /**
     * Gets as totalRoomPickUp
     *
     * Total room pick-up for the room block for a specific time parameter.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\TotalRoomPickUpAType[]
     */
    public function getTotalRoomPickUp()
    {
        return $this->totalRoomPickUp;
    }

    /**
     * Sets a new totalRoomPickUp
     *
     * Total room pick-up for the room block for a specific time parameter.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\TotalRoomPickUpAType[]
     * $totalRoomPickUp
     * @return self
     */
    public function setTotalRoomPickUp(array $totalRoomPickUp)
    {
        $this->totalRoomPickUp = $totalRoomPickUp;

        return $this;
    }


}

