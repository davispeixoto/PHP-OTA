<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SailingType
 *
 * Specifies sailing information.
 * XSD Type: SailingType
 */
class SailingType extends SailingInfoType
{

    /**
     * Maximum cabin occupancy available on this specific sailing (ship).
     *
     * @property integer $maxCabinOccupancy
     */
    private $maxCabinOccupancy = null;

    /**
     * Specifies the different category locations available on the ship.
     *
     * @property string $categoryLocation
     */
    private $categoryLocation = null;

    /**
     * Identifies the availability of the particular sitting.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SailingType\DiningAType[] $dining
     */
    private $dining = null;

    /**
     * Specifies the mode of the transportation from the guest location to the cruise
     * port of departure.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuestTransportationType[]
     * $transportation
     */
    private $transportation = null;

    /**
     * Specifies cruise line registration procedures and other free text information.
     * The name attribute is used to define the type of information. Registration
     * procedures are messages that advise customers who are not registered with the
     * cruise line how to do so. Usually non registered customers cannot get access to
     * the cruise line inventory.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $information
     */
    private $information = null;

    /**
     * Gets as maxCabinOccupancy
     *
     * Maximum cabin occupancy available on this specific sailing (ship).
     *
     * @return integer
     */
    public function getMaxCabinOccupancy()
    {
        return $this->maxCabinOccupancy;
    }

    /**
     * Sets a new maxCabinOccupancy
     *
     * Maximum cabin occupancy available on this specific sailing (ship).
     *
     * @param integer $maxCabinOccupancy
     * @return self
     */
    public function setMaxCabinOccupancy($maxCabinOccupancy)
    {
        $this->maxCabinOccupancy = $maxCabinOccupancy;

        return $this;
    }

    /**
     * Gets as categoryLocation
     *
     * Specifies the different category locations available on the ship.
     *
     * @return string
     */
    public function getCategoryLocation()
    {
        return $this->categoryLocation;
    }

    /**
     * Sets a new categoryLocation
     *
     * Specifies the different category locations available on the ship.
     *
     * @param string $categoryLocation
     * @return self
     */
    public function setCategoryLocation($categoryLocation)
    {
        $this->categoryLocation = $categoryLocation;

        return $this;
    }

    /**
     * Adds as dining
     *
     * Identifies the availability of the particular sitting.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SailingType\DiningAType $dining
     */
    public function addToDining(\Davispeixoto\OpenTravelAlliance\SailingType\DiningAType $dining)
    {
        $this->dining[] = $dining;

        return $this;
    }

    /**
     * isset dining
     *
     * Identifies the availability of the particular sitting.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDining($index)
    {
        return isset($this->dining[$index]);
    }

    /**
     * unset dining
     *
     * Identifies the availability of the particular sitting.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDining($index)
    {
        unset($this->dining[$index]);
    }

    /**
     * Gets as dining
     *
     * Identifies the availability of the particular sitting.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingType\DiningAType[]
     */
    public function getDining()
    {
        return $this->dining;
    }

    /**
     * Sets a new dining
     *
     * Identifies the availability of the particular sitting.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingType\DiningAType[] $dining
     * @return self
     */
    public function setDining(array $dining)
    {
        $this->dining = $dining;

        return $this;
    }

    /**
     * Adds as transportation
     *
     * Specifies the mode of the transportation from the guest location to the cruise
     * port of departure.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GuestTransportationType $transportation
     */
    public function addToTransportation(\Davispeixoto\OpenTravelAlliance\GuestTransportationType $transportation)
    {
        $this->transportation[] = $transportation;

        return $this;
    }

    /**
     * isset transportation
     *
     * Specifies the mode of the transportation from the guest location to the cruise
     * port of departure.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransportation($index)
    {
        return isset($this->transportation[$index]);
    }

    /**
     * unset transportation
     *
     * Specifies the mode of the transportation from the guest location to the cruise
     * port of departure.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransportation($index)
    {
        unset($this->transportation[$index]);
    }

    /**
     * Gets as transportation
     *
     * Specifies the mode of the transportation from the guest location to the cruise
     * port of departure.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuestTransportationType[]
     */
    public function getTransportation()
    {
        return $this->transportation;
    }

    /**
     * Sets a new transportation
     *
     * Specifies the mode of the transportation from the guest location to the cruise
     * port of departure.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuestTransportationType[]
     * $transportation
     * @return self
     */
    public function setTransportation(array $transportation)
    {
        $this->transportation = $transportation;

        return $this;
    }

    /**
     * Adds as information
     *
     * Specifies cruise line registration procedures and other free text information.
     * The name attribute is used to define the type of information. Registration
     * procedures are messages that advise customers who are not registered with the
     * cruise line how to do so. Usually non registered customers cannot get access to
     * the cruise line inventory.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $information
     */
    public function addToInformation(\Davispeixoto\OpenTravelAlliance\ParagraphType $information)
    {
        $this->information[] = $information;

        return $this;
    }

    /**
     * isset information
     *
     * Specifies cruise line registration procedures and other free text information.
     * The name attribute is used to define the type of information. Registration
     * procedures are messages that advise customers who are not registered with the
     * cruise line how to do so. Usually non registered customers cannot get access to
     * the cruise line inventory.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInformation($index)
    {
        return isset($this->information[$index]);
    }

    /**
     * unset information
     *
     * Specifies cruise line registration procedures and other free text information.
     * The name attribute is used to define the type of information. Registration
     * procedures are messages that advise customers who are not registered with the
     * cruise line how to do so. Usually non registered customers cannot get access to
     * the cruise line inventory.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInformation($index)
    {
        unset($this->information[$index]);
    }

    /**
     * Gets as information
     *
     * Specifies cruise line registration procedures and other free text information.
     * The name attribute is used to define the type of information. Registration
     * procedures are messages that advise customers who are not registered with the
     * cruise line how to do so. Usually non registered customers cannot get access to
     * the cruise line inventory.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * Specifies cruise line registration procedures and other free text information.
     * The name attribute is used to define the type of information. Registration
     * procedures are messages that advise customers who are not registered with the
     * cruise line how to do so. Usually non registered customers cannot get access to
     * the cruise line inventory.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $information
     * @return self
     */
    public function setInformation(array $information)
    {
        $this->information = $information;

        return $this;
    }


}

