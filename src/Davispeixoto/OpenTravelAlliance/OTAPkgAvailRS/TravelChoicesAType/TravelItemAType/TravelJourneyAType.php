<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType;

/**
 * Class representing TravelJourneyAType
 */
class TravelJourneyAType
{

    /**
     * The type of travel component - e.g. Air, Rail, Sea etc.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $originAirportID
     */
    private $originAirportID = null;

    /**
     * @property string $destinationAirportID
     */
    private $destinationAirportID = null;

    /**
     * @property \DateTime $outwardDateTime
     */
    private $outwardDateTime = null;

    /**
     * @property \DateTime $returnDateTime
     */
    private $returnDateTime = null;

    /**
     * The supplier's code to identify the travel arrangement for the package
     *
     * @property string $travelCode
     */
    private $travelCode = null;

    /**
     * Used to provide the company common name.
     *
     * @property string $companyShortName
     */
    private $companyShortName = null;

    /**
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @property string $travelSector
     */
    private $travelSector = null;

    /**
     * Identifies a company by the company code.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Identifies the context of the identifying code, such as DUNS, IATA or internal
     * code, etc.
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Gets as type
     *
     * The type of travel component - e.g. Air, Rail, Sea etc.
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
     * The type of travel component - e.g. Air, Rail, Sea etc.
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
     * Gets as originAirportID
     *
     * @return string
     */
    public function getOriginAirportID()
    {
        return $this->originAirportID;
    }

    /**
     * Sets a new originAirportID
     *
     * @param string $originAirportID
     * @return self
     */
    public function setOriginAirportID($originAirportID)
    {
        $this->originAirportID = $originAirportID;

        return $this;
    }

    /**
     * Gets as destinationAirportID
     *
     * @return string
     */
    public function getDestinationAirportID()
    {
        return $this->destinationAirportID;
    }

    /**
     * Sets a new destinationAirportID
     *
     * @param string $destinationAirportID
     * @return self
     */
    public function setDestinationAirportID($destinationAirportID)
    {
        $this->destinationAirportID = $destinationAirportID;

        return $this;
    }

    /**
     * Gets as outwardDateTime
     *
     * @return \DateTime
     */
    public function getOutwardDateTime()
    {
        return $this->outwardDateTime;
    }

    /**
     * Sets a new outwardDateTime
     *
     * @param \DateTime $outwardDateTime
     * @return self
     */
    public function setOutwardDateTime(\DateTime $outwardDateTime)
    {
        $this->outwardDateTime = $outwardDateTime;

        return $this;
    }

    /**
     * Gets as returnDateTime
     *
     * @return \DateTime
     */
    public function getReturnDateTime()
    {
        return $this->returnDateTime;
    }

    /**
     * Sets a new returnDateTime
     *
     * @param \DateTime $returnDateTime
     * @return self
     */
    public function setReturnDateTime(\DateTime $returnDateTime)
    {
        $this->returnDateTime = $returnDateTime;

        return $this;
    }

    /**
     * Gets as travelCode
     *
     * The supplier's code to identify the travel arrangement for the package
     *
     * @return string
     */
    public function getTravelCode()
    {
        return $this->travelCode;
    }

    /**
     * Sets a new travelCode
     *
     * The supplier's code to identify the travel arrangement for the package
     *
     * @param string $travelCode
     * @return self
     */
    public function setTravelCode($travelCode)
    {
        $this->travelCode = $travelCode;

        return $this;
    }

    /**
     * Gets as companyShortName
     *
     * Used to provide the company common name.
     *
     * @return string
     */
    public function getCompanyShortName()
    {
        return $this->companyShortName;
    }

    /**
     * Sets a new companyShortName
     *
     * Used to provide the company common name.
     *
     * @param string $companyShortName
     * @return self
     */
    public function setCompanyShortName($companyShortName)
    {
        $this->companyShortName = $companyShortName;

        return $this;
    }

    /**
     * Gets as travelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @return string
     */
    public function getTravelSector()
    {
        return $this->travelSector;
    }

    /**
     * Sets a new travelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @param string $travelSector
     * @return self
     */
    public function setTravelSector($travelSector)
    {
        $this->travelSector = $travelSector;

        return $this;
    }

    /**
     * Gets as code
     *
     * Identifies a company by the company code.
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
     * Identifies a company by the company code.
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
     * Gets as codeContext
     *
     * Identifies the context of the identifying code, such as DUNS, IATA or internal
     * code, etc.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the context of the identifying code, such as DUNS, IATA or internal
     * code, etc.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }


}

