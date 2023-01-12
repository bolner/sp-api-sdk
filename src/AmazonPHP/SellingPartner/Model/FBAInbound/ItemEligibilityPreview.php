<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FBAInbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for FBA Inbound Eligibilty.
 *
 * With the FBA Inbound Eligibility API, you can build applications that let sellers get eligibility previews for items before shipping them to Amazon's fulfillment centers. With this API you can find out if an item is eligible for inbound shipment to Amazon's fulfillment centers in a specific marketplace. You can also find out if an item is eligible for using the manufacturer barcode for FBA inventory tracking. Sellers can use this information to inform their decisions about which items to ship Amazon's fulfillment centers.
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
class ItemEligibilityPreview implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const PROGRAM_INBOUND = 'INBOUND';

    final public const PROGRAM_COMMINGLING = 'COMMINGLING';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0004 = 'FBA_INB_0004';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0006 = 'FBA_INB_0006';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0007 = 'FBA_INB_0007';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0008 = 'FBA_INB_0008';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0009 = 'FBA_INB_0009';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0010 = 'FBA_INB_0010';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0011 = 'FBA_INB_0011';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0012 = 'FBA_INB_0012';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0013 = 'FBA_INB_0013';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0014 = 'FBA_INB_0014';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0015 = 'FBA_INB_0015';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0016 = 'FBA_INB_0016';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0017 = 'FBA_INB_0017';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0018 = 'FBA_INB_0018';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0019 = 'FBA_INB_0019';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0034 = 'FBA_INB_0034';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0035 = 'FBA_INB_0035';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0036 = 'FBA_INB_0036';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0037 = 'FBA_INB_0037';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0038 = 'FBA_INB_0038';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0050 = 'FBA_INB_0050';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0051 = 'FBA_INB_0051';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0053 = 'FBA_INB_0053';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0055 = 'FBA_INB_0055';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0056 = 'FBA_INB_0056';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0059 = 'FBA_INB_0059';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0065 = 'FBA_INB_0065';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0066 = 'FBA_INB_0066';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0067 = 'FBA_INB_0067';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0068 = 'FBA_INB_0068';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0095 = 'FBA_INB_0095';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0097 = 'FBA_INB_0097';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0098 = 'FBA_INB_0098';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0099 = 'FBA_INB_0099';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0100 = 'FBA_INB_0100';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0103 = 'FBA_INB_0103';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0104 = 'FBA_INB_0104';

    final public const INELIGIBILITY_REASON_LIST_FBA_INB_0197 = 'FBA_INB_0197';

    final public const INELIGIBILITY_REASON_LIST_UNKNOWN_INB_ERROR_CODE = 'UNKNOWN_INB_ERROR_CODE';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ItemEligibilityPreview';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'asin' => 'string',
        'marketplace_id' => 'string',
        'program' => 'string',
        'is_eligible_for_program' => 'bool',
        'ineligibility_reason_list' => 'string[]',
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
        'asin' => null,
        'marketplace_id' => null,
        'program' => null,
        'is_eligible_for_program' => null,
        'ineligibility_reason_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'asin' => 'asin',
        'marketplace_id' => 'marketplaceId',
        'program' => 'program',
        'is_eligible_for_program' => 'isEligibleForProgram',
        'ineligibility_reason_list' => 'ineligibilityReasonList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'asin' => 'setAsin',
        'marketplace_id' => 'setMarketplaceId',
        'program' => 'setProgram',
        'is_eligible_for_program' => 'setIsEligibleForProgram',
        'ineligibility_reason_list' => 'setIneligibilityReasonList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'asin' => 'getAsin',
        'marketplace_id' => 'getMarketplaceId',
        'program' => 'getProgram',
        'is_eligible_for_program' => 'getIsEligibleForProgram',
        'ineligibility_reason_list' => 'getIneligibilityReasonList',
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['program'] = $data['program'] ?? null;
        $this->container['is_eligible_for_program'] = $data['is_eligible_for_program'] ?? null;
        $this->container['ineligibility_reason_list'] = $data['ineligibility_reason_list'] ?? null;
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
    public function getProgramAllowableValues() : array
    {
        return [
            self::PROGRAM_INBOUND,
            self::PROGRAM_COMMINGLING,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getIneligibilityReasonListAllowableValues() : array
    {
        return [
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0004,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0006,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0007,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0008,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0009,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0010,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0011,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0012,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0013,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0014,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0015,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0016,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0017,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0018,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0019,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0034,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0035,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0036,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0037,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0038,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0050,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0051,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0053,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0055,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0056,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0059,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0065,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0066,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0067,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0068,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0095,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0097,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0098,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0099,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0100,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0103,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0104,
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0197,
            self::INELIGIBILITY_REASON_LIST_UNKNOWN_INB_ERROR_CODE,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['asin'] === null) {
            throw new AssertionException("'asin' can't be null");
        }

        if ($this->container['program'] === null) {
            throw new AssertionException("'program' can't be null");
        }

        $allowedValues = $this->getProgramAllowableValues();

        if (null !== $this->container['program'] && !\in_array($this->container['program'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'program', must be one of '%s'",
                    $this->container['program'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['is_eligible_for_program'] === null) {
            throw new AssertionException("'is_eligible_for_program' can't be null");
        }
    }

    /**
     * Gets asin.
     */
    public function getAsin() : string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param string $asin the ASIN for which eligibility was determined
     */
    public function setAsin(string $asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : ?string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param null|string $marketplace_id the marketplace for which eligibility was determined
     */
    public function setMarketplaceId(?string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets program.
     */
    public function getProgram() : string
    {
        return $this->container['program'];
    }

    /**
     * Sets program.
     *
     * @param string $program the program for which eligibility was determined
     */
    public function setProgram(string $program) : self
    {
        $this->container['program'] = $program;

        return $this;
    }

    /**
     * Gets is_eligible_for_program.
     */
    public function getIsEligibleForProgram() : bool
    {
        return $this->container['is_eligible_for_program'];
    }

    /**
     * Sets is_eligible_for_program.
     *
     * @param bool $is_eligible_for_program indicates if the item is eligible for the program
     */
    public function setIsEligibleForProgram(bool $is_eligible_for_program) : self
    {
        $this->container['is_eligible_for_program'] = $is_eligible_for_program;

        return $this;
    }

    /**
     * Gets ineligibility_reason_list.
     *
     * @return null|string[]
     */
    public function getIneligibilityReasonList() : ?array
    {
        return $this->container['ineligibility_reason_list'];
    }

    /**
     * Sets ineligibility_reason_list.
     *
     * @param null|string[] $ineligibility_reason_list potential Ineligibility Reason Codes
     */
    public function setIneligibilityReasonList(?array $ineligibility_reason_list) : self
    {
        $this->container['ineligibility_reason_list'] = $ineligibility_reason_list;

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
