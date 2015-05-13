<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SailingSearchQualifierType
 *
 * Search qualifiers that can be used to identify a cruise.
 * XSD Type: SailingSearchQualifierType
 */
class SailingSearchQualifierType extends SearchQualifierType
{

    /**
     * Provides information regarding the port.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SailingSearchQualifierType\PortAType
     * $port
     */
    private $port = null;

    /**
     * Gets as port
     *
     * Provides information regarding the port.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingSearchQualifierType\PortAType
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Sets a new port
     *
     * Provides information regarding the port.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingSearchQualifierType\PortAType
     * $port
     * @return self
     */
    public function setPort(\Davispeixoto\OpenTravelAlliance\SailingSearchQualifierType\PortAType $port)
    {
        $this->port = $port;

        return $this;
    }


}

