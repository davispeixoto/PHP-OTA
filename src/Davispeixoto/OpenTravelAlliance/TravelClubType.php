<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TravelClubType
 *
 * Identifies a travel club that offers special privileges and related services.
 * XSD Type: TravelClubType
 */
class TravelClubType
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
     * Indicates the starting date.
     *
     * @property \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @property \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @property boolean $expireDateExclusiveInd
     */
    private $expireDateExclusiveInd = null;

    /**
     * Name of the travel club.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $travelClubName
     */
    private $travelClubName = null;

    /**
     * Name information for the club member.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelClubType\ClubMemberNameAType
     * $clubMemberName
     */
    private $clubMemberName = null;

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
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Gets as expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return boolean
     */
    public function getExpireDateExclusiveInd()
    {
        return $this->expireDateExclusiveInd;
    }

    /**
     * Sets a new expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param boolean $expireDateExclusiveInd
     * @return self
     */
    public function setExpireDateExclusiveInd($expireDateExclusiveInd)
    {
        $this->expireDateExclusiveInd = $expireDateExclusiveInd;

        return $this;
    }

    /**
     * Gets as travelClubName
     *
     * Name of the travel club.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getTravelClubName()
    {
        return $this->travelClubName;
    }

    /**
     * Sets a new travelClubName
     *
     * Name of the travel club.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $travelClubName
     * @return self
     */
    public function setTravelClubName(\Davispeixoto\OpenTravelAlliance\CompanyNameType $travelClubName)
    {
        $this->travelClubName = $travelClubName;

        return $this;
    }

    /**
     * Gets as clubMemberName
     *
     * Name information for the club member.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelClubType\ClubMemberNameAType
     */
    public function getClubMemberName()
    {
        return $this->clubMemberName;
    }

    /**
     * Sets a new clubMemberName
     *
     * Name information for the club member.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelClubType\ClubMemberNameAType
     * $clubMemberName
     * @return self
     */
    public function setClubMemberName(
        \Davispeixoto\OpenTravelAlliance\TravelClubType\ClubMemberNameAType $clubMemberName
    ) {
        $this->clubMemberName = $clubMemberName;

        return $this;
    }


}

