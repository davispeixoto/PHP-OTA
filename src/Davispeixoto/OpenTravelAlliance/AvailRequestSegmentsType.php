<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AvailRequestSegmentsType
 *
 * A collection of AvailRequestSegment. Each segment includes a collection of
 * criteria that requests a bookable entity, which may include designated rate
 * plans, room types, amenities or services, and the request can be used for guest
 * rooms or other inventory items for which availability is sought. Each segment
 * would be presumed to have a unique date range for each request.
 * XSD Type: AvailRequestSegmentsType
 */
class AvailRequestSegmentsType
{

    /**
     * To accommodate the ability to perform multiple requests within one message, the
     * availability request contains the repeating element, AvailRequestSegment. Each
     * segment includes a collection of criteria that requests a bookable entity, which
     * may include designated rate plans, room types, amenities or services, and the
     * request can be used for guest rooms or other inventory items for which
     * availability is sought. Each segment would be presumed to have a unique date
     * range for each request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AvailRequestSegmentsType\AvailRequestSegmentAType[]
     * $availRequestSegment
     */
    private $availRequestSegment = null;

    /**
     * Adds as availRequestSegment
     *
     * To accommodate the ability to perform multiple requests within one message, the
     * availability request contains the repeating element, AvailRequestSegment. Each
     * segment includes a collection of criteria that requests a bookable entity, which
     * may include designated rate plans, room types, amenities or services, and the
     * request can be used for guest rooms or other inventory items for which
     * availability is sought. Each segment would be presumed to have a unique date
     * range for each request.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AvailRequestSegmentsType\AvailRequestSegmentAType
     * $availRequestSegment
     */
    public function addToAvailRequestSegment(
        \Davispeixoto\OpenTravelAlliance\AvailRequestSegmentsType\AvailRequestSegmentAType $availRequestSegment
    ) {
        $this->availRequestSegment[] = $availRequestSegment;

        return $this;
    }

    /**
     * isset availRequestSegment
     *
     * To accommodate the ability to perform multiple requests within one message, the
     * availability request contains the repeating element, AvailRequestSegment. Each
     * segment includes a collection of criteria that requests a bookable entity, which
     * may include designated rate plans, room types, amenities or services, and the
     * request can be used for guest rooms or other inventory items for which
     * availability is sought. Each segment would be presumed to have a unique date
     * range for each request.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAvailRequestSegment($index)
    {
        return isset($this->availRequestSegment[$index]);
    }

    /**
     * unset availRequestSegment
     *
     * To accommodate the ability to perform multiple requests within one message, the
     * availability request contains the repeating element, AvailRequestSegment. Each
     * segment includes a collection of criteria that requests a bookable entity, which
     * may include designated rate plans, room types, amenities or services, and the
     * request can be used for guest rooms or other inventory items for which
     * availability is sought. Each segment would be presumed to have a unique date
     * range for each request.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAvailRequestSegment($index)
    {
        unset($this->availRequestSegment[$index]);
    }

    /**
     * Gets as availRequestSegment
     *
     * To accommodate the ability to perform multiple requests within one message, the
     * availability request contains the repeating element, AvailRequestSegment. Each
     * segment includes a collection of criteria that requests a bookable entity, which
     * may include designated rate plans, room types, amenities or services, and the
     * request can be used for guest rooms or other inventory items for which
     * availability is sought. Each segment would be presumed to have a unique date
     * range for each request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AvailRequestSegmentsType\AvailRequestSegmentAType[]
     */
    public function getAvailRequestSegment()
    {
        return $this->availRequestSegment;
    }

    /**
     * Sets a new availRequestSegment
     *
     * To accommodate the ability to perform multiple requests within one message, the
     * availability request contains the repeating element, AvailRequestSegment. Each
     * segment includes a collection of criteria that requests a bookable entity, which
     * may include designated rate plans, room types, amenities or services, and the
     * request can be used for guest rooms or other inventory items for which
     * availability is sought. Each segment would be presumed to have a unique date
     * range for each request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AvailRequestSegmentsType\AvailRequestSegmentAType[]
     * $availRequestSegment
     * @return self
     */
    public function setAvailRequestSegment(array $availRequestSegment)
    {
        $this->availRequestSegment = $availRequestSegment;

        return $this;
    }


}

