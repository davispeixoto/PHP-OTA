<?php

namespace Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType;

/**
 * Class representing FoodAndBeverageAType
 */
class FoodAndBeverageAType
{

    /**
     * The number of settings required.
     *
     * @property integer $setForQuantity
     */
    private $setForQuantity = null;

    /**
     * The time or date and time of food and beverage service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $serviceTime
     */
    private $serviceTime = null;

    /**
     * The number of people served.
     *
     * @property integer $attendeeQuantity
     */
    private $attendeeQuantity = null;

    /**
     * The number of people guaranteed.
     *
     * @property integer $guaranteeQuantity
     */
    private $guaranteeQuantity = null;

    /**
     * The type of meal being served. Refer to OpenTravel Code list Available Meal
     * Category (AMC).
     *
     * @property string $mealTypeCode
     */
    private $mealTypeCode = null;

    /**
     * The type of food and beverage service being provided (e.g., buffet, plated).
     * Refer to OpenTravel Code list Event Charge (EVT).
     *
     * @property string $serviceTypeCode
     */
    private $serviceTypeCode = null;

    /**
     * A collection of comments associated with the food and beverage requirement.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * A collection of menus.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType[]
     * $menus
     */
    private $menus = null;

    /**
     * Gets as setForQuantity
     *
     * The number of settings required.
     *
     * @return integer
     */
    public function getSetForQuantity()
    {
        return $this->setForQuantity;
    }

    /**
     * Sets a new setForQuantity
     *
     * The number of settings required.
     *
     * @param integer $setForQuantity
     * @return self
     */
    public function setSetForQuantity($setForQuantity)
    {
        $this->setForQuantity = $setForQuantity;

        return $this;
    }

    /**
     * Gets as serviceTime
     *
     * The time or date and time of food and beverage service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getServiceTime()
    {
        return $this->serviceTime;
    }

    /**
     * Sets a new serviceTime
     *
     * The time or date and time of food and beverage service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $serviceTime
     * @return self
     */
    public function setServiceTime(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $serviceTime)
    {
        $this->serviceTime = $serviceTime;

        return $this;
    }

    /**
     * Gets as attendeeQuantity
     *
     * The number of people served.
     *
     * @return integer
     */
    public function getAttendeeQuantity()
    {
        return $this->attendeeQuantity;
    }

    /**
     * Sets a new attendeeQuantity
     *
     * The number of people served.
     *
     * @param integer $attendeeQuantity
     * @return self
     */
    public function setAttendeeQuantity($attendeeQuantity)
    {
        $this->attendeeQuantity = $attendeeQuantity;

        return $this;
    }

    /**
     * Gets as guaranteeQuantity
     *
     * The number of people guaranteed.
     *
     * @return integer
     */
    public function getGuaranteeQuantity()
    {
        return $this->guaranteeQuantity;
    }

    /**
     * Sets a new guaranteeQuantity
     *
     * The number of people guaranteed.
     *
     * @param integer $guaranteeQuantity
     * @return self
     */
    public function setGuaranteeQuantity($guaranteeQuantity)
    {
        $this->guaranteeQuantity = $guaranteeQuantity;

        return $this;
    }

    /**
     * Gets as mealTypeCode
     *
     * The type of meal being served. Refer to OpenTravel Code list Available Meal
     * Category (AMC).
     *
     * @return string
     */
    public function getMealTypeCode()
    {
        return $this->mealTypeCode;
    }

    /**
     * Sets a new mealTypeCode
     *
     * The type of meal being served. Refer to OpenTravel Code list Available Meal
     * Category (AMC).
     *
     * @param string $mealTypeCode
     * @return self
     */
    public function setMealTypeCode($mealTypeCode)
    {
        $this->mealTypeCode = $mealTypeCode;

        return $this;
    }

    /**
     * Gets as serviceTypeCode
     *
     * The type of food and beverage service being provided (e.g., buffet, plated).
     * Refer to OpenTravel Code list Event Charge (EVT).
     *
     * @return string
     */
    public function getServiceTypeCode()
    {
        return $this->serviceTypeCode;
    }

    /**
     * Sets a new serviceTypeCode
     *
     * The type of food and beverage service being provided (e.g., buffet, plated).
     * Refer to OpenTravel Code list Event Charge (EVT).
     *
     * @param string $serviceTypeCode
     * @return self
     */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->serviceTypeCode = $serviceTypeCode;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments associated with the food and beverage requirement.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments associated with the food and beverage requirement.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of comments associated with the food and beverage requirement.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of comments associated with the food and beverage requirement.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments associated with the food and beverage requirement.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Adds as menu
     *
     * A collection of menus.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType
     * $menu
     */
    public function addToMenus(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType $menu
    ) {
        $this->menus[] = $menu;

        return $this;
    }

    /**
     * isset menus
     *
     * A collection of menus.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMenus($index)
    {
        return isset($this->menus[$index]);
    }

    /**
     * unset menus
     *
     * A collection of menus.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMenus($index)
    {
        unset($this->menus[$index]);
    }

    /**
     * Gets as menus
     *
     * A collection of menus.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType[]
     */
    public function getMenus()
    {
        return $this->menus;
    }

    /**
     * Sets a new menus
     *
     * A collection of menus.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType[]
     * $menus
     * @return self
     */
    public function setMenus(array $menus)
    {
        $this->menus = $menus;

        return $this;
    }


}

