<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType;

/**
 * Class representing TelephoneAType
 */
class TelephoneAType
{

    /**
     * Describes the location of the phone, such as Home, Office, Property Reservation
     * Office, etc. Refer to OpenTravel Code List Phone Location Type (PLT).
     *
     * @property string $phoneLocationType
     */
    private $phoneLocationType = null;

    /**
     * Indicates type of technology associated with this telephone number, such as
     * Voice, Data, Fax, Pager, Mobile, TTY, etc. Refer to OpenTravel Code List Phone
     * Technology Type (PTT).
     *
     * @property string $phoneTechType
     */
    private $phoneTechType = null;

    /**
     * Describes the type of telephone number, in the context of its general use (e.g.
     * Home, Business, Emergency Contact, Travel Arranger, Day, Evening). Refer to
     * OpenTravel Code List Phone Use Type (PUT).
     *
     * @property string $phoneUseType
     */
    private $phoneUseType = null;

    /**
     * Code assigned by telecommunications authorities for international country access
     * identifier.
     *
     * @property string $countryAccessCode
     */
    private $countryAccessCode = null;

    /**
     * Code assigned for telephones in a specific region, city, or area.
     *
     * @property string $areaCityCode
     */
    private $areaCityCode = null;

    /**
     * Telephone number assigned to a single location.
     *
     * @property string $phoneNumber
     */
    private $phoneNumber = null;

    /**
     * Extension to reach a specific party at the phone number.
     *
     * @property string $extension
     */
    private $extension = null;

    /**
     * Additional codes used for pager or telephone access rights.
     *
     * @property string $pIN
     */
    private $pIN = null;

    /**
     * A remark associated with the telephone number.
     *
     * @property string $remark
     */
    private $remark = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * If true, this phone number should be moved to the PNR.
     *
     * @property boolean $movePhoneNbrToPNRInd
     */
    private $movePhoneNbrToPNRInd = null;

    /**
     * Gets as phoneLocationType
     *
     * Describes the location of the phone, such as Home, Office, Property Reservation
     * Office, etc. Refer to OpenTravel Code List Phone Location Type (PLT).
     *
     * @return string
     */
    public function getPhoneLocationType()
    {
        return $this->phoneLocationType;
    }

    /**
     * Sets a new phoneLocationType
     *
     * Describes the location of the phone, such as Home, Office, Property Reservation
     * Office, etc. Refer to OpenTravel Code List Phone Location Type (PLT).
     *
     * @param string $phoneLocationType
     * @return self
     */
    public function setPhoneLocationType($phoneLocationType)
    {
        $this->phoneLocationType = $phoneLocationType;

        return $this;
    }

    /**
     * Gets as phoneTechType
     *
     * Indicates type of technology associated with this telephone number, such as
     * Voice, Data, Fax, Pager, Mobile, TTY, etc. Refer to OpenTravel Code List Phone
     * Technology Type (PTT).
     *
     * @return string
     */
    public function getPhoneTechType()
    {
        return $this->phoneTechType;
    }

    /**
     * Sets a new phoneTechType
     *
     * Indicates type of technology associated with this telephone number, such as
     * Voice, Data, Fax, Pager, Mobile, TTY, etc. Refer to OpenTravel Code List Phone
     * Technology Type (PTT).
     *
     * @param string $phoneTechType
     * @return self
     */
    public function setPhoneTechType($phoneTechType)
    {
        $this->phoneTechType = $phoneTechType;

        return $this;
    }

    /**
     * Gets as phoneUseType
     *
     * Describes the type of telephone number, in the context of its general use (e.g.
     * Home, Business, Emergency Contact, Travel Arranger, Day, Evening). Refer to
     * OpenTravel Code List Phone Use Type (PUT).
     *
     * @return string
     */
    public function getPhoneUseType()
    {
        return $this->phoneUseType;
    }

    /**
     * Sets a new phoneUseType
     *
     * Describes the type of telephone number, in the context of its general use (e.g.
     * Home, Business, Emergency Contact, Travel Arranger, Day, Evening). Refer to
     * OpenTravel Code List Phone Use Type (PUT).
     *
     * @param string $phoneUseType
     * @return self
     */
    public function setPhoneUseType($phoneUseType)
    {
        $this->phoneUseType = $phoneUseType;

        return $this;
    }

    /**
     * Gets as countryAccessCode
     *
     * Code assigned by telecommunications authorities for international country access
     * identifier.
     *
     * @return string
     */
    public function getCountryAccessCode()
    {
        return $this->countryAccessCode;
    }

    /**
     * Sets a new countryAccessCode
     *
     * Code assigned by telecommunications authorities for international country access
     * identifier.
     *
     * @param string $countryAccessCode
     * @return self
     */
    public function setCountryAccessCode($countryAccessCode)
    {
        $this->countryAccessCode = $countryAccessCode;

        return $this;
    }

    /**
     * Gets as areaCityCode
     *
     * Code assigned for telephones in a specific region, city, or area.
     *
     * @return string
     */
    public function getAreaCityCode()
    {
        return $this->areaCityCode;
    }

    /**
     * Sets a new areaCityCode
     *
     * Code assigned for telephones in a specific region, city, or area.
     *
     * @param string $areaCityCode
     * @return self
     */
    public function setAreaCityCode($areaCityCode)
    {
        $this->areaCityCode = $areaCityCode;

        return $this;
    }

    /**
     * Gets as phoneNumber
     *
     * Telephone number assigned to a single location.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets a new phoneNumber
     *
     * Telephone number assigned to a single location.
     *
     * @param string $phoneNumber
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Gets as extension
     *
     * Extension to reach a specific party at the phone number.
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * Extension to reach a specific party at the phone number.
     *
     * @param string $extension
     * @return self
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Gets as pIN
     *
     * Additional codes used for pager or telephone access rights.
     *
     * @return string
     */
    public function getPIN()
    {
        return $this->pIN;
    }

    /**
     * Sets a new pIN
     *
     * Additional codes used for pager or telephone access rights.
     *
     * @param string $pIN
     * @return self
     */
    public function setPIN($pIN)
    {
        $this->pIN = $pIN;

        return $this;
    }

    /**
     * Gets as remark
     *
     * A remark associated with the telephone number.
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * A remark associated with the telephone number.
     *
     * @param string $remark
     * @return self
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as movePhoneNbrToPNRInd
     *
     * If true, this phone number should be moved to the PNR.
     *
     * @return boolean
     */
    public function getMovePhoneNbrToPNRInd()
    {
        return $this->movePhoneNbrToPNRInd;
    }

    /**
     * Sets a new movePhoneNbrToPNRInd
     *
     * If true, this phone number should be moved to the PNR.
     *
     * @param boolean $movePhoneNbrToPNRInd
     * @return self
     */
    public function setMovePhoneNbrToPNRInd($movePhoneNbrToPNRInd)
    {
        $this->movePhoneNbrToPNRInd = $movePhoneNbrToPNRInd;

        return $this;
    }


}

