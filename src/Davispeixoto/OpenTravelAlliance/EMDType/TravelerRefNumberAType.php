<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType;

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


}

