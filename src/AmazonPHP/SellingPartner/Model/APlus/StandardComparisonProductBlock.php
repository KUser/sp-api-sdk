<?php declare(strict_types=1);
/**
 * StandardComparisonProductBlock.
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
 * Selling Partner API for A+ Content Management.
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\APlus;

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
class StandardComparisonProductBlock implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'StandardComparisonProductBlock';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'position' => 'int',
        'image' => '\AmazonPHP\SellingPartner\Model\APlus\ImageComponent',
        'title' => 'string',
        'asin' => 'string',
        'highlight' => 'bool',
        'metrics' => '\AmazonPHP\SellingPartner\Model\APlus\PlainTextItem[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'position' => null,
        'image' => null,
        'title' => null,
        'asin' => null,
        'highlight' => null,
        'metrics' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'position' => 'position',
        'image' => 'image',
        'title' => 'title',
        'asin' => 'asin',
        'highlight' => 'highlight',
        'metrics' => 'metrics',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'position' => 'setPosition',
        'image' => 'setImage',
        'title' => 'setTitle',
        'asin' => 'setAsin',
        'highlight' => 'setHighlight',
        'metrics' => 'setMetrics',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'position' => 'getPosition',
        'image' => 'getImage',
        'title' => 'getTitle',
        'asin' => 'getAsin',
        'highlight' => 'getHighlight',
        'metrics' => 'getMetrics',
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
        $this->container['position'] = $data['position'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['highlight'] = $data['highlight'] ?? null;
        $this->container['metrics'] = $data['metrics'] ?? null;
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
        $invalidProperties = [];

        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }

        if (($this->container['position'] > 6)) {
            $invalidProperties[] = "invalid value for 'position', must be smaller than or equal to 6.";
        }

        if (($this->container['position'] < 1)) {
            $invalidProperties[] = "invalid value for 'position', must be bigger than or equal to 1.";
        }

        if (null !== $this->container['title'] && (\mb_strlen($this->container['title']) > 80)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 80.";
        }

        if (null !== $this->container['title'] && (\mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if (null !== $this->container['asin'] && (\mb_strlen($this->container['asin']) < 10)) {
            $invalidProperties[] = "invalid value for 'asin', the character length must be bigger than or equal to 10.";
        }

        if (null !== $this->container['metrics'] && (\count($this->container['metrics']) > 10)) {
            $invalidProperties[] = "invalid value for 'metrics', number of items must be less than or equal to 10.";
        }

        if (null !== $this->container['metrics'] && (\count($this->container['metrics']) < 0)) {
            $invalidProperties[] = "invalid value for 'metrics', number of items must be greater than or equal to 0.";
        }

        return $invalidProperties;
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
     * Gets position.
     */
    public function getPosition() : int
    {
        return $this->container['position'];
    }

    /**
     * Sets position.
     *
     * @param int $position The rank or index of this comparison product block within the module. Different blocks cannot occupy the same position within a single module.
     */
    public function setPosition(int $position) : self
    {
        if (($position > 6)) {
            throw new \InvalidArgumentException('invalid value for $position when calling StandardComparisonProductBlock., must be smaller than or equal to 6.');
        }

        if (($position < 1)) {
            throw new \InvalidArgumentException('invalid value for $position when calling StandardComparisonProductBlock., must be bigger than or equal to 1.');
        }

        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets image.
     */
    public function getImage() : ?ImageComponent
    {
        return $this->container['image'];
    }

    /**
     * Sets image.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\ImageComponent $image image
     */
    public function setImage(?ImageComponent $image) : self
    {
        $this->container['image'] = $image;

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
     * @param null|string $title the comparison product title
     */
    public function setTitle(?string $title) : self
    {
        if (null !== $title && (\mb_strlen($title) > 80)) {
            throw new \InvalidArgumentException('invalid length for $title when calling StandardComparisonProductBlock., must be smaller than or equal to 80.');
        }

        if (null !== $title && (\mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling StandardComparisonProductBlock., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
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
     * @param null|string $asin the Amazon Standard Identification Number (ASIN)
     */
    public function setAsin(?string $asin) : self
    {
        if (null !== $asin && (\mb_strlen($asin) < 10)) {
            throw new \InvalidArgumentException('invalid length for $asin when calling StandardComparisonProductBlock., must be bigger than or equal to 10.');
        }

        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets highlight.
     */
    public function getHighlight() : ?bool
    {
        return $this->container['highlight'];
    }

    /**
     * Sets highlight.
     *
     * @param null|bool $highlight determines whether this block of content is visually highlighted
     */
    public function setHighlight(?bool $highlight) : self
    {
        $this->container['highlight'] = $highlight;

        return $this;
    }

    /**
     * Gets metrics.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\APlus\PlainTextItem[]
     */
    public function getMetrics() : ?array
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\PlainTextItem[] $metrics comparison metrics for the product
     */
    public function setMetrics(?array $metrics) : self
    {
        if (null !== $metrics && (\count($metrics) > 10)) {
            throw new \InvalidArgumentException('invalid value for $metrics when calling StandardComparisonProductBlock., number of items must be less than or equal to 10.');
        }

        if (null !== $metrics && (\count($metrics) < 0)) {
            throw new \InvalidArgumentException('invalid length for $metrics when calling StandardComparisonProductBlock., number of items must be greater than or equal to 0.');
        }
        $this->container['metrics'] = $metrics;

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
