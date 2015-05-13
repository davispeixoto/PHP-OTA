<?php

namespace Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateCreateRQ\TravelInfosAType;

/**
 * Class representing LoyaltyCertificateDetailAType
 */
class LoyaltyCertificateDetailAType
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
     * The personal identification number (password) for the Member Number.
     *
     * @property string $pinNumber
     */
    private $pinNumber = null;

    /**
     * Reference of the customer the certificate is requested for.
     *
     * @property string $customerRPH
     */
    private $customerRPH = null;

    /**
     * Reference of the flight the certificate is requested for.
     *
     * @property string $flightRPH
     */
    private $flightRPH = null;

    /**
     * Describes the currency type to be deducted (e.g. miles, points, vouchers,
     * stays).
     *
     * @property string $awardType
     */
    private $awardType = null;

    /**
     * A unique reference for the created certificate.
     *
     * @property integer $certificateRefNumber
     */
    private $certificateRefNumber = null;

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

    /**
     * Gets as pinNumber
     *
     * The personal identification number (password) for the Member Number.
     *
     * @return string
     */
    public function getPinNumber()
    {
        return $this->pinNumber;
    }

    /**
     * Sets a new pinNumber
     *
     * The personal identification number (password) for the Member Number.
     *
     * @param string $pinNumber
     * @return self
     */
    public function setPinNumber($pinNumber)
    {
        $this->pinNumber = $pinNumber;

        return $this;
    }

    /**
     * Gets as customerRPH
     *
     * Reference of the customer the certificate is requested for.
     *
     * @return string
     */
    public function getCustomerRPH()
    {
        return $this->customerRPH;
    }

    /**
     * Sets a new customerRPH
     *
     * Reference of the customer the certificate is requested for.
     *
     * @param string $customerRPH
     * @return self
     */
    public function setCustomerRPH($customerRPH)
    {
        $this->customerRPH = $customerRPH;

        return $this;
    }

    /**
     * Gets as flightRPH
     *
     * Reference of the flight the certificate is requested for.
     *
     * @return string
     */
    public function getFlightRPH()
    {
        return $this->flightRPH;
    }

    /**
     * Sets a new flightRPH
     *
     * Reference of the flight the certificate is requested for.
     *
     * @param string $flightRPH
     * @return self
     */
    public function setFlightRPH($flightRPH)
    {
        $this->flightRPH = $flightRPH;

        return $this;
    }

    /**
     * Gets as awardType
     *
     * Describes the currency type to be deducted (e.g. miles, points, vouchers,
     * stays).
     *
     * @return string
     */
    public function getAwardType()
    {
        return $this->awardType;
    }

    /**
     * Sets a new awardType
     *
     * Describes the currency type to be deducted (e.g. miles, points, vouchers,
     * stays).
     *
     * @param string $awardType
     * @return self
     */
    public function setAwardType($awardType)
    {
        $this->awardType = $awardType;

        return $this;
    }

    /**
     * Gets as certificateRefNumber
     *
     * A unique reference for the created certificate.
     *
     * @return integer
     */
    public function getCertificateRefNumber()
    {
        return $this->certificateRefNumber;
    }

    /**
     * Sets a new certificateRefNumber
     *
     * A unique reference for the created certificate.
     *
     * @param integer $certificateRefNumber
     * @return self
     */
    public function setCertificateRefNumber($certificateRefNumber)
    {
        $this->certificateRefNumber = $certificateRefNumber;

        return $this;
    }


}

