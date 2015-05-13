<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirLowFareSearchRQ;

use Davispeixoto\OpenTravelAlliance\OriginDestinationInformationType;

/**
 * Class representing OriginDestinationInformationAType
 */
class OriginDestinationInformationAType extends OriginDestinationInformationType
{

    /**
     * A unique reference to this origin destination information.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * A unique reference to this origin destination information to be referenced
     * within the OTA_AirLowFareSearchRS message.
     *
     * @property integer $refNumber
     */
    private $refNumber = null;

    /**
     * Specifies alternate location(s) for the origin and/or destination.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirLowFareSearchRQ\OriginDestinationInformationAType\AlternateLocationInfoAType
     * $alternateLocationInfo
     */
    private $alternateLocationInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as rPH
     *
     * A unique reference to this origin destination information.
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
     * A unique reference to this origin destination information.
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
     * Gets as refNumber
     *
     * A unique reference to this origin destination information to be referenced
     * within the OTA_AirLowFareSearchRS message.
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
     * A unique reference to this origin destination information to be referenced
     * within the OTA_AirLowFareSearchRS message.
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
     * Gets as alternateLocationInfo
     *
     * Specifies alternate location(s) for the origin and/or destination.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirLowFareSearchRQ\OriginDestinationInformationAType\AlternateLocationInfoAType
     */
    public function getAlternateLocationInfo()
    {
        return $this->alternateLocationInfo;
    }

    /**
     * Sets a new alternateLocationInfo
     *
     * Specifies alternate location(s) for the origin and/or destination.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirLowFareSearchRQ\OriginDestinationInformationAType\AlternateLocationInfoAType
     * $alternateLocationInfo
     * @return self
     */
    public function setAlternateLocationInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirLowFareSearchRQ\OriginDestinationInformationAType\AlternateLocationInfoAType $alternateLocationInfo
    ) {
        $this->alternateLocationInfo = $alternateLocationInfo;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

