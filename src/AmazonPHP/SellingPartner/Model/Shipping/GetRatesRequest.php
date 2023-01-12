<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Shipping;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.   **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetRatesRequest implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'GetRatesRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'ship_to' => '\AmazonPHP\SellingPartner\Model\Shipping\Address',
        'ship_from' => '\AmazonPHP\SellingPartner\Model\Shipping\Address',
        'service_types' => '\AmazonPHP\SellingPartner\Model\Shipping\ServiceType[]',
        'ship_date' => '\DateTimeInterface',
        'container_specifications' => '\AmazonPHP\SellingPartner\Model\Shipping\ContainerSpecification[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'ship_to' => null,
        'ship_from' => null,
        'service_types' => null,
        'ship_date' => 'date-time',
        'container_specifications' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'ship_to' => 'shipTo',
        'ship_from' => 'shipFrom',
        'service_types' => 'serviceTypes',
        'ship_date' => 'shipDate',
        'container_specifications' => 'containerSpecifications',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'ship_to' => 'setShipTo',
        'ship_from' => 'setShipFrom',
        'service_types' => 'setServiceTypes',
        'ship_date' => 'setShipDate',
        'container_specifications' => 'setContainerSpecifications',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'ship_to' => 'getShipTo',
        'ship_from' => 'getShipFrom',
        'service_types' => 'getServiceTypes',
        'ship_date' => 'getShipDate',
        'container_specifications' => 'getContainerSpecifications',
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
        $this->container['ship_to'] = $data['ship_to'] ?? null;
        $this->container['ship_from'] = $data['ship_from'] ?? null;
        $this->container['service_types'] = $data['service_types'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['container_specifications'] = $data['container_specifications'] ?? null;
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
        if ($this->container['ship_to'] === null) {
            throw new AssertionException("'ship_to' can't be null");
        }

        $this->container['ship_to']->validate();

        if ($this->container['ship_from'] === null) {
            throw new AssertionException("'ship_from' can't be null");
        }

        $this->container['ship_from']->validate();

        if ($this->container['service_types'] === null) {
            throw new AssertionException("'service_types' can't be null");
        }

        if ($this->container['container_specifications'] === null) {
            throw new AssertionException("'container_specifications' can't be null");
        }
    }

    /**
     * Gets ship_to.
     */
    public function getShipTo() : Address
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to.
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\Address $ship_to ship_to
     */
    public function setShipTo(Address $ship_to) : self
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets ship_from.
     */
    public function getShipFrom() : Address
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from.
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\Address $ship_from ship_from
     */
    public function setShipFrom(Address $ship_from) : self
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }

    /**
     * Gets service_types.
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\ServiceType[]
     */
    public function getServiceTypes() : array
    {
        return $this->container['service_types'];
    }

    /**
     * Sets service_types.
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\ServiceType[] $service_types a list of service types that can be used to send the shipment
     */
    public function setServiceTypes(array $service_types) : self
    {
        $this->container['service_types'] = $service_types;

        return $this;
    }

    /**
     * Gets ship_date.
     */
    public function getShipDate() : ?\DateTimeInterface
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date.
     *
     * @param null|\DateTimeInterface $ship_date The start date and time. This defaults to the current date and time.
     */
    public function setShipDate(?\DateTimeInterface $ship_date) : self
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets container_specifications.
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\ContainerSpecification[]
     */
    public function getContainerSpecifications() : array
    {
        return $this->container['container_specifications'];
    }

    /**
     * Sets container_specifications.
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\ContainerSpecification[] $container_specifications a list of container specifications
     */
    public function setContainerSpecifications(array $container_specifications) : self
    {
        $this->container['container_specifications'] = $container_specifications;

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
    public function offsetGet($offset) : mixed
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
