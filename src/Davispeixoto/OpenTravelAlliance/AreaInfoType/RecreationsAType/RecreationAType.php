<?php

namespace Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType;

/**
 * Class representing RecreationAType
 */
class RecreationAType
{

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * Refer to OpenTravel Code List Recreation Srvc Type (RST).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The name of the recreation.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Denotes whether a recreation is onsite, offsite or information is not available.
     * Refer to OpenTravel Code Table Proximity (PRX).
     *
     * @property string $proximityCode
     */
    private $proximityCode = null;

    /**
     * If TRUE, this recreation is included with basic room rates.
     *
     * @property boolean $included
     */
    private $included = null;

    /**
     * This attribute is used to explicitly define whether an amenity or service is
     * offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with Code.
     *
     * @property string $existsCode
     */
    private $existsCode = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Used to define the display order.
     *
     * @property integer $sort
     */
    private $sort = null;

    /**
     * The year when recreation associated equipment was last replaced.
     *
     * @property \DateTime $yearReplaced
     */
    private $yearReplaced = null;

    /**
     * Identifies the language in which the attraction information is sent.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * If true, this is a featured recreation for the property.Example: true
     *
     * @property boolean $featuredInd
     */
    private $featuredInd = null;

    /**
     * Used to pass contact information of a specific recreation facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactInfoType $contact
     */
    private $contact = null;

    /**
     * Collection of days, times, and fees.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OperationSchedulesPlusChargeType\OperationScheduleAType[]
     * $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * Identifies where the recreation facility is located.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RefPointsType\RefPointAType[]
     * $refPoints
     */
    private $refPoints = null;

    /**
     * Multimedia information about the recreation facility.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType\RecreationAType\MultimediaDescriptionsAType
     * $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * A collection of recreation details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType\RecreationAType\RecreationDetailsAType\RecreationDetailAType[]
     * $recreationDetails
     */
    private $recreationDetails = null;

    /**
     * Descriptive text that describes the recreation facility.
     *
     * @property string $descriptiveText
     */
    private $descriptiveText = null;

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
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;

        return $this;
    }

    /**
     * Gets as code
     *
     * Refer to OpenTravel Code List Recreation Srvc Type (RST).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Refer to OpenTravel Code List Recreation Srvc Type (RST).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the recreation.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the recreation.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as proximityCode
     *
     * Denotes whether a recreation is onsite, offsite or information is not available.
     * Refer to OpenTravel Code Table Proximity (PRX).
     *
     * @return string
     */
    public function getProximityCode()
    {
        return $this->proximityCode;
    }

    /**
     * Sets a new proximityCode
     *
     * Denotes whether a recreation is onsite, offsite or information is not available.
     * Refer to OpenTravel Code Table Proximity (PRX).
     *
     * @param string $proximityCode
     * @return self
     */
    public function setProximityCode($proximityCode)
    {
        $this->proximityCode = $proximityCode;

        return $this;
    }

    /**
     * Gets as included
     *
     * If TRUE, this recreation is included with basic room rates.
     *
     * @return boolean
     */
    public function getIncluded()
    {
        return $this->included;
    }

    /**
     * Sets a new included
     *
     * If TRUE, this recreation is included with basic room rates.
     *
     * @param boolean $included
     * @return self
     */
    public function setIncluded($included)
    {
        $this->included = $included;

        return $this;
    }

    /**
     * Gets as existsCode
     *
     * This attribute is used to explicitly define whether an amenity or service is
     * offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with Code.
     *
     * @return string
     */
    public function getExistsCode()
    {
        return $this->existsCode;
    }

    /**
     * Sets a new existsCode
     *
     * This attribute is used to explicitly define whether an amenity or service is
     * offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with Code.
     *
     * @param string $existsCode
     * @return self
     */
    public function setExistsCode($existsCode)
    {
        $this->existsCode = $existsCode;

        return $this;
    }

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
     * Gets as sort
     *
     * Used to define the display order.
     *
     * @return integer
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Sets a new sort
     *
     * Used to define the display order.
     *
     * @param integer $sort
     * @return self
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Gets as yearReplaced
     *
     * The year when recreation associated equipment was last replaced.
     *
     * @return \DateTime
     */
    public function getYearReplaced()
    {
        return $this->yearReplaced;
    }

    /**
     * Sets a new yearReplaced
     *
     * The year when recreation associated equipment was last replaced.
     *
     * @param \DateTime $yearReplaced
     * @return self
     */
    public function setYearReplaced(\DateTime $yearReplaced)
    {
        $this->yearReplaced = $yearReplaced;

        return $this;
    }

    /**
     * Gets as language
     *
     * Identifies the language in which the attraction information is sent.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Identifies the language in which the attraction information is sent.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Gets as featuredInd
     *
     * If true, this is a featured recreation for the property.Example: true
     *
     * @return boolean
     */
    public function getFeaturedInd()
    {
        return $this->featuredInd;
    }

    /**
     * Sets a new featuredInd
     *
     * If true, this is a featured recreation for the property.Example: true
     *
     * @param boolean $featuredInd
     * @return self
     */
    public function setFeaturedInd($featuredInd)
    {
        $this->featuredInd = $featuredInd;

        return $this;
    }

    /**
     * Gets as contact
     *
     * Used to pass contact information of a specific recreation facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactInfoType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Used to pass contact information of a specific recreation facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactInfoType $contact
     * @return self
     */
    public function setContact(\Davispeixoto\OpenTravelAlliance\ContactInfoType $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Adds as operationSchedule
     *
     * Collection of days, times, and fees.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OperationSchedulesPlusChargeType\OperationScheduleAType
     * $operationSchedule
     */
    public function addToOperationSchedules(
        \Davispeixoto\OpenTravelAlliance\OperationSchedulesPlusChargeType\OperationScheduleAType $operationSchedule
    ) {
        $this->operationSchedules[] = $operationSchedule;

        return $this;
    }

    /**
     * isset operationSchedules
     *
     * Collection of days, times, and fees.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOperationSchedules($index)
    {
        return isset($this->operationSchedules[$index]);
    }

    /**
     * unset operationSchedules
     *
     * Collection of days, times, and fees.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOperationSchedules($index)
    {
        unset($this->operationSchedules[$index]);
    }

    /**
     * Gets as operationSchedules
     *
     * Collection of days, times, and fees.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OperationSchedulesPlusChargeType\OperationScheduleAType[]
     */
    public function getOperationSchedules()
    {
        return $this->operationSchedules;
    }

    /**
     * Sets a new operationSchedules
     *
     * Collection of days, times, and fees.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OperationSchedulesPlusChargeType\OperationScheduleAType[]
     * $operationSchedules
     * @return self
     */
    public function setOperationSchedules(array $operationSchedules)
    {
        $this->operationSchedules = $operationSchedules;

        return $this;
    }

    /**
     * Adds as refPoint
     *
     * Identifies where the recreation facility is located.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RefPointsType\RefPointAType $refPoint
     */
    public function addToRefPoints(\Davispeixoto\OpenTravelAlliance\RefPointsType\RefPointAType $refPoint)
    {
        $this->refPoints[] = $refPoint;

        return $this;
    }

    /**
     * isset refPoints
     *
     * Identifies where the recreation facility is located.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefPoints($index)
    {
        return isset($this->refPoints[$index]);
    }

    /**
     * unset refPoints
     *
     * Identifies where the recreation facility is located.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefPoints($index)
    {
        unset($this->refPoints[$index]);
    }

    /**
     * Gets as refPoints
     *
     * Identifies where the recreation facility is located.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RefPointsType\RefPointAType[]
     */
    public function getRefPoints()
    {
        return $this->refPoints;
    }

    /**
     * Sets a new refPoints
     *
     * Identifies where the recreation facility is located.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RefPointsType\RefPointAType[] $refPoints
     * @return self
     */
    public function setRefPoints(array $refPoints)
    {
        $this->refPoints = $refPoints;

        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the recreation facility.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType\RecreationAType\MultimediaDescriptionsAType
     */
    public function getMultimediaDescriptions()
    {
        return $this->multimediaDescriptions;
    }

    /**
     * Sets a new multimediaDescriptions
     *
     * Multimedia information about the recreation facility.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType\RecreationAType\MultimediaDescriptionsAType
     * $multimediaDescriptions
     * @return self
     */
    public function setMultimediaDescriptions(
        \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType\RecreationAType\MultimediaDescriptionsAType $multimediaDescriptions
    ) {
        $this->multimediaDescriptions = $multimediaDescriptions;

        return $this;
    }

    /**
     * Adds as recreationDetail
     *
     * A collection of recreation details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType\RecreationAType\RecreationDetailsAType\RecreationDetailAType
     * $recreationDetail
     */
    public function addToRecreationDetails(
        \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType\RecreationAType\RecreationDetailsAType\RecreationDetailAType $recreationDetail
    ) {
        $this->recreationDetails[] = $recreationDetail;

        return $this;
    }

    /**
     * isset recreationDetails
     *
     * A collection of recreation details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRecreationDetails($index)
    {
        return isset($this->recreationDetails[$index]);
    }

    /**
     * unset recreationDetails
     *
     * A collection of recreation details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRecreationDetails($index)
    {
        unset($this->recreationDetails[$index]);
    }

    /**
     * Gets as recreationDetails
     *
     * A collection of recreation details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType\RecreationAType\RecreationDetailsAType\RecreationDetailAType[]
     */
    public function getRecreationDetails()
    {
        return $this->recreationDetails;
    }

    /**
     * Sets a new recreationDetails
     *
     * A collection of recreation details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType\RecreationAType\RecreationDetailsAType\RecreationDetailAType[]
     * $recreationDetails
     * @return self
     */
    public function setRecreationDetails(array $recreationDetails)
    {
        $this->recreationDetails = $recreationDetails;

        return $this;
    }

    /**
     * Gets as descriptiveText
     *
     * Descriptive text that describes the recreation facility.
     *
     * @return string
     */
    public function getDescriptiveText()
    {
        return $this->descriptiveText;
    }

    /**
     * Sets a new descriptiveText
     *
     * Descriptive text that describes the recreation facility.
     *
     * @param string $descriptiveText
     * @return self
     */
    public function setDescriptiveText($descriptiveText)
    {
        $this->descriptiveText = $descriptiveText;

        return $this;
    }


}

