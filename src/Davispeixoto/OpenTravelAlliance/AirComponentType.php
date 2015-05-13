<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirComponentType
 *
 * An air trip that is part of the dynamic package.
 * XSD Type: AirComponentType
 */
class AirComponentType
{

    /**
     * The length of time starting at the create time for which the component will be
     * held.
     *
     * @property \DateInterval $holdDuration
     */
    private $holdDuration = null;

    /**
     * A reference number used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @property string $quoteID
     */
    private $quoteID = null;

    /**
     * The action being requested on the component or package.
     *
     * @property string $dynamicPkgAction
     */
    private $dynamicPkgAction = null;

    /**
     * The status of the component or package.
     *
     * @property string $dynamicPkgStatus
     */
    private $dynamicPkgStatus = null;

    /**
     * The date and time the air component was created.
     *
     * @property \DateTime $createDateTime
     */
    private $createDateTime = null;

    /**
     * Specifies the origin and destination of the traveler. Attributes: DirectionInd -
     * A directional indicator that identifies a type of air booking, either one-way,
     * round-trip, or open-jaw with the enumeration of (OneWay | RT | OpenJaw)
     * respectively. ActionCode - Indicates the status of the booking, such as OK or
     * Wait-List. NumberInParty - Indicates the traveler count.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirItineraryType $airItinerary
     */
    private $airItinerary = null;

    /**
     * Pricing Information for an Air Itinerary.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirComponentType\AirItineraryPricingInfoAType
     * $airItineraryPricingInfo
     */
    private $airItineraryPricingInfo = null;

    /**
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType[] $notes
     */
    private $notes = null;

    /**
     * Container for TicketingInfoRS_Type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirComponentType\TicketingInfoAType
     * $ticketingInfo
     */
    private $ticketingInfo = null;

    /**
     * This is used for PNR record locator.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirComponentType\BookingReferenceIDAType
     * $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as holdDuration
     *
     * The length of time starting at the create time for which the component will be
     * held.
     *
     * @return \DateInterval
     */
    public function getHoldDuration()
    {
        return $this->holdDuration;
    }

    /**
     * Sets a new holdDuration
     *
     * The length of time starting at the create time for which the component will be
     * held.
     *
     * @param \DateInterval $holdDuration
     * @return self
     */
    public function setHoldDuration(\DateInterval $holdDuration)
    {
        $this->holdDuration = $holdDuration;

        return $this;
    }

    /**
     * Gets as quoteID
     *
     * A reference number used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @return string
     */
    public function getQuoteID()
    {
        return $this->quoteID;
    }

    /**
     * Sets a new quoteID
     *
     * A reference number used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @param string $quoteID
     * @return self
     */
    public function setQuoteID($quoteID)
    {
        $this->quoteID = $quoteID;

        return $this;
    }

    /**
     * Gets as dynamicPkgAction
     *
     * The action being requested on the component or package.
     *
     * @return string
     */
    public function getDynamicPkgAction()
    {
        return $this->dynamicPkgAction;
    }

    /**
     * Sets a new dynamicPkgAction
     *
     * The action being requested on the component or package.
     *
     * @param string $dynamicPkgAction
     * @return self
     */
    public function setDynamicPkgAction($dynamicPkgAction)
    {
        $this->dynamicPkgAction = $dynamicPkgAction;

        return $this;
    }

    /**
     * Gets as dynamicPkgStatus
     *
     * The status of the component or package.
     *
     * @return string
     */
    public function getDynamicPkgStatus()
    {
        return $this->dynamicPkgStatus;
    }

    /**
     * Sets a new dynamicPkgStatus
     *
     * The status of the component or package.
     *
     * @param string $dynamicPkgStatus
     * @return self
     */
    public function setDynamicPkgStatus($dynamicPkgStatus)
    {
        $this->dynamicPkgStatus = $dynamicPkgStatus;

        return $this;
    }

    /**
     * Gets as createDateTime
     *
     * The date and time the air component was created.
     *
     * @return \DateTime
     */
    public function getCreateDateTime()
    {
        return $this->createDateTime;
    }

    /**
     * Sets a new createDateTime
     *
     * The date and time the air component was created.
     *
     * @param \DateTime $createDateTime
     * @return self
     */
    public function setCreateDateTime(\DateTime $createDateTime)
    {
        $this->createDateTime = $createDateTime;

        return $this;
    }

    /**
     * Gets as airItinerary
     *
     * Specifies the origin and destination of the traveler. Attributes: DirectionInd -
     * A directional indicator that identifies a type of air booking, either one-way,
     * round-trip, or open-jaw with the enumeration of (OneWay | RT | OpenJaw)
     * respectively. ActionCode - Indicates the status of the booking, such as OK or
     * Wait-List. NumberInParty - Indicates the traveler count.
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
     * Specifies the origin and destination of the traveler. Attributes: DirectionInd -
     * A directional indicator that identifies a type of air booking, either one-way,
     * round-trip, or open-jaw with the enumeration of (OneWay | RT | OpenJaw)
     * respectively. ActionCode - Indicates the status of the booking, such as OK or
     * Wait-List. NumberInParty - Indicates the traveler count.
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
     * Gets as airItineraryPricingInfo
     *
     * Pricing Information for an Air Itinerary.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirComponentType\AirItineraryPricingInfoAType
     */
    public function getAirItineraryPricingInfo()
    {
        return $this->airItineraryPricingInfo;
    }

    /**
     * Sets a new airItineraryPricingInfo
     *
     * Pricing Information for an Air Itinerary.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirComponentType\AirItineraryPricingInfoAType
     * $airItineraryPricingInfo
     * @return self
     */
    public function setAirItineraryPricingInfo(
        \Davispeixoto\OpenTravelAlliance\AirComponentType\AirItineraryPricingInfoAType $airItineraryPricingInfo
    ) {
        $this->airItineraryPricingInfo = $airItineraryPricingInfo;

        return $this;
    }

    /**
     * Adds as notes
     *
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $notes
     */
    public function addToNotes(\Davispeixoto\OpenTravelAlliance\FreeTextType $notes)
    {
        $this->notes[] = $notes;

        return $this;
    }

    /**
     * isset notes
     *
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNotes($index)
    {
        return isset($this->notes[$index]);
    }

    /**
     * unset notes
     *
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNotes($index)
    {
        unset($this->notes[$index]);
    }

    /**
     * Gets as notes
     *
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType[]
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets a new notes
     *
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType[] $notes
     * @return self
     */
    public function setNotes(array $notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Gets as ticketingInfo
     *
     * Container for TicketingInfoRS_Type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirComponentType\TicketingInfoAType
     */
    public function getTicketingInfo()
    {
        return $this->ticketingInfo;
    }

    /**
     * Sets a new ticketingInfo
     *
     * Container for TicketingInfoRS_Type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirComponentType\TicketingInfoAType
     * $ticketingInfo
     * @return self
     */
    public function setTicketingInfo(
        \Davispeixoto\OpenTravelAlliance\AirComponentType\TicketingInfoAType $ticketingInfo
    ) {
        $this->ticketingInfo = $ticketingInfo;

        return $this;
    }

    /**
     * Gets as bookingReferenceID
     *
     * This is used for PNR record locator.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirComponentType\BookingReferenceIDAType
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * This is used for PNR record locator.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirComponentType\BookingReferenceIDAType
     * $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(
        \Davispeixoto\OpenTravelAlliance\AirComponentType\BookingReferenceIDAType $bookingReferenceID
    ) {
        $this->bookingReferenceID = $bookingReferenceID;

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

