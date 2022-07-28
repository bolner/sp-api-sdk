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
class CompetitivePriceType implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'CompetitivePriceType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'competitive_price_id' => 'string',
        'price' => '\AmazonPHP\SellingPartner\Model\ProductPricing\PriceType',
        'condition' => 'string',
        'subcondition' => 'string',
        'offer_type' => '\AmazonPHP\SellingPartner\Model\ProductPricing\OfferCustomerType',
        'quantity_tier' => 'int',
        'quantity_discount_type' => '\AmazonPHP\SellingPartner\Model\ProductPricing\QuantityDiscountType',
        'seller_id' => 'string',
        'belongs_to_requester' => 'bool',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'competitive_price_id' => null,
        'price' => null,
        'condition' => null,
        'subcondition' => null,
        'offer_type' => null,
        'quantity_tier' => 'int32',
        'quantity_discount_type' => null,
        'seller_id' => null,
        'belongs_to_requester' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'competitive_price_id' => 'CompetitivePriceId',
        'price' => 'Price',
        'condition' => 'condition',
        'subcondition' => 'subcondition',
        'offer_type' => 'offerType',
        'quantity_tier' => 'quantityTier',
        'quantity_discount_type' => 'quantityDiscountType',
        'seller_id' => 'sellerId',
        'belongs_to_requester' => 'belongsToRequester',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'competitive_price_id' => 'setCompetitivePriceId',
        'price' => 'setPrice',
        'condition' => 'setCondition',
        'subcondition' => 'setSubcondition',
        'offer_type' => 'setOfferType',
        'quantity_tier' => 'setQuantityTier',
        'quantity_discount_type' => 'setQuantityDiscountType',
        'seller_id' => 'setSellerId',
        'belongs_to_requester' => 'setBelongsToRequester',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'competitive_price_id' => 'getCompetitivePriceId',
        'price' => 'getPrice',
        'condition' => 'getCondition',
        'subcondition' => 'getSubcondition',
        'offer_type' => 'getOfferType',
        'quantity_tier' => 'getQuantityTier',
        'quantity_discount_type' => 'getQuantityDiscountType',
        'seller_id' => 'getSellerId',
        'belongs_to_requester' => 'getBelongsToRequester',
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
        $this->container['competitive_price_id'] = $data['competitive_price_id'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['subcondition'] = $data['subcondition'] ?? null;
        $this->container['offer_type'] = $data['offer_type'] ?? null;
        $this->container['quantity_tier'] = $data['quantity_tier'] ?? null;
        $this->container['quantity_discount_type'] = $data['quantity_discount_type'] ?? null;
        $this->container['seller_id'] = $data['seller_id'] ?? null;
        $this->container['belongs_to_requester'] = $data['belongs_to_requester'] ?? null;
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
        if ($this->container['competitive_price_id'] === null) {
            throw new AssertionException("'competitive_price_id' can't be null");
        }

        if ($this->container['price'] === null) {
            throw new AssertionException("'price' can't be null");
        }

        $this->container['price']->validate();
    }

    /**
     * Gets competitive_price_id.
     */
    public function getCompetitivePriceId() : string
    {
        return $this->container['competitive_price_id'];
    }

    /**
     * Sets competitive_price_id.
     *
     * @param string $competitive_price_id The pricing model for each price that is returned.  Possible values:  * 1 - New Buy Box Price. * 2 - Used Buy Box Price.
     */
    public function setCompetitivePriceId(string $competitive_price_id) : self
    {
        $this->container['competitive_price_id'] = $competitive_price_id;

        return $this;
    }

    /**
     * Gets price.
     */
    public function getPrice() : PriceType
    {
        return $this->container['price'];
    }

    /**
     * Sets price.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\PriceType $price price
     */
    public function setPrice(PriceType $price) : self
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets condition.
     */
    public function getCondition() : ?string
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition.
     *
     * @param null|string $condition Indicates the condition of the item whose pricing information is returned. Possible values are: New, Used, Collectible, Refurbished, or Club.
     */
    public function setCondition(?string $condition) : self
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets subcondition.
     */
    public function getSubcondition() : ?string
    {
        return $this->container['subcondition'];
    }

    /**
     * Sets subcondition.
     *
     * @param null|string $subcondition Indicates the subcondition of the item whose pricing information is returned. Possible values are: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     */
    public function setSubcondition(?string $subcondition) : self
    {
        $this->container['subcondition'] = $subcondition;

        return $this;
    }

    /**
     * Gets offer_type.
     */
    public function getOfferType() : ?OfferCustomerType
    {
        return $this->container['offer_type'];
    }

    /**
     * Sets offer_type.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\OfferCustomerType $offer_type offer_type
     */
    public function setOfferType(?OfferCustomerType $offer_type) : self
    {
        $this->container['offer_type'] = $offer_type;

        return $this;
    }

    /**
     * Gets quantity_tier.
     */
    public function getQuantityTier() : ?int
    {
        return $this->container['quantity_tier'];
    }

    /**
     * Sets quantity_tier.
     *
     * @param null|int $quantity_tier indicates at what quantity this price becomes active
     */
    public function setQuantityTier(?int $quantity_tier) : self
    {
        $this->container['quantity_tier'] = $quantity_tier;

        return $this;
    }

    /**
     * Gets quantity_discount_type.
     */
    public function getQuantityDiscountType() : ?QuantityDiscountType
    {
        return $this->container['quantity_discount_type'];
    }

    /**
     * Sets quantity_discount_type.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\QuantityDiscountType $quantity_discount_type quantity_discount_type
     */
    public function setQuantityDiscountType(?QuantityDiscountType $quantity_discount_type) : self
    {
        $this->container['quantity_discount_type'] = $quantity_discount_type;

        return $this;
    }

    /**
     * Gets seller_id.
     */
    public function getSellerId() : ?string
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id.
     *
     * @param null|string $seller_id the seller identifier for the offer
     */
    public function setSellerId(?string $seller_id) : self
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets belongs_to_requester.
     */
    public function getBelongsToRequester() : ?bool
    {
        return $this->container['belongs_to_requester'];
    }

    /**
     * Sets belongs_to_requester.
     *
     * @param null|bool $belongs_to_requester Indicates whether or not the pricing information is for an offer listing that belongs to the requester. The requester is the seller associated with the SellerId that was submitted with the request. Possible values are: true and false.
     */
    public function setBelongsToRequester(?bool $belongs_to_requester) : self
    {
        $this->container['belongs_to_requester'] = $belongs_to_requester;

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
