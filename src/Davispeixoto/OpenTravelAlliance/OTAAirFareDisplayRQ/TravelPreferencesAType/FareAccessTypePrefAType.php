<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType;

/**
 * Class representing FareAccessTypePrefAType
 */
class FareAccessTypePrefAType
{

    /**
     * Fare calculation type (e.g. PointToPoint, Through, Joint, Private.)
     *
     * @property string $fareAccess
     */
    private $fareAccess = null;

    /**
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Container for multiple negotiated fare codes
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType\NegotiatedFareCodesAType\NegotiatedFareCodeAType[]
     * $negotiatedFareCodes
     */
    private $negotiatedFareCodes = null;

    /**
     * Gets as fareAccess
     *
     * Fare calculation type (e.g. PointToPoint, Through, Joint, Private.)
     *
     * @return string
     */
    public function getFareAccess()
    {
        return $this->fareAccess;
    }

    /**
     * Sets a new fareAccess
     *
     * Fare calculation type (e.g. PointToPoint, Through, Joint, Private.)
     *
     * @param string $fareAccess
     * @return self
     */
    public function setFareAccess($fareAccess)
    {
        $this->fareAccess = $fareAccess;

        return $this;
    }

    /**
     * Gets as preferLevel
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Adds as negotiatedFareCode
     *
     * Container for multiple negotiated fare codes
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType\NegotiatedFareCodesAType\NegotiatedFareCodeAType
     * $negotiatedFareCode
     */
    public function addToNegotiatedFareCodes(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType\NegotiatedFareCodesAType\NegotiatedFareCodeAType $negotiatedFareCode
    ) {
        $this->negotiatedFareCodes[] = $negotiatedFareCode;

        return $this;
    }

    /**
     * isset negotiatedFareCodes
     *
     * Container for multiple negotiated fare codes
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNegotiatedFareCodes($index)
    {
        return isset($this->negotiatedFareCodes[$index]);
    }

    /**
     * unset negotiatedFareCodes
     *
     * Container for multiple negotiated fare codes
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNegotiatedFareCodes($index)
    {
        unset($this->negotiatedFareCodes[$index]);
    }

    /**
     * Gets as negotiatedFareCodes
     *
     * Container for multiple negotiated fare codes
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType\NegotiatedFareCodesAType\NegotiatedFareCodeAType[]
     */
    public function getNegotiatedFareCodes()
    {
        return $this->negotiatedFareCodes;
    }

    /**
     * Sets a new negotiatedFareCodes
     *
     * Container for multiple negotiated fare codes
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType\NegotiatedFareCodesAType\NegotiatedFareCodeAType[]
     * $negotiatedFareCodes
     * @return self
     */
    public function setNegotiatedFareCodes(array $negotiatedFareCodes)
    {
        $this->negotiatedFareCodes = $negotiatedFareCodes;

        return $this;
    }


}

