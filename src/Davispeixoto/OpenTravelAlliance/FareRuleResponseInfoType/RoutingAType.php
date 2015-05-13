<?php

namespace Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType;

/**
 * Class representing RoutingAType
 */
class RoutingAType
{

    /**
     * A routing number for the fare.
     *
     * @property integer $number
     */
    private $number = null;

    /**
     * If true, the routing was constructed. If false, it was not constructed.
     *
     * @property boolean $routingConstructedInd
     */
    private $routingConstructedInd = null;

    /**
     * The maximum permitted mileage for the fare associated to this rule.
     *
     * @property integer $maximumPermittedMileage
     */
    private $maximumPermittedMileage = null;

    /**
     * Restriction information about the routing.
     *
     * @property string $routingRestriction
     */
    private $routingRestriction = null;

    /**
     * The routing direction and city airports for the direction.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\RoutingAType\InfoAType[]
     * $info
     */
    private $info = null;

    /**
     * Gets as number
     *
     * A routing number for the fare.
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * A routing number for the fare.
     *
     * @param integer $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as routingConstructedInd
     *
     * If true, the routing was constructed. If false, it was not constructed.
     *
     * @return boolean
     */
    public function getRoutingConstructedInd()
    {
        return $this->routingConstructedInd;
    }

    /**
     * Sets a new routingConstructedInd
     *
     * If true, the routing was constructed. If false, it was not constructed.
     *
     * @param boolean $routingConstructedInd
     * @return self
     */
    public function setRoutingConstructedInd($routingConstructedInd)
    {
        $this->routingConstructedInd = $routingConstructedInd;

        return $this;
    }

    /**
     * Gets as maximumPermittedMileage
     *
     * The maximum permitted mileage for the fare associated to this rule.
     *
     * @return integer
     */
    public function getMaximumPermittedMileage()
    {
        return $this->maximumPermittedMileage;
    }

    /**
     * Sets a new maximumPermittedMileage
     *
     * The maximum permitted mileage for the fare associated to this rule.
     *
     * @param integer $maximumPermittedMileage
     * @return self
     */
    public function setMaximumPermittedMileage($maximumPermittedMileage)
    {
        $this->maximumPermittedMileage = $maximumPermittedMileage;

        return $this;
    }

    /**
     * Gets as routingRestriction
     *
     * Restriction information about the routing.
     *
     * @return string
     */
    public function getRoutingRestriction()
    {
        return $this->routingRestriction;
    }

    /**
     * Sets a new routingRestriction
     *
     * Restriction information about the routing.
     *
     * @param string $routingRestriction
     * @return self
     */
    public function setRoutingRestriction($routingRestriction)
    {
        $this->routingRestriction = $routingRestriction;

        return $this;
    }

    /**
     * Adds as info
     *
     * The routing direction and city airports for the direction.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\RoutingAType\InfoAType
     * $info
     */
    public function addToInfo(\Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\RoutingAType\InfoAType $info)
    {
        $this->info[] = $info;

        return $this;
    }

    /**
     * isset info
     *
     * The routing direction and city airports for the direction.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInfo($index)
    {
        return isset($this->info[$index]);
    }

    /**
     * unset info
     *
     * The routing direction and city airports for the direction.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInfo($index)
    {
        unset($this->info[$index]);
    }

    /**
     * Gets as info
     *
     * The routing direction and city airports for the direction.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\RoutingAType\InfoAType[]
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * The routing direction and city airports for the direction.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType\RoutingAType\InfoAType[]
     * $info
     * @return self
     */
    public function setInfo(array $info)
    {
        $this->info = $info;

        return $this;
    }


}

