<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AllianceConsortiumType
 *
 * Provides information about alliance partnerships and consortiums of members
 * grouped together to obtain trading partner agreements for travel service and
 * privileges.
 * XSD Type: AllianceConsortiumType
 */
class AllianceConsortiumType
{

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $iD
     */
    private $iD = null;

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
     * Identification of a company that participates in an alliance or consortium to
     * which the primary business entity identified in this profile belongs.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AllianceConsortiumType\AllianceMemberAType[]
     * $allianceMember
     */
    private $allianceMember = null;

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

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
     * Adds as allianceMember
     *
     * Identification of a company that participates in an alliance or consortium to
     * which the primary business entity identified in this profile belongs.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AllianceConsortiumType\AllianceMemberAType
     * $allianceMember
     */
    public function addToAllianceMember(
        \Davispeixoto\OpenTravelAlliance\AllianceConsortiumType\AllianceMemberAType $allianceMember
    ) {
        $this->allianceMember[] = $allianceMember;

        return $this;
    }

    /**
     * isset allianceMember
     *
     * Identification of a company that participates in an alliance or consortium to
     * which the primary business entity identified in this profile belongs.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAllianceMember($index)
    {
        return isset($this->allianceMember[$index]);
    }

    /**
     * unset allianceMember
     *
     * Identification of a company that participates in an alliance or consortium to
     * which the primary business entity identified in this profile belongs.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAllianceMember($index)
    {
        unset($this->allianceMember[$index]);
    }

    /**
     * Gets as allianceMember
     *
     * Identification of a company that participates in an alliance or consortium to
     * which the primary business entity identified in this profile belongs.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AllianceConsortiumType\AllianceMemberAType[]
     */
    public function getAllianceMember()
    {
        return $this->allianceMember;
    }

    /**
     * Sets a new allianceMember
     *
     * Identification of a company that participates in an alliance or consortium to
     * which the primary business entity identified in this profile belongs.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AllianceConsortiumType\AllianceMemberAType[]
     * $allianceMember
     * @return self
     */
    public function setAllianceMember(array $allianceMember)
    {
        $this->allianceMember = $allianceMember;

        return $this;
    }


}

