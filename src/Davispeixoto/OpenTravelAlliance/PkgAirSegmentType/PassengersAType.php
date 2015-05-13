<?php

namespace Davispeixoto\OpenTravelAlliance\PkgAirSegmentType;

/**
 * Class representing PassengersAType
 */
class PassengersAType
{

    /**
     * @property string[] $passengerRPH
     */
    private $passengerRPH = null;

    /**
     * Adds as passengerRPH
     *
     * @return self
     * @param string $passengerRPH
     */
    public function addToPassengerRPH($passengerRPH)
    {
        $this->passengerRPH[] = $passengerRPH;

        return $this;
    }

    /**
     * isset passengerRPH
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerRPH($index)
    {
        return isset($this->passengerRPH[$index]);
    }

    /**
     * unset passengerRPH
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerRPH($index)
    {
        unset($this->passengerRPH[$index]);
    }

    /**
     * Gets as passengerRPH
     *
     * @return string[]
     */
    public function getPassengerRPH()
    {
        return $this->passengerRPH;
    }

    /**
     * Sets a new passengerRPH
     *
     * @param string $passengerRPH
     * @return self
     */
    public function setPassengerRPH(array $passengerRPH)
    {
        $this->passengerRPH = $passengerRPH;

        return $this;
    }


}

