<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleArrivalDetailsType
 *
 * The VehicleArrivalDetailsType complex type defines the information that
 * describes an arriving mode of transportation which is associated with the rental
 * of a vehicle. This is typically used to identify how the customer will be
 * arriving at the vehicle rental facility.
 * XSD Type: VehicleArrivalDetailsType
 */
class VehicleArrivalDetailsType
{

    /**
     * Refer to OpenTravel Code List Transportation Code (TRP).
     *
     * @property string $transportationCode
     */
    private $transportationCode = null;

    /**
     * Often used in conjunction with TransportationCode to provide greater detail
     * regarding the customer's arrival (e.g., an airline flight number).
     *
     * @property string $number
     */
    private $number = null;

    /**
     * @property \DateTime $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * Arrival point of the associated transportation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $arrivalLocation
     */
    private $arrivalLocation = null;

    /**
     * Identification of the company marketing the transportation
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingCompany
     */
    private $marketingCompany = null;

    /**
     * Identification of the company operating the transportation
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $operatingCompany
     */
    private $operatingCompany = null;

    /**
     * Gets as transportationCode
     *
     * Refer to OpenTravel Code List Transportation Code (TRP).
     *
     * @return string
     */
    public function getTransportationCode()
    {
        return $this->transportationCode;
    }

    /**
     * Sets a new transportationCode
     *
     * Refer to OpenTravel Code List Transportation Code (TRP).
     *
     * @param string $transportationCode
     * @return self
     */
    public function setTransportationCode($transportationCode)
    {
        $this->transportationCode = $transportationCode;

        return $this;
    }

    /**
     * Gets as number
     *
     * Often used in conjunction with TransportationCode to provide greater detail
     * regarding the customer's arrival (e.g., an airline flight number).
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Often used in conjunction with TransportationCode to provide greater detail
     * regarding the customer's arrival (e.g., an airline flight number).
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as arrivalDateTime
     *
     * @return \DateTime
     */
    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }

    /**
     * Sets a new arrivalDateTime
     *
     * @param \DateTime $arrivalDateTime
     * @return self
     */
    public function setArrivalDateTime(\DateTime $arrivalDateTime)
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * Gets as arrivalLocation
     *
     * Arrival point of the associated transportation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getArrivalLocation()
    {
        return $this->arrivalLocation;
    }

    /**
     * Sets a new arrivalLocation
     *
     * Arrival point of the associated transportation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $arrivalLocation
     * @return self
     */
    public function setArrivalLocation(\Davispeixoto\OpenTravelAlliance\LocationType $arrivalLocation)
    {
        $this->arrivalLocation = $arrivalLocation;

        return $this;
    }

    /**
     * Gets as marketingCompany
     *
     * Identification of the company marketing the transportation
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getMarketingCompany()
    {
        return $this->marketingCompany;
    }

    /**
     * Sets a new marketingCompany
     *
     * Identification of the company marketing the transportation
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingCompany
     * @return self
     */
    public function setMarketingCompany(\Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingCompany)
    {
        $this->marketingCompany = $marketingCompany;

        return $this;
    }

    /**
     * Gets as operatingCompany
     *
     * Identification of the company operating the transportation
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getOperatingCompany()
    {
        return $this->operatingCompany;
    }

    /**
     * Sets a new operatingCompany
     *
     * Identification of the company operating the transportation
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $operatingCompany
     * @return self
     */
    public function setOperatingCompany(\Davispeixoto\OpenTravelAlliance\CompanyNameType $operatingCompany)
    {
        $this->operatingCompany = $operatingCompany;

        return $this;
    }


}

