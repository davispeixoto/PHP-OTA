<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType;

/**
 * Class representing ExhibitionAType
 */
class ExhibitionAType
{

    /**
     * Used to designate the exhibition as public, private or public/private.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Describes how an exhibitor kit will be distributed (e.g. e-mail, fax). Refer to
     * OpenTravel Code table Distribution Type (DTB).
     *
     * @property string $kitDistributionCode
     */
    private $kitDistributionCode = null;

    /**
     * Describes the format of the exhibitor kit (e.g. hardcopy, CDROM). Refer to
     * OpenTravel Code table Format (FMT)
     *
     * @property string $kitFormatCode
     */
    private $kitFormatCode = null;

    /**
     * When true, a general service contractor (GSC) has been selected. If false, no
     * GSC has been selected.
     *
     * @property boolean $generalServiceContractorInd
     */
    private $generalServiceContractorInd = null;

    /**
     * The gross exhibition space required for the event.
     *
     * @property integer $grossExhibitionSpace
     */
    private $grossExhibitionSpace = null;

    /**
     * The net exhibition space required for the event.
     *
     * @property integer $netExhibitionSpace
     */
    private $netExhibitionSpace = null;

    /**
     * The unit of measure (e.g., square feet, square meters) in a code format . Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @property string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * The number of exhibits expected.
     *
     * @property integer $exhibitQuantity
     */
    private $exhibitQuantity = null;

    /**
     * The number of exhibiting companies expected.
     *
     * @property integer $companyQuantity
     */
    private $companyQuantity = null;

    /**
     * When true, indicates the area needs to be secured. When false, the area does not
     * need to be secured.
     *
     * @property boolean $securedAreaIndicator
     */
    private $securedAreaIndicator = null;

    /**
     * A collection of exhibit details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType[]
     * $exhibitDetails
     */
    private $exhibitDetails = null;

    /**
     * Exhibitor (i.e., the people working the booths) information for the event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitorInfoAType
     * $exhibitorInfo
     */
    private $exhibitorInfo = null;

    /**
     * A collection of additional dates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\AdditionalDatesAType\AdditionalDateAType[]
     * $additionalDates
     */
    private $additionalDates = null;

    /**
     * A collection of comments pertaining to the exhibition.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as type
     *
     * Used to designate the exhibition as public, private or public/private.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Used to designate the exhibition as public, private or public/private.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as kitDistributionCode
     *
     * Describes how an exhibitor kit will be distributed (e.g. e-mail, fax). Refer to
     * OpenTravel Code table Distribution Type (DTB).
     *
     * @return string
     */
    public function getKitDistributionCode()
    {
        return $this->kitDistributionCode;
    }

    /**
     * Sets a new kitDistributionCode
     *
     * Describes how an exhibitor kit will be distributed (e.g. e-mail, fax). Refer to
     * OpenTravel Code table Distribution Type (DTB).
     *
     * @param string $kitDistributionCode
     * @return self
     */
    public function setKitDistributionCode($kitDistributionCode)
    {
        $this->kitDistributionCode = $kitDistributionCode;

        return $this;
    }

    /**
     * Gets as kitFormatCode
     *
     * Describes the format of the exhibitor kit (e.g. hardcopy, CDROM). Refer to
     * OpenTravel Code table Format (FMT)
     *
     * @return string
     */
    public function getKitFormatCode()
    {
        return $this->kitFormatCode;
    }

    /**
     * Sets a new kitFormatCode
     *
     * Describes the format of the exhibitor kit (e.g. hardcopy, CDROM). Refer to
     * OpenTravel Code table Format (FMT)
     *
     * @param string $kitFormatCode
     * @return self
     */
    public function setKitFormatCode($kitFormatCode)
    {
        $this->kitFormatCode = $kitFormatCode;

        return $this;
    }

    /**
     * Gets as generalServiceContractorInd
     *
     * When true, a general service contractor (GSC) has been selected. If false, no
     * GSC has been selected.
     *
     * @return boolean
     */
    public function getGeneralServiceContractorInd()
    {
        return $this->generalServiceContractorInd;
    }

    /**
     * Sets a new generalServiceContractorInd
     *
     * When true, a general service contractor (GSC) has been selected. If false, no
     * GSC has been selected.
     *
     * @param boolean $generalServiceContractorInd
     * @return self
     */
    public function setGeneralServiceContractorInd($generalServiceContractorInd)
    {
        $this->generalServiceContractorInd = $generalServiceContractorInd;

        return $this;
    }

    /**
     * Gets as grossExhibitionSpace
     *
     * The gross exhibition space required for the event.
     *
     * @return integer
     */
    public function getGrossExhibitionSpace()
    {
        return $this->grossExhibitionSpace;
    }

    /**
     * Sets a new grossExhibitionSpace
     *
     * The gross exhibition space required for the event.
     *
     * @param integer $grossExhibitionSpace
     * @return self
     */
    public function setGrossExhibitionSpace($grossExhibitionSpace)
    {
        $this->grossExhibitionSpace = $grossExhibitionSpace;

        return $this;
    }

    /**
     * Gets as netExhibitionSpace
     *
     * The net exhibition space required for the event.
     *
     * @return integer
     */
    public function getNetExhibitionSpace()
    {
        return $this->netExhibitionSpace;
    }

    /**
     * Sets a new netExhibitionSpace
     *
     * The net exhibition space required for the event.
     *
     * @param integer $netExhibitionSpace
     * @return self
     */
    public function setNetExhibitionSpace($netExhibitionSpace)
    {
        $this->netExhibitionSpace = $netExhibitionSpace;

        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure (e.g., square feet, square meters) in a code format . Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure (e.g., square feet, square meters) in a code format . Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;

        return $this;
    }

    /**
     * Gets as exhibitQuantity
     *
     * The number of exhibits expected.
     *
     * @return integer
     */
    public function getExhibitQuantity()
    {
        return $this->exhibitQuantity;
    }

    /**
     * Sets a new exhibitQuantity
     *
     * The number of exhibits expected.
     *
     * @param integer $exhibitQuantity
     * @return self
     */
    public function setExhibitQuantity($exhibitQuantity)
    {
        $this->exhibitQuantity = $exhibitQuantity;

        return $this;
    }

    /**
     * Gets as companyQuantity
     *
     * The number of exhibiting companies expected.
     *
     * @return integer
     */
    public function getCompanyQuantity()
    {
        return $this->companyQuantity;
    }

    /**
     * Sets a new companyQuantity
     *
     * The number of exhibiting companies expected.
     *
     * @param integer $companyQuantity
     * @return self
     */
    public function setCompanyQuantity($companyQuantity)
    {
        $this->companyQuantity = $companyQuantity;

        return $this;
    }

    /**
     * Gets as securedAreaIndicator
     *
     * When true, indicates the area needs to be secured. When false, the area does not
     * need to be secured.
     *
     * @return boolean
     */
    public function getSecuredAreaIndicator()
    {
        return $this->securedAreaIndicator;
    }

    /**
     * Sets a new securedAreaIndicator
     *
     * When true, indicates the area needs to be secured. When false, the area does not
     * need to be secured.
     *
     * @param boolean $securedAreaIndicator
     * @return self
     */
    public function setSecuredAreaIndicator($securedAreaIndicator)
    {
        $this->securedAreaIndicator = $securedAreaIndicator;

        return $this;
    }

    /**
     * Adds as exhibitDetail
     *
     * A collection of exhibit details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType
     * $exhibitDetail
     */
    public function addToExhibitDetails(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType $exhibitDetail
    ) {
        $this->exhibitDetails[] = $exhibitDetail;

        return $this;
    }

    /**
     * isset exhibitDetails
     *
     * A collection of exhibit details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExhibitDetails($index)
    {
        return isset($this->exhibitDetails[$index]);
    }

    /**
     * unset exhibitDetails
     *
     * A collection of exhibit details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExhibitDetails($index)
    {
        unset($this->exhibitDetails[$index]);
    }

    /**
     * Gets as exhibitDetails
     *
     * A collection of exhibit details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType[]
     */
    public function getExhibitDetails()
    {
        return $this->exhibitDetails;
    }

    /**
     * Sets a new exhibitDetails
     *
     * A collection of exhibit details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType[]
     * $exhibitDetails
     * @return self
     */
    public function setExhibitDetails(array $exhibitDetails)
    {
        $this->exhibitDetails = $exhibitDetails;

        return $this;
    }

    /**
     * Gets as exhibitorInfo
     *
     * Exhibitor (i.e., the people working the booths) information for the event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitorInfoAType
     */
    public function getExhibitorInfo()
    {
        return $this->exhibitorInfo;
    }

    /**
     * Sets a new exhibitorInfo
     *
     * Exhibitor (i.e., the people working the booths) information for the event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitorInfoAType
     * $exhibitorInfo
     * @return self
     */
    public function setExhibitorInfo(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitorInfoAType $exhibitorInfo
    ) {
        $this->exhibitorInfo = $exhibitorInfo;

        return $this;
    }

    /**
     * Adds as additionalDate
     *
     * A collection of additional dates.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\AdditionalDatesAType\AdditionalDateAType
     * $additionalDate
     */
    public function addToAdditionalDates(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\AdditionalDatesAType\AdditionalDateAType $additionalDate
    ) {
        $this->additionalDates[] = $additionalDate;

        return $this;
    }

    /**
     * isset additionalDates
     *
     * A collection of additional dates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalDates($index)
    {
        return isset($this->additionalDates[$index]);
    }

    /**
     * unset additionalDates
     *
     * A collection of additional dates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalDates($index)
    {
        unset($this->additionalDates[$index]);
    }

    /**
     * Gets as additionalDates
     *
     * A collection of additional dates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\AdditionalDatesAType\AdditionalDateAType[]
     */
    public function getAdditionalDates()
    {
        return $this->additionalDates;
    }

    /**
     * Sets a new additionalDates
     *
     * A collection of additional dates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\AdditionalDatesAType\AdditionalDateAType[]
     * $additionalDates
     * @return self
     */
    public function setAdditionalDates(array $additionalDates)
    {
        $this->additionalDates = $additionalDates;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments pertaining to the exhibition.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments pertaining to the exhibition.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of comments pertaining to the exhibition.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of comments pertaining to the exhibition.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments pertaining to the exhibition.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

