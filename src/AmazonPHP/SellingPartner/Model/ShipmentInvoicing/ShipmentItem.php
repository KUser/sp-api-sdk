<?php declare(strict_types=1);
/**
 * ShipmentItem.
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
 * Selling Partner API for Shipment Invoicing.
 *
 * The Selling Partner API for Shipment Invoicing helps you programmatically retrieve shipment invoice information in the Brazil marketplace for a selling partner’s Fulfillment by Amazon (FBA) orders.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\ShipmentInvoicing;

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShipmentItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ShipmentItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'asin' => 'string',
        'seller_sku' => 'string',
        'order_item_id' => 'string',
        'title' => 'string',
        'quantity_ordered' => 'float',
        'item_price' => '\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\Money',
        'shipping_price' => '\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\Money',
        'gift_wrap_price' => '\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\Money',
        'shipping_discount' => '\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\Money',
        'promotion_discount' => '\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\Money',
        'serial_numbers' => 'string[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'asin' => null,
        'seller_sku' => null,
        'order_item_id' => null,
        'title' => null,
        'quantity_ordered' => null,
        'item_price' => null,
        'shipping_price' => null,
        'gift_wrap_price' => null,
        'shipping_discount' => null,
        'promotion_discount' => null,
        'serial_numbers' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'asin' => 'ASIN',
        'seller_sku' => 'SellerSKU',
        'order_item_id' => 'OrderItemId',
        'title' => 'Title',
        'quantity_ordered' => 'QuantityOrdered',
        'item_price' => 'ItemPrice',
        'shipping_price' => 'ShippingPrice',
        'gift_wrap_price' => 'GiftWrapPrice',
        'shipping_discount' => 'ShippingDiscount',
        'promotion_discount' => 'PromotionDiscount',
        'serial_numbers' => 'SerialNumbers',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'asin' => 'setAsin',
        'seller_sku' => 'setSellerSku',
        'order_item_id' => 'setOrderItemId',
        'title' => 'setTitle',
        'quantity_ordered' => 'setQuantityOrdered',
        'item_price' => 'setItemPrice',
        'shipping_price' => 'setShippingPrice',
        'gift_wrap_price' => 'setGiftWrapPrice',
        'shipping_discount' => 'setShippingDiscount',
        'promotion_discount' => 'setPromotionDiscount',
        'serial_numbers' => 'setSerialNumbers',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'asin' => 'getAsin',
        'seller_sku' => 'getSellerSku',
        'order_item_id' => 'getOrderItemId',
        'title' => 'getTitle',
        'quantity_ordered' => 'getQuantityOrdered',
        'item_price' => 'getItemPrice',
        'shipping_price' => 'getShippingPrice',
        'gift_wrap_price' => 'getGiftWrapPrice',
        'shipping_discount' => 'getShippingDiscount',
        'promotion_discount' => 'getPromotionDiscount',
        'serial_numbers' => 'getSerialNumbers',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['order_item_id'] = $data['order_item_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['quantity_ordered'] = $data['quantity_ordered'] ?? null;
        $this->container['item_price'] = $data['item_price'] ?? null;
        $this->container['shipping_price'] = $data['shipping_price'] ?? null;
        $this->container['gift_wrap_price'] = $data['gift_wrap_price'] ?? null;
        $this->container['shipping_discount'] = $data['shipping_discount'] ?? null;
        $this->container['promotion_discount'] = $data['promotion_discount'] ?? null;
        $this->container['serial_numbers'] = $data['serial_numbers'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        return [];
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets asin.
     */
    public function getAsin() : ?string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param null|string $asin the Amazon Standard Identification Number (ASIN) of the item
     */
    public function setAsin(?string $asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets seller_sku.
     */
    public function getSellerSku() : ?string
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param null|string $seller_sku the seller SKU of the item
     */
    public function setSellerSku(?string $seller_sku) : self
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets order_item_id.
     */
    public function getOrderItemId() : ?string
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id.
     *
     * @param null|string $order_item_id the Amazon-defined identifier for the order item
     */
    public function setOrderItemId(?string $order_item_id) : self
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets title.
     */
    public function getTitle() : ?string
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param null|string $title the name of the item
     */
    public function setTitle(?string $title) : self
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets quantity_ordered.
     */
    public function getQuantityOrdered() : ?float
    {
        return $this->container['quantity_ordered'];
    }

    /**
     * Sets quantity_ordered.
     *
     * @param null|float $quantity_ordered the number of items ordered
     */
    public function setQuantityOrdered(?float $quantity_ordered) : self
    {
        $this->container['quantity_ordered'] = $quantity_ordered;

        return $this;
    }

    /**
     * Gets item_price.
     */
    public function getItemPrice() : ?Money
    {
        return $this->container['item_price'];
    }

    /**
     * Sets item_price.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\Money $item_price item_price
     */
    public function setItemPrice(?Money $item_price) : self
    {
        $this->container['item_price'] = $item_price;

        return $this;
    }

    /**
     * Gets shipping_price.
     */
    public function getShippingPrice() : ?Money
    {
        return $this->container['shipping_price'];
    }

    /**
     * Sets shipping_price.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\Money $shipping_price shipping_price
     */
    public function setShippingPrice(?Money $shipping_price) : self
    {
        $this->container['shipping_price'] = $shipping_price;

        return $this;
    }

    /**
     * Gets gift_wrap_price.
     */
    public function getGiftWrapPrice() : ?Money
    {
        return $this->container['gift_wrap_price'];
    }

    /**
     * Sets gift_wrap_price.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\Money $gift_wrap_price gift_wrap_price
     */
    public function setGiftWrapPrice(?Money $gift_wrap_price) : self
    {
        $this->container['gift_wrap_price'] = $gift_wrap_price;

        return $this;
    }

    /**
     * Gets shipping_discount.
     */
    public function getShippingDiscount() : ?Money
    {
        return $this->container['shipping_discount'];
    }

    /**
     * Sets shipping_discount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\Money $shipping_discount shipping_discount
     */
    public function setShippingDiscount(?Money $shipping_discount) : self
    {
        $this->container['shipping_discount'] = $shipping_discount;

        return $this;
    }

    /**
     * Gets promotion_discount.
     */
    public function getPromotionDiscount() : ?Money
    {
        return $this->container['promotion_discount'];
    }

    /**
     * Sets promotion_discount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\Money $promotion_discount promotion_discount
     */
    public function setPromotionDiscount(?Money $promotion_discount) : self
    {
        $this->container['promotion_discount'] = $promotion_discount;

        return $this;
    }

    /**
     * Gets serial_numbers.
     *
     * @return null|string[]
     */
    public function getSerialNumbers() : ?array
    {
        return $this->container['serial_numbers'];
    }

    /**
     * Sets serial_numbers.
     *
     * @param null|string[] $serial_numbers the list of serial numbers
     */
    public function setSerialNumbers(?array $serial_numbers) : self
    {
        $this->container['serial_numbers'] = $serial_numbers;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
