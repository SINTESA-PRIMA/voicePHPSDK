<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class Data4 implements \JsonSerializable
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
     * @var int
     */
    private $agentCode;

    /**
     * @var string
     */
    private $agentName;

    /**
     * @var int
     */
    private $requirePassword;

    /**
     * @var int
     */
    private $agentPassword;

    /**
     * @var int
     */
    private $lastlogin;

    /**
     * @var int
     */
    private $isActive;

    /**
     * @var int
     */
    private $isLogin;

    /**
     * @var string|null
     */
    private $loginChannel;

    /**
     * @var string|null
     */
    private $loginExtension;

    /**
     * @var string|null
     */
    private $loginUniqueid;

    /**
     * @param int $id
     * @param string $customerCode
     * @param int $agentCode
     * @param string $agentName
     * @param int $requirePassword
     * @param int $agentPassword
     * @param int $lastlogin
     * @param int $isActive
     * @param int $isLogin
     */
    public function __construct(
        int $id,
        string $customerCode,
        int $agentCode,
        string $agentName,
        int $requirePassword,
        int $agentPassword,
        int $lastlogin,
        int $isActive,
        int $isLogin
    ) {
        $this->id = $id;
        $this->customerCode = $customerCode;
        $this->agentCode = $agentCode;
        $this->agentName = $agentName;
        $this->requirePassword = $requirePassword;
        $this->agentPassword = $agentPassword;
        $this->lastlogin = $lastlogin;
        $this->isActive = $isActive;
        $this->isLogin = $isLogin;
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
     * Returns Agent Code.
     */
    public function getAgentCode(): int
    {
        return $this->agentCode;
    }

    /**
     * Sets Agent Code.
     *
     * @required
     * @maps agent_code
     */
    public function setAgentCode(int $agentCode): void
    {
        $this->agentCode = $agentCode;
    }

    /**
     * Returns Agent Name.
     */
    public function getAgentName(): string
    {
        return $this->agentName;
    }

    /**
     * Sets Agent Name.
     *
     * @required
     * @maps agent_name
     */
    public function setAgentName(string $agentName): void
    {
        $this->agentName = $agentName;
    }

    /**
     * Returns Require Password.
     */
    public function getRequirePassword(): int
    {
        return $this->requirePassword;
    }

    /**
     * Sets Require Password.
     *
     * @required
     * @maps require_password
     */
    public function setRequirePassword(int $requirePassword): void
    {
        $this->requirePassword = $requirePassword;
    }

    /**
     * Returns Agent Password.
     */
    public function getAgentPassword(): int
    {
        return $this->agentPassword;
    }

    /**
     * Sets Agent Password.
     *
     * @required
     * @maps agent_password
     */
    public function setAgentPassword(int $agentPassword): void
    {
        $this->agentPassword = $agentPassword;
    }

    /**
     * Returns Lastlogin.
     */
    public function getLastlogin(): int
    {
        return $this->lastlogin;
    }

    /**
     * Sets Lastlogin.
     *
     * @required
     * @maps lastlogin
     */
    public function setLastlogin(int $lastlogin): void
    {
        $this->lastlogin = $lastlogin;
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
     * Returns Is Login.
     */
    public function getIsLogin(): int
    {
        return $this->isLogin;
    }

    /**
     * Sets Is Login.
     *
     * @required
     * @maps isLogin
     */
    public function setIsLogin(int $isLogin): void
    {
        $this->isLogin = $isLogin;
    }

    /**
     * Returns Login Channel.
     */
    public function getLoginChannel(): ?string
    {
        return $this->loginChannel;
    }

    /**
     * Sets Login Channel.
     *
     * @maps login_channel
     */
    public function setLoginChannel(?string $loginChannel): void
    {
        $this->loginChannel = $loginChannel;
    }

    /**
     * Returns Login Extension.
     */
    public function getLoginExtension(): ?string
    {
        return $this->loginExtension;
    }

    /**
     * Sets Login Extension.
     *
     * @maps login_extension
     */
    public function setLoginExtension(?string $loginExtension): void
    {
        $this->loginExtension = $loginExtension;
    }

    /**
     * Returns Login Uniqueid.
     */
    public function getLoginUniqueid(): ?string
    {
        return $this->loginUniqueid;
    }

    /**
     * Sets Login Uniqueid.
     *
     * @maps login_uniqueid
     */
    public function setLoginUniqueid(?string $loginUniqueid): void
    {
        $this->loginUniqueid = $loginUniqueid;
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
        $json['id']               = $this->id;
        $json['customer_code']    = $this->customerCode;
        $json['agent_code']       = $this->agentCode;
        $json['agent_name']       = $this->agentName;
        $json['require_password'] = $this->requirePassword;
        $json['agent_password']   = $this->agentPassword;
        $json['lastlogin']        = $this->lastlogin;
        $json['isActive']         = $this->isActive;
        $json['isLogin']          = $this->isLogin;
        $json['login_channel']    = $this->loginChannel;
        $json['login_extension']  = $this->loginExtension;
        $json['login_uniqueid']   = $this->loginUniqueid;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
