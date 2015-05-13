<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgAvailRQ;

/**
 * Class representing PackageRequestAType
 */
class PackageRequestAType
{

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * The type of package e.g. 4 I(Air Inclusive), 3 (Flight-only) etc. Refer to
     * OpenTravel Code List Package Type (PKG).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * The supplier's code to identify the travel arrangement for a package.
     *
     * @property string $travelCode
     */
    private $travelCode = null;

    /**
     * The supplier's code to identify the accommodation/tour arrangement for a
     * package.
     *
     * @property string $tourCode
     */
    private $tourCode = null;

    /**
     * A short description of a holiday package.
     *
     * @property string $shortDescription
     */
    private $shortDescription = null;

    /**
     * The code for a meal plan e.g. AB- as brochure, AI- all inclusive, BB- bed and
     * breakfast, FB- full board, HB- Half Board, RO- room only,SC- self catering.
     *
     * @property string $boardCode
     */
    private $boardCode = null;

    /**
     * A code to request a specific promotional price.
     *
     * @property string $promotionCode
     */
    private $promotionCode = null;

    /**
     * The code for the tour operator's product brand e.g. Thomascook, JMC, Sunset etc.
     *
     * @property string $brandCode
     */
    private $brandCode = null;

    /**
     * The tour operator's code for the product within the brand e.g. Summersun, Greece
     * etc.
     *
     * @property string $productCode
     */
    private $productCode = null;

    /**
     * Number of Free Children requested.
     *
     * @property integer $freeChildQuantity
     */
    private $freeChildQuantity = null;

    /**
     * The flight cabin/class required.
     *
     * @property string $cabinType
     */
    private $cabinType = null;

    /**
     * The Start date and Duration or End Date of the package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $dateRange
     */
    private $dateRange = null;

    /**
     * The departure and arrival points for outward and/or return travel. Generally
     * used when the TravelCode represents a flight which has more than one domestic
     * leg (e.g. Glasgow- Manchester- Palma.)
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRQ\PackageRequestAType\RoutingAType[]
     * $routing
     */
    private $routing = null;

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as type
     *
     * The type of package e.g. 4 I(Air Inclusive), 3 (Flight-only) etc. Refer to
     * OpenTravel Code List Package Type (PKG).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of package e.g. 4 I(Air Inclusive), 3 (Flight-only) etc. Refer to
     * OpenTravel Code List Package Type (PKG).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as travelCode
     *
     * The supplier's code to identify the travel arrangement for a package.
     *
     * @return string
     */
    public function getTravelCode()
    {
        return $this->travelCode;
    }

    /**
     * Sets a new travelCode
     *
     * The supplier's code to identify the travel arrangement for a package.
     *
     * @param string $travelCode
     * @return self
     */
    public function setTravelCode($travelCode)
    {
        $this->travelCode = $travelCode;

        return $this;
    }

    /**
     * Gets as tourCode
     *
     * The supplier's code to identify the accommodation/tour arrangement for a
     * package.
     *
     * @return string
     */
    public function getTourCode()
    {
        return $this->tourCode;
    }

    /**
     * Sets a new tourCode
     *
     * The supplier's code to identify the accommodation/tour arrangement for a
     * package.
     *
     * @param string $tourCode
     * @return self
     */
    public function setTourCode($tourCode)
    {
        $this->tourCode = $tourCode;

        return $this;
    }

    /**
     * Gets as shortDescription
     *
     * A short description of a holiday package.
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Sets a new shortDescription
     *
     * A short description of a holiday package.
     *
     * @param string $shortDescription
     * @return self
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Gets as boardCode
     *
     * The code for a meal plan e.g. AB- as brochure, AI- all inclusive, BB- bed and
     * breakfast, FB- full board, HB- Half Board, RO- room only,SC- self catering.
     *
     * @return string
     */
    public function getBoardCode()
    {
        return $this->boardCode;
    }

    /**
     * Sets a new boardCode
     *
     * The code for a meal plan e.g. AB- as brochure, AI- all inclusive, BB- bed and
     * breakfast, FB- full board, HB- Half Board, RO- room only,SC- self catering.
     *
     * @param string $boardCode
     * @return self
     */
    public function setBoardCode($boardCode)
    {
        $this->boardCode = $boardCode;

        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * A code to request a specific promotional price.
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * A code to request a specific promotional price.
     *
     * @param string $promotionCode
     * @return self
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;

        return $this;
    }

    /**
     * Gets as brandCode
     *
     * The code for the tour operator's product brand e.g. Thomascook, JMC, Sunset etc.
     *
     * @return string
     */
    public function getBrandCode()
    {
        return $this->brandCode;
    }

    /**
     * Sets a new brandCode
     *
     * The code for the tour operator's product brand e.g. Thomascook, JMC, Sunset etc.
     *
     * @param string $brandCode
     * @return self
     */
    public function setBrandCode($brandCode)
    {
        $this->brandCode = $brandCode;

        return $this;
    }

    /**
     * Gets as productCode
     *
     * The tour operator's code for the product within the brand e.g. Summersun, Greece
     * etc.
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Sets a new productCode
     *
     * The tour operator's code for the product within the brand e.g. Summersun, Greece
     * etc.
     *
     * @param string $productCode
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Gets as freeChildQuantity
     *
     * Number of Free Children requested.
     *
     * @return integer
     */
    public function getFreeChildQuantity()
    {
        return $this->freeChildQuantity;
    }

    /**
     * Sets a new freeChildQuantity
     *
     * Number of Free Children requested.
     *
     * @param integer $freeChildQuantity
     * @return self
     */
    public function setFreeChildQuantity($freeChildQuantity)
    {
        $this->freeChildQuantity = $freeChildQuantity;

        return $this;
    }

    /**
     * Gets as cabinType
     *
     * The flight cabin/class required.
     *
     * @return string
     */
    public function getCabinType()
    {
        return $this->cabinType;
    }

    /**
     * Sets a new cabinType
     *
     * The flight cabin/class required.
     *
     * @param string $cabinType
     * @return self
     */
    public function setCabinType($cabinType)
    {
        $this->cabinType = $cabinType;

        return $this;
    }

    /**
     * Gets as dateRange
     *
     * The Start date and Duration or End Date of the package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateTimeSpanType
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * Sets a new dateRange
     *
     * The Start date and Duration or End Date of the package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $dateRange
     * @return self
     */
    public function setDateRange(\Davispeixoto\OpenTravelAlliance\DateTimeSpanType $dateRange)
    {
        $this->dateRange = $dateRange;

        return $this;
    }

    /**
     * Adds as routing
     *
     * The departure and arrival points for outward and/or return travel. Generally
     * used when the TravelCode represents a flight which has more than one domestic
     * leg (e.g. Glasgow- Manchester- Palma.)
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRQ\PackageRequestAType\RoutingAType
     * $routing
     */
    public function addToRouting(
        \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRQ\PackageRequestAType\RoutingAType $routing
    ) {
        $this->routing[] = $routing;

        return $this;
    }

    /**
     * isset routing
     *
     * The departure and arrival points for outward and/or return travel. Generally
     * used when the TravelCode represents a flight which has more than one domestic
     * leg (e.g. Glasgow- Manchester- Palma.)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRouting($index)
    {
        return isset($this->routing[$index]);
    }

    /**
     * unset routing
     *
     * The departure and arrival points for outward and/or return travel. Generally
     * used when the TravelCode represents a flight which has more than one domestic
     * leg (e.g. Glasgow- Manchester- Palma.)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRouting($index)
    {
        unset($this->routing[$index]);
    }

    /**
     * Gets as routing
     *
     * The departure and arrival points for outward and/or return travel. Generally
     * used when the TravelCode represents a flight which has more than one domestic
     * leg (e.g. Glasgow- Manchester- Palma.)
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRQ\PackageRequestAType\RoutingAType[]
     */
    public function getRouting()
    {
        return $this->routing;
    }

    /**
     * Sets a new routing
     *
     * The departure and arrival points for outward and/or return travel. Generally
     * used when the TravelCode represents a flight which has more than one domestic
     * leg (e.g. Glasgow- Manchester- Palma.)
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRQ\PackageRequestAType\RoutingAType[]
     * $routing
     * @return self
     */
    public function setRouting(array $routing)
    {
        $this->routing = $routing;

        return $this;
    }


}

