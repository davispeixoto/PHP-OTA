<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseFastSellRQ\SelectedSailingAType;

/**
 * Class representing SelectedCategoryAType
 */
class SelectedCategoryAType
{

    /**
     * Contains the cruise line's category code for the general cabin location.
     * BerthedCategoryCode will differ from the PricedCategoryCode if the customer
     * receives an upgrade.
     *
     * @property string $berthedCategoryCode
     */
    private $berthedCategoryCode = null;

    /**
     * Contains the cruise line's category code for the general cabin location for
     * which the customer pays. PricedCategoryCode will differ from the
     * BerthedCategoryCode if the customer receives an upgrade.
     *
     * @property string $pricedCategoryCode
     */
    private $pricedCategoryCode = null;

    /**
     * Number of the deck on the ship where the cabin is located.
     *
     * @property string $deckNumber
     */
    private $deckNumber = null;

    /**
     * Name of the deck on the ship where the cabin is located.
     *
     * @property string $deckName
     */
    private $deckName = null;

    /**
     * Specifies the selected Cabins.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseFastSellRQ\SelectedSailingAType\SelectedCategoryAType\SelectedCabinAType[]
     * $selectedCabin
     */
    private $selectedCabin = null;

    /**
     * Gets as berthedCategoryCode
     *
     * Contains the cruise line's category code for the general cabin location.
     * BerthedCategoryCode will differ from the PricedCategoryCode if the customer
     * receives an upgrade.
     *
     * @return string
     */
    public function getBerthedCategoryCode()
    {
        return $this->berthedCategoryCode;
    }

    /**
     * Sets a new berthedCategoryCode
     *
     * Contains the cruise line's category code for the general cabin location.
     * BerthedCategoryCode will differ from the PricedCategoryCode if the customer
     * receives an upgrade.
     *
     * @param string $berthedCategoryCode
     * @return self
     */
    public function setBerthedCategoryCode($berthedCategoryCode)
    {
        $this->berthedCategoryCode = $berthedCategoryCode;

        return $this;
    }

    /**
     * Gets as pricedCategoryCode
     *
     * Contains the cruise line's category code for the general cabin location for
     * which the customer pays. PricedCategoryCode will differ from the
     * BerthedCategoryCode if the customer receives an upgrade.
     *
     * @return string
     */
    public function getPricedCategoryCode()
    {
        return $this->pricedCategoryCode;
    }

    /**
     * Sets a new pricedCategoryCode
     *
     * Contains the cruise line's category code for the general cabin location for
     * which the customer pays. PricedCategoryCode will differ from the
     * BerthedCategoryCode if the customer receives an upgrade.
     *
     * @param string $pricedCategoryCode
     * @return self
     */
    public function setPricedCategoryCode($pricedCategoryCode)
    {
        $this->pricedCategoryCode = $pricedCategoryCode;

        return $this;
    }

    /**
     * Gets as deckNumber
     *
     * Number of the deck on the ship where the cabin is located.
     *
     * @return string
     */
    public function getDeckNumber()
    {
        return $this->deckNumber;
    }

    /**
     * Sets a new deckNumber
     *
     * Number of the deck on the ship where the cabin is located.
     *
     * @param string $deckNumber
     * @return self
     */
    public function setDeckNumber($deckNumber)
    {
        $this->deckNumber = $deckNumber;

        return $this;
    }

    /**
     * Gets as deckName
     *
     * Name of the deck on the ship where the cabin is located.
     *
     * @return string
     */
    public function getDeckName()
    {
        return $this->deckName;
    }

    /**
     * Sets a new deckName
     *
     * Name of the deck on the ship where the cabin is located.
     *
     * @param string $deckName
     * @return self
     */
    public function setDeckName($deckName)
    {
        $this->deckName = $deckName;

        return $this;
    }

    /**
     * Adds as selectedCabin
     *
     * Specifies the selected Cabins.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseFastSellRQ\SelectedSailingAType\SelectedCategoryAType\SelectedCabinAType
     * $selectedCabin
     */
    public function addToSelectedCabin(
        \Davispeixoto\OpenTravelAlliance\OTACruiseFastSellRQ\SelectedSailingAType\SelectedCategoryAType\SelectedCabinAType $selectedCabin
    ) {
        $this->selectedCabin[] = $selectedCabin;

        return $this;
    }

    /**
     * isset selectedCabin
     *
     * Specifies the selected Cabins.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSelectedCabin($index)
    {
        return isset($this->selectedCabin[$index]);
    }

    /**
     * unset selectedCabin
     *
     * Specifies the selected Cabins.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSelectedCabin($index)
    {
        unset($this->selectedCabin[$index]);
    }

    /**
     * Gets as selectedCabin
     *
     * Specifies the selected Cabins.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseFastSellRQ\SelectedSailingAType\SelectedCategoryAType\SelectedCabinAType[]
     */
    public function getSelectedCabin()
    {
        return $this->selectedCabin;
    }

    /**
     * Sets a new selectedCabin
     *
     * Specifies the selected Cabins.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseFastSellRQ\SelectedSailingAType\SelectedCategoryAType\SelectedCabinAType[]
     * $selectedCabin
     * @return self
     */
    public function setSelectedCabin(array $selectedCabin)
    {
        $this->selectedCabin = $selectedCabin;

        return $this;
    }


}

