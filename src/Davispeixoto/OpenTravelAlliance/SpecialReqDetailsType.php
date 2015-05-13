<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SpecialReqDetailsType
 *
 * Remarks, OSIs, Seat Requests etc.
 * XSD Type: SpecialReqDetailsType
 */
class SpecialReqDetailsType
{

    /**
     * A collection of Seat Request
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType[]
     * $seatRequests
     */
    private $seatRequests = null;

    /**
     * A collection of Special Service Request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType[]
     * $specialServiceRequests
     */
    private $specialServiceRequests = null;

    /**
     * A collection of Other Service Information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType[]
     * $otherServiceInformations
     */
    private $otherServiceInformations = null;

    /**
     * A collection of Remark.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\RemarksAType\RemarkAType[]
     * $remarks
     */
    private $remarks = null;

    /**
     * A collection of Special Remark.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType[]
     * $specialRemarks
     */
    private $specialRemarks = null;

    /**
     * Adds as seatRequest
     *
     * A collection of Seat Request
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType
     * $seatRequest
     */
    public function addToSeatRequests(
        \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType $seatRequest
    ) {
        $this->seatRequests[] = $seatRequest;

        return $this;
    }

    /**
     * isset seatRequests
     *
     * A collection of Seat Request
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeatRequests($index)
    {
        return isset($this->seatRequests[$index]);
    }

    /**
     * unset seatRequests
     *
     * A collection of Seat Request
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeatRequests($index)
    {
        unset($this->seatRequests[$index]);
    }

    /**
     * Gets as seatRequests
     *
     * A collection of Seat Request
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType[]
     */
    public function getSeatRequests()
    {
        return $this->seatRequests;
    }

    /**
     * Sets a new seatRequests
     *
     * A collection of Seat Request
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType[]
     * $seatRequests
     * @return self
     */
    public function setSeatRequests(array $seatRequests)
    {
        $this->seatRequests = $seatRequests;

        return $this;
    }

    /**
     * Adds as specialServiceRequest
     *
     * A collection of Special Service Request.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType
     * $specialServiceRequest
     */
    public function addToSpecialServiceRequests(
        \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType $specialServiceRequest
    ) {
        $this->specialServiceRequests[] = $specialServiceRequest;

        return $this;
    }

    /**
     * isset specialServiceRequests
     *
     * A collection of Special Service Request.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialServiceRequests($index)
    {
        return isset($this->specialServiceRequests[$index]);
    }

    /**
     * unset specialServiceRequests
     *
     * A collection of Special Service Request.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialServiceRequests($index)
    {
        unset($this->specialServiceRequests[$index]);
    }

    /**
     * Gets as specialServiceRequests
     *
     * A collection of Special Service Request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType[]
     */
    public function getSpecialServiceRequests()
    {
        return $this->specialServiceRequests;
    }

    /**
     * Sets a new specialServiceRequests
     *
     * A collection of Special Service Request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType[]
     * $specialServiceRequests
     * @return self
     */
    public function setSpecialServiceRequests(array $specialServiceRequests)
    {
        $this->specialServiceRequests = $specialServiceRequests;

        return $this;
    }

    /**
     * Adds as otherServiceInformation
     *
     * A collection of Other Service Information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType
     * $otherServiceInformation
     */
    public function addToOtherServiceInformations(
        \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType $otherServiceInformation
    ) {
        $this->otherServiceInformations[] = $otherServiceInformation;

        return $this;
    }

    /**
     * isset otherServiceInformations
     *
     * A collection of Other Service Information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOtherServiceInformations($index)
    {
        return isset($this->otherServiceInformations[$index]);
    }

    /**
     * unset otherServiceInformations
     *
     * A collection of Other Service Information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOtherServiceInformations($index)
    {
        unset($this->otherServiceInformations[$index]);
    }

    /**
     * Gets as otherServiceInformations
     *
     * A collection of Other Service Information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType[]
     */
    public function getOtherServiceInformations()
    {
        return $this->otherServiceInformations;
    }

    /**
     * Sets a new otherServiceInformations
     *
     * A collection of Other Service Information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType[]
     * $otherServiceInformations
     * @return self
     */
    public function setOtherServiceInformations(array $otherServiceInformations)
    {
        $this->otherServiceInformations = $otherServiceInformations;

        return $this;
    }

    /**
     * Adds as remark
     *
     * A collection of Remark.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\RemarksAType\RemarkAType
     * $remark
     */
    public function addToRemarks(
        \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\RemarksAType\RemarkAType $remark
    ) {
        $this->remarks[] = $remark;

        return $this;
    }

    /**
     * isset remarks
     *
     * A collection of Remark.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * A collection of Remark.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * A collection of Remark.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\RemarksAType\RemarkAType[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * A collection of Remark.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\RemarksAType\RemarkAType[]
     * $remarks
     * @return self
     */
    public function setRemarks(array $remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Adds as specialRemark
     *
     * A collection of Special Remark.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType
     * $specialRemark
     */
    public function addToSpecialRemarks(
        \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType $specialRemark
    ) {
        $this->specialRemarks[] = $specialRemark;

        return $this;
    }

    /**
     * isset specialRemarks
     *
     * A collection of Special Remark.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialRemarks($index)
    {
        return isset($this->specialRemarks[$index]);
    }

    /**
     * unset specialRemarks
     *
     * A collection of Special Remark.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialRemarks($index)
    {
        unset($this->specialRemarks[$index]);
    }

    /**
     * Gets as specialRemarks
     *
     * A collection of Special Remark.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType[]
     */
    public function getSpecialRemarks()
    {
        return $this->specialRemarks;
    }

    /**
     * Sets a new specialRemarks
     *
     * A collection of Special Remark.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType[]
     * $specialRemarks
     * @return self
     */
    public function setSpecialRemarks(array $specialRemarks)
    {
        $this->specialRemarks = $specialRemarks;

        return $this;
    }


}

