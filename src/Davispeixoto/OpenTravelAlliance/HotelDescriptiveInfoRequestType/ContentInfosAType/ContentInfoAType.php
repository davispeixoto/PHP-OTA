<?php

namespace Davispeixoto\OpenTravelAlliance\HotelDescriptiveInfoRequestType\ContentInfosAType;

/**
 * Class representing ContentInfoAType
 */
class ContentInfoAType
{

    /**
     * Provides the code identifying the item.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The name of an item.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as code
     *
     * Provides the code identifying the item.
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
     * Provides the code identifying the item.
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
     * The name of an item.
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
     * The name of an item.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


}

