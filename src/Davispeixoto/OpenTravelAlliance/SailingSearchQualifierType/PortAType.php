<?php

namespace Davispeixoto\OpenTravelAlliance\SailingSearchQualifierType;

/**
 * Class representing PortAType
 */
class PortAType
{

    /**
     * Specifies the Port Code.
     *
     * @property string $portCode
     */
    private $portCode = null;

    /**
     * Specifies the Port name for the above Port Code.
     *
     * @property string $portName
     */
    private $portName = null;

    /**
     * Specifies the Country Code for the above port. ISO3166 specifies all the ISO
     * country codes.
     *
     * @property string $portCountryCode
     */
    private $portCountryCode = null;

    /**
     * When true, the ship docks at this port.
     *
     * @property boolean $dockIndicator
     */
    private $dockIndicator = null;

    /**
     * When true, one or more shore excursions are offered at this port.
     *
     * @property boolean $shorexIndicator
     */
    private $shorexIndicator = null;

    /**
     * When true idicates embarking.
     *
     * @property boolean $embarkIndicator
     */
    private $embarkIndicator = null;

    /**
     * When true indicates debarking.
     *
     * @property boolean $disembarkIndicator
     */
    private $disembarkIndicator = null;

    /**
     * Gets as portCode
     *
     * Specifies the Port Code.
     *
     * @return string
     */
    public function getPortCode()
    {
        return $this->portCode;
    }

    /**
     * Sets a new portCode
     *
     * Specifies the Port Code.
     *
     * @param string $portCode
     * @return self
     */
    public function setPortCode($portCode)
    {
        $this->portCode = $portCode;

        return $this;
    }

    /**
     * Gets as portName
     *
     * Specifies the Port name for the above Port Code.
     *
     * @return string
     */
    public function getPortName()
    {
        return $this->portName;
    }

    /**
     * Sets a new portName
     *
     * Specifies the Port name for the above Port Code.
     *
     * @param string $portName
     * @return self
     */
    public function setPortName($portName)
    {
        $this->portName = $portName;

        return $this;
    }

    /**
     * Gets as portCountryCode
     *
     * Specifies the Country Code for the above port. ISO3166 specifies all the ISO
     * country codes.
     *
     * @return string
     */
    public function getPortCountryCode()
    {
        return $this->portCountryCode;
    }

    /**
     * Sets a new portCountryCode
     *
     * Specifies the Country Code for the above port. ISO3166 specifies all the ISO
     * country codes.
     *
     * @param string $portCountryCode
     * @return self
     */
    public function setPortCountryCode($portCountryCode)
    {
        $this->portCountryCode = $portCountryCode;

        return $this;
    }

    /**
     * Gets as dockIndicator
     *
     * When true, the ship docks at this port.
     *
     * @return boolean
     */
    public function getDockIndicator()
    {
        return $this->dockIndicator;
    }

    /**
     * Sets a new dockIndicator
     *
     * When true, the ship docks at this port.
     *
     * @param boolean $dockIndicator
     * @return self
     */
    public function setDockIndicator($dockIndicator)
    {
        $this->dockIndicator = $dockIndicator;

        return $this;
    }

    /**
     * Gets as shorexIndicator
     *
     * When true, one or more shore excursions are offered at this port.
     *
     * @return boolean
     */
    public function getShorexIndicator()
    {
        return $this->shorexIndicator;
    }

    /**
     * Sets a new shorexIndicator
     *
     * When true, one or more shore excursions are offered at this port.
     *
     * @param boolean $shorexIndicator
     * @return self
     */
    public function setShorexIndicator($shorexIndicator)
    {
        $this->shorexIndicator = $shorexIndicator;

        return $this;
    }

    /**
     * Gets as embarkIndicator
     *
     * When true idicates embarking.
     *
     * @return boolean
     */
    public function getEmbarkIndicator()
    {
        return $this->embarkIndicator;
    }

    /**
     * Sets a new embarkIndicator
     *
     * When true idicates embarking.
     *
     * @param boolean $embarkIndicator
     * @return self
     */
    public function setEmbarkIndicator($embarkIndicator)
    {
        $this->embarkIndicator = $embarkIndicator;

        return $this;
    }

    /**
     * Gets as disembarkIndicator
     *
     * When true indicates debarking.
     *
     * @return boolean
     */
    public function getDisembarkIndicator()
    {
        return $this->disembarkIndicator;
    }

    /**
     * Sets a new disembarkIndicator
     *
     * When true indicates debarking.
     *
     * @param boolean $disembarkIndicator
     * @return self
     */
    public function setDisembarkIndicator($disembarkIndicator)
    {
        $this->disembarkIndicator = $disembarkIndicator;

        return $this;
    }


}

