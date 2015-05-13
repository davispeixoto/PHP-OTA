<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType;

/**
 * Class representing PlanDetailAType
 */
class PlanDetailAType
{

    /**
     * Detailed description of insurance product.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType $planDescription
     */
    private $planDescription = null;

    /**
     * URL where user may get more information about quoting this product.
     *
     * @property \Davispeixoto\OpenTravelAlliance\URLType $quoteDetailURL
     */
    private $quoteDetailURL = null;

    /**
     * URL where user may get more information about purchasing this product.
     *
     * @property \Davispeixoto\OpenTravelAlliance\URLType $bookingDetailURL
     */
    private $bookingDetailURL = null;

    /**
     * Gets as planDescription
     *
     * Detailed description of insurance product.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType
     */
    public function getPlanDescription()
    {
        return $this->planDescription;
    }

    /**
     * Sets a new planDescription
     *
     * Detailed description of insurance product.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $planDescription
     * @return self
     */
    public function setPlanDescription(\Davispeixoto\OpenTravelAlliance\FormattedTextType $planDescription)
    {
        $this->planDescription = $planDescription;

        return $this;
    }

    /**
     * Gets as quoteDetailURL
     *
     * URL where user may get more information about quoting this product.
     *
     * @return \Davispeixoto\OpenTravelAlliance\URLType
     */
    public function getQuoteDetailURL()
    {
        return $this->quoteDetailURL;
    }

    /**
     * Sets a new quoteDetailURL
     *
     * URL where user may get more information about quoting this product.
     *
     * @param \Davispeixoto\OpenTravelAlliance\URLType $quoteDetailURL
     * @return self
     */
    public function setQuoteDetailURL(\Davispeixoto\OpenTravelAlliance\URLType $quoteDetailURL)
    {
        $this->quoteDetailURL = $quoteDetailURL;

        return $this;
    }

    /**
     * Gets as bookingDetailURL
     *
     * URL where user may get more information about purchasing this product.
     *
     * @return \Davispeixoto\OpenTravelAlliance\URLType
     */
    public function getBookingDetailURL()
    {
        return $this->bookingDetailURL;
    }

    /**
     * Sets a new bookingDetailURL
     *
     * URL where user may get more information about purchasing this product.
     *
     * @param \Davispeixoto\OpenTravelAlliance\URLType $bookingDetailURL
     * @return self
     */
    public function setBookingDetailURL(\Davispeixoto\OpenTravelAlliance\URLType $bookingDetailURL)
    {
        $this->bookingDetailURL = $bookingDetailURL;

        return $this;
    }


}

