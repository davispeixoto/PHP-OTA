<?php

namespace Davispeixoto\OpenTravelAlliance\FareInfoType\FareInfoAType;

/**
 * Class representing DateAType
 */
class DateAType
{

    /**
     * The applicable date for the purpose specified in the Type attribute.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $date
     */
    private $date = null;

    /**
     * The type of fare date, including historic and last ticketing.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as date
     *
     * The applicable date for the purpose specified in the Type attribute.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The applicable date for the purpose specified in the Type attribute.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $date
     * @return self
     */
    public function setDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as type
     *
     * The type of fare date, including historic and last ticketing.
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
     * The type of fare date, including historic and last ticketing.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


}

