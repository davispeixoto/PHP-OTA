<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AmenityOptionType
 *
 * Defines the amenity/gift and its form of delivery.
 * XSD Type: AmenityOptionType
 */
class AmenityOptionType
{

    /**
     * Specifies the amenity, gift or option code as defined by the cruise line.
     *
     * @property string $optionCode
     */
    private $optionCode = null;

    /**
     * Specifies the quantity of the Amenity order.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Specifies the delivery date of the Amenity/ Gift.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $deliveryDate
     */
    private $deliveryDate = null;

    /**
     * Specifies the delivery location (e.g., cabin, dining room).
     *
     * @property string $deliveryLocation
     */
    private $deliveryLocation = null;

    /**
     * When true, the existing option is modifiable.
     *
     * @property boolean $modifiableIndicator
     */
    private $modifiableIndicator = null;

    /**
     * The person requesting the amenity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $originator
     */
    private $originator = null;

    /**
     * Specifies the additional comments or message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $message
     */
    private $message = null;

    /**
     * Gets as optionCode
     *
     * Specifies the amenity, gift or option code as defined by the cruise line.
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
     * Specifies the amenity, gift or option code as defined by the cruise line.
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
     * Gets as quantity
     *
     * Specifies the quantity of the Amenity order.
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
     * Specifies the quantity of the Amenity order.
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
     * Gets as deliveryDate
     *
     * Specifies the delivery date of the Amenity/ Gift.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Sets a new deliveryDate
     *
     * Specifies the delivery date of the Amenity/ Gift.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $deliveryDate
     * @return self
     */
    public function setDeliveryDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Gets as deliveryLocation
     *
     * Specifies the delivery location (e.g., cabin, dining room).
     *
     * @return string
     */
    public function getDeliveryLocation()
    {
        return $this->deliveryLocation;
    }

    /**
     * Sets a new deliveryLocation
     *
     * Specifies the delivery location (e.g., cabin, dining room).
     *
     * @param string $deliveryLocation
     * @return self
     */
    public function setDeliveryLocation($deliveryLocation)
    {
        $this->deliveryLocation = $deliveryLocation;

        return $this;
    }

    /**
     * Gets as modifiableIndicator
     *
     * When true, the existing option is modifiable.
     *
     * @return boolean
     */
    public function getModifiableIndicator()
    {
        return $this->modifiableIndicator;
    }

    /**
     * Sets a new modifiableIndicator
     *
     * When true, the existing option is modifiable.
     *
     * @param boolean $modifiableIndicator
     * @return self
     */
    public function setModifiableIndicator($modifiableIndicator)
    {
        $this->modifiableIndicator = $modifiableIndicator;

        return $this;
    }

    /**
     * Gets as originator
     *
     * The person requesting the amenity.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getOriginator()
    {
        return $this->originator;
    }

    /**
     * Sets a new originator
     *
     * The person requesting the amenity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $originator
     * @return self
     */
    public function setOriginator(\Davispeixoto\OpenTravelAlliance\PersonNameType $originator)
    {
        $this->originator = $originator;

        return $this;
    }

    /**
     * Gets as message
     *
     * Specifies the additional comments or message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * Specifies the additional comments or message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $message
     * @return self
     */
    public function setMessage(\Davispeixoto\OpenTravelAlliance\ParagraphType $message)
    {
        $this->message = $message;

        return $this;
    }


}

