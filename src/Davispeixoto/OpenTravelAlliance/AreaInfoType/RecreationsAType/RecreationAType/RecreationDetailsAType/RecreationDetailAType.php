<?php

namespace Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType\RecreationAType\RecreationDetailsAType;

/**
 * Class representing RecreationDetailAType
 */
class RecreationDetailAType
{

    /**
     * Refer to OpenTravel Code List Recreation Srvc Detail Code (REC).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * This attribute is used to explicitly define whether an amenity or service is
     * offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with Code.
     *
     * @property string $existsCode
     */
    private $existsCode = null;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * Used to pass further description regarding the info code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $description
     */
    private $description = null;

    /**
     * Gets as code
     *
     * Refer to OpenTravel Code List Recreation Srvc Detail Code (REC).
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
     * Refer to OpenTravel Code List Recreation Srvc Detail Code (REC).
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
     * Gets as existsCode
     *
     * This attribute is used to explicitly define whether an amenity or service is
     * offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with Code.
     *
     * @return string
     */
    public function getExistsCode()
    {
        return $this->existsCode;
    }

    /**
     * Sets a new existsCode
     *
     * This attribute is used to explicitly define whether an amenity or service is
     * offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with Code.
     *
     * @param string $existsCode
     * @return self
     */
    public function setExistsCode($existsCode)
    {
        $this->existsCode = $existsCode;

        return $this;
    }

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return boolean
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param boolean $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;

        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;

        return $this;
    }

    /**
     * Adds as description
     *
     * Used to pass further description regarding the info code.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    public function addToDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * isset description
     *
     * Used to pass further description regarding the info code.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Used to pass further description regarding the info code.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Used to pass further description regarding the info code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Used to pass further description regarding the info code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }


}

