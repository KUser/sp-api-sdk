<?php declare(strict_types=1);
/**
 * PackageDimensions.
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
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

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
class PackageDimensions implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'PackageDimensions';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'length' => 'double',
        'width' => 'double',
        'height' => 'double',
        'unit' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\UnitOfLength',
        'predefined_package_dimensions' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\PredefinedPackageDimensions',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'length' => 'double',
        'width' => 'double',
        'height' => 'double',
        'unit' => null,
        'predefined_package_dimensions' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'length' => 'Length',
        'width' => 'Width',
        'height' => 'Height',
        'unit' => 'Unit',
        'predefined_package_dimensions' => 'PredefinedPackageDimensions',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'length' => 'setLength',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'unit' => 'setUnit',
        'predefined_package_dimensions' => 'setPredefinedPackageDimensions',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'length' => 'getLength',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'unit' => 'getUnit',
        'predefined_package_dimensions' => 'getPredefinedPackageDimensions',
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
        $this->container['length'] = $data['length'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
        $this->container['predefined_package_dimensions'] = $data['predefined_package_dimensions'] ?? null;
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
     * Gets length.
     */
    public function getLength() : ?float
    {
        return $this->container['length'];
    }

    /**
     * Sets length.
     *
     * @param null|float $length length
     */
    public function setLength(?float $length) : self
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets width.
     */
    public function getWidth() : ?float
    {
        return $this->container['width'];
    }

    /**
     * Sets width.
     *
     * @param null|float $width width
     */
    public function setWidth(?float $width) : self
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height.
     */
    public function getHeight() : ?float
    {
        return $this->container['height'];
    }

    /**
     * Sets height.
     *
     * @param null|float $height height
     */
    public function setHeight(?float $height) : self
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets unit.
     */
    public function getUnit() : ?UnitOfLength
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\UnitOfLength $unit unit
     */
    public function setUnit(?UnitOfLength $unit) : self
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets predefined_package_dimensions.
     */
    public function getPredefinedPackageDimensions() : ?PredefinedPackageDimensions
    {
        return $this->container['predefined_package_dimensions'];
    }

    /**
     * Sets predefined_package_dimensions.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\PredefinedPackageDimensions $predefined_package_dimensions predefined_package_dimensions
     */
    public function setPredefinedPackageDimensions(?PredefinedPackageDimensions $predefined_package_dimensions) : self
    {
        $this->container['predefined_package_dimensions'] = $predefined_package_dimensions;

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
