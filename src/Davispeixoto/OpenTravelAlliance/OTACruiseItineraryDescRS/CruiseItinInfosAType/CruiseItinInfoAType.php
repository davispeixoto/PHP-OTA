<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseItineraryDescRS\CruiseItinInfosAType;

/**
 * Class representing CruiseItinInfoAType
 *
 * Used to specify detailed cruise itinerary information.
 */
class CruiseItinInfoAType
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
     * Specifies the event date and time.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseItineraryDescRS\CruiseItinInfosAType\CruiseItinInfoAType\DateTimeDescriptionAType[]
     * $dateTimeDescription
     */
    private $dateTimeDescription = null;

    /**
     * Additional information about the itinerary.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $information
     */
    private $information = null;

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
     * Adds as dateTimeDescription
     *
     * Specifies the event date and time.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseItineraryDescRS\CruiseItinInfosAType\CruiseItinInfoAType\DateTimeDescriptionAType
     * $dateTimeDescription
     */
    public function addToDateTimeDescription(
        \Davispeixoto\OpenTravelAlliance\OTACruiseItineraryDescRS\CruiseItinInfosAType\CruiseItinInfoAType\DateTimeDescriptionAType $dateTimeDescription
    ) {
        $this->dateTimeDescription[] = $dateTimeDescription;

        return $this;
    }

    /**
     * isset dateTimeDescription
     *
     * Specifies the event date and time.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDateTimeDescription($index)
    {
        return isset($this->dateTimeDescription[$index]);
    }

    /**
     * unset dateTimeDescription
     *
     * Specifies the event date and time.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDateTimeDescription($index)
    {
        unset($this->dateTimeDescription[$index]);
    }

    /**
     * Gets as dateTimeDescription
     *
     * Specifies the event date and time.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseItineraryDescRS\CruiseItinInfosAType\CruiseItinInfoAType\DateTimeDescriptionAType[]
     */
    public function getDateTimeDescription()
    {
        return $this->dateTimeDescription;
    }

    /**
     * Sets a new dateTimeDescription
     *
     * Specifies the event date and time.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseItineraryDescRS\CruiseItinInfosAType\CruiseItinInfoAType\DateTimeDescriptionAType[]
     * $dateTimeDescription
     * @return self
     */
    public function setDateTimeDescription(array $dateTimeDescription)
    {
        $this->dateTimeDescription = $dateTimeDescription;

        return $this;
    }

    /**
     * Gets as information
     *
     * Additional information about the itinerary.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * Additional information about the itinerary.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $information
     * @return self
     */
    public function setInformation(\Davispeixoto\OpenTravelAlliance\ParagraphType $information)
    {
        $this->information = $information;

        return $this;
    }


}

