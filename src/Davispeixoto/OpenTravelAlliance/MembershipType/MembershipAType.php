<?php

namespace Davispeixoto\OpenTravelAlliance\MembershipType;

/**
 * Class representing MembershipAType
 */
class MembershipAType
{

    /**
     * The code or name of the membership program ('Hertz', 'AAdvantage', etc.).
     *
     * @property string $programCode
     */
    private $programCode = null;

    /**
     * The code or name of the bonus program. BonusCode can be used to indicate the
     * level of membership (Gold Club, Platinum member, etc.)
     *
     * @property string $bonusCode
     */
    private $bonusCode = null;

    /**
     * The account identification number for this particular member in this particular
     * program.
     *
     * @property string $accountID
     */
    private $accountID = null;

    /**
     * The total number of points earned through the selected membership.
     *
     * @property integer $pointsEarned
     */
    private $pointsEarned = null;

    /**
     * Identifies the travel sector. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @property string $travelSector
     */
    private $travelSector = null;

    /**
     * Gets as programCode
     *
     * The code or name of the membership program ('Hertz', 'AAdvantage', etc.).
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
     * The code or name of the membership program ('Hertz', 'AAdvantage', etc.).
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
     * The code or name of the bonus program. BonusCode can be used to indicate the
     * level of membership (Gold Club, Platinum member, etc.)
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
     * The code or name of the bonus program. BonusCode can be used to indicate the
     * level of membership (Gold Club, Platinum member, etc.)
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
     * The account identification number for this particular member in this particular
     * program.
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
     * The account identification number for this particular member in this particular
     * program.
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
     * The total number of points earned through the selected membership.
     *
     * @return integer
     */
    public function getPointsEarned()
    {
        return $this->pointsEarned;
    }

    /**
     * Sets a new pointsEarned
     *
     * The total number of points earned through the selected membership.
     *
     * @param integer $pointsEarned
     * @return self
     */
    public function setPointsEarned($pointsEarned)
    {
        $this->pointsEarned = $pointsEarned;

        return $this;
    }

    /**
     * Gets as travelSector
     *
     * Identifies the travel sector. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @return string
     */
    public function getTravelSector()
    {
        return $this->travelSector;
    }

    /**
     * Sets a new travelSector
     *
     * Identifies the travel sector. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @param string $travelSector
     * @return self
     */
    public function setTravelSector($travelSector)
    {
        $this->travelSector = $travelSector;

        return $this;
    }


}

