<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OfferType
 *
 * Defines the type of offer, the conditions under which the offer can be applied
 * and the amounts and/or percentages deducted.
 * XSD Type: OfferType
 */
class OfferType
{

    /**
     * A code which uniquely names this offer.
     *
     * @property string $offerCode
     */
    private $offerCode = null;

    /**
     * A reference place holder for this particular offer.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * The order in which the discounts are applied.
     *
     * @property integer $applicationOrder
     */
    private $applicationOrder = null;

    /**
     * Collection of offer rules.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType[]
     * $offerRules
     */
    private $offerRules = null;

    /**
     * Defines the characteristics of the offer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OfferType\DiscountAType $discount
     */
    private $discount = null;

    /**
     * Defines offers of the type "book A and get B".
     *
     * @property \Davispeixoto\OpenTravelAlliance\OfferType\FreeUpgradeAType
     * $freeUpgrade
     */
    private $freeUpgrade = null;

    /**
     * A description of the offer. If the offer is based on a written contract, the
     * appropriate paragraph from the contract could be quoted here.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $offerDescription
     */
    private $offerDescription = null;

    /**
     * Collection of compatible offers.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OfferType\CompatibleOffersAType\CompatibleOfferAType[]
     * $compatibleOffers
     */
    private $compatibleOffers = null;

    /**
     * Collection of inventory.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OfferType\InventoriesAType\InventoryAType[]
     * $inventories
     */
    private $inventories = null;

    /**
     * Collection of guests.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OfferType\GuestsAType\GuestAType[]
     * $guests
     */
    private $guests = null;

    /**
     * Gets as offerCode
     *
     * A code which uniquely names this offer.
     *
     * @return string
     */
    public function getOfferCode()
    {
        return $this->offerCode;
    }

    /**
     * Sets a new offerCode
     *
     * A code which uniquely names this offer.
     *
     * @param string $offerCode
     * @return self
     */
    public function setOfferCode($offerCode)
    {
        $this->offerCode = $offerCode;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * A reference place holder for this particular offer.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A reference place holder for this particular offer.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as applicationOrder
     *
     * The order in which the discounts are applied.
     *
     * @return integer
     */
    public function getApplicationOrder()
    {
        return $this->applicationOrder;
    }

    /**
     * Sets a new applicationOrder
     *
     * The order in which the discounts are applied.
     *
     * @param integer $applicationOrder
     * @return self
     */
    public function setApplicationOrder($applicationOrder)
    {
        $this->applicationOrder = $applicationOrder;

        return $this;
    }

    /**
     * Adds as offerRule
     *
     * Collection of offer rules.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType
     * $offerRule
     */
    public function addToOfferRules(
        \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType $offerRule
    ) {
        $this->offerRules[] = $offerRule;

        return $this;
    }

    /**
     * isset offerRules
     *
     * Collection of offer rules.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOfferRules($index)
    {
        return isset($this->offerRules[$index]);
    }

    /**
     * unset offerRules
     *
     * Collection of offer rules.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOfferRules($index)
    {
        unset($this->offerRules[$index]);
    }

    /**
     * Gets as offerRules
     *
     * Collection of offer rules.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType[]
     */
    public function getOfferRules()
    {
        return $this->offerRules;
    }

    /**
     * Sets a new offerRules
     *
     * Collection of offer rules.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType[]
     * $offerRules
     * @return self
     */
    public function setOfferRules(array $offerRules)
    {
        $this->offerRules = $offerRules;

        return $this;
    }

    /**
     * Gets as discount
     *
     * Defines the characteristics of the offer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OfferType\DiscountAType
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * Defines the characteristics of the offer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OfferType\DiscountAType $discount
     * @return self
     */
    public function setDiscount(\Davispeixoto\OpenTravelAlliance\OfferType\DiscountAType $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Gets as freeUpgrade
     *
     * Defines offers of the type "book A and get B".
     *
     * @return \Davispeixoto\OpenTravelAlliance\OfferType\FreeUpgradeAType
     */
    public function getFreeUpgrade()
    {
        return $this->freeUpgrade;
    }

    /**
     * Sets a new freeUpgrade
     *
     * Defines offers of the type "book A and get B".
     *
     * @param \Davispeixoto\OpenTravelAlliance\OfferType\FreeUpgradeAType $freeUpgrade
     * @return self
     */
    public function setFreeUpgrade(\Davispeixoto\OpenTravelAlliance\OfferType\FreeUpgradeAType $freeUpgrade)
    {
        $this->freeUpgrade = $freeUpgrade;

        return $this;
    }

    /**
     * Gets as offerDescription
     *
     * A description of the offer. If the offer is based on a written contract, the
     * appropriate paragraph from the contract could be quoted here.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getOfferDescription()
    {
        return $this->offerDescription;
    }

    /**
     * Sets a new offerDescription
     *
     * A description of the offer. If the offer is based on a written contract, the
     * appropriate paragraph from the contract could be quoted here.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $offerDescription
     * @return self
     */
    public function setOfferDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $offerDescription)
    {
        $this->offerDescription = $offerDescription;

        return $this;
    }

    /**
     * Adds as compatibleOffer
     *
     * Collection of compatible offers.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\CompatibleOffersAType\CompatibleOfferAType
     * $compatibleOffer
     */
    public function addToCompatibleOffers(
        \Davispeixoto\OpenTravelAlliance\OfferType\CompatibleOffersAType\CompatibleOfferAType $compatibleOffer
    ) {
        $this->compatibleOffers[] = $compatibleOffer;

        return $this;
    }

    /**
     * isset compatibleOffers
     *
     * Collection of compatible offers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCompatibleOffers($index)
    {
        return isset($this->compatibleOffers[$index]);
    }

    /**
     * unset compatibleOffers
     *
     * Collection of compatible offers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCompatibleOffers($index)
    {
        unset($this->compatibleOffers[$index]);
    }

    /**
     * Gets as compatibleOffers
     *
     * Collection of compatible offers.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OfferType\CompatibleOffersAType\CompatibleOfferAType[]
     */
    public function getCompatibleOffers()
    {
        return $this->compatibleOffers;
    }

    /**
     * Sets a new compatibleOffers
     *
     * Collection of compatible offers.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\CompatibleOffersAType\CompatibleOfferAType[]
     * $compatibleOffers
     * @return self
     */
    public function setCompatibleOffers(array $compatibleOffers)
    {
        $this->compatibleOffers = $compatibleOffers;

        return $this;
    }

    /**
     * Adds as inventory
     *
     * Collection of inventory.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\InventoriesAType\InventoryAType
     * $inventory
     */
    public function addToInventories(
        \Davispeixoto\OpenTravelAlliance\OfferType\InventoriesAType\InventoryAType $inventory
    ) {
        $this->inventories[] = $inventory;

        return $this;
    }

    /**
     * isset inventories
     *
     * Collection of inventory.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInventories($index)
    {
        return isset($this->inventories[$index]);
    }

    /**
     * unset inventories
     *
     * Collection of inventory.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInventories($index)
    {
        unset($this->inventories[$index]);
    }

    /**
     * Gets as inventories
     *
     * Collection of inventory.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OfferType\InventoriesAType\InventoryAType[]
     */
    public function getInventories()
    {
        return $this->inventories;
    }

    /**
     * Sets a new inventories
     *
     * Collection of inventory.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\InventoriesAType\InventoryAType[]
     * $inventories
     * @return self
     */
    public function setInventories(array $inventories)
    {
        $this->inventories = $inventories;

        return $this;
    }

    /**
     * Adds as guest
     *
     * Collection of guests.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OfferType\GuestsAType\GuestAType $guest
     */
    public function addToGuests(\Davispeixoto\OpenTravelAlliance\OfferType\GuestsAType\GuestAType $guest)
    {
        $this->guests[] = $guest;

        return $this;
    }

    /**
     * isset guests
     *
     * Collection of guests.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuests($index)
    {
        return isset($this->guests[$index]);
    }

    /**
     * unset guests
     *
     * Collection of guests.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuests($index)
    {
        unset($this->guests[$index]);
    }

    /**
     * Gets as guests
     *
     * Collection of guests.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OfferType\GuestsAType\GuestAType[]
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * Sets a new guests
     *
     * Collection of guests.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OfferType\GuestsAType\GuestAType[]
     * $guests
     * @return self
     */
    public function setGuests(array $guests)
    {
        $this->guests = $guests;

        return $this;
    }


}

