<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CommissionEventType
 *
 * The CommissionEvent element is used to identify the commission to be paid to a
 * central server. The Commission Event is initiated on the schedule that the hotel
 * typically pays commissions (e.g.: following night audit), and a CommissionEvent
 * occurs for every check out.
 * XSD Type: CommissionEventType
 */
class CommissionEventType
{

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * A monetary amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * @property string $confirmationID
     */
    private $confirmationID = null;

    /**
     * @property string $confirmationOriginatorCode
     */
    private $confirmationOriginatorCode = null;

    /**
     * @property string $commissionOriginatorCode
     */
    private $commissionOriginatorCode = null;

    /**
     * @property string $reservationID
     */
    private $reservationID = null;

    /**
     * @property \DateTime $originalBookingDate
     */
    private $originalBookingDate = null;

    /**
     * Indicates the preferred currency of the commission to be paid.
     *
     * @property string $preferredPaymentCurrency
     */
    private $preferredPaymentCurrency = null;

    /**
     * @property string $marketCode
     */
    private $marketCode = null;

    /**
     * @property string $bookingSource
     */
    private $bookingSource = null;

    /**
     * @property integer $numberOfRooms
     */
    private $numberOfRooms = null;

    /**
     * @property string $roomInventoryCode
     */
    private $roomInventoryCode = null;

    /**
     * @property string $promotionCode
     */
    private $promotionCode = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * The ProfileCertification element identifies the travel agency to be paid by
     * providing the IATA number or ARC certifying number. (Implementation note: This
     * attribute is optional, but if it is not set, the Profile attribute must be set.)
     *
     * @property \Davispeixoto\OpenTravelAlliance\ProfileCertificationType
     * $profileCertification
     */
    private $profileCertification = null;

    /**
     * A collection of profiles.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ProfileType[] $profiles
     */
    private $profiles = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $payee
     */
    private $payee = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\AddressType $payeeAddress
     */
    private $payeeAddress = null;

    /**
     * A collection of Commission elements.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommissionType[] $commissions
     */
    private $commissions = null;

    /**
     * A collection of guest names.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType[] $guestNames
     */
    private $guestNames = null;

    /**
     * The hotel reference identifies the specific hotel for which the commission
     * applies.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CommissionEventType\HotelReferenceAType
     * $hotelReference
     */
    private $hotelReference = null;

    /**
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return integer
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param integer $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * Gets as amount
     *
     * A monetary amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A monetary amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as confirmationID
     *
     * @return string
     */
    public function getConfirmationID()
    {
        return $this->confirmationID;
    }

    /**
     * Sets a new confirmationID
     *
     * @param string $confirmationID
     * @return self
     */
    public function setConfirmationID($confirmationID)
    {
        $this->confirmationID = $confirmationID;

        return $this;
    }

    /**
     * Gets as confirmationOriginatorCode
     *
     * @return string
     */
    public function getConfirmationOriginatorCode()
    {
        return $this->confirmationOriginatorCode;
    }

    /**
     * Sets a new confirmationOriginatorCode
     *
     * @param string $confirmationOriginatorCode
     * @return self
     */
    public function setConfirmationOriginatorCode($confirmationOriginatorCode)
    {
        $this->confirmationOriginatorCode = $confirmationOriginatorCode;

        return $this;
    }

    /**
     * Gets as commissionOriginatorCode
     *
     * @return string
     */
    public function getCommissionOriginatorCode()
    {
        return $this->commissionOriginatorCode;
    }

    /**
     * Sets a new commissionOriginatorCode
     *
     * @param string $commissionOriginatorCode
     * @return self
     */
    public function setCommissionOriginatorCode($commissionOriginatorCode)
    {
        $this->commissionOriginatorCode = $commissionOriginatorCode;

        return $this;
    }

    /**
     * Gets as reservationID
     *
     * @return string
     */
    public function getReservationID()
    {
        return $this->reservationID;
    }

    /**
     * Sets a new reservationID
     *
     * @param string $reservationID
     * @return self
     */
    public function setReservationID($reservationID)
    {
        $this->reservationID = $reservationID;

        return $this;
    }

    /**
     * Gets as originalBookingDate
     *
     * @return \DateTime
     */
    public function getOriginalBookingDate()
    {
        return $this->originalBookingDate;
    }

    /**
     * Sets a new originalBookingDate
     *
     * @param \DateTime $originalBookingDate
     * @return self
     */
    public function setOriginalBookingDate(\DateTime $originalBookingDate)
    {
        $this->originalBookingDate = $originalBookingDate;

        return $this;
    }

    /**
     * Gets as preferredPaymentCurrency
     *
     * Indicates the preferred currency of the commission to be paid.
     *
     * @return string
     */
    public function getPreferredPaymentCurrency()
    {
        return $this->preferredPaymentCurrency;
    }

    /**
     * Sets a new preferredPaymentCurrency
     *
     * Indicates the preferred currency of the commission to be paid.
     *
     * @param string $preferredPaymentCurrency
     * @return self
     */
    public function setPreferredPaymentCurrency($preferredPaymentCurrency)
    {
        $this->preferredPaymentCurrency = $preferredPaymentCurrency;

        return $this;
    }

    /**
     * Gets as marketCode
     *
     * @return string
     */
    public function getMarketCode()
    {
        return $this->marketCode;
    }

    /**
     * Sets a new marketCode
     *
     * @param string $marketCode
     * @return self
     */
    public function setMarketCode($marketCode)
    {
        $this->marketCode = $marketCode;

        return $this;
    }

    /**
     * Gets as bookingSource
     *
     * @return string
     */
    public function getBookingSource()
    {
        return $this->bookingSource;
    }

    /**
     * Sets a new bookingSource
     *
     * @param string $bookingSource
     * @return self
     */
    public function setBookingSource($bookingSource)
    {
        $this->bookingSource = $bookingSource;

        return $this;
    }

    /**
     * Gets as numberOfRooms
     *
     * @return integer
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * Sets a new numberOfRooms
     *
     * @param integer $numberOfRooms
     * @return self
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $this->numberOfRooms = $numberOfRooms;

        return $this;
    }

    /**
     * Gets as roomInventoryCode
     *
     * @return string
     */
    public function getRoomInventoryCode()
    {
        return $this->roomInventoryCode;
    }

    /**
     * Sets a new roomInventoryCode
     *
     * @param string $roomInventoryCode
     * @return self
     */
    public function setRoomInventoryCode($roomInventoryCode)
    {
        $this->roomInventoryCode = $roomInventoryCode;

        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * @param string $promotionCode
     * @return self
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Gets as profileCertification
     *
     * The ProfileCertification element identifies the travel agency to be paid by
     * providing the IATA number or ARC certifying number. (Implementation note: This
     * attribute is optional, but if it is not set, the Profile attribute must be set.)
     *
     * @return \Davispeixoto\OpenTravelAlliance\ProfileCertificationType
     */
    public function getProfileCertification()
    {
        return $this->profileCertification;
    }

    /**
     * Sets a new profileCertification
     *
     * The ProfileCertification element identifies the travel agency to be paid by
     * providing the IATA number or ARC certifying number. (Implementation note: This
     * attribute is optional, but if it is not set, the Profile attribute must be set.)
     *
     * @param \Davispeixoto\OpenTravelAlliance\ProfileCertificationType
     * $profileCertification
     * @return self
     */
    public function setProfileCertification(
        \Davispeixoto\OpenTravelAlliance\ProfileCertificationType $profileCertification
    ) {
        $this->profileCertification = $profileCertification;

        return $this;
    }

    /**
     * Adds as profile
     *
     * A collection of profiles.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ProfileType $profile
     */
    public function addToProfiles(\Davispeixoto\OpenTravelAlliance\ProfileType $profile)
    {
        $this->profiles[] = $profile;

        return $this;
    }

    /**
     * isset profiles
     *
     * A collection of profiles.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProfiles($index)
    {
        return isset($this->profiles[$index]);
    }

    /**
     * unset profiles
     *
     * A collection of profiles.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProfiles($index)
    {
        unset($this->profiles[$index]);
    }

    /**
     * Gets as profiles
     *
     * A collection of profiles.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ProfileType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * A collection of profiles.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ProfileType[] $profiles
     * @return self
     */
    public function setProfiles(array $profiles)
    {
        $this->profiles = $profiles;

        return $this;
    }

    /**
     * Gets as payee
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * Sets a new payee
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $payee
     * @return self
     */
    public function setPayee(\Davispeixoto\OpenTravelAlliance\PersonNameType $payee)
    {
        $this->payee = $payee;

        return $this;
    }

    /**
     * Gets as payeeAddress
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressType
     */
    public function getPayeeAddress()
    {
        return $this->payeeAddress;
    }

    /**
     * Sets a new payeeAddress
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressType $payeeAddress
     * @return self
     */
    public function setPayeeAddress(\Davispeixoto\OpenTravelAlliance\AddressType $payeeAddress)
    {
        $this->payeeAddress = $payeeAddress;

        return $this;
    }

    /**
     * Adds as commission
     *
     * A collection of Commission elements.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType $commission
     */
    public function addToCommissions(\Davispeixoto\OpenTravelAlliance\CommissionType $commission)
    {
        $this->commissions[] = $commission;

        return $this;
    }

    /**
     * isset commissions
     *
     * A collection of Commission elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCommissions($index)
    {
        return isset($this->commissions[$index]);
    }

    /**
     * unset commissions
     *
     * A collection of Commission elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCommissions($index)
    {
        unset($this->commissions[$index]);
    }

    /**
     * Gets as commissions
     *
     * A collection of Commission elements.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommissionType[]
     */
    public function getCommissions()
    {
        return $this->commissions;
    }

    /**
     * Sets a new commissions
     *
     * A collection of Commission elements.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType[] $commissions
     * @return self
     */
    public function setCommissions(array $commissions)
    {
        $this->commissions = $commissions;

        return $this;
    }

    /**
     * Adds as guestName
     *
     * A collection of guest names.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $guestName
     */
    public function addToGuestNames(\Davispeixoto\OpenTravelAlliance\PersonNameType $guestName)
    {
        $this->guestNames[] = $guestName;

        return $this;
    }

    /**
     * isset guestNames
     *
     * A collection of guest names.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestNames($index)
    {
        return isset($this->guestNames[$index]);
    }

    /**
     * unset guestNames
     *
     * A collection of guest names.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestNames($index)
    {
        unset($this->guestNames[$index]);
    }

    /**
     * Gets as guestNames
     *
     * A collection of guest names.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType[]
     */
    public function getGuestNames()
    {
        return $this->guestNames;
    }

    /**
     * Sets a new guestNames
     *
     * A collection of guest names.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType[] $guestNames
     * @return self
     */
    public function setGuestNames(array $guestNames)
    {
        $this->guestNames = $guestNames;

        return $this;
    }

    /**
     * Gets as hotelReference
     *
     * The hotel reference identifies the specific hotel for which the commission
     * applies.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommissionEventType\HotelReferenceAType
     */
    public function getHotelReference()
    {
        return $this->hotelReference;
    }

    /**
     * Sets a new hotelReference
     *
     * The hotel reference identifies the specific hotel for which the commission
     * applies.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommissionEventType\HotelReferenceAType
     * $hotelReference
     * @return self
     */
    public function setHotelReference(
        \Davispeixoto\OpenTravelAlliance\CommissionEventType\HotelReferenceAType $hotelReference
    ) {
        $this->hotelReference = $hotelReference;

        return $this;
    }


}

