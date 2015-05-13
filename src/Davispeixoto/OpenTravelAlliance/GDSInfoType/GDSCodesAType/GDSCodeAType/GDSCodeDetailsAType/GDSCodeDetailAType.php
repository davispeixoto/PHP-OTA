<?php

namespace Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType\GDSCodeAType\GDSCodeDetailsAType;

/**
 * Class representing GDSCodeDetailAType
 */
class GDSCodeDetailAType
{

    /**
     * This is used to pass the pseudo city code (i.e., the code that identifies a
     * specific agency location) of the agency that has authority to book the
     * negotiated rate(s)).
     *
     * @property string $pseudoCityCode
     */
    private $pseudoCityCode = null;

    /**
     * This is the agency with authority to book the negotiated rate(s).
     *
     * @property string $agencyName
     */
    private $agencyName = null;

    /**
     * Gets as pseudoCityCode
     *
     * This is used to pass the pseudo city code (i.e., the code that identifies a
     * specific agency location) of the agency that has authority to book the
     * negotiated rate(s)).
     *
     * @return string
     */
    public function getPseudoCityCode()
    {
        return $this->pseudoCityCode;
    }

    /**
     * Sets a new pseudoCityCode
     *
     * This is used to pass the pseudo city code (i.e., the code that identifies a
     * specific agency location) of the agency that has authority to book the
     * negotiated rate(s)).
     *
     * @param string $pseudoCityCode
     * @return self
     */
    public function setPseudoCityCode($pseudoCityCode)
    {
        $this->pseudoCityCode = $pseudoCityCode;

        return $this;
    }

    /**
     * Gets as agencyName
     *
     * This is the agency with authority to book the negotiated rate(s).
     *
     * @return string
     */
    public function getAgencyName()
    {
        return $this->agencyName;
    }

    /**
     * Sets a new agencyName
     *
     * This is the agency with authority to book the negotiated rate(s).
     *
     * @param string $agencyName
     * @return self
     */
    public function setAgencyName($agencyName)
    {
        $this->agencyName = $agencyName;

        return $this;
    }


}

