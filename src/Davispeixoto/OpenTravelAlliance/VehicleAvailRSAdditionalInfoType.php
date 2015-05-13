<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleAvailRSAdditionalInfoType
 *
 * The VehicleAvailRSAdditionalInfoType complex type identifies the data that
 * descibes the supplemental information assocated with the availability and rates
 * of a rental vehicle.
 * XSD Type: VehicleAvailRSAdditionalInfoType
 */
class VehicleAvailRSAdditionalInfoType
{

    /**
     * Information on the one primary driver and, optionally, several additional
     * drivers. This may be used to provide a frequent renter number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType
     * $customer
     */
    private $customer = null;

    /**
     * Gets as customer
     *
     * Information on the one primary driver and, optionally, several additional
     * drivers. This may be used to provide a frequent renter number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Information on the one primary driver and, optionally, several additional
     * drivers. This may be used to provide a frequent renter number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType $customer
     * @return self
     */
    public function setCustomer(\Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType $customer)
    {
        $this->customer = $customer;

        return $this;
    }


}

