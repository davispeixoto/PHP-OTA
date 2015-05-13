<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing WarningType
 *
 * Used when a message has been successfully processed to report any warnings or
 * business errors that occurred.
 * XSD Type: WarningType
 */
class WarningType extends FreeTextType
{

    /**
     * The Warning element MUST contain the Type attribute that uses a recommended set
     * of values to indicate the warning type. The validating XSD can expect to accept
     * values that it has NOT been explicitly coded for and process them by using Type
     * ="Unknown". Refer to OpenTravel Code List Error Warning Type (EWT).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * An abbreviated version of the error in textual format.
     *
     * @property string $shortText
     */
    private $shortText = null;

    /**
     * If present, this refers to a table of coded values exchanged between
     * applications to identify errors or warnings. Refer to OpenTravel Code List Error
     * Codes (ERR).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * If present, this URL refers to an online description of the error that occurred.
     *
     * @property string $docURL
     */
    private $docURL = null;

    /**
     * If present, recommended values are those enumerated in the OTA_ErrorRS,
     * (NotProcessed | Incomplete | Complete | Unknown) however, the data type is
     * designated as string data, recognizing that trading partners may identify
     * additional status conditions not included in the enumeration.
     *
     * @property string $status
     */
    private $status = null;

    /**
     * If present, this attribute may identify an unknown or misspelled tag that caused
     * an error in processing. It is recommended that the Tag attribute use XPath
     * notation to identify the location of a tag in the event that more than one tag
     * of the same name is present in the document. Alternatively, the tag name alone
     * can be used to identify missing data [Type=ReqFieldMissing].
     *
     * @property string $tag
     */
    private $tag = null;

    /**
     * If present, this attribute allows for batch processing and the identification of
     * the record that failed amongst a group of records. This value may contain a
     * concatenation of a unique failed transaction ID with specific record(s)
     * associated with that transaction.
     *
     * @property string $recordID
     */
    private $recordID = null;

    /**
     * Reference Place Holder used as an index for this warning.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as type
     *
     * The Warning element MUST contain the Type attribute that uses a recommended set
     * of values to indicate the warning type. The validating XSD can expect to accept
     * values that it has NOT been explicitly coded for and process them by using Type
     * ="Unknown". Refer to OpenTravel Code List Error Warning Type (EWT).
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
     * The Warning element MUST contain the Type attribute that uses a recommended set
     * of values to indicate the warning type. The validating XSD can expect to accept
     * values that it has NOT been explicitly coded for and process them by using Type
     * ="Unknown". Refer to OpenTravel Code List Error Warning Type (EWT).
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
     * Gets as shortText
     *
     * An abbreviated version of the error in textual format.
     *
     * @return string
     */
    public function getShortText()
    {
        return $this->shortText;
    }

    /**
     * Sets a new shortText
     *
     * An abbreviated version of the error in textual format.
     *
     * @param string $shortText
     * @return self
     */
    public function setShortText($shortText)
    {
        $this->shortText = $shortText;

        return $this;
    }

    /**
     * Gets as code
     *
     * If present, this refers to a table of coded values exchanged between
     * applications to identify errors or warnings. Refer to OpenTravel Code List Error
     * Codes (ERR).
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
     * If present, this refers to a table of coded values exchanged between
     * applications to identify errors or warnings. Refer to OpenTravel Code List Error
     * Codes (ERR).
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
     * Gets as docURL
     *
     * If present, this URL refers to an online description of the error that occurred.
     *
     * @return string
     */
    public function getDocURL()
    {
        return $this->docURL;
    }

    /**
     * Sets a new docURL
     *
     * If present, this URL refers to an online description of the error that occurred.
     *
     * @param string $docURL
     * @return self
     */
    public function setDocURL($docURL)
    {
        $this->docURL = $docURL;

        return $this;
    }

    /**
     * Gets as status
     *
     * If present, recommended values are those enumerated in the OTA_ErrorRS,
     * (NotProcessed | Incomplete | Complete | Unknown) however, the data type is
     * designated as string data, recognizing that trading partners may identify
     * additional status conditions not included in the enumeration.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * If present, recommended values are those enumerated in the OTA_ErrorRS,
     * (NotProcessed | Incomplete | Complete | Unknown) however, the data type is
     * designated as string data, recognizing that trading partners may identify
     * additional status conditions not included in the enumeration.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as tag
     *
     * If present, this attribute may identify an unknown or misspelled tag that caused
     * an error in processing. It is recommended that the Tag attribute use XPath
     * notation to identify the location of a tag in the event that more than one tag
     * of the same name is present in the document. Alternatively, the tag name alone
     * can be used to identify missing data [Type=ReqFieldMissing].
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Sets a new tag
     *
     * If present, this attribute may identify an unknown or misspelled tag that caused
     * an error in processing. It is recommended that the Tag attribute use XPath
     * notation to identify the location of a tag in the event that more than one tag
     * of the same name is present in the document. Alternatively, the tag name alone
     * can be used to identify missing data [Type=ReqFieldMissing].
     *
     * @param string $tag
     * @return self
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Gets as recordID
     *
     * If present, this attribute allows for batch processing and the identification of
     * the record that failed amongst a group of records. This value may contain a
     * concatenation of a unique failed transaction ID with specific record(s)
     * associated with that transaction.
     *
     * @return string
     */
    public function getRecordID()
    {
        return $this->recordID;
    }

    /**
     * Sets a new recordID
     *
     * If present, this attribute allows for batch processing and the identification of
     * the record that failed amongst a group of records. This value may contain a
     * concatenation of a unique failed transaction ID with specific record(s)
     * associated with that transaction.
     *
     * @param string $recordID
     * @return self
     */
    public function setRecordID($recordID)
    {
        $this->recordID = $recordID;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * Reference Place Holder used as an index for this warning.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Reference Place Holder used as an index for this warning.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }


}

