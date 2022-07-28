<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\ShipmentApi;

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
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
final class OrdersSDK
{
    public const API_NAME = 'Orders';

    public const OPERATION_UPDATESHIPMENTSTATUS = 'updateShipmentStatus';

    public const OPERATION_UPDATESHIPMENTSTATUS_PATH = '/orders/v0/orders/{orderId}/shipment';

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
     * Operation updateShipmentStatus.
     *
     * @param AccessToken $accessToken
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param \AmazonPHP\SellingPartner\Model\Orders\UpdateShipmentStatusRequest $payload The request body for the updateShipmentStatus operation. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function updateShipmentStatus(AccessToken $accessToken, string $region, string $order_id, \AmazonPHP\SellingPartner\Model\Orders\UpdateShipmentStatusRequest $payload)
    {
        $request = $this->updateShipmentStatusRequest($accessToken, $region, $order_id, $payload);

        $this->configuration->extensions()->preRequest('Orders', 'updateShipmentStatus', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('Orders', 'updateShipmentStatus')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('Orders', 'updateShipmentStatus'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'Orders',
                        'operation' => 'updateShipmentStatus',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('Orders', 'updateShipmentStatus', $request, $response);

            if ($this->configuration->loggingEnabled('Orders', 'updateShipmentStatus')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('Orders', 'updateShipmentStatus'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'Orders',
                        'operation' => 'updateShipmentStatus',
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

        return null;
    }

    /**
     * Create request for operation 'updateShipmentStatus'.
     *
     * @param AccessToken $accessToken
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param \AmazonPHP\SellingPartner\Model\Orders\UpdateShipmentStatusRequest $payload The request body for the updateShipmentStatus operation. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function updateShipmentStatusRequest(AccessToken $accessToken, string $region, string $order_id, \AmazonPHP\SellingPartner\Model\Orders\UpdateShipmentStatusRequest $payload) : RequestInterface
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (\is_array($order_id) && \count($order_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $order_id when calling updateShipmentStatus'
            );
        }
        // verify the required parameter 'payload' is set
        if ($payload === null || (\is_array($payload) && \count($payload) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payload when calling updateShipmentStatus'
            );
        }

        $resourcePath = '/orders/v0/orders/{orderId}/shipment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        // path params
        if ($order_id !== null) {
            $resourcePath = \str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
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
        if (isset($payload)) {
            if ($headers['content-type'] === ['application/json']) {
                $httpBody = \json_encode(ObjectSerializer::sanitizeForSerialization($payload), JSON_THROW_ON_ERROR);
            } else {
                $httpBody = $payload;
            }

            $request = $request->withBody($this->httpFactory->createStreamFromString($httpBody));
        } elseif (\count($formParams) > 0) {
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
