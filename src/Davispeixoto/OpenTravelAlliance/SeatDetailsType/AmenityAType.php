<?php

namespace Davispeixoto\OpenTravelAlliance\SeatDetailsType;

/**
 * Class representing AmenityAType
 */
class AmenityAType
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
     * An additional attribute to allow flexibility for particular organizations who
     * require an additional code.
     *
     * @property string $secondaryCode
     */
    private $secondaryCode = null;

    /**
     * An additional attribute to allow flexibility for particular organizations who
     * require an additional supplier code.
     *
     * @property string $supplierCode
     */
    private $supplierCode = null;

    /**
     * A description of the seat amenity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description
     */
    private $description = null;

    /**
     * Associated fees, taxes and description.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType $fee
     */
    private $fee = null;

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
     * Gets as secondaryCode
     *
     * An additional attribute to allow flexibility for particular organizations who
     * require an additional code.
     *
     * @return string
     */
    public function getSecondaryCode()
    {
        return $this->secondaryCode;
    }

    /**
     * Sets a new secondaryCode
     *
     * An additional attribute to allow flexibility for particular organizations who
     * require an additional code.
     *
     * @param string $secondaryCode
     * @return self
     */
    public function setSecondaryCode($secondaryCode)
    {
        $this->secondaryCode = $secondaryCode;

        return $this;
    }

    /**
     * Gets as supplierCode
     *
     * An additional attribute to allow flexibility for particular organizations who
     * require an additional supplier code.
     *
     * @return string
     */
    public function getSupplierCode()
    {
        return $this->supplierCode;
    }

    /**
     * Sets a new supplierCode
     *
     * An additional attribute to allow flexibility for particular organizations who
     * require an additional supplier code.
     *
     * @param string $supplierCode
     * @return self
     */
    public function setSupplierCode($supplierCode)
    {
        $this->supplierCode = $supplierCode;

        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the seat amenity.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextTextType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the seat amenity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as fee
     *
     * Associated fees, taxes and description.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * Associated fees, taxes and description.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $fee
     * @return self
     */
    public function setFee(\Davispeixoto\OpenTravelAlliance\FeeType $fee)
    {
        $this->fee = $fee;

        return $this;
    }


}

