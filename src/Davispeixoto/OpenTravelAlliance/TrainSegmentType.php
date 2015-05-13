<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TrainSegmentType
 *
 * Defines information about a train segment.
 * XSD Type: TrainSegmentType
 */
class TrainSegmentType
{

    /**
     * The departure date and time.
     *
     * @property \DateTime $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * The arrival date and time.
     *
     * @property \DateTime $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * The number of stops the train makes.
     *
     * @property integer $stopQuantity
     */
    private $stopQuantity = null;

    /**
     * The duration of the train from departure location to destination location.
     *
     * @property \DateInterval $journeyDuration
     */
    private $journeyDuration = null;

    /**
     * When true, the train schedule includes a border crossing.
     *
     * @property boolean $crossBorderInd
     */
    private $crossBorderInd = null;

    /**
     * The departure point of the train segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StationDetailsType $departureStation
     */
    private $departureStation = null;

    /**
     * The arrival point of the train segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StationDetailsType $arrivalStation
     */
    private $arrivalStation = null;

    /**
     * The marketing train company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingCompany
     */
    private $marketingCompany = null;

    /**
     * The operating train company, if different from the Marketing Company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $operatingCompany
     */
    private $operatingCompany = null;

    /**
     * The type of equipment used for the train journey. Use a string value, such as
     * the operator equipment code or a UIC code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ClassCodeType $equipment
     */
    private $equipment = null;

    /**
     * Detailed information about the train.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TrainInfoType $trainInfo
     */
    private $trainInfo = null;

    /**
     * Gets as departureDateTime
     *
     * The departure date and time.
     *
     * @return \DateTime
     */
    public function getDepartureDateTime()
    {
        return $this->departureDateTime;
    }

    /**
     * Sets a new departureDateTime
     *
     * The departure date and time.
     *
     * @param \DateTime $departureDateTime
     * @return self
     */
    public function setDepartureDateTime(\DateTime $departureDateTime)
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * Gets as arrivalDateTime
     *
     * The arrival date and time.
     *
     * @return \DateTime
     */
    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }

    /**
     * Sets a new arrivalDateTime
     *
     * The arrival date and time.
     *
     * @param \DateTime $arrivalDateTime
     * @return self
     */
    public function setArrivalDateTime(\DateTime $arrivalDateTime)
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * Gets as stopQuantity
     *
     * The number of stops the train makes.
     *
     * @return integer
     */
    public function getStopQuantity()
    {
        return $this->stopQuantity;
    }

    /**
     * Sets a new stopQuantity
     *
     * The number of stops the train makes.
     *
     * @param integer $stopQuantity
     * @return self
     */
    public function setStopQuantity($stopQuantity)
    {
        $this->stopQuantity = $stopQuantity;

        return $this;
    }

    /**
     * Gets as journeyDuration
     *
     * The duration of the train from departure location to destination location.
     *
     * @return \DateInterval
     */
    public function getJourneyDuration()
    {
        return $this->journeyDuration;
    }

    /**
     * Sets a new journeyDuration
     *
     * The duration of the train from departure location to destination location.
     *
     * @param \DateInterval $journeyDuration
     * @return self
     */
    public function setJourneyDuration(\DateInterval $journeyDuration)
    {
        $this->journeyDuration = $journeyDuration;

        return $this;
    }

    /**
     * Gets as crossBorderInd
     *
     * When true, the train schedule includes a border crossing.
     *
     * @return boolean
     */
    public function getCrossBorderInd()
    {
        return $this->crossBorderInd;
    }

    /**
     * Sets a new crossBorderInd
     *
     * When true, the train schedule includes a border crossing.
     *
     * @param boolean $crossBorderInd
     * @return self
     */
    public function setCrossBorderInd($crossBorderInd)
    {
        $this->crossBorderInd = $crossBorderInd;

        return $this;
    }

    /**
     * Gets as departureStation
     *
     * The departure point of the train segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StationDetailsType
     */
    public function getDepartureStation()
    {
        return $this->departureStation;
    }

    /**
     * Sets a new departureStation
     *
     * The departure point of the train segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StationDetailsType $departureStation
     * @return self
     */
    public function setDepartureStation(\Davispeixoto\OpenTravelAlliance\StationDetailsType $departureStation)
    {
        $this->departureStation = $departureStation;

        return $this;
    }

    /**
     * Gets as arrivalStation
     *
     * The arrival point of the train segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StationDetailsType
     */
    public function getArrivalStation()
    {
        return $this->arrivalStation;
    }

    /**
     * Sets a new arrivalStation
     *
     * The arrival point of the train segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StationDetailsType $arrivalStation
     * @return self
     */
    public function setArrivalStation(\Davispeixoto\OpenTravelAlliance\StationDetailsType $arrivalStation)
    {
        $this->arrivalStation = $arrivalStation;

        return $this;
    }

    /**
     * Gets as marketingCompany
     *
     * The marketing train company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getMarketingCompany()
    {
        return $this->marketingCompany;
    }

    /**
     * Sets a new marketingCompany
     *
     * The marketing train company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingCompany
     * @return self
     */
    public function setMarketingCompany(\Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingCompany)
    {
        $this->marketingCompany = $marketingCompany;

        return $this;
    }

    /**
     * Gets as operatingCompany
     *
     * The operating train company, if different from the Marketing Company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getOperatingCompany()
    {
        return $this->operatingCompany;
    }

    /**
     * Sets a new operatingCompany
     *
     * The operating train company, if different from the Marketing Company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $operatingCompany
     * @return self
     */
    public function setOperatingCompany(\Davispeixoto\OpenTravelAlliance\CompanyNameType $operatingCompany)
    {
        $this->operatingCompany = $operatingCompany;

        return $this;
    }

    /**
     * Gets as equipment
     *
     * The type of equipment used for the train journey. Use a string value, such as
     * the operator equipment code or a UIC code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ClassCodeType
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Sets a new equipment
     *
     * The type of equipment used for the train journey. Use a string value, such as
     * the operator equipment code or a UIC code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ClassCodeType $equipment
     * @return self
     */
    public function setEquipment(\Davispeixoto\OpenTravelAlliance\ClassCodeType $equipment)
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * Gets as trainInfo
     *
     * Detailed information about the train.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TrainInfoType
     */
    public function getTrainInfo()
    {
        return $this->trainInfo;
    }

    /**
     * Sets a new trainInfo
     *
     * Detailed information about the train.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TrainInfoType $trainInfo
     * @return self
     */
    public function setTrainInfo(\Davispeixoto\OpenTravelAlliance\TrainInfoType $trainInfo)
    {
        $this->trainInfo = $trainInfo;

        return $this;
    }


}

