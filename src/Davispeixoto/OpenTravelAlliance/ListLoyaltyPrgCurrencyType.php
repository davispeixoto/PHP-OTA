<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ListLoyaltyPrgCurrencyType
 *
 * Loyalty program currencies.Use: This is a string list of enumerations with an
 * "Other_" literal to support an open enumeration list. Use the "Other_"
 * enumeration in combination with the Code Extension fields to exchange a value
 * that is not in the list and is known to your trading partners.
 * XSD Type: List_LoyaltyPrgCurrency
 */
class ListLoyaltyPrgCurrencyType
{

    /**
     * Enumerated list.
     *
     * @property string $list
     */
    private $list = null;

    /**
     * Code List extension information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CodeListSummaryExtensionType
     * $extension
     */
    private $extension = null;

    /**
     * Gets as list
     *
     * Enumerated list.
     *
     * @return string
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Sets a new list
     *
     * Enumerated list.
     *
     * @param string $list
     * @return self
     */
    public function setList($list)
    {
        $this->list = $list;

        return $this;
    }

    /**
     * Gets as extension
     *
     * Code List extension information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CodeListSummaryExtensionType
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * Code List extension information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CodeListSummaryExtensionType $extension
     * @return self
     */
    public function setExtension(\Davispeixoto\OpenTravelAlliance\CodeListSummaryExtensionType $extension)
    {
        $this->extension = $extension;

        return $this;
    }


}

