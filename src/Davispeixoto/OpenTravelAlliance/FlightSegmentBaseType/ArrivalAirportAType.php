<?php

namespace Davispeixoto\OpenTravelAlliance\FlightSegmentBaseType;

/**
 * Class representing ArrivalAirportAType
 */
class ArrivalAirportAType
{

    /**
     * Location code used to identify a specific airport.
     *
     * @property string $locationCode
     */
    private $locationCode = null;

    /**
     * Identifies the context of the identifying code, such as IATA, ARC, or internal
     * code, etc.
     *  IATA
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Arrival or departure terminal (e.g., Concourse A)
     *
     * @property string $terminal
     */
    private $terminal = null;

    /**
     * Arrival or departure gate (e.g., B12)
     *
     * @property string $gate
     */
    private $gate = null;

    /**
     * Gets as locationCode
     *
     * Location code used to identify a specific airport.
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * Location code used to identify a specific airport.
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the identifying code, such as IATA, ARC, or internal
     * code, etc.
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
     * Identifies the context of the identifying code, such as IATA, ARC, or internal
     * code, etc.
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
     * Gets as terminal
     *
     * Arrival or departure terminal (e.g., Concourse A)
     *
     * @return string
     */
    public function getTerminal()
    {
        return $this->terminal;
    }

    /**
     * Sets a new terminal
     *
     * Arrival or departure terminal (e.g., Concourse A)
     *
     * @param string $terminal
     * @return self
     */
    public function setTerminal($terminal)
    {
        $this->terminal = $terminal;

        return $this;
    }

    /**
     * Gets as gate
     *
     * Arrival or departure gate (e.g., B12)
     *
     * @return string
     */
    public function getGate()
    {
        return $this->gate;
    }

    /**
     * Sets a new gate
     *
     * Arrival or departure gate (e.g., B12)
     *
     * @param string $gate
     * @return self
     */
    public function setGate($gate)
    {
        $this->gate = $gate;

        return $this;
    }


}

