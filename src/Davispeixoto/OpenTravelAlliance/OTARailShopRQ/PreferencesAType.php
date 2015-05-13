<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailShopRQ;

use Davispeixoto\OpenTravelAlliance\RailAvailPrefsType;

/**
 * Class representing PreferencesAType
 */
class PreferencesAType extends RailAvailPrefsType
{

    /**
     * Indicates the maximum number of connections (if 0, then direct).
     *
     * @property integer $maxConnections
     */
    private $maxConnections = null;

    /**
     * The type of train to include in the response. Refer to OpenTravel code list
     * Train Type Code (TTC).
     *
     * @property string $trainTypeCode
     */
    private $trainTypeCode = null;

    /**
     * Gets as maxConnections
     *
     * Indicates the maximum number of connections (if 0, then direct).
     *
     * @return integer
     */
    public function getMaxConnections()
    {
        return $this->maxConnections;
    }

    /**
     * Sets a new maxConnections
     *
     * Indicates the maximum number of connections (if 0, then direct).
     *
     * @param integer $maxConnections
     * @return self
     */
    public function setMaxConnections($maxConnections)
    {
        $this->maxConnections = $maxConnections;

        return $this;
    }

    /**
     * Gets as trainTypeCode
     *
     * The type of train to include in the response. Refer to OpenTravel code list
     * Train Type Code (TTC).
     *
     * @return string
     */
    public function getTrainTypeCode()
    {
        return $this->trainTypeCode;
    }

    /**
     * Sets a new trainTypeCode
     *
     * The type of train to include in the response. Refer to OpenTravel code list
     * Train Type Code (TTC).
     *
     * @param string $trainTypeCode
     * @return self
     */
    public function setTrainTypeCode($trainTypeCode)
    {
        $this->trainTypeCode = $trainTypeCode;

        return $this;
    }


}

