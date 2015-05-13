<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VerificationType
 *
 * Collection of data used to ensure the correct reservation is canceled or
 * modified (e.g. in the case of a hotel reservation modification, a CustLoyalty/
 * MembershipID would be verified as part of the reservation that you plan to
 * modify to ensure the correct reservation is being modified).
 * XSD Type: VerificationType
 */
class VerificationType
{

    /**
     * Detailed name information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VerificationType\PersonNameAType
     * $personName
     */
    private $personName = null;

    /**
     * Information on an email address.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EmailType $email
     */
    private $email = null;

    /**
     * Information on a telephone number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VerificationType\TelephoneInfoAType
     * $telephoneInfo
     */
    private $telephoneInfo = null;

    /**
     * Payment Card information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentCardType $paymentCard
     */
    private $paymentCard = null;

    /**
     * Detailed information on an address.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressInfoType $addressInfo
     */
    private $addressInfo = null;

    /**
     * Loyalty program information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VerificationType\CustLoyaltyAType[]
     * $custLoyalty
     */
    private $custLoyalty = null;

    /**
     * Vendor or vendors associated with the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $vendor
     */
    private $vendor = null;

    /**
     * The start and end date of the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VerificationType\ReservationTimeSpanAType
     * $reservationTimeSpan
     */
    private $reservationTimeSpan = null;

    /**
     * Quantity or quantities that are associated with the reservation (e.g., number of
     * seats, number of rooms, number of people).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VerificationType\AssociatedQuantityAType[]
     * $associatedQuantity
     */
    private $associatedQuantity = null;

    /**
     * Start location associated with the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VerificationType\StartLocationAType
     * $startLocation
     */
    private $startLocation = null;

    /**
     * End location associated with the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VerificationType\EndLocationAType
     * $endLocation
     */
    private $endLocation = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as personName
     *
     * Detailed name information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VerificationType\PersonNameAType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * Detailed name information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VerificationType\PersonNameAType
     * $personName
     * @return self
     */
    public function setPersonName(\Davispeixoto\OpenTravelAlliance\VerificationType\PersonNameAType $personName)
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * Gets as email
     *
     * Information on an email address.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EmailType
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Information on an email address.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EmailType $email
     * @return self
     */
    public function setEmail(\Davispeixoto\OpenTravelAlliance\EmailType $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets as telephoneInfo
     *
     * Information on a telephone number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VerificationType\TelephoneInfoAType
     */
    public function getTelephoneInfo()
    {
        return $this->telephoneInfo;
    }

    /**
     * Sets a new telephoneInfo
     *
     * Information on a telephone number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VerificationType\TelephoneInfoAType
     * $telephoneInfo
     * @return self
     */
    public function setTelephoneInfo(
        \Davispeixoto\OpenTravelAlliance\VerificationType\TelephoneInfoAType $telephoneInfo
    ) {
        $this->telephoneInfo = $telephoneInfo;

        return $this;
    }

    /**
     * Gets as paymentCard
     *
     * Payment Card information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentCardType
     */
    public function getPaymentCard()
    {
        return $this->paymentCard;
    }

    /**
     * Sets a new paymentCard
     *
     * Payment Card information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentCardType $paymentCard
     * @return self
     */
    public function setPaymentCard(\Davispeixoto\OpenTravelAlliance\PaymentCardType $paymentCard)
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }

    /**
     * Gets as addressInfo
     *
     * Detailed information on an address.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressInfoType
     */
    public function getAddressInfo()
    {
        return $this->addressInfo;
    }

    /**
     * Sets a new addressInfo
     *
     * Detailed information on an address.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressInfoType $addressInfo
     * @return self
     */
    public function setAddressInfo(\Davispeixoto\OpenTravelAlliance\AddressInfoType $addressInfo)
    {
        $this->addressInfo = $addressInfo;

        return $this;
    }

    /**
     * Adds as custLoyalty
     *
     * Loyalty program information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VerificationType\CustLoyaltyAType
     * $custLoyalty
     */
    public function addToCustLoyalty(\Davispeixoto\OpenTravelAlliance\VerificationType\CustLoyaltyAType $custLoyalty)
    {
        $this->custLoyalty[] = $custLoyalty;

        return $this;
    }

    /**
     * isset custLoyalty
     *
     * Loyalty program information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustLoyalty($index)
    {
        return isset($this->custLoyalty[$index]);
    }

    /**
     * unset custLoyalty
     *
     * Loyalty program information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustLoyalty($index)
    {
        unset($this->custLoyalty[$index]);
    }

    /**
     * Gets as custLoyalty
     *
     * Loyalty program information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VerificationType\CustLoyaltyAType[]
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * Loyalty program information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VerificationType\CustLoyaltyAType[]
     * $custLoyalty
     * @return self
     */
    public function setCustLoyalty(array $custLoyalty)
    {
        $this->custLoyalty = $custLoyalty;

        return $this;
    }

    /**
     * Adds as vendor
     *
     * Vendor or vendors associated with the reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor
     */
    public function addToVendor(\Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor)
    {
        $this->vendor[] = $vendor;

        return $this;
    }

    /**
     * isset vendor
     *
     * Vendor or vendors associated with the reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendor($index)
    {
        return isset($this->vendor[$index]);
    }

    /**
     * unset vendor
     *
     * Vendor or vendors associated with the reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendor($index)
    {
        unset($this->vendor[$index]);
    }

    /**
     * Gets as vendor
     *
     * Vendor or vendors associated with the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType[]
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets a new vendor
     *
     * Vendor or vendors associated with the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $vendor
     * @return self
     */
    public function setVendor(array $vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Gets as reservationTimeSpan
     *
     * The start and end date of the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VerificationType\ReservationTimeSpanAType
     */
    public function getReservationTimeSpan()
    {
        return $this->reservationTimeSpan;
    }

    /**
     * Sets a new reservationTimeSpan
     *
     * The start and end date of the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VerificationType\ReservationTimeSpanAType
     * $reservationTimeSpan
     * @return self
     */
    public function setReservationTimeSpan(
        \Davispeixoto\OpenTravelAlliance\VerificationType\ReservationTimeSpanAType $reservationTimeSpan
    ) {
        $this->reservationTimeSpan = $reservationTimeSpan;

        return $this;
    }

    /**
     * Adds as associatedQuantity
     *
     * Quantity or quantities that are associated with the reservation (e.g., number of
     * seats, number of rooms, number of people).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VerificationType\AssociatedQuantityAType
     * $associatedQuantity
     */
    public function addToAssociatedQuantity(
        \Davispeixoto\OpenTravelAlliance\VerificationType\AssociatedQuantityAType $associatedQuantity
    ) {
        $this->associatedQuantity[] = $associatedQuantity;

        return $this;
    }

    /**
     * isset associatedQuantity
     *
     * Quantity or quantities that are associated with the reservation (e.g., number of
     * seats, number of rooms, number of people).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAssociatedQuantity($index)
    {
        return isset($this->associatedQuantity[$index]);
    }

    /**
     * unset associatedQuantity
     *
     * Quantity or quantities that are associated with the reservation (e.g., number of
     * seats, number of rooms, number of people).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAssociatedQuantity($index)
    {
        unset($this->associatedQuantity[$index]);
    }

    /**
     * Gets as associatedQuantity
     *
     * Quantity or quantities that are associated with the reservation (e.g., number of
     * seats, number of rooms, number of people).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VerificationType\AssociatedQuantityAType[]
     */
    public function getAssociatedQuantity()
    {
        return $this->associatedQuantity;
    }

    /**
     * Sets a new associatedQuantity
     *
     * Quantity or quantities that are associated with the reservation (e.g., number of
     * seats, number of rooms, number of people).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VerificationType\AssociatedQuantityAType[]
     * $associatedQuantity
     * @return self
     */
    public function setAssociatedQuantity(array $associatedQuantity)
    {
        $this->associatedQuantity = $associatedQuantity;

        return $this;
    }

    /**
     * Gets as startLocation
     *
     * Start location associated with the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VerificationType\StartLocationAType
     */
    public function getStartLocation()
    {
        return $this->startLocation;
    }

    /**
     * Sets a new startLocation
     *
     * Start location associated with the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VerificationType\StartLocationAType
     * $startLocation
     * @return self
     */
    public function setStartLocation(
        \Davispeixoto\OpenTravelAlliance\VerificationType\StartLocationAType $startLocation
    ) {
        $this->startLocation = $startLocation;

        return $this;
    }

    /**
     * Gets as endLocation
     *
     * End location associated with the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VerificationType\EndLocationAType
     */
    public function getEndLocation()
    {
        return $this->endLocation;
    }

    /**
     * Sets a new endLocation
     *
     * End location associated with the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VerificationType\EndLocationAType
     * $endLocation
     * @return self
     */
    public function setEndLocation(\Davispeixoto\OpenTravelAlliance\VerificationType\EndLocationAType $endLocation)
    {
        $this->endLocation = $endLocation;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

