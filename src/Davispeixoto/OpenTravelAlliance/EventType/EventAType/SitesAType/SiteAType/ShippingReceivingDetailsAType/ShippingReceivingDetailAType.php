<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\ShippingReceivingDetailsAType;

/**
 * Class representing ShippingReceivingDetailAType
 */
class ShippingReceivingDetailAType
{

    /**
     * The tracking number for the shipment.
     *
     * @property string $trackingNumber
     */
    private $trackingNumber = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * The date the shipment is expected to be delivered.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $expectedDeliveryDate
     */
    private $expectedDeliveryDate = null;

    /**
     * Contact information for the sender, receiver and shipping company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contact
     */
    private $contact = null;

    /**
     * Gets as trackingNumber
     *
     * The tracking number for the shipment.
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * Sets a new trackingNumber
     *
     * The tracking number for the shipment.
     *
     * @param string $trackingNumber
     * @return self
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as expectedDeliveryDate
     *
     * The date the shipment is expected to be delivered.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getExpectedDeliveryDate()
    {
        return $this->expectedDeliveryDate;
    }

    /**
     * Sets a new expectedDeliveryDate
     *
     * The date the shipment is expected to be delivered.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $expectedDeliveryDate
     * @return self
     */
    public function setExpectedDeliveryDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $expectedDeliveryDate)
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;

        return $this;
    }

    /**
     * Adds as contact
     *
     * Contact information for the sender, receiver and shipping company.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contact
     */
    public function addToContact(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contact)
    {
        $this->contact[] = $contact;

        return $this;
    }

    /**
     * isset contact
     *
     * Contact information for the sender, receiver and shipping company.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * Contact information for the sender, receiver and shipping company.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * Contact information for the sender, receiver and shipping company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact information for the sender, receiver and shipping company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;

        return $this;
    }


}

