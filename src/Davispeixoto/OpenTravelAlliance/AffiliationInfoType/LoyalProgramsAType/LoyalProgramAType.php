<?php

namespace Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType;

/**
 * Class representing LoyalProgramAType
 */
class LoyalProgramAType
{

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * This identifies the loyalty program.
     *
     * @property string $programName
     */
    private $programName = null;

    /**
     * The name of the secondary level of the program, e.g.: gold, silver, etc..
     *
     * @property string $secondaryProgramName
     */
    private $secondaryProgramName = null;

    /**
     * The title of the membership program affiliated with the primary program.
     *
     * @property string $affiliateProgramName
     */
    private $affiliateProgramName = null;

    /**
     * Used to indicate the level to which the hotel is assigned within the program for
     * redemption purposes.
     *
     * @property string $hotelLevel
     */
    private $hotelLevel = null;

    /**
     * A company-specific code used to identify a loyalty program.
     *
     * @property string $programCode
     */
    private $programCode = null;

    /**
     * Used to identify the specific travel sector to which the loyalty program
     * applies. Refer to OpenTravel Codelist Travel Sector (TVS).
     *
     * @property string $travelSector
     */
    private $travelSector = null;

    /**
     * If TRUE, identifies the primary loyalty program.
     *
     * @property boolean $primaryProgramInd
     */
    private $primaryProgramInd = null;

    /**
     * Provides description information for the loyal program.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramDescriptionAType[]
     * $programDescription
     */
    private $programDescription = null;

    /**
     * Provides information regarding restrictions that apply to the loyal program.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramRestrictionAType
     * $programRestriction
     */
    private $programRestriction = null;

    /**
     * A collection of black-out dates (i.e. dates when loyalty redemptions are not
     * allowed).
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[] $blackoutDates
     */
    private $blackoutDates = null;

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return boolean
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param boolean $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;

        return $this;
    }

    /**
     * Gets as programName
     *
     * This identifies the loyalty program.
     *
     * @return string
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * Sets a new programName
     *
     * This identifies the loyalty program.
     *
     * @param string $programName
     * @return self
     */
    public function setProgramName($programName)
    {
        $this->programName = $programName;

        return $this;
    }

    /**
     * Gets as secondaryProgramName
     *
     * The name of the secondary level of the program, e.g.: gold, silver, etc..
     *
     * @return string
     */
    public function getSecondaryProgramName()
    {
        return $this->secondaryProgramName;
    }

    /**
     * Sets a new secondaryProgramName
     *
     * The name of the secondary level of the program, e.g.: gold, silver, etc..
     *
     * @param string $secondaryProgramName
     * @return self
     */
    public function setSecondaryProgramName($secondaryProgramName)
    {
        $this->secondaryProgramName = $secondaryProgramName;

        return $this;
    }

    /**
     * Gets as affiliateProgramName
     *
     * The title of the membership program affiliated with the primary program.
     *
     * @return string
     */
    public function getAffiliateProgramName()
    {
        return $this->affiliateProgramName;
    }

    /**
     * Sets a new affiliateProgramName
     *
     * The title of the membership program affiliated with the primary program.
     *
     * @param string $affiliateProgramName
     * @return self
     */
    public function setAffiliateProgramName($affiliateProgramName)
    {
        $this->affiliateProgramName = $affiliateProgramName;

        return $this;
    }

    /**
     * Gets as hotelLevel
     *
     * Used to indicate the level to which the hotel is assigned within the program for
     * redemption purposes.
     *
     * @return string
     */
    public function getHotelLevel()
    {
        return $this->hotelLevel;
    }

    /**
     * Sets a new hotelLevel
     *
     * Used to indicate the level to which the hotel is assigned within the program for
     * redemption purposes.
     *
     * @param string $hotelLevel
     * @return self
     */
    public function setHotelLevel($hotelLevel)
    {
        $this->hotelLevel = $hotelLevel;

        return $this;
    }

    /**
     * Gets as programCode
     *
     * A company-specific code used to identify a loyalty program.
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
     * A company-specific code used to identify a loyalty program.
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
     * Gets as travelSector
     *
     * Used to identify the specific travel sector to which the loyalty program
     * applies. Refer to OpenTravel Codelist Travel Sector (TVS).
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
     * Used to identify the specific travel sector to which the loyalty program
     * applies. Refer to OpenTravel Codelist Travel Sector (TVS).
     *
     * @param string $travelSector
     * @return self
     */
    public function setTravelSector($travelSector)
    {
        $this->travelSector = $travelSector;

        return $this;
    }

    /**
     * Gets as primaryProgramInd
     *
     * If TRUE, identifies the primary loyalty program.
     *
     * @return boolean
     */
    public function getPrimaryProgramInd()
    {
        return $this->primaryProgramInd;
    }

    /**
     * Sets a new primaryProgramInd
     *
     * If TRUE, identifies the primary loyalty program.
     *
     * @param boolean $primaryProgramInd
     * @return self
     */
    public function setPrimaryProgramInd($primaryProgramInd)
    {
        $this->primaryProgramInd = $primaryProgramInd;

        return $this;
    }

    /**
     * Adds as programDescription
     *
     * Provides description information for the loyal program.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramDescriptionAType
     * $programDescription
     */
    public function addToProgramDescription(
        \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramDescriptionAType $programDescription
    ) {
        $this->programDescription[] = $programDescription;

        return $this;
    }

    /**
     * isset programDescription
     *
     * Provides description information for the loyal program.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProgramDescription($index)
    {
        return isset($this->programDescription[$index]);
    }

    /**
     * unset programDescription
     *
     * Provides description information for the loyal program.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProgramDescription($index)
    {
        unset($this->programDescription[$index]);
    }

    /**
     * Gets as programDescription
     *
     * Provides description information for the loyal program.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramDescriptionAType[]
     */
    public function getProgramDescription()
    {
        return $this->programDescription;
    }

    /**
     * Sets a new programDescription
     *
     * Provides description information for the loyal program.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramDescriptionAType[]
     * $programDescription
     * @return self
     */
    public function setProgramDescription(array $programDescription)
    {
        $this->programDescription = $programDescription;

        return $this;
    }

    /**
     * Gets as programRestriction
     *
     * Provides information regarding restrictions that apply to the loyal program.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramRestrictionAType
     */
    public function getProgramRestriction()
    {
        return $this->programRestriction;
    }

    /**
     * Sets a new programRestriction
     *
     * Provides information regarding restrictions that apply to the loyal program.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramRestrictionAType
     * $programRestriction
     * @return self
     */
    public function setProgramRestriction(
        \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramRestrictionAType $programRestriction
    ) {
        $this->programRestriction = $programRestriction;

        return $this;
    }

    /**
     * Adds as blackoutDate
     *
     * A collection of black-out dates (i.e. dates when loyalty redemptions are not
     * allowed).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $blackoutDate
     */
    public function addToBlackoutDates(\Davispeixoto\OpenTravelAlliance\DateTimeSpanType $blackoutDate)
    {
        $this->blackoutDates[] = $blackoutDate;

        return $this;
    }

    /**
     * isset blackoutDates
     *
     * A collection of black-out dates (i.e. dates when loyalty redemptions are not
     * allowed).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBlackoutDates($index)
    {
        return isset($this->blackoutDates[$index]);
    }

    /**
     * unset blackoutDates
     *
     * A collection of black-out dates (i.e. dates when loyalty redemptions are not
     * allowed).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBlackoutDates($index)
    {
        unset($this->blackoutDates[$index]);
    }

    /**
     * Gets as blackoutDates
     *
     * A collection of black-out dates (i.e. dates when loyalty redemptions are not
     * allowed).
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[]
     */
    public function getBlackoutDates()
    {
        return $this->blackoutDates;
    }

    /**
     * Sets a new blackoutDates
     *
     * A collection of black-out dates (i.e. dates when loyalty redemptions are not
     * allowed).
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[] $blackoutDates
     * @return self
     */
    public function setBlackoutDates(array $blackoutDates)
    {
        $this->blackoutDates = $blackoutDates;

        return $this;
    }


}

