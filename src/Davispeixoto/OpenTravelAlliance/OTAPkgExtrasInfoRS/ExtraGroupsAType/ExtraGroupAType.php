<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgExtrasInfoRS\ExtraGroupsAType;

/**
 * Class representing ExtraGroupAType
 */
class ExtraGroupAType
{

    /**
     * A code which links two or more Extras together, enabling a rule to be applied to
     * all group members e.g. only one of the group may be booked, or any combination
     * of extras may be booked.
     *
     * @property string $code
     */
    private $code = null;

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
     * A list of the RPHs of the Extras which are in this ExtraGroup.
     *
     * @property string[] $listofExtrasRPH
     */
    private $listofExtrasRPH = null;

    /**
     * Gets as code
     *
     * A code which links two or more Extras together, enabling a rule to be applied to
     * all group members e.g. only one of the group may be booked, or any combination
     * of extras may be booked.
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
     * A code which links two or more Extras together, enabling a rule to be applied to
     * all group members e.g. only one of the group may be booked, or any combination
     * of extras may be booked.
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
     * Adds as listofExtrasRPH
     *
     * A list of the RPHs of the Extras which are in this ExtraGroup.
     *
     * @return self
     * @param string $listofExtrasRPH
     */
    public function addToListofExtrasRPH($listofExtrasRPH)
    {
        $this->listofExtrasRPH[] = $listofExtrasRPH;

        return $this;
    }

    /**
     * isset listofExtrasRPH
     *
     * A list of the RPHs of the Extras which are in this ExtraGroup.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListofExtrasRPH($index)
    {
        return isset($this->listofExtrasRPH[$index]);
    }

    /**
     * unset listofExtrasRPH
     *
     * A list of the RPHs of the Extras which are in this ExtraGroup.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListofExtrasRPH($index)
    {
        unset($this->listofExtrasRPH[$index]);
    }

    /**
     * Gets as listofExtrasRPH
     *
     * A list of the RPHs of the Extras which are in this ExtraGroup.
     *
     * @return string[]
     */
    public function getListofExtrasRPH()
    {
        return $this->listofExtrasRPH;
    }

    /**
     * Sets a new listofExtrasRPH
     *
     * A list of the RPHs of the Extras which are in this ExtraGroup.
     *
     * @param string $listofExtrasRPH
     * @return self
     */
    public function setListofExtrasRPH(array $listofExtrasRPH)
    {
        $this->listofExtrasRPH = $listofExtrasRPH;

        return $this;
    }


}

