<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType;

/**
 * Class representing DocumentAndPrintInfoAType
 */
class DocumentAndPrintInfoAType
{

    /**
     * Carrier Alliance Name
     *
     * @property string $airAllianceName
     */
    private $airAllianceName = null;

    /**
     * Unique identifier assigned to a specific device or drawn from a pool as
     * necessary.
     *
     * @property string $printDeviceID
     */
    private $printDeviceID = null;

    /**
     * This is the timestamp to be imprinted on the document being printed. The time
     * zone assumed to be UTC. Time reflects GMT or Zulu.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $printDateTime
     */
    private $printDateTime = null;

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
     * The country location of the company headquarters.Example: us
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Company Emblem
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\DocumentAndPrintInfoAType\CompanyLogoAType
     * $companyLogo
     */
    private $companyLogo = null;

    /**
     * Carrier Alliance Emblem
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\DocumentAndPrintInfoAType\AllianceLogoAType
     * $allianceLogo
     */
    private $allianceLogo = null;

    /**
     * Gets as airAllianceName
     *
     * Carrier Alliance Name
     *
     * @return string
     */
    public function getAirAllianceName()
    {
        return $this->airAllianceName;
    }

    /**
     * Sets a new airAllianceName
     *
     * Carrier Alliance Name
     *
     * @param string $airAllianceName
     * @return self
     */
    public function setAirAllianceName($airAllianceName)
    {
        $this->airAllianceName = $airAllianceName;

        return $this;
    }

    /**
     * Gets as printDeviceID
     *
     * Unique identifier assigned to a specific device or drawn from a pool as
     * necessary.
     *
     * @return string
     */
    public function getPrintDeviceID()
    {
        return $this->printDeviceID;
    }

    /**
     * Sets a new printDeviceID
     *
     * Unique identifier assigned to a specific device or drawn from a pool as
     * necessary.
     *
     * @param string $printDeviceID
     * @return self
     */
    public function setPrintDeviceID($printDeviceID)
    {
        $this->printDeviceID = $printDeviceID;

        return $this;
    }

    /**
     * Gets as printDateTime
     *
     * This is the timestamp to be imprinted on the document being printed. The time
     * zone assumed to be UTC. Time reflects GMT or Zulu.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getPrintDateTime()
    {
        return $this->printDateTime;
    }

    /**
     * Sets a new printDateTime
     *
     * This is the timestamp to be imprinted on the document being printed. The time
     * zone assumed to be UTC. Time reflects GMT or Zulu.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $printDateTime
     * @return self
     */
    public function setPrintDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $printDateTime)
    {
        $this->printDateTime = $printDateTime;

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

    /**
     * Gets as countryCode
     *
     * The country location of the company headquarters.Example: us
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * The country location of the company headquarters.Example: us
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Gets as companyLogo
     *
     * Company Emblem
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\DocumentAndPrintInfoAType\CompanyLogoAType
     */
    public function getCompanyLogo()
    {
        return $this->companyLogo;
    }

    /**
     * Sets a new companyLogo
     *
     * Company Emblem
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\DocumentAndPrintInfoAType\CompanyLogoAType
     * $companyLogo
     * @return self
     */
    public function setCompanyLogo(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\DocumentAndPrintInfoAType\CompanyLogoAType $companyLogo
    ) {
        $this->companyLogo = $companyLogo;

        return $this;
    }

    /**
     * Gets as allianceLogo
     *
     * Carrier Alliance Emblem
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\DocumentAndPrintInfoAType\AllianceLogoAType
     */
    public function getAllianceLogo()
    {
        return $this->allianceLogo;
    }

    /**
     * Sets a new allianceLogo
     *
     * Carrier Alliance Emblem
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\DocumentAndPrintInfoAType\AllianceLogoAType
     * $allianceLogo
     * @return self
     */
    public function setAllianceLogo(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\DocumentAndPrintInfoAType\AllianceLogoAType $allianceLogo
    ) {
        $this->allianceLogo = $allianceLogo;

        return $this;
    }


}

