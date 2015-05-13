<?php

namespace Davispeixoto\OpenTravelAlliance\AirItineraryType\OriginDestinationOptionsAType;

use Davispeixoto\OpenTravelAlliance\OriginDestinationOptionType;

/**
 * Class representing OriginDestinationOptionAType
 */
class OriginDestinationOptionAType extends OriginDestinationOptionType
{

    /**
     * When a PricedItinerary element contains multiple solutions and a single price,
     * this attribute identifies the OriginDestinationPair from the request.
     *
     * @property integer $refNumber
     */
    private $refNumber = null;

    /**
     * Unique ID for ths origin/ destination pair.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Used to indicate the purpose, whether for business, personal or other. Refer to
     * OpenTravel Code List Travel Purpose (TVP).
     *
     * @property string $travelPurpose
     */
    private $travelPurpose = null;

    /**
     * Gets as refNumber
     *
     * When a PricedItinerary element contains multiple solutions and a single price,
     * this attribute identifies the OriginDestinationPair from the request.
     *
     * @return integer
     */
    public function getRefNumber()
    {
        return $this->refNumber;
    }

    /**
     * Sets a new refNumber
     *
     * When a PricedItinerary element contains multiple solutions and a single price,
     * this attribute identifies the OriginDestinationPair from the request.
     *
     * @param integer $refNumber
     * @return self
     */
    public function setRefNumber($refNumber)
    {
        $this->refNumber = $refNumber;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * Unique ID for ths origin/ destination pair.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Unique ID for ths origin/ destination pair.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as travelPurpose
     *
     * Used to indicate the purpose, whether for business, personal or other. Refer to
     * OpenTravel Code List Travel Purpose (TVP).
     *
     * @return string
     */
    public function getTravelPurpose()
    {
        return $this->travelPurpose;
    }

    /**
     * Sets a new travelPurpose
     *
     * Used to indicate the purpose, whether for business, personal or other. Refer to
     * OpenTravel Code List Travel Purpose (TVP).
     *
     * @param string $travelPurpose
     * @return self
     */
    public function setTravelPurpose($travelPurpose)
    {
        $this->travelPurpose = $travelPurpose;

        return $this;
    }


}

