<?php

namespace Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType;

/**
 * Class representing TicketFeeDetailAType
 */
class TicketFeeDetailAType
{

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * The ticket fee code.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType[]
     * $fee
     */
    private $fee = null;

    /**
     * Used to specify the total base fees, total taxes and total of both.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\TotalAType[]
     * $total
     */
    private $total = null;

    /**
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return integer
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param integer $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * Adds as fee
     *
     * The ticket fee code.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType
     * $fee
     */
    public function addToFee(
        \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType $fee
    ) {
        $this->fee[] = $fee;

        return $this;
    }

    /**
     * isset fee
     *
     * The ticket fee code.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * The ticket fee code.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * The ticket fee code.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * The ticket fee code.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType[]
     * $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Adds as total
     *
     * Used to specify the total base fees, total taxes and total of both.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\TotalAType
     * $total
     */
    public function addToTotal(
        \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\TotalAType $total
    ) {
        $this->total[] = $total;

        return $this;
    }

    /**
     * isset total
     *
     * Used to specify the total base fees, total taxes and total of both.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTotal($index)
    {
        return isset($this->total[$index]);
    }

    /**
     * unset total
     *
     * Used to specify the total base fees, total taxes and total of both.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTotal($index)
    {
        unset($this->total[$index]);
    }

    /**
     * Gets as total
     *
     * Used to specify the total base fees, total taxes and total of both.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\TotalAType[]
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * Used to specify the total base fees, total taxes and total of both.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\TotalAType[]
     * $total
     * @return self
     */
    public function setTotal(array $total)
    {
        $this->total = $total;

        return $this;
    }


}

