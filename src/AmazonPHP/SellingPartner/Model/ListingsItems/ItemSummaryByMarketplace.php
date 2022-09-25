<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ListingsItems;

use AmazonPHP\SellingPartner\Exception\AssertionException;
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
class ItemSummaryByMarketplace implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const CONDITION_TYPE_NEW_NEW = 'new_new';

    public const CONDITION_TYPE_NEW_OPEN_BOX = 'new_open_box';

    public const CONDITION_TYPE_NEW_OEM = 'new_oem';

    public const CONDITION_TYPE_REFURBISHED_REFURBISHED = 'refurbished_refurbished';

    public const CONDITION_TYPE_USED_LIKE_NEW = 'used_like_new';

    public const CONDITION_TYPE_USED_VERY_GOOD = 'used_very_good';

    public const CONDITION_TYPE_USED_GOOD = 'used_good';

    public const CONDITION_TYPE_USED_ACCEPTABLE = 'used_acceptable';

    public const CONDITION_TYPE_COLLECTIBLE_LIKE_NEW = 'collectible_like_new';

    public const CONDITION_TYPE_COLLECTIBLE_VERY_GOOD = 'collectible_very_good';

    public const CONDITION_TYPE_COLLECTIBLE_GOOD = 'collectible_good';

    public const CONDITION_TYPE_COLLECTIBLE_ACCEPTABLE = 'collectible_acceptable';

    public const CONDITION_TYPE_CLUB_CLUB = 'club_club';

    public const STATUS_BUYABLE = 'BUYABLE';

    public const STATUS_DISCOVERABLE = 'DISCOVERABLE';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ItemSummaryByMarketplace';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'marketplace_id' => 'string',
        'asin' => 'string',
        'product_type' => 'string',
        'condition_type' => 'string',
        'status' => 'string[]',
        'fn_sku' => 'string',
        'item_name' => 'string',
        'created_date' => '\DateTimeInterface',
        'last_updated_date' => '\DateTimeInterface',
        'main_image' => '\AmazonPHP\SellingPartner\Model\ListingsItems\ItemImage',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'marketplace_id' => null,
        'asin' => null,
        'product_type' => null,
        'condition_type' => null,
        'status' => null,
        'fn_sku' => null,
        'item_name' => null,
        'created_date' => 'date-time',
        'last_updated_date' => 'date-time',
        'main_image' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'asin' => 'asin',
        'product_type' => 'productType',
        'condition_type' => 'conditionType',
        'status' => 'status',
        'fn_sku' => 'fnSku',
        'item_name' => 'itemName',
        'created_date' => 'createdDate',
        'last_updated_date' => 'lastUpdatedDate',
        'main_image' => 'mainImage',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'asin' => 'setAsin',
        'product_type' => 'setProductType',
        'condition_type' => 'setConditionType',
        'status' => 'setStatus',
        'fn_sku' => 'setFnSku',
        'item_name' => 'setItemName',
        'created_date' => 'setCreatedDate',
        'last_updated_date' => 'setLastUpdatedDate',
        'main_image' => 'setMainImage',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'asin' => 'getAsin',
        'product_type' => 'getProductType',
        'condition_type' => 'getConditionType',
        'status' => 'getStatus',
        'fn_sku' => 'getFnSku',
        'item_name' => 'getItemName',
        'created_date' => 'getCreatedDate',
        'last_updated_date' => 'getLastUpdatedDate',
        'main_image' => 'getMainImage',
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
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['product_type'] = $data['product_type'] ?? null;
        $this->container['condition_type'] = $data['condition_type'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['fn_sku'] = $data['fn_sku'] ?? null;
        $this->container['item_name'] = $data['item_name'] ?? null;
        $this->container['created_date'] = $data['created_date'] ?? null;
        $this->container['last_updated_date'] = $data['last_updated_date'] ?? null;
        $this->container['main_image'] = $data['main_image'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getConditionTypeAllowableValues() : array
    {
        return [
            self::CONDITION_TYPE_NEW_NEW,
            self::CONDITION_TYPE_NEW_OPEN_BOX,
            self::CONDITION_TYPE_NEW_OEM,
            self::CONDITION_TYPE_REFURBISHED_REFURBISHED,
            self::CONDITION_TYPE_USED_LIKE_NEW,
            self::CONDITION_TYPE_USED_VERY_GOOD,
            self::CONDITION_TYPE_USED_GOOD,
            self::CONDITION_TYPE_USED_ACCEPTABLE,
            self::CONDITION_TYPE_COLLECTIBLE_LIKE_NEW,
            self::CONDITION_TYPE_COLLECTIBLE_VERY_GOOD,
            self::CONDITION_TYPE_COLLECTIBLE_GOOD,
            self::CONDITION_TYPE_COLLECTIBLE_ACCEPTABLE,
            self::CONDITION_TYPE_CLUB_CLUB,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getStatusAllowableValues() : array
    {
        return [
            self::STATUS_BUYABLE,
            self::STATUS_DISCOVERABLE,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['marketplace_id'] === null) {
            throw new AssertionException("'marketplace_id' can't be null");
        }

        if ($this->container['asin'] === null) {
            throw new AssertionException("'asin' can't be null");
        }

        if ($this->container['product_type'] === null) {
            throw new AssertionException("'product_type' can't be null");
        }

        $allowedValues = $this->getConditionTypeAllowableValues();

        if (null !== $this->container['condition_type'] && !\in_array($this->container['condition_type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'condition_type', must be one of '%s'",
                    $this->container['condition_type'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['status'] === null) {
            throw new AssertionException("'status' can't be null");
        }

        if ($this->container['item_name'] === null) {
            throw new AssertionException("'item_name' can't be null");
        }

        if ($this->container['created_date'] === null) {
            throw new AssertionException("'created_date' can't be null");
        }

        if ($this->container['last_updated_date'] === null) {
            throw new AssertionException("'last_updated_date' can't be null");
        }

        if ($this->container['main_image'] !== null) {
            $this->container['main_image']->validate();
        }
    }

    /**
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id A marketplace identifier. Identifies the Amazon marketplace for the listings item.
     */
    public function setMarketplaceId(string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets asin.
     */
    public function getAsin() : string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param string $asin amazon Standard Identification Number (ASIN) of the listings item
     */
    public function setAsin(string $asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets product_type.
     */
    public function getProductType() : string
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type.
     *
     * @param string $product_type the Amazon product type of the listings item
     */
    public function setProductType(string $product_type) : self
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets condition_type.
     */
    public function getConditionType() : ?string
    {
        return $this->container['condition_type'];
    }

    /**
     * Sets condition_type.
     *
     * @param null|string $condition_type identifies the condition of the listings item
     */
    public function setConditionType(?string $condition_type) : self
    {
        $this->container['condition_type'] = $condition_type;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return string[]
     */
    public function getStatus() : array
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string[] $status statuses that apply to the listings item
     */
    public function setStatus(array $status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets fn_sku.
     */
    public function getFnSku() : ?string
    {
        return $this->container['fn_sku'];
    }

    /**
     * Sets fn_sku.
     *
     * @param null|string $fn_sku fulfillment network stock keeping unit is an identifier used by Amazon fulfillment centers to identify each unique item
     */
    public function setFnSku(?string $fn_sku) : self
    {
        $this->container['fn_sku'] = $fn_sku;

        return $this;
    }

    /**
     * Gets item_name.
     */
    public function getItemName() : string
    {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name.
     *
     * @param string $item_name name, or title, associated with an Amazon catalog item
     */
    public function setItemName(string $item_name) : self
    {
        $this->container['item_name'] = $item_name;

        return $this;
    }

    /**
     * Gets created_date.
     */
    public function getCreatedDate() : \DateTimeInterface
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date.
     *
     * @param \DateTimeInterface $created_date date the listings item was created, in ISO 8601 format
     */
    public function setCreatedDate(\DateTimeInterface $created_date) : self
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets last_updated_date.
     */
    public function getLastUpdatedDate() : \DateTimeInterface
    {
        return $this->container['last_updated_date'];
    }

    /**
     * Sets last_updated_date.
     *
     * @param \DateTimeInterface $last_updated_date date the listings item was last updated, in ISO 8601 format
     */
    public function setLastUpdatedDate(\DateTimeInterface $last_updated_date) : self
    {
        $this->container['last_updated_date'] = $last_updated_date;

        return $this;
    }

    /**
     * Gets main_image.
     */
    public function getMainImage() : ?ItemImage
    {
        return $this->container['main_image'];
    }

    /**
     * Sets main_image.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ListingsItems\ItemImage $main_image main_image
     */
    public function setMainImage(?ItemImage $main_image) : self
    {
        $this->container['main_image'] = $main_image;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
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
    #[\ReturnTypeWillChange]
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
