<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReadRQ;

/**
 * Class representing POSAType
 */
class POSAType
{

    /**
     * Source MUST be used to specify details regarding the requestor.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAReadRQ\POSAType\SourceAType
     * $source
     */
    private $source = null;

    /**
     * Gets as source
     *
     * Source MUST be used to specify details regarding the requestor.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAReadRQ\POSAType\SourceAType
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
     * @param \Davispeixoto\OpenTravelAlliance\OTAReadRQ\POSAType\SourceAType $source
     * @return self
     */
    public function setSource(\Davispeixoto\OpenTravelAlliance\OTAReadRQ\POSAType\SourceAType $source)
    {
        $this->source = $source;

        return $this;
    }


}

