<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType;

use Davispeixoto\OpenTravelAlliance\TrainSegmentSummaryType;

/**
 * Class representing TrainSegmentAType
 */
class TrainSegmentAType extends TrainSegmentSummaryType
{

    /**
     * Specific traveler preferences for the booking request, including accommodation
     * selection and discount type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType[]
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
     * Adds as travelerRequest
     *
     * Specific traveler preferences for the booking request, including accommodation
     * selection and discount type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType
     * $travelerRequest
     */
    public function addToTravelerRequest(
        \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType $travelerRequest
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
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType\TravelerRequestAType[]
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

