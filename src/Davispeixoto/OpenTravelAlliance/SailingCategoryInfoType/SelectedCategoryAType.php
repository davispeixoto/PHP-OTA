<?php

namespace Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType;

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
     * When true, this indicates the selected category is waitlisted.
     *
     * @property boolean $waitlistIndicator
     */
    private $waitlistIndicator = null;

    /**
     * Specifies the fare code. Fare codes are specific to individual cruise lines.
     *
     * @property string $fareCode
     */
    private $fareCode = null;

    /**
     * Specifies the group code. Group codes are specific to individual cruise lines.
     *
     * @property string $groupCode
     */
    private $groupCode = null;

    /**
     * Collection of category-level cabin attributes.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\CabinAttributesAType\CabinAttributeAType[]
     * $cabinAttributes
     */
    private $cabinAttributes = null;

    /**
     * Specifies the selected cabin information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType[]
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
     * Gets as waitlistIndicator
     *
     * When true, this indicates the selected category is waitlisted.
     *
     * @return boolean
     */
    public function getWaitlistIndicator()
    {
        return $this->waitlistIndicator;
    }

    /**
     * Sets a new waitlistIndicator
     *
     * When true, this indicates the selected category is waitlisted.
     *
     * @param boolean $waitlistIndicator
     * @return self
     */
    public function setWaitlistIndicator($waitlistIndicator)
    {
        $this->waitlistIndicator = $waitlistIndicator;

        return $this;
    }

    /**
     * Gets as fareCode
     *
     * Specifies the fare code. Fare codes are specific to individual cruise lines.
     *
     * @return string
     */
    public function getFareCode()
    {
        return $this->fareCode;
    }

    /**
     * Sets a new fareCode
     *
     * Specifies the fare code. Fare codes are specific to individual cruise lines.
     *
     * @param string $fareCode
     * @return self
     */
    public function setFareCode($fareCode)
    {
        $this->fareCode = $fareCode;

        return $this;
    }

    /**
     * Gets as groupCode
     *
     * Specifies the group code. Group codes are specific to individual cruise lines.
     *
     * @return string
     */
    public function getGroupCode()
    {
        return $this->groupCode;
    }

    /**
     * Sets a new groupCode
     *
     * Specifies the group code. Group codes are specific to individual cruise lines.
     *
     * @param string $groupCode
     * @return self
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;

        return $this;
    }

    /**
     * Adds as cabinAttribute
     *
     * Collection of category-level cabin attributes.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\CabinAttributesAType\CabinAttributeAType
     * $cabinAttribute
     */
    public function addToCabinAttributes(
        \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\CabinAttributesAType\CabinAttributeAType $cabinAttribute
    ) {
        $this->cabinAttributes[] = $cabinAttribute;

        return $this;
    }

    /**
     * isset cabinAttributes
     *
     * Collection of category-level cabin attributes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCabinAttributes($index)
    {
        return isset($this->cabinAttributes[$index]);
    }

    /**
     * unset cabinAttributes
     *
     * Collection of category-level cabin attributes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCabinAttributes($index)
    {
        unset($this->cabinAttributes[$index]);
    }

    /**
     * Gets as cabinAttributes
     *
     * Collection of category-level cabin attributes.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\CabinAttributesAType\CabinAttributeAType[]
     */
    public function getCabinAttributes()
    {
        return $this->cabinAttributes;
    }

    /**
     * Sets a new cabinAttributes
     *
     * Collection of category-level cabin attributes.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\CabinAttributesAType\CabinAttributeAType[]
     * $cabinAttributes
     * @return self
     */
    public function setCabinAttributes(array $cabinAttributes)
    {
        $this->cabinAttributes = $cabinAttributes;

        return $this;
    }

    /**
     * Adds as selectedCabin
     *
     * Specifies the selected cabin information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType
     * $selectedCabin
     */
    public function addToSelectedCabin(
        \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType $selectedCabin
    ) {
        $this->selectedCabin[] = $selectedCabin;

        return $this;
    }

    /**
     * isset selectedCabin
     *
     * Specifies the selected cabin information.
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
     * Specifies the selected cabin information.
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
     * Specifies the selected cabin information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType[]
     */
    public function getSelectedCabin()
    {
        return $this->selectedCabin;
    }

    /**
     * Sets a new selectedCabin
     *
     * Specifies the selected cabin information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType[]
     * $selectedCabin
     * @return self
     */
    public function setSelectedCabin(array $selectedCabin)
    {
        $this->selectedCabin = $selectedCabin;

        return $this;
    }


}

