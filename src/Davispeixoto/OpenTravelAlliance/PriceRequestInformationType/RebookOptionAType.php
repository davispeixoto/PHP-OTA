<?php

namespace Davispeixoto\OpenTravelAlliance\PriceRequestInformationType;

/**
 * Class representing RebookOptionAType
 */
class RebookOptionAType
{

    /**
     * A reference to a booked flight segment.
     *
     * @property string $flightSegmentRPH
     */
    private $flightSegmentRPH = null;

    /**
     * The class of service in which the flight should be rebooked for a lower fare.
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * Gets as flightSegmentRPH
     *
     * A reference to a booked flight segment.
     *
     * @return string
     */
    public function getFlightSegmentRPH()
    {
        return $this->flightSegmentRPH;
    }

    /**
     * Sets a new flightSegmentRPH
     *
     * A reference to a booked flight segment.
     *
     * @param string $flightSegmentRPH
     * @return self
     */
    public function setFlightSegmentRPH($flightSegmentRPH)
    {
        $this->flightSegmentRPH = $flightSegmentRPH;

        return $this;
    }

    /**
     * Gets as resBookDesigCode
     *
     * The class of service in which the flight should be rebooked for a lower fare.
     *
     * @return string
     */
    public function getResBookDesigCode()
    {
        return $this->resBookDesigCode;
    }

    /**
     * Sets a new resBookDesigCode
     *
     * The class of service in which the flight should be rebooked for a lower fare.
     *
     * @param string $resBookDesigCode
     * @return self
     */
    public function setResBookDesigCode($resBookDesigCode)
    {
        $this->resBookDesigCode = $resBookDesigCode;

        return $this;
    }


}

