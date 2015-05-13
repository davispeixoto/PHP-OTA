<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehExchangeRS;

use Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType;

/**
 * Class representing ExchangeLocationDetailsAType
 */
class ExchangeLocationDetailsAType extends VehicleLocationDetailsType
{

    /**
     * Provides the date and time when the actual exchange occured.
     *
     * @property \DateTime $exchangeDateTime
     */
    private $exchangeDateTime = null;

    /**
     * Gets as exchangeDateTime
     *
     * Provides the date and time when the actual exchange occured.
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
     * Provides the date and time when the actual exchange occured.
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

