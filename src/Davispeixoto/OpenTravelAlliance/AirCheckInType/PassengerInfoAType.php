<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType;

/**
 * Class representing PassengerInfoAType
 */
class PassengerInfoAType
{

    /**
     * Provides a unique reference to this passenger.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Provides a unique reference to an adult passenger so that an infant or child
     * passenger can be related to that adult passenger.
     *
     * @property string $passengerRPH
     */
    private $passengerRPH = null;

    /**
     * Identifies the jump seat authority for the passenger.
     *
     * @property string $jumpSeatAuthority
     */
    private $jumpSeatAuthority = null;

    /**
     * Notifies the security agency (e.g., TSA) of a general security check requirement
     * (e.g., SSSS - Secondary Security Screening Selectee).
     *
     * @property string $securityCode
     */
    private $securityCode = null;

    /**
     * Identifies the booking group to which this passenger belongs.
     *
     * @property string $groupReference
     */
    private $groupReference = null;

    /**
     * A date and time stamp of when a passenger was added to the standby list.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $addToStandbyDateTime
     */
    private $addToStandbyDateTime = null;

    /**
     * If true, an infant is being checked in with this passenger.
     *
     * @property boolean $infantIndicator
     */
    private $infantIndicator = null;

    /**
     * The company seniority date for an employee. May be used for non-revenue travel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $employeeSeniorityDate
     */
    private $employeeSeniorityDate = null;

    /**
     * The length of time that the employee has been (or was) employed by the airline.
     * For example, if an employee has 5 years and 20 days of service then the employee
     * length of service field will contain a value of P5Y20D.
     *
     * @property \DateInterval $employeeLengthOfService
     */
    private $employeeLengthOfService = null;

    /**
     * Identifies passengers that wish to be seated adjacent to each other.
     *
     * @property string $passengerAssociationID
     */
    private $passengerAssociationID = null;

    /**
     * The passenger's name.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $passengerName
     */
    private $passengerName = null;

    /**
     * Identifies the weight of the passenger.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\PassengerWeightAType
     * $passengerWeight
     */
    private $passengerWeight = null;

    /**
     * Other Service Information (OSI).
     *
     * @property \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType[]
     * $otherServiceInformation
     */
    private $otherServiceInformation = null;

    /**
     * Emergency contact information for the passenger.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\ContactInfoAType[]
     * $contactInfo
     */
    private $contactInfo = null;

    /**
     * Specifies a PTC for the passenger.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\PassengerTypeAType[]
     * $passengerType
     */
    private $passengerType = null;

    /**
     * Identifies the ticket to be used to check in for a flight segment or segments
     * for this passenger. Also, this information can be used to print an itinerary
     * receipt.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType[]
     * $ticketingInfo
     */
    private $ticketingInfo = null;

    /**
     * Gets as rPH
     *
     * Provides a unique reference to this passenger.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Provides a unique reference to this passenger.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as passengerRPH
     *
     * Provides a unique reference to an adult passenger so that an infant or child
     * passenger can be related to that adult passenger.
     *
     * @return string
     */
    public function getPassengerRPH()
    {
        return $this->passengerRPH;
    }

    /**
     * Sets a new passengerRPH
     *
     * Provides a unique reference to an adult passenger so that an infant or child
     * passenger can be related to that adult passenger.
     *
     * @param string $passengerRPH
     * @return self
     */
    public function setPassengerRPH($passengerRPH)
    {
        $this->passengerRPH = $passengerRPH;

        return $this;
    }

    /**
     * Gets as jumpSeatAuthority
     *
     * Identifies the jump seat authority for the passenger.
     *
     * @return string
     */
    public function getJumpSeatAuthority()
    {
        return $this->jumpSeatAuthority;
    }

    /**
     * Sets a new jumpSeatAuthority
     *
     * Identifies the jump seat authority for the passenger.
     *
     * @param string $jumpSeatAuthority
     * @return self
     */
    public function setJumpSeatAuthority($jumpSeatAuthority)
    {
        $this->jumpSeatAuthority = $jumpSeatAuthority;

        return $this;
    }

    /**
     * Gets as securityCode
     *
     * Notifies the security agency (e.g., TSA) of a general security check requirement
     * (e.g., SSSS - Secondary Security Screening Selectee).
     *
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * Sets a new securityCode
     *
     * Notifies the security agency (e.g., TSA) of a general security check requirement
     * (e.g., SSSS - Secondary Security Screening Selectee).
     *
     * @param string $securityCode
     * @return self
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;

        return $this;
    }

    /**
     * Gets as groupReference
     *
     * Identifies the booking group to which this passenger belongs.
     *
     * @return string
     */
    public function getGroupReference()
    {
        return $this->groupReference;
    }

    /**
     * Sets a new groupReference
     *
     * Identifies the booking group to which this passenger belongs.
     *
     * @param string $groupReference
     * @return self
     */
    public function setGroupReference($groupReference)
    {
        $this->groupReference = $groupReference;

        return $this;
    }

    /**
     * Gets as addToStandbyDateTime
     *
     * A date and time stamp of when a passenger was added to the standby list.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getAddToStandbyDateTime()
    {
        return $this->addToStandbyDateTime;
    }

    /**
     * Sets a new addToStandbyDateTime
     *
     * A date and time stamp of when a passenger was added to the standby list.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $addToStandbyDateTime
     * @return self
     */
    public function setAddToStandbyDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $addToStandbyDateTime)
    {
        $this->addToStandbyDateTime = $addToStandbyDateTime;

        return $this;
    }

    /**
     * Gets as infantIndicator
     *
     * If true, an infant is being checked in with this passenger.
     *
     * @return boolean
     */
    public function getInfantIndicator()
    {
        return $this->infantIndicator;
    }

    /**
     * Sets a new infantIndicator
     *
     * If true, an infant is being checked in with this passenger.
     *
     * @param boolean $infantIndicator
     * @return self
     */
    public function setInfantIndicator($infantIndicator)
    {
        $this->infantIndicator = $infantIndicator;

        return $this;
    }

    /**
     * Gets as employeeSeniorityDate
     *
     * The company seniority date for an employee. May be used for non-revenue travel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getEmployeeSeniorityDate()
    {
        return $this->employeeSeniorityDate;
    }

    /**
     * Sets a new employeeSeniorityDate
     *
     * The company seniority date for an employee. May be used for non-revenue travel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $employeeSeniorityDate
     * @return self
     */
    public function setEmployeeSeniorityDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $employeeSeniorityDate)
    {
        $this->employeeSeniorityDate = $employeeSeniorityDate;

        return $this;
    }

    /**
     * Gets as employeeLengthOfService
     *
     * The length of time that the employee has been (or was) employed by the airline.
     * For example, if an employee has 5 years and 20 days of service then the employee
     * length of service field will contain a value of P5Y20D.
     *
     * @return \DateInterval
     */
    public function getEmployeeLengthOfService()
    {
        return $this->employeeLengthOfService;
    }

    /**
     * Sets a new employeeLengthOfService
     *
     * The length of time that the employee has been (or was) employed by the airline.
     * For example, if an employee has 5 years and 20 days of service then the employee
     * length of service field will contain a value of P5Y20D.
     *
     * @param \DateInterval $employeeLengthOfService
     * @return self
     */
    public function setEmployeeLengthOfService(\DateInterval $employeeLengthOfService)
    {
        $this->employeeLengthOfService = $employeeLengthOfService;

        return $this;
    }

    /**
     * Gets as passengerAssociationID
     *
     * Identifies passengers that wish to be seated adjacent to each other.
     *
     * @return string
     */
    public function getPassengerAssociationID()
    {
        return $this->passengerAssociationID;
    }

    /**
     * Sets a new passengerAssociationID
     *
     * Identifies passengers that wish to be seated adjacent to each other.
     *
     * @param string $passengerAssociationID
     * @return self
     */
    public function setPassengerAssociationID($passengerAssociationID)
    {
        $this->passengerAssociationID = $passengerAssociationID;

        return $this;
    }

    /**
     * Gets as passengerName
     *
     * The passenger's name.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getPassengerName()
    {
        return $this->passengerName;
    }

    /**
     * Sets a new passengerName
     *
     * The passenger's name.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $passengerName
     * @return self
     */
    public function setPassengerName(\Davispeixoto\OpenTravelAlliance\PersonNameType $passengerName)
    {
        $this->passengerName = $passengerName;

        return $this;
    }

    /**
     * Gets as passengerWeight
     *
     * Identifies the weight of the passenger.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\PassengerWeightAType
     */
    public function getPassengerWeight()
    {
        return $this->passengerWeight;
    }

    /**
     * Sets a new passengerWeight
     *
     * Identifies the weight of the passenger.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\PassengerWeightAType
     * $passengerWeight
     * @return self
     */
    public function setPassengerWeight(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\PassengerWeightAType $passengerWeight
    ) {
        $this->passengerWeight = $passengerWeight;

        return $this;
    }

    /**
     * Adds as otherServiceInformation
     *
     * Other Service Information (OSI).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType
     * $otherServiceInformation
     */
    public function addToOtherServiceInformation(
        \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType $otherServiceInformation
    ) {
        $this->otherServiceInformation[] = $otherServiceInformation;

        return $this;
    }

    /**
     * isset otherServiceInformation
     *
     * Other Service Information (OSI).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOtherServiceInformation($index)
    {
        return isset($this->otherServiceInformation[$index]);
    }

    /**
     * unset otherServiceInformation
     *
     * Other Service Information (OSI).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOtherServiceInformation($index)
    {
        unset($this->otherServiceInformation[$index]);
    }

    /**
     * Gets as otherServiceInformation
     *
     * Other Service Information (OSI).
     *
     * @return \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType[]
     */
    public function getOtherServiceInformation()
    {
        return $this->otherServiceInformation;
    }

    /**
     * Sets a new otherServiceInformation
     *
     * Other Service Information (OSI).
     *
     * @param \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType[]
     * $otherServiceInformation
     * @return self
     */
    public function setOtherServiceInformation(array $otherServiceInformation)
    {
        $this->otherServiceInformation = $otherServiceInformation;

        return $this;
    }

    /**
     * Adds as contactInfo
     *
     * Emergency contact information for the passenger.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\ContactInfoAType
     * $contactInfo
     */
    public function addToContactInfo(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\ContactInfoAType $contactInfo
    ) {
        $this->contactInfo[] = $contactInfo;

        return $this;
    }

    /**
     * isset contactInfo
     *
     * Emergency contact information for the passenger.
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
     * Emergency contact information for the passenger.
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
     * Emergency contact information for the passenger.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\ContactInfoAType[]
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets a new contactInfo
     *
     * Emergency contact information for the passenger.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\ContactInfoAType[]
     * $contactInfo
     * @return self
     */
    public function setContactInfo(array $contactInfo)
    {
        $this->contactInfo = $contactInfo;

        return $this;
    }

    /**
     * Adds as passengerType
     *
     * Specifies a PTC for the passenger.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\PassengerTypeAType
     * $passengerType
     */
    public function addToPassengerType(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\PassengerTypeAType $passengerType
    ) {
        $this->passengerType[] = $passengerType;

        return $this;
    }

    /**
     * isset passengerType
     *
     * Specifies a PTC for the passenger.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerType($index)
    {
        return isset($this->passengerType[$index]);
    }

    /**
     * unset passengerType
     *
     * Specifies a PTC for the passenger.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerType($index)
    {
        unset($this->passengerType[$index]);
    }

    /**
     * Gets as passengerType
     *
     * Specifies a PTC for the passenger.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\PassengerTypeAType[]
     */
    public function getPassengerType()
    {
        return $this->passengerType;
    }

    /**
     * Sets a new passengerType
     *
     * Specifies a PTC for the passenger.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\PassengerTypeAType[]
     * $passengerType
     * @return self
     */
    public function setPassengerType(array $passengerType)
    {
        $this->passengerType = $passengerType;

        return $this;
    }

    /**
     * Adds as ticketingInfo
     *
     * Identifies the ticket to be used to check in for a flight segment or segments
     * for this passenger. Also, this information can be used to print an itinerary
     * receipt.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType
     * $ticketingInfo
     */
    public function addToTicketingInfo(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType $ticketingInfo
    ) {
        $this->ticketingInfo[] = $ticketingInfo;

        return $this;
    }

    /**
     * isset ticketingInfo
     *
     * Identifies the ticket to be used to check in for a flight segment or segments
     * for this passenger. Also, this information can be used to print an itinerary
     * receipt.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTicketingInfo($index)
    {
        return isset($this->ticketingInfo[$index]);
    }

    /**
     * unset ticketingInfo
     *
     * Identifies the ticket to be used to check in for a flight segment or segments
     * for this passenger. Also, this information can be used to print an itinerary
     * receipt.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTicketingInfo($index)
    {
        unset($this->ticketingInfo[$index]);
    }

    /**
     * Gets as ticketingInfo
     *
     * Identifies the ticket to be used to check in for a flight segment or segments
     * for this passenger. Also, this information can be used to print an itinerary
     * receipt.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType[]
     */
    public function getTicketingInfo()
    {
        return $this->ticketingInfo;
    }

    /**
     * Sets a new ticketingInfo
     *
     * Identifies the ticket to be used to check in for a flight segment or segments
     * for this passenger. Also, this information can be used to print an itinerary
     * receipt.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType[]
     * $ticketingInfo
     * @return self
     */
    public function setTicketingInfo(array $ticketingInfo)
    {
        $this->ticketingInfo = $ticketingInfo;

        return $this;
    }


}

