<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ;

/**
 * Class representing CruiseLinePrefsAType
 */
class CruiseLinePrefsAType
{

    /**
     * Specifies sailing preferences such as cruise line and ship code.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\CruiseLinePrefsAType\CruiseLinePrefAType[]
     * $cruiseLinePref
     */
    private $cruiseLinePref = null;

    /**
     * Adds as cruiseLinePref
     *
     * Specifies sailing preferences such as cruise line and ship code.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\CruiseLinePrefsAType\CruiseLinePrefAType
     * $cruiseLinePref
     */
    public function addToCruiseLinePref(
        \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\CruiseLinePrefsAType\CruiseLinePrefAType $cruiseLinePref
    ) {
        $this->cruiseLinePref[] = $cruiseLinePref;

        return $this;
    }

    /**
     * isset cruiseLinePref
     *
     * Specifies sailing preferences such as cruise line and ship code.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCruiseLinePref($index)
    {
        return isset($this->cruiseLinePref[$index]);
    }

    /**
     * unset cruiseLinePref
     *
     * Specifies sailing preferences such as cruise line and ship code.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCruiseLinePref($index)
    {
        unset($this->cruiseLinePref[$index]);
    }

    /**
     * Gets as cruiseLinePref
     *
     * Specifies sailing preferences such as cruise line and ship code.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\CruiseLinePrefsAType\CruiseLinePrefAType[]
     */
    public function getCruiseLinePref()
    {
        return $this->cruiseLinePref;
    }

    /**
     * Sets a new cruiseLinePref
     *
     * Specifies sailing preferences such as cruise line and ship code.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\CruiseLinePrefsAType\CruiseLinePrefAType[]
     * $cruiseLinePref
     * @return self
     */
    public function setCruiseLinePref(array $cruiseLinePref)
    {
        $this->cruiseLinePref = $cruiseLinePref;

        return $this;
    }


}

