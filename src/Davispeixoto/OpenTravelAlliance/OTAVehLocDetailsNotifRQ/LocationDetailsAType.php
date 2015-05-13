<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ;

/**
 * Class representing LocationDetailsAType
 */
class LocationDetailsAType
{

    /**
     * The count of car locations being sent in this message.
     *
     * @property integer $locationQuantity
     */
    private $locationQuantity = null;

    /**
     * All the detail information for a specific car rental location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType[]
     * $locationDetail
     */
    private $locationDetail = null;

    /**
     * Gets as locationQuantity
     *
     * The count of car locations being sent in this message.
     *
     * @return integer
     */
    public function getLocationQuantity()
    {
        return $this->locationQuantity;
    }

    /**
     * Sets a new locationQuantity
     *
     * The count of car locations being sent in this message.
     *
     * @param integer $locationQuantity
     * @return self
     */
    public function setLocationQuantity($locationQuantity)
    {
        $this->locationQuantity = $locationQuantity;

        return $this;
    }

    /**
     * Adds as locationDetail
     *
     * All the detail information for a specific car rental location.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType
     * $locationDetail
     */
    public function addToLocationDetail(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType $locationDetail
    ) {
        $this->locationDetail[] = $locationDetail;

        return $this;
    }

    /**
     * isset locationDetail
     *
     * All the detail information for a specific car rental location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocationDetail($index)
    {
        return isset($this->locationDetail[$index]);
    }

    /**
     * unset locationDetail
     *
     * All the detail information for a specific car rental location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocationDetail($index)
    {
        unset($this->locationDetail[$index]);
    }

    /**
     * Gets as locationDetail
     *
     * All the detail information for a specific car rental location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType[]
     */
    public function getLocationDetail()
    {
        return $this->locationDetail;
    }

    /**
     * Sets a new locationDetail
     *
     * All the detail information for a specific car rental location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType[]
     * $locationDetail
     * @return self
     */
    public function setLocationDetail(array $locationDetail)
    {
        $this->locationDetail = $locationDetail;

        return $this;
    }


}

