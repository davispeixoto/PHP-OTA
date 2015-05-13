<?php

namespace Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType;

use Davispeixoto\OpenTravelAlliance\AddressType;

/**
 * Class representing AddressAType
 */
class AddressAType extends AddressType
{

    /**
     * When true, only locations in the same country as the specified city's country
     * should be selected.
     *
     * @property boolean $sameCountryInd
     */
    private $sameCountryInd = null;

    /**
     * Determines how the keywords specified in the Address element will be processed.
     *
     * @property string $addressSearchScope
     */
    private $addressSearchScope = null;

    /**
     * Gets as sameCountryInd
     *
     * When true, only locations in the same country as the specified city's country
     * should be selected.
     *
     * @return boolean
     */
    public function getSameCountryInd()
    {
        return $this->sameCountryInd;
    }

    /**
     * Sets a new sameCountryInd
     *
     * When true, only locations in the same country as the specified city's country
     * should be selected.
     *
     * @param boolean $sameCountryInd
     * @return self
     */
    public function setSameCountryInd($sameCountryInd)
    {
        $this->sameCountryInd = $sameCountryInd;

        return $this;
    }

    /**
     * Gets as addressSearchScope
     *
     * Determines how the keywords specified in the Address element will be processed.
     *
     * @return string
     */
    public function getAddressSearchScope()
    {
        return $this->addressSearchScope;
    }

    /**
     * Sets a new addressSearchScope
     *
     * Determines how the keywords specified in the Address element will be processed.
     *
     * @param string $addressSearchScope
     * @return self
     */
    public function setAddressSearchScope($addressSearchScope)
    {
        $this->addressSearchScope = $addressSearchScope;

        return $this;
    }


}

