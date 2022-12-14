<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib;

use VoiceApiCallLib\Controllers;

/**
 * VoiceApiCall client class
 */
class VoiceApiCallClient implements ConfigurationInterface
{
    private $call;
    private $masking;
    private $translation;
    private $device;
    private $agent;
    private $queue;
    private $route;
    private $iVR;
    private $conversationAI;
    private $dID;

    private $timeout = ConfigurationDefaults::TIMEOUT;
    private $enableRetries = ConfigurationDefaults::ENABLE_RETRIES;
    private $numberOfRetries = ConfigurationDefaults::NUMBER_OF_RETRIES;
    private $retryInterval = ConfigurationDefaults::RETRY_INTERVAL;
    private $backOffFactor = ConfigurationDefaults::BACK_OFF_FACTOR;
    private $maximumRetryWaitTime = ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    private $retryOnTimeout = ConfigurationDefaults::RETRY_ON_TIMEOUT;
    private $httpStatusCodesToRetry = ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    private $httpMethodsToRetry = ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    private $environment = ConfigurationDefaults::ENVIRONMENT;
    private $username = ConfigurationDefaults::USERNAME;
    private $password = ConfigurationDefaults::PASSWORD;
    private $basicAuthManager;
    private $authManagers = [];
    private $httpCallback;

    public function __construct(array $configOptions = null)
    {
        if (isset($configOptions['timeout'])) {
            $this->timeout = $configOptions['timeout'];
        }
        if (isset($configOptions['enableRetries'])) {
            $this->enableRetries = $configOptions['enableRetries'];
        }
        if (isset($configOptions['numberOfRetries'])) {
            $this->numberOfRetries = $configOptions['numberOfRetries'];
        }
        if (isset($configOptions['retryInterval'])) {
            $this->retryInterval = $configOptions['retryInterval'];
        }
        if (isset($configOptions['backOffFactor'])) {
            $this->backOffFactor = $configOptions['backOffFactor'];
        }
        if (isset($configOptions['maximumRetryWaitTime'])) {
            $this->maximumRetryWaitTime = $configOptions['maximumRetryWaitTime'];
        }
        if (isset($configOptions['retryOnTimeout'])) {
            $this->retryOnTimeout = $configOptions['retryOnTimeout'];
        }
        if (isset($configOptions['httpStatusCodesToRetry'])) {
            $this->httpStatusCodesToRetry = $configOptions['httpStatusCodesToRetry'];
        }
        if (isset($configOptions['httpMethodsToRetry'])) {
            $this->httpMethodsToRetry = $configOptions['httpMethodsToRetry'];
        }
        if (isset($configOptions['environment'])) {
            $this->environment = $configOptions['environment'];
        }
        if (isset($configOptions['username'])) {
            $this->username = $configOptions['username'];
        }
        if (isset($configOptions['password'])) {
            $this->password = $configOptions['password'];
        }
        if (isset($configOptions['httpCallback'])) {
            $this->httpCallback = $configOptions['httpCallback'];
        }

        $this->basicAuthManager = new BasicAuthManager($this->username, $this->password);
        $this->authManagers['global'] = $this->basicAuthManager;
    }

    /**
     * Get the client configuration as an associative array
     */
    public function getConfiguration(): array
    {
        $configMap = [];

        if (isset($this->timeout)) {
            $configMap['timeout'] = $this->timeout;
        }
        if (isset($this->enableRetries)) {
            $configMap['enableRetries'] = $this->enableRetries;
        }
        if (isset($this->numberOfRetries)) {
            $configMap['numberOfRetries'] = $this->numberOfRetries;
        }
        if (isset($this->retryInterval)) {
            $configMap['retryInterval'] = $this->retryInterval;
        }
        if (isset($this->backOffFactor)) {
            $configMap['backOffFactor'] = $this->backOffFactor;
        }
        if (isset($this->maximumRetryWaitTime)) {
            $configMap['maximumRetryWaitTime'] = $this->maximumRetryWaitTime;
        }
        if (isset($this->retryOnTimeout)) {
            $configMap['retryOnTimeout'] = $this->retryOnTimeout;
        }
        if (isset($this->httpStatusCodesToRetry)) {
            $configMap['httpStatusCodesToRetry'] = $this->httpStatusCodesToRetry;
        }
        if (isset($this->httpMethodsToRetry)) {
            $configMap['httpMethodsToRetry'] = $this->httpMethodsToRetry;
        }
        if (isset($this->environment)) {
            $configMap['environment'] = $this->environment;
        }
        if ($this->basicAuthManager->getUsername() !== null) {
            $configMap['username'] = $this->basicAuthManager->getUsername();
        }
        if ($this->basicAuthManager->getPassword() !== null) {
            $configMap['password'] = $this->basicAuthManager->getPassword();
        }
        if (isset($this->httpCallback)) {
            $configMap['httpCallback'] = $this->httpCallback;
        }

        return $configMap;
    }

    /**
     * Clone this client and override given configuration options
     */
    public function withConfiguration(array $configOptions): self
    {
        return new self(\array_merge($this->getConfiguration(), $configOptions));
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->enableRetries;
    }

    public function getNumberOfRetries(): int
    {
        return $this->numberOfRetries;
    }

    public function getRetryInterval(): float
    {
        return $this->retryInterval;
    }

    public function getBackOffFactor(): float
    {
        return $this->backOffFactor;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->maximumRetryWaitTime;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->retryOnTimeout;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->httpStatusCodesToRetry;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->httpMethodsToRetry;
    }

    public function getEnvironment(): string
    {
        return $this->environment;
    }

    public function getBasicAuthCredentials(): ?BasicAuthCredentials
    {
        return $this->basicAuthManager;
    }

    /**
     * Get the base uri for a given server in the current environment
     *
     * @param  string $server Server name
     *
     * @return string         Base URI
     */
    public function getBaseUri(string $server = Server::SERVER_1): string
    {
        return static::ENVIRONMENT_MAP[$this->environment][$server];
    }

    /**
     * Returns Call Controller
     */
    public function getCallController(): Controllers\CallController
    {
        if ($this->call == null) {
            $this->call = new Controllers\CallController($this, $this->authManagers, $this->httpCallback);
        }
        return $this->call;
    }

    /**
     * Returns Masking Controller
     */
    public function getMaskingController(): Controllers\MaskingController
    {
        if ($this->masking == null) {
            $this->masking = new Controllers\MaskingController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->masking;
    }

    /**
     * Returns Translation Controller
     */
    public function getTranslationController(): Controllers\TranslationController
    {
        if ($this->translation == null) {
            $this->translation = new Controllers\TranslationController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->translation;
    }

    /**
     * Returns Device Controller
     */
    public function getDeviceController(): Controllers\DeviceController
    {
        if ($this->device == null) {
            $this->device = new Controllers\DeviceController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->device;
    }

    /**
     * Returns Agent Controller
     */
    public function getAgentController(): Controllers\AgentController
    {
        if ($this->agent == null) {
            $this->agent = new Controllers\AgentController($this, $this->authManagers, $this->httpCallback);
        }
        return $this->agent;
    }

    /**
     * Returns Queue Controller
     */
    public function getQueueController(): Controllers\QueueController
    {
        if ($this->queue == null) {
            $this->queue = new Controllers\QueueController($this, $this->authManagers, $this->httpCallback);
        }
        return $this->queue;
    }

    /**
     * Returns Route Controller
     */
    public function getRouteController(): Controllers\RouteController
    {
        if ($this->route == null) {
            $this->route = new Controllers\RouteController($this, $this->authManagers, $this->httpCallback);
        }
        return $this->route;
    }

    /**
     * Returns IVR Controller
     */
    public function getIVRController(): Controllers\IVRController
    {
        if ($this->iVR == null) {
            $this->iVR = new Controllers\IVRController($this, $this->authManagers, $this->httpCallback);
        }
        return $this->iVR;
    }

    /**
     * Returns Conversation AI Controller
     */
    public function getConversationAIController(): Controllers\ConversationAIController
    {
        if ($this->conversationAI == null) {
            $this->conversationAI = new Controllers\ConversationAIController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->conversationAI;
    }

    /**
     * Returns DID Controller
     */
    public function getDIDController(): Controllers\DIDController
    {
        if ($this->dID == null) {
            $this->dID = new Controllers\DIDController($this, $this->authManagers, $this->httpCallback);
        }
        return $this->dID;
    }

    /**
     * A map of all baseurls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [
        Environment::MDN => [
            Server::SERVER_1 => 'https://voiceapi.mdnit.com',
        ],
        Environment::SINTESA => [
            Server::SERVER_1 => 'https://api.sintesa-prima.com',
        ],
    ];
}
