<?php

namespace Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType;

use Davispeixoto\OpenTravelAlliance\FareInfoType;

/**
 * Class representing FareInfoAType
 *
 * Information used to define a fare and its associated rules information.
 */
class FareInfoAType extends FareInfoType
{

    /**
     * The fare with cost breakdown.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareType $passengerFare
     */
    private $passengerFare = null;

    /**
     * Gets as passengerFare
     *
     * The fare with cost breakdown.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareType
     */
    public function getPassengerFare()
    {
        return $this->passengerFare;
    }

    /**
     * Sets a new passengerFare
     *
     * The fare with cost breakdown.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareType $passengerFare
     * @return self
     */
    public function setPassengerFare(\Davispeixoto\OpenTravelAlliance\FareType $passengerFare)
    {
        $this->passengerFare = $passengerFare;

        return $this;
    }


}

