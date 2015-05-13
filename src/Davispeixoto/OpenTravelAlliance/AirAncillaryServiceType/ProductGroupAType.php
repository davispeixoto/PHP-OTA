<?php

namespace Davispeixoto\OpenTravelAlliance\AirAncillaryServiceType;

/**
 * Class representing ProductGroupAType
 */
class ProductGroupAType
{

    /**
     * The source for the @RFIC_Code definition. Note that setting this attribute at
     * this level will override the global CodeSource attribute set at a higher level
     * in the message.
     *
     * @property string $codeSource
     */
    private $codeSource = null;

    /**
     * A unique code for a product group that may be airline defined or a RFIC (reason
     * for issuance code.)ATPCO calls a product group a "Service Code."
     *
     * @property string $code
     */
    private $code = null;

    /**
     * A description of the group code.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * A pure fare that sits within a fare family. This is a fare associated with a
     * brand (fare basis code) and at this level does not describe what is included.
     *
     * @property string $brandedFareName
     */
    private $brandedFareName = null;

    /**
     * Airline or ATPCO encoded sub-group code(s) that are associated with the group
     * code.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirAncillaryServiceType\ProductGroupAType\SubGroupAType[]
     * $subGroup
     */
    private $subGroup = null;

    /**
     * Gets as codeSource
     *
     * The source for the @RFIC_Code definition. Note that setting this attribute at
     * this level will override the global CodeSource attribute set at a higher level
     * in the message.
     *
     * @return string
     */
    public function getCodeSource()
    {
        return $this->codeSource;
    }

    /**
     * Sets a new codeSource
     *
     * The source for the @RFIC_Code definition. Note that setting this attribute at
     * this level will override the global CodeSource attribute set at a higher level
     * in the message.
     *
     * @param string $codeSource
     * @return self
     */
    public function setCodeSource($codeSource)
    {
        $this->codeSource = $codeSource;

        return $this;
    }

    /**
     * Gets as code
     *
     * A unique code for a product group that may be airline defined or a RFIC (reason
     * for issuance code.)ATPCO calls a product group a "Service Code."
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
     * A unique code for a product group that may be airline defined or a RFIC (reason
     * for issuance code.)ATPCO calls a product group a "Service Code."
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
     * Gets as description
     *
     * A description of the group code.
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
     * A description of the group code.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as brandedFareName
     *
     * A pure fare that sits within a fare family. This is a fare associated with a
     * brand (fare basis code) and at this level does not describe what is included.
     *
     * @return string
     */
    public function getBrandedFareName()
    {
        return $this->brandedFareName;
    }

    /**
     * Sets a new brandedFareName
     *
     * A pure fare that sits within a fare family. This is a fare associated with a
     * brand (fare basis code) and at this level does not describe what is included.
     *
     * @param string $brandedFareName
     * @return self
     */
    public function setBrandedFareName($brandedFareName)
    {
        $this->brandedFareName = $brandedFareName;

        return $this;
    }

    /**
     * Adds as subGroup
     *
     * Airline or ATPCO encoded sub-group code(s) that are associated with the group
     * code.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirAncillaryServiceType\ProductGroupAType\SubGroupAType
     * $subGroup
     */
    public function addToSubGroup(
        \Davispeixoto\OpenTravelAlliance\AirAncillaryServiceType\ProductGroupAType\SubGroupAType $subGroup
    ) {
        $this->subGroup[] = $subGroup;

        return $this;
    }

    /**
     * isset subGroup
     *
     * Airline or ATPCO encoded sub-group code(s) that are associated with the group
     * code.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSubGroup($index)
    {
        return isset($this->subGroup[$index]);
    }

    /**
     * unset subGroup
     *
     * Airline or ATPCO encoded sub-group code(s) that are associated with the group
     * code.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSubGroup($index)
    {
        unset($this->subGroup[$index]);
    }

    /**
     * Gets as subGroup
     *
     * Airline or ATPCO encoded sub-group code(s) that are associated with the group
     * code.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirAncillaryServiceType\ProductGroupAType\SubGroupAType[]
     */
    public function getSubGroup()
    {
        return $this->subGroup;
    }

    /**
     * Sets a new subGroup
     *
     * Airline or ATPCO encoded sub-group code(s) that are associated with the group
     * code.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirAncillaryServiceType\ProductGroupAType\SubGroupAType[]
     * $subGroup
     * @return self
     */
    public function setSubGroup(array $subGroup)
    {
        $this->subGroup = $subGroup;

        return $this;
    }


}

