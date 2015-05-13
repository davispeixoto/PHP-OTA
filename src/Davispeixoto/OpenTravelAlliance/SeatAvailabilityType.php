<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SeatAvailabilityType
 *
 * Details of seat availability by class with optional charge information.
 * XSD Type: SeatAvailabilityType
 */
class SeatAvailabilityType
{

    /**
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Identifies the source authority for the code.
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Identifies the location of the code table.
     *
     * @property string $uRI
     */
    private $uRI = null;

    /**
     * A collection of seat prices. The charge element repeats to allow differential
     * charging according to, for exaample, age.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $charges
     */
    private $charges = null;

    /**
     * Gets as code
     *
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
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
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
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
     * Gets as codeContext
     *
     * Identifies the source authority for the code.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the source authority for the code.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as uRI
     *
     * Identifies the location of the code table.
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * Identifies the location of the code table.
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;

        return $this;
    }

    /**
     * Adds as charge
     *
     * A collection of seat prices. The charge element repeats to allow differential
     * charging according to, for exaample, age.
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
     * A collection of seat prices. The charge element repeats to allow differential
     * charging according to, for exaample, age.
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
     * A collection of seat prices. The charge element repeats to allow differential
     * charging according to, for exaample, age.
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
     * A collection of seat prices. The charge element repeats to allow differential
     * charging according to, for exaample, age.
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
     * A collection of seat prices. The charge element repeats to allow differential
     * charging according to, for exaample, age.
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

