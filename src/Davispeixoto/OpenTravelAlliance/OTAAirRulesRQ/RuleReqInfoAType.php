<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirRulesRQ;

use Davispeixoto\OpenTravelAlliance\FareInfoType;

/**
 * Class representing RuleReqInfoAType
 */
class RuleReqInfoAType extends FareInfoType
{

    /**
     * Specifies the language in which the rules should be returned.
     *
     * @property string $languageRequested
     */
    private $languageRequested = null;

    /**
     * When true, the abbreviated rule text should be returned, not the full rule text.
     *
     * @property boolean $abbreviatedRuleTextInd
     */
    private $abbreviatedRuleTextInd = null;

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirRulesRQ\RuleReqInfoAType\SubSectionAType[]
     * $subSection
     */
    private $subSection = null;

    /**
     * Gets as languageRequested
     *
     * Specifies the language in which the rules should be returned.
     *
     * @return string
     */
    public function getLanguageRequested()
    {
        return $this->languageRequested;
    }

    /**
     * Sets a new languageRequested
     *
     * Specifies the language in which the rules should be returned.
     *
     * @param string $languageRequested
     * @return self
     */
    public function setLanguageRequested($languageRequested)
    {
        $this->languageRequested = $languageRequested;

        return $this;
    }

    /**
     * Gets as abbreviatedRuleTextInd
     *
     * When true, the abbreviated rule text should be returned, not the full rule text.
     *
     * @return boolean
     */
    public function getAbbreviatedRuleTextInd()
    {
        return $this->abbreviatedRuleTextInd;
    }

    /**
     * Sets a new abbreviatedRuleTextInd
     *
     * When true, the abbreviated rule text should be returned, not the full rule text.
     *
     * @param boolean $abbreviatedRuleTextInd
     * @return self
     */
    public function setAbbreviatedRuleTextInd($abbreviatedRuleTextInd)
    {
        $this->abbreviatedRuleTextInd = $abbreviatedRuleTextInd;

        return $this;
    }

    /**
     * Adds as subSection
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirRulesRQ\RuleReqInfoAType\SubSectionAType
     * $subSection
     */
    public function addToSubSection(
        \Davispeixoto\OpenTravelAlliance\OTAAirRulesRQ\RuleReqInfoAType\SubSectionAType $subSection
    ) {
        $this->subSection[] = $subSection;

        return $this;
    }

    /**
     * isset subSection
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSubSection($index)
    {
        return isset($this->subSection[$index]);
    }

    /**
     * unset subSection
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSubSection($index)
    {
        unset($this->subSection[$index]);
    }

    /**
     * Gets as subSection
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirRulesRQ\RuleReqInfoAType\SubSectionAType[]
     */
    public function getSubSection()
    {
        return $this->subSection;
    }

    /**
     * Sets a new subSection
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirRulesRQ\RuleReqInfoAType\SubSectionAType[]
     * $subSection
     * @return self
     */
    public function setSubSection(array $subSection)
    {
        $this->subSection = $subSection;

        return $this;
    }


}

