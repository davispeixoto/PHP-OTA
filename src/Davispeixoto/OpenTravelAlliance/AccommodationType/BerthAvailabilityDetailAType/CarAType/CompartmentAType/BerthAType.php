<?php

namespace Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType;

/**
 * Class representing BerthAType
 */
class BerthAType
{

    /**
     * The berth number.
     *
     * @property string $number
     */
    private $number = null;

    /**
     * The berth position, such as Lower and Middle.
     *
     * @property string $position
     */
    private $position = null;

    /**
     * When true, the berth is available.
     *
     * @property boolean $availableInd
     */
    private $availableInd = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as number
     *
     * The berth number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The berth number.
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as position
     *
     * The berth position, such as Lower and Middle.
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * The berth position, such as Lower and Middle.
     *
     * @param string $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Gets as availableInd
     *
     * When true, the berth is available.
     *
     * @return boolean
     */
    public function getAvailableInd()
    {
        return $this->availableInd;
    }

    /**
     * Sets a new availableInd
     *
     * When true, the berth is available.
     *
     * @param boolean $availableInd
     * @return self
     */
    public function setAvailableInd($availableInd)
    {
        $this->availableInd = $availableInd;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

