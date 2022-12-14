<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class IncomingRoute implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $transactionId;

    /**
     * @var string
     */
    private $customerCode;

    /**
     * @var string
     */
    private $did;

    /**
     * @var string
     */
    private $destination;

    /**
     * @var string|null
     */
    private $destinationDetail;

    /**
     * @var string
     */
    private $createDate;

    /**
     * @var int
     */
    private $isActive;

    /**
     * @param int $id
     * @param string $customerCode
     * @param string $did
     * @param string $destination
     * @param string $createDate
     * @param int $isActive
     */
    public function __construct(
        int $id,
        string $customerCode,
        string $did,
        string $destination,
        string $createDate,
        int $isActive
    ) {
        $this->id = $id;
        $this->customerCode = $customerCode;
        $this->did = $did;
        $this->destination = $destination;
        $this->createDate = $createDate;
        $this->isActive = $isActive;
    }

    /**
     * Returns Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Transaction Id.
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     *
     * @maps transaction_id
     */
    public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Returns Customer Code.
     */
    public function getCustomerCode(): string
    {
        return $this->customerCode;
    }

    /**
     * Sets Customer Code.
     *
     * @required
     * @maps customer_code
     */
    public function setCustomerCode(string $customerCode): void
    {
        $this->customerCode = $customerCode;
    }

    /**
     * Returns Did.
     */
    public function getDid(): string
    {
        return $this->did;
    }

    /**
     * Sets Did.
     *
     * @required
     * @maps did
     */
    public function setDid(string $did): void
    {
        $this->did = $did;
    }

    /**
     * Returns Destination.
     */
    public function getDestination(): string
    {
        return $this->destination;
    }

    /**
     * Sets Destination.
     *
     * @required
     * @maps destination
     */
    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }

    /**
     * Returns Destination Detail.
     */
    public function getDestinationDetail(): ?string
    {
        return $this->destinationDetail;
    }

    /**
     * Sets Destination Detail.
     *
     * @maps destination_detail
     */
    public function setDestinationDetail(?string $destinationDetail): void
    {
        $this->destinationDetail = $destinationDetail;
    }

    /**
     * Returns Create Date.
     */
    public function getCreateDate(): string
    {
        return $this->createDate;
    }

    /**
     * Sets Create Date.
     *
     * @required
     * @maps create_date
     */
    public function setCreateDate(string $createDate): void
    {
        $this->createDate = $createDate;
    }

    /**
     * Returns Is Active.
     */
    public function getIsActive(): int
    {
        return $this->isActive;
    }

    /**
     * Sets Is Active.
     *
     * @required
     * @maps isActive
     */
    public function setIsActive(int $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['id']                 = $this->id;
        $json['transaction_id']     = $this->transactionId;
        $json['customer_code']      = $this->customerCode;
        $json['did']                = $this->did;
        $json['destination']        = $this->destination;
        $json['destination_detail'] = $this->destinationDetail;
        $json['create_date']        = $this->createDate;
        $json['isActive']           = $this->isActive;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
