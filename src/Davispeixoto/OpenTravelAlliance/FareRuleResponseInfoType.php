<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing FareRuleResponseInfoType
 *
 * The collection of Fare Rule requests and the applicable Fare Rule categories.
 * XSD Type: FareRuleResponseInfoType
 */
class FareRuleResponseInfoType
{

    /**
     * The Fare Rule Info as per the request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\FareRuleInfoAType
     * $fareRuleInfo
     */
    private $fareRuleInfo = null;

    /**
     * The applicable Fare Rule categories.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType $fareRules
     */
    private $fareRules = null;

    /**
     * Specifies the routing for all the fares.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\RoutingAType[]
     * $routing
     */
    private $routing = null;

    /**
     * Advisory information that applies to all the rule information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\AdvisoryInfoAType[]
     * $advisoryInfo
     */
    private $advisoryInfo = null;

    /**
     * Gets as fareRuleInfo
     *
     * The Fare Rule Info as per the request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\FareRuleInfoAType
     */
    public function getFareRuleInfo()
    {
        return $this->fareRuleInfo;
    }

    /**
     * Sets a new fareRuleInfo
     *
     * The Fare Rule Info as per the request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\FareRuleInfoAType
     * $fareRuleInfo
     * @return self
     */
    public function setFareRuleInfo(
        \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\FareRuleInfoAType $fareRuleInfo
    ) {
        $this->fareRuleInfo = $fareRuleInfo;

        return $this;
    }

    /**
     * Gets as fareRules
     *
     * The applicable Fare Rule categories.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType
     */
    public function getFareRules()
    {
        return $this->fareRules;
    }

    /**
     * Sets a new fareRules
     *
     * The applicable Fare Rule categories.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $fareRules
     * @return self
     */
    public function setFareRules(\Davispeixoto\OpenTravelAlliance\FormattedTextType $fareRules)
    {
        $this->fareRules = $fareRules;

        return $this;
    }

    /**
     * Adds as routing
     *
     * Specifies the routing for all the fares.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\RoutingAType
     * $routing
     */
    public function addToRouting(\Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\RoutingAType $routing)
    {
        $this->routing[] = $routing;

        return $this;
    }

    /**
     * isset routing
     *
     * Specifies the routing for all the fares.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRouting($index)
    {
        return isset($this->routing[$index]);
    }

    /**
     * unset routing
     *
     * Specifies the routing for all the fares.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRouting($index)
    {
        unset($this->routing[$index]);
    }

    /**
     * Gets as routing
     *
     * Specifies the routing for all the fares.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\RoutingAType[]
     */
    public function getRouting()
    {
        return $this->routing;
    }

    /**
     * Sets a new routing
     *
     * Specifies the routing for all the fares.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\RoutingAType[]
     * $routing
     * @return self
     */
    public function setRouting(array $routing)
    {
        $this->routing = $routing;

        return $this;
    }

    /**
     * Adds as advisoryInfo
     *
     * Advisory information that applies to all the rule information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\AdvisoryInfoAType
     * $advisoryInfo
     */
    public function addToAdvisoryInfo(
        \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\AdvisoryInfoAType $advisoryInfo
    ) {
        $this->advisoryInfo[] = $advisoryInfo;

        return $this;
    }

    /**
     * isset advisoryInfo
     *
     * Advisory information that applies to all the rule information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdvisoryInfo($index)
    {
        return isset($this->advisoryInfo[$index]);
    }

    /**
     * unset advisoryInfo
     *
     * Advisory information that applies to all the rule information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdvisoryInfo($index)
    {
        unset($this->advisoryInfo[$index]);
    }

    /**
     * Gets as advisoryInfo
     *
     * Advisory information that applies to all the rule information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\AdvisoryInfoAType[]
     */
    public function getAdvisoryInfo()
    {
        return $this->advisoryInfo;
    }

    /**
     * Sets a new advisoryInfo
     *
     * Advisory information that applies to all the rule information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\AdvisoryInfoAType[]
     * $advisoryInfo
     * @return self
     */
    public function setAdvisoryInfo(array $advisoryInfo)
    {
        $this->advisoryInfo = $advisoryInfo;

        return $this;
    }


}

