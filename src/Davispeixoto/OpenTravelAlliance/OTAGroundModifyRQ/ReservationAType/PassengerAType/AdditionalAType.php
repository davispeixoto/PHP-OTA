<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\PassengerAType;

use Davispeixoto\OpenTravelAlliance\ContactPersonType;

/**
 * Class representing AdditionalAType
 */
class AdditionalAType extends ContactPersonType
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
     * Used to define the specific type and quantity of additional person(s).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\PassengerAType\AdditionalAType\AdditionalTypeAType
     * $additionalType
     */
    private $additionalType = null;

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
     * Gets as additionalType
     *
     * Used to define the specific type and quantity of additional person(s).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\PassengerAType\AdditionalAType\AdditionalTypeAType
     */
    public function getAdditionalType()
    {
        return $this->additionalType;
    }

    /**
     * Sets a new additionalType
     *
     * Used to define the specific type and quantity of additional person(s).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\PassengerAType\AdditionalAType\AdditionalTypeAType
     * $additionalType
     * @return self
     */
    public function setAdditionalType(
        \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\PassengerAType\AdditionalAType\AdditionalTypeAType $additionalType
    ) {
        $this->additionalType = $additionalType;

        return $this;
    }


}

