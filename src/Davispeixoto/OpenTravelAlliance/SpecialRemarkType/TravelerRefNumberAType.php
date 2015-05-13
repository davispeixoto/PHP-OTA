<?php

namespace Davispeixoto\OpenTravelAlliance\SpecialRemarkType;

/**
 * Class representing TravelerRefNumberAType
 */
class TravelerRefNumberAType
{

    /**
     * A unique reference for the traveler.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Used to identify and associate travelers with the same surname.
     *
     * @property string $surnameRefNumber
     */
    private $surnameRefNumber = null;

    /**
     * Specifies whether this is the first or last traveler reference number in a
     * range.
     *
     * @property string $rangePosition
     */
    private $rangePosition = null;

    /**
     * Gets as rPH
     *
     * A unique reference for the traveler.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique reference for the traveler.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as surnameRefNumber
     *
     * Used to identify and associate travelers with the same surname.
     *
     * @return string
     */
    public function getSurnameRefNumber()
    {
        return $this->surnameRefNumber;
    }

    /**
     * Sets a new surnameRefNumber
     *
     * Used to identify and associate travelers with the same surname.
     *
     * @param string $surnameRefNumber
     * @return self
     */
    public function setSurnameRefNumber($surnameRefNumber)
    {
        $this->surnameRefNumber = $surnameRefNumber;

        return $this;
    }

    /**
     * Gets as rangePosition
     *
     * Specifies whether this is the first or last traveler reference number in a
     * range.
     *
     * @return string
     */
    public function getRangePosition()
    {
        return $this->rangePosition;
    }

    /**
     * Sets a new rangePosition
     *
     * Specifies whether this is the first or last traveler reference number in a
     * range.
     *
     * @param string $rangePosition
     * @return self
     */
    public function setRangePosition($rangePosition)
    {
        $this->rangePosition = $rangePosition;

        return $this;
    }


}

