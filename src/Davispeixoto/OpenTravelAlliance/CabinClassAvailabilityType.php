<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CabinClassAvailabilityType
 *
 * A listing of each seat within a cabin and the seat availability.
 * XSD Type: CabinClassAvailabilityType
 */
class CabinClassAvailabilityType
{

    /**
     * The seat number that includes row number and seat section, e.g. "2C".
     *
     * @property string $seatNumber
     */
    private $seatNumber = null;

    /**
     * If true, advanced purchase is required for this seat.
     *
     * @property boolean $advancePurchaseInd
     */
    private $advancePurchaseInd = null;

    /**
     * If true, this seat is available.
     *
     * @property boolean $availableInd
     */
    private $availableInd = null;

    /**
     * If true, this seat is not operational.
     *
     * @property boolean $inoperativeInd
     */
    private $inoperativeInd = null;

    /**
     * If true, this seat is occupied and/or already reserved.
     *
     * @property boolean $occupiedInd
     */
    private $occupiedInd = null;

    /**
     * If true, this seat is a premium seat that may be subjected to additional fees.
     *
     * @property boolean $premiumInd
     */
    private $premiumInd = null;

    /**
     * Gets as seatNumber
     *
     * The seat number that includes row number and seat section, e.g. "2C".
     *
     * @return string
     */
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * Sets a new seatNumber
     *
     * The seat number that includes row number and seat section, e.g. "2C".
     *
     * @param string $seatNumber
     * @return self
     */
    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;

        return $this;
    }

    /**
     * Gets as advancePurchaseInd
     *
     * If true, advanced purchase is required for this seat.
     *
     * @return boolean
     */
    public function getAdvancePurchaseInd()
    {
        return $this->advancePurchaseInd;
    }

    /**
     * Sets a new advancePurchaseInd
     *
     * If true, advanced purchase is required for this seat.
     *
     * @param boolean $advancePurchaseInd
     * @return self
     */
    public function setAdvancePurchaseInd($advancePurchaseInd)
    {
        $this->advancePurchaseInd = $advancePurchaseInd;

        return $this;
    }

    /**
     * Gets as availableInd
     *
     * If true, this seat is available.
     *
     * @return boolean
     */
    public function getAvailableInd()
    {
        return $this->availableInd;
    }

    /**
     * Sets a new availableInd
     *
     * If true, this seat is available.
     *
     * @param boolean $availableInd
     * @return self
     */
    public function setAvailableInd($availableInd)
    {
        $this->availableInd = $availableInd;

        return $this;
    }

    /**
     * Gets as inoperativeInd
     *
     * If true, this seat is not operational.
     *
     * @return boolean
     */
    public function getInoperativeInd()
    {
        return $this->inoperativeInd;
    }

    /**
     * Sets a new inoperativeInd
     *
     * If true, this seat is not operational.
     *
     * @param boolean $inoperativeInd
     * @return self
     */
    public function setInoperativeInd($inoperativeInd)
    {
        $this->inoperativeInd = $inoperativeInd;

        return $this;
    }

    /**
     * Gets as occupiedInd
     *
     * If true, this seat is occupied and/or already reserved.
     *
     * @return boolean
     */
    public function getOccupiedInd()
    {
        return $this->occupiedInd;
    }

    /**
     * Sets a new occupiedInd
     *
     * If true, this seat is occupied and/or already reserved.
     *
     * @param boolean $occupiedInd
     * @return self
     */
    public function setOccupiedInd($occupiedInd)
    {
        $this->occupiedInd = $occupiedInd;

        return $this;
    }

    /**
     * Gets as premiumInd
     *
     * If true, this seat is a premium seat that may be subjected to additional fees.
     *
     * @return boolean
     */
    public function getPremiumInd()
    {
        return $this->premiumInd;
    }

    /**
     * Sets a new premiumInd
     *
     * If true, this seat is a premium seat that may be subjected to additional fees.
     *
     * @param boolean $premiumInd
     * @return self
     */
    public function setPremiumInd($premiumInd)
    {
        $this->premiumInd = $premiumInd;

        return $this;
    }


}

