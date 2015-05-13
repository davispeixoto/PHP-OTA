<?php

namespace Davispeixoto\OpenTravelAlliance\AffiliationInfoType\BrandsAType;

/**
 * Class representing BrandAType
 */
class BrandAType
{

    /**
     * The universal resource locator (URL) for the marketing brand as found on the
     * Internet.
     *
     * @property string $uRL
     */
    private $uRL = null;

    /**
     * The code for the type of brand affiliated with the hotel facility. Refer to
     * OpenTravel Code List Brand Category Code (BCC).
     *
     * @property string $categoryCode
     */
    private $categoryCode = null;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * Name of brand, marketing chain, representation company or other affiliation(s).
     *
     * @property string $marketing
     */
    private $marketing = null;

    /**
     * Gets as uRL
     *
     * The universal resource locator (URL) for the marketing brand as found on the
     * Internet.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * The universal resource locator (URL) for the marketing brand as found on the
     * Internet.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;

        return $this;
    }

    /**
     * Gets as categoryCode
     *
     * The code for the type of brand affiliated with the hotel facility. Refer to
     * OpenTravel Code List Brand Category Code (BCC).
     *
     * @return string
     */
    public function getCategoryCode()
    {
        return $this->categoryCode;
    }

    /**
     * Sets a new categoryCode
     *
     * The code for the type of brand affiliated with the hotel facility. Refer to
     * OpenTravel Code List Brand Category Code (BCC).
     *
     * @param string $categoryCode
     * @return self
     */
    public function setCategoryCode($categoryCode)
    {
        $this->categoryCode = $categoryCode;

        return $this;
    }

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return boolean
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param boolean $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;

        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;

        return $this;
    }

    /**
     * Gets as marketing
     *
     * Name of brand, marketing chain, representation company or other affiliation(s).
     *
     * @return string
     */
    public function getMarketing()
    {
        return $this->marketing;
    }

    /**
     * Sets a new marketing
     *
     * Name of brand, marketing chain, representation company or other affiliation(s).
     *
     * @param string $marketing
     * @return self
     */
    public function setMarketing($marketing)
    {
        $this->marketing = $marketing;

        return $this;
    }


}

