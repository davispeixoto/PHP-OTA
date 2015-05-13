<?php

namespace Davispeixoto\OpenTravelAlliance\EMDLiteType;

/**
 * Class representing FareInfoAType
 */
class FareInfoAType
{

    /**
     * When true, the fare is nonendorsable.
     *
     * @property boolean $nonEndorsableInd
     */
    private $nonEndorsableInd = null;

    /**
     * When true, the fare is non refundable.
     *
     * @property boolean $nonRefundableInd
     */
    private $nonRefundableInd = null;

    /**
     * When true, a penalty restriction applies.
     *
     * @property boolean $penaltyRestrictionInd
     */
    private $penaltyRestrictionInd = null;

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
     * When true, this fare is classifed as a published/promotional 'Around the World'
     * fare.
     *
     * @property boolean $aroundTheWorldFareInd
     */
    private $aroundTheWorldFareInd = null;

    /**
     * When true, the EMD is non-interlineable.
     *
     * @property boolean $nonInterlineableInd
     */
    private $nonInterlineableInd = null;

    /**
     * When true, the EMD is non-commissionable.
     *
     * @property boolean $nonCommissionableInd
     */
    private $nonCommissionableInd = null;

    /**
     * When true, the EMD is non reissuable and/or non exchangeable.
     *
     * @property boolean $nonReissuableNonExchgInd
     */
    private $nonReissuableNonExchgInd = null;

    /**
     * Gets as nonEndorsableInd
     *
     * When true, the fare is nonendorsable.
     *
     * @return boolean
     */
    public function getNonEndorsableInd()
    {
        return $this->nonEndorsableInd;
    }

    /**
     * Sets a new nonEndorsableInd
     *
     * When true, the fare is nonendorsable.
     *
     * @param boolean $nonEndorsableInd
     * @return self
     */
    public function setNonEndorsableInd($nonEndorsableInd)
    {
        $this->nonEndorsableInd = $nonEndorsableInd;

        return $this;
    }

    /**
     * Gets as nonRefundableInd
     *
     * When true, the fare is non refundable.
     *
     * @return boolean
     */
    public function getNonRefundableInd()
    {
        return $this->nonRefundableInd;
    }

    /**
     * Sets a new nonRefundableInd
     *
     * When true, the fare is non refundable.
     *
     * @param boolean $nonRefundableInd
     * @return self
     */
    public function setNonRefundableInd($nonRefundableInd)
    {
        $this->nonRefundableInd = $nonRefundableInd;

        return $this;
    }

    /**
     * Gets as penaltyRestrictionInd
     *
     * When true, a penalty restriction applies.
     *
     * @return boolean
     */
    public function getPenaltyRestrictionInd()
    {
        return $this->penaltyRestrictionInd;
    }

    /**
     * Sets a new penaltyRestrictionInd
     *
     * When true, a penalty restriction applies.
     *
     * @param boolean $penaltyRestrictionInd
     * @return self
     */
    public function setPenaltyRestrictionInd($penaltyRestrictionInd)
    {
        $this->penaltyRestrictionInd = $penaltyRestrictionInd;

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
     * Gets as aroundTheWorldFareInd
     *
     * When true, this fare is classifed as a published/promotional 'Around the World'
     * fare.
     *
     * @return boolean
     */
    public function getAroundTheWorldFareInd()
    {
        return $this->aroundTheWorldFareInd;
    }

    /**
     * Sets a new aroundTheWorldFareInd
     *
     * When true, this fare is classifed as a published/promotional 'Around the World'
     * fare.
     *
     * @param boolean $aroundTheWorldFareInd
     * @return self
     */
    public function setAroundTheWorldFareInd($aroundTheWorldFareInd)
    {
        $this->aroundTheWorldFareInd = $aroundTheWorldFareInd;

        return $this;
    }

    /**
     * Gets as nonInterlineableInd
     *
     * When true, the EMD is non-interlineable.
     *
     * @return boolean
     */
    public function getNonInterlineableInd()
    {
        return $this->nonInterlineableInd;
    }

    /**
     * Sets a new nonInterlineableInd
     *
     * When true, the EMD is non-interlineable.
     *
     * @param boolean $nonInterlineableInd
     * @return self
     */
    public function setNonInterlineableInd($nonInterlineableInd)
    {
        $this->nonInterlineableInd = $nonInterlineableInd;

        return $this;
    }

    /**
     * Gets as nonCommissionableInd
     *
     * When true, the EMD is non-commissionable.
     *
     * @return boolean
     */
    public function getNonCommissionableInd()
    {
        return $this->nonCommissionableInd;
    }

    /**
     * Sets a new nonCommissionableInd
     *
     * When true, the EMD is non-commissionable.
     *
     * @param boolean $nonCommissionableInd
     * @return self
     */
    public function setNonCommissionableInd($nonCommissionableInd)
    {
        $this->nonCommissionableInd = $nonCommissionableInd;

        return $this;
    }

    /**
     * Gets as nonReissuableNonExchgInd
     *
     * When true, the EMD is non reissuable and/or non exchangeable.
     *
     * @return boolean
     */
    public function getNonReissuableNonExchgInd()
    {
        return $this->nonReissuableNonExchgInd;
    }

    /**
     * Sets a new nonReissuableNonExchgInd
     *
     * When true, the EMD is non reissuable and/or non exchangeable.
     *
     * @param boolean $nonReissuableNonExchgInd
     * @return self
     */
    public function setNonReissuableNonExchgInd($nonReissuableNonExchgInd)
    {
        $this->nonReissuableNonExchgInd = $nonReissuableNonExchgInd;

        return $this;
    }


}

