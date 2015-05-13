<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailChargesType
 *
 * Defines a collection of individual charges associated with the rail journey.
 * XSD Type: RailChargesType
 */
class RailChargesType
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
     * Contains a total of the base amounts and an estimated total when all taxes and
     * fees are applied
     *
     * @property \Davispeixoto\OpenTravelAlliance\TotalType $total
     */
    private $total = null;

    /**
     * Information on the charges associated with this reservation. Such charges may
     * include the cost of the rail ticket, the cost of reserved seating, the cost of
     * sleeper accommodations, etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $charges
     */
    private $charges = null;

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
     * Gets as total
     *
     * Contains a total of the base amounts and an estimated total when all taxes and
     * fees are applied
     *
     * @return \Davispeixoto\OpenTravelAlliance\TotalType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * Contains a total of the base amounts and an estimated total when all taxes and
     * fees are applied
     *
     * @param \Davispeixoto\OpenTravelAlliance\TotalType $total
     * @return self
     */
    public function setTotal(\Davispeixoto\OpenTravelAlliance\TotalType $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Adds as charge
     *
     * Information on the charges associated with this reservation. Such charges may
     * include the cost of the rail ticket, the cost of reserved seating, the cost of
     * sleeper accommodations, etc.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $charge
     */
    public function addToCharges(\Davispeixoto\OpenTravelAlliance\FeeType $charge)
    {
        $this->charges[] = $charge;

        return $this;
    }

    /**
     * isset charges
     *
     * Information on the charges associated with this reservation. Such charges may
     * include the cost of the rail ticket, the cost of reserved seating, the cost of
     * sleeper accommodations, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCharges($index)
    {
        return isset($this->charges[$index]);
    }

    /**
     * unset charges
     *
     * Information on the charges associated with this reservation. Such charges may
     * include the cost of the rail ticket, the cost of reserved seating, the cost of
     * sleeper accommodations, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCharges($index)
    {
        unset($this->charges[$index]);
    }

    /**
     * Gets as charges
     *
     * Information on the charges associated with this reservation. Such charges may
     * include the cost of the rail ticket, the cost of reserved seating, the cost of
     * sleeper accommodations, etc.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getCharges()
    {
        return $this->charges;
    }

    /**
     * Sets a new charges
     *
     * Information on the charges associated with this reservation. Such charges may
     * include the cost of the rail ticket, the cost of reserved seating, the cost of
     * sleeper accommodations, etc.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $charges
     * @return self
     */
    public function setCharges(array $charges)
    {
        $this->charges = $charges;

        return $this;
    }


}

