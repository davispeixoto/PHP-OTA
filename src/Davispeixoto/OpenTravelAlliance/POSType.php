<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing POSType
 *
 * The POS MUST identify the party or connection channel making the request.
 * XSD Type: POS_Type
 */
class POSType
{

    /**
     * Source MUST be used to specify details regarding the requestor.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType $source
     */
    private $source = null;

    /**
     * Gets as source
     *
     * Source MUST be used to specify details regarding the requestor.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SourceType
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
     * @param \Davispeixoto\OpenTravelAlliance\SourceType $source
     * @return self
     */
    public function setSource(\Davispeixoto\OpenTravelAlliance\SourceType $source)
    {
        $this->source = $source;

        return $this;
    }


}

