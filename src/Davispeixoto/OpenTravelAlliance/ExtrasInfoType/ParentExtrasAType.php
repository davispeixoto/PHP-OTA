<?php

namespace Davispeixoto\OpenTravelAlliance\ExtrasInfoType;

/**
 * Class representing ParentExtrasAType
 */
class ParentExtrasAType
{

    /**
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @property string[] $listOfParentRPH
     */
    private $listOfParentRPH = null;

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
     * Adds as listOfParentRPH
     *
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @return self
     * @param string $listOfParentRPH
     */
    public function addToListOfParentRPH($listOfParentRPH)
    {
        $this->listOfParentRPH[] = $listOfParentRPH;

        return $this;
    }

    /**
     * isset listOfParentRPH
     *
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListOfParentRPH($index)
    {
        return isset($this->listOfParentRPH[$index]);
    }

    /**
     * unset listOfParentRPH
     *
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListOfParentRPH($index)
    {
        unset($this->listOfParentRPH[$index]);
    }

    /**
     * Gets as listOfParentRPH
     *
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @return string[]
     */
    public function getListOfParentRPH()
    {
        return $this->listOfParentRPH;
    }

    /**
     * Sets a new listOfParentRPH
     *
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @param string $listOfParentRPH
     * @return self
     */
    public function setListOfParentRPH(array $listOfParentRPH)
    {
        $this->listOfParentRPH = $listOfParentRPH;

        return $this;
    }

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


}

