<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailRQ;

/**
 * Class representing ResponseFilterAType
 */
class ResponseFilterAType
{

    /**
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * LocationAddressPhoneIndicator is set to true, then information regarding the
     * Location address and telephone number(s) should be included in the response.
     *  false
     *
     * @property boolean $locationAddressPhoneIndicator
     */
    private $locationAddressPhoneIndicator = null;

    /**
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * LocationInfoIndicator is set to true, then information regarding the Location
     * should be included in the response.
     *  false
     *
     * @property boolean $locationInfoIndicator
     */
    private $locationInfoIndicator = null;

    /**
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * VehiclesIndicator is set to true, then information regarding the Vehicles should
     * be included in the response.
     *  false
     *
     * @property boolean $vehiclesIndicator
     */
    private $vehiclesIndicator = null;

    /**
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * RequirementsIndicator is set to true, then information regarding the rental
     * requirements should be included in the response.
     *  false
     *
     * @property boolean $requirementsIndicator
     */
    private $requirementsIndicator = null;

    /**
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * AdditionalFeesIndicator is set to true, then information regarding the
     * additoinal fees should be included in the response.
     *  false
     *
     * @property boolean $additionalFeesIndicator
     */
    private $additionalFeesIndicator = null;

    /**
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * LiabilitiesIndicator is set to true, then information regarding the rental
     * liabilites should be included in the response.
     *  false
     *
     * @property boolean $liabilitiesIndicator
     */
    private $liabilitiesIndicator = null;

    /**
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * ServicesOfferedIndicator is set to true, then information regarding the services
     * offered should be included in the response.
     *  false
     *
     * @property boolean $servicesOfferedIndicator
     */
    private $servicesOfferedIndicator = null;

    /**
     * Gets as locationAddressPhoneIndicator
     *
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * LocationAddressPhoneIndicator is set to true, then information regarding the
     * Location address and telephone number(s) should be included in the response.
     *  false
     *
     * @return boolean
     */
    public function getLocationAddressPhoneIndicator()
    {
        return $this->locationAddressPhoneIndicator;
    }

    /**
     * Sets a new locationAddressPhoneIndicator
     *
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * LocationAddressPhoneIndicator is set to true, then information regarding the
     * Location address and telephone number(s) should be included in the response.
     *  false
     *
     * @param boolean $locationAddressPhoneIndicator
     * @return self
     */
    public function setLocationAddressPhoneIndicator($locationAddressPhoneIndicator)
    {
        $this->locationAddressPhoneIndicator = $locationAddressPhoneIndicator;

        return $this;
    }

    /**
     * Gets as locationInfoIndicator
     *
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * LocationInfoIndicator is set to true, then information regarding the Location
     * should be included in the response.
     *  false
     *
     * @return boolean
     */
    public function getLocationInfoIndicator()
    {
        return $this->locationInfoIndicator;
    }

    /**
     * Sets a new locationInfoIndicator
     *
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * LocationInfoIndicator is set to true, then information regarding the Location
     * should be included in the response.
     *  false
     *
     * @param boolean $locationInfoIndicator
     * @return self
     */
    public function setLocationInfoIndicator($locationInfoIndicator)
    {
        $this->locationInfoIndicator = $locationInfoIndicator;

        return $this;
    }

    /**
     * Gets as vehiclesIndicator
     *
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * VehiclesIndicator is set to true, then information regarding the Vehicles should
     * be included in the response.
     *  false
     *
     * @return boolean
     */
    public function getVehiclesIndicator()
    {
        return $this->vehiclesIndicator;
    }

    /**
     * Sets a new vehiclesIndicator
     *
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * VehiclesIndicator is set to true, then information regarding the Vehicles should
     * be included in the response.
     *  false
     *
     * @param boolean $vehiclesIndicator
     * @return self
     */
    public function setVehiclesIndicator($vehiclesIndicator)
    {
        $this->vehiclesIndicator = $vehiclesIndicator;

        return $this;
    }

    /**
     * Gets as requirementsIndicator
     *
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * RequirementsIndicator is set to true, then information regarding the rental
     * requirements should be included in the response.
     *  false
     *
     * @return boolean
     */
    public function getRequirementsIndicator()
    {
        return $this->requirementsIndicator;
    }

    /**
     * Sets a new requirementsIndicator
     *
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * RequirementsIndicator is set to true, then information regarding the rental
     * requirements should be included in the response.
     *  false
     *
     * @param boolean $requirementsIndicator
     * @return self
     */
    public function setRequirementsIndicator($requirementsIndicator)
    {
        $this->requirementsIndicator = $requirementsIndicator;

        return $this;
    }

    /**
     * Gets as additionalFeesIndicator
     *
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * AdditionalFeesIndicator is set to true, then information regarding the
     * additoinal fees should be included in the response.
     *  false
     *
     * @return boolean
     */
    public function getAdditionalFeesIndicator()
    {
        return $this->additionalFeesIndicator;
    }

    /**
     * Sets a new additionalFeesIndicator
     *
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * AdditionalFeesIndicator is set to true, then information regarding the
     * additoinal fees should be included in the response.
     *  false
     *
     * @param boolean $additionalFeesIndicator
     * @return self
     */
    public function setAdditionalFeesIndicator($additionalFeesIndicator)
    {
        $this->additionalFeesIndicator = $additionalFeesIndicator;

        return $this;
    }

    /**
     * Gets as liabilitiesIndicator
     *
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * LiabilitiesIndicator is set to true, then information regarding the rental
     * liabilites should be included in the response.
     *  false
     *
     * @return boolean
     */
    public function getLiabilitiesIndicator()
    {
        return $this->liabilitiesIndicator;
    }

    /**
     * Sets a new liabilitiesIndicator
     *
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * LiabilitiesIndicator is set to true, then information regarding the rental
     * liabilites should be included in the response.
     *  false
     *
     * @param boolean $liabilitiesIndicator
     * @return self
     */
    public function setLiabilitiesIndicator($liabilitiesIndicator)
    {
        $this->liabilitiesIndicator = $liabilitiesIndicator;

        return $this;
    }

    /**
     * Gets as servicesOfferedIndicator
     *
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * ServicesOfferedIndicator is set to true, then information regarding the services
     * offered should be included in the response.
     *  false
     *
     * @return boolean
     */
    public function getServicesOfferedIndicator()
    {
        return $this->servicesOfferedIndicator;
    }

    /**
     * Sets a new servicesOfferedIndicator
     *
     * This attribute may be used when a full response is not required, and the
     * requestor wishes to indicate which sections of the policies are required. If
     * ServicesOfferedIndicator is set to true, then information regarding the services
     * offered should be included in the response.
     *  false
     *
     * @param boolean $servicesOfferedIndicator
     * @return self
     */
    public function setServicesOfferedIndicator($servicesOfferedIndicator)
    {
        $this->servicesOfferedIndicator = $servicesOfferedIndicator;

        return $this;
    }


}

