<?php

namespace Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ExhibitionAType;

/**
 * Class representing ExhibitDetailsAType
 */
class ExhibitDetailsAType
{

    /**
     * When true, indicates one or more exhibits required food and beverage service.
     *
     * @property boolean $foodAndBeverageIndicator
     */
    private $foodAndBeverageIndicator = null;

    /**
     * Number of booths requiring food and beverage service.
     *
     * @property integer $foodAndBeverageBoothQuantity
     */
    private $foodAndBeverageBoothQuantity = null;

    /**
     * Describes a single exhibit within an exhibitiion.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType[]
     * $exhibitDetail
     */
    private $exhibitDetail = null;

    /**
     * Gets as foodAndBeverageIndicator
     *
     * When true, indicates one or more exhibits required food and beverage service.
     *
     * @return boolean
     */
    public function getFoodAndBeverageIndicator()
    {
        return $this->foodAndBeverageIndicator;
    }

    /**
     * Sets a new foodAndBeverageIndicator
     *
     * When true, indicates one or more exhibits required food and beverage service.
     *
     * @param boolean $foodAndBeverageIndicator
     * @return self
     */
    public function setFoodAndBeverageIndicator($foodAndBeverageIndicator)
    {
        $this->foodAndBeverageIndicator = $foodAndBeverageIndicator;

        return $this;
    }

    /**
     * Gets as foodAndBeverageBoothQuantity
     *
     * Number of booths requiring food and beverage service.
     *
     * @return integer
     */
    public function getFoodAndBeverageBoothQuantity()
    {
        return $this->foodAndBeverageBoothQuantity;
    }

    /**
     * Sets a new foodAndBeverageBoothQuantity
     *
     * Number of booths requiring food and beverage service.
     *
     * @param integer $foodAndBeverageBoothQuantity
     * @return self
     */
    public function setFoodAndBeverageBoothQuantity($foodAndBeverageBoothQuantity)
    {
        $this->foodAndBeverageBoothQuantity = $foodAndBeverageBoothQuantity;

        return $this;
    }

    /**
     * Adds as exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType
     * $exhibitDetail
     */
    public function addToExhibitDetail(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType $exhibitDetail
    ) {
        $this->exhibitDetail[] = $exhibitDetail;

        return $this;
    }

    /**
     * isset exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExhibitDetail($index)
    {
        return isset($this->exhibitDetail[$index]);
    }

    /**
     * unset exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExhibitDetail($index)
    {
        unset($this->exhibitDetail[$index]);
    }

    /**
     * Gets as exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType[]
     */
    public function getExhibitDetail()
    {
        return $this->exhibitDetail;
    }

    /**
     * Sets a new exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType[]
     * $exhibitDetail
     * @return self
     */
    public function setExhibitDetail(array $exhibitDetail)
    {
        $this->exhibitDetail = $exhibitDetail;

        return $this;
    }


}

