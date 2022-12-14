<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class OutgoingRoute implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $customerCode;

    /**
     * @var string
     */
    private $extension;

    /**
     * @var string
     */
    private $routeTo;

    /**
     * @var string
     */
    private $routeDetail;

    /**
     * @var string
     */
    private $techPrefix;

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
     * @param string $extension
     * @param string $routeTo
     * @param string $routeDetail
     * @param string $techPrefix
     * @param string $createDate
     * @param int $isActive
     */
    public function __construct(
        int $id,
        string $customerCode,
        string $extension,
        string $routeTo,
        string $routeDetail,
        string $techPrefix,
        string $createDate,
        int $isActive
    ) {
        $this->id = $id;
        $this->customerCode = $customerCode;
        $this->extension = $extension;
        $this->routeTo = $routeTo;
        $this->routeDetail = $routeDetail;
        $this->techPrefix = $techPrefix;
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
     * Returns Extension.
     */
    public function getExtension(): string
    {
        return $this->extension;
    }

    /**
     * Sets Extension.
     *
     * @required
     * @maps extension
     */
    public function setExtension(string $extension): void
    {
        $this->extension = $extension;
    }

    /**
     * Returns Route To.
     */
    public function getRouteTo(): string
    {
        return $this->routeTo;
    }

    /**
     * Sets Route To.
     *
     * @required
     * @maps route_to
     */
    public function setRouteTo(string $routeTo): void
    {
        $this->routeTo = $routeTo;
    }

    /**
     * Returns Route Detail.
     */
    public function getRouteDetail(): string
    {
        return $this->routeDetail;
    }

    /**
     * Sets Route Detail.
     *
     * @required
     * @maps route_detail
     */
    public function setRouteDetail(string $routeDetail): void
    {
        $this->routeDetail = $routeDetail;
    }

    /**
     * Returns Tech Prefix.
     */
    public function getTechPrefix(): string
    {
        return $this->techPrefix;
    }

    /**
     * Sets Tech Prefix.
     *
     * @required
     * @maps tech_prefix
     */
    public function setTechPrefix(string $techPrefix): void
    {
        $this->techPrefix = $techPrefix;
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
        $json['id']            = $this->id;
        $json['customer_code'] = $this->customerCode;
        $json['extension']     = $this->extension;
        $json['route_to']      = $this->routeTo;
        $json['route_detail']  = $this->routeDetail;
        $json['tech_prefix']   = $this->techPrefix;
        $json['create_date']   = $this->createDate;
        $json['isActive']      = $this->isActive;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
