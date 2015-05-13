<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType;

/**
 * Class representing NegotiatedFareCodesAType
 */
class NegotiatedFareCodesAType
{

    /**
     * Account code required to access fares
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType\NegotiatedFareCodesAType\NegotiatedFareCodeAType[]
     * $negotiatedFareCode
     */
    private $negotiatedFareCode = null;

    /**
     * Adds as negotiatedFareCode
     *
     * Account code required to access fares
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType\NegotiatedFareCodesAType\NegotiatedFareCodeAType
     * $negotiatedFareCode
     */
    public function addToNegotiatedFareCode(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType\NegotiatedFareCodesAType\NegotiatedFareCodeAType $negotiatedFareCode
    ) {
        $this->negotiatedFareCode[] = $negotiatedFareCode;

        return $this;
    }

    /**
     * isset negotiatedFareCode
     *
     * Account code required to access fares
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNegotiatedFareCode($index)
    {
        return isset($this->negotiatedFareCode[$index]);
    }

    /**
     * unset negotiatedFareCode
     *
     * Account code required to access fares
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNegotiatedFareCode($index)
    {
        unset($this->negotiatedFareCode[$index]);
    }

    /**
     * Gets as negotiatedFareCode
     *
     * Account code required to access fares
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType\NegotiatedFareCodesAType\NegotiatedFareCodeAType[]
     */
    public function getNegotiatedFareCode()
    {
        return $this->negotiatedFareCode;
    }

    /**
     * Sets a new negotiatedFareCode
     *
     * Account code required to access fares
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType\NegotiatedFareCodesAType\NegotiatedFareCodeAType[]
     * $negotiatedFareCode
     * @return self
     */
    public function setNegotiatedFareCode(array $negotiatedFareCode)
    {
        $this->negotiatedFareCode = $negotiatedFareCode;

        return $this;
    }


}

