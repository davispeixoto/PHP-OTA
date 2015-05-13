<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleCancelRQAdditionalInfoType
 *
 * The VehicleCancelRQAdditionalInfoType complex type defines the information that
 * is used as part of a request to cancel a vehicle reservation.
 * XSD Type: VehicleCancelRQAdditionalInfoType
 */
class VehicleCancelRQAdditionalInfoType
{

    /**
     * A frequent renter number associated with the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleCancelRQAdditionalInfoType\CustLoyaltyAType
     * $custLoyalty
     */
    private $custLoyalty = null;

    /**
     * A telephone number associated with the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleCancelRQAdditionalInfoType\TelephoneAType
     * $telephone
     */
    private $telephone = null;

    /**
     * The vendor with whom the reservation has been made.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor
     */
    private $vendor = null;

    /**
     * Summary information about the reservation, including locations, dates, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleCancelRQAdditionalInfoType\RentalInfoAType
     * $rentalInfo
     */
    private $rentalInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as custLoyalty
     *
     * A frequent renter number associated with the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleCancelRQAdditionalInfoType\CustLoyaltyAType
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * A frequent renter number associated with the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleCancelRQAdditionalInfoType\CustLoyaltyAType
     * $custLoyalty
     * @return self
     */
    public function setCustLoyalty(
        \Davispeixoto\OpenTravelAlliance\VehicleCancelRQAdditionalInfoType\CustLoyaltyAType $custLoyalty
    ) {
        $this->custLoyalty = $custLoyalty;

        return $this;
    }

    /**
     * Gets as telephone
     *
     * A telephone number associated with the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleCancelRQAdditionalInfoType\TelephoneAType
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * A telephone number associated with the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleCancelRQAdditionalInfoType\TelephoneAType
     * $telephone
     * @return self
     */
    public function setTelephone(
        \Davispeixoto\OpenTravelAlliance\VehicleCancelRQAdditionalInfoType\TelephoneAType $telephone
    ) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Gets as vendor
     *
     * The vendor with whom the reservation has been made.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets a new vendor
     *
     * The vendor with whom the reservation has been made.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor
     * @return self
     */
    public function setVendor(\Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Gets as rentalInfo
     *
     * Summary information about the reservation, including locations, dates, etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleCancelRQAdditionalInfoType\RentalInfoAType
     */
    public function getRentalInfo()
    {
        return $this->rentalInfo;
    }

    /**
     * Sets a new rentalInfo
     *
     * Summary information about the reservation, including locations, dates, etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleCancelRQAdditionalInfoType\RentalInfoAType
     * $rentalInfo
     * @return self
     */
    public function setRentalInfo(
        \Davispeixoto\OpenTravelAlliance\VehicleCancelRQAdditionalInfoType\RentalInfoAType $rentalInfo
    ) {
        $this->rentalInfo = $rentalInfo;

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

