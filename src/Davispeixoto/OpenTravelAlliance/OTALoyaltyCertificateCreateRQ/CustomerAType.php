<?php

namespace Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateCreateRQ;

use Davispeixoto\OpenTravelAlliance\PersonNameType;

/**
 * Class representing CustomerAType
 */
class CustomerAType extends PersonNameType
{

    /**
     * The Reference Place Holder (RPH) is an index code used to identify an instance
     * in a collection of like items (e.g. used to assign individual passengers or
     * clients to particular itinerary items).
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Booking class of this customer.
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * Reference to the flight for which the certificate is requested.
     *
     * @property string $flightRPH
     */
    private $flightRPH = null;

    /**
     * Gets as rPH
     *
     * The Reference Place Holder (RPH) is an index code used to identify an instance
     * in a collection of like items (e.g. used to assign individual passengers or
     * clients to particular itinerary items).
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * The Reference Place Holder (RPH) is an index code used to identify an instance
     * in a collection of like items (e.g. used to assign individual passengers or
     * clients to particular itinerary items).
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as resBookDesigCode
     *
     * Booking class of this customer.
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
     * Booking class of this customer.
     *
     * @param string $resBookDesigCode
     * @return self
     */
    public function setResBookDesigCode($resBookDesigCode)
    {
        $this->resBookDesigCode = $resBookDesigCode;

        return $this;
    }

    /**
     * Gets as flightRPH
     *
     * Reference to the flight for which the certificate is requested.
     *
     * @return string
     */
    public function getFlightRPH()
    {
        return $this->flightRPH;
    }

    /**
     * Sets a new flightRPH
     *
     * Reference to the flight for which the certificate is requested.
     *
     * @param string $flightRPH
     * @return self
     */
    public function setFlightRPH($flightRPH)
    {
        $this->flightRPH = $flightRPH;

        return $this;
    }


}

