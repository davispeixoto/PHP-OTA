<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RequestorIDType
 *
 * Detailed information about the transaction initiator.
 * XSD Type: RequestorID_Type
 */
class RequestorIDType
{

    /**
     * The Type identifies the ID and MUST refer to OpenTravel Code List Unique ID Type
     * (UIT).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * ID MUST contain a unique identifying value for the requestor within the scope of
     * the ID_Context.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * ID_Context MUST identify the authoritative source of the ID (e.g., IATA, ABTA).
     *
     * @property string $iDContext
     */
    private $iDContext = null;

    /**
     * Gets as type
     *
     * The Type identifies the ID and MUST refer to OpenTravel Code List Unique ID Type
     * (UIT).
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
     * The Type identifies the ID and MUST refer to OpenTravel Code List Unique ID Type
     * (UIT).
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
     * ID MUST contain a unique identifying value for the requestor within the scope of
     * the ID_Context.
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
     * ID MUST contain a unique identifying value for the requestor within the scope of
     * the ID_Context.
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
     * ID_Context MUST identify the authoritative source of the ID (e.g., IATA, ABTA).
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
     * ID_Context MUST identify the authoritative source of the ID (e.g., IATA, ABTA).
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

