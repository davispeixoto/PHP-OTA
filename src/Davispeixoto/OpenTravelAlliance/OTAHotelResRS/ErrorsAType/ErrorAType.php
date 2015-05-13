<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\ErrorsAType;

/**
 * Class representing ErrorAType
 */
class ErrorAType
{

    /**
     * Type MUST identify the type of error and MUST refer to OpenTravel Code List
     * Error Warning Type (EWT).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * ShortText MAY provide an abbreviated version of the error in textual format.
     *
     * @property string $shortText
     */
    private $shortText = null;

    /**
     * Code MAY be used to identify an error associated with the reservation request
     * and MUST refer to OpenTravel Code List Error Codes (ERR).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Status MAY be used to identify the status of the reservation. RECOMMENDED values
     * are (NotProcessed | Incomplete | Compete | Unknown).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Tag MAY identify an unknown or misspelled tag that caused an error in
     * processing. It is RECOMMENDED that the Tag attribute use XPath notation to
     * identify the location of a tag in the event that more than one tag of the same
     * name is present in the document. Alternatively, the tag name alone MAY be used
     * to identify missing data [Type=ReqFieldMissing].
     *
     * @property string $tag
     */
    private $tag = null;

    /**
     * NodeList MAY contain an XPath expression that selects all the nodes whose data
     * caused this error. Further, this expression SHOULD have an additional constraint
     * which contains the data of the node. This will provide the offending data back
     * to systems that cannot maintain the original message.
     *
     * @property string $nodeList
     */
    private $nodeList = null;

    /**
     * Gets as type
     *
     * Type MUST identify the type of error and MUST refer to OpenTravel Code List
     * Error Warning Type (EWT).
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
     * Type MUST identify the type of error and MUST refer to OpenTravel Code List
     * Error Warning Type (EWT).
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
     * ShortText MAY provide an abbreviated version of the error in textual format.
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
     * ShortText MAY provide an abbreviated version of the error in textual format.
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
     * Code MAY be used to identify an error associated with the reservation request
     * and MUST refer to OpenTravel Code List Error Codes (ERR).
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
     * Code MAY be used to identify an error associated with the reservation request
     * and MUST refer to OpenTravel Code List Error Codes (ERR).
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
     * Gets as status
     *
     * Status MAY be used to identify the status of the reservation. RECOMMENDED values
     * are (NotProcessed | Incomplete | Compete | Unknown).
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
     * Status MAY be used to identify the status of the reservation. RECOMMENDED values
     * are (NotProcessed | Incomplete | Compete | Unknown).
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
     * Tag MAY identify an unknown or misspelled tag that caused an error in
     * processing. It is RECOMMENDED that the Tag attribute use XPath notation to
     * identify the location of a tag in the event that more than one tag of the same
     * name is present in the document. Alternatively, the tag name alone MAY be used
     * to identify missing data [Type=ReqFieldMissing].
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
     * Tag MAY identify an unknown or misspelled tag that caused an error in
     * processing. It is RECOMMENDED that the Tag attribute use XPath notation to
     * identify the location of a tag in the event that more than one tag of the same
     * name is present in the document. Alternatively, the tag name alone MAY be used
     * to identify missing data [Type=ReqFieldMissing].
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
     * Gets as nodeList
     *
     * NodeList MAY contain an XPath expression that selects all the nodes whose data
     * caused this error. Further, this expression SHOULD have an additional constraint
     * which contains the data of the node. This will provide the offending data back
     * to systems that cannot maintain the original message.
     *
     * @return string
     */
    public function getNodeList()
    {
        return $this->nodeList;
    }

    /**
     * Sets a new nodeList
     *
     * NodeList MAY contain an XPath expression that selects all the nodes whose data
     * caused this error. Further, this expression SHOULD have an additional constraint
     * which contains the data of the node. This will provide the offending data back
     * to systems that cannot maintain the original message.
     *
     * @param string $nodeList
     * @return self
     */
    public function setNodeList($nodeList)
    {
        $this->nodeList = $nodeList;

        return $this;
    }


}

