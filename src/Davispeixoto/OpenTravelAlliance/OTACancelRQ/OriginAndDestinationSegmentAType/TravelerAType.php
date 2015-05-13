<?php

namespace Davispeixoto\OpenTravelAlliance\OTACancelRQ\OriginAndDestinationSegmentAType;

use Davispeixoto\OpenTravelAlliance\PersonNameType;

/**
 * Class representing TravelerAType
 */
class TravelerAType extends PersonNameType
{

    /**
     * Unique number assigned by authorities to document.
     *
     * @property string $docID
     */
    private $docID = null;

    /**
     * Indicates the type of document (e.g. Passport, Military ID, Drivers License,
     * national ID, Vaccination Certificate). Refer to OpenTravel Code List Document
     * Type (DOC).
     *
     * @property string $docType
     */
    private $docType = null;

    /**
     * Gets as docID
     *
     * Unique number assigned by authorities to document.
     *
     * @return string
     */
    public function getDocID()
    {
        return $this->docID;
    }

    /**
     * Sets a new docID
     *
     * Unique number assigned by authorities to document.
     *
     * @param string $docID
     * @return self
     */
    public function setDocID($docID)
    {
        $this->docID = $docID;

        return $this;
    }

    /**
     * Gets as docType
     *
     * Indicates the type of document (e.g. Passport, Military ID, Drivers License,
     * national ID, Vaccination Certificate). Refer to OpenTravel Code List Document
     * Type (DOC).
     *
     * @return string
     */
    public function getDocType()
    {
        return $this->docType;
    }

    /**
     * Sets a new docType
     *
     * Indicates the type of document (e.g. Passport, Military ID, Drivers License,
     * national ID, Vaccination Certificate). Refer to OpenTravel Code List Document
     * Type (DOC).
     *
     * @param string $docType
     * @return self
     */
    public function setDocType($docType)
    {
        $this->docType = $docType;

        return $this;
    }


}

