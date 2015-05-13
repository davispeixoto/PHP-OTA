<?php

namespace Davispeixoto\OpenTravelAlliance\LengthsOfStayType\LengthOfStayAType;

/**
 * Class representing LOSPatternAType
 */
class LOSPatternAType
{

    /**
     * This may be used when MinMaxMessageType is FullPatternLOS to identify the open
     * and closed status by LOS (e.g., if LengthsOfStay@FixedPatternLength="5" then
     * FullPatternLOS="YYNYY" or FullPatternLOS="11011").
     *
     * @property string $fullPatternLOS
     */
    private $fullPatternLOS = null;

    /**
     * Gets as fullPatternLOS
     *
     * This may be used when MinMaxMessageType is FullPatternLOS to identify the open
     * and closed status by LOS (e.g., if LengthsOfStay@FixedPatternLength="5" then
     * FullPatternLOS="YYNYY" or FullPatternLOS="11011").
     *
     * @return string
     */
    public function getFullPatternLOS()
    {
        return $this->fullPatternLOS;
    }

    /**
     * Sets a new fullPatternLOS
     *
     * This may be used when MinMaxMessageType is FullPatternLOS to identify the open
     * and closed status by LOS (e.g., if LengthsOfStay@FixedPatternLength="5" then
     * FullPatternLOS="YYNYY" or FullPatternLOS="11011").
     *
     * @param string $fullPatternLOS
     * @return self
     */
    public function setFullPatternLOS($fullPatternLOS)
    {
        $this->fullPatternLOS = $fullPatternLOS;

        return $this;
    }


}

