<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirAvailRQ;

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
     * To specify a flight for this origin and destination for which availability is to
     * be checked.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirAvailRQ\OriginDestinationInformationAType\SpecificFlightInfoAType
     * $specificFlightInfo
     */
    private $specificFlightInfo = null;

    /**
     * Traveler preference information for this particular origin and destination.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType $travelPreferences
     */
    private $travelPreferences = null;

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
     * Gets as specificFlightInfo
     *
     * To specify a flight for this origin and destination for which availability is to
     * be checked.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirAvailRQ\OriginDestinationInformationAType\SpecificFlightInfoAType
     */
    public function getSpecificFlightInfo()
    {
        return $this->specificFlightInfo;
    }

    /**
     * Sets a new specificFlightInfo
     *
     * To specify a flight for this origin and destination for which availability is to
     * be checked.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirAvailRQ\OriginDestinationInformationAType\SpecificFlightInfoAType
     * $specificFlightInfo
     * @return self
     */
    public function setSpecificFlightInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirAvailRQ\OriginDestinationInformationAType\SpecificFlightInfoAType $specificFlightInfo
    ) {
        $this->specificFlightInfo = $specificFlightInfo;

        return $this;
    }

    /**
     * Gets as travelPreferences
     *
     * Traveler preference information for this particular origin and destination.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType
     */
    public function getTravelPreferences()
    {
        return $this->travelPreferences;
    }

    /**
     * Sets a new travelPreferences
     *
     * Traveler preference information for this particular origin and destination.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType $travelPreferences
     * @return self
     */
    public function setTravelPreferences(\Davispeixoto\OpenTravelAlliance\AirSearchPrefsType $travelPreferences)
    {
        $this->travelPreferences = $travelPreferences;

        return $this;
    }


}

