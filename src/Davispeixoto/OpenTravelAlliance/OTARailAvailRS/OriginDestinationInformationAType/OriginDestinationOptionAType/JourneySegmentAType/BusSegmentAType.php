<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType;

use Davispeixoto\OpenTravelAlliance\BusSegmentType;

/**
 * Class representing BusSegmentAType
 */
class BusSegmentAType extends BusSegmentType
{

    /**
     * The class of inventory controlled services available.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType\ClassCodesAType[]
     * $classCodes
     */
    private $classCodes = null;

    /**
     * Remarks about the bus segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WarningType[] $remarks
     */
    private $remarks = null;

    /**
     * Adds as classCodes
     *
     * The class of inventory controlled services available.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType\ClassCodesAType
     * $classCodes
     */
    public function addToClassCodes(
        \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType\ClassCodesAType $classCodes
    ) {
        $this->classCodes[] = $classCodes;

        return $this;
    }

    /**
     * isset classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetClassCodes($index)
    {
        return isset($this->classCodes[$index]);
    }

    /**
     * unset classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetClassCodes($index)
    {
        unset($this->classCodes[$index]);
    }

    /**
     * Gets as classCodes
     *
     * The class of inventory controlled services available.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType\ClassCodesAType[]
     */
    public function getClassCodes()
    {
        return $this->classCodes;
    }

    /**
     * Sets a new classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType\ClassCodesAType[]
     * $classCodes
     * @return self
     */
    public function setClassCodes(array $classCodes)
    {
        $this->classCodes = $classCodes;

        return $this;
    }

    /**
     * Adds as remark
     *
     * Remarks about the bus segment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\WarningType $remark
     */
    public function addToRemarks(\Davispeixoto\OpenTravelAlliance\WarningType $remark)
    {
        $this->remarks[] = $remark;

        return $this;
    }

    /**
     * isset remarks
     *
     * Remarks about the bus segment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * Remarks about the bus segment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * Remarks about the bus segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WarningType[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * Remarks about the bus segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WarningType[] $remarks
     * @return self
     */
    public function setRemarks(array $remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }


}

