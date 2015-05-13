<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType;

use Davispeixoto\OpenTravelAlliance\FareType;

/**
 * Class representing PricingInfoAType
 */
class PricingInfoAType extends FareType
{

    /**
     * Code used to indicate the type of traveler that will be traveling (e.g., ADT,
     * CHD, INF).
     *
     * @property string $passengerTypeCode
     */
    private $passengerTypeCode = null;

    /**
     * Identifies the context of the location code, such as IATA, ARC, or internal
     * code, etc.
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * If true, the country where fare was filed has converted to the Euro.
     *
     * @property boolean $convertedToEuroInd
     */
    private $convertedToEuroInd = null;

    /**
     * If true, only the fares for the account code requested are being returned.
     *
     * @property boolean $codeOnlyFaresInd
     */
    private $codeOnlyFaresInd = null;

    /**
     * The account code for which fares were requested.
     *
     * @property string $accountCode
     */
    private $accountCode = null;

    /**
     * When true, the fares were converted to the override currency code. When false,
     * the fares were not converted.
     *
     * @property boolean $currencyOverrideInd
     */
    private $currencyOverrideInd = null;

    /**
     * Seasonal information for this fare.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\PricingInfoAType\SeasonalInfoAType
     * $seasonalInfo
     */
    private $seasonalInfo = null;

    /**
     * Gets as passengerTypeCode
     *
     * Code used to indicate the type of traveler that will be traveling (e.g., ADT,
     * CHD, INF).
     *
     * @return string
     */
    public function getPassengerTypeCode()
    {
        return $this->passengerTypeCode;
    }

    /**
     * Sets a new passengerTypeCode
     *
     * Code used to indicate the type of traveler that will be traveling (e.g., ADT,
     * CHD, INF).
     *
     * @param string $passengerTypeCode
     * @return self
     */
    public function setPassengerTypeCode($passengerTypeCode)
    {
        $this->passengerTypeCode = $passengerTypeCode;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the location code, such as IATA, ARC, or internal
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
     * Identifies the context of the location code, such as IATA, ARC, or internal
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
     * Gets as convertedToEuroInd
     *
     * If true, the country where fare was filed has converted to the Euro.
     *
     * @return boolean
     */
    public function getConvertedToEuroInd()
    {
        return $this->convertedToEuroInd;
    }

    /**
     * Sets a new convertedToEuroInd
     *
     * If true, the country where fare was filed has converted to the Euro.
     *
     * @param boolean $convertedToEuroInd
     * @return self
     */
    public function setConvertedToEuroInd($convertedToEuroInd)
    {
        $this->convertedToEuroInd = $convertedToEuroInd;

        return $this;
    }

    /**
     * Gets as codeOnlyFaresInd
     *
     * If true, only the fares for the account code requested are being returned.
     *
     * @return boolean
     */
    public function getCodeOnlyFaresInd()
    {
        return $this->codeOnlyFaresInd;
    }

    /**
     * Sets a new codeOnlyFaresInd
     *
     * If true, only the fares for the account code requested are being returned.
     *
     * @param boolean $codeOnlyFaresInd
     * @return self
     */
    public function setCodeOnlyFaresInd($codeOnlyFaresInd)
    {
        $this->codeOnlyFaresInd = $codeOnlyFaresInd;

        return $this;
    }

    /**
     * Gets as accountCode
     *
     * The account code for which fares were requested.
     *
     * @return string
     */
    public function getAccountCode()
    {
        return $this->accountCode;
    }

    /**
     * Sets a new accountCode
     *
     * The account code for which fares were requested.
     *
     * @param string $accountCode
     * @return self
     */
    public function setAccountCode($accountCode)
    {
        $this->accountCode = $accountCode;

        return $this;
    }

    /**
     * Gets as currencyOverrideInd
     *
     * When true, the fares were converted to the override currency code. When false,
     * the fares were not converted.
     *
     * @return boolean
     */
    public function getCurrencyOverrideInd()
    {
        return $this->currencyOverrideInd;
    }

    /**
     * Sets a new currencyOverrideInd
     *
     * When true, the fares were converted to the override currency code. When false,
     * the fares were not converted.
     *
     * @param boolean $currencyOverrideInd
     * @return self
     */
    public function setCurrencyOverrideInd($currencyOverrideInd)
    {
        $this->currencyOverrideInd = $currencyOverrideInd;

        return $this;
    }

    /**
     * Gets as seasonalInfo
     *
     * Seasonal information for this fare.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\PricingInfoAType\SeasonalInfoAType
     */
    public function getSeasonalInfo()
    {
        return $this->seasonalInfo;
    }

    /**
     * Sets a new seasonalInfo
     *
     * Seasonal information for this fare.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\PricingInfoAType\SeasonalInfoAType
     * $seasonalInfo
     * @return self
     */
    public function setSeasonalInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\PricingInfoAType\SeasonalInfoAType $seasonalInfo
    ) {
        $this->seasonalInfo = $seasonalInfo;

        return $this;
    }


}

