<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\CruiseLinePrefsAType;

/**
 * Class representing CruiseLinePrefAType
 */
class CruiseLinePrefAType
{

    /**
     * Specifies the operator of the ship (e.g. cruise line or ferry company).
     *
     * @property string $vendorCode
     */
    private $vendorCode = null;

    /**
     * Specifies the name of the operator of the ship (e.g. a cruise line or ferry
     * company).
     *
     * @property string $vendorName
     */
    private $vendorName = null;

    /**
     * Specifies the ship code as defined by the cruise line.
     *
     * @property string $shipCode
     */
    private $shipCode = null;

    /**
     * Specifies the ship name as specified by the cruise line.
     *
     * @property string $shipName
     */
    private $shipName = null;

    /**
     * Identifies the source authority for the code (e.g., IATA); typically used with
     * VendorCode.
     *
     * @property string $vendorCodeContext
     */
    private $vendorCodeContext = null;

    /**
     * Used to request package options that the cruise might offer with the sailing. It
     * is quite common to request, at this stage, packages that are included in the
     * cruise sailing offering (inclusive packages).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\CruiseLinePrefsAType\CruiseLinePrefAType\InclusivePackageOptionAType
     * $inclusivePackageOption
     */
    private $inclusivePackageOption = null;

    /**
     * Used to further qualify the sailing availability search.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SailingSearchQualifierType
     * $searchQualifiers
     */
    private $searchQualifiers = null;

    /**
     * Gets as vendorCode
     *
     * Specifies the operator of the ship (e.g. cruise line or ferry company).
     *
     * @return string
     */
    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * Sets a new vendorCode
     *
     * Specifies the operator of the ship (e.g. cruise line or ferry company).
     *
     * @param string $vendorCode
     * @return self
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode = $vendorCode;

        return $this;
    }

    /**
     * Gets as vendorName
     *
     * Specifies the name of the operator of the ship (e.g. a cruise line or ferry
     * company).
     *
     * @return string
     */
    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * Sets a new vendorName
     *
     * Specifies the name of the operator of the ship (e.g. a cruise line or ferry
     * company).
     *
     * @param string $vendorName
     * @return self
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName = $vendorName;

        return $this;
    }

    /**
     * Gets as shipCode
     *
     * Specifies the ship code as defined by the cruise line.
     *
     * @return string
     */
    public function getShipCode()
    {
        return $this->shipCode;
    }

    /**
     * Sets a new shipCode
     *
     * Specifies the ship code as defined by the cruise line.
     *
     * @param string $shipCode
     * @return self
     */
    public function setShipCode($shipCode)
    {
        $this->shipCode = $shipCode;

        return $this;
    }

    /**
     * Gets as shipName
     *
     * Specifies the ship name as specified by the cruise line.
     *
     * @return string
     */
    public function getShipName()
    {
        return $this->shipName;
    }

    /**
     * Sets a new shipName
     *
     * Specifies the ship name as specified by the cruise line.
     *
     * @param string $shipName
     * @return self
     */
    public function setShipName($shipName)
    {
        $this->shipName = $shipName;

        return $this;
    }

    /**
     * Gets as vendorCodeContext
     *
     * Identifies the source authority for the code (e.g., IATA); typically used with
     * VendorCode.
     *
     * @return string
     */
    public function getVendorCodeContext()
    {
        return $this->vendorCodeContext;
    }

    /**
     * Sets a new vendorCodeContext
     *
     * Identifies the source authority for the code (e.g., IATA); typically used with
     * VendorCode.
     *
     * @param string $vendorCodeContext
     * @return self
     */
    public function setVendorCodeContext($vendorCodeContext)
    {
        $this->vendorCodeContext = $vendorCodeContext;

        return $this;
    }

    /**
     * Gets as inclusivePackageOption
     *
     * Used to request package options that the cruise might offer with the sailing. It
     * is quite common to request, at this stage, packages that are included in the
     * cruise sailing offering (inclusive packages).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\CruiseLinePrefsAType\CruiseLinePrefAType\InclusivePackageOptionAType
     */
    public function getInclusivePackageOption()
    {
        return $this->inclusivePackageOption;
    }

    /**
     * Sets a new inclusivePackageOption
     *
     * Used to request package options that the cruise might offer with the sailing. It
     * is quite common to request, at this stage, packages that are included in the
     * cruise sailing offering (inclusive packages).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\CruiseLinePrefsAType\CruiseLinePrefAType\InclusivePackageOptionAType
     * $inclusivePackageOption
     * @return self
     */
    public function setInclusivePackageOption(
        \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\CruiseLinePrefsAType\CruiseLinePrefAType\InclusivePackageOptionAType $inclusivePackageOption
    ) {
        $this->inclusivePackageOption = $inclusivePackageOption;

        return $this;
    }

    /**
     * Gets as searchQualifiers
     *
     * Used to further qualify the sailing availability search.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingSearchQualifierType
     */
    public function getSearchQualifiers()
    {
        return $this->searchQualifiers;
    }

    /**
     * Sets a new searchQualifiers
     *
     * Used to further qualify the sailing availability search.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingSearchQualifierType
     * $searchQualifiers
     * @return self
     */
    public function setSearchQualifiers(\Davispeixoto\OpenTravelAlliance\SailingSearchQualifierType $searchQualifiers)
    {
        $this->searchQualifiers = $searchQualifiers;

        return $this;
    }


}

