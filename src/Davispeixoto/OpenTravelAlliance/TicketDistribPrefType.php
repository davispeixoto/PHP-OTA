<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TicketDistribPrefType
 *
 * Identifies a preference for a type of ticket distribution.
 * XSD Type: TicketDistribPrefType
 */
class TicketDistribPrefType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Ticket distribution method such as Fax, Email, Courier, Mail, Airport_Pickup,
     * City_Office, Hotel_Desk,
     *  WillCall, etc. Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @property string $distribType
     */
    private $distribType = null;

    /**
     * Ticket turnaround time desired, amount of time requested to deliver tickets.
     *
     * @property \DateInterval $ticketTime
     */
    private $ticketTime = null;

    /**
     * A remark associated with the ticket distribution preference.
     *
     * @property string $remark
     */
    private $remark = null;

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
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as distribType
     *
     * Ticket distribution method such as Fax, Email, Courier, Mail, Airport_Pickup,
     * City_Office, Hotel_Desk,
     *  WillCall, etc. Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @return string
     */
    public function getDistribType()
    {
        return $this->distribType;
    }

    /**
     * Sets a new distribType
     *
     * Ticket distribution method such as Fax, Email, Courier, Mail, Airport_Pickup,
     * City_Office, Hotel_Desk,
     *  WillCall, etc. Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @param string $distribType
     * @return self
     */
    public function setDistribType($distribType)
    {
        $this->distribType = $distribType;

        return $this;
    }

    /**
     * Gets as ticketTime
     *
     * Ticket turnaround time desired, amount of time requested to deliver tickets.
     *
     * @return \DateInterval
     */
    public function getTicketTime()
    {
        return $this->ticketTime;
    }

    /**
     * Sets a new ticketTime
     *
     * Ticket turnaround time desired, amount of time requested to deliver tickets.
     *
     * @param \DateInterval $ticketTime
     * @return self
     */
    public function setTicketTime(\DateInterval $ticketTime)
    {
        $this->ticketTime = $ticketTime;

        return $this;
    }

    /**
     * Gets as remark
     *
     * A remark associated with the ticket distribution preference.
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * A remark associated with the ticket distribution preference.
     *
     * @param string $remark
     * @return self
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }


}

