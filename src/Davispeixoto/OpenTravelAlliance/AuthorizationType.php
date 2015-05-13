<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AuthorizationType
 *
 * Information with which a traveller's identification is verified and/or charges
 * are authorized.ToDo - this types should be moved to OTA_CommonTypes. It's
 * required in a common types file, since the both AuthRQ/RS use it.
 * XSD Type: AuthorizationType
 */
class AuthorizationType
{

    /**
     * The code associated with the company (e.g., two to three character airline
     * designator) submitting a request to an authorization vendor system.
     *
     * @property string $principalCompanyCode
     */
    private $principalCompanyCode = null;

    /**
     * A unique identifier for an authorization request. It may be used to link a
     * response to a corresponding request item.
     *
     * @property string $refNumber
     */
    private $refNumber = null;

    /**
     * Specifies check information about the customer seeking authorization.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AuthorizationType\CheckAuthorizationAType
     * $checkAuthorization
     */
    private $checkAuthorization = null;

    /**
     * Specifies credit card information about the customer seeking authorization.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AuthorizationType\CreditCardAuthorizationAType
     * $creditCardAuthorization
     */
    private $creditCardAuthorization = null;

    /**
     * Specifies account information about the customer seeking authorization.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AuthorizationType\AccountAuthorizationAType
     * $accountAuthorization
     */
    private $accountAuthorization = null;

    /**
     * Information used for validating a drivers license or for supporting a check or
     * credit card authorization request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DocumentType
     * $driversLicenseAuthorization
     */
    private $driversLicenseAuthorization = null;

    /**
     * The booking or confirmation number for which charges are being authorized.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AuthorizationType\BookingReferenceIDAType
     * $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * Gets as principalCompanyCode
     *
     * The code associated with the company (e.g., two to three character airline
     * designator) submitting a request to an authorization vendor system.
     *
     * @return string
     */
    public function getPrincipalCompanyCode()
    {
        return $this->principalCompanyCode;
    }

    /**
     * Sets a new principalCompanyCode
     *
     * The code associated with the company (e.g., two to three character airline
     * designator) submitting a request to an authorization vendor system.
     *
     * @param string $principalCompanyCode
     * @return self
     */
    public function setPrincipalCompanyCode($principalCompanyCode)
    {
        $this->principalCompanyCode = $principalCompanyCode;

        return $this;
    }

    /**
     * Gets as refNumber
     *
     * A unique identifier for an authorization request. It may be used to link a
     * response to a corresponding request item.
     *
     * @return string
     */
    public function getRefNumber()
    {
        return $this->refNumber;
    }

    /**
     * Sets a new refNumber
     *
     * A unique identifier for an authorization request. It may be used to link a
     * response to a corresponding request item.
     *
     * @param string $refNumber
     * @return self
     */
    public function setRefNumber($refNumber)
    {
        $this->refNumber = $refNumber;

        return $this;
    }

    /**
     * Gets as checkAuthorization
     *
     * Specifies check information about the customer seeking authorization.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AuthorizationType\CheckAuthorizationAType
     */
    public function getCheckAuthorization()
    {
        return $this->checkAuthorization;
    }

    /**
     * Sets a new checkAuthorization
     *
     * Specifies check information about the customer seeking authorization.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AuthorizationType\CheckAuthorizationAType
     * $checkAuthorization
     * @return self
     */
    public function setCheckAuthorization(
        \Davispeixoto\OpenTravelAlliance\AuthorizationType\CheckAuthorizationAType $checkAuthorization
    ) {
        $this->checkAuthorization = $checkAuthorization;

        return $this;
    }

    /**
     * Gets as creditCardAuthorization
     *
     * Specifies credit card information about the customer seeking authorization.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AuthorizationType\CreditCardAuthorizationAType
     */
    public function getCreditCardAuthorization()
    {
        return $this->creditCardAuthorization;
    }

    /**
     * Sets a new creditCardAuthorization
     *
     * Specifies credit card information about the customer seeking authorization.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AuthorizationType\CreditCardAuthorizationAType
     * $creditCardAuthorization
     * @return self
     */
    public function setCreditCardAuthorization(
        \Davispeixoto\OpenTravelAlliance\AuthorizationType\CreditCardAuthorizationAType $creditCardAuthorization
    ) {
        $this->creditCardAuthorization = $creditCardAuthorization;

        return $this;
    }

    /**
     * Gets as accountAuthorization
     *
     * Specifies account information about the customer seeking authorization.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AuthorizationType\AccountAuthorizationAType
     */
    public function getAccountAuthorization()
    {
        return $this->accountAuthorization;
    }

    /**
     * Sets a new accountAuthorization
     *
     * Specifies account information about the customer seeking authorization.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AuthorizationType\AccountAuthorizationAType
     * $accountAuthorization
     * @return self
     */
    public function setAccountAuthorization(
        \Davispeixoto\OpenTravelAlliance\AuthorizationType\AccountAuthorizationAType $accountAuthorization
    ) {
        $this->accountAuthorization = $accountAuthorization;

        return $this;
    }

    /**
     * Gets as driversLicenseAuthorization
     *
     * Information used for validating a drivers license or for supporting a check or
     * credit card authorization request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DocumentType
     */
    public function getDriversLicenseAuthorization()
    {
        return $this->driversLicenseAuthorization;
    }

    /**
     * Sets a new driversLicenseAuthorization
     *
     * Information used for validating a drivers license or for supporting a check or
     * credit card authorization request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DocumentType
     * $driversLicenseAuthorization
     * @return self
     */
    public function setDriversLicenseAuthorization(
        \Davispeixoto\OpenTravelAlliance\DocumentType $driversLicenseAuthorization
    ) {
        $this->driversLicenseAuthorization = $driversLicenseAuthorization;

        return $this;
    }

    /**
     * Gets as bookingReferenceID
     *
     * The booking or confirmation number for which charges are being authorized.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AuthorizationType\BookingReferenceIDAType
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * The booking or confirmation number for which charges are being authorized.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AuthorizationType\BookingReferenceIDAType
     * $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(
        \Davispeixoto\OpenTravelAlliance\AuthorizationType\BookingReferenceIDAType $bookingReferenceID
    ) {
        $this->bookingReferenceID = $bookingReferenceID;

        return $this;
    }


}

