<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityNegotiatedPricingType
 *
 * Negotiated pricing for corporations and groups.
 * XSD Type: TourActivityNegotiatedPricing
 */
class TourActivityNegotiatedPricingType
{

    /**
     * The customer account ID if applicable.
     *
     * @property string $accountID
     */
    private $accountID = null;

    /**
     * The customer account name if applicable.
     *
     * @property string $accountName
     */
    private $accountName = null;

    /**
     * The rate category associated with the tour/ activity. Refer to OpenTravel Rate
     * Category (RTC) code list.
     *
     * @property string $rateCategory
     */
    private $rateCategory = null;

    /**
     * This is the vendor specific code for rate codes (e.g. WES, 2A, DLY00).
     *
     * @property string $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * The vendor specific code used to identify a special rate associated with a
     * specific organization.
     *
     * @property string $corpDiscountNmbr
     */
    private $corpDiscountNmbr = null;

    /**
     * Gets as accountID
     *
     * The customer account ID if applicable.
     *
     * @return string
     */
    public function getAccountID()
    {
        return $this->accountID;
    }

    /**
     * Sets a new accountID
     *
     * The customer account ID if applicable.
     *
     * @param string $accountID
     * @return self
     */
    public function setAccountID($accountID)
    {
        $this->accountID = $accountID;

        return $this;
    }

    /**
     * Gets as accountName
     *
     * The customer account name if applicable.
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Sets a new accountName
     *
     * The customer account name if applicable.
     *
     * @param string $accountName
     * @return self
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * Gets as rateCategory
     *
     * The rate category associated with the tour/ activity. Refer to OpenTravel Rate
     * Category (RTC) code list.
     *
     * @return string
     */
    public function getRateCategory()
    {
        return $this->rateCategory;
    }

    /**
     * Sets a new rateCategory
     *
     * The rate category associated with the tour/ activity. Refer to OpenTravel Rate
     * Category (RTC) code list.
     *
     * @param string $rateCategory
     * @return self
     */
    public function setRateCategory($rateCategory)
    {
        $this->rateCategory = $rateCategory;

        return $this;
    }

    /**
     * Gets as rateQualifier
     *
     * This is the vendor specific code for rate codes (e.g. WES, 2A, DLY00).
     *
     * @return string
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * This is the vendor specific code for rate codes (e.g. WES, 2A, DLY00).
     *
     * @param string $rateQualifier
     * @return self
     */
    public function setRateQualifier($rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }

    /**
     * Gets as corpDiscountNmbr
     *
     * The vendor specific code used to identify a special rate associated with a
     * specific organization.
     *
     * @return string
     */
    public function getCorpDiscountNmbr()
    {
        return $this->corpDiscountNmbr;
    }

    /**
     * Sets a new corpDiscountNmbr
     *
     * The vendor specific code used to identify a special rate associated with a
     * specific organization.
     *
     * @param string $corpDiscountNmbr
     * @return self
     */
    public function setCorpDiscountNmbr($corpDiscountNmbr)
    {
        $this->corpDiscountNmbr = $corpDiscountNmbr;

        return $this;
    }


}

