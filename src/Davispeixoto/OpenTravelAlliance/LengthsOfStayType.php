<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing LengthsOfStayType
 *
 * A collection of LengthOfStay.
 * XSD Type: LengthsOfStayType
 */
class LengthsOfStayType
{

    /**
     * True indicates that LOS is based on arrival date. False indicates that LOS is
     * based on stay date.
     *
     * @property boolean $arrivalDateBased
     */
    private $arrivalDateBased = null;

    /**
     * The number of elements in a fixed pattern length of stay (FPLOS) array.
     *
     * @property integer $fixedPatternLength
     */
    private $fixedPatternLength = null;

    /**
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @property \Davispeixoto\OpenTravelAlliance\LengthsOfStayType\LengthOfStayAType[]
     * $lengthOfStay
     */
    private $lengthOfStay = null;

    /**
     * Gets as arrivalDateBased
     *
     * True indicates that LOS is based on arrival date. False indicates that LOS is
     * based on stay date.
     *
     * @return boolean
     */
    public function getArrivalDateBased()
    {
        return $this->arrivalDateBased;
    }

    /**
     * Sets a new arrivalDateBased
     *
     * True indicates that LOS is based on arrival date. False indicates that LOS is
     * based on stay date.
     *
     * @param boolean $arrivalDateBased
     * @return self
     */
    public function setArrivalDateBased($arrivalDateBased)
    {
        $this->arrivalDateBased = $arrivalDateBased;

        return $this;
    }

    /**
     * Gets as fixedPatternLength
     *
     * The number of elements in a fixed pattern length of stay (FPLOS) array.
     *
     * @return integer
     */
    public function getFixedPatternLength()
    {
        return $this->fixedPatternLength;
    }

    /**
     * Sets a new fixedPatternLength
     *
     * The number of elements in a fixed pattern length of stay (FPLOS) array.
     *
     * @param integer $fixedPatternLength
     * @return self
     */
    public function setFixedPatternLength($fixedPatternLength)
    {
        $this->fixedPatternLength = $fixedPatternLength;

        return $this;
    }

    /**
     * Adds as lengthOfStay
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\LengthsOfStayType\LengthOfStayAType
     * $lengthOfStay
     */
    public function addToLengthOfStay(
        \Davispeixoto\OpenTravelAlliance\LengthsOfStayType\LengthOfStayAType $lengthOfStay
    ) {
        $this->lengthOfStay[] = $lengthOfStay;

        return $this;
    }

    /**
     * isset lengthOfStay
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLengthOfStay($index)
    {
        return isset($this->lengthOfStay[$index]);
    }

    /**
     * unset lengthOfStay
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLengthOfStay($index)
    {
        unset($this->lengthOfStay[$index]);
    }

    /**
     * Gets as lengthOfStay
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @return \Davispeixoto\OpenTravelAlliance\LengthsOfStayType\LengthOfStayAType[]
     */
    public function getLengthOfStay()
    {
        return $this->lengthOfStay;
    }

    /**
     * Sets a new lengthOfStay
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @param \Davispeixoto\OpenTravelAlliance\LengthsOfStayType\LengthOfStayAType[]
     * $lengthOfStay
     * @return self
     */
    public function setLengthOfStay(array $lengthOfStay)
    {
        $this->lengthOfStay = $lengthOfStay;

        return $this;
    }


}

