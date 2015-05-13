<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType;

/**
 * Class representing RatePlanAType
 */
class RatePlanAType
{

    /**
     * A date or range of dates for the rate plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType\DateRangeAType
     * $dateRange
     */
    private $dateRange = null;

    /**
     * A collection of destination system codes. These are systems for which this rate
     * plan is targeted.
     *
     * @property string[] $destinationSystemsCode
     */
    private $destinationSystemsCode = null;

    /**
     * Collection of requested rate plans
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType[]
     * $ratePlanCandidates
     */
    private $ratePlanCandidates = null;

    /**
     * Collection of requested offers.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType\OffersAType
     * $offers
     */
    private $offers = null;

    /**
     * Indicates the detail of hotel reference information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType\HotelRefAType
     * $hotelRef
     */
    private $hotelRef = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as dateRange
     *
     * A date or range of dates for the rate plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType\DateRangeAType
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * Sets a new dateRange
     *
     * A date or range of dates for the rate plan.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType\DateRangeAType
     * $dateRange
     * @return self
     */
    public function setDateRange(
        \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType\DateRangeAType $dateRange
    ) {
        $this->dateRange = $dateRange;

        return $this;
    }

    /**
     * Adds as destinationSystemCode
     *
     * A collection of destination system codes. These are systems for which this rate
     * plan is targeted.
     *
     * @return self
     * @param string $destinationSystemCode
     */
    public function addToDestinationSystemsCode($destinationSystemCode)
    {
        $this->destinationSystemsCode[] = $destinationSystemCode;

        return $this;
    }

    /**
     * isset destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this rate
     * plan is targeted.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDestinationSystemsCode($index)
    {
        return isset($this->destinationSystemsCode[$index]);
    }

    /**
     * unset destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this rate
     * plan is targeted.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDestinationSystemsCode($index)
    {
        unset($this->destinationSystemsCode[$index]);
    }

    /**
     * Gets as destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this rate
     * plan is targeted.
     *
     * @return string[]
     */
    public function getDestinationSystemsCode()
    {
        return $this->destinationSystemsCode;
    }

    /**
     * Sets a new destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this rate
     * plan is targeted.
     *
     * @param string $destinationSystemsCode
     * @return self
     */
    public function setDestinationSystemsCode(array $destinationSystemsCode)
    {
        $this->destinationSystemsCode = $destinationSystemsCode;

        return $this;
    }

    /**
     * Adds as ratePlanCandidate
     *
     * Collection of requested rate plans
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType
     * $ratePlanCandidate
     */
    public function addToRatePlanCandidates(
        \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType $ratePlanCandidate
    ) {
        $this->ratePlanCandidates[] = $ratePlanCandidate;

        return $this;
    }

    /**
     * isset ratePlanCandidates
     *
     * Collection of requested rate plans
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatePlanCandidates($index)
    {
        return isset($this->ratePlanCandidates[$index]);
    }

    /**
     * unset ratePlanCandidates
     *
     * Collection of requested rate plans
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatePlanCandidates($index)
    {
        unset($this->ratePlanCandidates[$index]);
    }

    /**
     * Gets as ratePlanCandidates
     *
     * Collection of requested rate plans
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType[]
     */
    public function getRatePlanCandidates()
    {
        return $this->ratePlanCandidates;
    }

    /**
     * Sets a new ratePlanCandidates
     *
     * Collection of requested rate plans
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType[]
     * $ratePlanCandidates
     * @return self
     */
    public function setRatePlanCandidates(array $ratePlanCandidates)
    {
        $this->ratePlanCandidates = $ratePlanCandidates;

        return $this;
    }

    /**
     * Gets as offers
     *
     * Collection of requested offers.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType\OffersAType
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * Sets a new offers
     *
     * Collection of requested offers.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType\OffersAType
     * $offers
     * @return self
     */
    public function setOffers(
        \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType\OffersAType $offers
    ) {
        $this->offers = $offers;

        return $this;
    }

    /**
     * Gets as hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType\HotelRefAType
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType\HotelRefAType
     * $hotelRef
     * @return self
     */
    public function setHotelRef(
        \Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanRQ\RatePlansAType\RatePlanAType\HotelRefAType $hotelRef
    ) {
        $this->hotelRef = $hotelRef;

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

