<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\POSAType;

/**
 * Class representing SourceAType
 */
class SourceAType
{

    /**
     * ISOCountry identifies the country code of the requesting party and MUST conform
     * to ISO-3166. The country code of the requesting party MAY be used to refine
     * responses therefore it SHOULD reflect the origin of the Guest.
     *
     * @property string $iSOCountry
     */
    private $iSOCountry = null;

    /**
     * ISOCurrency MUST conform to ISO 4217, 3 character codes. OpenTravel RECOMMENDS
     * that the same currency code be used in the response, but responses MAY be
     * returned in any valid currency.
     *
     * @property string $iSOCurrency
     */
    private $iSOCurrency = null;

    /**
     * RequestorID MUST contain a globally unique identifier of the entity making the
     * request (e.g. ATA/IATA/ID number, Electronic Reservation Service Provider
     * (ERSP), Association of British Travel Agents (ABTA)). The combination of @ID and
     * @ID_Context MUST be unique.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\POSAType\SourceAType\RequestorIDAType
     * $requestorID
     */
    private $requestorID = null;

    /**
     * Gets as iSOCountry
     *
     * ISOCountry identifies the country code of the requesting party and MUST conform
     * to ISO-3166. The country code of the requesting party MAY be used to refine
     * responses therefore it SHOULD reflect the origin of the Guest.
     *
     * @return string
     */
    public function getISOCountry()
    {
        return $this->iSOCountry;
    }

    /**
     * Sets a new iSOCountry
     *
     * ISOCountry identifies the country code of the requesting party and MUST conform
     * to ISO-3166. The country code of the requesting party MAY be used to refine
     * responses therefore it SHOULD reflect the origin of the Guest.
     *
     * @param string $iSOCountry
     * @return self
     */
    public function setISOCountry($iSOCountry)
    {
        $this->iSOCountry = $iSOCountry;

        return $this;
    }

    /**
     * Gets as iSOCurrency
     *
     * ISOCurrency MUST conform to ISO 4217, 3 character codes. OpenTravel RECOMMENDS
     * that the same currency code be used in the response, but responses MAY be
     * returned in any valid currency.
     *
     * @return string
     */
    public function getISOCurrency()
    {
        return $this->iSOCurrency;
    }

    /**
     * Sets a new iSOCurrency
     *
     * ISOCurrency MUST conform to ISO 4217, 3 character codes. OpenTravel RECOMMENDS
     * that the same currency code be used in the response, but responses MAY be
     * returned in any valid currency.
     *
     * @param string $iSOCurrency
     * @return self
     */
    public function setISOCurrency($iSOCurrency)
    {
        $this->iSOCurrency = $iSOCurrency;

        return $this;
    }

    /**
     * Gets as requestorID
     *
     * RequestorID MUST contain a globally unique identifier of the entity making the
     * request (e.g. ATA/IATA/ID number, Electronic Reservation Service Provider
     * (ERSP), Association of British Travel Agents (ABTA)). The combination of @ID and
     * @ID_Context MUST be unique.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\POSAType\SourceAType\RequestorIDAType
     */
    public function getRequestorID()
    {
        return $this->requestorID;
    }

    /**
     * Sets a new requestorID
     *
     * RequestorID MUST contain a globally unique identifier of the entity making the
     * request (e.g. ATA/IATA/ID number, Electronic Reservation Service Provider
     * (ERSP), Association of British Travel Agents (ABTA)). The combination of @ID and
     * @ID_Context MUST be unique.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\POSAType\SourceAType\RequestorIDAType
     * $requestorID
     * @return self
     */
    public function setRequestorID(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\POSAType\SourceAType\RequestorIDAType $requestorID
    ) {
        $this->requestorID = $requestorID;

        return $this;
    }


}

