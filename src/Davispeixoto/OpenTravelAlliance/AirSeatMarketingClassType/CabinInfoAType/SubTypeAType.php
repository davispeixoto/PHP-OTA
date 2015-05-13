<?php

namespace Davispeixoto\OpenTravelAlliance\AirSeatMarketingClassType\CabinInfoAType;

/**
 * Class representing SubTypeAType
 */
class SubTypeAType
{

    /**
     * A seat preference. Use a value from the OpenTravel Seat Type Preference (STP)
     * code list or enter a string value known to your trading partners.
     *
     * @property string $seatType
     */
    private $seatType = null;

    /**
     * The cabin class. Use a value from the enumerated list or enter a string value
     * that is known to your trading partners.
     *
     * @property string $classCode
     */
    private $classCode = null;

    /**
     * Gets as seatType
     *
     * A seat preference. Use a value from the OpenTravel Seat Type Preference (STP)
     * code list or enter a string value known to your trading partners.
     *
     * @return string
     */
    public function getSeatType()
    {
        return $this->seatType;
    }

    /**
     * Sets a new seatType
     *
     * A seat preference. Use a value from the OpenTravel Seat Type Preference (STP)
     * code list or enter a string value known to your trading partners.
     *
     * @param string $seatType
     * @return self
     */
    public function setSeatType($seatType)
    {
        $this->seatType = $seatType;

        return $this;
    }

    /**
     * Gets as classCode
     *
     * The cabin class. Use a value from the enumerated list or enter a string value
     * that is known to your trading partners.
     *
     * @return string
     */
    public function getClassCode()
    {
        return $this->classCode;
    }

    /**
     * Sets a new classCode
     *
     * The cabin class. Use a value from the enumerated list or enter a string value
     * that is known to your trading partners.
     *
     * @param string $classCode
     * @return self
     */
    public function setClassCode($classCode)
    {
        $this->classCode = $classCode;

        return $this;
    }


}

