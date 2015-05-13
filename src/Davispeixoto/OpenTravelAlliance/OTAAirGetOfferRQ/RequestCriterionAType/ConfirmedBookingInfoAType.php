<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType;

/**
 * Class representing ConfirmedBookingInfoAType
 */
class ConfirmedBookingInfoAType
{

    /**
     * Specifies the date the reservation was last modified.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $lastModified
     */
    private $lastModified = null;

    /**
     * A collection of all flight segments for the booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PricedItineraryType $airItinerary
     */
    private $airItinerary = null;

    /**
     * All traveler information relevant to the booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelerInfoType $traveler
     */
    private $traveler = null;

    /**
     * All arranger information relevant to the booking. Note an arranger is defined as
     * a person or entity associated with an air trip who will not be traveling. This
     * is generally used to describe an individual or company paying for a ticket or
     * making the travel plans.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirArrangerType $arranger
     */
    private $arranger = null;

    /**
     * All payment information relevant to the booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormType $payment
     */
    private $payment = null;

    /**
     * Information that specifies the ticketing arrangement or a summary of the
     * associated ticket(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\TicketingInfoType[] $ticketing
     */
    private $ticketing = null;

    /**
     * Information applicable to the pricing of the booking.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\ConfirmedBookingInfoAType\PricingAType
     * $pricing
     */
    private $pricing = null;

    /**
     * Information pertaining to any merchandising offers purchased by the traveler
     * and/or arranger associated with this booking.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirPurchasedOfferType\PurchasedItemAType[]
     * $purchasedOffers
     */
    private $purchasedOffers = null;

    /**
     * The passenger PNR or other booking reference ID.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $bookingReferenceID
     */
    private $bookingReferenceID = null;

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
     * A collection of all flight segments for the booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PricedItineraryType
     */
    public function getAirItinerary()
    {
        return $this->airItinerary;
    }

    /**
     * Sets a new airItinerary
     *
     * A collection of all flight segments for the booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PricedItineraryType $airItinerary
     * @return self
     */
    public function setAirItinerary(\Davispeixoto\OpenTravelAlliance\PricedItineraryType $airItinerary)
    {
        $this->airItinerary = $airItinerary;

        return $this;
    }

    /**
     * Gets as traveler
     *
     * All traveler information relevant to the booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelerInfoType
     */
    public function getTraveler()
    {
        return $this->traveler;
    }

    /**
     * Sets a new traveler
     *
     * All traveler information relevant to the booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelerInfoType $traveler
     * @return self
     */
    public function setTraveler(\Davispeixoto\OpenTravelAlliance\TravelerInfoType $traveler)
    {
        $this->traveler = $traveler;

        return $this;
    }

    /**
     * Gets as arranger
     *
     * All arranger information relevant to the booking. Note an arranger is defined as
     * a person or entity associated with an air trip who will not be traveling. This
     * is generally used to describe an individual or company paying for a ticket or
     * making the travel plans.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirArrangerType
     */
    public function getArranger()
    {
        return $this->arranger;
    }

    /**
     * Sets a new arranger
     *
     * All arranger information relevant to the booking. Note an arranger is defined as
     * a person or entity associated with an air trip who will not be traveling. This
     * is generally used to describe an individual or company paying for a ticket or
     * making the travel plans.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirArrangerType $arranger
     * @return self
     */
    public function setArranger(\Davispeixoto\OpenTravelAlliance\AirArrangerType $arranger)
    {
        $this->arranger = $arranger;

        return $this;
    }

    /**
     * Gets as payment
     *
     * All payment information relevant to the booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentFormType
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * All payment information relevant to the booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType $payment
     * @return self
     */
    public function setPayment(\Davispeixoto\OpenTravelAlliance\PaymentFormType $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Adds as ticketing
     *
     * Information that specifies the ticketing arrangement or a summary of the
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
     * Information that specifies the ticketing arrangement or a summary of the
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
     * Information that specifies the ticketing arrangement or a summary of the
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
     * Information that specifies the ticketing arrangement or a summary of the
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
     * Information that specifies the ticketing arrangement or a summary of the
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
     * Gets as pricing
     *
     * Information applicable to the pricing of the booking.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\ConfirmedBookingInfoAType\PricingAType
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets a new pricing
     *
     * Information applicable to the pricing of the booking.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\ConfirmedBookingInfoAType\PricingAType
     * $pricing
     * @return self
     */
    public function setPricing(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\ConfirmedBookingInfoAType\PricingAType $pricing
    ) {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Adds as purchasedItem
     *
     * Information pertaining to any merchandising offers purchased by the traveler
     * and/or arranger associated with this booking.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirPurchasedOfferType\PurchasedItemAType
     * $purchasedItem
     */
    public function addToPurchasedOffers(
        \Davispeixoto\OpenTravelAlliance\AirPurchasedOfferType\PurchasedItemAType $purchasedItem
    ) {
        $this->purchasedOffers[] = $purchasedItem;

        return $this;
    }

    /**
     * isset purchasedOffers
     *
     * Information pertaining to any merchandising offers purchased by the traveler
     * and/or arranger associated with this booking.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPurchasedOffers($index)
    {
        return isset($this->purchasedOffers[$index]);
    }

    /**
     * unset purchasedOffers
     *
     * Information pertaining to any merchandising offers purchased by the traveler
     * and/or arranger associated with this booking.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPurchasedOffers($index)
    {
        unset($this->purchasedOffers[$index]);
    }

    /**
     * Gets as purchasedOffers
     *
     * Information pertaining to any merchandising offers purchased by the traveler
     * and/or arranger associated with this booking.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirPurchasedOfferType\PurchasedItemAType[]
     */
    public function getPurchasedOffers()
    {
        return $this->purchasedOffers;
    }

    /**
     * Sets a new purchasedOffers
     *
     * Information pertaining to any merchandising offers purchased by the traveler
     * and/or arranger associated with this booking.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirPurchasedOfferType\PurchasedItemAType[]
     * $purchasedOffers
     * @return self
     */
    public function setPurchasedOffers(array $purchasedOffers)
    {
        $this->purchasedOffers = $purchasedOffers;

        return $this;
    }

    /**
     * Adds as bookingReferenceID
     *
     * The passenger PNR or other booking reference ID.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID
     */
    public function addToBookingReferenceID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID)
    {
        $this->bookingReferenceID[] = $bookingReferenceID;

        return $this;
    }

    /**
     * isset bookingReferenceID
     *
     * The passenger PNR or other booking reference ID.
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
     * The passenger PNR or other booking reference ID.
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
     * The passenger PNR or other booking reference ID.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * The passenger PNR or other booking reference ID.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(array $bookingReferenceID)
    {
        $this->bookingReferenceID = $bookingReferenceID;

        return $this;
    }


}

