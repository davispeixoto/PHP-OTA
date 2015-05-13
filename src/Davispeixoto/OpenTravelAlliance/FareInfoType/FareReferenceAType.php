<?php

namespace Davispeixoto\OpenTravelAlliance\FareInfoType;

/**
 * Class representing FareReferenceAType
 */
class FareReferenceAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Identifies the class of service for the specified fare basis code.
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * Specifies the discount code applicable to the fare that is associated with this
     * fare basis code.
     *
     * @property string $ticketDesignatorCode
     */
    private $ticketDesignatorCode = null;

    /**
     * A code to uniquely identify a fare account.
     *
     * @property string $accountCode
     */
    private $accountCode = null;

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
     * Gets as resBookDesigCode
     *
     * Identifies the class of service for the specified fare basis code.
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
     * Identifies the class of service for the specified fare basis code.
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
     * Gets as ticketDesignatorCode
     *
     * Specifies the discount code applicable to the fare that is associated with this
     * fare basis code.
     *
     * @return string
     */
    public function getTicketDesignatorCode()
    {
        return $this->ticketDesignatorCode;
    }

    /**
     * Sets a new ticketDesignatorCode
     *
     * Specifies the discount code applicable to the fare that is associated with this
     * fare basis code.
     *
     * @param string $ticketDesignatorCode
     * @return self
     */
    public function setTicketDesignatorCode($ticketDesignatorCode)
    {
        $this->ticketDesignatorCode = $ticketDesignatorCode;

        return $this;
    }

    /**
     * Gets as accountCode
     *
     * A code to uniquely identify a fare account.
     *
     * @return string
     */
    public function getAccountCode()
    {
        return $this->accountCode;
    }

    /**
     * Sets a new accountCode
     *
     * A code to uniquely identify a fare account.
     *
     * @param string $accountCode
     * @return self
     */
    public function setAccountCode($accountCode)
    {
        $this->accountCode = $accountCode;

        return $this;
    }


}

