<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType;

/**
 * Class representing LoyaltyAType
 */
class LoyaltyAType
{

    /**
     * Tells the status of the reservation (e.g. stay, no-show, cancelled, etc.)
     *
     * @property string $reservationActionType
     */
    private $reservationActionType = null;

    /**
     * @property string $selectedLoyaltyRPH
     */
    private $selectedLoyaltyRPH = null;

    /**
     * This may be used for different loyalty awards (e.g. points and miles awarded).
     *
     * @property string $programCode
     */
    private $programCode = null;

    /**
     * @property string $bonusCode
     */
    private $bonusCode = null;

    /**
     * @property string $accountID
     */
    private $accountID = null;

    /**
     * @property string $pointsEarned
     */
    private $pointsEarned = null;

    /**
     * Gets as reservationActionType
     *
     * Tells the status of the reservation (e.g. stay, no-show, cancelled, etc.)
     *
     * @return string
     */
    public function getReservationActionType()
    {
        return $this->reservationActionType;
    }

    /**
     * Sets a new reservationActionType
     *
     * Tells the status of the reservation (e.g. stay, no-show, cancelled, etc.)
     *
     * @param string $reservationActionType
     * @return self
     */
    public function setReservationActionType($reservationActionType)
    {
        $this->reservationActionType = $reservationActionType;

        return $this;
    }

    /**
     * Gets as selectedLoyaltyRPH
     *
     * @return string
     */
    public function getSelectedLoyaltyRPH()
    {
        return $this->selectedLoyaltyRPH;
    }

    /**
     * Sets a new selectedLoyaltyRPH
     *
     * @param string $selectedLoyaltyRPH
     * @return self
     */
    public function setSelectedLoyaltyRPH($selectedLoyaltyRPH)
    {
        $this->selectedLoyaltyRPH = $selectedLoyaltyRPH;

        return $this;
    }

    /**
     * Gets as programCode
     *
     * This may be used for different loyalty awards (e.g. points and miles awarded).
     *
     * @return string
     */
    public function getProgramCode()
    {
        return $this->programCode;
    }

    /**
     * Sets a new programCode
     *
     * This may be used for different loyalty awards (e.g. points and miles awarded).
     *
     * @param string $programCode
     * @return self
     */
    public function setProgramCode($programCode)
    {
        $this->programCode = $programCode;

        return $this;
    }

    /**
     * Gets as bonusCode
     *
     * @return string
     */
    public function getBonusCode()
    {
        return $this->bonusCode;
    }

    /**
     * Sets a new bonusCode
     *
     * @param string $bonusCode
     * @return self
     */
    public function setBonusCode($bonusCode)
    {
        $this->bonusCode = $bonusCode;

        return $this;
    }

    /**
     * Gets as accountID
     *
     * @return string
     */
    public function getAccountID()
    {
        return $this->accountID;
    }

    /**
     * Sets a new accountID
     *
     * @param string $accountID
     * @return self
     */
    public function setAccountID($accountID)
    {
        $this->accountID = $accountID;

        return $this;
    }

    /**
     * Gets as pointsEarned
     *
     * @return string
     */
    public function getPointsEarned()
    {
        return $this->pointsEarned;
    }

    /**
     * Sets a new pointsEarned
     *
     * @param string $pointsEarned
     * @return self
     */
    public function setPointsEarned($pointsEarned)
    {
        $this->pointsEarned = $pointsEarned;

        return $this;
    }


}

