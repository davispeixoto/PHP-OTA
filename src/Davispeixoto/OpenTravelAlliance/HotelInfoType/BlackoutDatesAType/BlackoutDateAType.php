<?php

namespace Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType;

use Davispeixoto\OpenTravelAlliance\DateTimeSpanType;

/**
 * Class representing BlackoutDateAType
 */
class BlackoutDateAType extends DateTimeSpanType
{

    /**
     * A descriptive name that identifies the reason for the blackout, e.g : 2012
     * Olympic Games.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * A description of the Blackout Date, which may be multilingual.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType\BlackoutDateAType\DescriptionAType
     * $description
     */
    private $description = null;

    /**
     * Gets as name
     *
     * A descriptive name that identifies the reason for the blackout, e.g : 2012
     * Olympic Games.
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
     * A descriptive name that identifies the reason for the blackout, e.g : 2012
     * Olympic Games.
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
     * Gets as description
     *
     * A description of the Blackout Date, which may be multilingual.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType\BlackoutDateAType\DescriptionAType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the Blackout Date, which may be multilingual.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType\BlackoutDateAType\DescriptionAType
     * $description
     * @return self
     */
    public function setDescription(
        \Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType\BlackoutDateAType\DescriptionAType $description
    ) {
        $this->description = $description;

        return $this;
    }


}

