<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PackageType
 *
 * Defines a complete package holiday request.
 * XSD Type: PackageType
 */
class PackageType
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
     * Refer to OpenTravel Code List Package Type (PKG).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * The supplier's code to identify the travel arrangement for the package
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
     * The code for a meal plan e.g. AB- as brochure, AI- all inclusive, BB- bed and
     * breakfast, FB- full board, HB- Half Board, RO- room only,SC- self catering
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
     * The number of free child places required.
     *
     * @property integer $freeChildrenQuantity
     */
    private $freeChildrenQuantity = null;

    /**
     * The code for the tour operator's product brand (e.g. JMC, Sunset).
     *
     * @property string $brandCode
     */
    private $brandCode = null;

    /**
     * The tour operator's code for the product within the brand (e.g. Summersun,
     * Greece).
     *
     * @property string $productCode
     */
    private $productCode = null;

    /**
     * A reference to a source of information for the package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\URLType $uRL
     */
    private $uRL = null;

    /**
     * The company supplying the package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName
     */
    private $companyName = null;

    /**
     * The Start date and Duration or End Date of the package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PackageType\DateRangeAType $dateRange
     */
    private $dateRange = null;

    /**
     * A collection of elements to allow any item of inventory to be requested for a
     * booking. Normal usage is for the items to be presented in chronological
     * sequence.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItineraryItemRequestType[]
     * $itineraryItems
     */
    private $itineraryItems = null;

    /**
     * A collection of Extras requests.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ExtrasType[] $extras
     */
    private $extras = null;

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
     * Refer to OpenTravel Code List Package Type (PKG).
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
     * Refer to OpenTravel Code List Package Type (PKG).
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
     * The supplier's code to identify the travel arrangement for the package
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
     * The supplier's code to identify the travel arrangement for the package
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
     * Gets as boardCode
     *
     * The code for a meal plan e.g. AB- as brochure, AI- all inclusive, BB- bed and
     * breakfast, FB- full board, HB- Half Board, RO- room only,SC- self catering
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
     * breakfast, FB- full board, HB- Half Board, RO- room only,SC- self catering
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
     * Gets as freeChildrenQuantity
     *
     * The number of free child places required.
     *
     * @return integer
     */
    public function getFreeChildrenQuantity()
    {
        return $this->freeChildrenQuantity;
    }

    /**
     * Sets a new freeChildrenQuantity
     *
     * The number of free child places required.
     *
     * @param integer $freeChildrenQuantity
     * @return self
     */
    public function setFreeChildrenQuantity($freeChildrenQuantity)
    {
        $this->freeChildrenQuantity = $freeChildrenQuantity;

        return $this;
    }

    /**
     * Gets as brandCode
     *
     * The code for the tour operator's product brand (e.g. JMC, Sunset).
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
     * The code for the tour operator's product brand (e.g. JMC, Sunset).
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
     * The tour operator's code for the product within the brand (e.g. Summersun,
     * Greece).
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
     * The tour operator's code for the product within the brand (e.g. Summersun,
     * Greece).
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
     * Gets as uRL
     *
     * A reference to a source of information for the package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\URLType
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * A reference to a source of information for the package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\URLType $uRL
     * @return self
     */
    public function setURL(\Davispeixoto\OpenTravelAlliance\URLType $uRL)
    {
        $this->uRL = $uRL;

        return $this;
    }

    /**
     * Gets as companyName
     *
     * The company supplying the package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * The company supplying the package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName
     * @return self
     */
    public function setCompanyName(\Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Gets as dateRange
     *
     * The Start date and Duration or End Date of the package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PackageType\DateRangeAType
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
     * @param \Davispeixoto\OpenTravelAlliance\PackageType\DateRangeAType $dateRange
     * @return self
     */
    public function setDateRange(\Davispeixoto\OpenTravelAlliance\PackageType\DateRangeAType $dateRange)
    {
        $this->dateRange = $dateRange;

        return $this;
    }

    /**
     * Adds as itineraryItem
     *
     * A collection of elements to allow any item of inventory to be requested for a
     * booking. Normal usage is for the items to be presented in chronological
     * sequence.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ItineraryItemRequestType $itineraryItem
     */
    public function addToItineraryItems(\Davispeixoto\OpenTravelAlliance\ItineraryItemRequestType $itineraryItem)
    {
        $this->itineraryItems[] = $itineraryItem;

        return $this;
    }

    /**
     * isset itineraryItems
     *
     * A collection of elements to allow any item of inventory to be requested for a
     * booking. Normal usage is for the items to be presented in chronological
     * sequence.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItineraryItems($index)
    {
        return isset($this->itineraryItems[$index]);
    }

    /**
     * unset itineraryItems
     *
     * A collection of elements to allow any item of inventory to be requested for a
     * booking. Normal usage is for the items to be presented in chronological
     * sequence.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItineraryItems($index)
    {
        unset($this->itineraryItems[$index]);
    }

    /**
     * Gets as itineraryItems
     *
     * A collection of elements to allow any item of inventory to be requested for a
     * booking. Normal usage is for the items to be presented in chronological
     * sequence.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItineraryItemRequestType[]
     */
    public function getItineraryItems()
    {
        return $this->itineraryItems;
    }

    /**
     * Sets a new itineraryItems
     *
     * A collection of elements to allow any item of inventory to be requested for a
     * booking. Normal usage is for the items to be presented in chronological
     * sequence.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItineraryItemRequestType[]
     * $itineraryItems
     * @return self
     */
    public function setItineraryItems(array $itineraryItems)
    {
        $this->itineraryItems = $itineraryItems;

        return $this;
    }

    /**
     * Adds as extra
     *
     * A collection of Extras requests.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ExtrasType $extra
     */
    public function addToExtras(\Davispeixoto\OpenTravelAlliance\ExtrasType $extra)
    {
        $this->extras[] = $extra;

        return $this;
    }

    /**
     * isset extras
     *
     * A collection of Extras requests.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExtras($index)
    {
        return isset($this->extras[$index]);
    }

    /**
     * unset extras
     *
     * A collection of Extras requests.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExtras($index)
    {
        unset($this->extras[$index]);
    }

    /**
     * Gets as extras
     *
     * A collection of Extras requests.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ExtrasType[]
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Sets a new extras
     *
     * A collection of Extras requests.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ExtrasType[] $extras
     * @return self
     */
    public function setExtras(array $extras)
    {
        $this->extras = $extras;

        return $this;
    }


}

