<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ProductPricing;

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
class DetailedShippingTimeType implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const AVAILABILITY_TYPE_NOW = 'NOW';

    public const AVAILABILITY_TYPE_FUTURE_WITHOUT_DATE = 'FUTURE_WITHOUT_DATE';

    public const AVAILABILITY_TYPE_FUTURE_WITH_DATE = 'FUTURE_WITH_DATE';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'DetailedShippingTimeType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'minimum_hours' => 'int',
        'maximum_hours' => 'int',
        'available_date' => 'string',
        'availability_type' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'minimum_hours' => 'int64',
        'maximum_hours' => 'int64',
        'available_date' => null,
        'availability_type' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'minimum_hours' => 'minimumHours',
        'maximum_hours' => 'maximumHours',
        'available_date' => 'availableDate',
        'availability_type' => 'availabilityType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'minimum_hours' => 'setMinimumHours',
        'maximum_hours' => 'setMaximumHours',
        'available_date' => 'setAvailableDate',
        'availability_type' => 'setAvailabilityType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'minimum_hours' => 'getMinimumHours',
        'maximum_hours' => 'getMaximumHours',
        'available_date' => 'getAvailableDate',
        'availability_type' => 'getAvailabilityType',
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
        $this->container['minimum_hours'] = $data['minimum_hours'] ?? null;
        $this->container['maximum_hours'] = $data['maximum_hours'] ?? null;
        $this->container['available_date'] = $data['available_date'] ?? null;
        $this->container['availability_type'] = $data['availability_type'] ?? null;
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
    public function getAvailabilityTypeAllowableValues() : array
    {
        return [
            self::AVAILABILITY_TYPE_NOW,
            self::AVAILABILITY_TYPE_FUTURE_WITHOUT_DATE,
            self::AVAILABILITY_TYPE_FUTURE_WITH_DATE,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        $allowedValues = $this->getAvailabilityTypeAllowableValues();

        if (null !== $this->container['availability_type'] && !\in_array($this->container['availability_type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'availability_type', must be one of '%s'",
                    $this->container['availability_type'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets minimum_hours.
     */
    public function getMinimumHours() : ?int
    {
        return $this->container['minimum_hours'];
    }

    /**
     * Sets minimum_hours.
     *
     * @param null|int $minimum_hours the minimum time, in hours, that the item will likely be shipped after the order has been placed
     */
    public function setMinimumHours(?int $minimum_hours) : self
    {
        $this->container['minimum_hours'] = $minimum_hours;

        return $this;
    }

    /**
     * Gets maximum_hours.
     */
    public function getMaximumHours() : ?int
    {
        return $this->container['maximum_hours'];
    }

    /**
     * Sets maximum_hours.
     *
     * @param null|int $maximum_hours the maximum time, in hours, that the item will likely be shipped after the order has been placed
     */
    public function setMaximumHours(?int $maximum_hours) : self
    {
        $this->container['maximum_hours'] = $maximum_hours;

        return $this;
    }

    /**
     * Gets available_date.
     */
    public function getAvailableDate() : ?string
    {
        return $this->container['available_date'];
    }

    /**
     * Sets available_date.
     *
     * @param null|string $available_date The date when the item will be available for shipping. Only displayed for items that are not currently available for shipping.
     */
    public function setAvailableDate(?string $available_date) : self
    {
        $this->container['available_date'] = $available_date;

        return $this;
    }

    /**
     * Gets availability_type.
     */
    public function getAvailabilityType() : ?string
    {
        return $this->container['availability_type'];
    }

    /**
     * Sets availability_type.
     *
     * @param null|string $availability_type Indicates whether the item is available for shipping now, or on a known or an unknown date in the future. If known, the availableDate property indicates the date that the item will be available for shipping. Possible values: NOW, FUTURE_WITHOUT_DATE, FUTURE_WITH_DATE.
     */
    public function setAvailabilityType(?string $availability_type) : self
    {
        $this->container['availability_type'] = $availability_type;

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
