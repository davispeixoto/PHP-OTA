<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType;

/**
 * Class representing MenusAType
 */
class MenusAType
{

    /**
     * Menu details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType[]
     * $menu
     */
    private $menu = null;

    /**
     * Adds as menu
     *
     * Menu details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType
     * $menu
     */
    public function addToMenu(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType $menu
    ) {
        $this->menu[] = $menu;

        return $this;
    }

    /**
     * isset menu
     *
     * Menu details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMenu($index)
    {
        return isset($this->menu[$index]);
    }

    /**
     * unset menu
     *
     * Menu details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMenu($index)
    {
        unset($this->menu[$index]);
    }

    /**
     * Gets as menu
     *
     * Menu details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType[]
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Sets a new menu
     *
     * Menu details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType[]
     * $menu
     * @return self
     */
    public function setMenu(array $menu)
    {
        $this->menu = $menu;

        return $this;
    }


}

