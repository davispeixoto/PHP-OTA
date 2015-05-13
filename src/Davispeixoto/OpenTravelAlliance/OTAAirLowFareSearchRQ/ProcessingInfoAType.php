<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirLowFareSearchRQ;

/**
 * Class representing ProcessingInfoAType
 */
class ProcessingInfoAType
{

    /**
     * Specifies to whom the request should be targeted for the information that is to
     * be returned.
     *
     * @property string $targetSource
     */
    private $targetSource = null;

    /**
     * If true, flight service information should be returned in the response.
     *
     * @property boolean $flightSvcInfoIndicator
     */
    private $flightSvcInfoIndicator = null;

    /**
     * Specifies the order in which the information should be returned.
     *
     * @property string $displayOrder
     */
    private $displayOrder = null;

    /**
     * If true, reduced data should be returned.
     *
     * @property boolean $reducedDataIndicator
     */
    private $reducedDataIndicator = null;

    /**
     * If true, only base fare information should be returned
     *
     * @property boolean $baseFaresOnlyIndicator
     */
    private $baseFaresOnlyIndicator = null;

    /**
     * Specifies (at a high level) the type of search criteria for this request.
     *
     * @property string $searchType
     */
    private $searchType = null;

    /**
     * If true, booking class availability should be returned in the response for each
     * of the flight segments.
     *
     * @property boolean $availabilityIndicator
     */
    private $availabilityIndicator = null;

    /**
     * Gets as targetSource
     *
     * Specifies to whom the request should be targeted for the information that is to
     * be returned.
     *
     * @return string
     */
    public function getTargetSource()
    {
        return $this->targetSource;
    }

    /**
     * Sets a new targetSource
     *
     * Specifies to whom the request should be targeted for the information that is to
     * be returned.
     *
     * @param string $targetSource
     * @return self
     */
    public function setTargetSource($targetSource)
    {
        $this->targetSource = $targetSource;

        return $this;
    }

    /**
     * Gets as flightSvcInfoIndicator
     *
     * If true, flight service information should be returned in the response.
     *
     * @return boolean
     */
    public function getFlightSvcInfoIndicator()
    {
        return $this->flightSvcInfoIndicator;
    }

    /**
     * Sets a new flightSvcInfoIndicator
     *
     * If true, flight service information should be returned in the response.
     *
     * @param boolean $flightSvcInfoIndicator
     * @return self
     */
    public function setFlightSvcInfoIndicator($flightSvcInfoIndicator)
    {
        $this->flightSvcInfoIndicator = $flightSvcInfoIndicator;

        return $this;
    }

    /**
     * Gets as displayOrder
     *
     * Specifies the order in which the information should be returned.
     *
     * @return string
     */
    public function getDisplayOrder()
    {
        return $this->displayOrder;
    }

    /**
     * Sets a new displayOrder
     *
     * Specifies the order in which the information should be returned.
     *
     * @param string $displayOrder
     * @return self
     */
    public function setDisplayOrder($displayOrder)
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    /**
     * Gets as reducedDataIndicator
     *
     * If true, reduced data should be returned.
     *
     * @return boolean
     */
    public function getReducedDataIndicator()
    {
        return $this->reducedDataIndicator;
    }

    /**
     * Sets a new reducedDataIndicator
     *
     * If true, reduced data should be returned.
     *
     * @param boolean $reducedDataIndicator
     * @return self
     */
    public function setReducedDataIndicator($reducedDataIndicator)
    {
        $this->reducedDataIndicator = $reducedDataIndicator;

        return $this;
    }

    /**
     * Gets as baseFaresOnlyIndicator
     *
     * If true, only base fare information should be returned
     *
     * @return boolean
     */
    public function getBaseFaresOnlyIndicator()
    {
        return $this->baseFaresOnlyIndicator;
    }

    /**
     * Sets a new baseFaresOnlyIndicator
     *
     * If true, only base fare information should be returned
     *
     * @param boolean $baseFaresOnlyIndicator
     * @return self
     */
    public function setBaseFaresOnlyIndicator($baseFaresOnlyIndicator)
    {
        $this->baseFaresOnlyIndicator = $baseFaresOnlyIndicator;

        return $this;
    }

    /**
     * Gets as searchType
     *
     * Specifies (at a high level) the type of search criteria for this request.
     *
     * @return string
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * Sets a new searchType
     *
     * Specifies (at a high level) the type of search criteria for this request.
     *
     * @param string $searchType
     * @return self
     */
    public function setSearchType($searchType)
    {
        $this->searchType = $searchType;

        return $this;
    }

    /**
     * Gets as availabilityIndicator
     *
     * If true, booking class availability should be returned in the response for each
     * of the flight segments.
     *
     * @return boolean
     */
    public function getAvailabilityIndicator()
    {
        return $this->availabilityIndicator;
    }

    /**
     * Sets a new availabilityIndicator
     *
     * If true, booking class availability should be returned in the response for each
     * of the flight segments.
     *
     * @param boolean $availabilityIndicator
     * @return self
     */
    public function setAvailabilityIndicator($availabilityIndicator)
    {
        $this->availabilityIndicator = $availabilityIndicator;

        return $this;
    }


}

