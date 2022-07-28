<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

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
class CreateFulfillmentReturnResult implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'CreateFulfillmentReturnResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'return_items' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnItem[]',
        'invalid_return_items' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\InvalidReturnItem[]',
        'return_authorizations' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnAuthorization[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'return_items' => null,
        'invalid_return_items' => null,
        'return_authorizations' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'return_items' => 'returnItems',
        'invalid_return_items' => 'invalidReturnItems',
        'return_authorizations' => 'returnAuthorizations',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'return_items' => 'setReturnItems',
        'invalid_return_items' => 'setInvalidReturnItems',
        'return_authorizations' => 'setReturnAuthorizations',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'return_items' => 'getReturnItems',
        'invalid_return_items' => 'getInvalidReturnItems',
        'return_authorizations' => 'getReturnAuthorizations',
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
        $this->container['return_items'] = $data['return_items'] ?? null;
        $this->container['invalid_return_items'] = $data['invalid_return_items'] ?? null;
        $this->container['return_authorizations'] = $data['return_authorizations'] ?? null;
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
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
    }

    /**
     * Gets return_items.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnItem[]
     */
    public function getReturnItems() : ?array
    {
        return $this->container['return_items'];
    }

    /**
     * Sets return_items.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnItem[] $return_items An array of items that Amazon accepted for return. Returns empty if no items were accepted for return.
     */
    public function setReturnItems(?array $return_items) : self
    {
        $this->container['return_items'] = $return_items;

        return $this;
    }

    /**
     * Gets invalid_return_items.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\InvalidReturnItem[]
     */
    public function getInvalidReturnItems() : ?array
    {
        return $this->container['invalid_return_items'];
    }

    /**
     * Sets invalid_return_items.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\InvalidReturnItem[] $invalid_return_items an array of invalid return item information
     */
    public function setInvalidReturnItems(?array $invalid_return_items) : self
    {
        $this->container['invalid_return_items'] = $invalid_return_items;

        return $this;
    }

    /**
     * Gets return_authorizations.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnAuthorization[]
     */
    public function getReturnAuthorizations() : ?array
    {
        return $this->container['return_authorizations'];
    }

    /**
     * Sets return_authorizations.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnAuthorization[] $return_authorizations an array of return authorization information
     */
    public function setReturnAuthorizations(?array $return_authorizations) : self
    {
        $this->container['return_authorizations'] = $return_authorizations;

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
