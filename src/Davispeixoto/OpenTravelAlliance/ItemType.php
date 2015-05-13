<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ItemType
 *
 * The details of a destination activity item.
 * XSD Type: ItemType
 */
class ItemType
{

    /**
     * The supplier's code identifying this item.
     *
     * @property string $itemCode
     */
    private $itemCode = null;

    /**
     * A code to identify an option within an item.
     *
     * @property string $optionCode
     */
    private $optionCode = null;

    /**
     * The selected date of the item.
     *
     * @property \DateTime $selectedDate
     */
    private $selectedDate = null;

    /**
     * The number of items to purchase of this type.
     *  1
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * If the item has various times (such as departures) for sale during the day,
     * indicates which time is required.
     *
     * @property \DateTime $selectedTime
     */
    private $selectedTime = null;

    /**
     * The price agreed between the two parties.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TotalType $negotiatedPrice
     */
    private $negotiatedPrice = null;

    /**
     * The price sold to the end consumer, in case the end supplier must communicate
     * with the customer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TotalType $sellingPrice
     */
    private $sellingPrice = null;

    /**
     * If traveler suballocation is allowed (see Capabilities), the set of travelers
     * booking this item.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItemType\SubAllocationAType
     * $subAllocation
     */
    private $subAllocation = null;

    /**
     * Any special requests against this particular item.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialRequestType\SpecialRequestAType[]
     * $specialRequest
     */
    private $specialRequest = null;

    /**
     * Where the guests are staying, allowing the vendor to decide the appropriate
     * pickup point.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItemType\HotelStayAType $hotelStay
     */
    private $hotelStay = null;

    /**
     * A collection of trading partners' references to identifiy the activities.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $itemReferences
     */
    private $itemReferences = null;

    /**
     * Gets as itemCode
     *
     * The supplier's code identifying this item.
     *
     * @return string
     */
    public function getItemCode()
    {
        return $this->itemCode;
    }

    /**
     * Sets a new itemCode
     *
     * The supplier's code identifying this item.
     *
     * @param string $itemCode
     * @return self
     */
    public function setItemCode($itemCode)
    {
        $this->itemCode = $itemCode;

        return $this;
    }

    /**
     * Gets as optionCode
     *
     * A code to identify an option within an item.
     *
     * @return string
     */
    public function getOptionCode()
    {
        return $this->optionCode;
    }

    /**
     * Sets a new optionCode
     *
     * A code to identify an option within an item.
     *
     * @param string $optionCode
     * @return self
     */
    public function setOptionCode($optionCode)
    {
        $this->optionCode = $optionCode;

        return $this;
    }

    /**
     * Gets as selectedDate
     *
     * The selected date of the item.
     *
     * @return \DateTime
     */
    public function getSelectedDate()
    {
        return $this->selectedDate;
    }

    /**
     * Sets a new selectedDate
     *
     * The selected date of the item.
     *
     * @param \DateTime $selectedDate
     * @return self
     */
    public function setSelectedDate(\DateTime $selectedDate)
    {
        $this->selectedDate = $selectedDate;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * The number of items to purchase of this type.
     *  1
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
     * The number of items to purchase of this type.
     *  1
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
     * Gets as selectedTime
     *
     * If the item has various times (such as departures) for sale during the day,
     * indicates which time is required.
     *
     * @return \DateTime
     */
    public function getSelectedTime()
    {
        return $this->selectedTime;
    }

    /**
     * Sets a new selectedTime
     *
     * If the item has various times (such as departures) for sale during the day,
     * indicates which time is required.
     *
     * @param \DateTime $selectedTime
     * @return self
     */
    public function setSelectedTime(\DateTime $selectedTime)
    {
        $this->selectedTime = $selectedTime;

        return $this;
    }

    /**
     * Gets as negotiatedPrice
     *
     * The price agreed between the two parties.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TotalType
     */
    public function getNegotiatedPrice()
    {
        return $this->negotiatedPrice;
    }

    /**
     * Sets a new negotiatedPrice
     *
     * The price agreed between the two parties.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TotalType $negotiatedPrice
     * @return self
     */
    public function setNegotiatedPrice(\Davispeixoto\OpenTravelAlliance\TotalType $negotiatedPrice)
    {
        $this->negotiatedPrice = $negotiatedPrice;

        return $this;
    }

    /**
     * Gets as sellingPrice
     *
     * The price sold to the end consumer, in case the end supplier must communicate
     * with the customer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TotalType
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * Sets a new sellingPrice
     *
     * The price sold to the end consumer, in case the end supplier must communicate
     * with the customer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TotalType $sellingPrice
     * @return self
     */
    public function setSellingPrice(\Davispeixoto\OpenTravelAlliance\TotalType $sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;

        return $this;
    }

    /**
     * Gets as subAllocation
     *
     * If traveler suballocation is allowed (see Capabilities), the set of travelers
     * booking this item.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItemType\SubAllocationAType
     */
    public function getSubAllocation()
    {
        return $this->subAllocation;
    }

    /**
     * Sets a new subAllocation
     *
     * If traveler suballocation is allowed (see Capabilities), the set of travelers
     * booking this item.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItemType\SubAllocationAType
     * $subAllocation
     * @return self
     */
    public function setSubAllocation(\Davispeixoto\OpenTravelAlliance\ItemType\SubAllocationAType $subAllocation)
    {
        $this->subAllocation = $subAllocation;

        return $this;
    }

    /**
     * Adds as specialRequest
     *
     * Any special requests against this particular item.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SpecialRequestType\SpecialRequestAType
     * $specialRequest
     */
    public function addToSpecialRequest(
        \Davispeixoto\OpenTravelAlliance\SpecialRequestType\SpecialRequestAType $specialRequest
    ) {
        $this->specialRequest[] = $specialRequest;

        return $this;
    }

    /**
     * isset specialRequest
     *
     * Any special requests against this particular item.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialRequest($index)
    {
        return isset($this->specialRequest[$index]);
    }

    /**
     * unset specialRequest
     *
     * Any special requests against this particular item.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialRequest($index)
    {
        unset($this->specialRequest[$index]);
    }

    /**
     * Gets as specialRequest
     *
     * Any special requests against this particular item.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialRequestType\SpecialRequestAType[]
     */
    public function getSpecialRequest()
    {
        return $this->specialRequest;
    }

    /**
     * Sets a new specialRequest
     *
     * Any special requests against this particular item.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SpecialRequestType\SpecialRequestAType[]
     * $specialRequest
     * @return self
     */
    public function setSpecialRequest(array $specialRequest)
    {
        $this->specialRequest = $specialRequest;

        return $this;
    }

    /**
     * Gets as hotelStay
     *
     * Where the guests are staying, allowing the vendor to decide the appropriate
     * pickup point.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItemType\HotelStayAType
     */
    public function getHotelStay()
    {
        return $this->hotelStay;
    }

    /**
     * Sets a new hotelStay
     *
     * Where the guests are staying, allowing the vendor to decide the appropriate
     * pickup point.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItemType\HotelStayAType $hotelStay
     * @return self
     */
    public function setHotelStay(\Davispeixoto\OpenTravelAlliance\ItemType\HotelStayAType $hotelStay)
    {
        $this->hotelStay = $hotelStay;

        return $this;
    }

    /**
     * Adds as itemReference
     *
     * A collection of trading partners' references to identifiy the activities.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $itemReference
     */
    public function addToItemReferences(\Davispeixoto\OpenTravelAlliance\UniqueIDType $itemReference)
    {
        $this->itemReferences[] = $itemReference;

        return $this;
    }

    /**
     * isset itemReferences
     *
     * A collection of trading partners' references to identifiy the activities.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemReferences($index)
    {
        return isset($this->itemReferences[$index]);
    }

    /**
     * unset itemReferences
     *
     * A collection of trading partners' references to identifiy the activities.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemReferences($index)
    {
        unset($this->itemReferences[$index]);
    }

    /**
     * Gets as itemReferences
     *
     * A collection of trading partners' references to identifiy the activities.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getItemReferences()
    {
        return $this->itemReferences;
    }

    /**
     * Sets a new itemReferences
     *
     * A collection of trading partners' references to identifiy the activities.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $itemReferences
     * @return self
     */
    public function setItemReferences(array $itemReferences)
    {
        $this->itemReferences = $itemReferences;

        return $this;
    }


}

