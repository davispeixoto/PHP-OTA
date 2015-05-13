<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirReservationType
 *
 * Contains all booking response information pertaining to a completed reservation.
 * XSD Type: AirReservationType
 */
class AirReservationType
{

    /**
     * Specifies the date the reservation was last modified.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $lastModified
     */
    private $lastModified = null;

    /**
     * A collection of all flight segments requested for booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirItineraryType $airItinerary
     */
    private $airItinerary = null;

    /**
     * Pricing information for the air itinerary to be booked e.g. this data could come
     * from the OTA_AirPriceRS data.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BookingPriceInfoType $priceInfo
     */
    private $priceInfo = null;

    /**
     * All traveler information relevant to a booking request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelerInfoType $travelerInfo
     */
    private $travelerInfo = null;

    /**
     * All customer information relevant to a booking request. Note a customer is
     * defined as a person or entity associated with an air trip who will not be
     * traveling. This is generally used to describe an individual or company paying
     * for a ticket or making the travel plans.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirArrangerType $arrangerInfo
     */
    private $arrangerInfo = null;

    /**
     * All payment information relevant to a booking request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FulfillmentType $fulfillment
     */
    private $fulfillment = null;

    /**
     * Information used to specify the ticketing arrangement or a summary of the
     * associated ticket(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\TicketingInfoType[] $ticketing
     */
    private $ticketing = null;

    /**
     * A container for queue information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirReservationType\QueuesAType\QueueAType[]
     * $queues
     */
    private $queues = null;

    /**
     * Optional field available for use by trading partners as determined by their
     * needs.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirReservationType\BookingReferenceIDAType[]
     * $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * Textual information for the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $comment
     */
    private $comment = null;

    /**
     * Information applicable to the pricing of the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirReservationType\PricingOverviewAType
     * $pricingOverview
     */
    private $pricingOverview = null;

    /**
     * Provides the electronic miscellaneous document information for a previously
     * issued EMD.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType[] $eMDInfo
     */
    private $eMDInfo = null;

    /**
     * Gets as lastModified
     *
     * Specifies the date the reservation was last modified.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * Sets a new lastModified
     *
     * Specifies the date the reservation was last modified.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $lastModified
     * @return self
     */
    public function setLastModified(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $lastModified)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * Gets as airItinerary
     *
     * A collection of all flight segments requested for booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirItineraryType
     */
    public function getAirItinerary()
    {
        return $this->airItinerary;
    }

    /**
     * Sets a new airItinerary
     *
     * A collection of all flight segments requested for booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirItineraryType $airItinerary
     * @return self
     */
    public function setAirItinerary(\Davispeixoto\OpenTravelAlliance\AirItineraryType $airItinerary)
    {
        $this->airItinerary = $airItinerary;

        return $this;
    }

    /**
     * Gets as priceInfo
     *
     * Pricing information for the air itinerary to be booked e.g. this data could come
     * from the OTA_AirPriceRS data.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BookingPriceInfoType
     */
    public function getPriceInfo()
    {
        return $this->priceInfo;
    }

    /**
     * Sets a new priceInfo
     *
     * Pricing information for the air itinerary to be booked e.g. this data could come
     * from the OTA_AirPriceRS data.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BookingPriceInfoType $priceInfo
     * @return self
     */
    public function setPriceInfo(\Davispeixoto\OpenTravelAlliance\BookingPriceInfoType $priceInfo)
    {
        $this->priceInfo = $priceInfo;

        return $this;
    }

    /**
     * Gets as travelerInfo
     *
     * All traveler information relevant to a booking request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelerInfoType
     */
    public function getTravelerInfo()
    {
        return $this->travelerInfo;
    }

    /**
     * Sets a new travelerInfo
     *
     * All traveler information relevant to a booking request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelerInfoType $travelerInfo
     * @return self
     */
    public function setTravelerInfo(\Davispeixoto\OpenTravelAlliance\TravelerInfoType $travelerInfo)
    {
        $this->travelerInfo = $travelerInfo;

        return $this;
    }

    /**
     * Gets as arrangerInfo
     *
     * All customer information relevant to a booking request. Note a customer is
     * defined as a person or entity associated with an air trip who will not be
     * traveling. This is generally used to describe an individual or company paying
     * for a ticket or making the travel plans.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirArrangerType
     */
    public function getArrangerInfo()
    {
        return $this->arrangerInfo;
    }

    /**
     * Sets a new arrangerInfo
     *
     * All customer information relevant to a booking request. Note a customer is
     * defined as a person or entity associated with an air trip who will not be
     * traveling. This is generally used to describe an individual or company paying
     * for a ticket or making the travel plans.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirArrangerType $arrangerInfo
     * @return self
     */
    public function setArrangerInfo(\Davispeixoto\OpenTravelAlliance\AirArrangerType $arrangerInfo)
    {
        $this->arrangerInfo = $arrangerInfo;

        return $this;
    }

    /**
     * Gets as fulfillment
     *
     * All payment information relevant to a booking request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FulfillmentType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * Sets a new fulfillment
     *
     * All payment information relevant to a booking request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FulfillmentType $fulfillment
     * @return self
     */
    public function setFulfillment(\Davispeixoto\OpenTravelAlliance\FulfillmentType $fulfillment)
    {
        $this->fulfillment = $fulfillment;

        return $this;
    }

    /**
     * Adds as ticketing
     *
     * Information used to specify the ticketing arrangement or a summary of the
     * associated ticket(s).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TicketingInfoType $ticketing
     */
    public function addToTicketing(\Davispeixoto\OpenTravelAlliance\TicketingInfoType $ticketing)
    {
        $this->ticketing[] = $ticketing;

        return $this;
    }

    /**
     * isset ticketing
     *
     * Information used to specify the ticketing arrangement or a summary of the
     * associated ticket(s).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTicketing($index)
    {
        return isset($this->ticketing[$index]);
    }

    /**
     * unset ticketing
     *
     * Information used to specify the ticketing arrangement or a summary of the
     * associated ticket(s).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTicketing($index)
    {
        unset($this->ticketing[$index]);
    }

    /**
     * Gets as ticketing
     *
     * Information used to specify the ticketing arrangement or a summary of the
     * associated ticket(s).
     *
     * @return \Davispeixoto\OpenTravelAlliance\TicketingInfoType[]
     */
    public function getTicketing()
    {
        return $this->ticketing;
    }

    /**
     * Sets a new ticketing
     *
     * Information used to specify the ticketing arrangement or a summary of the
     * associated ticket(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\TicketingInfoType[] $ticketing
     * @return self
     */
    public function setTicketing(array $ticketing)
    {
        $this->ticketing = $ticketing;

        return $this;
    }

    /**
     * Adds as queue
     *
     * A container for queue information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirReservationType\QueuesAType\QueueAType
     * $queue
     */
    public function addToQueues(\Davispeixoto\OpenTravelAlliance\AirReservationType\QueuesAType\QueueAType $queue)
    {
        $this->queues[] = $queue;

        return $this;
    }

    /**
     * isset queues
     *
     * A container for queue information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQueues($index)
    {
        return isset($this->queues[$index]);
    }

    /**
     * unset queues
     *
     * A container for queue information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQueues($index)
    {
        unset($this->queues[$index]);
    }

    /**
     * Gets as queues
     *
     * A container for queue information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirReservationType\QueuesAType\QueueAType[]
     */
    public function getQueues()
    {
        return $this->queues;
    }

    /**
     * Sets a new queues
     *
     * A container for queue information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirReservationType\QueuesAType\QueueAType[]
     * $queues
     * @return self
     */
    public function setQueues(array $queues)
    {
        $this->queues = $queues;

        return $this;
    }

    /**
     * Adds as bookingReferenceID
     *
     * Optional field available for use by trading partners as determined by their
     * needs.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirReservationType\BookingReferenceIDAType
     * $bookingReferenceID
     */
    public function addToBookingReferenceID(
        \Davispeixoto\OpenTravelAlliance\AirReservationType\BookingReferenceIDAType $bookingReferenceID
    ) {
        $this->bookingReferenceID[] = $bookingReferenceID;

        return $this;
    }

    /**
     * isset bookingReferenceID
     *
     * Optional field available for use by trading partners as determined by their
     * needs.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingReferenceID($index)
    {
        return isset($this->bookingReferenceID[$index]);
    }

    /**
     * unset bookingReferenceID
     *
     * Optional field available for use by trading partners as determined by their
     * needs.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingReferenceID($index)
    {
        unset($this->bookingReferenceID[$index]);
    }

    /**
     * Gets as bookingReferenceID
     *
     * Optional field available for use by trading partners as determined by their
     * needs.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirReservationType\BookingReferenceIDAType[]
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * Optional field available for use by trading partners as determined by their
     * needs.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirReservationType\BookingReferenceIDAType[]
     * $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(array $bookingReferenceID)
    {
        $this->bookingReferenceID = $bookingReferenceID;

        return $this;
    }

    /**
     * Gets as comment
     *
     * Textual information for the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextTextType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Textual information for the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $comment
     * @return self
     */
    public function setComment(\Davispeixoto\OpenTravelAlliance\FormattedTextTextType $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Gets as pricingOverview
     *
     * Information applicable to the pricing of the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirReservationType\PricingOverviewAType
     */
    public function getPricingOverview()
    {
        return $this->pricingOverview;
    }

    /**
     * Sets a new pricingOverview
     *
     * Information applicable to the pricing of the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirReservationType\PricingOverviewAType
     * $pricingOverview
     * @return self
     */
    public function setPricingOverview(
        \Davispeixoto\OpenTravelAlliance\AirReservationType\PricingOverviewAType $pricingOverview
    ) {
        $this->pricingOverview = $pricingOverview;

        return $this;
    }

    /**
     * Adds as eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously
     * issued EMD.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EMDType $eMDInfo
     */
    public function addToEMDInfo(\Davispeixoto\OpenTravelAlliance\EMDType $eMDInfo)
    {
        $this->eMDInfo[] = $eMDInfo;

        return $this;
    }

    /**
     * isset eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously
     * issued EMD.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEMDInfo($index)
    {
        return isset($this->eMDInfo[$index]);
    }

    /**
     * unset eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously
     * issued EMD.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEMDInfo($index)
    {
        unset($this->eMDInfo[$index]);
    }

    /**
     * Gets as eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously
     * issued EMD.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType[]
     */
    public function getEMDInfo()
    {
        return $this->eMDInfo;
    }

    /**
     * Sets a new eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously
     * issued EMD.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType[] $eMDInfo
     * @return self
     */
    public function setEMDInfo(array $eMDInfo)
    {
        $this->eMDInfo = $eMDInfo;

        return $this;
    }


}

