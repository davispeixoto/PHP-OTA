<?php

namespace Davispeixoto\OpenTravelAlliance\RoomProfileType;

/**
 * Class representing PassengerRPHsAType
 */
class PassengerRPHsAType
{

    /**
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @property string[] $listOfPassengerRPH
     */
    private $listOfPassengerRPH = null;

    /**
     * Adds as listOfPassengerRPH
     *
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @return self
     * @param string $listOfPassengerRPH
     */
    public function addToListOfPassengerRPH($listOfPassengerRPH)
    {
        $this->listOfPassengerRPH[] = $listOfPassengerRPH;

        return $this;
    }

    /**
     * isset listOfPassengerRPH
     *
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListOfPassengerRPH($index)
    {
        return isset($this->listOfPassengerRPH[$index]);
    }

    /**
     * unset listOfPassengerRPH
     *
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListOfPassengerRPH($index)
    {
        unset($this->listOfPassengerRPH[$index]);
    }

    /**
     * Gets as listOfPassengerRPH
     *
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @return string[]
     */
    public function getListOfPassengerRPH()
    {
        return $this->listOfPassengerRPH;
    }

    /**
     * Sets a new listOfPassengerRPH
     *
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @param string $listOfPassengerRPH
     * @return self
     */
    public function setListOfPassengerRPH(array $listOfPassengerRPH)
    {
        $this->listOfPassengerRPH = $listOfPassengerRPH;

        return $this;
    }


}

