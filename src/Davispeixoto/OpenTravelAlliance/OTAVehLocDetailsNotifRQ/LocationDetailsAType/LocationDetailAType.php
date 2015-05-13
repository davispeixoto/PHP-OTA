<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType;

/**
 * Class representing LocationDetailAType
 */
class LocationDetailAType
{

    /**
     * Code used to identify the car rental location.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Name used to refer to the car rental location.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Used to define which list the location code comes from (e.g. IATA, OAG, internal
     * company code).
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Used for extended OAG code in conjunction with the OAG code which is sent in
     * Code.
     *
     * @property string $extendedLocatonCode
     */
    private $extendedLocatonCode = null;

    /**
     * Additional airport location codes associated with the primary airport.
     *
     * @property string[] $assocAirportLocList
     */
    private $assocAirportLocList = null;

    /**
     * The location of the car rental counter for this location. Refer to OpenTravel
     * Codelist Vehicle Where At Facility (VWF).
     *
     * @property string $counterLoc
     */
    private $counterLoc = null;

    /**
     * The primary location code if this location is a branch.
     *
     * @property string $primaryLocCodeForBranch
     */
    private $primaryLocCodeForBranch = null;

    /**
     * If true, this is a corporate location. If false, it is a franchised location.
     *
     * @property boolean $corporateLocInd
     */
    private $corporateLocInd = null;

    /**
     * The unit of measure, miles or kilometers, in which the mileage is measured.
     *
     * @property string $distanceUnit
     */
    private $distanceUnit = null;

    /**
     * If true, a written confrimation is available for this location. If false, it is
     * not available.
     *
     * @property boolean $writtenConfirmationInd
     */
    private $writtenConfirmationInd = null;

    /**
     * Used to identify which subscribers can view the rule information for this
     * location.
     *
     * @property string $viewershipRuleID
     */
    private $viewershipRuleID = null;

    /**
     * The primary airport code if this location is not at the airport.
     *
     * @property string $primaryAirportCode
     */
    private $primaryAirportCode = null;

    /**
     * The identification of this car location detail record that may be returned in
     * the response associated to a warning or error.
     *
     * @property string $recordID
     */
    private $recordID = null;

    /**
     * ISO 3166 country code for which the changes are applicable.
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * The standard code or abbreviation for the state, province or region for which
     * the changes are applicable.
     *
     * @property string $stateCode
     */
    private $stateCode = null;

    /**
     * City code for which the changes are applicable.
     *
     * @property string $cityCode
     */
    private $cityCode = null;

    /**
     * The airport terminal(s) where the car rental location is located.
     *
     * @property string[] $assocTerminalList
     */
    private $assocTerminalList = null;

    /**
     * To specify the action to be taken on this information and the effective and
     * discontinue dates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\ProcessingInfoAType
     * $processingInfo
     */
    private $processingInfo = null;

    /**
     * Address information for the car rental location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AddressAType[]
     * $address
     */
    private $address = null;

    /**
     * Telephone information for the car rental location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\TelephoneAType[]
     * $telephone
     */
    private $telephone = null;

    /**
     * A collection of policy information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\PoliciesAType\PolicyAType[]
     * $policies
     */
    private $policies = null;

    /**
     * A collection of keyword information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\KeywordsAType\KeywordAType[]
     * $keywords
     */
    private $keywords = null;

    /**
     * A collection of operation schedule information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\OperationSchedulesAType
     * $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * A collection of descriptions about the special pieces of equipment that can be
     * included in a rental from this facility.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\SpecialEquipmentsAType
     * $specialEquipments
     */
    private $specialEquipments = null;

    /**
     * A collection of vehicle information for this location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehiclesAType[]
     * $vehicles
     */
    private $vehicles = null;

    /**
     * Age requirement information for this car rental location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AgeRequirementsAType[]
     * $ageRequirements
     */
    private $ageRequirements = null;

    /**
     * Additional driver requirements for this rental car location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AdditionalDriverRequirementsAType
     * $additionalDriverRequirements
     */
    private $additionalDriverRequirements = null;

    /**
     * Credit card information for this car rental location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType
     * $creditCardRequirements
     */
    private $creditCardRequirements = null;

    /**
     * The shuttle information for this location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\ShuttleInfoAType[]
     * $shuttleInfo
     */
    private $shuttleInfo = null;

    /**
     * An additional fee that may apply to this car rental location and the effective
     * and discontinue dates for the fee.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AdditionalFeesAType[]
     * $additionalFees
     */
    private $additionalFees = null;

    /**
     * Information on the financial liabilities assumed by the renter when renting from
     * this facility, along with optional coverage to reduce the financial liabilities.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LiabilitiesAType[]
     * $liabilities
     */
    private $liabilities = null;

    /**
     * Frequent renter information applicable to this car rental location and the
     * effective and discontinue dates for the information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LoyaltyProgramAType[]
     * $loyaltyProgram
     */
    private $loyaltyProgram = null;

    /**
     * The vehicle provider (e.g., Hertz, National) when different from the car rental
     * location vendor.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehicleVendorSupplierAType[]
     * $vehicleVendorSupplier
     */
    private $vehicleVendorSupplier = null;

    /**
     * Gets as code
     *
     * Code used to identify the car rental location.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Code used to identify the car rental location.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as name
     *
     * Name used to refer to the car rental location.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name used to refer to the car rental location.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Used to define which list the location code comes from (e.g. IATA, OAG, internal
     * company code).
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Used to define which list the location code comes from (e.g. IATA, OAG, internal
     * company code).
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as extendedLocatonCode
     *
     * Used for extended OAG code in conjunction with the OAG code which is sent in
     * Code.
     *
     * @return string
     */
    public function getExtendedLocatonCode()
    {
        return $this->extendedLocatonCode;
    }

    /**
     * Sets a new extendedLocatonCode
     *
     * Used for extended OAG code in conjunction with the OAG code which is sent in
     * Code.
     *
     * @param string $extendedLocatonCode
     * @return self
     */
    public function setExtendedLocatonCode($extendedLocatonCode)
    {
        $this->extendedLocatonCode = $extendedLocatonCode;

        return $this;
    }

    /**
     * Adds as assocAirportLocList
     *
     * Additional airport location codes associated with the primary airport.
     *
     * @return self
     * @param string $assocAirportLocList
     */
    public function addToAssocAirportLocList($assocAirportLocList)
    {
        $this->assocAirportLocList[] = $assocAirportLocList;

        return $this;
    }

    /**
     * isset assocAirportLocList
     *
     * Additional airport location codes associated with the primary airport.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAssocAirportLocList($index)
    {
        return isset($this->assocAirportLocList[$index]);
    }

    /**
     * unset assocAirportLocList
     *
     * Additional airport location codes associated with the primary airport.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAssocAirportLocList($index)
    {
        unset($this->assocAirportLocList[$index]);
    }

    /**
     * Gets as assocAirportLocList
     *
     * Additional airport location codes associated with the primary airport.
     *
     * @return string[]
     */
    public function getAssocAirportLocList()
    {
        return $this->assocAirportLocList;
    }

    /**
     * Sets a new assocAirportLocList
     *
     * Additional airport location codes associated with the primary airport.
     *
     * @param string $assocAirportLocList
     * @return self
     */
    public function setAssocAirportLocList(array $assocAirportLocList)
    {
        $this->assocAirportLocList = $assocAirportLocList;

        return $this;
    }

    /**
     * Gets as counterLoc
     *
     * The location of the car rental counter for this location. Refer to OpenTravel
     * Codelist Vehicle Where At Facility (VWF).
     *
     * @return string
     */
    public function getCounterLoc()
    {
        return $this->counterLoc;
    }

    /**
     * Sets a new counterLoc
     *
     * The location of the car rental counter for this location. Refer to OpenTravel
     * Codelist Vehicle Where At Facility (VWF).
     *
     * @param string $counterLoc
     * @return self
     */
    public function setCounterLoc($counterLoc)
    {
        $this->counterLoc = $counterLoc;

        return $this;
    }

    /**
     * Gets as primaryLocCodeForBranch
     *
     * The primary location code if this location is a branch.
     *
     * @return string
     */
    public function getPrimaryLocCodeForBranch()
    {
        return $this->primaryLocCodeForBranch;
    }

    /**
     * Sets a new primaryLocCodeForBranch
     *
     * The primary location code if this location is a branch.
     *
     * @param string $primaryLocCodeForBranch
     * @return self
     */
    public function setPrimaryLocCodeForBranch($primaryLocCodeForBranch)
    {
        $this->primaryLocCodeForBranch = $primaryLocCodeForBranch;

        return $this;
    }

    /**
     * Gets as corporateLocInd
     *
     * If true, this is a corporate location. If false, it is a franchised location.
     *
     * @return boolean
     */
    public function getCorporateLocInd()
    {
        return $this->corporateLocInd;
    }

    /**
     * Sets a new corporateLocInd
     *
     * If true, this is a corporate location. If false, it is a franchised location.
     *
     * @param boolean $corporateLocInd
     * @return self
     */
    public function setCorporateLocInd($corporateLocInd)
    {
        $this->corporateLocInd = $corporateLocInd;

        return $this;
    }

    /**
     * Gets as distanceUnit
     *
     * The unit of measure, miles or kilometers, in which the mileage is measured.
     *
     * @return string
     */
    public function getDistanceUnit()
    {
        return $this->distanceUnit;
    }

    /**
     * Sets a new distanceUnit
     *
     * The unit of measure, miles or kilometers, in which the mileage is measured.
     *
     * @param string $distanceUnit
     * @return self
     */
    public function setDistanceUnit($distanceUnit)
    {
        $this->distanceUnit = $distanceUnit;

        return $this;
    }

    /**
     * Gets as writtenConfirmationInd
     *
     * If true, a written confrimation is available for this location. If false, it is
     * not available.
     *
     * @return boolean
     */
    public function getWrittenConfirmationInd()
    {
        return $this->writtenConfirmationInd;
    }

    /**
     * Sets a new writtenConfirmationInd
     *
     * If true, a written confrimation is available for this location. If false, it is
     * not available.
     *
     * @param boolean $writtenConfirmationInd
     * @return self
     */
    public function setWrittenConfirmationInd($writtenConfirmationInd)
    {
        $this->writtenConfirmationInd = $writtenConfirmationInd;

        return $this;
    }

    /**
     * Gets as viewershipRuleID
     *
     * Used to identify which subscribers can view the rule information for this
     * location.
     *
     * @return string
     */
    public function getViewershipRuleID()
    {
        return $this->viewershipRuleID;
    }

    /**
     * Sets a new viewershipRuleID
     *
     * Used to identify which subscribers can view the rule information for this
     * location.
     *
     * @param string $viewershipRuleID
     * @return self
     */
    public function setViewershipRuleID($viewershipRuleID)
    {
        $this->viewershipRuleID = $viewershipRuleID;

        return $this;
    }

    /**
     * Gets as primaryAirportCode
     *
     * The primary airport code if this location is not at the airport.
     *
     * @return string
     */
    public function getPrimaryAirportCode()
    {
        return $this->primaryAirportCode;
    }

    /**
     * Sets a new primaryAirportCode
     *
     * The primary airport code if this location is not at the airport.
     *
     * @param string $primaryAirportCode
     * @return self
     */
    public function setPrimaryAirportCode($primaryAirportCode)
    {
        $this->primaryAirportCode = $primaryAirportCode;

        return $this;
    }

    /**
     * Gets as recordID
     *
     * The identification of this car location detail record that may be returned in
     * the response associated to a warning or error.
     *
     * @return string
     */
    public function getRecordID()
    {
        return $this->recordID;
    }

    /**
     * Sets a new recordID
     *
     * The identification of this car location detail record that may be returned in
     * the response associated to a warning or error.
     *
     * @param string $recordID
     * @return self
     */
    public function setRecordID($recordID)
    {
        $this->recordID = $recordID;

        return $this;
    }

    /**
     * Gets as countryCode
     *
     * ISO 3166 country code for which the changes are applicable.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * ISO 3166 country code for which the changes are applicable.
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Gets as stateCode
     *
     * The standard code or abbreviation for the state, province or region for which
     * the changes are applicable.
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }

    /**
     * Sets a new stateCode
     *
     * The standard code or abbreviation for the state, province or region for which
     * the changes are applicable.
     *
     * @param string $stateCode
     * @return self
     */
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;

        return $this;
    }

    /**
     * Gets as cityCode
     *
     * City code for which the changes are applicable.
     *
     * @return string
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * Sets a new cityCode
     *
     * City code for which the changes are applicable.
     *
     * @param string $cityCode
     * @return self
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;

        return $this;
    }

    /**
     * Adds as assocTerminalList
     *
     * The airport terminal(s) where the car rental location is located.
     *
     * @return self
     * @param string $assocTerminalList
     */
    public function addToAssocTerminalList($assocTerminalList)
    {
        $this->assocTerminalList[] = $assocTerminalList;

        return $this;
    }

    /**
     * isset assocTerminalList
     *
     * The airport terminal(s) where the car rental location is located.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAssocTerminalList($index)
    {
        return isset($this->assocTerminalList[$index]);
    }

    /**
     * unset assocTerminalList
     *
     * The airport terminal(s) where the car rental location is located.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAssocTerminalList($index)
    {
        unset($this->assocTerminalList[$index]);
    }

    /**
     * Gets as assocTerminalList
     *
     * The airport terminal(s) where the car rental location is located.
     *
     * @return string[]
     */
    public function getAssocTerminalList()
    {
        return $this->assocTerminalList;
    }

    /**
     * Sets a new assocTerminalList
     *
     * The airport terminal(s) where the car rental location is located.
     *
     * @param string $assocTerminalList
     * @return self
     */
    public function setAssocTerminalList(array $assocTerminalList)
    {
        $this->assocTerminalList = $assocTerminalList;

        return $this;
    }

    /**
     * Gets as processingInfo
     *
     * To specify the action to be taken on this information and the effective and
     * discontinue dates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\ProcessingInfoAType
     */
    public function getProcessingInfo()
    {
        return $this->processingInfo;
    }

    /**
     * Sets a new processingInfo
     *
     * To specify the action to be taken on this information and the effective and
     * discontinue dates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\ProcessingInfoAType
     * $processingInfo
     * @return self
     */
    public function setProcessingInfo(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\ProcessingInfoAType $processingInfo
    ) {
        $this->processingInfo = $processingInfo;

        return $this;
    }

    /**
     * Adds as address
     *
     * Address information for the car rental location.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AddressAType
     * $address
     */
    public function addToAddress(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AddressAType $address
    ) {
        $this->address[] = $address;

        return $this;
    }

    /**
     * isset address
     *
     * Address information for the car rental location.
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
     * Address information for the car rental location.
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
     * Address information for the car rental location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AddressAType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address information for the car rental location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AddressAType[]
     * $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Adds as telephone
     *
     * Telephone information for the car rental location.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\TelephoneAType
     * $telephone
     */
    public function addToTelephone(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\TelephoneAType $telephone
    ) {
        $this->telephone[] = $telephone;

        return $this;
    }

    /**
     * isset telephone
     *
     * Telephone information for the car rental location.
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
     * Telephone information for the car rental location.
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
     * Telephone information for the car rental location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\TelephoneAType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Telephone information for the car rental location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\TelephoneAType[]
     * $telephone
     * @return self
     */
    public function setTelephone(array $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Adds as policy
     *
     * A collection of policy information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\PoliciesAType\PolicyAType
     * $policy
     */
    public function addToPolicies(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\PoliciesAType\PolicyAType $policy
    ) {
        $this->policies[] = $policy;

        return $this;
    }

    /**
     * isset policies
     *
     * A collection of policy information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPolicies($index)
    {
        return isset($this->policies[$index]);
    }

    /**
     * unset policies
     *
     * A collection of policy information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPolicies($index)
    {
        unset($this->policies[$index]);
    }

    /**
     * Gets as policies
     *
     * A collection of policy information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\PoliciesAType\PolicyAType[]
     */
    public function getPolicies()
    {
        return $this->policies;
    }

    /**
     * Sets a new policies
     *
     * A collection of policy information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\PoliciesAType\PolicyAType[]
     * $policies
     * @return self
     */
    public function setPolicies(array $policies)
    {
        $this->policies = $policies;

        return $this;
    }

    /**
     * Adds as keyword
     *
     * A collection of keyword information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\KeywordsAType\KeywordAType
     * $keyword
     */
    public function addToKeywords(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\KeywordsAType\KeywordAType $keyword
    ) {
        $this->keywords[] = $keyword;

        return $this;
    }

    /**
     * isset keywords
     *
     * A collection of keyword information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetKeywords($index)
    {
        return isset($this->keywords[$index]);
    }

    /**
     * unset keywords
     *
     * A collection of keyword information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetKeywords($index)
    {
        unset($this->keywords[$index]);
    }

    /**
     * Gets as keywords
     *
     * A collection of keyword information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\KeywordsAType\KeywordAType[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * A collection of keyword information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\KeywordsAType\KeywordAType[]
     * $keywords
     * @return self
     */
    public function setKeywords(array $keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Gets as operationSchedules
     *
     * A collection of operation schedule information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\OperationSchedulesAType
     */
    public function getOperationSchedules()
    {
        return $this->operationSchedules;
    }

    /**
     * Sets a new operationSchedules
     *
     * A collection of operation schedule information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\OperationSchedulesAType
     * $operationSchedules
     * @return self
     */
    public function setOperationSchedules(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\OperationSchedulesAType $operationSchedules
    ) {
        $this->operationSchedules = $operationSchedules;

        return $this;
    }

    /**
     * Gets as specialEquipments
     *
     * A collection of descriptions about the special pieces of equipment that can be
     * included in a rental from this facility.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\SpecialEquipmentsAType
     */
    public function getSpecialEquipments()
    {
        return $this->specialEquipments;
    }

    /**
     * Sets a new specialEquipments
     *
     * A collection of descriptions about the special pieces of equipment that can be
     * included in a rental from this facility.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\SpecialEquipmentsAType
     * $specialEquipments
     * @return self
     */
    public function setSpecialEquipments(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\SpecialEquipmentsAType $specialEquipments
    ) {
        $this->specialEquipments = $specialEquipments;

        return $this;
    }

    /**
     * Adds as vehicles
     *
     * A collection of vehicle information for this location.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehiclesAType
     * $vehicles
     */
    public function addToVehicles(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehiclesAType $vehicles
    ) {
        $this->vehicles[] = $vehicles;

        return $this;
    }

    /**
     * isset vehicles
     *
     * A collection of vehicle information for this location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehicles($index)
    {
        return isset($this->vehicles[$index]);
    }

    /**
     * unset vehicles
     *
     * A collection of vehicle information for this location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehicles($index)
    {
        unset($this->vehicles[$index]);
    }

    /**
     * Gets as vehicles
     *
     * A collection of vehicle information for this location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehiclesAType[]
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }

    /**
     * Sets a new vehicles
     *
     * A collection of vehicle information for this location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehiclesAType[]
     * $vehicles
     * @return self
     */
    public function setVehicles(array $vehicles)
    {
        $this->vehicles = $vehicles;

        return $this;
    }

    /**
     * Adds as ageRequirements
     *
     * Age requirement information for this car rental location.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AgeRequirementsAType
     * $ageRequirements
     */
    public function addToAgeRequirements(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AgeRequirementsAType $ageRequirements
    ) {
        $this->ageRequirements[] = $ageRequirements;

        return $this;
    }

    /**
     * isset ageRequirements
     *
     * Age requirement information for this car rental location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAgeRequirements($index)
    {
        return isset($this->ageRequirements[$index]);
    }

    /**
     * unset ageRequirements
     *
     * Age requirement information for this car rental location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAgeRequirements($index)
    {
        unset($this->ageRequirements[$index]);
    }

    /**
     * Gets as ageRequirements
     *
     * Age requirement information for this car rental location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AgeRequirementsAType[]
     */
    public function getAgeRequirements()
    {
        return $this->ageRequirements;
    }

    /**
     * Sets a new ageRequirements
     *
     * Age requirement information for this car rental location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AgeRequirementsAType[]
     * $ageRequirements
     * @return self
     */
    public function setAgeRequirements(array $ageRequirements)
    {
        $this->ageRequirements = $ageRequirements;

        return $this;
    }

    /**
     * Gets as additionalDriverRequirements
     *
     * Additional driver requirements for this rental car location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AdditionalDriverRequirementsAType
     */
    public function getAdditionalDriverRequirements()
    {
        return $this->additionalDriverRequirements;
    }

    /**
     * Sets a new additionalDriverRequirements
     *
     * Additional driver requirements for this rental car location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AdditionalDriverRequirementsAType
     * $additionalDriverRequirements
     * @return self
     */
    public function setAdditionalDriverRequirements(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AdditionalDriverRequirementsAType $additionalDriverRequirements
    ) {
        $this->additionalDriverRequirements = $additionalDriverRequirements;

        return $this;
    }

    /**
     * Gets as creditCardRequirements
     *
     * Credit card information for this car rental location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType
     */
    public function getCreditCardRequirements()
    {
        return $this->creditCardRequirements;
    }

    /**
     * Sets a new creditCardRequirements
     *
     * Credit card information for this car rental location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType
     * $creditCardRequirements
     * @return self
     */
    public function setCreditCardRequirements(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType $creditCardRequirements
    ) {
        $this->creditCardRequirements = $creditCardRequirements;

        return $this;
    }

    /**
     * Adds as shuttleInfo
     *
     * The shuttle information for this location.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\ShuttleInfoAType
     * $shuttleInfo
     */
    public function addToShuttleInfo(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\ShuttleInfoAType $shuttleInfo
    ) {
        $this->shuttleInfo[] = $shuttleInfo;

        return $this;
    }

    /**
     * isset shuttleInfo
     *
     * The shuttle information for this location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShuttleInfo($index)
    {
        return isset($this->shuttleInfo[$index]);
    }

    /**
     * unset shuttleInfo
     *
     * The shuttle information for this location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShuttleInfo($index)
    {
        unset($this->shuttleInfo[$index]);
    }

    /**
     * Gets as shuttleInfo
     *
     * The shuttle information for this location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\ShuttleInfoAType[]
     */
    public function getShuttleInfo()
    {
        return $this->shuttleInfo;
    }

    /**
     * Sets a new shuttleInfo
     *
     * The shuttle information for this location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\ShuttleInfoAType[]
     * $shuttleInfo
     * @return self
     */
    public function setShuttleInfo(array $shuttleInfo)
    {
        $this->shuttleInfo = $shuttleInfo;

        return $this;
    }

    /**
     * Adds as additionalFees
     *
     * An additional fee that may apply to this car rental location and the effective
     * and discontinue dates for the fee.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AdditionalFeesAType
     * $additionalFees
     */
    public function addToAdditionalFees(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AdditionalFeesAType $additionalFees
    ) {
        $this->additionalFees[] = $additionalFees;

        return $this;
    }

    /**
     * isset additionalFees
     *
     * An additional fee that may apply to this car rental location and the effective
     * and discontinue dates for the fee.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalFees($index)
    {
        return isset($this->additionalFees[$index]);
    }

    /**
     * unset additionalFees
     *
     * An additional fee that may apply to this car rental location and the effective
     * and discontinue dates for the fee.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalFees($index)
    {
        unset($this->additionalFees[$index]);
    }

    /**
     * Gets as additionalFees
     *
     * An additional fee that may apply to this car rental location and the effective
     * and discontinue dates for the fee.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AdditionalFeesAType[]
     */
    public function getAdditionalFees()
    {
        return $this->additionalFees;
    }

    /**
     * Sets a new additionalFees
     *
     * An additional fee that may apply to this car rental location and the effective
     * and discontinue dates for the fee.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\AdditionalFeesAType[]
     * $additionalFees
     * @return self
     */
    public function setAdditionalFees(array $additionalFees)
    {
        $this->additionalFees = $additionalFees;

        return $this;
    }

    /**
     * Adds as liabilities
     *
     * Information on the financial liabilities assumed by the renter when renting from
     * this facility, along with optional coverage to reduce the financial liabilities.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LiabilitiesAType
     * $liabilities
     */
    public function addToLiabilities(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LiabilitiesAType $liabilities
    ) {
        $this->liabilities[] = $liabilities;

        return $this;
    }

    /**
     * isset liabilities
     *
     * Information on the financial liabilities assumed by the renter when renting from
     * this facility, along with optional coverage to reduce the financial liabilities.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLiabilities($index)
    {
        return isset($this->liabilities[$index]);
    }

    /**
     * unset liabilities
     *
     * Information on the financial liabilities assumed by the renter when renting from
     * this facility, along with optional coverage to reduce the financial liabilities.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLiabilities($index)
    {
        unset($this->liabilities[$index]);
    }

    /**
     * Gets as liabilities
     *
     * Information on the financial liabilities assumed by the renter when renting from
     * this facility, along with optional coverage to reduce the financial liabilities.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LiabilitiesAType[]
     */
    public function getLiabilities()
    {
        return $this->liabilities;
    }

    /**
     * Sets a new liabilities
     *
     * Information on the financial liabilities assumed by the renter when renting from
     * this facility, along with optional coverage to reduce the financial liabilities.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LiabilitiesAType[]
     * $liabilities
     * @return self
     */
    public function setLiabilities(array $liabilities)
    {
        $this->liabilities = $liabilities;

        return $this;
    }

    /**
     * Adds as loyaltyProgram
     *
     * Frequent renter information applicable to this car rental location and the
     * effective and discontinue dates for the information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LoyaltyProgramAType
     * $loyaltyProgram
     */
    public function addToLoyaltyProgram(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LoyaltyProgramAType $loyaltyProgram
    ) {
        $this->loyaltyProgram[] = $loyaltyProgram;

        return $this;
    }

    /**
     * isset loyaltyProgram
     *
     * Frequent renter information applicable to this car rental location and the
     * effective and discontinue dates for the information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLoyaltyProgram($index)
    {
        return isset($this->loyaltyProgram[$index]);
    }

    /**
     * unset loyaltyProgram
     *
     * Frequent renter information applicable to this car rental location and the
     * effective and discontinue dates for the information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLoyaltyProgram($index)
    {
        unset($this->loyaltyProgram[$index]);
    }

    /**
     * Gets as loyaltyProgram
     *
     * Frequent renter information applicable to this car rental location and the
     * effective and discontinue dates for the information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LoyaltyProgramAType[]
     */
    public function getLoyaltyProgram()
    {
        return $this->loyaltyProgram;
    }

    /**
     * Sets a new loyaltyProgram
     *
     * Frequent renter information applicable to this car rental location and the
     * effective and discontinue dates for the information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LoyaltyProgramAType[]
     * $loyaltyProgram
     * @return self
     */
    public function setLoyaltyProgram(array $loyaltyProgram)
    {
        $this->loyaltyProgram = $loyaltyProgram;

        return $this;
    }

    /**
     * Adds as vehicleVendorSupplier
     *
     * The vehicle provider (e.g., Hertz, National) when different from the car rental
     * location vendor.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehicleVendorSupplierAType
     * $vehicleVendorSupplier
     */
    public function addToVehicleVendorSupplier(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehicleVendorSupplierAType $vehicleVendorSupplier
    ) {
        $this->vehicleVendorSupplier[] = $vehicleVendorSupplier;

        return $this;
    }

    /**
     * isset vehicleVendorSupplier
     *
     * The vehicle provider (e.g., Hertz, National) when different from the car rental
     * location vendor.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehicleVendorSupplier($index)
    {
        return isset($this->vehicleVendorSupplier[$index]);
    }

    /**
     * unset vehicleVendorSupplier
     *
     * The vehicle provider (e.g., Hertz, National) when different from the car rental
     * location vendor.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehicleVendorSupplier($index)
    {
        unset($this->vehicleVendorSupplier[$index]);
    }

    /**
     * Gets as vehicleVendorSupplier
     *
     * The vehicle provider (e.g., Hertz, National) when different from the car rental
     * location vendor.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehicleVendorSupplierAType[]
     */
    public function getVehicleVendorSupplier()
    {
        return $this->vehicleVendorSupplier;
    }

    /**
     * Sets a new vehicleVendorSupplier
     *
     * The vehicle provider (e.g., Hertz, National) when different from the car rental
     * location vendor.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehicleVendorSupplierAType[]
     * $vehicleVendorSupplier
     * @return self
     */
    public function setVehicleVendorSupplier(array $vehicleVendorSupplier)
    {
        $this->vehicleVendorSupplier = $vehicleVendorSupplier;

        return $this;
    }


}

