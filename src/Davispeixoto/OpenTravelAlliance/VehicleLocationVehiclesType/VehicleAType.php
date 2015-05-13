<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationVehiclesType;

use Davispeixoto\OpenTravelAlliance\VehicleType;

/**
 * Class representing VehicleAType
 */
class VehicleAType extends VehicleType
{

    /**
     * If true, this car type may be confirmed. If false, it may not be confirmed.
     *
     * @property boolean $isConfirmableInd
     */
    private $isConfirmableInd = null;

    /**
     * To specify whether mileage information is miles or kilometers.
     *
     * @property string $distanceUnit
     */
    private $distanceUnit = null;

    /**
     * To specify the number of miles/kilometers per gallon/litre of gas.
     *
     * @property integer $distancePerFuelUnit
     */
    private $distancePerFuelUnit = null;

    /**
     * Free text information for this vehicle type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType[] $text
     */
    private $text = null;

    /**
     * Gets as isConfirmableInd
     *
     * If true, this car type may be confirmed. If false, it may not be confirmed.
     *
     * @return boolean
     */
    public function getIsConfirmableInd()
    {
        return $this->isConfirmableInd;
    }

    /**
     * Sets a new isConfirmableInd
     *
     * If true, this car type may be confirmed. If false, it may not be confirmed.
     *
     * @param boolean $isConfirmableInd
     * @return self
     */
    public function setIsConfirmableInd($isConfirmableInd)
    {
        $this->isConfirmableInd = $isConfirmableInd;

        return $this;
    }

    /**
     * Gets as distanceUnit
     *
     * To specify whether mileage information is miles or kilometers.
     *
     * @return string
     */
    public function getDistanceUnit()
    {
        return $this->distanceUnit;
    }

    /**
     * Sets a new distanceUnit
     *
     * To specify whether mileage information is miles or kilometers.
     *
     * @param string $distanceUnit
     * @return self
     */
    public function setDistanceUnit($distanceUnit)
    {
        $this->distanceUnit = $distanceUnit;

        return $this;
    }

    /**
     * Gets as distancePerFuelUnit
     *
     * To specify the number of miles/kilometers per gallon/litre of gas.
     *
     * @return integer
     */
    public function getDistancePerFuelUnit()
    {
        return $this->distancePerFuelUnit;
    }

    /**
     * Sets a new distancePerFuelUnit
     *
     * To specify the number of miles/kilometers per gallon/litre of gas.
     *
     * @param integer $distancePerFuelUnit
     * @return self
     */
    public function setDistancePerFuelUnit($distancePerFuelUnit)
    {
        $this->distancePerFuelUnit = $distancePerFuelUnit;

        return $this;
    }

    /**
     * Adds as text
     *
     * Free text information for this vehicle type.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $text
     */
    public function addToText(\Davispeixoto\OpenTravelAlliance\FormattedTextType $text)
    {
        $this->text[] = $text;

        return $this;
    }

    /**
     * isset text
     *
     * Free text information for this vehicle type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetText($index)
    {
        return isset($this->text[$index]);
    }

    /**
     * unset text
     *
     * Free text information for this vehicle type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetText($index)
    {
        unset($this->text[$index]);
    }

    /**
     * Gets as text
     *
     * Free text information for this vehicle type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType[]
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Free text information for this vehicle type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType[] $text
     * @return self
     */
    public function setText(array $text)
    {
        $this->text = $text;

        return $this;
    }


}

