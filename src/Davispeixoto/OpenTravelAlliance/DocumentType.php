<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DocumentType
 *
 * Provides information on a specific document.
 * XSD Type: DocumentType
 */
class DocumentType
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
     * Indicates the group or association that granted the document.
     *
     * @property string $docIssueAuthority
     */
    private $docIssueAuthority = null;

    /**
     * Indicates the location where the document was issued.
     *
     * @property string $docIssueLocation
     */
    private $docIssueLocation = null;

    /**
     * Unique number assigned by authorities to document.
     *
     * @property string $docID
     */
    private $docID = null;

    /**
     * Indicates the type of document (e.g. Passport, Military ID, Drivers License,
     * national ID, Vaccination Certificate). Refer to OpenTravel Code List Document
     * Type (DOC).
     *
     * @property string $docType
     */
    private $docType = null;

    /**
     * Identifies the gender.
     *
     * @property string $gender
     */
    private $gender = null;

    /**
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
     *
     * @property \DateTime $birthDate
     */
    private $birthDate = null;

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
     * State or Province where the document was issued.
     *
     * @property string $docIssueStateProv
     */
    private $docIssueStateProv = null;

    /**
     * Country where the document was issued.
     *
     * @property string $docIssueCountry
     */
    private $docIssueCountry = null;

    /**
     * Specifies the birth country of the document holder.
     *
     * @property string $birthCountry
     */
    private $birthCountry = null;

    /**
     * Specifies the birth place of the document holder (e.g., city, state, county,
     * province), when designating a country of birth, use BirthCountry.
     *
     * @property string $birthPlace
     */
    private $birthPlace = null;

    /**
     * The country code of the nationality of the document holder.
     *
     * @property string $docHolderNationality
     */
    private $docHolderNationality = null;

    /**
     * Provides contact name associated with the document.
     *
     * @property string $contactName
     */
    private $contactName = null;

    /**
     * Provides the type of document holder.
     *
     * @property string $holderType
     */
    private $holderType = null;

    /**
     * A remark associated with the document.
     *
     * @property string $remark
     */
    private $remark = null;

    /**
     * Defines the postal code (e.g., ZIP code) on the document.
     *
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * The name of the document holder in unformatted text (Mr. Sam Jones).
     *
     * @property string $docHolderName
     */
    private $docHolderName = null;

    /**
     * The name of document holder in formatted text.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType
     * $docHolderFormattedName
     */
    private $docHolderFormattedName = null;

    /**
     * Used to indicate any limitations on the document (e.g. as a person may only be
     * allowed to spend a max of 30 days in country on a visitor's visa).
     *
     * @property string[] $docLimitations
     */
    private $docLimitations = null;

    /**
     * A container for additional person names.
     *
     * @property string[] $additionalPersonNames
     */
    private $additionalPersonNames = null;

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
     * Gets as docIssueAuthority
     *
     * Indicates the group or association that granted the document.
     *
     * @return string
     */
    public function getDocIssueAuthority()
    {
        return $this->docIssueAuthority;
    }

    /**
     * Sets a new docIssueAuthority
     *
     * Indicates the group or association that granted the document.
     *
     * @param string $docIssueAuthority
     * @return self
     */
    public function setDocIssueAuthority($docIssueAuthority)
    {
        $this->docIssueAuthority = $docIssueAuthority;

        return $this;
    }

    /**
     * Gets as docIssueLocation
     *
     * Indicates the location where the document was issued.
     *
     * @return string
     */
    public function getDocIssueLocation()
    {
        return $this->docIssueLocation;
    }

    /**
     * Sets a new docIssueLocation
     *
     * Indicates the location where the document was issued.
     *
     * @param string $docIssueLocation
     * @return self
     */
    public function setDocIssueLocation($docIssueLocation)
    {
        $this->docIssueLocation = $docIssueLocation;

        return $this;
    }

    /**
     * Gets as docID
     *
     * Unique number assigned by authorities to document.
     *
     * @return string
     */
    public function getDocID()
    {
        return $this->docID;
    }

    /**
     * Sets a new docID
     *
     * Unique number assigned by authorities to document.
     *
     * @param string $docID
     * @return self
     */
    public function setDocID($docID)
    {
        $this->docID = $docID;

        return $this;
    }

    /**
     * Gets as docType
     *
     * Indicates the type of document (e.g. Passport, Military ID, Drivers License,
     * national ID, Vaccination Certificate). Refer to OpenTravel Code List Document
     * Type (DOC).
     *
     * @return string
     */
    public function getDocType()
    {
        return $this->docType;
    }

    /**
     * Sets a new docType
     *
     * Indicates the type of document (e.g. Passport, Military ID, Drivers License,
     * national ID, Vaccination Certificate). Refer to OpenTravel Code List Document
     * Type (DOC).
     *
     * @param string $docType
     * @return self
     */
    public function setDocType($docType)
    {
        $this->docType = $docType;

        return $this;
    }

    /**
     * Gets as gender
     *
     * Identifies the gender.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * Identifies the gender.
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Gets as birthDate
     *
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
     *
     * @param \DateTime $birthDate
     * @return self
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;

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
     * Gets as docIssueStateProv
     *
     * State or Province where the document was issued.
     *
     * @return string
     */
    public function getDocIssueStateProv()
    {
        return $this->docIssueStateProv;
    }

    /**
     * Sets a new docIssueStateProv
     *
     * State or Province where the document was issued.
     *
     * @param string $docIssueStateProv
     * @return self
     */
    public function setDocIssueStateProv($docIssueStateProv)
    {
        $this->docIssueStateProv = $docIssueStateProv;

        return $this;
    }

    /**
     * Gets as docIssueCountry
     *
     * Country where the document was issued.
     *
     * @return string
     */
    public function getDocIssueCountry()
    {
        return $this->docIssueCountry;
    }

    /**
     * Sets a new docIssueCountry
     *
     * Country where the document was issued.
     *
     * @param string $docIssueCountry
     * @return self
     */
    public function setDocIssueCountry($docIssueCountry)
    {
        $this->docIssueCountry = $docIssueCountry;

        return $this;
    }

    /**
     * Gets as birthCountry
     *
     * Specifies the birth country of the document holder.
     *
     * @return string
     */
    public function getBirthCountry()
    {
        return $this->birthCountry;
    }

    /**
     * Sets a new birthCountry
     *
     * Specifies the birth country of the document holder.
     *
     * @param string $birthCountry
     * @return self
     */
    public function setBirthCountry($birthCountry)
    {
        $this->birthCountry = $birthCountry;

        return $this;
    }

    /**
     * Gets as birthPlace
     *
     * Specifies the birth place of the document holder (e.g., city, state, county,
     * province), when designating a country of birth, use BirthCountry.
     *
     * @return string
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * Sets a new birthPlace
     *
     * Specifies the birth place of the document holder (e.g., city, state, county,
     * province), when designating a country of birth, use BirthCountry.
     *
     * @param string $birthPlace
     * @return self
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }

    /**
     * Gets as docHolderNationality
     *
     * The country code of the nationality of the document holder.
     *
     * @return string
     */
    public function getDocHolderNationality()
    {
        return $this->docHolderNationality;
    }

    /**
     * Sets a new docHolderNationality
     *
     * The country code of the nationality of the document holder.
     *
     * @param string $docHolderNationality
     * @return self
     */
    public function setDocHolderNationality($docHolderNationality)
    {
        $this->docHolderNationality = $docHolderNationality;

        return $this;
    }

    /**
     * Gets as contactName
     *
     * Provides contact name associated with the document.
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Sets a new contactName
     *
     * Provides contact name associated with the document.
     *
     * @param string $contactName
     * @return self
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Gets as holderType
     *
     * Provides the type of document holder.
     *
     * @return string
     */
    public function getHolderType()
    {
        return $this->holderType;
    }

    /**
     * Sets a new holderType
     *
     * Provides the type of document holder.
     *
     * @param string $holderType
     * @return self
     */
    public function setHolderType($holderType)
    {
        $this->holderType = $holderType;

        return $this;
    }

    /**
     * Gets as remark
     *
     * A remark associated with the document.
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * A remark associated with the document.
     *
     * @param string $remark
     * @return self
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Gets as postalCode
     *
     * Defines the postal code (e.g., ZIP code) on the document.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * Defines the postal code (e.g., ZIP code) on the document.
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Gets as docHolderName
     *
     * The name of the document holder in unformatted text (Mr. Sam Jones).
     *
     * @return string
     */
    public function getDocHolderName()
    {
        return $this->docHolderName;
    }

    /**
     * Sets a new docHolderName
     *
     * The name of the document holder in unformatted text (Mr. Sam Jones).
     *
     * @param string $docHolderName
     * @return self
     */
    public function setDocHolderName($docHolderName)
    {
        $this->docHolderName = $docHolderName;

        return $this;
    }

    /**
     * Gets as docHolderFormattedName
     *
     * The name of document holder in formatted text.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getDocHolderFormattedName()
    {
        return $this->docHolderFormattedName;
    }

    /**
     * Sets a new docHolderFormattedName
     *
     * The name of document holder in formatted text.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $docHolderFormattedName
     * @return self
     */
    public function setDocHolderFormattedName(\Davispeixoto\OpenTravelAlliance\PersonNameType $docHolderFormattedName)
    {
        $this->docHolderFormattedName = $docHolderFormattedName;

        return $this;
    }

    /**
     * Adds as docLimitations
     *
     * Used to indicate any limitations on the document (e.g. as a person may only be
     * allowed to spend a max of 30 days in country on a visitor's visa).
     *
     * @return self
     * @param string $docLimitations
     */
    public function addToDocLimitations($docLimitations)
    {
        $this->docLimitations[] = $docLimitations;

        return $this;
    }

    /**
     * isset docLimitations
     *
     * Used to indicate any limitations on the document (e.g. as a person may only be
     * allowed to spend a max of 30 days in country on a visitor's visa).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDocLimitations($index)
    {
        return isset($this->docLimitations[$index]);
    }

    /**
     * unset docLimitations
     *
     * Used to indicate any limitations on the document (e.g. as a person may only be
     * allowed to spend a max of 30 days in country on a visitor's visa).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDocLimitations($index)
    {
        unset($this->docLimitations[$index]);
    }

    /**
     * Gets as docLimitations
     *
     * Used to indicate any limitations on the document (e.g. as a person may only be
     * allowed to spend a max of 30 days in country on a visitor's visa).
     *
     * @return string[]
     */
    public function getDocLimitations()
    {
        return $this->docLimitations;
    }

    /**
     * Sets a new docLimitations
     *
     * Used to indicate any limitations on the document (e.g. as a person may only be
     * allowed to spend a max of 30 days in country on a visitor's visa).
     *
     * @param string $docLimitations
     * @return self
     */
    public function setDocLimitations(array $docLimitations)
    {
        $this->docLimitations = $docLimitations;

        return $this;
    }

    /**
     * Adds as additionalPersonName
     *
     * A container for additional person names.
     *
     * @return self
     * @param string $additionalPersonName
     */
    public function addToAdditionalPersonNames($additionalPersonName)
    {
        $this->additionalPersonNames[] = $additionalPersonName;

        return $this;
    }

    /**
     * isset additionalPersonNames
     *
     * A container for additional person names.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalPersonNames($index)
    {
        return isset($this->additionalPersonNames[$index]);
    }

    /**
     * unset additionalPersonNames
     *
     * A container for additional person names.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalPersonNames($index)
    {
        unset($this->additionalPersonNames[$index]);
    }

    /**
     * Gets as additionalPersonNames
     *
     * A container for additional person names.
     *
     * @return string[]
     */
    public function getAdditionalPersonNames()
    {
        return $this->additionalPersonNames;
    }

    /**
     * Sets a new additionalPersonNames
     *
     * A container for additional person names.
     *
     * @param string $additionalPersonNames
     * @return self
     */
    public function setAdditionalPersonNames(array $additionalPersonNames)
    {
        $this->additionalPersonNames = $additionalPersonNames;

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

