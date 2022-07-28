<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Services;

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
class Buyer implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Buyer';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'buyer_id' => 'string',
        'name' => 'string',
        'phone' => 'string',
        'is_prime_member' => 'bool',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'buyer_id' => null,
        'name' => null,
        'phone' => null,
        'is_prime_member' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'buyer_id' => 'buyerId',
        'name' => 'name',
        'phone' => 'phone',
        'is_prime_member' => 'isPrimeMember',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'buyer_id' => 'setBuyerId',
        'name' => 'setName',
        'phone' => 'setPhone',
        'is_prime_member' => 'setIsPrimeMember',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'buyer_id' => 'getBuyerId',
        'name' => 'getName',
        'phone' => 'getPhone',
        'is_prime_member' => 'getIsPrimeMember',
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
        $this->container['buyer_id'] = $data['buyer_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['is_prime_member'] = $data['is_prime_member'] ?? null;
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
        if (null !== $this->container['buyer_id'] && !\preg_match('/^[A-Z0-9]*$/', $this->container['buyer_id'])) {
            throw new AssertionException("invalid value for 'buyer_id', must be conform to the pattern /^[A-Z0-9]*$/.");
        }
    }

    /**
     * Gets buyer_id.
     */
    public function getBuyerId() : ?string
    {
        return $this->container['buyer_id'];
    }

    /**
     * Sets buyer_id.
     *
     * @param null|string $buyer_id the identifier of the buyer
     */
    public function setBuyerId(?string $buyer_id) : self
    {
        $this->container['buyer_id'] = $buyer_id;

        return $this;
    }

    /**
     * Gets name.
     */
    public function getName() : ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param null|string $name the name of the buyer
     */
    public function setName(?string $name) : self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets phone.
     */
    public function getPhone() : ?string
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone.
     *
     * @param null|string $phone the phone number of the buyer
     */
    public function setPhone(?string $phone) : self
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets is_prime_member.
     */
    public function getIsPrimeMember() : ?bool
    {
        return $this->container['is_prime_member'];
    }

    /**
     * Sets is_prime_member.
     *
     * @param null|bool $is_prime_member when true, the service is for an Amazon Prime buyer
     */
    public function setIsPrimeMember(?bool $is_prime_member) : self
    {
        $this->container['is_prime_member'] = $is_prime_member;

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
