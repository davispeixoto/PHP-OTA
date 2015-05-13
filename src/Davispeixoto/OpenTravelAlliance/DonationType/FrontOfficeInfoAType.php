<?php

namespace Davispeixoto\OpenTravelAlliance\DonationType;

/**
 * Class representing FrontOfficeInfoAType
 */
class FrontOfficeInfoAType
{

    /**
     * The Massive Good/ Amadeus Donation Service product name.
     *
     * @property string $productName
     */
    private $productName = null;

    /**
     * The Massive Good/ Amadeus Donation Service product version.
     *
     * @property string $productVersion
     */
    private $productVersion = null;

    /**
     * The Massive Good/ Amadeus Donation Service office ID.
     *
     * @property string $officeID
     */
    private $officeID = null;

    /**
     * The Massive Good/ Amadeus Donation Service corporate ID.
     *
     * @property string $corporateID
     */
    private $corporateID = null;

    /**
     * Gets as productName
     *
     * The Massive Good/ Amadeus Donation Service product name.
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Sets a new productName
     *
     * The Massive Good/ Amadeus Donation Service product name.
     *
     * @param string $productName
     * @return self
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Gets as productVersion
     *
     * The Massive Good/ Amadeus Donation Service product version.
     *
     * @return string
     */
    public function getProductVersion()
    {
        return $this->productVersion;
    }

    /**
     * Sets a new productVersion
     *
     * The Massive Good/ Amadeus Donation Service product version.
     *
     * @param string $productVersion
     * @return self
     */
    public function setProductVersion($productVersion)
    {
        $this->productVersion = $productVersion;

        return $this;
    }

    /**
     * Gets as officeID
     *
     * The Massive Good/ Amadeus Donation Service office ID.
     *
     * @return string
     */
    public function getOfficeID()
    {
        return $this->officeID;
    }

    /**
     * Sets a new officeID
     *
     * The Massive Good/ Amadeus Donation Service office ID.
     *
     * @param string $officeID
     * @return self
     */
    public function setOfficeID($officeID)
    {
        $this->officeID = $officeID;

        return $this;
    }

    /**
     * Gets as corporateID
     *
     * The Massive Good/ Amadeus Donation Service corporate ID.
     *
     * @return string
     */
    public function getCorporateID()
    {
        return $this->corporateID;
    }

    /**
     * Sets a new corporateID
     *
     * The Massive Good/ Amadeus Donation Service corporate ID.
     *
     * @param string $corporateID
     * @return self
     */
    public function setCorporateID($corporateID)
    {
        $this->corporateID = $corporateID;

        return $this;
    }


}

