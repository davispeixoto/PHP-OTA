<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType;

/**
 * Class representing CustomerAType
 */
class CustomerAType
{

    /**
     * PersonName MUST provide detailed name information for the guest.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\PersonNameAType
     * $personName
     */
    private $personName = null;

    /**
     * Telephone MAY specify information on a telephone number for the guest.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\TelephoneAType[]
     * $telephone
     */
    private $telephone = null;

    /**
     * Email MAY specify information on an email address for the guest. When the
     * reservation is being booked through the internet, the email address SHOULD be
     * REQUIRED.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\EmailAType[]
     * $email
     */
    private $email = null;

    /**
     * Address MUST provide detailed information on an address for the guest.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\AddressAType[]
     * $address
     */
    private $address = null;

    /**
     * CustLoyalty MAY specify loyalty program information for the guest.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\CustLoyaltyAType
     * $custLoyalty
     */
    private $custLoyalty = null;

    /**
     * Gets as personName
     *
     * PersonName MUST provide detailed name information for the guest.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\PersonNameAType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * PersonName MUST provide detailed name information for the guest.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\PersonNameAType
     * $personName
     * @return self
     */
    public function setPersonName(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\PersonNameAType $personName
    ) {
        $this->personName = $personName;

        return $this;
    }

    /**
     * Adds as telephone
     *
     * Telephone MAY specify information on a telephone number for the guest.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\TelephoneAType
     * $telephone
     */
    public function addToTelephone(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\TelephoneAType $telephone
    ) {
        $this->telephone[] = $telephone;

        return $this;
    }

    /**
     * isset telephone
     *
     * Telephone MAY specify information on a telephone number for the guest.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTelephone($index)
    {
        return isset($this->telephone[$index]);
    }

    /**
     * unset telephone
     *
     * Telephone MAY specify information on a telephone number for the guest.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTelephone($index)
    {
        unset($this->telephone[$index]);
    }

    /**
     * Gets as telephone
     *
     * Telephone MAY specify information on a telephone number for the guest.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\TelephoneAType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Telephone MAY specify information on a telephone number for the guest.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\TelephoneAType[]
     * $telephone
     * @return self
     */
    public function setTelephone(array $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Adds as email
     *
     * Email MAY specify information on an email address for the guest. When the
     * reservation is being booked through the internet, the email address SHOULD be
     * REQUIRED.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\EmailAType
     * $email
     */
    public function addToEmail(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\EmailAType $email
    ) {
        $this->email[] = $email;

        return $this;
    }

    /**
     * isset email
     *
     * Email MAY specify information on an email address for the guest. When the
     * reservation is being booked through the internet, the email address SHOULD be
     * REQUIRED.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEmail($index)
    {
        return isset($this->email[$index]);
    }

    /**
     * unset email
     *
     * Email MAY specify information on an email address for the guest. When the
     * reservation is being booked through the internet, the email address SHOULD be
     * REQUIRED.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEmail($index)
    {
        unset($this->email[$index]);
    }

    /**
     * Gets as email
     *
     * Email MAY specify information on an email address for the guest. When the
     * reservation is being booked through the internet, the email address SHOULD be
     * REQUIRED.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\EmailAType[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Email MAY specify information on an email address for the guest. When the
     * reservation is being booked through the internet, the email address SHOULD be
     * REQUIRED.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\EmailAType[]
     * $email
     * @return self
     */
    public function setEmail(array $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Adds as address
     *
     * Address MUST provide detailed information on an address for the guest.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\AddressAType
     * $address
     */
    public function addToAddress(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\AddressAType $address
    ) {
        $this->address[] = $address;

        return $this;
    }

    /**
     * isset address
     *
     * Address MUST provide detailed information on an address for the guest.
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
     * Address MUST provide detailed information on an address for the guest.
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
     * Address MUST provide detailed information on an address for the guest.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\AddressAType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address MUST provide detailed information on an address for the guest.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\AddressAType[]
     * $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets as custLoyalty
     *
     * CustLoyalty MAY specify loyalty program information for the guest.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\CustLoyaltyAType
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * CustLoyalty MAY specify loyalty program information for the guest.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\CustLoyaltyAType
     * $custLoyalty
     * @return self
     */
    public function setCustLoyalty(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\CustLoyaltyAType $custLoyalty
    ) {
        $this->custLoyalty = $custLoyalty;

        return $this;
    }


}

