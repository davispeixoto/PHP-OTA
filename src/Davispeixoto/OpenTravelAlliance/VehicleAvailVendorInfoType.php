<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleAvailVendorInfoType
 *
 * The VehicleAvailVendorInfoType complex type identifies the data that describes
 * supplemental information relevant to a vendor and made available at the time
 * that availability and rates are checked.
 * XSD Type: VehicleAvailVendorInfoType
 */
class VehicleAvailVendorInfoType
{

    /**
     * A collection of free-format messages associated with this vendor.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VendorMessageType[] $vendorMessages
     */
    private $vendorMessages = null;

    /**
     * Information on off-airport location services, for example, vehicle delivery,
     * customer pickup, along with the associated price.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OffLocationServicePricedType[]
     * $offLocServices
     */
    private $offLocServices = null;

    /**
     * A collection of payment rules associated with this reservation. This instance of
     * PaymentRules would be used if there were payment rules that were applicable,
     * regardless of the vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[] $paymentRules
     */
    private $paymentRules = null;

    /**
     * Detailed information about the associated rental facilities, for example,
     * address, phone number, hours of operation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType[]
     * $locationDetails
     */
    private $locationDetails = null;

    /**
     * Details of a tour with which this availability information is associated.
     * Availability and rate information may vary if associated with a tour.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailVendorInfoType\TourInfoAType
     * $tourInfo
     */
    private $tourInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as vendorMessage
     *
     * A collection of free-format messages associated with this vendor.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VendorMessageType $vendorMessage
     */
    public function addToVendorMessages(\Davispeixoto\OpenTravelAlliance\VendorMessageType $vendorMessage)
    {
        $this->vendorMessages[] = $vendorMessage;

        return $this;
    }

    /**
     * isset vendorMessages
     *
     * A collection of free-format messages associated with this vendor.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorMessages($index)
    {
        return isset($this->vendorMessages[$index]);
    }

    /**
     * unset vendorMessages
     *
     * A collection of free-format messages associated with this vendor.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorMessages($index)
    {
        unset($this->vendorMessages[$index]);
    }

    /**
     * Gets as vendorMessages
     *
     * A collection of free-format messages associated with this vendor.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VendorMessageType[]
     */
    public function getVendorMessages()
    {
        return $this->vendorMessages;
    }

    /**
     * Sets a new vendorMessages
     *
     * A collection of free-format messages associated with this vendor.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VendorMessageType[] $vendorMessages
     * @return self
     */
    public function setVendorMessages(array $vendorMessages)
    {
        $this->vendorMessages = $vendorMessages;

        return $this;
    }

    /**
     * Adds as offLocServices
     *
     * Information on off-airport location services, for example, vehicle delivery,
     * customer pickup, along with the associated price.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OffLocationServicePricedType
     * $offLocServices
     */
    public function addToOffLocServices(\Davispeixoto\OpenTravelAlliance\OffLocationServicePricedType $offLocServices)
    {
        $this->offLocServices[] = $offLocServices;

        return $this;
    }

    /**
     * isset offLocServices
     *
     * Information on off-airport location services, for example, vehicle delivery,
     * customer pickup, along with the associated price.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOffLocServices($index)
    {
        return isset($this->offLocServices[$index]);
    }

    /**
     * unset offLocServices
     *
     * Information on off-airport location services, for example, vehicle delivery,
     * customer pickup, along with the associated price.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOffLocServices($index)
    {
        unset($this->offLocServices[$index]);
    }

    /**
     * Gets as offLocServices
     *
     * Information on off-airport location services, for example, vehicle delivery,
     * customer pickup, along with the associated price.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OffLocationServicePricedType[]
     */
    public function getOffLocServices()
    {
        return $this->offLocServices;
    }

    /**
     * Sets a new offLocServices
     *
     * Information on off-airport location services, for example, vehicle delivery,
     * customer pickup, along with the associated price.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OffLocationServicePricedType[]
     * $offLocServices
     * @return self
     */
    public function setOffLocServices(array $offLocServices)
    {
        $this->offLocServices = $offLocServices;

        return $this;
    }

    /**
     * Adds as paymentRule
     *
     * A collection of payment rules associated with this reservation. This instance of
     * PaymentRules would be used if there were payment rules that were applicable,
     * regardless of the vehicle.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MonetaryRuleType $paymentRule
     */
    public function addToPaymentRules(\Davispeixoto\OpenTravelAlliance\MonetaryRuleType $paymentRule)
    {
        $this->paymentRules[] = $paymentRule;

        return $this;
    }

    /**
     * isset paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of
     * PaymentRules would be used if there were payment rules that were applicable,
     * regardless of the vehicle.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentRules($index)
    {
        return isset($this->paymentRules[$index]);
    }

    /**
     * unset paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of
     * PaymentRules would be used if there were payment rules that were applicable,
     * regardless of the vehicle.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentRules($index)
    {
        unset($this->paymentRules[$index]);
    }

    /**
     * Gets as paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of
     * PaymentRules would be used if there were payment rules that were applicable,
     * regardless of the vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[]
     */
    public function getPaymentRules()
    {
        return $this->paymentRules;
    }

    /**
     * Sets a new paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of
     * PaymentRules would be used if there were payment rules that were applicable,
     * regardless of the vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[] $paymentRules
     * @return self
     */
    public function setPaymentRules(array $paymentRules)
    {
        $this->paymentRules = $paymentRules;

        return $this;
    }

    /**
     * Adds as locationDetails
     *
     * Detailed information about the associated rental facilities, for example,
     * address, phone number, hours of operation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType
     * $locationDetails
     */
    public function addToLocationDetails(\Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType $locationDetails)
    {
        $this->locationDetails[] = $locationDetails;

        return $this;
    }

    /**
     * isset locationDetails
     *
     * Detailed information about the associated rental facilities, for example,
     * address, phone number, hours of operation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocationDetails($index)
    {
        return isset($this->locationDetails[$index]);
    }

    /**
     * unset locationDetails
     *
     * Detailed information about the associated rental facilities, for example,
     * address, phone number, hours of operation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocationDetails($index)
    {
        unset($this->locationDetails[$index]);
    }

    /**
     * Gets as locationDetails
     *
     * Detailed information about the associated rental facilities, for example,
     * address, phone number, hours of operation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType[]
     */
    public function getLocationDetails()
    {
        return $this->locationDetails;
    }

    /**
     * Sets a new locationDetails
     *
     * Detailed information about the associated rental facilities, for example,
     * address, phone number, hours of operation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType[]
     * $locationDetails
     * @return self
     */
    public function setLocationDetails(array $locationDetails)
    {
        $this->locationDetails = $locationDetails;

        return $this;
    }

    /**
     * Gets as tourInfo
     *
     * Details of a tour with which this availability information is associated.
     * Availability and rate information may vary if associated with a tour.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailVendorInfoType\TourInfoAType
     */
    public function getTourInfo()
    {
        return $this->tourInfo;
    }

    /**
     * Sets a new tourInfo
     *
     * Details of a tour with which this availability information is associated.
     * Availability and rate information may vary if associated with a tour.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleAvailVendorInfoType\TourInfoAType
     * $tourInfo
     * @return self
     */
    public function setTourInfo(\Davispeixoto\OpenTravelAlliance\VehicleAvailVendorInfoType\TourInfoAType $tourInfo)
    {
        $this->tourInfo = $tourInfo;

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

