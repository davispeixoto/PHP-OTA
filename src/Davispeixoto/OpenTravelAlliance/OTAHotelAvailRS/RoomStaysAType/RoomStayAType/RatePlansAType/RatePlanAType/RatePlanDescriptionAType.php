<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType;

/**
 * Class representing RatePlanDescriptionAType
 */
class RatePlanDescriptionAType
{

    /**
     * The Name MAY be used to identify the type of information sent in the Text
     * element.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The Text element MUST provide textual information regarding the rate plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType\TextAType
     * $text
     */
    private $text = null;

    /**
     * Gets as name
     *
     * The Name MAY be used to identify the type of information sent in the Text
     * element.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The Name MAY be used to identify the type of information sent in the Text
     * element.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as text
     *
     * The Text element MUST provide textual information regarding the rate plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType\TextAType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * The Text element MUST provide textual information regarding the rate plan.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType\TextAType
     * $text
     * @return self
     */
    public function setText(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType\TextAType $text
    ) {
        $this->text = $text;

        return $this;
    }


}

