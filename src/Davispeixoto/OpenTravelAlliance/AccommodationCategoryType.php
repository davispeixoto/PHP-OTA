<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AccommodationCategoryType
 *
 * Accommodations and services offered on a train.
 * XSD Type: AccommodationCategoryType
 */
class AccommodationCategoryType
{

    /**
     * Type of accommodation, including classes of seat, berth and compartment on a
     * train that's occupied by a rail passenger.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccommodationCategoryType\AccommodationAType[]
     * $accommodation
     */
    private $accommodation = null;

    /**
     * Any service or product offered in conjunction with a basic rail accommodation,
     * such as vehicle transport, pet transport and restaurant car service. Refer to
     * OpenTravel Code List Rail Ancillary Service (RAN).
     *
     * @property \Davispeixoto\OpenTravelAlliance\AncillaryService[] $ancillaryService
     */
    private $ancillaryService = null;

    /**
     * Adds as accommodation
     *
     * Type of accommodation, including classes of seat, berth and compartment on a
     * train that's occupied by a rail passenger.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationCategoryType\AccommodationAType
     * $accommodation
     */
    public function addToAccommodation(
        \Davispeixoto\OpenTravelAlliance\AccommodationCategoryType\AccommodationAType $accommodation
    ) {
        $this->accommodation[] = $accommodation;

        return $this;
    }

    /**
     * isset accommodation
     *
     * Type of accommodation, including classes of seat, berth and compartment on a
     * train that's occupied by a rail passenger.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAccommodation($index)
    {
        return isset($this->accommodation[$index]);
    }

    /**
     * unset accommodation
     *
     * Type of accommodation, including classes of seat, berth and compartment on a
     * train that's occupied by a rail passenger.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAccommodation($index)
    {
        unset($this->accommodation[$index]);
    }

    /**
     * Gets as accommodation
     *
     * Type of accommodation, including classes of seat, berth and compartment on a
     * train that's occupied by a rail passenger.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccommodationCategoryType\AccommodationAType[]
     */
    public function getAccommodation()
    {
        return $this->accommodation;
    }

    /**
     * Sets a new accommodation
     *
     * Type of accommodation, including classes of seat, berth and compartment on a
     * train that's occupied by a rail passenger.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationCategoryType\AccommodationAType[]
     * $accommodation
     * @return self
     */
    public function setAccommodation(array $accommodation)
    {
        $this->accommodation = $accommodation;

        return $this;
    }

    /**
     * Adds as ancillaryService
     *
     * Any service or product offered in conjunction with a basic rail accommodation,
     * such as vehicle transport, pet transport and restaurant car service. Refer to
     * OpenTravel Code List Rail Ancillary Service (RAN).
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
     * Any service or product offered in conjunction with a basic rail accommodation,
     * such as vehicle transport, pet transport and restaurant car service. Refer to
     * OpenTravel Code List Rail Ancillary Service (RAN).
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
     * Any service or product offered in conjunction with a basic rail accommodation,
     * such as vehicle transport, pet transport and restaurant car service. Refer to
     * OpenTravel Code List Rail Ancillary Service (RAN).
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
     * Any service or product offered in conjunction with a basic rail accommodation,
     * such as vehicle transport, pet transport and restaurant car service. Refer to
     * OpenTravel Code List Rail Ancillary Service (RAN).
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
     * Any service or product offered in conjunction with a basic rail accommodation,
     * such as vehicle transport, pet transport and restaurant car service. Refer to
     * OpenTravel Code List Rail Ancillary Service (RAN).
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

