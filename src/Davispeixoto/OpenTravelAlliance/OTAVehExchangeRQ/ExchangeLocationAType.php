<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehExchangeRQ;

use Davispeixoto\OpenTravelAlliance\LocationType;

/**
 * Class representing ExchangeLocationAType
 */
class ExchangeLocationAType extends LocationType
{

    /**
     * Provides the date and time when the actual exchange occurred.
     *
     * @property \DateTime $exchangeDateTime
     */
    private $exchangeDateTime = null;

    /**
     * Gets as exchangeDateTime
     *
     * Provides the date and time when the actual exchange occurred.
     *
     * @return \DateTime
     */
    public function getExchangeDateTime()
    {
        return $this->exchangeDateTime;
    }

    /**
     * Sets a new exchangeDateTime
     *
     * Provides the date and time when the actual exchange occurred.
     *
     * @param \DateTime $exchangeDateTime
     * @return self
     */
    public function setExchangeDateTime(\DateTime $exchangeDateTime)
    {
        $this->exchangeDateTime = $exchangeDateTime;

        return $this;
    }


}

