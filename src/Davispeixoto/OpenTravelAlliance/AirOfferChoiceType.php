<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirOfferChoiceType
 *
 * A choice between specifying summary, priced or traveler purchased ancillary
 * offers.
 * XSD Type: AirOfferChoiceType
 */
class AirOfferChoiceType
{

    /**
     * Summary, non-priced air offers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType\SummaryAType[]
     * $summary
     */
    private $summary = null;

    /**
     * Priced air offers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType\PricedAType[]
     * $priced
     */
    private $priced = null;

    /**
     * Air offers already purchased for a trip.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirPurchasedOfferType\PurchasedItemAType[]
     * $purchased
     */
    private $purchased = null;

    /**
     * Adds as summary
     *
     * Summary, non-priced air offers.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType\SummaryAType $summary
     */
    public function addToSummary(\Davispeixoto\OpenTravelAlliance\AirOfferChoiceType\SummaryAType $summary)
    {
        $this->summary[] = $summary;

        return $this;
    }

    /**
     * isset summary
     *
     * Summary, non-priced air offers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSummary($index)
    {
        return isset($this->summary[$index]);
    }

    /**
     * unset summary
     *
     * Summary, non-priced air offers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSummary($index)
    {
        unset($this->summary[$index]);
    }

    /**
     * Gets as summary
     *
     * Summary, non-priced air offers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType\SummaryAType[]
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * Summary, non-priced air offers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType\SummaryAType[]
     * $summary
     * @return self
     */
    public function setSummary(array $summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Adds as priced
     *
     * Priced air offers.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType\PricedAType $priced
     */
    public function addToPriced(\Davispeixoto\OpenTravelAlliance\AirOfferChoiceType\PricedAType $priced)
    {
        $this->priced[] = $priced;

        return $this;
    }

    /**
     * isset priced
     *
     * Priced air offers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPriced($index)
    {
        return isset($this->priced[$index]);
    }

    /**
     * unset priced
     *
     * Priced air offers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPriced($index)
    {
        unset($this->priced[$index]);
    }

    /**
     * Gets as priced
     *
     * Priced air offers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType\PricedAType[]
     */
    public function getPriced()
    {
        return $this->priced;
    }

    /**
     * Sets a new priced
     *
     * Priced air offers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType\PricedAType[] $priced
     * @return self
     */
    public function setPriced(array $priced)
    {
        $this->priced = $priced;

        return $this;
    }

    /**
     * Adds as purchasedItem
     *
     * Air offers already purchased for a trip.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirPurchasedOfferType\PurchasedItemAType
     * $purchasedItem
     */
    public function addToPurchased(
        \Davispeixoto\OpenTravelAlliance\AirPurchasedOfferType\PurchasedItemAType $purchasedItem
    ) {
        $this->purchased[] = $purchasedItem;

        return $this;
    }

    /**
     * isset purchased
     *
     * Air offers already purchased for a trip.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPurchased($index)
    {
        return isset($this->purchased[$index]);
    }

    /**
     * unset purchased
     *
     * Air offers already purchased for a trip.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPurchased($index)
    {
        unset($this->purchased[$index]);
    }

    /**
     * Gets as purchased
     *
     * Air offers already purchased for a trip.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirPurchasedOfferType\PurchasedItemAType[]
     */
    public function getPurchased()
    {
        return $this->purchased;
    }

    /**
     * Sets a new purchased
     *
     * Air offers already purchased for a trip.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirPurchasedOfferType\PurchasedItemAType[]
     * $purchased
     * @return self
     */
    public function setPurchased(array $purchased)
    {
        $this->purchased = $purchased;

        return $this;
    }


}

