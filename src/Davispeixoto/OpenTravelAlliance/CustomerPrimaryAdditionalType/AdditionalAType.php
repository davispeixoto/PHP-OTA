<?php

namespace Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType;

use Davispeixoto\OpenTravelAlliance\CustomerType;

/**
 * Class representing AdditionalAType
 */
class AdditionalAType extends CustomerType
{

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
     * This is the name of the organization associated with the corporate discount
     * number.
     *
     * @property string $corpDiscountName
     */
    private $corpDiscountName = null;

    /**
     * This is the code used to identify if the additional driver is eligible for
     * benefits associated with a specific organization.
     *
     * @property string $corpDiscountNmbr
     */
    private $corpDiscountNmbr = null;

    /**
     * Used as a qualification for an additional driver.
     *
     * @property string $qualificationMethod
     */
    private $qualificationMethod = null;

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
     * Gets as corpDiscountName
     *
     * This is the name of the organization associated with the corporate discount
     * number.
     *
     * @return string
     */
    public function getCorpDiscountName()
    {
        return $this->corpDiscountName;
    }

    /**
     * Sets a new corpDiscountName
     *
     * This is the name of the organization associated with the corporate discount
     * number.
     *
     * @param string $corpDiscountName
     * @return self
     */
    public function setCorpDiscountName($corpDiscountName)
    {
        $this->corpDiscountName = $corpDiscountName;

        return $this;
    }

    /**
     * Gets as corpDiscountNmbr
     *
     * This is the code used to identify if the additional driver is eligible for
     * benefits associated with a specific organization.
     *
     * @return string
     */
    public function getCorpDiscountNmbr()
    {
        return $this->corpDiscountNmbr;
    }

    /**
     * Sets a new corpDiscountNmbr
     *
     * This is the code used to identify if the additional driver is eligible for
     * benefits associated with a specific organization.
     *
     * @param string $corpDiscountNmbr
     * @return self
     */
    public function setCorpDiscountNmbr($corpDiscountNmbr)
    {
        $this->corpDiscountNmbr = $corpDiscountNmbr;

        return $this;
    }

    /**
     * Gets as qualificationMethod
     *
     * Used as a qualification for an additional driver.
     *
     * @return string
     */
    public function getQualificationMethod()
    {
        return $this->qualificationMethod;
    }

    /**
     * Sets a new qualificationMethod
     *
     * Used as a qualification for an additional driver.
     *
     * @param string $qualificationMethod
     * @return self
     */
    public function setQualificationMethod($qualificationMethod)
    {
        $this->qualificationMethod = $qualificationMethod;

        return $this;
    }

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


}

