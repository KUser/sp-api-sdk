<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\NotificationsApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Notifications.
 *
 * The Selling Partner API for Notifications lets you subscribe to notifications that are relevant to a selling partner's business. Using this API you can create a destination to receive notifications, subscribe to notifications, delete notification subscriptions, and more.  For more information, see the [Notifications Use Case Guide](doc:notifications-api-v1-use-case-guide).
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface NotificationsSDKInterface
{
    public const API_NAME = 'Notifications';

    public const OPERATION_CREATEDESTINATION = 'createDestination';

    public const OPERATION_CREATEDESTINATION_PATH = '/notifications/v1/destinations';

    public const OPERATION_CREATESUBSCRIPTION = 'createSubscription';

    public const OPERATION_CREATESUBSCRIPTION_PATH = '/notifications/v1/subscriptions/{notificationType}';

    public const OPERATION_DELETEDESTINATION = 'deleteDestination';

    public const OPERATION_DELETEDESTINATION_PATH = '/notifications/v1/destinations/{destinationId}';

    public const OPERATION_DELETESUBSCRIPTIONBYID = 'deleteSubscriptionById';

    public const OPERATION_DELETESUBSCRIPTIONBYID_PATH = '/notifications/v1/subscriptions/{notificationType}/{subscriptionId}';

    public const OPERATION_GETDESTINATION = 'getDestination';

    public const OPERATION_GETDESTINATION_PATH = '/notifications/v1/destinations/{destinationId}';

    public const OPERATION_GETDESTINATIONS = 'getDestinations';

    public const OPERATION_GETDESTINATIONS_PATH = '/notifications/v1/destinations';

    public const OPERATION_GETSUBSCRIPTION = 'getSubscription';

    public const OPERATION_GETSUBSCRIPTION_PATH = '/notifications/v1/subscriptions/{notificationType}';

    public const OPERATION_GETSUBSCRIPTIONBYID = 'getSubscriptionById';

    public const OPERATION_GETSUBSCRIPTIONBYID_PATH = '/notifications/v1/subscriptions/{notificationType}/{subscriptionId}';

    /**
     * Operation createDestination.
     *
     * @param \AmazonPHP\SellingPartner\Model\Notifications\CreateDestinationRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\CreateDestinationResponse
     */
    public function createDestination(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\Notifications\CreateDestinationRequest $body) : \AmazonPHP\SellingPartner\Model\Notifications\CreateDestinationResponse;

    /**
     * Operation createSubscription.
     *
     * @param string $notification_type The type of notification.   For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). (required)
     * @param \AmazonPHP\SellingPartner\Model\Notifications\CreateSubscriptionRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\CreateSubscriptionResponse
     */
    public function createSubscription(AccessToken $accessToken, string $region, string $notification_type, \AmazonPHP\SellingPartner\Model\Notifications\CreateSubscriptionRequest $body) : \AmazonPHP\SellingPartner\Model\Notifications\CreateSubscriptionResponse;

    /**
     * Operation deleteDestination.
     *
     * @param string $destination_id The identifier for the destination that you want to delete. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\DeleteDestinationResponse
     */
    public function deleteDestination(AccessToken $accessToken, string $region, string $destination_id) : \AmazonPHP\SellingPartner\Model\Notifications\DeleteDestinationResponse;

    /**
     * Operation deleteSubscriptionById.
     *
     * @param string $subscription_id The identifier for the subscription that you want to delete. (required)
     * @param string $notification_type The type of notification.   For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\DeleteSubscriptionByIdResponse
     */
    public function deleteSubscriptionById(AccessToken $accessToken, string $region, string $subscription_id, string $notification_type) : \AmazonPHP\SellingPartner\Model\Notifications\DeleteSubscriptionByIdResponse;

    /**
     * Operation getDestination.
     *
     * @param string $destination_id The identifier generated when you created the destination. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\GetDestinationResponse
     */
    public function getDestination(AccessToken $accessToken, string $region, string $destination_id) : \AmazonPHP\SellingPartner\Model\Notifications\GetDestinationResponse;

    /**
     * Operation getDestinations.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\GetDestinationsResponse
     */
    public function getDestinations(AccessToken $accessToken, string $region) : \AmazonPHP\SellingPartner\Model\Notifications\GetDestinationsResponse;

    /**
     * Operation getSubscription.
     *
     * @param string $notification_type The type of notification.   For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\GetSubscriptionResponse
     */
    public function getSubscription(AccessToken $accessToken, string $region, string $notification_type) : \AmazonPHP\SellingPartner\Model\Notifications\GetSubscriptionResponse;

    /**
     * Operation getSubscriptionById.
     *
     * @param string $subscription_id The identifier for the subscription that you want to get. (required)
     * @param string $notification_type The type of notification.   For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\GetSubscriptionByIdResponse
     */
    public function getSubscriptionById(AccessToken $accessToken, string $region, string $subscription_id, string $notification_type) : \AmazonPHP\SellingPartner\Model\Notifications\GetSubscriptionByIdResponse;
}
