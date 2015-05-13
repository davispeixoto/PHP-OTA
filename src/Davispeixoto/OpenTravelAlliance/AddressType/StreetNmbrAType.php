<?php

namespace Davispeixoto\OpenTravelAlliance\AddressType;

use Davispeixoto\OpenTravelAlliance\StreetNmbrType;

/**
 * Class representing StreetNmbrAType
 */
class StreetNmbrAType extends StreetNmbrType
{

    /**
     * Usually a letter right after the street number (A in 66-A, B in 123-B etc).
     *
     * @property string $streetNmbrSuffix
     */
    private $streetNmbrSuffix = null;

    /**
     * Street direction of an address (e.g., N, E, S, NW, SW).
     *
     * @property string $streetDirection
     */
    private $streetDirection = null;

    /**
     * Numerical equivalent of a rural township as defined within a given area (e.g.,
     * 12, 99).
     *
     * @property string $ruralRouteNmbr
     */
    private $ruralRouteNmbr = null;

    /**
     * Gets as streetNmbrSuffix
     *
     * Usually a letter right after the street number (A in 66-A, B in 123-B etc).
     *
     * @return string
     */
    public function getStreetNmbrSuffix()
    {
        return $this->streetNmbrSuffix;
    }

    /**
     * Sets a new streetNmbrSuffix
     *
     * Usually a letter right after the street number (A in 66-A, B in 123-B etc).
     *
     * @param string $streetNmbrSuffix
     * @return self
     */
    public function setStreetNmbrSuffix($streetNmbrSuffix)
    {
        $this->streetNmbrSuffix = $streetNmbrSuffix;

        return $this;
    }

    /**
     * Gets as streetDirection
     *
     * Street direction of an address (e.g., N, E, S, NW, SW).
     *
     * @return string
     */
    public function getStreetDirection()
    {
        return $this->streetDirection;
    }

    /**
     * Sets a new streetDirection
     *
     * Street direction of an address (e.g., N, E, S, NW, SW).
     *
     * @param string $streetDirection
     * @return self
     */
    public function setStreetDirection($streetDirection)
    {
        $this->streetDirection = $streetDirection;

        return $this;
    }

    /**
     * Gets as ruralRouteNmbr
     *
     * Numerical equivalent of a rural township as defined within a given area (e.g.,
     * 12, 99).
     *
     * @return string
     */
    public function getRuralRouteNmbr()
    {
        return $this->ruralRouteNmbr;
    }

    /**
     * Sets a new ruralRouteNmbr
     *
     * Numerical equivalent of a rural township as defined within a given area (e.g.,
     * 12, 99).
     *
     * @param string $ruralRouteNmbr
     * @return self
     */
    public function setRuralRouteNmbr($ruralRouteNmbr)
    {
        $this->ruralRouteNmbr = $ruralRouteNmbr;

        return $this;
    }


}

