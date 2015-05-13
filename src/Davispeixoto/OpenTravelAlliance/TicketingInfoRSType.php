<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TicketingInfoRSType
 *
 * Extends TicketingInfoType to provide an eTicketNumber. Minimum information about
 * ticketing required to complete the booking transaction plus eTicket number.
 * XSD Type: TicketingInfoRS_Type
 */
class TicketingInfoRSType extends TicketingInfoType
{

    /**
     * If reservation is electronically ticketed at time of booking, this is the field
     * for the eTicket number.
     *
     * @property string $eTicketNumber
     */
    private $eTicketNumber = null;

    /**
     * Gets as eTicketNumber
     *
     * If reservation is electronically ticketed at time of booking, this is the field
     * for the eTicket number.
     *
     * @return string
     */
    public function getETicketNumber()
    {
        return $this->eTicketNumber;
    }

    /**
     * Sets a new eTicketNumber
     *
     * If reservation is electronically ticketed at time of booking, this is the field
     * for the eTicket number.
     *
     * @param string $eTicketNumber
     * @return self
     */
    public function setETicketNumber($eTicketNumber)
    {
        $this->eTicketNumber = $eTicketNumber;

        return $this;
    }


}

