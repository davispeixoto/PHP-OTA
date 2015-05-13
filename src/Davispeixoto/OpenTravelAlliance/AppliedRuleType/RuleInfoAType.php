<?php

namespace Davispeixoto\OpenTravelAlliance\AppliedRuleType;

/**
 * Class representing RuleInfoAType
 */
class RuleInfoAType
{

    /**
     * The name of the applied rule.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The version of the rule.
     *
     * @property integer $version
     */
    private $version = null;

    /**
     * Gets as name
     *
     * The name of the applied rule.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the applied rule.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as version
     *
     * The version of the rule.
     *
     * @return integer
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The version of the rule.
     *
     * @param integer $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }


}

