<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleProfileRentalPrefType
 *
 * Vehicle rental preferences can be specified for customers or companies to
 * indicate their preferences for types of vehicles to be rented in specific travel
 * situations. Companies may wish to specify certain class or types of cars that
 * their employees are allowed to rent, or indicate special business needs for
 * trucks for hauling goods, etc. Personal travelers may wish to indicate
 * preferences for types of vehicles such as vans or SUVs for family vacations, or
 * smaller, more sporty models when travelling alone. A customer may prefer to have
 * a convertible or sun roof in a warm destination, but request a ski rack when
 * vacationing in the wintertime. The VehicleProfileRentalPrefType complex type has
 * elements for specific features on rental cars including vehicle type (major
 * category such as car, truck, SUV) and vehicle class (more precise kind of
 * vehicle), air conditioning, transmission, and special equipment. In addition,
 * the specification captures preferences for vendors and loyalty programs,
 * insurance coverage, forms of payment for rental cars, and other special
 * requirements.
 * XSD Type: VehicleProfileRentalPrefType
 */
class VehicleProfileRentalPrefType
{

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @property string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @property string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property boolean $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * The GasPrePay attribute defines a set of valid values for the choice of
     * prepaying for gas at the time of the pick up of the rental vehicle. This
     * information is useful in that it allows a customer's preference to be made known
     * to the vendor. It also allows the vendor to provide more detailed and accurate
     * pricing up front.
     *  false
     *
     * @property boolean $gasPrePay
     */
    private $gasPrePay = null;

    /**
     * Indicates a preference for the loyalty program to be used for vehicle rental.
     * The RPH (Reference Place Holder) attribute designates a specific loyalty program
     * from a collection stored in the profile.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\LoyaltyPrefAType[]
     * $loyaltyPref
     */
    private $loyaltyPref = null;

    /**
     * Vendor Preferences indicates a preference for a specific car rental agency when
     * used in a travel collection. The VendorPref element uses the Company Name entity
     * to identify the preferred company by name and by vendor code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType[] $vendorPref
     */
    private $vendorPref = null;

    /**
     * A preference for a payment indicates a specific type of payment, such as a
     * credit card or direct bill, to be assigned to the car rental preference
     * collection. The RPH (Reference Place Holder) attribute designates a specific
     * payment form in a collection stored in the profile.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\PaymentFormPrefAType[]
     * $paymentFormPref
     */
    private $paymentFormPref = null;

    /**
     * A preference for a specific type of vehicle coverage to be used when renting a
     * car in a given travel situation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\CoveragePrefAType[]
     * $coveragePref
     */
    private $coveragePref = null;

    /**
     * The special request preference element allows the customer to designate a
     * special request to be associated with the vehicle rental.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType[]
     * $specialReqPref
     */
    private $specialReqPref = null;

    /**
     * The vehicle type preference element allows the customer to designate a major
     * category of vehicle preferred for rental.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehiclePrefType[] $vehTypePref
     */
    private $vehTypePref = null;

    /**
     * Indicates a preference for special equipment in a rented car.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\SpecialEquipPrefAType[]
     * $specialEquipPref
     */
    private $specialEquipPref = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;

        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;

        return $this;
    }

    /**
     * Gets as smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @return boolean
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * Sets a new smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @param boolean $smokingAllowed
     * @return self
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;

        return $this;
    }

    /**
     * Gets as gasPrePay
     *
     * The GasPrePay attribute defines a set of valid values for the choice of
     * prepaying for gas at the time of the pick up of the rental vehicle. This
     * information is useful in that it allows a customer's preference to be made known
     * to the vendor. It also allows the vendor to provide more detailed and accurate
     * pricing up front.
     *  false
     *
     * @return boolean
     */
    public function getGasPrePay()
    {
        return $this->gasPrePay;
    }

    /**
     * Sets a new gasPrePay
     *
     * The GasPrePay attribute defines a set of valid values for the choice of
     * prepaying for gas at the time of the pick up of the rental vehicle. This
     * information is useful in that it allows a customer's preference to be made known
     * to the vendor. It also allows the vendor to provide more detailed and accurate
     * pricing up front.
     *  false
     *
     * @param boolean $gasPrePay
     * @return self
     */
    public function setGasPrePay($gasPrePay)
    {
        $this->gasPrePay = $gasPrePay;

        return $this;
    }

    /**
     * Adds as loyaltyPref
     *
     * Indicates a preference for the loyalty program to be used for vehicle rental.
     * The RPH (Reference Place Holder) attribute designates a specific loyalty program
     * from a collection stored in the profile.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\LoyaltyPrefAType
     * $loyaltyPref
     */
    public function addToLoyaltyPref(
        \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\LoyaltyPrefAType $loyaltyPref
    ) {
        $this->loyaltyPref[] = $loyaltyPref;

        return $this;
    }

    /**
     * isset loyaltyPref
     *
     * Indicates a preference for the loyalty program to be used for vehicle rental.
     * The RPH (Reference Place Holder) attribute designates a specific loyalty program
     * from a collection stored in the profile.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLoyaltyPref($index)
    {
        return isset($this->loyaltyPref[$index]);
    }

    /**
     * unset loyaltyPref
     *
     * Indicates a preference for the loyalty program to be used for vehicle rental.
     * The RPH (Reference Place Holder) attribute designates a specific loyalty program
     * from a collection stored in the profile.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLoyaltyPref($index)
    {
        unset($this->loyaltyPref[$index]);
    }

    /**
     * Gets as loyaltyPref
     *
     * Indicates a preference for the loyalty program to be used for vehicle rental.
     * The RPH (Reference Place Holder) attribute designates a specific loyalty program
     * from a collection stored in the profile.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\LoyaltyPrefAType[]
     */
    public function getLoyaltyPref()
    {
        return $this->loyaltyPref;
    }

    /**
     * Sets a new loyaltyPref
     *
     * Indicates a preference for the loyalty program to be used for vehicle rental.
     * The RPH (Reference Place Holder) attribute designates a specific loyalty program
     * from a collection stored in the profile.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\LoyaltyPrefAType[]
     * $loyaltyPref
     * @return self
     */
    public function setLoyaltyPref(array $loyaltyPref)
    {
        $this->loyaltyPref = $loyaltyPref;

        return $this;
    }

    /**
     * Adds as vendorPref
     *
     * Vendor Preferences indicates a preference for a specific car rental agency when
     * used in a travel collection. The VendorPref element uses the Company Name entity
     * to identify the preferred company by name and by vendor code.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $vendorPref
     */
    public function addToVendorPref(\Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $vendorPref)
    {
        $this->vendorPref[] = $vendorPref;

        return $this;
    }

    /**
     * isset vendorPref
     *
     * Vendor Preferences indicates a preference for a specific car rental agency when
     * used in a travel collection. The VendorPref element uses the Company Name entity
     * to identify the preferred company by name and by vendor code.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorPref($index)
    {
        return isset($this->vendorPref[$index]);
    }

    /**
     * unset vendorPref
     *
     * Vendor Preferences indicates a preference for a specific car rental agency when
     * used in a travel collection. The VendorPref element uses the Company Name entity
     * to identify the preferred company by name and by vendor code.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorPref($index)
    {
        unset($this->vendorPref[$index]);
    }

    /**
     * Gets as vendorPref
     *
     * Vendor Preferences indicates a preference for a specific car rental agency when
     * used in a travel collection. The VendorPref element uses the Company Name entity
     * to identify the preferred company by name and by vendor code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType[]
     */
    public function getVendorPref()
    {
        return $this->vendorPref;
    }

    /**
     * Sets a new vendorPref
     *
     * Vendor Preferences indicates a preference for a specific car rental agency when
     * used in a travel collection. The VendorPref element uses the Company Name entity
     * to identify the preferred company by name and by vendor code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType[] $vendorPref
     * @return self
     */
    public function setVendorPref(array $vendorPref)
    {
        $this->vendorPref = $vendorPref;

        return $this;
    }

    /**
     * Adds as paymentFormPref
     *
     * A preference for a payment indicates a specific type of payment, such as a
     * credit card or direct bill, to be assigned to the car rental preference
     * collection. The RPH (Reference Place Holder) attribute designates a specific
     * payment form in a collection stored in the profile.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\PaymentFormPrefAType
     * $paymentFormPref
     */
    public function addToPaymentFormPref(
        \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\PaymentFormPrefAType $paymentFormPref
    ) {
        $this->paymentFormPref[] = $paymentFormPref;

        return $this;
    }

    /**
     * isset paymentFormPref
     *
     * A preference for a payment indicates a specific type of payment, such as a
     * credit card or direct bill, to be assigned to the car rental preference
     * collection. The RPH (Reference Place Holder) attribute designates a specific
     * payment form in a collection stored in the profile.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentFormPref($index)
    {
        return isset($this->paymentFormPref[$index]);
    }

    /**
     * unset paymentFormPref
     *
     * A preference for a payment indicates a specific type of payment, such as a
     * credit card or direct bill, to be assigned to the car rental preference
     * collection. The RPH (Reference Place Holder) attribute designates a specific
     * payment form in a collection stored in the profile.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentFormPref($index)
    {
        unset($this->paymentFormPref[$index]);
    }

    /**
     * Gets as paymentFormPref
     *
     * A preference for a payment indicates a specific type of payment, such as a
     * credit card or direct bill, to be assigned to the car rental preference
     * collection. The RPH (Reference Place Holder) attribute designates a specific
     * payment form in a collection stored in the profile.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\PaymentFormPrefAType[]
     */
    public function getPaymentFormPref()
    {
        return $this->paymentFormPref;
    }

    /**
     * Sets a new paymentFormPref
     *
     * A preference for a payment indicates a specific type of payment, such as a
     * credit card or direct bill, to be assigned to the car rental preference
     * collection. The RPH (Reference Place Holder) attribute designates a specific
     * payment form in a collection stored in the profile.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\PaymentFormPrefAType[]
     * $paymentFormPref
     * @return self
     */
    public function setPaymentFormPref(array $paymentFormPref)
    {
        $this->paymentFormPref = $paymentFormPref;

        return $this;
    }

    /**
     * Adds as coveragePref
     *
     * A preference for a specific type of vehicle coverage to be used when renting a
     * car in a given travel situation.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\CoveragePrefAType
     * $coveragePref
     */
    public function addToCoveragePref(
        \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\CoveragePrefAType $coveragePref
    ) {
        $this->coveragePref[] = $coveragePref;

        return $this;
    }

    /**
     * isset coveragePref
     *
     * A preference for a specific type of vehicle coverage to be used when renting a
     * car in a given travel situation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoveragePref($index)
    {
        return isset($this->coveragePref[$index]);
    }

    /**
     * unset coveragePref
     *
     * A preference for a specific type of vehicle coverage to be used when renting a
     * car in a given travel situation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoveragePref($index)
    {
        unset($this->coveragePref[$index]);
    }

    /**
     * Gets as coveragePref
     *
     * A preference for a specific type of vehicle coverage to be used when renting a
     * car in a given travel situation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\CoveragePrefAType[]
     */
    public function getCoveragePref()
    {
        return $this->coveragePref;
    }

    /**
     * Sets a new coveragePref
     *
     * A preference for a specific type of vehicle coverage to be used when renting a
     * car in a given travel situation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\CoveragePrefAType[]
     * $coveragePref
     * @return self
     */
    public function setCoveragePref(array $coveragePref)
    {
        $this->coveragePref = $coveragePref;

        return $this;
    }

    /**
     * Adds as specialReqPref
     *
     * The special request preference element allows the customer to designate a
     * special request to be associated with the vehicle rental.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType
     * $specialReqPref
     */
    public function addToSpecialReqPref(\Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType $specialReqPref)
    {
        $this->specialReqPref[] = $specialReqPref;

        return $this;
    }

    /**
     * isset specialReqPref
     *
     * The special request preference element allows the customer to designate a
     * special request to be associated with the vehicle rental.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialReqPref($index)
    {
        return isset($this->specialReqPref[$index]);
    }

    /**
     * unset specialReqPref
     *
     * The special request preference element allows the customer to designate a
     * special request to be associated with the vehicle rental.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialReqPref($index)
    {
        unset($this->specialReqPref[$index]);
    }

    /**
     * Gets as specialReqPref
     *
     * The special request preference element allows the customer to designate a
     * special request to be associated with the vehicle rental.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType[]
     */
    public function getSpecialReqPref()
    {
        return $this->specialReqPref;
    }

    /**
     * Sets a new specialReqPref
     *
     * The special request preference element allows the customer to designate a
     * special request to be associated with the vehicle rental.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType[]
     * $specialReqPref
     * @return self
     */
    public function setSpecialReqPref(array $specialReqPref)
    {
        $this->specialReqPref = $specialReqPref;

        return $this;
    }

    /**
     * Adds as vehTypePref
     *
     * The vehicle type preference element allows the customer to designate a major
     * category of vehicle preferred for rental.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehiclePrefType $vehTypePref
     */
    public function addToVehTypePref(\Davispeixoto\OpenTravelAlliance\VehiclePrefType $vehTypePref)
    {
        $this->vehTypePref[] = $vehTypePref;

        return $this;
    }

    /**
     * isset vehTypePref
     *
     * The vehicle type preference element allows the customer to designate a major
     * category of vehicle preferred for rental.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehTypePref($index)
    {
        return isset($this->vehTypePref[$index]);
    }

    /**
     * unset vehTypePref
     *
     * The vehicle type preference element allows the customer to designate a major
     * category of vehicle preferred for rental.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehTypePref($index)
    {
        unset($this->vehTypePref[$index]);
    }

    /**
     * Gets as vehTypePref
     *
     * The vehicle type preference element allows the customer to designate a major
     * category of vehicle preferred for rental.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehiclePrefType[]
     */
    public function getVehTypePref()
    {
        return $this->vehTypePref;
    }

    /**
     * Sets a new vehTypePref
     *
     * The vehicle type preference element allows the customer to designate a major
     * category of vehicle preferred for rental.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehiclePrefType[] $vehTypePref
     * @return self
     */
    public function setVehTypePref(array $vehTypePref)
    {
        $this->vehTypePref = $vehTypePref;

        return $this;
    }

    /**
     * Adds as specialEquipPref
     *
     * Indicates a preference for special equipment in a rented car.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\SpecialEquipPrefAType
     * $specialEquipPref
     */
    public function addToSpecialEquipPref(
        \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\SpecialEquipPrefAType $specialEquipPref
    ) {
        $this->specialEquipPref[] = $specialEquipPref;

        return $this;
    }

    /**
     * isset specialEquipPref
     *
     * Indicates a preference for special equipment in a rented car.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialEquipPref($index)
    {
        return isset($this->specialEquipPref[$index]);
    }

    /**
     * unset specialEquipPref
     *
     * Indicates a preference for special equipment in a rented car.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialEquipPref($index)
    {
        unset($this->specialEquipPref[$index]);
    }

    /**
     * Gets as specialEquipPref
     *
     * Indicates a preference for special equipment in a rented car.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\SpecialEquipPrefAType[]
     */
    public function getSpecialEquipPref()
    {
        return $this->specialEquipPref;
    }

    /**
     * Sets a new specialEquipPref
     *
     * Indicates a preference for special equipment in a rented car.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleProfileRentalPrefType\SpecialEquipPrefAType[]
     * $specialEquipPref
     * @return self
     */
    public function setSpecialEquipPref(array $specialEquipPref)
    {
        $this->specialEquipPref = $specialEquipPref;

        return $this;
    }


}

