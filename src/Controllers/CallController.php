<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Controllers;

use VoiceApiCallLib\Exceptions\ApiException;
use VoiceApiCallLib\ConfigurationInterface;
use VoiceApiCallLib\ApiHelper;
use VoiceApiCallLib\Models;
use VoiceApiCallLib\Http\HttpRequest;
use VoiceApiCallLib\Http\HttpResponse;
use VoiceApiCallLib\Http\HttpMethod;
use VoiceApiCallLib\Http\HttpContext;
use VoiceApiCallLib\Http\HttpCallBack;

class CallController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * SUPPORTED **LANGUAGE** :
     *
     * \* id-ID
     * \* en-US
     *
     * **GENDER** :
     *
     * \* MALE
     * \* FEMALE
     *
     * @param Models\Blastrequest $body
     *
     * @return Models\Blast Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function blast(Models\Blastrequest $body): Models\Blast
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/call/blast';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'Blast');
    }
}
