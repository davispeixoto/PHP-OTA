<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailShopRQ;

/**
 * Class representing FareBasisCodeAType
 */
class FareBasisCodeAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * A reference to an identifier that was assigned in PassengerType/ @RPH.
     *
     * @property string $passengerRPH
     */
    private $passengerRPH = null;

    /**
     * A reference to an identifier that was assigned in OriginDestination/@RPH.
     *
     * @property string $oDRPH
     */
    private $oDRPH = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
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

    /**
     * Gets as oDRPH
     *
     * A reference to an identifier that was assigned in OriginDestination/@RPH.
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
     * A reference to an identifier that was assigned in OriginDestination/@RPH.
     *
     * @param string $oDRPH
     * @return self
     */
    public function setODRPH($oDRPH)
    {
        $this->oDRPH = $oDRPH;

        return $this;
    }


}

