<?php

namespace Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateCreateNotifRQ\TravelInfosAType;

/**
 * Class representing CertificateNumberAType
 */
class CertificateNumberAType
{

    /**
     * The loyalty redemption certificate identifier.
     *
     * @property string $certificateNumber
     */
    private $certificateNumber = null;

    /**
     * Unique identifier of the member in the program.
     *
     * @property string $memberNumber
     */
    private $memberNumber = null;

    /**
     * This identifies the loyalty program.
     *
     * @property string $programName
     */
    private $programName = null;

    /**
     * Gets as certificateNumber
     *
     * The loyalty redemption certificate identifier.
     *
     * @return string
     */
    public function getCertificateNumber()
    {
        return $this->certificateNumber;
    }

    /**
     * Sets a new certificateNumber
     *
     * The loyalty redemption certificate identifier.
     *
     * @param string $certificateNumber
     * @return self
     */
    public function setCertificateNumber($certificateNumber)
    {
        $this->certificateNumber = $certificateNumber;

        return $this;
    }

    /**
     * Gets as memberNumber
     *
     * Unique identifier of the member in the program.
     *
     * @return string
     */
    public function getMemberNumber()
    {
        return $this->memberNumber;
    }

    /**
     * Sets a new memberNumber
     *
     * Unique identifier of the member in the program.
     *
     * @param string $memberNumber
     * @return self
     */
    public function setMemberNumber($memberNumber)
    {
        $this->memberNumber = $memberNumber;

        return $this;
    }

    /**
     * Gets as programName
     *
     * This identifies the loyalty program.
     *
     * @return string
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * Sets a new programName
     *
     * This identifies the loyalty program.
     *
     * @param string $programName
     * @return self
     */
    public function setProgramName($programName)
    {
        $this->programName = $programName;

        return $this;
    }


}

