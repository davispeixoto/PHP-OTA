<?php

namespace Davispeixoto\OpenTravelAlliance\HotelReservationType;

/**
 * Class representing BillingInstructionCodeAType
 */
class BillingInstructionCodeAType
{

    /**
     * The individual billing code that applies to a set of instructions that are
     * routed to a designated folio.
     *
     * @property string $billingCode
     */
    private $billingCode = null;

    /**
     * Used to define the type of the BillingCode, such as group, corporate and casino.
     * Refer to OpenTravel Code List Reservation Billing Type (RBT).
     *
     * @property string $billingType
     */
    private $billingType = null;

    /**
     * The authorization code associated with the billing code.
     *
     * @property string $authorizationCode
     */
    private $authorizationCode = null;

    /**
     * A short description of the billing code or instructions.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * Identifies the account number where the charges will be routed.
     *
     * @property string $accountNumber
     */
    private $accountNumber = null;

    /**
     * A reference to a guest ID object that may be defined in ResGuests/ResGuest
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelReservationType\BillingInstructionCodeAType\ResGuestRPHAType[]
     * $resGuestRPH
     */
    private $resGuestRPH = null;

    /**
     * Gets as billingCode
     *
     * The individual billing code that applies to a set of instructions that are
     * routed to a designated folio.
     *
     * @return string
     */
    public function getBillingCode()
    {
        return $this->billingCode;
    }

    /**
     * Sets a new billingCode
     *
     * The individual billing code that applies to a set of instructions that are
     * routed to a designated folio.
     *
     * @param string $billingCode
     * @return self
     */
    public function setBillingCode($billingCode)
    {
        $this->billingCode = $billingCode;

        return $this;
    }

    /**
     * Gets as billingType
     *
     * Used to define the type of the BillingCode, such as group, corporate and casino.
     * Refer to OpenTravel Code List Reservation Billing Type (RBT).
     *
     * @return string
     */
    public function getBillingType()
    {
        return $this->billingType;
    }

    /**
     * Sets a new billingType
     *
     * Used to define the type of the BillingCode, such as group, corporate and casino.
     * Refer to OpenTravel Code List Reservation Billing Type (RBT).
     *
     * @param string $billingType
     * @return self
     */
    public function setBillingType($billingType)
    {
        $this->billingType = $billingType;

        return $this;
    }

    /**
     * Gets as authorizationCode
     *
     * The authorization code associated with the billing code.
     *
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * Sets a new authorizationCode
     *
     * The authorization code associated with the billing code.
     *
     * @param string $authorizationCode
     * @return self
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;

        return $this;
    }

    /**
     * Gets as description
     *
     * A short description of the billing code or instructions.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A short description of the billing code or instructions.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as accountNumber
     *
     * Identifies the account number where the charges will be routed.
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * Identifies the account number where the charges will be routed.
     *
     * @param string $accountNumber
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Adds as resGuestRPH
     *
     * A reference to a guest ID object that may be defined in ResGuests/ResGuest
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelReservationType\BillingInstructionCodeAType\ResGuestRPHAType
     * $resGuestRPH
     */
    public function addToResGuestRPH(
        \Davispeixoto\OpenTravelAlliance\HotelReservationType\BillingInstructionCodeAType\ResGuestRPHAType $resGuestRPH
    ) {
        $this->resGuestRPH[] = $resGuestRPH;

        return $this;
    }

    /**
     * isset resGuestRPH
     *
     * A reference to a guest ID object that may be defined in ResGuests/ResGuest
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResGuestRPH($index)
    {
        return isset($this->resGuestRPH[$index]);
    }

    /**
     * unset resGuestRPH
     *
     * A reference to a guest ID object that may be defined in ResGuests/ResGuest
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResGuestRPH($index)
    {
        unset($this->resGuestRPH[$index]);
    }

    /**
     * Gets as resGuestRPH
     *
     * A reference to a guest ID object that may be defined in ResGuests/ResGuest
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelReservationType\BillingInstructionCodeAType\ResGuestRPHAType[]
     */
    public function getResGuestRPH()
    {
        return $this->resGuestRPH;
    }

    /**
     * Sets a new resGuestRPH
     *
     * A reference to a guest ID object that may be defined in ResGuests/ResGuest
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelReservationType\BillingInstructionCodeAType\ResGuestRPHAType[]
     * $resGuestRPH
     * @return self
     */
    public function setResGuestRPH(array $resGuestRPH)
    {
        $this->resGuestRPH = $resGuestRPH;

        return $this;
    }


}

