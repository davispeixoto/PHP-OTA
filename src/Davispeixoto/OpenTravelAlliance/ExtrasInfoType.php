<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ExtrasInfoType
 *
 * Describes an optional service which is not included in the standard package but
 * may be booked in addition.
 * XSD Type: ExtrasInfoType
 */
class ExtrasInfoType extends ExtrasCoreType
{

    /**
     * Describes how the extra is applied to a group of extras, e.g. "Mandatory" and
     * "Optional."
     *
     * @property string $selectionType
     */
    private $selectionType = null;

    /**
     * Further clarifies how this extra is applied to a group of extras.
     *
     * @property string $ruleCode
     */
    private $ruleCode = null;

    /**
     * Indicates whether the service applies to all passengers on booking, just to
     * selected passengers or not to passengers at all.
     *
     * @property string $applyTo
     */
    private $applyTo = null;

    /**
     * Conditions which must be met for an extra to be bookable e.g. age of passenger,
     * booking of parent extra.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\CriteriaAType
     * $criteria
     */
    private $criteria = null;

    /**
     * A collection of prices by booking period.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PeriodPriceType[] $periods
     */
    private $periods = null;

    /**
     * Additional textual information is sometimes required when an Extra is selected.
     * This element allows for up to 4 lines of prompts to be displayed.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\AdditionalInfoPromptAType[]
     * $additionalInfoPrompt
     */
    private $additionalInfoPrompt = null;

    /**
     * Identifies the parent with which this Extra is available (e.g., an ice skating
     * session with ice skates).
     *
     * @property \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\ParentExtrasAType
     * $parentExtras
     */
    private $parentExtras = null;

    /**
     * Indicates where the extra can be obtained and returned, (e.g., airport, property
     * or resort).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\ExtraLocationInfoAType[]
     * $extraLocationInfo
     */
    private $extraLocationInfo = null;

    /**
     * Gets as selectionType
     *
     * Describes how the extra is applied to a group of extras, e.g. "Mandatory" and
     * "Optional."
     *
     * @return string
     */
    public function getSelectionType()
    {
        return $this->selectionType;
    }

    /**
     * Sets a new selectionType
     *
     * Describes how the extra is applied to a group of extras, e.g. "Mandatory" and
     * "Optional."
     *
     * @param string $selectionType
     * @return self
     */
    public function setSelectionType($selectionType)
    {
        $this->selectionType = $selectionType;

        return $this;
    }

    /**
     * Gets as ruleCode
     *
     * Further clarifies how this extra is applied to a group of extras.
     *
     * @return string
     */
    public function getRuleCode()
    {
        return $this->ruleCode;
    }

    /**
     * Sets a new ruleCode
     *
     * Further clarifies how this extra is applied to a group of extras.
     *
     * @param string $ruleCode
     * @return self
     */
    public function setRuleCode($ruleCode)
    {
        $this->ruleCode = $ruleCode;

        return $this;
    }

    /**
     * Gets as applyTo
     *
     * Indicates whether the service applies to all passengers on booking, just to
     * selected passengers or not to passengers at all.
     *
     * @return string
     */
    public function getApplyTo()
    {
        return $this->applyTo;
    }

    /**
     * Sets a new applyTo
     *
     * Indicates whether the service applies to all passengers on booking, just to
     * selected passengers or not to passengers at all.
     *
     * @param string $applyTo
     * @return self
     */
    public function setApplyTo($applyTo)
    {
        $this->applyTo = $applyTo;

        return $this;
    }

    /**
     * Gets as criteria
     *
     * Conditions which must be met for an extra to be bookable e.g. age of passenger,
     * booking of parent extra.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\CriteriaAType
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Sets a new criteria
     *
     * Conditions which must be met for an extra to be bookable e.g. age of passenger,
     * booking of parent extra.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\CriteriaAType $criteria
     * @return self
     */
    public function setCriteria(\Davispeixoto\OpenTravelAlliance\ExtrasInfoType\CriteriaAType $criteria)
    {
        $this->criteria = $criteria;

        return $this;
    }

    /**
     * Adds as period
     *
     * A collection of prices by booking period.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PeriodPriceType $period
     */
    public function addToPeriods(\Davispeixoto\OpenTravelAlliance\PeriodPriceType $period)
    {
        $this->periods[] = $period;

        return $this;
    }

    /**
     * isset periods
     *
     * A collection of prices by booking period.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPeriods($index)
    {
        return isset($this->periods[$index]);
    }

    /**
     * unset periods
     *
     * A collection of prices by booking period.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPeriods($index)
    {
        unset($this->periods[$index]);
    }

    /**
     * Gets as periods
     *
     * A collection of prices by booking period.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PeriodPriceType[]
     */
    public function getPeriods()
    {
        return $this->periods;
    }

    /**
     * Sets a new periods
     *
     * A collection of prices by booking period.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PeriodPriceType[] $periods
     * @return self
     */
    public function setPeriods(array $periods)
    {
        $this->periods = $periods;

        return $this;
    }

    /**
     * Adds as additionalInfoPrompt
     *
     * Additional textual information is sometimes required when an Extra is selected.
     * This element allows for up to 4 lines of prompts to be displayed.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\AdditionalInfoPromptAType
     * $additionalInfoPrompt
     */
    public function addToAdditionalInfoPrompt(
        \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\AdditionalInfoPromptAType $additionalInfoPrompt
    ) {
        $this->additionalInfoPrompt[] = $additionalInfoPrompt;

        return $this;
    }

    /**
     * isset additionalInfoPrompt
     *
     * Additional textual information is sometimes required when an Extra is selected.
     * This element allows for up to 4 lines of prompts to be displayed.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalInfoPrompt($index)
    {
        return isset($this->additionalInfoPrompt[$index]);
    }

    /**
     * unset additionalInfoPrompt
     *
     * Additional textual information is sometimes required when an Extra is selected.
     * This element allows for up to 4 lines of prompts to be displayed.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalInfoPrompt($index)
    {
        unset($this->additionalInfoPrompt[$index]);
    }

    /**
     * Gets as additionalInfoPrompt
     *
     * Additional textual information is sometimes required when an Extra is selected.
     * This element allows for up to 4 lines of prompts to be displayed.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\AdditionalInfoPromptAType[]
     */
    public function getAdditionalInfoPrompt()
    {
        return $this->additionalInfoPrompt;
    }

    /**
     * Sets a new additionalInfoPrompt
     *
     * Additional textual information is sometimes required when an Extra is selected.
     * This element allows for up to 4 lines of prompts to be displayed.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\AdditionalInfoPromptAType[]
     * $additionalInfoPrompt
     * @return self
     */
    public function setAdditionalInfoPrompt(array $additionalInfoPrompt)
    {
        $this->additionalInfoPrompt = $additionalInfoPrompt;

        return $this;
    }

    /**
     * Gets as parentExtras
     *
     * Identifies the parent with which this Extra is available (e.g., an ice skating
     * session with ice skates).
     *
     * @return \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\ParentExtrasAType
     */
    public function getParentExtras()
    {
        return $this->parentExtras;
    }

    /**
     * Sets a new parentExtras
     *
     * Identifies the parent with which this Extra is available (e.g., an ice skating
     * session with ice skates).
     *
     * @param \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\ParentExtrasAType
     * $parentExtras
     * @return self
     */
    public function setParentExtras(\Davispeixoto\OpenTravelAlliance\ExtrasInfoType\ParentExtrasAType $parentExtras)
    {
        $this->parentExtras = $parentExtras;

        return $this;
    }

    /**
     * Adds as extraLocationInfo
     *
     * Indicates where the extra can be obtained and returned, (e.g., airport, property
     * or resort).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\ExtraLocationInfoAType
     * $extraLocationInfo
     */
    public function addToExtraLocationInfo(
        \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\ExtraLocationInfoAType $extraLocationInfo
    ) {
        $this->extraLocationInfo[] = $extraLocationInfo;

        return $this;
    }

    /**
     * isset extraLocationInfo
     *
     * Indicates where the extra can be obtained and returned, (e.g., airport, property
     * or resort).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExtraLocationInfo($index)
    {
        return isset($this->extraLocationInfo[$index]);
    }

    /**
     * unset extraLocationInfo
     *
     * Indicates where the extra can be obtained and returned, (e.g., airport, property
     * or resort).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExtraLocationInfo($index)
    {
        unset($this->extraLocationInfo[$index]);
    }

    /**
     * Gets as extraLocationInfo
     *
     * Indicates where the extra can be obtained and returned, (e.g., airport, property
     * or resort).
     *
     * @return \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\ExtraLocationInfoAType[]
     */
    public function getExtraLocationInfo()
    {
        return $this->extraLocationInfo;
    }

    /**
     * Sets a new extraLocationInfo
     *
     * Indicates where the extra can be obtained and returned, (e.g., airport, property
     * or resort).
     *
     * @param \Davispeixoto\OpenTravelAlliance\ExtrasInfoType\ExtraLocationInfoAType[]
     * $extraLocationInfo
     * @return self
     */
    public function setExtraLocationInfo(array $extraLocationInfo)
    {
        $this->extraLocationInfo = $extraLocationInfo;

        return $this;
    }


}

