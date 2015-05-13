<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AdjustmentsType
 *
 * AdjustmentsType.
 * XSD Type: AdjustmentsType
 */
class AdjustmentsType
{

    /**
     * @property string $requestID
     */
    private $requestID = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\AdjustmentsType\AdjustmentAType[]
     * $adjustment
     */
    private $adjustment = null;

    /**
     * Gets as requestID
     *
     * @return string
     */
    public function getRequestID()
    {
        return $this->requestID;
    }

    /**
     * Sets a new requestID
     *
     * @param string $requestID
     * @return self
     */
    public function setRequestID($requestID)
    {
        $this->requestID = $requestID;

        return $this;
    }

    /**
     * Adds as adjustment
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AdjustmentsType\AdjustmentAType
     * $adjustment
     */
    public function addToAdjustment(\Davispeixoto\OpenTravelAlliance\AdjustmentsType\AdjustmentAType $adjustment)
    {
        $this->adjustment[] = $adjustment;

        return $this;
    }

    /**
     * isset adjustment
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdjustment($index)
    {
        return isset($this->adjustment[$index]);
    }

    /**
     * unset adjustment
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdjustment($index)
    {
        unset($this->adjustment[$index]);
    }

    /**
     * Gets as adjustment
     *
     * @return \Davispeixoto\OpenTravelAlliance\AdjustmentsType\AdjustmentAType[]
     */
    public function getAdjustment()
    {
        return $this->adjustment;
    }

    /**
     * Sets a new adjustment
     *
     * @param \Davispeixoto\OpenTravelAlliance\AdjustmentsType\AdjustmentAType[]
     * $adjustment
     * @return self
     */
    public function setAdjustment(array $adjustment)
    {
        $this->adjustment = $adjustment;

        return $this;
    }


}

