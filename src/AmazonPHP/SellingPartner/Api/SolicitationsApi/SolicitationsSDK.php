<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\SolicitationsApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use AmazonPHP\SellingPartner\HttpFactory;
use AmazonPHP\SellingPartner\HttpSignatureHeaders;
use AmazonPHP\SellingPartner\ObjectSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Log\LoggerInterface;

/**
 * Selling Partner API for Solicitations.
 *
 * With the Solicitations API you can build applications that send non-critical solicitations to buyers. You can get a list of solicitation types that are available for an order that you specify, then call an operation that sends a solicitation to the buyer for that order. Buyers cannot respond to solicitations sent by this API, and these solicitations do not appear in the Messaging section of Seller Central or in the recipient's Message Center. The Solicitations API returns responses that are formed according to the <a href=https://tools.ietf.org/html/draft-kelly-json-hal-08>JSON Hypertext Application Language</a> (HAL) standard.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
final class SolicitationsSDK implements SolicitationsSDKInterface
{
    private ClientInterface $client;

    private HttpFactory $httpFactory;

    private Configuration $configuration;

    private LoggerInterface $logger;

    public function __construct(ClientInterface $client, HttpFactory $requestFactory, Configuration $configuration, LoggerInterface $logger)
    {
        $this->client = $client;
        $this->httpFactory = $requestFactory;
        $this->configuration = $configuration;
        $this->logger = $logger;
    }

    /**
     * Operation createProductReviewAndSellerFeedbackSolicitation.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a solicitation is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function createProductReviewAndSellerFeedbackSolicitation(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids) : \AmazonPHP\SellingPartner\Model\Solicitations\CreateProductReviewAndSellerFeedbackSolicitationResponse
    {
        $request = $this->createProductReviewAndSellerFeedbackSolicitationRequest($accessToken, $region, $amazon_order_id, $marketplace_ids);

        $this->configuration->extensions()->preRequest('Solicitations', 'createProductReviewAndSellerFeedbackSolicitation', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('Solicitations', 'createProductReviewAndSellerFeedbackSolicitation')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('Solicitations', 'createProductReviewAndSellerFeedbackSolicitation'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'Solicitations',
                        'operation' => 'createProductReviewAndSellerFeedbackSolicitation',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('Solicitations', 'createProductReviewAndSellerFeedbackSolicitation', $request, $response);

            if ($this->configuration->loggingEnabled('Solicitations', 'createProductReviewAndSellerFeedbackSolicitation')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('Solicitations', 'createProductReviewAndSellerFeedbackSolicitation'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'Solicitations',
                        'operation' => 'createProductReviewAndSellerFeedbackSolicitation',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                \sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\Solicitations\CreateProductReviewAndSellerFeedbackSolicitationResponse',
            []
        );
    }

    /**
     * Create request for operation 'createProductReviewAndSellerFeedbackSolicitation'.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a solicitation is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function createProductReviewAndSellerFeedbackSolicitationRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids) : RequestInterface
    {
        // verify the required parameter 'amazon_order_id' is set
        if ($amazon_order_id === null || (\is_array($amazon_order_id) && \count($amazon_order_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $amazon_order_id when calling createProductReviewAndSellerFeedbackSolicitation'
            );
        }
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (\is_array($marketplace_ids) && \count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling createProductReviewAndSellerFeedbackSolicitation'
            );
        }

        if (\count($marketplace_ids) > 1) {
            throw new InvalidArgumentException('invalid value for "$marketplace_ids" when calling SolicitationsApi.createProductReviewAndSellerFeedbackSolicitation, number of items must be less than or equal to 1.');
        }

        $resourcePath = '/solicitations/v1/orders/{amazonOrderId}/solicitations/productReviewAndSellerFeedback';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }

        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toString($marketplace_ids);
        }

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        // path params
        if ($amazon_order_id !== null) {
            $resourcePath = \str_replace(
                '{' . 'amazonOrderId' . '}',
                ObjectSerializer::toPathValue($amazon_order_id),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'POST',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];

                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

    /**
     * Operation getSolicitationActionsForOrder.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which you want a list of available solicitation types. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getSolicitationActionsForOrder(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids) : \AmazonPHP\SellingPartner\Model\Solicitations\GetSolicitationActionsForOrderResponse
    {
        $request = $this->getSolicitationActionsForOrderRequest($accessToken, $region, $amazon_order_id, $marketplace_ids);

        $this->configuration->extensions()->preRequest('Solicitations', 'getSolicitationActionsForOrder', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('Solicitations', 'getSolicitationActionsForOrder')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('Solicitations', 'getSolicitationActionsForOrder'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'Solicitations',
                        'operation' => 'getSolicitationActionsForOrder',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('Solicitations', 'getSolicitationActionsForOrder', $request, $response);

            if ($this->configuration->loggingEnabled('Solicitations', 'getSolicitationActionsForOrder')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('Solicitations', 'getSolicitationActionsForOrder'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'Solicitations',
                        'operation' => 'getSolicitationActionsForOrder',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                \sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\Solicitations\GetSolicitationActionsForOrderResponse',
            []
        );
    }

    /**
     * Create request for operation 'getSolicitationActionsForOrder'.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which you want a list of available solicitation types. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getSolicitationActionsForOrderRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids) : RequestInterface
    {
        // verify the required parameter 'amazon_order_id' is set
        if ($amazon_order_id === null || (\is_array($amazon_order_id) && \count($amazon_order_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $amazon_order_id when calling getSolicitationActionsForOrder'
            );
        }
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (\is_array($marketplace_ids) && \count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling getSolicitationActionsForOrder'
            );
        }

        if (\count($marketplace_ids) > 1) {
            throw new InvalidArgumentException('invalid value for "$marketplace_ids" when calling SolicitationsApi.getSolicitationActionsForOrder, number of items must be less than or equal to 1.');
        }

        $resourcePath = '/solicitations/v1/orders/{amazonOrderId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }

        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toString($marketplace_ids);
        }

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        // path params
        if ($amazon_order_id !== null) {
            $resourcePath = \str_replace(
                '{' . 'amazonOrderId' . '}',
                ObjectSerializer::toPathValue($amazon_order_id),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'GET',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];

                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }
}
