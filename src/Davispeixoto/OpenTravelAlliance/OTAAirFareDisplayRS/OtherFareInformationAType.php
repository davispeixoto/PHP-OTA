<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS;

/**
 * Class representing OtherFareInformationAType
 */
class OtherFareInformationAType
{

    /**
     * When true, fare contracts exist for other carriers that match the search
     * criteria but have not been included in this response. When false, no fare
     * contracts exist for other carriers that match the search criteria. If not
     * present, it has not been determined whether fare contracts exist for other
     * carriers that match the search criteria.
     *
     * @property boolean $otherCarrierFaresExistInd
     */
    private $otherCarrierFaresExistInd = null;

    /**
     * When true, group fares exist that match the search criteria but have not been
     * included in this response. When false, no group fares exist that match the
     * search criteria.If not present, it has not been determined whether group fares
     * exist that match the search criteria.
     *
     * @property boolean $groupFaresExistInd
     */
    private $groupFaresExistInd = null;

    /**
     * When true, fares exist in currencies other than that specified in the request
     * that match the search criteria but have not been included in this response. When
     * false, no fares exist in currencies other than that specified in the request
     * that match the search criteria. If not present, it has not been determined
     * whether fares exist in currencies other than that specified in the request that
     * match the search criteria.
     *
     * @property boolean $otherCurrencyFaresExistInd
     */
    private $otherCurrencyFaresExistInd = null;

    /**
     * When true, unsellable fares exist that match the search criteria but have not
     * been included in this response. When false, no unsellable fares exist that match
     * the search criteria.If not present, it has not been determined whether
     * unsellable fares exist that match the search criteria.
     *
     * @property boolean $unsellableFaresExistInd
     */
    private $unsellableFaresExistInd = null;

    /**
     * When true, airport fares exist that match the search criteria but have not been
     * included in this response. When false, no airport fares exist that match the
     * search criteria. If not present, it has not been determined whether airport
     * fares exist that match the search criteria.
     *
     * @property boolean $airportFaresExistInd
     */
    private $airportFaresExistInd = null;

    /**
     * Container for airlines.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $airlines
     */
    private $airlines = null;

    /**
     * Gets as otherCarrierFaresExistInd
     *
     * When true, fare contracts exist for other carriers that match the search
     * criteria but have not been included in this response. When false, no fare
     * contracts exist for other carriers that match the search criteria. If not
     * present, it has not been determined whether fare contracts exist for other
     * carriers that match the search criteria.
     *
     * @return boolean
     */
    public function getOtherCarrierFaresExistInd()
    {
        return $this->otherCarrierFaresExistInd;
    }

    /**
     * Sets a new otherCarrierFaresExistInd
     *
     * When true, fare contracts exist for other carriers that match the search
     * criteria but have not been included in this response. When false, no fare
     * contracts exist for other carriers that match the search criteria. If not
     * present, it has not been determined whether fare contracts exist for other
     * carriers that match the search criteria.
     *
     * @param boolean $otherCarrierFaresExistInd
     * @return self
     */
    public function setOtherCarrierFaresExistInd($otherCarrierFaresExistInd)
    {
        $this->otherCarrierFaresExistInd = $otherCarrierFaresExistInd;

        return $this;
    }

    /**
     * Gets as groupFaresExistInd
     *
     * When true, group fares exist that match the search criteria but have not been
     * included in this response. When false, no group fares exist that match the
     * search criteria.If not present, it has not been determined whether group fares
     * exist that match the search criteria.
     *
     * @return boolean
     */
    public function getGroupFaresExistInd()
    {
        return $this->groupFaresExistInd;
    }

    /**
     * Sets a new groupFaresExistInd
     *
     * When true, group fares exist that match the search criteria but have not been
     * included in this response. When false, no group fares exist that match the
     * search criteria.If not present, it has not been determined whether group fares
     * exist that match the search criteria.
     *
     * @param boolean $groupFaresExistInd
     * @return self
     */
    public function setGroupFaresExistInd($groupFaresExistInd)
    {
        $this->groupFaresExistInd = $groupFaresExistInd;

        return $this;
    }

    /**
     * Gets as otherCurrencyFaresExistInd
     *
     * When true, fares exist in currencies other than that specified in the request
     * that match the search criteria but have not been included in this response. When
     * false, no fares exist in currencies other than that specified in the request
     * that match the search criteria. If not present, it has not been determined
     * whether fares exist in currencies other than that specified in the request that
     * match the search criteria.
     *
     * @return boolean
     */
    public function getOtherCurrencyFaresExistInd()
    {
        return $this->otherCurrencyFaresExistInd;
    }

    /**
     * Sets a new otherCurrencyFaresExistInd
     *
     * When true, fares exist in currencies other than that specified in the request
     * that match the search criteria but have not been included in this response. When
     * false, no fares exist in currencies other than that specified in the request
     * that match the search criteria. If not present, it has not been determined
     * whether fares exist in currencies other than that specified in the request that
     * match the search criteria.
     *
     * @param boolean $otherCurrencyFaresExistInd
     * @return self
     */
    public function setOtherCurrencyFaresExistInd($otherCurrencyFaresExistInd)
    {
        $this->otherCurrencyFaresExistInd = $otherCurrencyFaresExistInd;

        return $this;
    }

    /**
     * Gets as unsellableFaresExistInd
     *
     * When true, unsellable fares exist that match the search criteria but have not
     * been included in this response. When false, no unsellable fares exist that match
     * the search criteria.If not present, it has not been determined whether
     * unsellable fares exist that match the search criteria.
     *
     * @return boolean
     */
    public function getUnsellableFaresExistInd()
    {
        return $this->unsellableFaresExistInd;
    }

    /**
     * Sets a new unsellableFaresExistInd
     *
     * When true, unsellable fares exist that match the search criteria but have not
     * been included in this response. When false, no unsellable fares exist that match
     * the search criteria.If not present, it has not been determined whether
     * unsellable fares exist that match the search criteria.
     *
     * @param boolean $unsellableFaresExistInd
     * @return self
     */
    public function setUnsellableFaresExistInd($unsellableFaresExistInd)
    {
        $this->unsellableFaresExistInd = $unsellableFaresExistInd;

        return $this;
    }

    /**
     * Gets as airportFaresExistInd
     *
     * When true, airport fares exist that match the search criteria but have not been
     * included in this response. When false, no airport fares exist that match the
     * search criteria. If not present, it has not been determined whether airport
     * fares exist that match the search criteria.
     *
     * @return boolean
     */
    public function getAirportFaresExistInd()
    {
        return $this->airportFaresExistInd;
    }

    /**
     * Sets a new airportFaresExistInd
     *
     * When true, airport fares exist that match the search criteria but have not been
     * included in this response. When false, no airport fares exist that match the
     * search criteria. If not present, it has not been determined whether airport
     * fares exist that match the search criteria.
     *
     * @param boolean $airportFaresExistInd
     * @return self
     */
    public function setAirportFaresExistInd($airportFaresExistInd)
    {
        $this->airportFaresExistInd = $airportFaresExistInd;

        return $this;
    }

    /**
     * Adds as airline
     *
     * Container for airlines.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $airline
     */
    public function addToAirlines(\Davispeixoto\OpenTravelAlliance\CompanyNameType $airline)
    {
        $this->airlines[] = $airline;

        return $this;
    }

    /**
     * isset airlines
     *
     * Container for airlines.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirlines($index)
    {
        return isset($this->airlines[$index]);
    }

    /**
     * unset airlines
     *
     * Container for airlines.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirlines($index)
    {
        unset($this->airlines[$index]);
    }

    /**
     * Gets as airlines
     *
     * Container for airlines.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType[]
     */
    public function getAirlines()
    {
        return $this->airlines;
    }

    /**
     * Sets a new airlines
     *
     * Container for airlines.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $airlines
     * @return self
     */
    public function setAirlines(array $airlines)
    {
        $this->airlines = $airlines;

        return $this;
    }


}

