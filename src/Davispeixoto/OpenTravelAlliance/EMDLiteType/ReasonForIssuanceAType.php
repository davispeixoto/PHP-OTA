<?php

namespace Davispeixoto\OpenTravelAlliance\EMDLiteType;

/**
 * Class representing ReasonForIssuanceAType
 */
class ReasonForIssuanceAType
{

    /**
     * The reason for the issuance of the EMD. Refer to OpenTravel Code List EMD Reason
     * For Issuance- 4183 (ERI).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * A subcode for the reason of the issuance of the EMD. Refer to OpenTravel Code
     * List EMD Reason For Issuance- 4183 (ERI).
     *
     * @property string $subCode
     */
    private $subCode = null;

    /**
     * The corresponding description to the reason for issuance code.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as code
     *
     * The reason for the issuance of the EMD. Refer to OpenTravel Code List EMD Reason
     * For Issuance- 4183 (ERI).
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
     * The reason for the issuance of the EMD. Refer to OpenTravel Code List EMD Reason
     * For Issuance- 4183 (ERI).
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
     * Gets as subCode
     *
     * A subcode for the reason of the issuance of the EMD. Refer to OpenTravel Code
     * List EMD Reason For Issuance- 4183 (ERI).
     *
     * @return string
     */
    public function getSubCode()
    {
        return $this->subCode;
    }

    /**
     * Sets a new subCode
     *
     * A subcode for the reason of the issuance of the EMD. Refer to OpenTravel Code
     * List EMD Reason For Issuance- 4183 (ERI).
     *
     * @param string $subCode
     * @return self
     */
    public function setSubCode($subCode)
    {
        $this->subCode = $subCode;

        return $this;
    }

    /**
     * Gets as description
     *
     * The corresponding description to the reason for issuance code.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The corresponding description to the reason for issuance code.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }


}

