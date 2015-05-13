<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CompanyInfoType
 *
 * Detailed information about a company.
 * XSD Type: CompanyInfoType
 */
class CompanyInfoType
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
     * Detailed name information for the company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $companyName
     */
    private $companyName = null;

    /**
     * Detailed information on an address for the company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyInfoType\AddressInfoAType[]
     * $addressInfo
     */
    private $addressInfo = null;

    /**
     * Information on a telephone number for the company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyInfoType\TelephoneInfoAType[]
     * $telephoneInfo
     */
    private $telephoneInfo = null;

    /**
     * Information on an email address for the company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyInfoType\EmailAType[] $email
     */
    private $email = null;

    /**
     * Information on a URL for the company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\URLType[] $uRL
     */
    private $uRL = null;

    /**
     * A jurisdiction in which a company is authorized to do business. Uses the Address
     * entity to indicate the location of business using any of the components of the
     * address (e.g., city, state, zip code, country).
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressType[] $businessLocale
     */
    private $businessLocale = null;

    /**
     * Method of providing funds for travel by the company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyInfoType\PaymentFormAType[]
     * $paymentForm
     */
    private $paymentForm = null;

    /**
     * Description: A deposit policy that is associated to this profile.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType[]
     * $depositPayment
     */
    private $depositPayment = null;

    /**
     * Information on a contact person for the company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contactPerson
     */
    private $contactPerson = null;

    /**
     * Information on the organization responsible for arranging travel for the
     * company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelArrangerType[] $travelArranger
     */
    private $travelArranger = null;

    /**
     * Company's loyalty program information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LoyaltyProgramType[] $loyaltyProgram
     */
    private $loyaltyProgram = null;

    /**
     * Trip purpose codes used by this company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyInfoType\TripPurposeAType[]
     * $tripPurpose
     */
    private $tripPurpose = null;

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
     * Adds as companyName
     *
     * Detailed name information for the company.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName
     */
    public function addToCompanyName(\Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName)
    {
        $this->companyName[] = $companyName;

        return $this;
    }

    /**
     * isset companyName
     *
     * Detailed name information for the company.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCompanyName($index)
    {
        return isset($this->companyName[$index]);
    }

    /**
     * unset companyName
     *
     * Detailed name information for the company.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCompanyName($index)
    {
        unset($this->companyName[$index]);
    }

    /**
     * Gets as companyName
     *
     * Detailed name information for the company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType[]
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * Detailed name information for the company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $companyName
     * @return self
     */
    public function setCompanyName(array $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Adds as addressInfo
     *
     * Detailed information on an address for the company.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyInfoType\AddressInfoAType
     * $addressInfo
     */
    public function addToAddressInfo(\Davispeixoto\OpenTravelAlliance\CompanyInfoType\AddressInfoAType $addressInfo)
    {
        $this->addressInfo[] = $addressInfo;

        return $this;
    }

    /**
     * isset addressInfo
     *
     * Detailed information on an address for the company.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddressInfo($index)
    {
        return isset($this->addressInfo[$index]);
    }

    /**
     * unset addressInfo
     *
     * Detailed information on an address for the company.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddressInfo($index)
    {
        unset($this->addressInfo[$index]);
    }

    /**
     * Gets as addressInfo
     *
     * Detailed information on an address for the company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyInfoType\AddressInfoAType[]
     */
    public function getAddressInfo()
    {
        return $this->addressInfo;
    }

    /**
     * Sets a new addressInfo
     *
     * Detailed information on an address for the company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyInfoType\AddressInfoAType[]
     * $addressInfo
     * @return self
     */
    public function setAddressInfo(array $addressInfo)
    {
        $this->addressInfo = $addressInfo;

        return $this;
    }

    /**
     * Adds as telephoneInfo
     *
     * Information on a telephone number for the company.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyInfoType\TelephoneInfoAType
     * $telephoneInfo
     */
    public function addToTelephoneInfo(
        \Davispeixoto\OpenTravelAlliance\CompanyInfoType\TelephoneInfoAType $telephoneInfo
    ) {
        $this->telephoneInfo[] = $telephoneInfo;

        return $this;
    }

    /**
     * isset telephoneInfo
     *
     * Information on a telephone number for the company.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTelephoneInfo($index)
    {
        return isset($this->telephoneInfo[$index]);
    }

    /**
     * unset telephoneInfo
     *
     * Information on a telephone number for the company.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTelephoneInfo($index)
    {
        unset($this->telephoneInfo[$index]);
    }

    /**
     * Gets as telephoneInfo
     *
     * Information on a telephone number for the company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyInfoType\TelephoneInfoAType[]
     */
    public function getTelephoneInfo()
    {
        return $this->telephoneInfo;
    }

    /**
     * Sets a new telephoneInfo
     *
     * Information on a telephone number for the company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyInfoType\TelephoneInfoAType[]
     * $telephoneInfo
     * @return self
     */
    public function setTelephoneInfo(array $telephoneInfo)
    {
        $this->telephoneInfo = $telephoneInfo;

        return $this;
    }

    /**
     * Adds as email
     *
     * Information on an email address for the company.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyInfoType\EmailAType $email
     */
    public function addToEmail(\Davispeixoto\OpenTravelAlliance\CompanyInfoType\EmailAType $email)
    {
        $this->email[] = $email;

        return $this;
    }

    /**
     * isset email
     *
     * Information on an email address for the company.
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
     * Information on an email address for the company.
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
     * Information on an email address for the company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyInfoType\EmailAType[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Information on an email address for the company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyInfoType\EmailAType[] $email
     * @return self
     */
    public function setEmail(array $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Adds as uRL
     *
     * Information on a URL for the company.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\URLType $uRL
     */
    public function addToURL(\Davispeixoto\OpenTravelAlliance\URLType $uRL)
    {
        $this->uRL[] = $uRL;

        return $this;
    }

    /**
     * isset uRL
     *
     * Information on a URL for the company.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetURL($index)
    {
        return isset($this->uRL[$index]);
    }

    /**
     * unset uRL
     *
     * Information on a URL for the company.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetURL($index)
    {
        unset($this->uRL[$index]);
    }

    /**
     * Gets as uRL
     *
     * Information on a URL for the company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\URLType[]
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * Information on a URL for the company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\URLType[] $uRL
     * @return self
     */
    public function setURL(array $uRL)
    {
        $this->uRL = $uRL;

        return $this;
    }

    /**
     * Adds as businessLocale
     *
     * A jurisdiction in which a company is authorized to do business. Uses the Address
     * entity to indicate the location of business using any of the components of the
     * address (e.g., city, state, zip code, country).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AddressType $businessLocale
     */
    public function addToBusinessLocale(\Davispeixoto\OpenTravelAlliance\AddressType $businessLocale)
    {
        $this->businessLocale[] = $businessLocale;

        return $this;
    }

    /**
     * isset businessLocale
     *
     * A jurisdiction in which a company is authorized to do business. Uses the Address
     * entity to indicate the location of business using any of the components of the
     * address (e.g., city, state, zip code, country).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBusinessLocale($index)
    {
        return isset($this->businessLocale[$index]);
    }

    /**
     * unset businessLocale
     *
     * A jurisdiction in which a company is authorized to do business. Uses the Address
     * entity to indicate the location of business using any of the components of the
     * address (e.g., city, state, zip code, country).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBusinessLocale($index)
    {
        unset($this->businessLocale[$index]);
    }

    /**
     * Gets as businessLocale
     *
     * A jurisdiction in which a company is authorized to do business. Uses the Address
     * entity to indicate the location of business using any of the components of the
     * address (e.g., city, state, zip code, country).
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressType[]
     */
    public function getBusinessLocale()
    {
        return $this->businessLocale;
    }

    /**
     * Sets a new businessLocale
     *
     * A jurisdiction in which a company is authorized to do business. Uses the Address
     * entity to indicate the location of business using any of the components of the
     * address (e.g., city, state, zip code, country).
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressType[] $businessLocale
     * @return self
     */
    public function setBusinessLocale(array $businessLocale)
    {
        $this->businessLocale = $businessLocale;

        return $this;
    }

    /**
     * Adds as paymentForm
     *
     * Method of providing funds for travel by the company.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyInfoType\PaymentFormAType
     * $paymentForm
     */
    public function addToPaymentForm(\Davispeixoto\OpenTravelAlliance\CompanyInfoType\PaymentFormAType $paymentForm)
    {
        $this->paymentForm[] = $paymentForm;

        return $this;
    }

    /**
     * isset paymentForm
     *
     * Method of providing funds for travel by the company.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentForm($index)
    {
        return isset($this->paymentForm[$index]);
    }

    /**
     * unset paymentForm
     *
     * Method of providing funds for travel by the company.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentForm($index)
    {
        unset($this->paymentForm[$index]);
    }

    /**
     * Gets as paymentForm
     *
     * Method of providing funds for travel by the company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyInfoType\PaymentFormAType[]
     */
    public function getPaymentForm()
    {
        return $this->paymentForm;
    }

    /**
     * Sets a new paymentForm
     *
     * Method of providing funds for travel by the company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyInfoType\PaymentFormAType[]
     * $paymentForm
     * @return self
     */
    public function setPaymentForm(array $paymentForm)
    {
        $this->paymentForm = $paymentForm;

        return $this;
    }

    /**
     * Adds as guaranteePayment
     *
     * Description: A deposit policy that is associated to this profile.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType
     * $guaranteePayment
     */
    public function addToDepositPayment(
        \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment
    ) {
        $this->depositPayment[] = $guaranteePayment;

        return $this;
    }

    /**
     * isset depositPayment
     *
     * Description: A deposit policy that is associated to this profile.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDepositPayment($index)
    {
        return isset($this->depositPayment[$index]);
    }

    /**
     * unset depositPayment
     *
     * Description: A deposit policy that is associated to this profile.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDepositPayment($index)
    {
        unset($this->depositPayment[$index]);
    }

    /**
     * Gets as depositPayment
     *
     * Description: A deposit policy that is associated to this profile.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType[]
     */
    public function getDepositPayment()
    {
        return $this->depositPayment;
    }

    /**
     * Sets a new depositPayment
     *
     * Description: A deposit policy that is associated to this profile.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType[]
     * $depositPayment
     * @return self
     */
    public function setDepositPayment(array $depositPayment)
    {
        $this->depositPayment = $depositPayment;

        return $this;
    }

    /**
     * Adds as contactPerson
     *
     * Information on a contact person for the company.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contactPerson
     */
    public function addToContactPerson(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contactPerson)
    {
        $this->contactPerson[] = $contactPerson;

        return $this;
    }

    /**
     * isset contactPerson
     *
     * Information on a contact person for the company.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContactPerson($index)
    {
        return isset($this->contactPerson[$index]);
    }

    /**
     * unset contactPerson
     *
     * Information on a contact person for the company.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContactPerson($index)
    {
        unset($this->contactPerson[$index]);
    }

    /**
     * Gets as contactPerson
     *
     * Information on a contact person for the company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType[]
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * Sets a new contactPerson
     *
     * Information on a contact person for the company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contactPerson
     * @return self
     */
    public function setContactPerson(array $contactPerson)
    {
        $this->contactPerson = $contactPerson;

        return $this;
    }

    /**
     * Adds as travelArranger
     *
     * Information on the organization responsible for arranging travel for the
     * company.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TravelArrangerType $travelArranger
     */
    public function addToTravelArranger(\Davispeixoto\OpenTravelAlliance\TravelArrangerType $travelArranger)
    {
        $this->travelArranger[] = $travelArranger;

        return $this;
    }

    /**
     * isset travelArranger
     *
     * Information on the organization responsible for arranging travel for the
     * company.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelArranger($index)
    {
        return isset($this->travelArranger[$index]);
    }

    /**
     * unset travelArranger
     *
     * Information on the organization responsible for arranging travel for the
     * company.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelArranger($index)
    {
        unset($this->travelArranger[$index]);
    }

    /**
     * Gets as travelArranger
     *
     * Information on the organization responsible for arranging travel for the
     * company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelArrangerType[]
     */
    public function getTravelArranger()
    {
        return $this->travelArranger;
    }

    /**
     * Sets a new travelArranger
     *
     * Information on the organization responsible for arranging travel for the
     * company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelArrangerType[] $travelArranger
     * @return self
     */
    public function setTravelArranger(array $travelArranger)
    {
        $this->travelArranger = $travelArranger;

        return $this;
    }

    /**
     * Adds as loyaltyProgram
     *
     * Company's loyalty program information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyProgramType $loyaltyProgram
     */
    public function addToLoyaltyProgram(\Davispeixoto\OpenTravelAlliance\LoyaltyProgramType $loyaltyProgram)
    {
        $this->loyaltyProgram[] = $loyaltyProgram;

        return $this;
    }

    /**
     * isset loyaltyProgram
     *
     * Company's loyalty program information.
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
     * Company's loyalty program information.
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
     * Company's loyalty program information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LoyaltyProgramType[]
     */
    public function getLoyaltyProgram()
    {
        return $this->loyaltyProgram;
    }

    /**
     * Sets a new loyaltyProgram
     *
     * Company's loyalty program information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyProgramType[] $loyaltyProgram
     * @return self
     */
    public function setLoyaltyProgram(array $loyaltyProgram)
    {
        $this->loyaltyProgram = $loyaltyProgram;

        return $this;
    }

    /**
     * Adds as tripPurpose
     *
     * Trip purpose codes used by this company.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyInfoType\TripPurposeAType
     * $tripPurpose
     */
    public function addToTripPurpose(\Davispeixoto\OpenTravelAlliance\CompanyInfoType\TripPurposeAType $tripPurpose)
    {
        $this->tripPurpose[] = $tripPurpose;

        return $this;
    }

    /**
     * isset tripPurpose
     *
     * Trip purpose codes used by this company.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTripPurpose($index)
    {
        return isset($this->tripPurpose[$index]);
    }

    /**
     * unset tripPurpose
     *
     * Trip purpose codes used by this company.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTripPurpose($index)
    {
        unset($this->tripPurpose[$index]);
    }

    /**
     * Gets as tripPurpose
     *
     * Trip purpose codes used by this company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyInfoType\TripPurposeAType[]
     */
    public function getTripPurpose()
    {
        return $this->tripPurpose;
    }

    /**
     * Sets a new tripPurpose
     *
     * Trip purpose codes used by this company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyInfoType\TripPurposeAType[]
     * $tripPurpose
     * @return self
     */
    public function setTripPurpose(array $tripPurpose)
    {
        $this->tripPurpose = $tripPurpose;

        return $this;
    }


}

