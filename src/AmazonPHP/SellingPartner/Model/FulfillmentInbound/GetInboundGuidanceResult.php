<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetInboundGuidanceResult implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'GetInboundGuidanceResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'sku_inbound_guidance_list' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SKUInboundGuidance[]',
        'invalid_sku_list' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidSKU[]',
        'asin_inbound_guidance_list' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ASINInboundGuidance[]',
        'invalid_asin_list' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidASIN[]',
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
        'sku_inbound_guidance_list' => null,
        'invalid_sku_list' => null,
        'asin_inbound_guidance_list' => null,
        'invalid_asin_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'sku_inbound_guidance_list' => 'SKUInboundGuidanceList',
        'invalid_sku_list' => 'InvalidSKUList',
        'asin_inbound_guidance_list' => 'ASINInboundGuidanceList',
        'invalid_asin_list' => 'InvalidASINList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'sku_inbound_guidance_list' => 'setSkuInboundGuidanceList',
        'invalid_sku_list' => 'setInvalidSkuList',
        'asin_inbound_guidance_list' => 'setAsinInboundGuidanceList',
        'invalid_asin_list' => 'setInvalidAsinList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'sku_inbound_guidance_list' => 'getSkuInboundGuidanceList',
        'invalid_sku_list' => 'getInvalidSkuList',
        'asin_inbound_guidance_list' => 'getAsinInboundGuidanceList',
        'invalid_asin_list' => 'getInvalidAsinList',
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
        $this->container['sku_inbound_guidance_list'] = $data['sku_inbound_guidance_list'] ?? null;
        $this->container['invalid_sku_list'] = $data['invalid_sku_list'] ?? null;
        $this->container['asin_inbound_guidance_list'] = $data['asin_inbound_guidance_list'] ?? null;
        $this->container['invalid_asin_list'] = $data['invalid_asin_list'] ?? null;
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
     * Gets sku_inbound_guidance_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SKUInboundGuidance[]
     */
    public function getSkuInboundGuidanceList() : ?array
    {
        return $this->container['sku_inbound_guidance_list'];
    }

    /**
     * Sets sku_inbound_guidance_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SKUInboundGuidance[] $sku_inbound_guidance_list a list of SKU inbound guidance information
     */
    public function setSkuInboundGuidanceList(?array $sku_inbound_guidance_list) : self
    {
        $this->container['sku_inbound_guidance_list'] = $sku_inbound_guidance_list;

        return $this;
    }

    /**
     * Gets invalid_sku_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidSKU[]
     */
    public function getInvalidSkuList() : ?array
    {
        return $this->container['invalid_sku_list'];
    }

    /**
     * Sets invalid_sku_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidSKU[] $invalid_sku_list a list of invalid SKU values and the reason they are invalid
     */
    public function setInvalidSkuList(?array $invalid_sku_list) : self
    {
        $this->container['invalid_sku_list'] = $invalid_sku_list;

        return $this;
    }

    /**
     * Gets asin_inbound_guidance_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ASINInboundGuidance[]
     */
    public function getAsinInboundGuidanceList() : ?array
    {
        return $this->container['asin_inbound_guidance_list'];
    }

    /**
     * Sets asin_inbound_guidance_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ASINInboundGuidance[] $asin_inbound_guidance_list a list of ASINs and their associated inbound guidance
     */
    public function setAsinInboundGuidanceList(?array $asin_inbound_guidance_list) : self
    {
        $this->container['asin_inbound_guidance_list'] = $asin_inbound_guidance_list;

        return $this;
    }

    /**
     * Gets invalid_asin_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidASIN[]
     */
    public function getInvalidAsinList() : ?array
    {
        return $this->container['invalid_asin_list'];
    }

    /**
     * Sets invalid_asin_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidASIN[] $invalid_asin_list a list of invalid ASIN values and the reasons they are invalid
     */
    public function setInvalidAsinList(?array $invalid_asin_list) : self
    {
        $this->container['invalid_asin_list'] = $invalid_asin_list;

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
