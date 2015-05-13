<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirAvailRS;

use Davispeixoto\OpenTravelAlliance\OriginDestinationInformationType;

/**
 * Class representing OriginDestinationInformationAType
 */
class OriginDestinationInformationAType extends OriginDestinationInformationType
{

    /**
     * If true, the return departure must be from the same airport as the outbound
     * arrival.
     *
     * @property boolean $sameAirportInd
     */
    private $sameAirportInd = null;

    /**
     * Uniquely identifies this origin destination information.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * A container for origin destination option information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirAvailRS\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     * $originDestinationOptions
     */
    private $originDestinationOptions = null;

    /**
     * Gets as sameAirportInd
     *
     * If true, the return departure must be from the same airport as the outbound
     * arrival.
     *
     * @return boolean
     */
    public function getSameAirportInd()
    {
        return $this->sameAirportInd;
    }

    /**
     * Sets a new sameAirportInd
     *
     * If true, the return departure must be from the same airport as the outbound
     * arrival.
     *
     * @param boolean $sameAirportInd
     * @return self
     */
    public function setSameAirportInd($sameAirportInd)
    {
        $this->sameAirportInd = $sameAirportInd;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * Uniquely identifies this origin destination information.
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
     * Uniquely identifies this origin destination information.
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
     * Adds as originDestinationOption
     *
     * A container for origin destination option information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirAvailRS\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType
     * $originDestinationOption
     */
    public function addToOriginDestinationOptions(
        \Davispeixoto\OpenTravelAlliance\OTAAirAvailRS\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType $originDestinationOption
    ) {
        $this->originDestinationOptions[] = $originDestinationOption;

        return $this;
    }

    /**
     * isset originDestinationOptions
     *
     * A container for origin destination option information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginDestinationOptions($index)
    {
        return isset($this->originDestinationOptions[$index]);
    }

    /**
     * unset originDestinationOptions
     *
     * A container for origin destination option information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginDestinationOptions($index)
    {
        unset($this->originDestinationOptions[$index]);
    }

    /**
     * Gets as originDestinationOptions
     *
     * A container for origin destination option information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirAvailRS\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     */
    public function getOriginDestinationOptions()
    {
        return $this->originDestinationOptions;
    }

    /**
     * Sets a new originDestinationOptions
     *
     * A container for origin destination option information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirAvailRS\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     * $originDestinationOptions
     * @return self
     */
    public function setOriginDestinationOptions(array $originDestinationOptions)
    {
        $this->originDestinationOptions = $originDestinationOptions;

        return $this;
    }


}

