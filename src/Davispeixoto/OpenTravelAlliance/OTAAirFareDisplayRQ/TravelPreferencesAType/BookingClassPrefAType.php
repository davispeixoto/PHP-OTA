<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType;

/**
 * Class representing BookingClassPrefAType
 */
class BookingClassPrefAType
{

    /**
     * The booking class code.
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as resBookDesigCode
     *
     * The booking class code.
     *
     * @return string
     */
    public function getResBookDesigCode()
    {
        return $this->resBookDesigCode;
    }

    /**
     * Sets a new resBookDesigCode
     *
     * The booking class code.
     *
     * @param string $resBookDesigCode
     * @return self
     */
    public function setResBookDesigCode($resBookDesigCode)
    {
        $this->resBookDesigCode = $resBookDesigCode;

        return $this;
    }

    /**
     * Gets as preferLevel
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }


}

