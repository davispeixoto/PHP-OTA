<?php

namespace Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType;

/**
 * Class representing UniqueIDAType
 */
class UniqueIDAType
{

    /**
     * The Type MUST refer to OpenTravel Code List Unique ID Type (UIT). FastRez
     * RECOMMENDS restricting the use of the code table to code 15 - Cancellation.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * ID MUST contain a unique identifying value for the reservation within the scope
     * of the ID_Context.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * ID Context MUST identify the authoritative source of the ID (e.g., IATA, ABTA).
     *
     * @property string $iDContext
     */
    private $iDContext = null;

    /**
     * Gets as type
     *
     * The Type MUST refer to OpenTravel Code List Unique ID Type (UIT). FastRez
     * RECOMMENDS restricting the use of the code table to code 15 - Cancellation.
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
     * The Type MUST refer to OpenTravel Code List Unique ID Type (UIT). FastRez
     * RECOMMENDS restricting the use of the code table to code 15 - Cancellation.
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
     * Gets as iD
     *
     * ID MUST contain a unique identifying value for the reservation within the scope
     * of the ID_Context.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * ID MUST contain a unique identifying value for the reservation within the scope
     * of the ID_Context.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as iDContext
     *
     * ID Context MUST identify the authoritative source of the ID (e.g., IATA, ABTA).
     *
     * @return string
     */
    public function getIDContext()
    {
        return $this->iDContext;
    }

    /**
     * Sets a new iDContext
     *
     * ID Context MUST identify the authoritative source of the ID (e.g., IATA, ABTA).
     *
     * @param string $iDContext
     * @return self
     */
    public function setIDContext($iDContext)
    {
        $this->iDContext = $iDContext;

        return $this;
    }


}

