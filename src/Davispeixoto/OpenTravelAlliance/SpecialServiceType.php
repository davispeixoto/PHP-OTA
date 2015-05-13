<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SpecialServiceType
 *
 * Specifies the special service requirements.
 * XSD Type: SpecialServiceType
 */
class SpecialServiceType
{

    /**
     * Specifies the special requirement type identification (e.g., occasion,
     *  special service,
     * language).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Special service code maintained by individual companies.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The name of the special service.
     *
     * @property string $codeName
     */
    private $codeName = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * Specifies the special service association type (i.e., Cabin, Passenger).
     *
     * @property string $associationType
     */
    private $associationType = null;

    /**
     * Specifies the date the service is to be rendered.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $date
     */
    private $date = null;

    /**
     * The number of years associated with a special event such as a birthday, an
     * anniversary, etc.
     *
     * @property integer $nbrOfYears
     */
    private $nbrOfYears = null;

    /**
     * Additional comments associated with the service or notes to be attached to the
     * service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    private $comment = null;

    /**
     * Gets as type
     *
     * Specifies the special requirement type identification (e.g., occasion,
     *  special service,
     * language).
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
     * Specifies the special requirement type identification (e.g., occasion,
     *  special service,
     * language).
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
     * Gets as code
     *
     * Special service code maintained by individual companies.
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
     * Special service code maintained by individual companies.
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
     * Gets as codeName
     *
     * The name of the special service.
     *
     * @return string
     */
    public function getCodeName()
    {
        return $this->codeName;
    }

    /**
     * Sets a new codeName
     *
     * The name of the special service.
     *
     * @param string $codeName
     * @return self
     */
    public function setCodeName($codeName)
    {
        $this->codeName = $codeName;

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
     * Gets as associationType
     *
     * Specifies the special service association type (i.e., Cabin, Passenger).
     *
     * @return string
     */
    public function getAssociationType()
    {
        return $this->associationType;
    }

    /**
     * Sets a new associationType
     *
     * Specifies the special service association type (i.e., Cabin, Passenger).
     *
     * @param string $associationType
     * @return self
     */
    public function setAssociationType($associationType)
    {
        $this->associationType = $associationType;

        return $this;
    }

    /**
     * Gets as date
     *
     * Specifies the date the service is to be rendered.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Specifies the date the service is to be rendered.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $date
     * @return self
     */
    public function setDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as nbrOfYears
     *
     * The number of years associated with a special event such as a birthday, an
     * anniversary, etc.
     *
     * @return integer
     */
    public function getNbrOfYears()
    {
        return $this->nbrOfYears;
    }

    /**
     * Sets a new nbrOfYears
     *
     * The number of years associated with a special event such as a birthday, an
     * anniversary, etc.
     *
     * @param integer $nbrOfYears
     * @return self
     */
    public function setNbrOfYears($nbrOfYears)
    {
        $this->nbrOfYears = $nbrOfYears;

        return $this;
    }

    /**
     * Gets as comment
     *
     * Additional comments associated with the service or notes to be attached to the
     * service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Additional comments associated with the service or notes to be attached to the
     * service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     * @return self
     */
    public function setComment(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}

