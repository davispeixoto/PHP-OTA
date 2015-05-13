<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType;

use Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType;

/**
 * Class representing TaxCouponInformationAType
 */
class TaxCouponInformationAType
{

    /**
     * The date of birth of the passenger.
     *
     * @property \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * The airport/city code which has been assumed to be the journey turnaround point
     * in the construction of the itinerary by the pricing system.
     *
     * @property string $journeyTurnaroundCityCode
     */
    private $journeyTurnaroundCityCode = null;

    /**
     * The ticket/document number to which the tax coupon data applies.
     *
     * @property TicketDocumentAType[] $ticketDocument
     */
    private $ticketDocument = null;

    /**
     * Gets as birthDate
     *
     * The date of birth of the passenger.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * The date of birth of the passenger.
     *
     * @param \DateTime $birthDate
     * @return self
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Gets as journeyTurnaroundCityCode
     *
     * The airport/city code which has been assumed to be the journey turnaround point
     * in the construction of the itinerary by the pricing system.
     *
     * @return string
     */
    public function getJourneyTurnaroundCityCode()
    {
        return $this->journeyTurnaroundCityCode;
    }

    /**
     * Sets a new journeyTurnaroundCityCode
     *
     * The airport/city code which has been assumed to be the journey turnaround point
     * in the construction of the itinerary by the pricing system.
     *
     * @param string $journeyTurnaroundCityCode
     * @return self
     */
    public function setJourneyTurnaroundCityCode($journeyTurnaroundCityCode)
    {
        $this->journeyTurnaroundCityCode = $journeyTurnaroundCityCode;

        return $this;
    }

    /**
     * Adds as ticketDocument
     *
     * The ticket/document number to which the tax coupon data applies.
     *
     * @return self
     * @param TicketDocumentAType $ticketDocument
     */
    public function addToTicketDocument(TicketDocumentAType $ticketDocument)
    {
        $this->ticketDocument[] = $ticketDocument;

        return $this;
    }

    /**
     * isset ticketDocument
     *
     * The ticket/document number to which the tax coupon data applies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTicketDocument($index)
    {
        if (isset($index)) {
            return isset($this->ticketDocument[$index]);
        }

        return false;
    }

    /**
     * unset ticketDocument
     *
     * The ticket/document number to which the tax coupon data applies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTicketDocument($index)
    {
        if (isset($index)) {
            unset($this->ticketDocument[$index]);
        }
    }

    /**
     * Gets as ticketDocument
     *
     * The ticket/document number to which the tax coupon data applies.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType[]
     */
    public function getTicketDocument()
    {
        return $this->ticketDocument;
    }

    /**
     * Sets a new ticketDocument
     *
     * The ticket/document number to which the tax coupon data applies.
     *
     * @param TicketDocumentAType $ticketDocument
     * @return self
     */
    public function setTicketDocument(TicketDocumentAType $ticketDocument)
    {
        $this->ticketDocument[] = $ticketDocument;

        return $this;
    }


}

