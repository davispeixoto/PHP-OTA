<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType;

/**
 * Class representing RecreationAType
 */
class RecreationAType
{

    /**
     * Defines a specific recreation . Used in conjuction with the Recreation Pref
     * attribute to state whether the recreation is preferred or required at the event
     * site. Refer to OpenTravel Code list Recreation Srvc Type (RST).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as code
     *
     * Defines a specific recreation . Used in conjuction with the Recreation Pref
     * attribute to state whether the recreation is preferred or required at the event
     * site. Refer to OpenTravel Code list Recreation Srvc Type (RST).
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
     * Defines a specific recreation . Used in conjuction with the Recreation Pref
     * attribute to state whether the recreation is preferred or required at the event
     * site. Refer to OpenTravel Code list Recreation Srvc Type (RST).
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
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
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
     * Used to indicate a level of preference for an associated item.
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

