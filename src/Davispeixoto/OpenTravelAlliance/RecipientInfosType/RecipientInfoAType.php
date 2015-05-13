<?php

namespace Davispeixoto\OpenTravelAlliance\RecipientInfosType;

use Davispeixoto\OpenTravelAlliance\ContactPersonType;

/**
 * Class representing RecipientInfoAType
 */
class RecipientInfoAType extends ContactPersonType
{

    /**
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $reservationID
     */
    private $reservationID = null;

    /**
     * Informtion pertaining to the shipment of a product to the recipient.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RecipientInfosType\RecipientInfoAType\ShippingInfoAType
     * $shippingInfo
     */
    private $shippingInfo = null;

    /**
     * A collection of comments.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Adds as reservationID
     *
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $reservationID
     */
    public function addToReservationID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $reservationID)
    {
        $this->reservationID[] = $reservationID;

        return $this;
    }

    /**
     * isset reservationID
     *
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReservationID($index)
    {
        return isset($this->reservationID[$index]);
    }

    /**
     * unset reservationID
     *
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReservationID($index)
    {
        unset($this->reservationID[$index]);
    }

    /**
     * Gets as reservationID
     *
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getReservationID()
    {
        return $this->reservationID;
    }

    /**
     * Sets a new reservationID
     *
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $reservationID
     * @return self
     */
    public function setReservationID(array $reservationID)
    {
        $this->reservationID = $reservationID;

        return $this;
    }

    /**
     * Gets as shippingInfo
     *
     * Informtion pertaining to the shipment of a product to the recipient.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RecipientInfosType\RecipientInfoAType\ShippingInfoAType
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo;
    }

    /**
     * Sets a new shippingInfo
     *
     * Informtion pertaining to the shipment of a product to the recipient.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RecipientInfosType\RecipientInfoAType\ShippingInfoAType
     * $shippingInfo
     * @return self
     */
    public function setShippingInfo(
        \Davispeixoto\OpenTravelAlliance\RecipientInfosType\RecipientInfoAType\ShippingInfoAType $shippingInfo
    ) {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of comments.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of comments.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

