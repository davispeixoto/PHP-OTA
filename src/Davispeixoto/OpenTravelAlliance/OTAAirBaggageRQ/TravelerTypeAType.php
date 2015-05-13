<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ;

/**
 * Class representing TravelerTypeAType
 */
class TravelerTypeAType
{

    /**
     * This is used to specify age in years.
     *
     * @property integer $age
     */
    private $age = null;

    /**
     * Refer to OpenTravel Code List Age Qualifying Code (AQC), Rail Passenger Type
     * Code (PXC), or use StringLength1to8 with CodeContext to use a non-OpenTravel
     * Code.
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
     * Identifies the location of the code table.
     *
     * @property string $uRI
     */
    private $uRI = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Traveler Type Reference ID.Example: 1Note: This is a unique reference ID for one
     * traveler that is set here and may be referenced elsewhere in this
     * message.OpenTravel Best Practice: Using Reference Place Holders: The reference
     * place holder (RPH) is a unique ID assigned to an instance in a collection of
     * like items (e.g. used to assign a unique ID to each passenger in a list of
     * passengers. When referencing an RPH, the same RPH type is used to identify the
     * assigned unique ID in an element that references the item in a collection.
     *
     * @property string $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * Gets as age
     *
     * This is used to specify age in years.
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * This is used to specify age in years.
     *
     * @param integer $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Gets as code
     *
     * Refer to OpenTravel Code List Age Qualifying Code (AQC), Rail Passenger Type
     * Code (PXC), or use StringLength1to8 with CodeContext to use a non-OpenTravel
     * Code.
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
     * Refer to OpenTravel Code List Age Qualifying Code (AQC), Rail Passenger Type
     * Code (PXC), or use StringLength1to8 with CodeContext to use a non-OpenTravel
     * Code.
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
     * Gets as travelerRPH
     *
     * Traveler Type Reference ID.Example: 1Note: This is a unique reference ID for one
     * traveler that is set here and may be referenced elsewhere in this
     * message.OpenTravel Best Practice: Using Reference Place Holders: The reference
     * place holder (RPH) is a unique ID assigned to an instance in a collection of
     * like items (e.g. used to assign a unique ID to each passenger in a list of
     * passengers. When referencing an RPH, the same RPH type is used to identify the
     * assigned unique ID in an element that references the item in a collection.
     *
     * @return string
     */
    public function getTravelerRPH()
    {
        return $this->travelerRPH;
    }

    /**
     * Sets a new travelerRPH
     *
     * Traveler Type Reference ID.Example: 1Note: This is a unique reference ID for one
     * traveler that is set here and may be referenced elsewhere in this
     * message.OpenTravel Best Practice: Using Reference Place Holders: The reference
     * place holder (RPH) is a unique ID assigned to an instance in a collection of
     * like items (e.g. used to assign a unique ID to each passenger in a list of
     * passengers. When referencing an RPH, the same RPH type is used to identify the
     * assigned unique ID in an element that references the item in a collection.
     *
     * @param string $travelerRPH
     * @return self
     */
    public function setTravelerRPH($travelerRPH)
    {
        $this->travelerRPH = $travelerRPH;

        return $this;
    }


}

