<?php

namespace Davispeixoto\OpenTravelAlliance\DynamicPkgType;

/**
 * Class representing ComponentsAType
 */
class ComponentsAType
{

    /**
     * A hotel room stay that is part of the dynamic package.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\HotelComponentAType[]
     * $hotelComponent
     */
    private $hotelComponent = null;

    /**
     * An air trip that is part of the dynamic package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirComponentType[] $airComponent
     */
    private $airComponent = null;

    /**
     * An additional element that is part of the dynamic package.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\PackageOptionComponentAType[]
     * $packageOptionComponent
     */
    private $packageOptionComponent = null;

    /**
     * A rental car that is part of the dynamic package.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\CarComponentAType[]
     * $carComponent
     */
    private $carComponent = null;

    /**
     * Adds as hotelComponent
     *
     * A hotel room stay that is part of the dynamic package.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\HotelComponentAType
     * $hotelComponent
     */
    public function addToHotelComponent(
        \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\HotelComponentAType $hotelComponent
    ) {
        $this->hotelComponent[] = $hotelComponent;

        return $this;
    }

    /**
     * isset hotelComponent
     *
     * A hotel room stay that is part of the dynamic package.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelComponent($index)
    {
        return isset($this->hotelComponent[$index]);
    }

    /**
     * unset hotelComponent
     *
     * A hotel room stay that is part of the dynamic package.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelComponent($index)
    {
        unset($this->hotelComponent[$index]);
    }

    /**
     * Gets as hotelComponent
     *
     * A hotel room stay that is part of the dynamic package.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\HotelComponentAType[]
     */
    public function getHotelComponent()
    {
        return $this->hotelComponent;
    }

    /**
     * Sets a new hotelComponent
     *
     * A hotel room stay that is part of the dynamic package.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\HotelComponentAType[]
     * $hotelComponent
     * @return self
     */
    public function setHotelComponent(array $hotelComponent)
    {
        $this->hotelComponent = $hotelComponent;

        return $this;
    }

    /**
     * Adds as airComponent
     *
     * An air trip that is part of the dynamic package.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirComponentType $airComponent
     */
    public function addToAirComponent(\Davispeixoto\OpenTravelAlliance\AirComponentType $airComponent)
    {
        $this->airComponent[] = $airComponent;

        return $this;
    }

    /**
     * isset airComponent
     *
     * An air trip that is part of the dynamic package.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirComponent($index)
    {
        return isset($this->airComponent[$index]);
    }

    /**
     * unset airComponent
     *
     * An air trip that is part of the dynamic package.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirComponent($index)
    {
        unset($this->airComponent[$index]);
    }

    /**
     * Gets as airComponent
     *
     * An air trip that is part of the dynamic package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirComponentType[]
     */
    public function getAirComponent()
    {
        return $this->airComponent;
    }

    /**
     * Sets a new airComponent
     *
     * An air trip that is part of the dynamic package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirComponentType[] $airComponent
     * @return self
     */
    public function setAirComponent(array $airComponent)
    {
        $this->airComponent = $airComponent;

        return $this;
    }

    /**
     * Adds as packageOptionComponent
     *
     * An additional element that is part of the dynamic package.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\PackageOptionComponentAType
     * $packageOptionComponent
     */
    public function addToPackageOptionComponent(
        \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\PackageOptionComponentAType $packageOptionComponent
    ) {
        $this->packageOptionComponent[] = $packageOptionComponent;

        return $this;
    }

    /**
     * isset packageOptionComponent
     *
     * An additional element that is part of the dynamic package.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPackageOptionComponent($index)
    {
        return isset($this->packageOptionComponent[$index]);
    }

    /**
     * unset packageOptionComponent
     *
     * An additional element that is part of the dynamic package.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPackageOptionComponent($index)
    {
        unset($this->packageOptionComponent[$index]);
    }

    /**
     * Gets as packageOptionComponent
     *
     * An additional element that is part of the dynamic package.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\PackageOptionComponentAType[]
     */
    public function getPackageOptionComponent()
    {
        return $this->packageOptionComponent;
    }

    /**
     * Sets a new packageOptionComponent
     *
     * An additional element that is part of the dynamic package.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\PackageOptionComponentAType[]
     * $packageOptionComponent
     * @return self
     */
    public function setPackageOptionComponent(array $packageOptionComponent)
    {
        $this->packageOptionComponent = $packageOptionComponent;

        return $this;
    }

    /**
     * Adds as carComponent
     *
     * A rental car that is part of the dynamic package.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\CarComponentAType
     * $carComponent
     */
    public function addToCarComponent(
        \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\CarComponentAType $carComponent
    ) {
        $this->carComponent[] = $carComponent;

        return $this;
    }

    /**
     * isset carComponent
     *
     * A rental car that is part of the dynamic package.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCarComponent($index)
    {
        return isset($this->carComponent[$index]);
    }

    /**
     * unset carComponent
     *
     * A rental car that is part of the dynamic package.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCarComponent($index)
    {
        unset($this->carComponent[$index]);
    }

    /**
     * Gets as carComponent
     *
     * A rental car that is part of the dynamic package.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\CarComponentAType[]
     */
    public function getCarComponent()
    {
        return $this->carComponent;
    }

    /**
     * Sets a new carComponent
     *
     * A rental car that is part of the dynamic package.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\CarComponentAType[]
     * $carComponent
     * @return self
     */
    public function setCarComponent(array $carComponent)
    {
        $this->carComponent = $carComponent;

        return $this;
    }


}

