<?php

namespace Davispeixoto\OpenTravelAlliance\AirSearchPrefsType;

/**
 * Class representing FareRestrictPrefAType
 *
 * Container used for specifying or limiting acceptable fare restrictions.
 */
class FareRestrictPrefAType
{

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Identifies the type of fare restriction, such as None, Advance Purchase and
     * Change Penalties. Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @property string $fareRestriction
     */
    private $fareRestriction = null;

    /**
     * A date that is associated to the fare restriction.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $date
     */
    private $date = null;

    /**
     * Currency in which fare display is requested.
     *
     * @property string $fareDisplayCurrency
     */
    private $fareDisplayCurrency = null;

    /**
     * Display fare published in other than local selling currency only.
     *
     * @property string $currencyOverride
     */
    private $currencyOverride = null;

    /**
     * Identifies whether advance reservation or ticketing restrictions are acceptable
     * in the search results.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AdvResTicketingType $advResTicketing
     */
    private $advResTicketing = null;

    /**
     * Identifies whether restrictions on minimum or maximum stays should be included
     * in the search results.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StayRestrictionsType
     * $stayRestrictions
     */
    private $stayRestrictions = null;

    /**
     * Identifies whether penalties associated with voluntary changes should be
     * included in the search results.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VoluntaryChangesType
     * $voluntaryChanges
     */
    private $voluntaryChanges = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
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
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as fareRestriction
     *
     * Identifies the type of fare restriction, such as None, Advance Purchase and
     * Change Penalties. Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @return string
     */
    public function getFareRestriction()
    {
        return $this->fareRestriction;
    }

    /**
     * Sets a new fareRestriction
     *
     * Identifies the type of fare restriction, such as None, Advance Purchase and
     * Change Penalties. Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @param string $fareRestriction
     * @return self
     */
    public function setFareRestriction($fareRestriction)
    {
        $this->fareRestriction = $fareRestriction;

        return $this;
    }

    /**
     * Gets as date
     *
     * A date that is associated to the fare restriction.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * A date that is associated to the fare restriction.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $date
     * @return self
     */
    public function setDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as fareDisplayCurrency
     *
     * Currency in which fare display is requested.
     *
     * @return string
     */
    public function getFareDisplayCurrency()
    {
        return $this->fareDisplayCurrency;
    }

    /**
     * Sets a new fareDisplayCurrency
     *
     * Currency in which fare display is requested.
     *
     * @param string $fareDisplayCurrency
     * @return self
     */
    public function setFareDisplayCurrency($fareDisplayCurrency)
    {
        $this->fareDisplayCurrency = $fareDisplayCurrency;

        return $this;
    }

    /**
     * Gets as currencyOverride
     *
     * Display fare published in other than local selling currency only.
     *
     * @return string
     */
    public function getCurrencyOverride()
    {
        return $this->currencyOverride;
    }

    /**
     * Sets a new currencyOverride
     *
     * Display fare published in other than local selling currency only.
     *
     * @param string $currencyOverride
     * @return self
     */
    public function setCurrencyOverride($currencyOverride)
    {
        $this->currencyOverride = $currencyOverride;

        return $this;
    }

    /**
     * Gets as advResTicketing
     *
     * Identifies whether advance reservation or ticketing restrictions are acceptable
     * in the search results.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AdvResTicketingType
     */
    public function getAdvResTicketing()
    {
        return $this->advResTicketing;
    }

    /**
     * Sets a new advResTicketing
     *
     * Identifies whether advance reservation or ticketing restrictions are acceptable
     * in the search results.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AdvResTicketingType $advResTicketing
     * @return self
     */
    public function setAdvResTicketing(\Davispeixoto\OpenTravelAlliance\AdvResTicketingType $advResTicketing)
    {
        $this->advResTicketing = $advResTicketing;

        return $this;
    }

    /**
     * Gets as stayRestrictions
     *
     * Identifies whether restrictions on minimum or maximum stays should be included
     * in the search results.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StayRestrictionsType
     */
    public function getStayRestrictions()
    {
        return $this->stayRestrictions;
    }

    /**
     * Sets a new stayRestrictions
     *
     * Identifies whether restrictions on minimum or maximum stays should be included
     * in the search results.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StayRestrictionsType $stayRestrictions
     * @return self
     */
    public function setStayRestrictions(\Davispeixoto\OpenTravelAlliance\StayRestrictionsType $stayRestrictions)
    {
        $this->stayRestrictions = $stayRestrictions;

        return $this;
    }

    /**
     * Gets as voluntaryChanges
     *
     * Identifies whether penalties associated with voluntary changes should be
     * included in the search results.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VoluntaryChangesType
     */
    public function getVoluntaryChanges()
    {
        return $this->voluntaryChanges;
    }

    /**
     * Sets a new voluntaryChanges
     *
     * Identifies whether penalties associated with voluntary changes should be
     * included in the search results.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VoluntaryChangesType $voluntaryChanges
     * @return self
     */
    public function setVoluntaryChanges(\Davispeixoto\OpenTravelAlliance\VoluntaryChangesType $voluntaryChanges)
    {
        $this->voluntaryChanges = $voluntaryChanges;

        return $this;
    }


}

