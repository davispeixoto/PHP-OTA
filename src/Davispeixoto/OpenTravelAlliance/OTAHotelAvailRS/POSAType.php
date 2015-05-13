<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS;

/**
 * Class representing POSAType
 */
class POSAType
{

    /**
     * Source MUST be used to specify details regarding the requestor.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\POSAType\SourceAType
     * $source
     */
    private $source = null;

    /**
     * Gets as source
     *
     * Source MUST be used to specify details regarding the requestor.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\POSAType\SourceAType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Source MUST be used to specify details regarding the requestor.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\POSAType\SourceAType
     * $source
     * @return self
     */
    public function setSource(\Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\POSAType\SourceAType $source)
    {
        $this->source = $source;

        return $this;
    }


}

