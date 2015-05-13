<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType;

/**
 * Class representing EmailAType
 */
class EmailAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * EmailType MUST specify the purpose of the e-mail address (e.g. personal,
     * business, listserve) and MUST refer to OpenTravel Code List Email Address Type
     * (EAT).
     *
     * @property string $emailType
     */
    private $emailType = null;

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
     * Gets as emailType
     *
     * EmailType MUST specify the purpose of the e-mail address (e.g. personal,
     * business, listserve) and MUST refer to OpenTravel Code List Email Address Type
     * (EAT).
     *
     * @return string
     */
    public function getEmailType()
    {
        return $this->emailType;
    }

    /**
     * Sets a new emailType
     *
     * EmailType MUST specify the purpose of the e-mail address (e.g. personal,
     * business, listserve) and MUST refer to OpenTravel Code List Email Address Type
     * (EAT).
     *
     * @param string $emailType
     * @return self
     */
    public function setEmailType($emailType)
    {
        $this->emailType = $emailType;

        return $this;
    }


}

