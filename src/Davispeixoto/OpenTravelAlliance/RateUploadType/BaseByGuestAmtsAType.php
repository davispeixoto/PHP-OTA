<?php

namespace Davispeixoto\OpenTravelAlliance\RateUploadType;

/**
 * Class representing BaseByGuestAmtsAType
 */
class BaseByGuestAmtsAType
{

    /**
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType[]
     * $baseByGuestAmt
     */
    private $baseByGuestAmt = null;

    /**
     * Adds as baseByGuestAmt
     *
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType
     * $baseByGuestAmt
     */
    public function addToBaseByGuestAmt(
        \Davispeixoto\OpenTravelAlliance\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType $baseByGuestAmt
    ) {
        $this->baseByGuestAmt[] = $baseByGuestAmt;

        return $this;
    }

    /**
     * isset baseByGuestAmt
     *
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBaseByGuestAmt($index)
    {
        return isset($this->baseByGuestAmt[$index]);
    }

    /**
     * unset baseByGuestAmt
     *
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBaseByGuestAmt($index)
    {
        unset($this->baseByGuestAmt[$index]);
    }

    /**
     * Gets as baseByGuestAmt
     *
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType[]
     */
    public function getBaseByGuestAmt()
    {
        return $this->baseByGuestAmt;
    }

    /**
     * Sets a new baseByGuestAmt
     *
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType[]
     * $baseByGuestAmt
     * @return self
     */
    public function setBaseByGuestAmt(array $baseByGuestAmt)
    {
        $this->baseByGuestAmt = $baseByGuestAmt;

        return $this;
    }


}

