<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType;

/**
 * Class representing GlobalIndicatorPrefAType
 */
class GlobalIndicatorPrefAType
{

    /**
     * AP-Atlantic Ocean; PA - Pacific Ocean; WH - Western Hemisphere; EH - Eastern
     * Hemisphere; PO - Polar Route; TS - Trans Siberia Route; AP - Atlantic/Pacific
     * Round-the-World
     *
     * @property string $globalIndicatorCode
     */
    private $globalIndicatorCode = null;

    /**
     * The code list from which the global indicator code is valid.
     *  IATA
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as globalIndicatorCode
     *
     * AP-Atlantic Ocean; PA - Pacific Ocean; WH - Western Hemisphere; EH - Eastern
     * Hemisphere; PO - Polar Route; TS - Trans Siberia Route; AP - Atlantic/Pacific
     * Round-the-World
     *
     * @return string
     */
    public function getGlobalIndicatorCode()
    {
        return $this->globalIndicatorCode;
    }

    /**
     * Sets a new globalIndicatorCode
     *
     * AP-Atlantic Ocean; PA - Pacific Ocean; WH - Western Hemisphere; EH - Eastern
     * Hemisphere; PO - Polar Route; TS - Trans Siberia Route; AP - Atlantic/Pacific
     * Round-the-World
     *
     * @param string $globalIndicatorCode
     * @return self
     */
    public function setGlobalIndicatorCode($globalIndicatorCode)
    {
        $this->globalIndicatorCode = $globalIndicatorCode;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * The code list from which the global indicator code is valid.
     *  IATA
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
     * The code list from which the global indicator code is valid.
     *  IATA
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
     * Gets as preferLevel
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }


}

