<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType;

/**
 * Class representing UnticketedPointInfoAType
 */
class UnticketedPointInfoAType
{

    /**
     * The airport or city code identifying an unticketed point which occurs between
     * the coupon origin and destination.
     *
     * @property string $cityAirportCode
     */
    private $cityAirportCode = null;

    /**
     * The date and time of arrival in GMT at the unticketed point.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $arrivalDate
     */
    private $arrivalDate = null;

    /**
     * The date and time of depature in GMT from the unticketed point.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $departureDate
     */
    private $departureDate = null;

    /**
     * The standard code of the quipment used for the coupon flight departing from the
     * unticketed point.
     *
     * @property string $airEquipType
     */
    private $airEquipType = null;

    /**
     * Gets as cityAirportCode
     *
     * The airport or city code identifying an unticketed point which occurs between
     * the coupon origin and destination.
     *
     * @return string
     */
    public function getCityAirportCode()
    {
        return $this->cityAirportCode;
    }

    /**
     * Sets a new cityAirportCode
     *
     * The airport or city code identifying an unticketed point which occurs between
     * the coupon origin and destination.
     *
     * @param string $cityAirportCode
     * @return self
     */
    public function setCityAirportCode($cityAirportCode)
    {
        $this->cityAirportCode = $cityAirportCode;

        return $this;
    }

    /**
     * Gets as arrivalDate
     *
     * The date and time of arrival in GMT at the unticketed point.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * Sets a new arrivalDate
     *
     * The date and time of arrival in GMT at the unticketed point.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $arrivalDate
     * @return self
     */
    public function setArrivalDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * Gets as departureDate
     *
     * The date and time of depature in GMT from the unticketed point.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Sets a new departureDate
     *
     * The date and time of depature in GMT from the unticketed point.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $departureDate
     * @return self
     */
    public function setDepartureDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Gets as airEquipType
     *
     * The standard code of the quipment used for the coupon flight departing from the
     * unticketed point.
     *
     * @return string
     */
    public function getAirEquipType()
    {
        return $this->airEquipType;
    }

    /**
     * Sets a new airEquipType
     *
     * The standard code of the quipment used for the coupon flight departing from the
     * unticketed point.
     *
     * @param string $airEquipType
     * @return self
     */
    public function setAirEquipType($airEquipType)
    {
        $this->airEquipType = $airEquipType;

        return $this;
    }


}

