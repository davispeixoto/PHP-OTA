<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing FareCodeOptionType
 *
 * Specifies fare option info.
 * XSD Type: FareCodeOptionType
 */
class FareCodeOptionType
{

    /**
     * Specify the type of fare. For example it could specify that the fare applies to
     * a past passenger. Refer to OpenTravel Code table Fare Qualifier (FQC).
     *
     * @property string[] $listOfFareQualifierCode
     */
    private $listOfFareQualifierCode = null;

    /**
     * Indicates the status of the fare. Refer to OpenTravel Code table Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Contains a description of the fare.
     *
     * @property string $fareDescription
     */
    private $fareDescription = null;

    /**
     * Specifies the fare code. Fare codes are specific to individual cruise lines.
     *
     * @property string $fareCode
     */
    private $fareCode = null;

    /**
     * Specifies the group code. Group codes are specific to individual cruise lines.
     *
     * @property string $groupCode
     */
    private $groupCode = null;

    /**
     * Contains a remark pertaining to the fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareCodeOptionType\FareRemarkAType
     * $fareRemark
     */
    private $fareRemark = null;

    /**
     * Adds as listOfFareQualifierCode
     *
     * Specify the type of fare. For example it could specify that the fare applies to
     * a past passenger. Refer to OpenTravel Code table Fare Qualifier (FQC).
     *
     * @return self
     * @param string $listOfFareQualifierCode
     */
    public function addToListOfFareQualifierCode($listOfFareQualifierCode)
    {
        $this->listOfFareQualifierCode[] = $listOfFareQualifierCode;

        return $this;
    }

    /**
     * isset listOfFareQualifierCode
     *
     * Specify the type of fare. For example it could specify that the fare applies to
     * a past passenger. Refer to OpenTravel Code table Fare Qualifier (FQC).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListOfFareQualifierCode($index)
    {
        return isset($this->listOfFareQualifierCode[$index]);
    }

    /**
     * unset listOfFareQualifierCode
     *
     * Specify the type of fare. For example it could specify that the fare applies to
     * a past passenger. Refer to OpenTravel Code table Fare Qualifier (FQC).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListOfFareQualifierCode($index)
    {
        unset($this->listOfFareQualifierCode[$index]);
    }

    /**
     * Gets as listOfFareQualifierCode
     *
     * Specify the type of fare. For example it could specify that the fare applies to
     * a past passenger. Refer to OpenTravel Code table Fare Qualifier (FQC).
     *
     * @return string[]
     */
    public function getListOfFareQualifierCode()
    {
        return $this->listOfFareQualifierCode;
    }

    /**
     * Sets a new listOfFareQualifierCode
     *
     * Specify the type of fare. For example it could specify that the fare applies to
     * a past passenger. Refer to OpenTravel Code table Fare Qualifier (FQC).
     *
     * @param string $listOfFareQualifierCode
     * @return self
     */
    public function setListOfFareQualifierCode(array $listOfFareQualifierCode)
    {
        $this->listOfFareQualifierCode = $listOfFareQualifierCode;

        return $this;
    }

    /**
     * Gets as status
     *
     * Indicates the status of the fare. Refer to OpenTravel Code table Status (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Indicates the status of the fare. Refer to OpenTravel Code table Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as fareDescription
     *
     * Contains a description of the fare.
     *
     * @return string
     */
    public function getFareDescription()
    {
        return $this->fareDescription;
    }

    /**
     * Sets a new fareDescription
     *
     * Contains a description of the fare.
     *
     * @param string $fareDescription
     * @return self
     */
    public function setFareDescription($fareDescription)
    {
        $this->fareDescription = $fareDescription;

        return $this;
    }

    /**
     * Gets as fareCode
     *
     * Specifies the fare code. Fare codes are specific to individual cruise lines.
     *
     * @return string
     */
    public function getFareCode()
    {
        return $this->fareCode;
    }

    /**
     * Sets a new fareCode
     *
     * Specifies the fare code. Fare codes are specific to individual cruise lines.
     *
     * @param string $fareCode
     * @return self
     */
    public function setFareCode($fareCode)
    {
        $this->fareCode = $fareCode;

        return $this;
    }

    /**
     * Gets as groupCode
     *
     * Specifies the group code. Group codes are specific to individual cruise lines.
     *
     * @return string
     */
    public function getGroupCode()
    {
        return $this->groupCode;
    }

    /**
     * Sets a new groupCode
     *
     * Specifies the group code. Group codes are specific to individual cruise lines.
     *
     * @param string $groupCode
     * @return self
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;

        return $this;
    }

    /**
     * Gets as fareRemark
     *
     * Contains a remark pertaining to the fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareCodeOptionType\FareRemarkAType
     */
    public function getFareRemark()
    {
        return $this->fareRemark;
    }

    /**
     * Sets a new fareRemark
     *
     * Contains a remark pertaining to the fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareCodeOptionType\FareRemarkAType
     * $fareRemark
     * @return self
     */
    public function setFareRemark(\Davispeixoto\OpenTravelAlliance\FareCodeOptionType\FareRemarkAType $fareRemark)
    {
        $this->fareRemark = $fareRemark;

        return $this;
    }


}

