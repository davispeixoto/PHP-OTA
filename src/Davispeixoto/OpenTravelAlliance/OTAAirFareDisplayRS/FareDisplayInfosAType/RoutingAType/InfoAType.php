<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\RoutingAType;

/**
 * Class representing InfoAType
 */
class InfoAType
{

    /**
     * The direction of the routing, such as to or from.
     *
     * @property string $direction
     */
    private $direction = null;

    /**
     * The routing text associated with the direction.
     *
     * @property string $text
     */
    private $text = null;

    /**
     * Gets as direction
     *
     * The direction of the routing, such as to or from.
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Sets a new direction
     *
     * The direction of the routing, such as to or from.
     *
     * @param string $direction
     * @return self
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Gets as text
     *
     * The routing text associated with the direction.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * The routing text associated with the direction.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }


}

