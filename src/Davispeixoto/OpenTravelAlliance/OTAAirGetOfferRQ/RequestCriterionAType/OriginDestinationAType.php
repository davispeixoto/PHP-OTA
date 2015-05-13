<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType;

use Davispeixoto\OpenTravelAlliance\OriginDestinationInformationType;

/**
 * Class representing OriginDestinationAType
 */
class OriginDestinationAType extends OriginDestinationInformationType
{

    /**
     * A unique reference to this origin destination information.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Specifies alternate location(s) for the origin and/or destination.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\OriginDestinationAType\AlternateLocationInfoAType
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
     * Gets as alternateLocationInfo
     *
     * Specifies alternate location(s) for the origin and/or destination.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\OriginDestinationAType\AlternateLocationInfoAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\OriginDestinationAType\AlternateLocationInfoAType
     * $alternateLocationInfo
     * @return self
     */
    public function setAlternateLocationInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\OriginDestinationAType\AlternateLocationInfoAType $alternateLocationInfo
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

