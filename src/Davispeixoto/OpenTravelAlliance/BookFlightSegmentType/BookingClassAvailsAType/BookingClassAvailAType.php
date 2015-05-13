<?php

namespace Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\BookingClassAvailsAType;

/**
 * Class representing BookingClassAvailAType
 */
class BookingClassAvailAType
{

    /**
     * Reservation Booking Designator (RBD) code (e.g. Y).
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * Seat quantity available for this Reservation Booking Designator (RBD).
     *
     * @property string $resBookDesigQuantity
     */
    private $resBookDesigQuantity = null;

    /**
     * Refer to OpenTravel Code List Res Book Designator Status Code (RBD). This
     * provides the status (e.g. waitlist open, available, available by direct request
     * to supplier only).
     *
     * @property string $resBookDesigStatusCode
     */
    private $resBookDesigStatusCode = null;

    /**
     * RPH refers back to Marketing Cabin Type.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as resBookDesigCode
     *
     * Reservation Booking Designator (RBD) code (e.g. Y).
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
     * Reservation Booking Designator (RBD) code (e.g. Y).
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
     * Gets as resBookDesigQuantity
     *
     * Seat quantity available for this Reservation Booking Designator (RBD).
     *
     * @return string
     */
    public function getResBookDesigQuantity()
    {
        return $this->resBookDesigQuantity;
    }

    /**
     * Sets a new resBookDesigQuantity
     *
     * Seat quantity available for this Reservation Booking Designator (RBD).
     *
     * @param string $resBookDesigQuantity
     * @return self
     */
    public function setResBookDesigQuantity($resBookDesigQuantity)
    {
        $this->resBookDesigQuantity = $resBookDesigQuantity;

        return $this;
    }

    /**
     * Gets as resBookDesigStatusCode
     *
     * Refer to OpenTravel Code List Res Book Designator Status Code (RBD). This
     * provides the status (e.g. waitlist open, available, available by direct request
     * to supplier only).
     *
     * @return string
     */
    public function getResBookDesigStatusCode()
    {
        return $this->resBookDesigStatusCode;
    }

    /**
     * Sets a new resBookDesigStatusCode
     *
     * Refer to OpenTravel Code List Res Book Designator Status Code (RBD). This
     * provides the status (e.g. waitlist open, available, available by direct request
     * to supplier only).
     *
     * @param string $resBookDesigStatusCode
     * @return self
     */
    public function setResBookDesigStatusCode($resBookDesigStatusCode)
    {
        $this->resBookDesigStatusCode = $resBookDesigStatusCode;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * RPH refers back to Marketing Cabin Type.
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
     * RPH refers back to Marketing Cabin Type.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }


}

