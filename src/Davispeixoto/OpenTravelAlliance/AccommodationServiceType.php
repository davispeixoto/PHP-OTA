<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AccommodationServiceType
 *
 * Types of accommodations and services available for passenger purchase on a
 * train.
 * XSD Type: AccommodationServiceType
 */
class AccommodationServiceType
{

    /**
     * Detail about a space or place that is occupied by a passenger, such as seat,
     * berth, and compartment, including specific information such as seat number, seat
     * position, compartment number, seat direction, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccommodationServiceType\AccommodationDetailAType
     * $accommodationDetail
     */
    private $accommodationDetail = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\AncillaryService[] $ancillaryService
     */
    private $ancillaryService = null;

    /**
     * Gets as accommodationDetail
     *
     * Detail about a space or place that is occupied by a passenger, such as seat,
     * berth, and compartment, including specific information such as seat number, seat
     * position, compartment number, seat direction, etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccommodationServiceType\AccommodationDetailAType
     */
    public function getAccommodationDetail()
    {
        return $this->accommodationDetail;
    }

    /**
     * Sets a new accommodationDetail
     *
     * Detail about a space or place that is occupied by a passenger, such as seat,
     * berth, and compartment, including specific information such as seat number, seat
     * position, compartment number, seat direction, etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationServiceType\AccommodationDetailAType
     * $accommodationDetail
     * @return self
     */
    public function setAccommodationDetail(
        \Davispeixoto\OpenTravelAlliance\AccommodationServiceType\AccommodationDetailAType $accommodationDetail
    ) {
        $this->accommodationDetail = $accommodationDetail;

        return $this;
    }

    /**
     * Adds as ancillaryService
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AncillaryService $ancillaryService
     */
    public function addToAncillaryService(\Davispeixoto\OpenTravelAlliance\AncillaryService $ancillaryService)
    {
        $this->ancillaryService[] = $ancillaryService;

        return $this;
    }

    /**
     * isset ancillaryService
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAncillaryService($index)
    {
        return isset($this->ancillaryService[$index]);
    }

    /**
     * unset ancillaryService
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAncillaryService($index)
    {
        unset($this->ancillaryService[$index]);
    }

    /**
     * Gets as ancillaryService
     *
     * @return \Davispeixoto\OpenTravelAlliance\AncillaryService[]
     */
    public function getAncillaryService()
    {
        return $this->ancillaryService;
    }

    /**
     * Sets a new ancillaryService
     *
     * @param \Davispeixoto\OpenTravelAlliance\AncillaryService[] $ancillaryService
     * @return self
     */
    public function setAncillaryService(array $ancillaryService)
    {
        $this->ancillaryService = $ancillaryService;

        return $this;
    }


}

