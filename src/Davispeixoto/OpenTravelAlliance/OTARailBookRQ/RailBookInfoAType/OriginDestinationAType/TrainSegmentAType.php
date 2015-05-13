<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType;

use Davispeixoto\OpenTravelAlliance\TrainSegmentSummaryType;

/**
 * Class representing TrainSegmentAType
 */
class TrainSegmentAType extends TrainSegmentSummaryType
{

    /**
     * Used to specify a seat preference, e.g. aisle, window, etc.
     *
     * @property string $seatPreference
     */
    private $seatPreference = null;

    /**
     * The direction the seat faces.
     *
     * @property string $seatDirection
     */
    private $seatDirection = null;

    /**
     * The class of inventory controlled services available.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ClassCodeType[] $classCodes
     */
    private $classCodes = null;

    /**
     * Specific traveler preferences for the booking request, including accommodation
     * selection and discount type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType[]
     * $travelerRequest
     */
    private $travelerRequest = null;

    /**
     * The marketing train company associated with this segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingCompany
     */
    private $marketingCompany = null;

    /**
     * Gets as seatPreference
     *
     * Used to specify a seat preference, e.g. aisle, window, etc.
     *
     * @return string
     */
    public function getSeatPreference()
    {
        return $this->seatPreference;
    }

    /**
     * Sets a new seatPreference
     *
     * Used to specify a seat preference, e.g. aisle, window, etc.
     *
     * @param string $seatPreference
     * @return self
     */
    public function setSeatPreference($seatPreference)
    {
        $this->seatPreference = $seatPreference;

        return $this;
    }

    /**
     * Gets as seatDirection
     *
     * The direction the seat faces.
     *
     * @return string
     */
    public function getSeatDirection()
    {
        return $this->seatDirection;
    }

    /**
     * Sets a new seatDirection
     *
     * The direction the seat faces.
     *
     * @param string $seatDirection
     * @return self
     */
    public function setSeatDirection($seatDirection)
    {
        $this->seatDirection = $seatDirection;

        return $this;
    }

    /**
     * Adds as classCodes
     *
     * The class of inventory controlled services available.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ClassCodeType $classCodes
     */
    public function addToClassCodes(\Davispeixoto\OpenTravelAlliance\ClassCodeType $classCodes)
    {
        $this->classCodes[] = $classCodes;

        return $this;
    }

    /**
     * isset classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetClassCodes($index)
    {
        return isset($this->classCodes[$index]);
    }

    /**
     * unset classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetClassCodes($index)
    {
        unset($this->classCodes[$index]);
    }

    /**
     * Gets as classCodes
     *
     * The class of inventory controlled services available.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ClassCodeType[]
     */
    public function getClassCodes()
    {
        return $this->classCodes;
    }

    /**
     * Sets a new classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ClassCodeType[] $classCodes
     * @return self
     */
    public function setClassCodes(array $classCodes)
    {
        $this->classCodes = $classCodes;

        return $this;
    }

    /**
     * Adds as travelerRequest
     *
     * Specific traveler preferences for the booking request, including accommodation
     * selection and discount type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType
     * $travelerRequest
     */
    public function addToTravelerRequest(
        \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType $travelerRequest
    ) {
        $this->travelerRequest[] = $travelerRequest;

        return $this;
    }

    /**
     * isset travelerRequest
     *
     * Specific traveler preferences for the booking request, including accommodation
     * selection and discount type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelerRequest($index)
    {
        return isset($this->travelerRequest[$index]);
    }

    /**
     * unset travelerRequest
     *
     * Specific traveler preferences for the booking request, including accommodation
     * selection and discount type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelerRequest($index)
    {
        unset($this->travelerRequest[$index]);
    }

    /**
     * Gets as travelerRequest
     *
     * Specific traveler preferences for the booking request, including accommodation
     * selection and discount type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType[]
     */
    public function getTravelerRequest()
    {
        return $this->travelerRequest;
    }

    /**
     * Sets a new travelerRequest
     *
     * Specific traveler preferences for the booking request, including accommodation
     * selection and discount type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType[]
     * $travelerRequest
     * @return self
     */
    public function setTravelerRequest(array $travelerRequest)
    {
        $this->travelerRequest = $travelerRequest;

        return $this;
    }

    /**
     * Gets as marketingCompany
     *
     * The marketing train company associated with this segment.
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
     * The marketing train company associated with this segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingCompany
     * @return self
     */
    public function setMarketingCompany(\Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingCompany)
    {
        $this->marketingCompany = $marketingCompany;

        return $this;
    }


}

