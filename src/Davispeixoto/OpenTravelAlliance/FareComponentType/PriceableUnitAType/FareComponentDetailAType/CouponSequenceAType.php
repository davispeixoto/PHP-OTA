<?php

namespace Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType;

/**
 * Class representing CouponSequenceAType
 */
class CouponSequenceAType
{

    /**
     * Represents the sequential order of the coupon(s) that apply within a specific
     * fare component of a ticket being issued, e.g. 1 of 5.
     *
     * @property string $sequenceNbr
     */
    private $sequenceNbr = null;

    /**
     * The number representing the order in which this coupon was is to be used.
     *
     * @property integer $couponItinerarySeqNbr
     */
    private $couponItinerarySeqNbr = null;

    /**
     * The origin airport city code.
     *
     * @property string $originCityCode
     */
    private $originCityCode = null;

    /**
     * Identifies the context of the origin city code such as IATA, ARC, or internal
     * code.
     *
     * @property string $originCodeContext
     */
    private $originCodeContext = null;

    /**
     * The destination airport city code.
     *
     * @property string $destinationCityCode
     */
    private $destinationCityCode = null;

    /**
     * Identifies the context of the destination city code such as IATA, ARC, or
     * internal code.
     *
     * @property string $destinationCodeContext
     */
    private $destinationCodeContext = null;

    /**
     * When true, a stopover is permitted.
     *
     * @property boolean $stopoverInd
     */
    private $stopoverInd = null;

    /**
     * Used to provide the company common name.
     *
     * @property string $companyShortName
     */
    private $companyShortName = null;

    /**
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @property string $travelSector
     */
    private $travelSector = null;

    /**
     * Identifies a company by the company code.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Identifies the context of the identifying code, such as DUNS, IATA or internal
     * code, etc.
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * The country location of the company headquarters.Example: us
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * The RBD at the time of pricing.
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * Gets as sequenceNbr
     *
     * Represents the sequential order of the coupon(s) that apply within a specific
     * fare component of a ticket being issued, e.g. 1 of 5.
     *
     * @return string
     */
    public function getSequenceNbr()
    {
        return $this->sequenceNbr;
    }

    /**
     * Sets a new sequenceNbr
     *
     * Represents the sequential order of the coupon(s) that apply within a specific
     * fare component of a ticket being issued, e.g. 1 of 5.
     *
     * @param string $sequenceNbr
     * @return self
     */
    public function setSequenceNbr($sequenceNbr)
    {
        $this->sequenceNbr = $sequenceNbr;

        return $this;
    }

    /**
     * Gets as couponItinerarySeqNbr
     *
     * The number representing the order in which this coupon was is to be used.
     *
     * @return integer
     */
    public function getCouponItinerarySeqNbr()
    {
        return $this->couponItinerarySeqNbr;
    }

    /**
     * Sets a new couponItinerarySeqNbr
     *
     * The number representing the order in which this coupon was is to be used.
     *
     * @param integer $couponItinerarySeqNbr
     * @return self
     */
    public function setCouponItinerarySeqNbr($couponItinerarySeqNbr)
    {
        $this->couponItinerarySeqNbr = $couponItinerarySeqNbr;

        return $this;
    }

    /**
     * Gets as originCityCode
     *
     * The origin airport city code.
     *
     * @return string
     */
    public function getOriginCityCode()
    {
        return $this->originCityCode;
    }

    /**
     * Sets a new originCityCode
     *
     * The origin airport city code.
     *
     * @param string $originCityCode
     * @return self
     */
    public function setOriginCityCode($originCityCode)
    {
        $this->originCityCode = $originCityCode;

        return $this;
    }

    /**
     * Gets as originCodeContext
     *
     * Identifies the context of the origin city code such as IATA, ARC, or internal
     * code.
     *
     * @return string
     */
    public function getOriginCodeContext()
    {
        return $this->originCodeContext;
    }

    /**
     * Sets a new originCodeContext
     *
     * Identifies the context of the origin city code such as IATA, ARC, or internal
     * code.
     *
     * @param string $originCodeContext
     * @return self
     */
    public function setOriginCodeContext($originCodeContext)
    {
        $this->originCodeContext = $originCodeContext;

        return $this;
    }

    /**
     * Gets as destinationCityCode
     *
     * The destination airport city code.
     *
     * @return string
     */
    public function getDestinationCityCode()
    {
        return $this->destinationCityCode;
    }

    /**
     * Sets a new destinationCityCode
     *
     * The destination airport city code.
     *
     * @param string $destinationCityCode
     * @return self
     */
    public function setDestinationCityCode($destinationCityCode)
    {
        $this->destinationCityCode = $destinationCityCode;

        return $this;
    }

    /**
     * Gets as destinationCodeContext
     *
     * Identifies the context of the destination city code such as IATA, ARC, or
     * internal code.
     *
     * @return string
     */
    public function getDestinationCodeContext()
    {
        return $this->destinationCodeContext;
    }

    /**
     * Sets a new destinationCodeContext
     *
     * Identifies the context of the destination city code such as IATA, ARC, or
     * internal code.
     *
     * @param string $destinationCodeContext
     * @return self
     */
    public function setDestinationCodeContext($destinationCodeContext)
    {
        $this->destinationCodeContext = $destinationCodeContext;

        return $this;
    }

    /**
     * Gets as stopoverInd
     *
     * When true, a stopover is permitted.
     *
     * @return boolean
     */
    public function getStopoverInd()
    {
        return $this->stopoverInd;
    }

    /**
     * Sets a new stopoverInd
     *
     * When true, a stopover is permitted.
     *
     * @param boolean $stopoverInd
     * @return self
     */
    public function setStopoverInd($stopoverInd)
    {
        $this->stopoverInd = $stopoverInd;

        return $this;
    }

    /**
     * Gets as companyShortName
     *
     * Used to provide the company common name.
     *
     * @return string
     */
    public function getCompanyShortName()
    {
        return $this->companyShortName;
    }

    /**
     * Sets a new companyShortName
     *
     * Used to provide the company common name.
     *
     * @param string $companyShortName
     * @return self
     */
    public function setCompanyShortName($companyShortName)
    {
        $this->companyShortName = $companyShortName;

        return $this;
    }

    /**
     * Gets as travelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @return string
     */
    public function getTravelSector()
    {
        return $this->travelSector;
    }

    /**
     * Sets a new travelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @param string $travelSector
     * @return self
     */
    public function setTravelSector($travelSector)
    {
        $this->travelSector = $travelSector;

        return $this;
    }

    /**
     * Gets as code
     *
     * Identifies a company by the company code.
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
     * Identifies a company by the company code.
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
     * Gets as codeContext
     *
     * Identifies the context of the identifying code, such as DUNS, IATA or internal
     * code, etc.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the context of the identifying code, such as DUNS, IATA or internal
     * code, etc.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as countryCode
     *
     * The country location of the company headquarters.Example: us
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * The country location of the company headquarters.Example: us
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Gets as resBookDesigCode
     *
     * The RBD at the time of pricing.
     *
     * @return string
     */
    public function getResBookDesigCode()
    {
        return $this->resBookDesigCode;
    }

    /**
     * Sets a new resBookDesigCode
     *
     * The RBD at the time of pricing.
     *
     * @param string $resBookDesigCode
     * @return self
     */
    public function setResBookDesigCode($resBookDesigCode)
    {
        $this->resBookDesigCode = $resBookDesigCode;

        return $this;
    }


}

