<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType;

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
     * OpenTravel Code table Distribution Type (DTB)
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
     * If true, a General Service Contractor (GSC) has been selected and details can be
     * found under ProfileInfo. If false, no GSC has been selected.
     *
     * @property boolean $generalServiceContractorInd
     */
    private $generalServiceContractorInd = null;

    /**
     * Defines the gross amount of exhibition space required for the event.
     *
     * @property integer $grossExhibitionSpace
     */
    private $grossExhibitionSpace = null;

    /**
     * Defines the net amount of exhibition space required for the event.
     *
     * @property integer $netExhibitionSpace
     */
    private $netExhibitionSpace = null;

    /**
     * This is the standard unit of measure (e.g. square feet, square meters).
     *
     * @property string $grossUnitOfMeasure
     */
    private $grossUnitOfMeasure = null;

    /**
     * This is the standard unit of measure (e.g. square feet, square meters).
     *
     * @property string $netUnitOfMeasure
     */
    private $netUnitOfMeasure = null;

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
     * If true, indicates the area needs to be secured. If false, the area does not
     * need to be secured.
     *
     * @property boolean $securedAreaIndicator
     */
    private $securedAreaIndicator = null;

    /**
     * Describes display areas constructed to showcase products, services or to convey
     * a message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType\ExhibitDetailAType[]
     * $exhibitDetail
     */
    private $exhibitDetail = null;

    /**
     * An open field to comment on the exhibition.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $comments
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
     * OpenTravel Code table Distribution Type (DTB)
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
     * OpenTravel Code table Distribution Type (DTB)
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
     * If true, a General Service Contractor (GSC) has been selected and details can be
     * found under ProfileInfo. If false, no GSC has been selected.
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
     * If true, a General Service Contractor (GSC) has been selected and details can be
     * found under ProfileInfo. If false, no GSC has been selected.
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
     * Defines the gross amount of exhibition space required for the event.
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
     * Defines the gross amount of exhibition space required for the event.
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
     * Defines the net amount of exhibition space required for the event.
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
     * Defines the net amount of exhibition space required for the event.
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
     * Gets as grossUnitOfMeasure
     *
     * This is the standard unit of measure (e.g. square feet, square meters).
     *
     * @return string
     */
    public function getGrossUnitOfMeasure()
    {
        return $this->grossUnitOfMeasure;
    }

    /**
     * Sets a new grossUnitOfMeasure
     *
     * This is the standard unit of measure (e.g. square feet, square meters).
     *
     * @param string $grossUnitOfMeasure
     * @return self
     */
    public function setGrossUnitOfMeasure($grossUnitOfMeasure)
    {
        $this->grossUnitOfMeasure = $grossUnitOfMeasure;

        return $this;
    }

    /**
     * Gets as netUnitOfMeasure
     *
     * This is the standard unit of measure (e.g. square feet, square meters).
     *
     * @return string
     */
    public function getNetUnitOfMeasure()
    {
        return $this->netUnitOfMeasure;
    }

    /**
     * Sets a new netUnitOfMeasure
     *
     * This is the standard unit of measure (e.g. square feet, square meters).
     *
     * @param string $netUnitOfMeasure
     * @return self
     */
    public function setNetUnitOfMeasure($netUnitOfMeasure)
    {
        $this->netUnitOfMeasure = $netUnitOfMeasure;

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
     * If true, indicates the area needs to be secured. If false, the area does not
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
     * If true, indicates the area needs to be secured. If false, the area does not
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
     * Describes display areas constructed to showcase products, services or to convey
     * a message.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType\ExhibitDetailAType
     * $exhibitDetail
     */
    public function addToExhibitDetail(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType\ExhibitDetailAType $exhibitDetail
    ) {
        $this->exhibitDetail[] = $exhibitDetail;

        return $this;
    }

    /**
     * isset exhibitDetail
     *
     * Describes display areas constructed to showcase products, services or to convey
     * a message.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExhibitDetail($index)
    {
        return isset($this->exhibitDetail[$index]);
    }

    /**
     * unset exhibitDetail
     *
     * Describes display areas constructed to showcase products, services or to convey
     * a message.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExhibitDetail($index)
    {
        unset($this->exhibitDetail[$index]);
    }

    /**
     * Gets as exhibitDetail
     *
     * Describes display areas constructed to showcase products, services or to convey
     * a message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType\ExhibitDetailAType[]
     */
    public function getExhibitDetail()
    {
        return $this->exhibitDetail;
    }

    /**
     * Sets a new exhibitDetail
     *
     * Describes display areas constructed to showcase products, services or to convey
     * a message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType\ExhibitDetailAType[]
     * $exhibitDetail
     * @return self
     */
    public function setExhibitDetail(array $exhibitDetail)
    {
        $this->exhibitDetail = $exhibitDetail;

        return $this;
    }

    /**
     * Gets as comments
     *
     * An open field to comment on the exhibition.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * An open field to comment on the exhibition.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comments
     * @return self
     */
    public function setComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

