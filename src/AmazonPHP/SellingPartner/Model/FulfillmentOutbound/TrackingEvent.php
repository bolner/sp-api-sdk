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
class TrackingEvent implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'TrackingEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'event_date' => '\DateTime',
        'event_address' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\TrackingAddress',
        'event_code' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\EventCode',
        'event_description' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'event_date' => 'date-time',
        'event_address' => null,
        'event_code' => null,
        'event_description' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'event_date' => 'eventDate',
        'event_address' => 'eventAddress',
        'event_code' => 'eventCode',
        'event_description' => 'eventDescription',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'event_date' => 'setEventDate',
        'event_address' => 'setEventAddress',
        'event_code' => 'setEventCode',
        'event_description' => 'setEventDescription',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'event_date' => 'getEventDate',
        'event_address' => 'getEventAddress',
        'event_code' => 'getEventCode',
        'event_description' => 'getEventDescription',
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
        $this->container['event_date'] = $data['event_date'] ?? null;
        $this->container['event_address'] = $data['event_address'] ?? null;
        $this->container['event_code'] = $data['event_code'] ?? null;
        $this->container['event_description'] = $data['event_description'] ?? null;
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
        if ($this->container['event_date'] === null) {
            throw new AssertionException("'event_date' can't be null");
        }

        if ($this->container['event_address'] === null) {
            throw new AssertionException("'event_address' can't be null");
        }

        $this->container['event_address']->validate();

        if ($this->container['event_code'] === null) {
            throw new AssertionException("'event_code' can't be null");
        }

        if ($this->container['event_description'] === null) {
            throw new AssertionException("'event_description' can't be null");
        }
    }

    /**
     * Gets event_date.
     *
     * @return \DateTime|\DateTimeImmutable
     */
    public function getEventDate() : \DateTimeInterface
    {
        return $this->container['event_date'];
    }

    /**
     * Sets event_date.
     *
     * @param \DateTime $event_date event_date
     */
    public function setEventDate(\DateTimeInterface $event_date) : self
    {
        $this->container['event_date'] = $event_date;

        return $this;
    }

    /**
     * Gets event_address.
     */
    public function getEventAddress() : TrackingAddress
    {
        return $this->container['event_address'];
    }

    /**
     * Sets event_address.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\TrackingAddress $event_address event_address
     */
    public function setEventAddress(TrackingAddress $event_address) : self
    {
        $this->container['event_address'] = $event_address;

        return $this;
    }

    /**
     * Gets event_code.
     */
    public function getEventCode() : EventCode
    {
        return $this->container['event_code'];
    }

    /**
     * Sets event_code.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\EventCode $event_code event_code
     */
    public function setEventCode(EventCode $event_code) : self
    {
        $this->container['event_code'] = $event_code;

        return $this;
    }

    /**
     * Gets event_description.
     */
    public function getEventDescription() : string
    {
        return $this->container['event_description'];
    }

    /**
     * Sets event_description.
     *
     * @param string $event_description a description for the corresponding event code
     */
    public function setEventDescription(string $event_description) : self
    {
        $this->container['event_description'] = $event_description;

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
