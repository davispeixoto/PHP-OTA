<?php

namespace Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType;

/**
 * Class representing MediaAType
 */
class MediaAType
{

    /**
     * Type of media that is used as a qualifier when searching for properties. Refer
     * to OpenTravel Code list Content Code (CTT).
     *
     * @property string $contentCode
     */
    private $contentCode = null;

    /**
     * Gets as contentCode
     *
     * Type of media that is used as a qualifier when searching for properties. Refer
     * to OpenTravel Code list Content Code (CTT).
     *
     * @return string
     */
    public function getContentCode()
    {
        return $this->contentCode;
    }

    /**
     * Sets a new contentCode
     *
     * Type of media that is used as a qualifier when searching for properties. Refer
     * to OpenTravel Code list Content Code (CTT).
     *
     * @param string $contentCode
     * @return self
     */
    public function setContentCode($contentCode)
    {
        $this->contentCode = $contentCode;

        return $this;
    }


}

