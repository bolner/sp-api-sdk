<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

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
class InboundShipmentRequest implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'InboundShipmentRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'inbound_shipment_header' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentHeader',
        'inbound_shipment_items' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentItem[]',
        'marketplace_id' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'inbound_shipment_header' => null,
        'inbound_shipment_items' => null,
        'marketplace_id' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'inbound_shipment_header' => 'InboundShipmentHeader',
        'inbound_shipment_items' => 'InboundShipmentItems',
        'marketplace_id' => 'MarketplaceId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'inbound_shipment_header' => 'setInboundShipmentHeader',
        'inbound_shipment_items' => 'setInboundShipmentItems',
        'marketplace_id' => 'setMarketplaceId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'inbound_shipment_header' => 'getInboundShipmentHeader',
        'inbound_shipment_items' => 'getInboundShipmentItems',
        'marketplace_id' => 'getMarketplaceId',
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
        $this->container['inbound_shipment_header'] = $data['inbound_shipment_header'] ?? null;
        $this->container['inbound_shipment_items'] = $data['inbound_shipment_items'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
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
        if ($this->container['inbound_shipment_header'] === null) {
            throw new AssertionException("'inbound_shipment_header' can't be null");
        }

        $this->container['inbound_shipment_header']->validate();

        if ($this->container['inbound_shipment_items'] === null) {
            throw new AssertionException("'inbound_shipment_items' can't be null");
        }

        if ($this->container['marketplace_id'] === null) {
            throw new AssertionException("'marketplace_id' can't be null");
        }
    }

    /**
     * Gets inbound_shipment_header.
     */
    public function getInboundShipmentHeader() : InboundShipmentHeader
    {
        return $this->container['inbound_shipment_header'];
    }

    /**
     * Sets inbound_shipment_header.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentHeader $inbound_shipment_header inbound_shipment_header
     */
    public function setInboundShipmentHeader(InboundShipmentHeader $inbound_shipment_header) : self
    {
        $this->container['inbound_shipment_header'] = $inbound_shipment_header;

        return $this;
    }

    /**
     * Gets inbound_shipment_items.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentItem[]
     */
    public function getInboundShipmentItems() : array
    {
        return $this->container['inbound_shipment_items'];
    }

    /**
     * Sets inbound_shipment_items.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentItem[] $inbound_shipment_items a list of inbound shipment item information
     */
    public function setInboundShipmentItems(array $inbound_shipment_items) : self
    {
        $this->container['inbound_shipment_items'] = $inbound_shipment_items;

        return $this;
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
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace where the product would be stored.
     */
    public function setMarketplaceId(string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

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
