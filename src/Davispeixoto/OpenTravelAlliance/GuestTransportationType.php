<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GuestTransportationType
 *
 * Specifies the guest transportation type.
 * XSD Type: GuestTransportationType
 */
class GuestTransportationType
{

    /**
     * Transportation mode code. Refer to OpenTravel Code List Transportation Code
     * (TRP).
     *
     * @property string $mode
     */
    private $mode = null;

    /**
     * Status for the mode of transportation. Refer to OpenTravel Code table Status
     * (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * City or closest airport where the guest resides.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $guestCity
     */
    private $guestCity = null;

    /**
     * Specifies the gateway city for the cruise line (especially when the mode of
     * transportation is air).
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $gatewayCity
     */
    private $gatewayCity = null;

    /**
     * Gets as mode
     *
     * Transportation mode code. Refer to OpenTravel Code List Transportation Code
     * (TRP).
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * Transportation mode code. Refer to OpenTravel Code List Transportation Code
     * (TRP).
     *
     * @param string $mode
     * @return self
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Gets as status
     *
     * Status for the mode of transportation. Refer to OpenTravel Code table Status
     * (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Status for the mode of transportation. Refer to OpenTravel Code table Status
     * (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as guestCity
     *
     * City or closest airport where the guest resides.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getGuestCity()
    {
        return $this->guestCity;
    }

    /**
     * Sets a new guestCity
     *
     * City or closest airport where the guest resides.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $guestCity
     * @return self
     */
    public function setGuestCity(\Davispeixoto\OpenTravelAlliance\LocationType $guestCity)
    {
        $this->guestCity = $guestCity;

        return $this;
    }

    /**
     * Gets as gatewayCity
     *
     * Specifies the gateway city for the cruise line (especially when the mode of
     * transportation is air).
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getGatewayCity()
    {
        return $this->gatewayCity;
    }

    /**
     * Sets a new gatewayCity
     *
     * Specifies the gateway city for the cruise line (especially when the mode of
     * transportation is air).
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $gatewayCity
     * @return self
     */
    public function setGatewayCity(\Davispeixoto\OpenTravelAlliance\LocationType $gatewayCity)
    {
        $this->gatewayCity = $gatewayCity;

        return $this;
    }


}

