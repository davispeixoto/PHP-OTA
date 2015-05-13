<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ItineraryInfoType
 *
 * Specific itinerary information, including additional contact information,
 * reservation items, air reservation ticket information, pricing and special
 * requests.
 * XSD Type: ItineraryInfoType
 */
class ItineraryInfoType
{

    /**
     * Additional contact information eg. travel agency.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType $contactInfo
     */
    private $contactInfo = null;

    /**
     * Itinerary reservation items (e.g. Car, Hotel, Air, Cruise, Rail, Tour, Package).
     *
     * @property \Davispeixoto\OpenTravelAlliance\ReservationItemsType
     * $reservationItems
     */
    private $reservationItems = null;

    /**
     * Air reservation ticket information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItineraryInfoType\TicketingAType
     * $ticketing
     */
    private $ticketing = null;

    /**
     * Cost of ALL itinerary reservation items.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItinPricingType[] $itineraryPricing
     */
    private $itineraryPricing = null;

    /**
     * Remarks, OSIs, Seat Requests etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ItineraryInfoType\SpecialRequestDetailsAType
     * $specialRequestDetails
     */
    private $specialRequestDetails = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as contactInfo
     *
     * Additional contact information eg. travel agency.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets a new contactInfo
     *
     * Additional contact information eg. travel agency.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contactInfo
     * @return self
     */
    public function setContactInfo(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contactInfo)
    {
        $this->contactInfo = $contactInfo;

        return $this;
    }

    /**
     * Gets as reservationItems
     *
     * Itinerary reservation items (e.g. Car, Hotel, Air, Cruise, Rail, Tour, Package).
     *
     * @return \Davispeixoto\OpenTravelAlliance\ReservationItemsType
     */
    public function getReservationItems()
    {
        return $this->reservationItems;
    }

    /**
     * Sets a new reservationItems
     *
     * Itinerary reservation items (e.g. Car, Hotel, Air, Cruise, Rail, Tour, Package).
     *
     * @param \Davispeixoto\OpenTravelAlliance\ReservationItemsType $reservationItems
     * @return self
     */
    public function setReservationItems(\Davispeixoto\OpenTravelAlliance\ReservationItemsType $reservationItems)
    {
        $this->reservationItems = $reservationItems;

        return $this;
    }

    /**
     * Gets as ticketing
     *
     * Air reservation ticket information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItineraryInfoType\TicketingAType
     */
    public function getTicketing()
    {
        return $this->ticketing;
    }

    /**
     * Sets a new ticketing
     *
     * Air reservation ticket information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItineraryInfoType\TicketingAType
     * $ticketing
     * @return self
     */
    public function setTicketing(\Davispeixoto\OpenTravelAlliance\ItineraryInfoType\TicketingAType $ticketing)
    {
        $this->ticketing = $ticketing;

        return $this;
    }

    /**
     * Adds as itineraryPricing
     *
     * Cost of ALL itinerary reservation items.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ItinPricingType $itineraryPricing
     */
    public function addToItineraryPricing(\Davispeixoto\OpenTravelAlliance\ItinPricingType $itineraryPricing)
    {
        $this->itineraryPricing[] = $itineraryPricing;

        return $this;
    }

    /**
     * isset itineraryPricing
     *
     * Cost of ALL itinerary reservation items.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItineraryPricing($index)
    {
        return isset($this->itineraryPricing[$index]);
    }

    /**
     * unset itineraryPricing
     *
     * Cost of ALL itinerary reservation items.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItineraryPricing($index)
    {
        unset($this->itineraryPricing[$index]);
    }

    /**
     * Gets as itineraryPricing
     *
     * Cost of ALL itinerary reservation items.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItinPricingType[]
     */
    public function getItineraryPricing()
    {
        return $this->itineraryPricing;
    }

    /**
     * Sets a new itineraryPricing
     *
     * Cost of ALL itinerary reservation items.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItinPricingType[] $itineraryPricing
     * @return self
     */
    public function setItineraryPricing(array $itineraryPricing)
    {
        $this->itineraryPricing = $itineraryPricing;

        return $this;
    }

    /**
     * Gets as specialRequestDetails
     *
     * Remarks, OSIs, Seat Requests etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ItineraryInfoType\SpecialRequestDetailsAType
     */
    public function getSpecialRequestDetails()
    {
        return $this->specialRequestDetails;
    }

    /**
     * Sets a new specialRequestDetails
     *
     * Remarks, OSIs, Seat Requests etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ItineraryInfoType\SpecialRequestDetailsAType
     * $specialRequestDetails
     * @return self
     */
    public function setSpecialRequestDetails(
        \Davispeixoto\OpenTravelAlliance\ItineraryInfoType\SpecialRequestDetailsAType $specialRequestDetails
    ) {
        $this->specialRequestDetails = $specialRequestDetails;

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

