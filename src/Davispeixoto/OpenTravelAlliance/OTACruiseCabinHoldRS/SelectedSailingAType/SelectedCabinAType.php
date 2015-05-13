<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseCabinHoldRS\SelectedSailingAType;

/**
 * Class representing SelectedCabinAType
 */
class SelectedCabinAType
{

    /**
     * Specifies the status of the category. Refer to OpenTravel Code table Status
     * (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Date the held cabin will be released back to inventory.
     *
     * @property \DateTime $releaseDateTime
     */
    private $releaseDateTime = null;

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
     * Gets as status
     *
     * Specifies the status of the category. Refer to OpenTravel Code table Status
     * (STS).
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
     * Specifies the status of the category. Refer to OpenTravel Code table Status
     * (STS).
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
     * Gets as releaseDateTime
     *
     * Date the held cabin will be released back to inventory.
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
     * Date the held cabin will be released back to inventory.
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


}

