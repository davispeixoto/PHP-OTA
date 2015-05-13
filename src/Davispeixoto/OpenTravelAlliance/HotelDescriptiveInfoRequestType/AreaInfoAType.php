<?php

namespace Davispeixoto\OpenTravelAlliance\HotelDescriptiveInfoRequestType;

/**
 * Class representing AreaInfoAType
 */
class AreaInfoAType
{

    /**
     * Send this data. "True" means send the data.
     *
     * @property boolean $sendRefPoints
     */
    private $sendRefPoints = null;

    /**
     * Send this data. "True" means send the data.
     *
     * @property boolean $sendAttractions
     */
    private $sendAttractions = null;

    /**
     * Send this data. "True" means send the data.
     *
     * @property boolean $sendRecreations
     */
    private $sendRecreations = null;

    /**
     * Gets as sendRefPoints
     *
     * Send this data. "True" means send the data.
     *
     * @return boolean
     */
    public function getSendRefPoints()
    {
        return $this->sendRefPoints;
    }

    /**
     * Sets a new sendRefPoints
     *
     * Send this data. "True" means send the data.
     *
     * @param boolean $sendRefPoints
     * @return self
     */
    public function setSendRefPoints($sendRefPoints)
    {
        $this->sendRefPoints = $sendRefPoints;

        return $this;
    }

    /**
     * Gets as sendAttractions
     *
     * Send this data. "True" means send the data.
     *
     * @return boolean
     */
    public function getSendAttractions()
    {
        return $this->sendAttractions;
    }

    /**
     * Sets a new sendAttractions
     *
     * Send this data. "True" means send the data.
     *
     * @param boolean $sendAttractions
     * @return self
     */
    public function setSendAttractions($sendAttractions)
    {
        $this->sendAttractions = $sendAttractions;

        return $this;
    }

    /**
     * Gets as sendRecreations
     *
     * Send this data. "True" means send the data.
     *
     * @return boolean
     */
    public function getSendRecreations()
    {
        return $this->sendRecreations;
    }

    /**
     * Sets a new sendRecreations
     *
     * Send this data. "True" means send the data.
     *
     * @param boolean $sendRecreations
     * @return self
     */
    public function setSendRecreations($sendRecreations)
    {
        $this->sendRecreations = $sendRecreations;

        return $this;
    }


}

