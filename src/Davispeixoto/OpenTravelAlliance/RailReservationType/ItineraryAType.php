<?php

namespace Davispeixoto\OpenTravelAlliance\RailReservationType;

/**
 * Class representing ItineraryAType
 */
class ItineraryAType
{

    /**
     * Information on one specific journey from one specific origin to one specific
     * destination.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailReservationType\ItineraryAType\OriginAndDestinationAType[]
     * $originAndDestination
     */
    private $originAndDestination = null;

    /**
     * Information on the individual charges that incurred are a result of this
     * specific itinerary.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailChargesType $railCharges
     */
    private $railCharges = null;

    /**
     * A collection of special comments associated with the itinerary.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VendorMessageType[] $vendorMessages
     */
    private $vendorMessages = null;

    /**
     * Adds as originAndDestination
     *
     * Information on one specific journey from one specific origin to one specific
     * destination.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailReservationType\ItineraryAType\OriginAndDestinationAType
     * $originAndDestination
     */
    public function addToOriginAndDestination(
        \Davispeixoto\OpenTravelAlliance\RailReservationType\ItineraryAType\OriginAndDestinationAType $originAndDestination
    ) {
        $this->originAndDestination[] = $originAndDestination;

        return $this;
    }

    /**
     * isset originAndDestination
     *
     * Information on one specific journey from one specific origin to one specific
     * destination.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginAndDestination($index)
    {
        return isset($this->originAndDestination[$index]);
    }

    /**
     * unset originAndDestination
     *
     * Information on one specific journey from one specific origin to one specific
     * destination.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginAndDestination($index)
    {
        unset($this->originAndDestination[$index]);
    }

    /**
     * Gets as originAndDestination
     *
     * Information on one specific journey from one specific origin to one specific
     * destination.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailReservationType\ItineraryAType\OriginAndDestinationAType[]
     */
    public function getOriginAndDestination()
    {
        return $this->originAndDestination;
    }

    /**
     * Sets a new originAndDestination
     *
     * Information on one specific journey from one specific origin to one specific
     * destination.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailReservationType\ItineraryAType\OriginAndDestinationAType[]
     * $originAndDestination
     * @return self
     */
    public function setOriginAndDestination(array $originAndDestination)
    {
        $this->originAndDestination = $originAndDestination;

        return $this;
    }

    /**
     * Gets as railCharges
     *
     * Information on the individual charges that incurred are a result of this
     * specific itinerary.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailChargesType
     */
    public function getRailCharges()
    {
        return $this->railCharges;
    }

    /**
     * Sets a new railCharges
     *
     * Information on the individual charges that incurred are a result of this
     * specific itinerary.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailChargesType $railCharges
     * @return self
     */
    public function setRailCharges(\Davispeixoto\OpenTravelAlliance\RailChargesType $railCharges)
    {
        $this->railCharges = $railCharges;

        return $this;
    }

    /**
     * Adds as vendorMessage
     *
     * A collection of special comments associated with the itinerary.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VendorMessageType $vendorMessage
     */
    public function addToVendorMessages(\Davispeixoto\OpenTravelAlliance\VendorMessageType $vendorMessage)
    {
        $this->vendorMessages[] = $vendorMessage;

        return $this;
    }

    /**
     * isset vendorMessages
     *
     * A collection of special comments associated with the itinerary.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorMessages($index)
    {
        return isset($this->vendorMessages[$index]);
    }

    /**
     * unset vendorMessages
     *
     * A collection of special comments associated with the itinerary.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorMessages($index)
    {
        unset($this->vendorMessages[$index]);
    }

    /**
     * Gets as vendorMessages
     *
     * A collection of special comments associated with the itinerary.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VendorMessageType[]
     */
    public function getVendorMessages()
    {
        return $this->vendorMessages;
    }

    /**
     * Sets a new vendorMessages
     *
     * A collection of special comments associated with the itinerary.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VendorMessageType[] $vendorMessages
     * @return self
     */
    public function setVendorMessages(array $vendorMessages)
    {
        $this->vendorMessages = $vendorMessages;

        return $this;
    }


}

