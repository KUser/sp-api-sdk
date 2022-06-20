<?php declare(strict_types=1);
/**
 * CurrentStatus.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
class CurrentStatus
{
    /**
     * Possible values of this enum.
     */
    public const IN_TRANSIT = 'IN_TRANSIT';

    public const DELIVERED = 'DELIVERED';

    public const RETURNING = 'RETURNING';

    public const RETURNED = 'RETURNED';

    public const UNDELIVERABLE = 'UNDELIVERABLE';

    public const DELAYED = 'DELAYED';

    public const AVAILABLE_FOR_PICKUP = 'AVAILABLE_FOR_PICKUP';

    public const CUSTOMER_ACTION = 'CUSTOMER_ACTION';

    public const UNKNOWN = 'UNKNOWN';

    public const OUT_FOR_DELIVERY = 'OUT_FOR_DELIVERY';

    public const DELIVERY_ATTEMPTED = 'DELIVERY_ATTEMPTED';

    public const PICKUP_SUCCESSFUL = 'PICKUP_SUCCESSFUL';

    public const PICKUP_CANCELLED = 'PICKUP_CANCELLED';

    public const PICKUP_ATTEMPTED = 'PICKUP_ATTEMPTED';

    public const PICKUP_SCHEDULED = 'PICKUP_SCHEDULED';

    public const RETURN_REQUEST_ACCEPTED = 'RETURN_REQUEST_ACCEPTED';

    public const REFUND_ISSUED = 'REFUND_ISSUED';

    public const RETURN_RECEIVED_IN_FC = 'RETURN_RECEIVED_IN_FC';

    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::IN_TRANSIT,
            self::DELIVERED,
            self::RETURNING,
            self::RETURNED,
            self::UNDELIVERABLE,
            self::DELAYED,
            self::AVAILABLE_FOR_PICKUP,
            self::CUSTOMER_ACTION,
            self::UNKNOWN,
            self::OUT_FOR_DELIVERY,
            self::DELIVERY_ATTEMPTED,
            self::PICKUP_SUCCESSFUL,
            self::PICKUP_CANCELLED,
            self::PICKUP_ATTEMPTED,
            self::PICKUP_SCHEDULED,
            self::RETURN_REQUEST_ACCEPTED,
            self::REFUND_ISSUED,
            self::RETURN_RECEIVED_IN_FC,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
