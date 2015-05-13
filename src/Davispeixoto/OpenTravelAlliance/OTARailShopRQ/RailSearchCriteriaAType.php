<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailShopRQ;

use Davispeixoto\OpenTravelAlliance\TrainQueryType;

/**
 * Class representing RailSearchCriteriaAType
 */
class RailSearchCriteriaAType extends TrainQueryType
{

    /**
     * A reference to an identifier that was assigned in the OriginDestination/@RPH.
     *
     * @property string $oDRPH
     */
    private $oDRPH = null;

    /**
     * A reference to an identifier that was assigned in PassengerType/ @RPH.
     *
     * @property string $passengerRPH
     */
    private $passengerRPH = null;

    /**
     * Gets as oDRPH
     *
     * A reference to an identifier that was assigned in the OriginDestination/@RPH.
     *
     * @return string
     */
    public function getODRPH()
    {
        return $this->oDRPH;
    }

    /**
     * Sets a new oDRPH
     *
     * A reference to an identifier that was assigned in the OriginDestination/@RPH.
     *
     * @param string $oDRPH
     * @return self
     */
    public function setODRPH($oDRPH)
    {
        $this->oDRPH = $oDRPH;

        return $this;
    }

    /**
     * Gets as passengerRPH
     *
     * A reference to an identifier that was assigned in PassengerType/ @RPH.
     *
     * @return string
     */
    public function getPassengerRPH()
    {
        return $this->passengerRPH;
    }

    /**
     * Sets a new passengerRPH
     *
     * A reference to an identifier that was assigned in PassengerType/ @RPH.
     *
     * @param string $passengerRPH
     * @return self
     */
    public function setPassengerRPH($passengerRPH)
    {
        $this->passengerRPH = $passengerRPH;

        return $this;
    }


}

