<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AgreementsType
 *
 * Section of a business profile that contains information about trading partner
 * agreements.
 * XSD Type: AgreementsType
 */
class AgreementsType
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
     * Information about certifications or accreditations.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CertificationType[] $certification
     */
    private $certification = null;

    /**
     * Information about alliance partnerships and consortiums.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AllianceConsortiumType[]
     * $allianceConsortium
     */
    private $allianceConsortium = null;

    /**
     * Information about an agreement for a commission arrangement.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommissionInfoType[] $commissionInfo
     */
    private $commissionInfo = null;

    /**
     * Grants access rights on a single booking to offices other than the creator and
     * responsible offices.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AgreementsType\ProfileSecurityAType[]
     * $profileSecurity
     */
    private $profileSecurity = null;

    /**
     * Used to reflect contract details linked to a profile.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $contractInformation
     */
    private $contractInformation = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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
     * Adds as certification
     *
     * Information about certifications or accreditations.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CertificationType $certification
     */
    public function addToCertification(\Davispeixoto\OpenTravelAlliance\CertificationType $certification)
    {
        $this->certification[] = $certification;

        return $this;
    }

    /**
     * isset certification
     *
     * Information about certifications or accreditations.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCertification($index)
    {
        return isset($this->certification[$index]);
    }

    /**
     * unset certification
     *
     * Information about certifications or accreditations.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCertification($index)
    {
        unset($this->certification[$index]);
    }

    /**
     * Gets as certification
     *
     * Information about certifications or accreditations.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CertificationType[]
     */
    public function getCertification()
    {
        return $this->certification;
    }

    /**
     * Sets a new certification
     *
     * Information about certifications or accreditations.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CertificationType[] $certification
     * @return self
     */
    public function setCertification(array $certification)
    {
        $this->certification = $certification;

        return $this;
    }

    /**
     * Adds as allianceConsortium
     *
     * Information about alliance partnerships and consortiums.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AllianceConsortiumType
     * $allianceConsortium
     */
    public function addToAllianceConsortium(\Davispeixoto\OpenTravelAlliance\AllianceConsortiumType $allianceConsortium)
    {
        $this->allianceConsortium[] = $allianceConsortium;

        return $this;
    }

    /**
     * isset allianceConsortium
     *
     * Information about alliance partnerships and consortiums.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAllianceConsortium($index)
    {
        return isset($this->allianceConsortium[$index]);
    }

    /**
     * unset allianceConsortium
     *
     * Information about alliance partnerships and consortiums.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAllianceConsortium($index)
    {
        unset($this->allianceConsortium[$index]);
    }

    /**
     * Gets as allianceConsortium
     *
     * Information about alliance partnerships and consortiums.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AllianceConsortiumType[]
     */
    public function getAllianceConsortium()
    {
        return $this->allianceConsortium;
    }

    /**
     * Sets a new allianceConsortium
     *
     * Information about alliance partnerships and consortiums.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AllianceConsortiumType[]
     * $allianceConsortium
     * @return self
     */
    public function setAllianceConsortium(array $allianceConsortium)
    {
        $this->allianceConsortium = $allianceConsortium;

        return $this;
    }

    /**
     * Adds as commissionInfo
     *
     * Information about an agreement for a commission arrangement.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CommissionInfoType $commissionInfo
     */
    public function addToCommissionInfo(\Davispeixoto\OpenTravelAlliance\CommissionInfoType $commissionInfo)
    {
        $this->commissionInfo[] = $commissionInfo;

        return $this;
    }

    /**
     * isset commissionInfo
     *
     * Information about an agreement for a commission arrangement.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCommissionInfo($index)
    {
        return isset($this->commissionInfo[$index]);
    }

    /**
     * unset commissionInfo
     *
     * Information about an agreement for a commission arrangement.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCommissionInfo($index)
    {
        unset($this->commissionInfo[$index]);
    }

    /**
     * Gets as commissionInfo
     *
     * Information about an agreement for a commission arrangement.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommissionInfoType[]
     */
    public function getCommissionInfo()
    {
        return $this->commissionInfo;
    }

    /**
     * Sets a new commissionInfo
     *
     * Information about an agreement for a commission arrangement.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommissionInfoType[] $commissionInfo
     * @return self
     */
    public function setCommissionInfo(array $commissionInfo)
    {
        $this->commissionInfo = $commissionInfo;

        return $this;
    }

    /**
     * Adds as profileSecurity
     *
     * Grants access rights on a single booking to offices other than the creator and
     * responsible offices.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AgreementsType\ProfileSecurityAType
     * $profileSecurity
     */
    public function addToProfileSecurity(
        \Davispeixoto\OpenTravelAlliance\AgreementsType\ProfileSecurityAType $profileSecurity
    ) {
        $this->profileSecurity[] = $profileSecurity;

        return $this;
    }

    /**
     * isset profileSecurity
     *
     * Grants access rights on a single booking to offices other than the creator and
     * responsible offices.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProfileSecurity($index)
    {
        return isset($this->profileSecurity[$index]);
    }

    /**
     * unset profileSecurity
     *
     * Grants access rights on a single booking to offices other than the creator and
     * responsible offices.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProfileSecurity($index)
    {
        unset($this->profileSecurity[$index]);
    }

    /**
     * Gets as profileSecurity
     *
     * Grants access rights on a single booking to offices other than the creator and
     * responsible offices.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AgreementsType\ProfileSecurityAType[]
     */
    public function getProfileSecurity()
    {
        return $this->profileSecurity;
    }

    /**
     * Sets a new profileSecurity
     *
     * Grants access rights on a single booking to offices other than the creator and
     * responsible offices.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AgreementsType\ProfileSecurityAType[]
     * $profileSecurity
     * @return self
     */
    public function setProfileSecurity(array $profileSecurity)
    {
        $this->profileSecurity = $profileSecurity;

        return $this;
    }

    /**
     * Gets as contractInformation
     *
     * Used to reflect contract details linked to a profile.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getContractInformation()
    {
        return $this->contractInformation;
    }

    /**
     * Sets a new contractInformation
     *
     * Used to reflect contract details linked to a profile.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $contractInformation
     * @return self
     */
    public function setContractInformation(\Davispeixoto\OpenTravelAlliance\ParagraphType $contractInformation)
    {
        $this->contractInformation = $contractInformation;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

