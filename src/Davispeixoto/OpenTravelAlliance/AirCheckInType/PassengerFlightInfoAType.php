<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType;

/**
 * Class representing PassengerFlightInfoAType
 */
class PassengerFlightInfoAType
{

    /**
     * A reference place holder used as a pointer to link back to the passenger.
     *
     * @property string $passengerRPH
     */
    private $passengerRPH = null;

    /**
     * A reference place holder used as a pointer to link back to the flight.
     *
     * @property string $flightRPH
     */
    private $flightRPH = null;

    /**
     * Identification of baggage requiring preferential treatment by class or
     * compartment. This may be different from passenger booked class in some systems.
     *
     * @property string $baggageCabinType
     */
    private $baggageCabinType = null;

    /**
     * A code designator that identifies a special characteristic of the passenger or
     * seat (e.g., CBBG (cabin baggage), COUR (courier), DIPL(diplomatic courier)).
     * Refer to IATA Reso 728, 4.1. IATA Recommended Practice 1708.
     *
     * @property string $specialPurposeCode
     */
    private $specialPurposeCode = null;

    /**
     * If true, this passenger has voluteered for denied boarding.
     *
     * @property boolean $deniedBoardingVolunteerInd
     */
    private $deniedBoardingVolunteerInd = null;

    /**
     * If true, the traveler will collect a bag at a specified intermediate stop.
     * The traveler may wish to conduct business requiring his bag, or the airline
     * requires collection of the bag due to FAA regulations (e.g., minimum/maximum
     * connect time limitations).
     *
     * @property boolean $shortCheckInd
     */
    private $shortCheckInd = null;

    /**
     * If true, the non-revenue passenger is electronically authorized for travel.
     *
     * @property boolean $nonRevAuthorizedInd
     */
    private $nonRevAuthorizedInd = null;

    /**
     * Indicates the status of the passenger coupon on the day of departure, as encoded
     * on a magstripe. Refer to IATA reso 722c Attachment C (reference # 16).
     *
     * @property string $passengerCouponStatus
     */
    private $passengerCouponStatus = null;

    /**
     * A system generated identifier assigned to each passenger after check-in.
     *
     * @property string $dCSSequenceNumber
     */
    private $dCSSequenceNumber = null;

    /**
     * The departure control sequence number for this passenger on this flight.
     *
     * @property string $dCSPassengerRefNumber
     */
    private $dCSPassengerRefNumber = null;

    /**
     * The color associated with a boarding pass as specified by the airline.
     *
     * @property string $boardingPassColor
     */
    private $boardingPassColor = null;

    /**
     * If true, the passenger is standing by for this flight.
     *
     * @property boolean $standbyIndicator
     */
    private $standbyIndicator = null;

    /**
     * Booking information related to this passenger and flight.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\BookingInfoAType
     * $bookingInfo
     */
    private $bookingInfo = null;

    /**
     * Specifies seat and boarding information for this passenger on this flight.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\SeatBoardingInfoAType
     * $seatBoardingInfo
     */
    private $seatBoardingInfo = null;

    /**
     * Created for service charge (SVC) collection due either prior to or at check-in,
     * but may be used for other kinds of fees (e.g., upgrade, excess baggage fees).
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $fee
     */
    private $fee = null;

    /**
     * SSR's for this booking request (e.g., meals, wheelchair, unaccompanied minor).
     *
     * @property \Davispeixoto\OpenTravelAlliance\SpecialServiceRequestType[]
     * $specialServiceRequest
     */
    private $specialServiceRequest = null;

    /**
     * Advanced passenger information that can pertain to an adult or an infant for up
     * to five unique document types (e.g., visa, passport). The AIRIMP 0405 spec
     * (sections 3.12 through 3.14) specifies these data elements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\APIInfoAType[]
     * $aPIInfo
     */
    private $aPIInfo = null;

    /**
     * International document verification information related to the passenger.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\InternationalProcessingInfoAType
     * $internationalProcessingInfo
     */
    private $internationalProcessingInfo = null;

    /**
     * Contains frequent traveler information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\FrequentTravelerInfoAType
     * $frequentTravelerInfo
     */
    private $frequentTravelerInfo = null;

    /**
     * Gets as passengerRPH
     *
     * A reference place holder used as a pointer to link back to the passenger.
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
     * A reference place holder used as a pointer to link back to the passenger.
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
     * Gets as flightRPH
     *
     * A reference place holder used as a pointer to link back to the flight.
     *
     * @return string
     */
    public function getFlightRPH()
    {
        return $this->flightRPH;
    }

    /**
     * Sets a new flightRPH
     *
     * A reference place holder used as a pointer to link back to the flight.
     *
     * @param string $flightRPH
     * @return self
     */
    public function setFlightRPH($flightRPH)
    {
        $this->flightRPH = $flightRPH;

        return $this;
    }

    /**
     * Gets as baggageCabinType
     *
     * Identification of baggage requiring preferential treatment by class or
     * compartment. This may be different from passenger booked class in some systems.
     *
     * @return string
     */
    public function getBaggageCabinType()
    {
        return $this->baggageCabinType;
    }

    /**
     * Sets a new baggageCabinType
     *
     * Identification of baggage requiring preferential treatment by class or
     * compartment. This may be different from passenger booked class in some systems.
     *
     * @param string $baggageCabinType
     * @return self
     */
    public function setBaggageCabinType($baggageCabinType)
    {
        $this->baggageCabinType = $baggageCabinType;

        return $this;
    }

    /**
     * Gets as specialPurposeCode
     *
     * A code designator that identifies a special characteristic of the passenger or
     * seat (e.g., CBBG (cabin baggage), COUR (courier), DIPL(diplomatic courier)).
     * Refer to IATA Reso 728, 4.1. IATA Recommended Practice 1708.
     *
     * @return string
     */
    public function getSpecialPurposeCode()
    {
        return $this->specialPurposeCode;
    }

    /**
     * Sets a new specialPurposeCode
     *
     * A code designator that identifies a special characteristic of the passenger or
     * seat (e.g., CBBG (cabin baggage), COUR (courier), DIPL(diplomatic courier)).
     * Refer to IATA Reso 728, 4.1. IATA Recommended Practice 1708.
     *
     * @param string $specialPurposeCode
     * @return self
     */
    public function setSpecialPurposeCode($specialPurposeCode)
    {
        $this->specialPurposeCode = $specialPurposeCode;

        return $this;
    }

    /**
     * Gets as deniedBoardingVolunteerInd
     *
     * If true, this passenger has voluteered for denied boarding.
     *
     * @return boolean
     */
    public function getDeniedBoardingVolunteerInd()
    {
        return $this->deniedBoardingVolunteerInd;
    }

    /**
     * Sets a new deniedBoardingVolunteerInd
     *
     * If true, this passenger has voluteered for denied boarding.
     *
     * @param boolean $deniedBoardingVolunteerInd
     * @return self
     */
    public function setDeniedBoardingVolunteerInd($deniedBoardingVolunteerInd)
    {
        $this->deniedBoardingVolunteerInd = $deniedBoardingVolunteerInd;

        return $this;
    }

    /**
     * Gets as shortCheckInd
     *
     * If true, the traveler will collect a bag at a specified intermediate stop.
     * The traveler may wish to conduct business requiring his bag, or the airline
     * requires collection of the bag due to FAA regulations (e.g., minimum/maximum
     * connect time limitations).
     *
     * @return boolean
     */
    public function getShortCheckInd()
    {
        return $this->shortCheckInd;
    }

    /**
     * Sets a new shortCheckInd
     *
     * If true, the traveler will collect a bag at a specified intermediate stop.
     * The traveler may wish to conduct business requiring his bag, or the airline
     * requires collection of the bag due to FAA regulations (e.g., minimum/maximum
     * connect time limitations).
     *
     * @param boolean $shortCheckInd
     * @return self
     */
    public function setShortCheckInd($shortCheckInd)
    {
        $this->shortCheckInd = $shortCheckInd;

        return $this;
    }

    /**
     * Gets as nonRevAuthorizedInd
     *
     * If true, the non-revenue passenger is electronically authorized for travel.
     *
     * @return boolean
     */
    public function getNonRevAuthorizedInd()
    {
        return $this->nonRevAuthorizedInd;
    }

    /**
     * Sets a new nonRevAuthorizedInd
     *
     * If true, the non-revenue passenger is electronically authorized for travel.
     *
     * @param boolean $nonRevAuthorizedInd
     * @return self
     */
    public function setNonRevAuthorizedInd($nonRevAuthorizedInd)
    {
        $this->nonRevAuthorizedInd = $nonRevAuthorizedInd;

        return $this;
    }

    /**
     * Gets as passengerCouponStatus
     *
     * Indicates the status of the passenger coupon on the day of departure, as encoded
     * on a magstripe. Refer to IATA reso 722c Attachment C (reference # 16).
     *
     * @return string
     */
    public function getPassengerCouponStatus()
    {
        return $this->passengerCouponStatus;
    }

    /**
     * Sets a new passengerCouponStatus
     *
     * Indicates the status of the passenger coupon on the day of departure, as encoded
     * on a magstripe. Refer to IATA reso 722c Attachment C (reference # 16).
     *
     * @param string $passengerCouponStatus
     * @return self
     */
    public function setPassengerCouponStatus($passengerCouponStatus)
    {
        $this->passengerCouponStatus = $passengerCouponStatus;

        return $this;
    }

    /**
     * Gets as dCSSequenceNumber
     *
     * A system generated identifier assigned to each passenger after check-in.
     *
     * @return string
     */
    public function getDCSSequenceNumber()
    {
        return $this->dCSSequenceNumber;
    }

    /**
     * Sets a new dCSSequenceNumber
     *
     * A system generated identifier assigned to each passenger after check-in.
     *
     * @param string $dCSSequenceNumber
     * @return self
     */
    public function setDCSSequenceNumber($dCSSequenceNumber)
    {
        $this->dCSSequenceNumber = $dCSSequenceNumber;

        return $this;
    }

    /**
     * Gets as dCSPassengerRefNumber
     *
     * The departure control sequence number for this passenger on this flight.
     *
     * @return string
     */
    public function getDCSPassengerRefNumber()
    {
        return $this->dCSPassengerRefNumber;
    }

    /**
     * Sets a new dCSPassengerRefNumber
     *
     * The departure control sequence number for this passenger on this flight.
     *
     * @param string $dCSPassengerRefNumber
     * @return self
     */
    public function setDCSPassengerRefNumber($dCSPassengerRefNumber)
    {
        $this->dCSPassengerRefNumber = $dCSPassengerRefNumber;

        return $this;
    }

    /**
     * Gets as boardingPassColor
     *
     * The color associated with a boarding pass as specified by the airline.
     *
     * @return string
     */
    public function getBoardingPassColor()
    {
        return $this->boardingPassColor;
    }

    /**
     * Sets a new boardingPassColor
     *
     * The color associated with a boarding pass as specified by the airline.
     *
     * @param string $boardingPassColor
     * @return self
     */
    public function setBoardingPassColor($boardingPassColor)
    {
        $this->boardingPassColor = $boardingPassColor;

        return $this;
    }

    /**
     * Gets as standbyIndicator
     *
     * If true, the passenger is standing by for this flight.
     *
     * @return boolean
     */
    public function getStandbyIndicator()
    {
        return $this->standbyIndicator;
    }

    /**
     * Sets a new standbyIndicator
     *
     * If true, the passenger is standing by for this flight.
     *
     * @param boolean $standbyIndicator
     * @return self
     */
    public function setStandbyIndicator($standbyIndicator)
    {
        $this->standbyIndicator = $standbyIndicator;

        return $this;
    }

    /**
     * Gets as bookingInfo
     *
     * Booking information related to this passenger and flight.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\BookingInfoAType
     */
    public function getBookingInfo()
    {
        return $this->bookingInfo;
    }

    /**
     * Sets a new bookingInfo
     *
     * Booking information related to this passenger and flight.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\BookingInfoAType
     * $bookingInfo
     * @return self
     */
    public function setBookingInfo(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\BookingInfoAType $bookingInfo
    ) {
        $this->bookingInfo = $bookingInfo;

        return $this;
    }

    /**
     * Gets as seatBoardingInfo
     *
     * Specifies seat and boarding information for this passenger on this flight.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\SeatBoardingInfoAType
     */
    public function getSeatBoardingInfo()
    {
        return $this->seatBoardingInfo;
    }

    /**
     * Sets a new seatBoardingInfo
     *
     * Specifies seat and boarding information for this passenger on this flight.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\SeatBoardingInfoAType
     * $seatBoardingInfo
     * @return self
     */
    public function setSeatBoardingInfo(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\SeatBoardingInfoAType $seatBoardingInfo
    ) {
        $this->seatBoardingInfo = $seatBoardingInfo;

        return $this;
    }

    /**
     * Adds as fee
     *
     * Created for service charge (SVC) collection due either prior to or at check-in,
     * but may be used for other kinds of fees (e.g., upgrade, excess baggage fees).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $fee
     */
    public function addToFee(\Davispeixoto\OpenTravelAlliance\FeeType $fee)
    {
        $this->fee[] = $fee;

        return $this;
    }

    /**
     * isset fee
     *
     * Created for service charge (SVC) collection due either prior to or at check-in,
     * but may be used for other kinds of fees (e.g., upgrade, excess baggage fees).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * Created for service charge (SVC) collection due either prior to or at check-in,
     * but may be used for other kinds of fees (e.g., upgrade, excess baggage fees).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * Created for service charge (SVC) collection due either prior to or at check-in,
     * but may be used for other kinds of fees (e.g., upgrade, excess baggage fees).
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * Created for service charge (SVC) collection due either prior to or at check-in,
     * but may be used for other kinds of fees (e.g., upgrade, excess baggage fees).
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Adds as specialServiceRequest
     *
     * SSR's for this booking request (e.g., meals, wheelchair, unaccompanied minor).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SpecialServiceRequestType
     * $specialServiceRequest
     */
    public function addToSpecialServiceRequest(
        \Davispeixoto\OpenTravelAlliance\SpecialServiceRequestType $specialServiceRequest
    ) {
        $this->specialServiceRequest[] = $specialServiceRequest;

        return $this;
    }

    /**
     * isset specialServiceRequest
     *
     * SSR's for this booking request (e.g., meals, wheelchair, unaccompanied minor).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialServiceRequest($index)
    {
        return isset($this->specialServiceRequest[$index]);
    }

    /**
     * unset specialServiceRequest
     *
     * SSR's for this booking request (e.g., meals, wheelchair, unaccompanied minor).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialServiceRequest($index)
    {
        unset($this->specialServiceRequest[$index]);
    }

    /**
     * Gets as specialServiceRequest
     *
     * SSR's for this booking request (e.g., meals, wheelchair, unaccompanied minor).
     *
     * @return \Davispeixoto\OpenTravelAlliance\SpecialServiceRequestType[]
     */
    public function getSpecialServiceRequest()
    {
        return $this->specialServiceRequest;
    }

    /**
     * Sets a new specialServiceRequest
     *
     * SSR's for this booking request (e.g., meals, wheelchair, unaccompanied minor).
     *
     * @param \Davispeixoto\OpenTravelAlliance\SpecialServiceRequestType[]
     * $specialServiceRequest
     * @return self
     */
    public function setSpecialServiceRequest(array $specialServiceRequest)
    {
        $this->specialServiceRequest = $specialServiceRequest;

        return $this;
    }

    /**
     * Adds as aPIInfo
     *
     * Advanced passenger information that can pertain to an adult or an infant for up
     * to five unique document types (e.g., visa, passport). The AIRIMP 0405 spec
     * (sections 3.12 through 3.14) specifies these data elements.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\APIInfoAType
     * $aPIInfo
     */
    public function addToAPIInfo(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\APIInfoAType $aPIInfo
    ) {
        $this->aPIInfo[] = $aPIInfo;

        return $this;
    }

    /**
     * isset aPIInfo
     *
     * Advanced passenger information that can pertain to an adult or an infant for up
     * to five unique document types (e.g., visa, passport). The AIRIMP 0405 spec
     * (sections 3.12 through 3.14) specifies these data elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAPIInfo($index)
    {
        return isset($this->aPIInfo[$index]);
    }

    /**
     * unset aPIInfo
     *
     * Advanced passenger information that can pertain to an adult or an infant for up
     * to five unique document types (e.g., visa, passport). The AIRIMP 0405 spec
     * (sections 3.12 through 3.14) specifies these data elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAPIInfo($index)
    {
        unset($this->aPIInfo[$index]);
    }

    /**
     * Gets as aPIInfo
     *
     * Advanced passenger information that can pertain to an adult or an infant for up
     * to five unique document types (e.g., visa, passport). The AIRIMP 0405 spec
     * (sections 3.12 through 3.14) specifies these data elements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\APIInfoAType[]
     */
    public function getAPIInfo()
    {
        return $this->aPIInfo;
    }

    /**
     * Sets a new aPIInfo
     *
     * Advanced passenger information that can pertain to an adult or an infant for up
     * to five unique document types (e.g., visa, passport). The AIRIMP 0405 spec
     * (sections 3.12 through 3.14) specifies these data elements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\APIInfoAType[]
     * $aPIInfo
     * @return self
     */
    public function setAPIInfo(array $aPIInfo)
    {
        $this->aPIInfo = $aPIInfo;

        return $this;
    }

    /**
     * Gets as internationalProcessingInfo
     *
     * International document verification information related to the passenger.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\InternationalProcessingInfoAType
     */
    public function getInternationalProcessingInfo()
    {
        return $this->internationalProcessingInfo;
    }

    /**
     * Sets a new internationalProcessingInfo
     *
     * International document verification information related to the passenger.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\InternationalProcessingInfoAType
     * $internationalProcessingInfo
     * @return self
     */
    public function setInternationalProcessingInfo(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\InternationalProcessingInfoAType $internationalProcessingInfo
    ) {
        $this->internationalProcessingInfo = $internationalProcessingInfo;

        return $this;
    }

    /**
     * Gets as frequentTravelerInfo
     *
     * Contains frequent traveler information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\FrequentTravelerInfoAType
     */
    public function getFrequentTravelerInfo()
    {
        return $this->frequentTravelerInfo;
    }

    /**
     * Sets a new frequentTravelerInfo
     *
     * Contains frequent traveler information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\FrequentTravelerInfoAType
     * $frequentTravelerInfo
     * @return self
     */
    public function setFrequentTravelerInfo(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\FrequentTravelerInfoAType $frequentTravelerInfo
    ) {
        $this->frequentTravelerInfo = $frequentTravelerInfo;

        return $this;
    }


}

