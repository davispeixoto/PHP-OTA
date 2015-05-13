<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PkgCautionType
 *
 * Provides information regarding a package component which could affect a
 * customer's decision to book.
 * XSD Type: PkgCautionType
 */
class PkgCautionType extends FormattedTextTextType
{

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * Identifies the type of information e.g. Resort, Flight, Accommodation etc..
     *
     * @property string $type
     */
    private $type = null;

    /**
     * The supplier's unique identification code for a caution.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Pointers to individual InventoryItem elements to which this Caution applies.
     *
     * @property string[] $listOfItineraryItemRPH
     */
    private $listOfItineraryItemRPH = null;

    /**
     * Pointers to individual Extra elements to which this Caution applies.
     *
     * @property string[] $listOfExtraRPH
     */
    private $listOfExtraRPH = null;

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as type
     *
     * Identifies the type of information e.g. Resort, Flight, Accommodation etc..
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
     * Identifies the type of information e.g. Resort, Flight, Accommodation etc..
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
     * Gets as iD
     *
     * The supplier's unique identification code for a caution.
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
     * The supplier's unique identification code for a caution.
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
     * Adds as listOfItineraryItemRPH
     *
     * Pointers to individual InventoryItem elements to which this Caution applies.
     *
     * @return self
     * @param string $listOfItineraryItemRPH
     */
    public function addToListOfItineraryItemRPH($listOfItineraryItemRPH)
    {
        $this->listOfItineraryItemRPH[] = $listOfItineraryItemRPH;

        return $this;
    }

    /**
     * isset listOfItineraryItemRPH
     *
     * Pointers to individual InventoryItem elements to which this Caution applies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListOfItineraryItemRPH($index)
    {
        return isset($this->listOfItineraryItemRPH[$index]);
    }

    /**
     * unset listOfItineraryItemRPH
     *
     * Pointers to individual InventoryItem elements to which this Caution applies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListOfItineraryItemRPH($index)
    {
        unset($this->listOfItineraryItemRPH[$index]);
    }

    /**
     * Gets as listOfItineraryItemRPH
     *
     * Pointers to individual InventoryItem elements to which this Caution applies.
     *
     * @return string[]
     */
    public function getListOfItineraryItemRPH()
    {
        return $this->listOfItineraryItemRPH;
    }

    /**
     * Sets a new listOfItineraryItemRPH
     *
     * Pointers to individual InventoryItem elements to which this Caution applies.
     *
     * @param string $listOfItineraryItemRPH
     * @return self
     */
    public function setListOfItineraryItemRPH(array $listOfItineraryItemRPH)
    {
        $this->listOfItineraryItemRPH = $listOfItineraryItemRPH;

        return $this;
    }

    /**
     * Adds as listOfExtraRPH
     *
     * Pointers to individual Extra elements to which this Caution applies.
     *
     * @return self
     * @param string $listOfExtraRPH
     */
    public function addToListOfExtraRPH($listOfExtraRPH)
    {
        $this->listOfExtraRPH[] = $listOfExtraRPH;

        return $this;
    }

    /**
     * isset listOfExtraRPH
     *
     * Pointers to individual Extra elements to which this Caution applies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListOfExtraRPH($index)
    {
        return isset($this->listOfExtraRPH[$index]);
    }

    /**
     * unset listOfExtraRPH
     *
     * Pointers to individual Extra elements to which this Caution applies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListOfExtraRPH($index)
    {
        unset($this->listOfExtraRPH[$index]);
    }

    /**
     * Gets as listOfExtraRPH
     *
     * Pointers to individual Extra elements to which this Caution applies.
     *
     * @return string[]
     */
    public function getListOfExtraRPH()
    {
        return $this->listOfExtraRPH;
    }

    /**
     * Sets a new listOfExtraRPH
     *
     * Pointers to individual Extra elements to which this Caution applies.
     *
     * @param string $listOfExtraRPH
     * @return self
     */
    public function setListOfExtraRPH(array $listOfExtraRPH)
    {
        $this->listOfExtraRPH = $listOfExtraRPH;

        return $this;
    }


}

