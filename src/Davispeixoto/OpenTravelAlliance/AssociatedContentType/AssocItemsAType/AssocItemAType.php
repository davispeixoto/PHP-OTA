<?php

namespace Davispeixoto\OpenTravelAlliance\AssociatedContentType\AssocItemsAType;

/**
 * Class representing AssocItemAType
 */
class AssocItemAType
{

    /**
     * Reference to this associated item.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Date and time of start and end of the associated item.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateTime
     */
    private $dateTime = null;

    /**
     * Associated item type (e.g. Convention).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Reference to the associated item content. This could be a URL to map or city
     * information. This can also be used as a vendor's reference to a reservation
     * (i.e. record locator).
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $assocItemRef
     */
    private $assocItemRef = null;

    /**
     * Gets as rPH
     *
     * Reference to this associated item.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Reference to this associated item.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as dateTime
     *
     * Date and time of start and end of the associated item.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Sets a new dateTime
     *
     * Date and time of start and end of the associated item.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateTime
     * @return self
     */
    public function setDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Gets as type
     *
     * Associated item type (e.g. Convention).
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
     * Associated item type (e.g. Convention).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as assocItemRef
     *
     * Reference to the associated item content. This could be a URL to map or city
     * information. This can also be used as a vendor's reference to a reservation
     * (i.e. record locator).
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getAssocItemRef()
    {
        return $this->assocItemRef;
    }

    /**
     * Sets a new assocItemRef
     *
     * Reference to the associated item content. This could be a URL to map or city
     * information. This can also be used as a vendor's reference to a reservation
     * (i.e. record locator).
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $assocItemRef
     * @return self
     */
    public function setAssocItemRef(\Davispeixoto\OpenTravelAlliance\UniqueIDType $assocItemRef)
    {
        $this->assocItemRef = $assocItemRef;

        return $this;
    }


}

