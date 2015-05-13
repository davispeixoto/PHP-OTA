<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType;

/**
 * Class representing LengthsOfStayCandidatesAType
 */
class LengthsOfStayCandidatesAType
{

    /**
     * Boolean Flag indicating if all lengths of stay types should be sent or only the
     * ones requested in LengthOfStayCandidate.
     *
     * @property boolean $sendAllLengthsOfStay
     */
    private $sendAllLengthsOfStay = null;

    /**
     * The number of elements in the requested fixed pattern length of stay (FPLOS)
     * array.
     *
     * @property integer $fixedPatternLength
     */
    private $fixedPatternLength = null;

    /**
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType\LengthOfStayCandidateAType[]
     * $lengthOfStayCandidate
     */
    private $lengthOfStayCandidate = null;

    /**
     * Gets as sendAllLengthsOfStay
     *
     * Boolean Flag indicating if all lengths of stay types should be sent or only the
     * ones requested in LengthOfStayCandidate.
     *
     * @return boolean
     */
    public function getSendAllLengthsOfStay()
    {
        return $this->sendAllLengthsOfStay;
    }

    /**
     * Sets a new sendAllLengthsOfStay
     *
     * Boolean Flag indicating if all lengths of stay types should be sent or only the
     * ones requested in LengthOfStayCandidate.
     *
     * @param boolean $sendAllLengthsOfStay
     * @return self
     */
    public function setSendAllLengthsOfStay($sendAllLengthsOfStay)
    {
        $this->sendAllLengthsOfStay = $sendAllLengthsOfStay;

        return $this;
    }

    /**
     * Gets as fixedPatternLength
     *
     * The number of elements in the requested fixed pattern length of stay (FPLOS)
     * array.
     *
     * @return integer
     */
    public function getFixedPatternLength()
    {
        return $this->fixedPatternLength;
    }

    /**
     * Sets a new fixedPatternLength
     *
     * The number of elements in the requested fixed pattern length of stay (FPLOS)
     * array.
     *
     * @param integer $fixedPatternLength
     * @return self
     */
    public function setFixedPatternLength($fixedPatternLength)
    {
        $this->fixedPatternLength = $fixedPatternLength;

        return $this;
    }

    /**
     * Adds as lengthOfStayCandidate
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType\LengthOfStayCandidateAType
     * $lengthOfStayCandidate
     */
    public function addToLengthOfStayCandidate(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType\LengthOfStayCandidateAType $lengthOfStayCandidate
    ) {
        $this->lengthOfStayCandidate[] = $lengthOfStayCandidate;

        return $this;
    }

    /**
     * isset lengthOfStayCandidate
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLengthOfStayCandidate($index)
    {
        return isset($this->lengthOfStayCandidate[$index]);
    }

    /**
     * unset lengthOfStayCandidate
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLengthOfStayCandidate($index)
    {
        unset($this->lengthOfStayCandidate[$index]);
    }

    /**
     * Gets as lengthOfStayCandidate
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType\LengthOfStayCandidateAType[]
     */
    public function getLengthOfStayCandidate()
    {
        return $this->lengthOfStayCandidate;
    }

    /**
     * Sets a new lengthOfStayCandidate
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType\LengthOfStayCandidateAType[]
     * $lengthOfStayCandidate
     * @return self
     */
    public function setLengthOfStayCandidate(array $lengthOfStayCandidate)
    {
        $this->lengthOfStayCandidate = $lengthOfStayCandidate;

        return $this;
    }


}

