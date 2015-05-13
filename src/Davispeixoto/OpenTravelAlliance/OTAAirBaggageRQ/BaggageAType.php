<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ;

use Davispeixoto\OpenTravelAlliance\BaggageSpecificationType;

/**
 * Class representing BaggageAType
 */
class BaggageAType extends BaggageSpecificationType
{

    /**
     * If true, this baggage is already checked in.
     *
     * @property boolean $checkedInInd
     */
    private $checkedInInd = null;

    /**
     * Excess baggage occurrences.Example: 2
     *
     * @property integer $excessBaggageNmbr
     */
    private $excessBaggageNmbr = null;

    /**
     * Baggage Item Reference ID.Example: 1Note: This is a unique reference ID for one
     * baggage item that is set here and may be referenced elsewhere in this
     * message.OpenTravel Best Practice: Using Reference Place Holders: The reference
     * place holder (RPH) is a unique ID assigned to an instance in a collection of
     * like items (e.g. used to assign a unique ID to each passenger in a list of
     * passengers. When referencing an RPH, the same RPH type is used to identify the
     * assigned unique ID in an element that references the item in a collection.
     *
     * @property string $baggageRPH
     */
    private $baggageRPH = null;

    /**
     * Fare Reference ID.Example: 2Note: This fare reference ID was defined elsewhere
     * in this message.OpenTravel Best Practice: Using Reference Place Holders: The
     * reference place holder (RPH) is a unique ID assigned to an instance in a
     * collection of like items (e.g. used to assign a unique ID to each passenger in a
     * list of passengers. When referencing an RPH, the same RPH type is used to
     * identify the assigned unique ID in an element that references the item in a
     * collection.
     *
     * @property string $fareInfoRPH
     */
    private $fareInfoRPH = null;

    /**
     * Flight Segment Reference ID.Example: 3Note: This flight segment reference ID was
     * defined elsewhere in this message.OpenTravel Best Practice: Using Reference
     * Place Holders: The reference place holder (RPH) is a unique ID assigned to an
     * instance in a collection of like items (e.g. used to assign a unique ID to each
     * passenger in a list of passengers. When referencing an RPH, the same RPH type is
     * used to identify the assigned unique ID in an element that references the item
     * in a collection.
     *
     * @property string $flightSegmentRPH
     */
    private $flightSegmentRPH = null;

    /**
     * Pricing Reference ID.Example: 1Note: This pricing reference ID was defined
     * elsewhere in this message.OpenTravel Best Practice: Using Reference Place
     * Holders: The reference place holder (RPH) is a unique ID assigned to an instance
     * in a collection of like items (e.g. used to assign a unique ID to each passenger
     * in a list of passengers. When referencing an RPH, the same RPH type is used to
     * identify the assigned unique ID in an element that references the item in a
     * collection.
     *
     * @property string $pricingRPH
     */
    private $pricingRPH = null;

    /**
     * Traveler Reference ID.Example: 2Note: This traveler reference ID was defined
     * elsewhere in this message.OpenTravel Best Practice: Using Reference Place
     * Holders: The reference place holder (RPH) is a unique ID assigned to an instance
     * in a collection of like items (e.g. used to assign a unique ID to each passenger
     * in a list of passengers. When referencing an RPH, the same RPH type is used to
     * identify the assigned unique ID in an element that references the item in a
     * collection.
     *
     * @property string $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * Gets as checkedInInd
     *
     * If true, this baggage is already checked in.
     *
     * @return boolean
     */
    public function getCheckedInInd()
    {
        return $this->checkedInInd;
    }

    /**
     * Sets a new checkedInInd
     *
     * If true, this baggage is already checked in.
     *
     * @param boolean $checkedInInd
     * @return self
     */
    public function setCheckedInInd($checkedInInd)
    {
        $this->checkedInInd = $checkedInInd;

        return $this;
    }

    /**
     * Gets as excessBaggageNmbr
     *
     * Excess baggage occurrences.Example: 2
     *
     * @return integer
     */
    public function getExcessBaggageNmbr()
    {
        return $this->excessBaggageNmbr;
    }

    /**
     * Sets a new excessBaggageNmbr
     *
     * Excess baggage occurrences.Example: 2
     *
     * @param integer $excessBaggageNmbr
     * @return self
     */
    public function setExcessBaggageNmbr($excessBaggageNmbr)
    {
        $this->excessBaggageNmbr = $excessBaggageNmbr;

        return $this;
    }

    /**
     * Gets as baggageRPH
     *
     * Baggage Item Reference ID.Example: 1Note: This is a unique reference ID for one
     * baggage item that is set here and may be referenced elsewhere in this
     * message.OpenTravel Best Practice: Using Reference Place Holders: The reference
     * place holder (RPH) is a unique ID assigned to an instance in a collection of
     * like items (e.g. used to assign a unique ID to each passenger in a list of
     * passengers. When referencing an RPH, the same RPH type is used to identify the
     * assigned unique ID in an element that references the item in a collection.
     *
     * @return string
     */
    public function getBaggageRPH()
    {
        return $this->baggageRPH;
    }

    /**
     * Sets a new baggageRPH
     *
     * Baggage Item Reference ID.Example: 1Note: This is a unique reference ID for one
     * baggage item that is set here and may be referenced elsewhere in this
     * message.OpenTravel Best Practice: Using Reference Place Holders: The reference
     * place holder (RPH) is a unique ID assigned to an instance in a collection of
     * like items (e.g. used to assign a unique ID to each passenger in a list of
     * passengers. When referencing an RPH, the same RPH type is used to identify the
     * assigned unique ID in an element that references the item in a collection.
     *
     * @param string $baggageRPH
     * @return self
     */
    public function setBaggageRPH($baggageRPH)
    {
        $this->baggageRPH = $baggageRPH;

        return $this;
    }

    /**
     * Gets as fareInfoRPH
     *
     * Fare Reference ID.Example: 2Note: This fare reference ID was defined elsewhere
     * in this message.OpenTravel Best Practice: Using Reference Place Holders: The
     * reference place holder (RPH) is a unique ID assigned to an instance in a
     * collection of like items (e.g. used to assign a unique ID to each passenger in a
     * list of passengers. When referencing an RPH, the same RPH type is used to
     * identify the assigned unique ID in an element that references the item in a
     * collection.
     *
     * @return string
     */
    public function getFareInfoRPH()
    {
        return $this->fareInfoRPH;
    }

    /**
     * Sets a new fareInfoRPH
     *
     * Fare Reference ID.Example: 2Note: This fare reference ID was defined elsewhere
     * in this message.OpenTravel Best Practice: Using Reference Place Holders: The
     * reference place holder (RPH) is a unique ID assigned to an instance in a
     * collection of like items (e.g. used to assign a unique ID to each passenger in a
     * list of passengers. When referencing an RPH, the same RPH type is used to
     * identify the assigned unique ID in an element that references the item in a
     * collection.
     *
     * @param string $fareInfoRPH
     * @return self
     */
    public function setFareInfoRPH($fareInfoRPH)
    {
        $this->fareInfoRPH = $fareInfoRPH;

        return $this;
    }

    /**
     * Gets as flightSegmentRPH
     *
     * Flight Segment Reference ID.Example: 3Note: This flight segment reference ID was
     * defined elsewhere in this message.OpenTravel Best Practice: Using Reference
     * Place Holders: The reference place holder (RPH) is a unique ID assigned to an
     * instance in a collection of like items (e.g. used to assign a unique ID to each
     * passenger in a list of passengers. When referencing an RPH, the same RPH type is
     * used to identify the assigned unique ID in an element that references the item
     * in a collection.
     *
     * @return string
     */
    public function getFlightSegmentRPH()
    {
        return $this->flightSegmentRPH;
    }

    /**
     * Sets a new flightSegmentRPH
     *
     * Flight Segment Reference ID.Example: 3Note: This flight segment reference ID was
     * defined elsewhere in this message.OpenTravel Best Practice: Using Reference
     * Place Holders: The reference place holder (RPH) is a unique ID assigned to an
     * instance in a collection of like items (e.g. used to assign a unique ID to each
     * passenger in a list of passengers. When referencing an RPH, the same RPH type is
     * used to identify the assigned unique ID in an element that references the item
     * in a collection.
     *
     * @param string $flightSegmentRPH
     * @return self
     */
    public function setFlightSegmentRPH($flightSegmentRPH)
    {
        $this->flightSegmentRPH = $flightSegmentRPH;

        return $this;
    }

    /**
     * Gets as pricingRPH
     *
     * Pricing Reference ID.Example: 1Note: This pricing reference ID was defined
     * elsewhere in this message.OpenTravel Best Practice: Using Reference Place
     * Holders: The reference place holder (RPH) is a unique ID assigned to an instance
     * in a collection of like items (e.g. used to assign a unique ID to each passenger
     * in a list of passengers. When referencing an RPH, the same RPH type is used to
     * identify the assigned unique ID in an element that references the item in a
     * collection.
     *
     * @return string
     */
    public function getPricingRPH()
    {
        return $this->pricingRPH;
    }

    /**
     * Sets a new pricingRPH
     *
     * Pricing Reference ID.Example: 1Note: This pricing reference ID was defined
     * elsewhere in this message.OpenTravel Best Practice: Using Reference Place
     * Holders: The reference place holder (RPH) is a unique ID assigned to an instance
     * in a collection of like items (e.g. used to assign a unique ID to each passenger
     * in a list of passengers. When referencing an RPH, the same RPH type is used to
     * identify the assigned unique ID in an element that references the item in a
     * collection.
     *
     * @param string $pricingRPH
     * @return self
     */
    public function setPricingRPH($pricingRPH)
    {
        $this->pricingRPH = $pricingRPH;

        return $this;
    }

    /**
     * Gets as travelerRPH
     *
     * Traveler Reference ID.Example: 2Note: This traveler reference ID was defined
     * elsewhere in this message.OpenTravel Best Practice: Using Reference Place
     * Holders: The reference place holder (RPH) is a unique ID assigned to an instance
     * in a collection of like items (e.g. used to assign a unique ID to each passenger
     * in a list of passengers. When referencing an RPH, the same RPH type is used to
     * identify the assigned unique ID in an element that references the item in a
     * collection.
     *
     * @return string
     */
    public function getTravelerRPH()
    {
        return $this->travelerRPH;
    }

    /**
     * Sets a new travelerRPH
     *
     * Traveler Reference ID.Example: 2Note: This traveler reference ID was defined
     * elsewhere in this message.OpenTravel Best Practice: Using Reference Place
     * Holders: The reference place holder (RPH) is a unique ID assigned to an instance
     * in a collection of like items (e.g. used to assign a unique ID to each passenger
     * in a list of passengers. When referencing an RPH, the same RPH type is used to
     * identify the assigned unique ID in an element that references the item in a
     * collection.
     *
     * @param string $travelerRPH
     * @return self
     */
    public function setTravelerRPH($travelerRPH)
    {
        $this->travelerRPH = $travelerRPH;

        return $this;
    }


}

