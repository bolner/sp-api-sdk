<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
class AdditionalLocationInfo
{
    /**
     * Possible values of this enum.
     */
    public const AS_INSTRUCTED = 'AS_INSTRUCTED';

    public const CARPORT = 'CARPORT';

    public const CUSTOMER_PICKUP = 'CUSTOMER_PICKUP';

    public const DECK = 'DECK';

    public const DOOR_PERSON = 'DOOR_PERSON';

    public const FRONT_DESK = 'FRONT_DESK';

    public const FRONT_DOOR = 'FRONT_DOOR';

    public const GARAGE = 'GARAGE';

    public const GUARD = 'GUARD';

    public const MAIL_ROOM = 'MAIL_ROOM';

    public const MAIL_SLOT = 'MAIL_SLOT';

    public const MAILBOX = 'MAILBOX';

    public const MC_BOY = 'MC_BOY';

    public const MC_GIRL = 'MC_GIRL';

    public const MC_MAN = 'MC_MAN';

    public const MC_WOMAN = 'MC_WOMAN';

    public const NEIGHBOR = 'NEIGHBOR';

    public const OFFICE = 'OFFICE';

    public const OUTBUILDING = 'OUTBUILDING';

    public const PATIO = 'PATIO';

    public const PORCH = 'PORCH';

    public const REAR_DOOR = 'REAR_DOOR';

    public const RECEPTIONIST = 'RECEPTIONIST';

    public const RECEIVER = 'RECEIVER';

    public const SECURE_LOCATION = 'SECURE_LOCATION';

    public const SIDE_DOOR = 'SIDE_DOOR';

    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::AS_INSTRUCTED,
            self::CARPORT,
            self::CUSTOMER_PICKUP,
            self::DECK,
            self::DOOR_PERSON,
            self::FRONT_DESK,
            self::FRONT_DOOR,
            self::GARAGE,
            self::GUARD,
            self::MAIL_ROOM,
            self::MAIL_SLOT,
            self::MAILBOX,
            self::MC_BOY,
            self::MC_GIRL,
            self::MC_MAN,
            self::MC_WOMAN,
            self::NEIGHBOR,
            self::OFFICE,
            self::OUTBUILDING,
            self::PATIO,
            self::PORCH,
            self::REAR_DOOR,
            self::RECEPTIONIST,
            self::RECEIVER,
            self::SECURE_LOCATION,
            self::SIDE_DOOR,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
