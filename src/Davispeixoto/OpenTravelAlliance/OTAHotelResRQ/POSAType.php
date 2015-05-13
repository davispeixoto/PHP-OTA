<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ;

/**
 * Class representing POSAType
 */
class POSAType
{

    /**
     * Source MUST be used to specify details regarding the requestor.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\POSAType\SourceAType
     * $source
     */
    private $source = null;

    /**
     * Gets as source
     *
     * Source MUST be used to specify details regarding the requestor.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\POSAType\SourceAType
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
     * @param \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\POSAType\SourceAType
     * $source
     * @return self
     */
    public function setSource(\Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\POSAType\SourceAType $source)
    {
        $this->source = $source;

        return $this;
    }


}

