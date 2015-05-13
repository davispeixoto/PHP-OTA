<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ\RailScheduleQueryAType;

/**
 * Class representing RailPrefsAType
 */
class RailPrefsAType
{

    /**
     * The class of inventory controlled services available.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ\RailScheduleQueryAType\RailPrefsAType\ClassCodesAType
     * $classCodes
     */
    private $classCodes = null;

    /**
     * Type of accommodation including classes of seat, berth, compartment on a train
     * that's occupied by a rail passenger.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ\RailScheduleQueryAType\RailPrefsAType\AccommodationAType
     * $accommodation
     */
    private $accommodation = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\AncillaryService $ancillaryService
     */
    private $ancillaryService = null;

    /**
     * Gets as classCodes
     *
     * The class of inventory controlled services available.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ\RailScheduleQueryAType\RailPrefsAType\ClassCodesAType
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
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ\RailScheduleQueryAType\RailPrefsAType\ClassCodesAType
     * $classCodes
     * @return self
     */
    public function setClassCodes(
        \Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ\RailScheduleQueryAType\RailPrefsAType\ClassCodesAType $classCodes
    ) {
        $this->classCodes = $classCodes;

        return $this;
    }

    /**
     * Gets as accommodation
     *
     * Type of accommodation including classes of seat, berth, compartment on a train
     * that's occupied by a rail passenger.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ\RailScheduleQueryAType\RailPrefsAType\AccommodationAType
     */
    public function getAccommodation()
    {
        return $this->accommodation;
    }

    /**
     * Sets a new accommodation
     *
     * Type of accommodation including classes of seat, berth, compartment on a train
     * that's occupied by a rail passenger.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ\RailScheduleQueryAType\RailPrefsAType\AccommodationAType
     * $accommodation
     * @return self
     */
    public function setAccommodation(
        \Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ\RailScheduleQueryAType\RailPrefsAType\AccommodationAType $accommodation
    ) {
        $this->accommodation = $accommodation;

        return $this;
    }

    /**
     * Gets as ancillaryService
     *
     * @return \Davispeixoto\OpenTravelAlliance\AncillaryService
     */
    public function getAncillaryService()
    {
        return $this->ancillaryService;
    }

    /**
     * Sets a new ancillaryService
     *
     * @param \Davispeixoto\OpenTravelAlliance\AncillaryService $ancillaryService
     * @return self
     */
    public function setAncillaryService(\Davispeixoto\OpenTravelAlliance\AncillaryService $ancillaryService)
    {
        $this->ancillaryService = $ancillaryService;

        return $this;
    }


}

