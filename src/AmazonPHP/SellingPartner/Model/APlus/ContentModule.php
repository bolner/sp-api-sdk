<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\APlus;

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
class ContentModule implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ContentModule';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'content_module_type' => '\AmazonPHP\SellingPartner\Model\APlus\ContentModuleType',
        'standard_company_logo' => '\AmazonPHP\SellingPartner\Model\APlus\StandardCompanyLogoModule',
        'standard_comparison_table' => '\AmazonPHP\SellingPartner\Model\APlus\StandardComparisonTableModule',
        'standard_four_image_text' => '\AmazonPHP\SellingPartner\Model\APlus\StandardFourImageTextModule',
        'standard_four_image_text_quadrant' => '\AmazonPHP\SellingPartner\Model\APlus\StandardFourImageTextQuadrantModule',
        'standard_header_image_text' => '\AmazonPHP\SellingPartner\Model\APlus\StandardHeaderImageTextModule',
        'standard_image_sidebar' => '\AmazonPHP\SellingPartner\Model\APlus\StandardImageSidebarModule',
        'standard_image_text_overlay' => '\AmazonPHP\SellingPartner\Model\APlus\StandardImageTextOverlayModule',
        'standard_multiple_image_text' => '\AmazonPHP\SellingPartner\Model\APlus\StandardMultipleImageTextModule',
        'standard_product_description' => '\AmazonPHP\SellingPartner\Model\APlus\StandardProductDescriptionModule',
        'standard_single_image_highlights' => '\AmazonPHP\SellingPartner\Model\APlus\StandardSingleImageHighlightsModule',
        'standard_single_image_specs_detail' => '\AmazonPHP\SellingPartner\Model\APlus\StandardSingleImageSpecsDetailModule',
        'standard_single_side_image' => '\AmazonPHP\SellingPartner\Model\APlus\StandardSingleSideImageModule',
        'standard_tech_specs' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTechSpecsModule',
        'standard_text' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextModule',
        'standard_three_image_text' => '\AmazonPHP\SellingPartner\Model\APlus\StandardThreeImageTextModule',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'content_module_type' => null,
        'standard_company_logo' => null,
        'standard_comparison_table' => null,
        'standard_four_image_text' => null,
        'standard_four_image_text_quadrant' => null,
        'standard_header_image_text' => null,
        'standard_image_sidebar' => null,
        'standard_image_text_overlay' => null,
        'standard_multiple_image_text' => null,
        'standard_product_description' => null,
        'standard_single_image_highlights' => null,
        'standard_single_image_specs_detail' => null,
        'standard_single_side_image' => null,
        'standard_tech_specs' => null,
        'standard_text' => null,
        'standard_three_image_text' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'content_module_type' => 'contentModuleType',
        'standard_company_logo' => 'standardCompanyLogo',
        'standard_comparison_table' => 'standardComparisonTable',
        'standard_four_image_text' => 'standardFourImageText',
        'standard_four_image_text_quadrant' => 'standardFourImageTextQuadrant',
        'standard_header_image_text' => 'standardHeaderImageText',
        'standard_image_sidebar' => 'standardImageSidebar',
        'standard_image_text_overlay' => 'standardImageTextOverlay',
        'standard_multiple_image_text' => 'standardMultipleImageText',
        'standard_product_description' => 'standardProductDescription',
        'standard_single_image_highlights' => 'standardSingleImageHighlights',
        'standard_single_image_specs_detail' => 'standardSingleImageSpecsDetail',
        'standard_single_side_image' => 'standardSingleSideImage',
        'standard_tech_specs' => 'standardTechSpecs',
        'standard_text' => 'standardText',
        'standard_three_image_text' => 'standardThreeImageText',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'content_module_type' => 'setContentModuleType',
        'standard_company_logo' => 'setStandardCompanyLogo',
        'standard_comparison_table' => 'setStandardComparisonTable',
        'standard_four_image_text' => 'setStandardFourImageText',
        'standard_four_image_text_quadrant' => 'setStandardFourImageTextQuadrant',
        'standard_header_image_text' => 'setStandardHeaderImageText',
        'standard_image_sidebar' => 'setStandardImageSidebar',
        'standard_image_text_overlay' => 'setStandardImageTextOverlay',
        'standard_multiple_image_text' => 'setStandardMultipleImageText',
        'standard_product_description' => 'setStandardProductDescription',
        'standard_single_image_highlights' => 'setStandardSingleImageHighlights',
        'standard_single_image_specs_detail' => 'setStandardSingleImageSpecsDetail',
        'standard_single_side_image' => 'setStandardSingleSideImage',
        'standard_tech_specs' => 'setStandardTechSpecs',
        'standard_text' => 'setStandardText',
        'standard_three_image_text' => 'setStandardThreeImageText',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'content_module_type' => 'getContentModuleType',
        'standard_company_logo' => 'getStandardCompanyLogo',
        'standard_comparison_table' => 'getStandardComparisonTable',
        'standard_four_image_text' => 'getStandardFourImageText',
        'standard_four_image_text_quadrant' => 'getStandardFourImageTextQuadrant',
        'standard_header_image_text' => 'getStandardHeaderImageText',
        'standard_image_sidebar' => 'getStandardImageSidebar',
        'standard_image_text_overlay' => 'getStandardImageTextOverlay',
        'standard_multiple_image_text' => 'getStandardMultipleImageText',
        'standard_product_description' => 'getStandardProductDescription',
        'standard_single_image_highlights' => 'getStandardSingleImageHighlights',
        'standard_single_image_specs_detail' => 'getStandardSingleImageSpecsDetail',
        'standard_single_side_image' => 'getStandardSingleSideImage',
        'standard_tech_specs' => 'getStandardTechSpecs',
        'standard_text' => 'getStandardText',
        'standard_three_image_text' => 'getStandardThreeImageText',
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
        $this->container['content_module_type'] = $data['content_module_type'] ?? null;
        $this->container['standard_company_logo'] = $data['standard_company_logo'] ?? null;
        $this->container['standard_comparison_table'] = $data['standard_comparison_table'] ?? null;
        $this->container['standard_four_image_text'] = $data['standard_four_image_text'] ?? null;
        $this->container['standard_four_image_text_quadrant'] = $data['standard_four_image_text_quadrant'] ?? null;
        $this->container['standard_header_image_text'] = $data['standard_header_image_text'] ?? null;
        $this->container['standard_image_sidebar'] = $data['standard_image_sidebar'] ?? null;
        $this->container['standard_image_text_overlay'] = $data['standard_image_text_overlay'] ?? null;
        $this->container['standard_multiple_image_text'] = $data['standard_multiple_image_text'] ?? null;
        $this->container['standard_product_description'] = $data['standard_product_description'] ?? null;
        $this->container['standard_single_image_highlights'] = $data['standard_single_image_highlights'] ?? null;
        $this->container['standard_single_image_specs_detail'] = $data['standard_single_image_specs_detail'] ?? null;
        $this->container['standard_single_side_image'] = $data['standard_single_side_image'] ?? null;
        $this->container['standard_tech_specs'] = $data['standard_tech_specs'] ?? null;
        $this->container['standard_text'] = $data['standard_text'] ?? null;
        $this->container['standard_three_image_text'] = $data['standard_three_image_text'] ?? null;
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
        if ($this->container['content_module_type'] === null) {
            throw new AssertionException("'content_module_type' can't be null");
        }

        if ($this->container['standard_company_logo'] !== null) {
            $this->container['standard_company_logo']->validate();
        }

        if ($this->container['standard_comparison_table'] !== null) {
            $this->container['standard_comparison_table']->validate();
        }

        if ($this->container['standard_four_image_text'] !== null) {
            $this->container['standard_four_image_text']->validate();
        }

        if ($this->container['standard_four_image_text_quadrant'] !== null) {
            $this->container['standard_four_image_text_quadrant']->validate();
        }

        if ($this->container['standard_header_image_text'] !== null) {
            $this->container['standard_header_image_text']->validate();
        }

        if ($this->container['standard_image_sidebar'] !== null) {
            $this->container['standard_image_sidebar']->validate();
        }

        if ($this->container['standard_image_text_overlay'] !== null) {
            $this->container['standard_image_text_overlay']->validate();
        }

        if ($this->container['standard_multiple_image_text'] !== null) {
            $this->container['standard_multiple_image_text']->validate();
        }

        if ($this->container['standard_product_description'] !== null) {
            $this->container['standard_product_description']->validate();
        }

        if ($this->container['standard_single_image_highlights'] !== null) {
            $this->container['standard_single_image_highlights']->validate();
        }

        if ($this->container['standard_single_image_specs_detail'] !== null) {
            $this->container['standard_single_image_specs_detail']->validate();
        }

        if ($this->container['standard_single_side_image'] !== null) {
            $this->container['standard_single_side_image']->validate();
        }

        if ($this->container['standard_tech_specs'] !== null) {
            $this->container['standard_tech_specs']->validate();
        }

        if ($this->container['standard_text'] !== null) {
            $this->container['standard_text']->validate();
        }

        if ($this->container['standard_three_image_text'] !== null) {
            $this->container['standard_three_image_text']->validate();
        }
    }

    /**
     * Gets content_module_type.
     */
    public function getContentModuleType() : ContentModuleType
    {
        return $this->container['content_module_type'];
    }

    /**
     * Sets content_module_type.
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\ContentModuleType $content_module_type content_module_type
     */
    public function setContentModuleType(ContentModuleType $content_module_type) : self
    {
        $this->container['content_module_type'] = $content_module_type;

        return $this;
    }

    /**
     * Gets standard_company_logo.
     */
    public function getStandardCompanyLogo() : ?StandardCompanyLogoModule
    {
        return $this->container['standard_company_logo'];
    }

    /**
     * Sets standard_company_logo.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardCompanyLogoModule $standard_company_logo standard_company_logo
     */
    public function setStandardCompanyLogo(?StandardCompanyLogoModule $standard_company_logo) : self
    {
        $this->container['standard_company_logo'] = $standard_company_logo;

        return $this;
    }

    /**
     * Gets standard_comparison_table.
     */
    public function getStandardComparisonTable() : ?StandardComparisonTableModule
    {
        return $this->container['standard_comparison_table'];
    }

    /**
     * Sets standard_comparison_table.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardComparisonTableModule $standard_comparison_table standard_comparison_table
     */
    public function setStandardComparisonTable(?StandardComparisonTableModule $standard_comparison_table) : self
    {
        $this->container['standard_comparison_table'] = $standard_comparison_table;

        return $this;
    }

    /**
     * Gets standard_four_image_text.
     */
    public function getStandardFourImageText() : ?StandardFourImageTextModule
    {
        return $this->container['standard_four_image_text'];
    }

    /**
     * Sets standard_four_image_text.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardFourImageTextModule $standard_four_image_text standard_four_image_text
     */
    public function setStandardFourImageText(?StandardFourImageTextModule $standard_four_image_text) : self
    {
        $this->container['standard_four_image_text'] = $standard_four_image_text;

        return $this;
    }

    /**
     * Gets standard_four_image_text_quadrant.
     */
    public function getStandardFourImageTextQuadrant() : ?StandardFourImageTextQuadrantModule
    {
        return $this->container['standard_four_image_text_quadrant'];
    }

    /**
     * Sets standard_four_image_text_quadrant.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardFourImageTextQuadrantModule $standard_four_image_text_quadrant standard_four_image_text_quadrant
     */
    public function setStandardFourImageTextQuadrant(?StandardFourImageTextQuadrantModule $standard_four_image_text_quadrant) : self
    {
        $this->container['standard_four_image_text_quadrant'] = $standard_four_image_text_quadrant;

        return $this;
    }

    /**
     * Gets standard_header_image_text.
     */
    public function getStandardHeaderImageText() : ?StandardHeaderImageTextModule
    {
        return $this->container['standard_header_image_text'];
    }

    /**
     * Sets standard_header_image_text.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardHeaderImageTextModule $standard_header_image_text standard_header_image_text
     */
    public function setStandardHeaderImageText(?StandardHeaderImageTextModule $standard_header_image_text) : self
    {
        $this->container['standard_header_image_text'] = $standard_header_image_text;

        return $this;
    }

    /**
     * Gets standard_image_sidebar.
     */
    public function getStandardImageSidebar() : ?StandardImageSidebarModule
    {
        return $this->container['standard_image_sidebar'];
    }

    /**
     * Sets standard_image_sidebar.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardImageSidebarModule $standard_image_sidebar standard_image_sidebar
     */
    public function setStandardImageSidebar(?StandardImageSidebarModule $standard_image_sidebar) : self
    {
        $this->container['standard_image_sidebar'] = $standard_image_sidebar;

        return $this;
    }

    /**
     * Gets standard_image_text_overlay.
     */
    public function getStandardImageTextOverlay() : ?StandardImageTextOverlayModule
    {
        return $this->container['standard_image_text_overlay'];
    }

    /**
     * Sets standard_image_text_overlay.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardImageTextOverlayModule $standard_image_text_overlay standard_image_text_overlay
     */
    public function setStandardImageTextOverlay(?StandardImageTextOverlayModule $standard_image_text_overlay) : self
    {
        $this->container['standard_image_text_overlay'] = $standard_image_text_overlay;

        return $this;
    }

    /**
     * Gets standard_multiple_image_text.
     */
    public function getStandardMultipleImageText() : ?StandardMultipleImageTextModule
    {
        return $this->container['standard_multiple_image_text'];
    }

    /**
     * Sets standard_multiple_image_text.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardMultipleImageTextModule $standard_multiple_image_text standard_multiple_image_text
     */
    public function setStandardMultipleImageText(?StandardMultipleImageTextModule $standard_multiple_image_text) : self
    {
        $this->container['standard_multiple_image_text'] = $standard_multiple_image_text;

        return $this;
    }

    /**
     * Gets standard_product_description.
     */
    public function getStandardProductDescription() : ?StandardProductDescriptionModule
    {
        return $this->container['standard_product_description'];
    }

    /**
     * Sets standard_product_description.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardProductDescriptionModule $standard_product_description standard_product_description
     */
    public function setStandardProductDescription(?StandardProductDescriptionModule $standard_product_description) : self
    {
        $this->container['standard_product_description'] = $standard_product_description;

        return $this;
    }

    /**
     * Gets standard_single_image_highlights.
     */
    public function getStandardSingleImageHighlights() : ?StandardSingleImageHighlightsModule
    {
        return $this->container['standard_single_image_highlights'];
    }

    /**
     * Sets standard_single_image_highlights.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardSingleImageHighlightsModule $standard_single_image_highlights standard_single_image_highlights
     */
    public function setStandardSingleImageHighlights(?StandardSingleImageHighlightsModule $standard_single_image_highlights) : self
    {
        $this->container['standard_single_image_highlights'] = $standard_single_image_highlights;

        return $this;
    }

    /**
     * Gets standard_single_image_specs_detail.
     */
    public function getStandardSingleImageSpecsDetail() : ?StandardSingleImageSpecsDetailModule
    {
        return $this->container['standard_single_image_specs_detail'];
    }

    /**
     * Sets standard_single_image_specs_detail.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardSingleImageSpecsDetailModule $standard_single_image_specs_detail standard_single_image_specs_detail
     */
    public function setStandardSingleImageSpecsDetail(?StandardSingleImageSpecsDetailModule $standard_single_image_specs_detail) : self
    {
        $this->container['standard_single_image_specs_detail'] = $standard_single_image_specs_detail;

        return $this;
    }

    /**
     * Gets standard_single_side_image.
     */
    public function getStandardSingleSideImage() : ?StandardSingleSideImageModule
    {
        return $this->container['standard_single_side_image'];
    }

    /**
     * Sets standard_single_side_image.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardSingleSideImageModule $standard_single_side_image standard_single_side_image
     */
    public function setStandardSingleSideImage(?StandardSingleSideImageModule $standard_single_side_image) : self
    {
        $this->container['standard_single_side_image'] = $standard_single_side_image;

        return $this;
    }

    /**
     * Gets standard_tech_specs.
     */
    public function getStandardTechSpecs() : ?StandardTechSpecsModule
    {
        return $this->container['standard_tech_specs'];
    }

    /**
     * Sets standard_tech_specs.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTechSpecsModule $standard_tech_specs standard_tech_specs
     */
    public function setStandardTechSpecs(?StandardTechSpecsModule $standard_tech_specs) : self
    {
        $this->container['standard_tech_specs'] = $standard_tech_specs;

        return $this;
    }

    /**
     * Gets standard_text.
     */
    public function getStandardText() : ?StandardTextModule
    {
        return $this->container['standard_text'];
    }

    /**
     * Sets standard_text.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextModule $standard_text standard_text
     */
    public function setStandardText(?StandardTextModule $standard_text) : self
    {
        $this->container['standard_text'] = $standard_text;

        return $this;
    }

    /**
     * Gets standard_three_image_text.
     */
    public function getStandardThreeImageText() : ?StandardThreeImageTextModule
    {
        return $this->container['standard_three_image_text'];
    }

    /**
     * Sets standard_three_image_text.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardThreeImageTextModule $standard_three_image_text standard_three_image_text
     */
    public function setStandardThreeImageText(?StandardThreeImageTextModule $standard_three_image_text) : self
    {
        $this->container['standard_three_image_text'] = $standard_three_image_text;

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
