<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OperatingAirlineType
 *
 * Identifies the operating carrier and flight number.
 * XSD Type: OperatingAirlineType
 */
class OperatingAirlineType extends CompanyNameType
{

    /**
     * The flight number as assigned by the operating carrier.
     *
     * @property string $flightNumber
     */
    private $flightNumber = null;

    /**
     * The reservation booking designator of the operating carrier when different from
     * the marketing carrier.
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * If true, the information pertains to the marketing flight. If false, the
     * information pertains to the operating flight.
     *
     * @property boolean $marketingInd
     */
    private $marketingInd = null;

    /**
     * Identifies the Booked RBD. This may be different than the ticket class. RBD
     * stands for reservation booking designator.
     *
     * @property string $bookedRBD
     */
    private $bookedRBD = null;

    /**
     * Identifies the ticketed RBD. This may be different than the ticket class. RBD
     * stands for reservation booking designator.
     *
     * @property string $ticketedRBD
     */
    private $ticketedRBD = null;

    /**
     * Standard mileage that can be accrued for this flight (if flown by the
     * passenger). This does not include bonus miles.
     *
     * @property string $frequentFlierMiles
     */
    private $frequentFlierMiles = null;

    /**
     * Gets as flightNumber
     *
     * The flight number as assigned by the operating carrier.
     *
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * Sets a new flightNumber
     *
     * The flight number as assigned by the operating carrier.
     *
     * @param string $flightNumber
     * @return self
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * Gets as resBookDesigCode
     *
     * The reservation booking designator of the operating carrier when different from
     * the marketing carrier.
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
     * The reservation booking designator of the operating carrier when different from
     * the marketing carrier.
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
     * Gets as marketingInd
     *
     * If true, the information pertains to the marketing flight. If false, the
     * information pertains to the operating flight.
     *
     * @return boolean
     */
    public function getMarketingInd()
    {
        return $this->marketingInd;
    }

    /**
     * Sets a new marketingInd
     *
     * If true, the information pertains to the marketing flight. If false, the
     * information pertains to the operating flight.
     *
     * @param boolean $marketingInd
     * @return self
     */
    public function setMarketingInd($marketingInd)
    {
        $this->marketingInd = $marketingInd;

        return $this;
    }

    /**
     * Gets as bookedRBD
     *
     * Identifies the Booked RBD. This may be different than the ticket class. RBD
     * stands for reservation booking designator.
     *
     * @return string
     */
    public function getBookedRBD()
    {
        return $this->bookedRBD;
    }

    /**
     * Sets a new bookedRBD
     *
     * Identifies the Booked RBD. This may be different than the ticket class. RBD
     * stands for reservation booking designator.
     *
     * @param string $bookedRBD
     * @return self
     */
    public function setBookedRBD($bookedRBD)
    {
        $this->bookedRBD = $bookedRBD;

        return $this;
    }

    /**
     * Gets as ticketedRBD
     *
     * Identifies the ticketed RBD. This may be different than the ticket class. RBD
     * stands for reservation booking designator.
     *
     * @return string
     */
    public function getTicketedRBD()
    {
        return $this->ticketedRBD;
    }

    /**
     * Sets a new ticketedRBD
     *
     * Identifies the ticketed RBD. This may be different than the ticket class. RBD
     * stands for reservation booking designator.
     *
     * @param string $ticketedRBD
     * @return self
     */
    public function setTicketedRBD($ticketedRBD)
    {
        $this->ticketedRBD = $ticketedRBD;

        return $this;
    }

    /**
     * Gets as frequentFlierMiles
     *
     * Standard mileage that can be accrued for this flight (if flown by the
     * passenger). This does not include bonus miles.
     *
     * @return string
     */
    public function getFrequentFlierMiles()
    {
        return $this->frequentFlierMiles;
    }

    /**
     * Sets a new frequentFlierMiles
     *
     * Standard mileage that can be accrued for this flight (if flown by the
     * passenger). This does not include bonus miles.
     *
     * @param string $frequentFlierMiles
     * @return self
     */
    public function setFrequentFlierMiles($frequentFlierMiles)
    {
        $this->frequentFlierMiles = $frequentFlierMiles;

        return $this;
    }


}

