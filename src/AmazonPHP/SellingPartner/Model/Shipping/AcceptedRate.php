<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Shipping;

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
class AcceptedRate implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'AcceptedRate';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'total_charge' => '\AmazonPHP\SellingPartner\Model\Shipping\Currency',
        'billed_weight' => '\AmazonPHP\SellingPartner\Model\Shipping\Weight',
        'service_type' => '\AmazonPHP\SellingPartner\Model\Shipping\ServiceType',
        'promise' => '\AmazonPHP\SellingPartner\Model\Shipping\ShippingPromiseSet',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'total_charge' => null,
        'billed_weight' => null,
        'service_type' => null,
        'promise' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'total_charge' => 'totalCharge',
        'billed_weight' => 'billedWeight',
        'service_type' => 'serviceType',
        'promise' => 'promise',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'total_charge' => 'setTotalCharge',
        'billed_weight' => 'setBilledWeight',
        'service_type' => 'setServiceType',
        'promise' => 'setPromise',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'total_charge' => 'getTotalCharge',
        'billed_weight' => 'getBilledWeight',
        'service_type' => 'getServiceType',
        'promise' => 'getPromise',
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
        $this->container['total_charge'] = $data['total_charge'] ?? null;
        $this->container['billed_weight'] = $data['billed_weight'] ?? null;
        $this->container['service_type'] = $data['service_type'] ?? null;
        $this->container['promise'] = $data['promise'] ?? null;
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
        if ($this->container['total_charge'] !== null) {
            $this->container['total_charge']->validate();
        }

        if ($this->container['billed_weight'] !== null) {
            $this->container['billed_weight']->validate();
        }

        if ($this->container['promise'] !== null) {
            $this->container['promise']->validate();
        }
    }

    /**
     * Gets total_charge.
     */
    public function getTotalCharge() : ?Currency
    {
        return $this->container['total_charge'];
    }

    /**
     * Sets total_charge.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Shipping\Currency $total_charge total_charge
     */
    public function setTotalCharge(?Currency $total_charge) : self
    {
        $this->container['total_charge'] = $total_charge;

        return $this;
    }

    /**
     * Gets billed_weight.
     */
    public function getBilledWeight() : ?Weight
    {
        return $this->container['billed_weight'];
    }

    /**
     * Sets billed_weight.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Shipping\Weight $billed_weight billed_weight
     */
    public function setBilledWeight(?Weight $billed_weight) : self
    {
        $this->container['billed_weight'] = $billed_weight;

        return $this;
    }

    /**
     * Gets service_type.
     */
    public function getServiceType() : ?ServiceType
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Shipping\ServiceType $service_type service_type
     */
    public function setServiceType(?ServiceType $service_type) : self
    {
        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets promise.
     */
    public function getPromise() : ?ShippingPromiseSet
    {
        return $this->container['promise'];
    }

    /**
     * Sets promise.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Shipping\ShippingPromiseSet $promise promise
     */
    public function setPromise(?ShippingPromiseSet $promise) : self
    {
        $this->container['promise'] = $promise;

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
