<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType;

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
     * The routing direction and city airports for the direction.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\RoutingAType\InfoAType[]
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
     * Adds as info
     *
     * The routing direction and city airports for the direction.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\RoutingAType\InfoAType
     * $info
     */
    public function addToInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\RoutingAType\InfoAType $info
    ) {
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
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\RoutingAType\InfoAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\RoutingAType\InfoAType[]
     * $info
     * @return self
     */
    public function setInfo(array $info)
    {
        $this->info = $info;

        return $this;
    }


}

