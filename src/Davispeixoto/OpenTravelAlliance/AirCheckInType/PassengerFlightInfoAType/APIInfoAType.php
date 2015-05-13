<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType;

use Davispeixoto\OpenTravelAlliance\DocumentType;

/**
 * Class representing APIInfoAType
 */
class APIInfoAType extends DocumentType
{

    /**
     * Method for data input. For example, optical input (OCR reader) or manual input.
     *
     * @property string $aPIInfoSource
     */
    private $aPIInfoSource = null;

    /**
     * If true, the API info pertains to an infant.
     *
     * @property boolean $infantInd
     */
    private $infantInd = null;

    /**
     * State or Province where this passenger was born.
     *
     * @property string $birthStateProv
     */
    private $birthStateProv = null;

    /**
     * The city or location where this passenger was born. A person may have been born
     * in a place that has no city associated with it (e.g., a military base)
     *
     * .
     *
     * @property string $birthLocation
     */
    private $birthLocation = null;

    /**
     * The residence (home) or destination address of the passenger.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\APIInfoAType\AddressAType[]
     * $address
     */
    private $address = null;

    /**
     * Gets as aPIInfoSource
     *
     * Method for data input. For example, optical input (OCR reader) or manual input.
     *
     * @return string
     */
    public function getAPIInfoSource()
    {
        return $this->aPIInfoSource;
    }

    /**
     * Sets a new aPIInfoSource
     *
     * Method for data input. For example, optical input (OCR reader) or manual input.
     *
     * @param string $aPIInfoSource
     * @return self
     */
    public function setAPIInfoSource($aPIInfoSource)
    {
        $this->aPIInfoSource = $aPIInfoSource;

        return $this;
    }

    /**
     * Gets as infantInd
     *
     * If true, the API info pertains to an infant.
     *
     * @return boolean
     */
    public function getInfantInd()
    {
        return $this->infantInd;
    }

    /**
     * Sets a new infantInd
     *
     * If true, the API info pertains to an infant.
     *
     * @param boolean $infantInd
     * @return self
     */
    public function setInfantInd($infantInd)
    {
        $this->infantInd = $infantInd;

        return $this;
    }

    /**
     * Gets as birthStateProv
     *
     * State or Province where this passenger was born.
     *
     * @return string
     */
    public function getBirthStateProv()
    {
        return $this->birthStateProv;
    }

    /**
     * Sets a new birthStateProv
     *
     * State or Province where this passenger was born.
     *
     * @param string $birthStateProv
     * @return self
     */
    public function setBirthStateProv($birthStateProv)
    {
        $this->birthStateProv = $birthStateProv;

        return $this;
    }

    /**
     * Gets as birthLocation
     *
     * The city or location where this passenger was born. A person may have been born
     * in a place that has no city associated with it (e.g., a military base)
     *
     * .
     *
     * @return string
     */
    public function getBirthLocation()
    {
        return $this->birthLocation;
    }

    /**
     * Sets a new birthLocation
     *
     * The city or location where this passenger was born. A person may have been born
     * in a place that has no city associated with it (e.g., a military base)
     *
     * .
     *
     * @param string $birthLocation
     * @return self
     */
    public function setBirthLocation($birthLocation)
    {
        $this->birthLocation = $birthLocation;

        return $this;
    }

    /**
     * Adds as address
     *
     * The residence (home) or destination address of the passenger.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\APIInfoAType\AddressAType
     * $address
     */
    public function addToAddress(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\APIInfoAType\AddressAType $address
    ) {
        $this->address[] = $address;

        return $this;
    }

    /**
     * isset address
     *
     * The residence (home) or destination address of the passenger.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * The residence (home) or destination address of the passenger.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * The residence (home) or destination address of the passenger.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\APIInfoAType\AddressAType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * The residence (home) or destination address of the passenger.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\APIInfoAType\AddressAType[]
     * $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;

        return $this;
    }


}

