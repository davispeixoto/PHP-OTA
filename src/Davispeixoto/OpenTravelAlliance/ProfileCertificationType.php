<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ProfileCertificationType
 *
 * The ProfileCertification element identifies the travel agency to be paid by
 * providing the IATA number or ARC certifying number. (Implementation note: This
 * attribute is optional, but if it is not set, the Profile attribute must be set.)
 * XSD Type: ProfileCertificationType
 */
class ProfileCertificationType
{

    /**
     * @property string $certificationType
     */
    private $certificationType = null;

    /**
     * @property string $certificationID
     */
    private $certificationID = null;

    /**
     * Gets as certificationType
     *
     * @return string
     */
    public function getCertificationType()
    {
        return $this->certificationType;
    }

    /**
     * Sets a new certificationType
     *
     * @param string $certificationType
     * @return self
     */
    public function setCertificationType($certificationType)
    {
        $this->certificationType = $certificationType;

        return $this;
    }

    /**
     * Gets as certificationID
     *
     * @return string
     */
    public function getCertificationID()
    {
        return $this->certificationID;
    }

    /**
     * Sets a new certificationID
     *
     * @param string $certificationID
     * @return self
     */
    public function setCertificationID($certificationID)
    {
        $this->certificationID = $certificationID;

        return $this;
    }


}

