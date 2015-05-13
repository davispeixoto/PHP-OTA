<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing BillingInstructionType
 *
 * Hotel billing instructions definition.
 * XSD Type: BillingInstructionType
 */
class BillingInstructionType
{

    /**
     * Billing code.Example: FOODBEV21Note: This is the individual billing code that
     * applies to a set of instructions that are routed to a designated folio.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Associated authorization code.Example: AC201301Note: This is an authorization
     * code that is associated with the billing code.
     *
     * @property string $authorizationCode
     */
    private $authorizationCode = null;

    /**
     * Short description.Example: Food/BeverageNote: This short description may
     * describe the billing code or billing instructions.
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
     * Charge routing account number.Example: IBM2099
     *
     * @property string $accountNumber
     */
    private $accountNumber = null;

    /**
     * Billing code type.Example: CorporateNote: This is a string list of enumerations
     * with an "Other_" literal to support an open enumeration list. Use the "Other_"
     * value in combination with the @extension attribute to exchange a literal that is
     * not in the list and is known to your trading partners.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListReservationBillingType $type
     */
    private $type = null;

    /**
     * Gets as code
     *
     * Billing code.Example: FOODBEV21Note: This is the individual billing code that
     * applies to a set of instructions that are routed to a designated folio.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Billing code.Example: FOODBEV21Note: This is the individual billing code that
     * applies to a set of instructions that are routed to a designated folio.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as authorizationCode
     *
     * Associated authorization code.Example: AC201301Note: This is an authorization
     * code that is associated with the billing code.
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
     * Associated authorization code.Example: AC201301Note: This is an authorization
     * code that is associated with the billing code.
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
     * Short description.Example: Food/BeverageNote: This short description may
     * describe the billing code or billing instructions.
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
     * Short description.Example: Food/BeverageNote: This short description may
     * describe the billing code or billing instructions.
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
     * Charge routing account number.Example: IBM2099
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
     * Charge routing account number.Example: IBM2099
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
     * Gets as type
     *
     * Billing code type.Example: CorporateNote: This is a string list of enumerations
     * with an "Other_" literal to support an open enumeration list. Use the "Other_"
     * value in combination with the @extension attribute to exchange a literal that is
     * not in the list and is known to your trading partners.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListReservationBillingType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Billing code type.Example: CorporateNote: This is a string list of enumerations
     * with an "Other_" literal to support an open enumeration list. Use the "Other_"
     * value in combination with the @extension attribute to exchange a literal that is
     * not in the list and is known to your trading partners.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListReservationBillingType $type
     * @return self
     */
    public function setType(\Davispeixoto\OpenTravelAlliance\ListReservationBillingType $type)
    {
        $this->type = $type;

        return $this;
    }


}

