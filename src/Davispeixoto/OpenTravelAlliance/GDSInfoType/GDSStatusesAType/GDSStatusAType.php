<?php

namespace Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSStatusesAType;

/**
 * Class representing GDSStatusAType
 */
class GDSStatusAType
{

    /**
     * GDS Code.Example: AA
     *
     * @property string $code
     */
    private $code = null;

    /**
     * GDS name.Example: Amadeus
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Property Status. Refer to OpenTravel Code List Hotel Status Code (HST).Example:
     * Open
     *
     * @property string $hotelStatusCode
     */
    private $hotelStatusCode = null;

    /**
     * Gets as code
     *
     * GDS Code.Example: AA
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * GDS Code.Example: AA
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as name
     *
     * GDS name.Example: Amadeus
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
     * GDS name.Example: Amadeus
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
     * Gets as hotelStatusCode
     *
     * Property Status. Refer to OpenTravel Code List Hotel Status Code (HST).Example:
     * Open
     *
     * @return string
     */
    public function getHotelStatusCode()
    {
        return $this->hotelStatusCode;
    }

    /**
     * Sets a new hotelStatusCode
     *
     * Property Status. Refer to OpenTravel Code List Hotel Status Code (HST).Example:
     * Open
     *
     * @param string $hotelStatusCode
     * @return self
     */
    public function setHotelStatusCode($hotelStatusCode)
    {
        $this->hotelStatusCode = $hotelStatusCode;

        return $this;
    }


}

