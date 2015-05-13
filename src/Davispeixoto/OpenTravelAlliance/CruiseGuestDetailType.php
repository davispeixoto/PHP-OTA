<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CruiseGuestDetailType
 *
 * Provides the detail data associated with the guest for a particular sailing.
 * XSD Type: CruiseGuestDetailType
 */
class CruiseGuestDetailType
{

    /**
     * When true, guest already exists for this booking. When false, the guest is being
     * added for this booking.
     *
     * @property boolean $guestExistsIndicator
     */
    private $guestExistsIndicator = null;

    /**
     * When true, the customer is a repeat guest. When false, the customer is not a
     * repeat guest.
     *
     * @property boolean $repeatGuestIndicator
     */
    private $repeatGuestIndicator = null;

    /**
     * Specifies the fare code and the group code if any. Fare codes are specific to
     * cruise lines.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedFareCodeAType[]
     * $selectedFareCode
     */
    private $selectedFareCode = null;

    /**
     * Specifies the guest contact address and phone number as well as the emergency
     * contact.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\ContactInfoAType[]
     * $contactInfo
     */
    private $contactInfo = null;

    /**
     * Guest's mode of transportation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuestTransportationType[]
     * $guestTransportation
     */
    private $guestTransportation = null;

    /**
     * Used to define a guest's loyalty programs.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\LoyaltyInfoAType[]
     * $loyaltyInfo
     */
    private $loyaltyInfo = null;

    /**
     * Specifies cross references at the guest level.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\LinkedTravelerAType[]
     * $linkedTraveler
     */
    private $linkedTraveler = null;

    /**
     * Used for passport, visa, other travel type documents.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DocumentType[] $travelDocument
     */
    private $travelDocument = null;

    /**
     * Specifies the dining info.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedDiningAType[]
     * $selectedDining
     */
    private $selectedDining = null;

    /**
     * Specifies the insurance information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedInsuranceAType[]
     * $selectedInsurance
     */
    private $selectedInsurance = null;

    /**
     * Specifies a gift, amenity, or other options (e.g., include gratuity).
     *
     * @property \Davispeixoto\OpenTravelAlliance\AmenityOptionType[] $selectedOptions
     */
    private $selectedOptions = null;

    /**
     * Specifies the selected packages.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedPackagesAType\SelectedPackageAType[]
     * $selectedPackages
     */
    private $selectedPackages = null;

    /**
     * Specifies the Special Services information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SpecialServiceType[]
     * $selectedSpecialServices
     */
    private $selectedSpecialServices = null;

    /**
     * A collection of air accommodations.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\AirAccommodationsAType\AirAccommodationAType[]
     * $airAccommodations
     */
    private $airAccommodations = null;

    /**
     * Provides information on requested documents, the type of document, method of
     * distribution, and associated costs.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DocumentHandlingType[]
     * $cruiseDocument
     */
    private $cruiseDocument = null;

    /**
     * Specifies the Profile informations at the guest level.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CruiseProfileType[] $profiles
     */
    private $profiles = null;

    /**
     * Gets as guestExistsIndicator
     *
     * When true, guest already exists for this booking. When false, the guest is being
     * added for this booking.
     *
     * @return boolean
     */
    public function getGuestExistsIndicator()
    {
        return $this->guestExistsIndicator;
    }

    /**
     * Sets a new guestExistsIndicator
     *
     * When true, guest already exists for this booking. When false, the guest is being
     * added for this booking.
     *
     * @param boolean $guestExistsIndicator
     * @return self
     */
    public function setGuestExistsIndicator($guestExistsIndicator)
    {
        $this->guestExistsIndicator = $guestExistsIndicator;

        return $this;
    }

    /**
     * Gets as repeatGuestIndicator
     *
     * When true, the customer is a repeat guest. When false, the customer is not a
     * repeat guest.
     *
     * @return boolean
     */
    public function getRepeatGuestIndicator()
    {
        return $this->repeatGuestIndicator;
    }

    /**
     * Sets a new repeatGuestIndicator
     *
     * When true, the customer is a repeat guest. When false, the customer is not a
     * repeat guest.
     *
     * @param boolean $repeatGuestIndicator
     * @return self
     */
    public function setRepeatGuestIndicator($repeatGuestIndicator)
    {
        $this->repeatGuestIndicator = $repeatGuestIndicator;

        return $this;
    }

    /**
     * Adds as selectedFareCode
     *
     * Specifies the fare code and the group code if any. Fare codes are specific to
     * cruise lines.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedFareCodeAType
     * $selectedFareCode
     */
    public function addToSelectedFareCode(
        \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedFareCodeAType $selectedFareCode
    ) {
        $this->selectedFareCode[] = $selectedFareCode;

        return $this;
    }

    /**
     * isset selectedFareCode
     *
     * Specifies the fare code and the group code if any. Fare codes are specific to
     * cruise lines.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSelectedFareCode($index)
    {
        return isset($this->selectedFareCode[$index]);
    }

    /**
     * unset selectedFareCode
     *
     * Specifies the fare code and the group code if any. Fare codes are specific to
     * cruise lines.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSelectedFareCode($index)
    {
        unset($this->selectedFareCode[$index]);
    }

    /**
     * Gets as selectedFareCode
     *
     * Specifies the fare code and the group code if any. Fare codes are specific to
     * cruise lines.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedFareCodeAType[]
     */
    public function getSelectedFareCode()
    {
        return $this->selectedFareCode;
    }

    /**
     * Sets a new selectedFareCode
     *
     * Specifies the fare code and the group code if any. Fare codes are specific to
     * cruise lines.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedFareCodeAType[]
     * $selectedFareCode
     * @return self
     */
    public function setSelectedFareCode(array $selectedFareCode)
    {
        $this->selectedFareCode = $selectedFareCode;

        return $this;
    }

    /**
     * Adds as contactInfo
     *
     * Specifies the guest contact address and phone number as well as the emergency
     * contact.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\ContactInfoAType
     * $contactInfo
     */
    public function addToContactInfo(
        \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\ContactInfoAType $contactInfo
    ) {
        $this->contactInfo[] = $contactInfo;

        return $this;
    }

    /**
     * isset contactInfo
     *
     * Specifies the guest contact address and phone number as well as the emergency
     * contact.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContactInfo($index)
    {
        return isset($this->contactInfo[$index]);
    }

    /**
     * unset contactInfo
     *
     * Specifies the guest contact address and phone number as well as the emergency
     * contact.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContactInfo($index)
    {
        unset($this->contactInfo[$index]);
    }

    /**
     * Gets as contactInfo
     *
     * Specifies the guest contact address and phone number as well as the emergency
     * contact.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\ContactInfoAType[]
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets a new contactInfo
     *
     * Specifies the guest contact address and phone number as well as the emergency
     * contact.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\ContactInfoAType[]
     * $contactInfo
     * @return self
     */
    public function setContactInfo(array $contactInfo)
    {
        $this->contactInfo = $contactInfo;

        return $this;
    }

    /**
     * Adds as guestTransportation
     *
     * Guest's mode of transportation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GuestTransportationType
     * $guestTransportation
     */
    public function addToGuestTransportation(
        \Davispeixoto\OpenTravelAlliance\GuestTransportationType $guestTransportation
    ) {
        $this->guestTransportation[] = $guestTransportation;

        return $this;
    }

    /**
     * isset guestTransportation
     *
     * Guest's mode of transportation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestTransportation($index)
    {
        return isset($this->guestTransportation[$index]);
    }

    /**
     * unset guestTransportation
     *
     * Guest's mode of transportation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestTransportation($index)
    {
        unset($this->guestTransportation[$index]);
    }

    /**
     * Gets as guestTransportation
     *
     * Guest's mode of transportation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuestTransportationType[]
     */
    public function getGuestTransportation()
    {
        return $this->guestTransportation;
    }

    /**
     * Sets a new guestTransportation
     *
     * Guest's mode of transportation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuestTransportationType[]
     * $guestTransportation
     * @return self
     */
    public function setGuestTransportation(array $guestTransportation)
    {
        $this->guestTransportation = $guestTransportation;

        return $this;
    }

    /**
     * Adds as loyaltyInfo
     *
     * Used to define a guest's loyalty programs.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\LoyaltyInfoAType
     * $loyaltyInfo
     */
    public function addToLoyaltyInfo(
        \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\LoyaltyInfoAType $loyaltyInfo
    ) {
        $this->loyaltyInfo[] = $loyaltyInfo;

        return $this;
    }

    /**
     * isset loyaltyInfo
     *
     * Used to define a guest's loyalty programs.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLoyaltyInfo($index)
    {
        return isset($this->loyaltyInfo[$index]);
    }

    /**
     * unset loyaltyInfo
     *
     * Used to define a guest's loyalty programs.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLoyaltyInfo($index)
    {
        unset($this->loyaltyInfo[$index]);
    }

    /**
     * Gets as loyaltyInfo
     *
     * Used to define a guest's loyalty programs.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\LoyaltyInfoAType[]
     */
    public function getLoyaltyInfo()
    {
        return $this->loyaltyInfo;
    }

    /**
     * Sets a new loyaltyInfo
     *
     * Used to define a guest's loyalty programs.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\LoyaltyInfoAType[]
     * $loyaltyInfo
     * @return self
     */
    public function setLoyaltyInfo(array $loyaltyInfo)
    {
        $this->loyaltyInfo = $loyaltyInfo;

        return $this;
    }

    /**
     * Adds as linkedTraveler
     *
     * Specifies cross references at the guest level.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\LinkedTravelerAType
     * $linkedTraveler
     */
    public function addToLinkedTraveler(
        \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\LinkedTravelerAType $linkedTraveler
    ) {
        $this->linkedTraveler[] = $linkedTraveler;

        return $this;
    }

    /**
     * isset linkedTraveler
     *
     * Specifies cross references at the guest level.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLinkedTraveler($index)
    {
        return isset($this->linkedTraveler[$index]);
    }

    /**
     * unset linkedTraveler
     *
     * Specifies cross references at the guest level.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLinkedTraveler($index)
    {
        unset($this->linkedTraveler[$index]);
    }

    /**
     * Gets as linkedTraveler
     *
     * Specifies cross references at the guest level.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\LinkedTravelerAType[]
     */
    public function getLinkedTraveler()
    {
        return $this->linkedTraveler;
    }

    /**
     * Sets a new linkedTraveler
     *
     * Specifies cross references at the guest level.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\LinkedTravelerAType[]
     * $linkedTraveler
     * @return self
     */
    public function setLinkedTraveler(array $linkedTraveler)
    {
        $this->linkedTraveler = $linkedTraveler;

        return $this;
    }

    /**
     * Adds as travelDocument
     *
     * Used for passport, visa, other travel type documents.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DocumentType $travelDocument
     */
    public function addToTravelDocument(\Davispeixoto\OpenTravelAlliance\DocumentType $travelDocument)
    {
        $this->travelDocument[] = $travelDocument;

        return $this;
    }

    /**
     * isset travelDocument
     *
     * Used for passport, visa, other travel type documents.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelDocument($index)
    {
        return isset($this->travelDocument[$index]);
    }

    /**
     * unset travelDocument
     *
     * Used for passport, visa, other travel type documents.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelDocument($index)
    {
        unset($this->travelDocument[$index]);
    }

    /**
     * Gets as travelDocument
     *
     * Used for passport, visa, other travel type documents.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DocumentType[]
     */
    public function getTravelDocument()
    {
        return $this->travelDocument;
    }

    /**
     * Sets a new travelDocument
     *
     * Used for passport, visa, other travel type documents.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DocumentType[] $travelDocument
     * @return self
     */
    public function setTravelDocument(array $travelDocument)
    {
        $this->travelDocument = $travelDocument;

        return $this;
    }

    /**
     * Adds as selectedDining
     *
     * Specifies the dining info.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedDiningAType
     * $selectedDining
     */
    public function addToSelectedDining(
        \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedDiningAType $selectedDining
    ) {
        $this->selectedDining[] = $selectedDining;

        return $this;
    }

    /**
     * isset selectedDining
     *
     * Specifies the dining info.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSelectedDining($index)
    {
        return isset($this->selectedDining[$index]);
    }

    /**
     * unset selectedDining
     *
     * Specifies the dining info.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSelectedDining($index)
    {
        unset($this->selectedDining[$index]);
    }

    /**
     * Gets as selectedDining
     *
     * Specifies the dining info.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedDiningAType[]
     */
    public function getSelectedDining()
    {
        return $this->selectedDining;
    }

    /**
     * Sets a new selectedDining
     *
     * Specifies the dining info.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedDiningAType[]
     * $selectedDining
     * @return self
     */
    public function setSelectedDining(array $selectedDining)
    {
        $this->selectedDining = $selectedDining;

        return $this;
    }

    /**
     * Adds as selectedInsurance
     *
     * Specifies the insurance information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedInsuranceAType
     * $selectedInsurance
     */
    public function addToSelectedInsurance(
        \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedInsuranceAType $selectedInsurance
    ) {
        $this->selectedInsurance[] = $selectedInsurance;

        return $this;
    }

    /**
     * isset selectedInsurance
     *
     * Specifies the insurance information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSelectedInsurance($index)
    {
        return isset($this->selectedInsurance[$index]);
    }

    /**
     * unset selectedInsurance
     *
     * Specifies the insurance information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSelectedInsurance($index)
    {
        unset($this->selectedInsurance[$index]);
    }

    /**
     * Gets as selectedInsurance
     *
     * Specifies the insurance information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedInsuranceAType[]
     */
    public function getSelectedInsurance()
    {
        return $this->selectedInsurance;
    }

    /**
     * Sets a new selectedInsurance
     *
     * Specifies the insurance information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedInsuranceAType[]
     * $selectedInsurance
     * @return self
     */
    public function setSelectedInsurance(array $selectedInsurance)
    {
        $this->selectedInsurance = $selectedInsurance;

        return $this;
    }

    /**
     * Adds as selectedOptions
     *
     * Specifies a gift, amenity, or other options (e.g., include gratuity).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AmenityOptionType $selectedOptions
     */
    public function addToSelectedOptions(\Davispeixoto\OpenTravelAlliance\AmenityOptionType $selectedOptions)
    {
        $this->selectedOptions[] = $selectedOptions;

        return $this;
    }

    /**
     * isset selectedOptions
     *
     * Specifies a gift, amenity, or other options (e.g., include gratuity).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSelectedOptions($index)
    {
        return isset($this->selectedOptions[$index]);
    }

    /**
     * unset selectedOptions
     *
     * Specifies a gift, amenity, or other options (e.g., include gratuity).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSelectedOptions($index)
    {
        unset($this->selectedOptions[$index]);
    }

    /**
     * Gets as selectedOptions
     *
     * Specifies a gift, amenity, or other options (e.g., include gratuity).
     *
     * @return \Davispeixoto\OpenTravelAlliance\AmenityOptionType[]
     */
    public function getSelectedOptions()
    {
        return $this->selectedOptions;
    }

    /**
     * Sets a new selectedOptions
     *
     * Specifies a gift, amenity, or other options (e.g., include gratuity).
     *
     * @param \Davispeixoto\OpenTravelAlliance\AmenityOptionType[] $selectedOptions
     * @return self
     */
    public function setSelectedOptions(array $selectedOptions)
    {
        $this->selectedOptions = $selectedOptions;

        return $this;
    }

    /**
     * Adds as selectedPackage
     *
     * Specifies the selected packages.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedPackagesAType\SelectedPackageAType
     * $selectedPackage
     */
    public function addToSelectedPackages(
        \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedPackagesAType\SelectedPackageAType $selectedPackage
    ) {
        $this->selectedPackages[] = $selectedPackage;

        return $this;
    }

    /**
     * isset selectedPackages
     *
     * Specifies the selected packages.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSelectedPackages($index)
    {
        return isset($this->selectedPackages[$index]);
    }

    /**
     * unset selectedPackages
     *
     * Specifies the selected packages.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSelectedPackages($index)
    {
        unset($this->selectedPackages[$index]);
    }

    /**
     * Gets as selectedPackages
     *
     * Specifies the selected packages.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedPackagesAType\SelectedPackageAType[]
     */
    public function getSelectedPackages()
    {
        return $this->selectedPackages;
    }

    /**
     * Sets a new selectedPackages
     *
     * Specifies the selected packages.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedPackagesAType\SelectedPackageAType[]
     * $selectedPackages
     * @return self
     */
    public function setSelectedPackages(array $selectedPackages)
    {
        $this->selectedPackages = $selectedPackages;

        return $this;
    }

    /**
     * Adds as selectedSpecialService
     *
     * Specifies the Special Services information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SpecialServiceType
     * $selectedSpecialService
     */
    public function addToSelectedSpecialServices(
        \Davispeixoto\OpenTravelAlliance\SpecialServiceType $selectedSpecialService
    ) {
        $this->selectedSpecialServices[] = $selectedSpecialService;

        return $this;
    }

    /**
     * isset selectedSpecialServices
     *
     * Specifies the Special Services information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSelectedSpecialServices($index)
    {
        return isset($this->selectedSpecialServices[$index]);
    }

    /**
     * unset selectedSpecialServices
     *
     * Specifies the Special Services information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSelectedSpecialServices($index)
    {
        unset($this->selectedSpecialServices[$index]);
    }

    /**
     * Gets as selectedSpecialServices
     *
     * Specifies the Special Services information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SpecialServiceType[]
     */
    public function getSelectedSpecialServices()
    {
        return $this->selectedSpecialServices;
    }

    /**
     * Sets a new selectedSpecialServices
     *
     * Specifies the Special Services information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SpecialServiceType[]
     * $selectedSpecialServices
     * @return self
     */
    public function setSelectedSpecialServices(array $selectedSpecialServices)
    {
        $this->selectedSpecialServices = $selectedSpecialServices;

        return $this;
    }

    /**
     * Adds as airAccommodation
     *
     * A collection of air accommodations.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\AirAccommodationsAType\AirAccommodationAType
     * $airAccommodation
     */
    public function addToAirAccommodations(
        \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\AirAccommodationsAType\AirAccommodationAType $airAccommodation
    ) {
        $this->airAccommodations[] = $airAccommodation;

        return $this;
    }

    /**
     * isset airAccommodations
     *
     * A collection of air accommodations.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirAccommodations($index)
    {
        return isset($this->airAccommodations[$index]);
    }

    /**
     * unset airAccommodations
     *
     * A collection of air accommodations.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirAccommodations($index)
    {
        unset($this->airAccommodations[$index]);
    }

    /**
     * Gets as airAccommodations
     *
     * A collection of air accommodations.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\AirAccommodationsAType\AirAccommodationAType[]
     */
    public function getAirAccommodations()
    {
        return $this->airAccommodations;
    }

    /**
     * Sets a new airAccommodations
     *
     * A collection of air accommodations.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\AirAccommodationsAType\AirAccommodationAType[]
     * $airAccommodations
     * @return self
     */
    public function setAirAccommodations(array $airAccommodations)
    {
        $this->airAccommodations = $airAccommodations;

        return $this;
    }

    /**
     * Adds as cruiseDocument
     *
     * Provides information on requested documents, the type of document, method of
     * distribution, and associated costs.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DocumentHandlingType $cruiseDocument
     */
    public function addToCruiseDocument(\Davispeixoto\OpenTravelAlliance\DocumentHandlingType $cruiseDocument)
    {
        $this->cruiseDocument[] = $cruiseDocument;

        return $this;
    }

    /**
     * isset cruiseDocument
     *
     * Provides information on requested documents, the type of document, method of
     * distribution, and associated costs.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCruiseDocument($index)
    {
        return isset($this->cruiseDocument[$index]);
    }

    /**
     * unset cruiseDocument
     *
     * Provides information on requested documents, the type of document, method of
     * distribution, and associated costs.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCruiseDocument($index)
    {
        unset($this->cruiseDocument[$index]);
    }

    /**
     * Gets as cruiseDocument
     *
     * Provides information on requested documents, the type of document, method of
     * distribution, and associated costs.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DocumentHandlingType[]
     */
    public function getCruiseDocument()
    {
        return $this->cruiseDocument;
    }

    /**
     * Sets a new cruiseDocument
     *
     * Provides information on requested documents, the type of document, method of
     * distribution, and associated costs.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DocumentHandlingType[] $cruiseDocument
     * @return self
     */
    public function setCruiseDocument(array $cruiseDocument)
    {
        $this->cruiseDocument = $cruiseDocument;

        return $this;
    }

    /**
     * Adds as profiles
     *
     * Specifies the Profile informations at the guest level.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CruiseProfileType $profiles
     */
    public function addToProfiles(\Davispeixoto\OpenTravelAlliance\CruiseProfileType $profiles)
    {
        $this->profiles[] = $profiles;

        return $this;
    }

    /**
     * isset profiles
     *
     * Specifies the Profile informations at the guest level.
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
     * Specifies the Profile informations at the guest level.
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
     * Specifies the Profile informations at the guest level.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CruiseProfileType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * Specifies the Profile informations at the guest level.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CruiseProfileType[] $profiles
     * @return self
     */
    public function setProfiles(array $profiles)
    {
        $this->profiles = $profiles;

        return $this;
    }


}

