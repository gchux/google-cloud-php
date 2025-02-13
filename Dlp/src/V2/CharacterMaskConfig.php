<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Partially mask a string by replacing a given number of characters with a
 * fixed character. Masking can start from the beginning or end of the string.
 * This can be used on data of any type (numbers, longs, and so on) and when
 * de-identifying structured data we'll attempt to preserve the original data's
 * type. (This allows you to take a long like 123 and modify it to a string like
 * **3.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CharacterMaskConfig</code>
 */
class CharacterMaskConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Character to use to mask the sensitive values&mdash;for example, `*` for an
     * alphabetic string such as a name, or `0` for a numeric string such as ZIP
     * code or credit card number. This string must have a length of 1. If not
     * supplied, this value defaults to `*` for strings, and `0` for digits.
     *
     * Generated from protobuf field <code>string masking_character = 1;</code>
     */
    private $masking_character = '';
    /**
     * Number of characters to mask. If not set, all matching chars will be
     * masked. Skipped characters do not count towards this tally.
     *
     * Generated from protobuf field <code>int32 number_to_mask = 2;</code>
     */
    private $number_to_mask = 0;
    /**
     * Mask characters in reverse order. For example, if `masking_character` is
     * `0`, `number_to_mask` is `14`, and `reverse_order` is `false`, then the
     * input string `1234-5678-9012-3456` is masked as `00000000000000-3456`.
     * If `masking_character` is `*`, `number_to_mask` is `3`, and `reverse_order`
     * is `true`, then the string `12345` is masked as `12***`.
     *
     * Generated from protobuf field <code>bool reverse_order = 3;</code>
     */
    private $reverse_order = false;
    /**
     * When masking a string, items in this list will be skipped when replacing
     * characters. For example, if the input string is `555-555-5555` and you
     * instruct Cloud DLP to skip `-` and mask 5 characters with `*`, Cloud DLP
     * returns `***-**5-5555`.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.CharsToIgnore characters_to_ignore = 4;</code>
     */
    private $characters_to_ignore;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $masking_character
     *           Character to use to mask the sensitive values&mdash;for example, `*` for an
     *           alphabetic string such as a name, or `0` for a numeric string such as ZIP
     *           code or credit card number. This string must have a length of 1. If not
     *           supplied, this value defaults to `*` for strings, and `0` for digits.
     *     @type int $number_to_mask
     *           Number of characters to mask. If not set, all matching chars will be
     *           masked. Skipped characters do not count towards this tally.
     *     @type bool $reverse_order
     *           Mask characters in reverse order. For example, if `masking_character` is
     *           `0`, `number_to_mask` is `14`, and `reverse_order` is `false`, then the
     *           input string `1234-5678-9012-3456` is masked as `00000000000000-3456`.
     *           If `masking_character` is `*`, `number_to_mask` is `3`, and `reverse_order`
     *           is `true`, then the string `12345` is masked as `12***`.
     *     @type array<\Google\Cloud\Dlp\V2\CharsToIgnore>|\Google\Protobuf\Internal\RepeatedField $characters_to_ignore
     *           When masking a string, items in this list will be skipped when replacing
     *           characters. For example, if the input string is `555-555-5555` and you
     *           instruct Cloud DLP to skip `-` and mask 5 characters with `*`, Cloud DLP
     *           returns `***-**5-5555`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Character to use to mask the sensitive values&mdash;for example, `*` for an
     * alphabetic string such as a name, or `0` for a numeric string such as ZIP
     * code or credit card number. This string must have a length of 1. If not
     * supplied, this value defaults to `*` for strings, and `0` for digits.
     *
     * Generated from protobuf field <code>string masking_character = 1;</code>
     * @return string
     */
    public function getMaskingCharacter()
    {
        return $this->masking_character;
    }

    /**
     * Character to use to mask the sensitive values&mdash;for example, `*` for an
     * alphabetic string such as a name, or `0` for a numeric string such as ZIP
     * code or credit card number. This string must have a length of 1. If not
     * supplied, this value defaults to `*` for strings, and `0` for digits.
     *
     * Generated from protobuf field <code>string masking_character = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMaskingCharacter($var)
    {
        GPBUtil::checkString($var, True);
        $this->masking_character = $var;

        return $this;
    }

    /**
     * Number of characters to mask. If not set, all matching chars will be
     * masked. Skipped characters do not count towards this tally.
     *
     * Generated from protobuf field <code>int32 number_to_mask = 2;</code>
     * @return int
     */
    public function getNumberToMask()
    {
        return $this->number_to_mask;
    }

    /**
     * Number of characters to mask. If not set, all matching chars will be
     * masked. Skipped characters do not count towards this tally.
     *
     * Generated from protobuf field <code>int32 number_to_mask = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNumberToMask($var)
    {
        GPBUtil::checkInt32($var);
        $this->number_to_mask = $var;

        return $this;
    }

    /**
     * Mask characters in reverse order. For example, if `masking_character` is
     * `0`, `number_to_mask` is `14`, and `reverse_order` is `false`, then the
     * input string `1234-5678-9012-3456` is masked as `00000000000000-3456`.
     * If `masking_character` is `*`, `number_to_mask` is `3`, and `reverse_order`
     * is `true`, then the string `12345` is masked as `12***`.
     *
     * Generated from protobuf field <code>bool reverse_order = 3;</code>
     * @return bool
     */
    public function getReverseOrder()
    {
        return $this->reverse_order;
    }

    /**
     * Mask characters in reverse order. For example, if `masking_character` is
     * `0`, `number_to_mask` is `14`, and `reverse_order` is `false`, then the
     * input string `1234-5678-9012-3456` is masked as `00000000000000-3456`.
     * If `masking_character` is `*`, `number_to_mask` is `3`, and `reverse_order`
     * is `true`, then the string `12345` is masked as `12***`.
     *
     * Generated from protobuf field <code>bool reverse_order = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setReverseOrder($var)
    {
        GPBUtil::checkBool($var);
        $this->reverse_order = $var;

        return $this;
    }

    /**
     * When masking a string, items in this list will be skipped when replacing
     * characters. For example, if the input string is `555-555-5555` and you
     * instruct Cloud DLP to skip `-` and mask 5 characters with `*`, Cloud DLP
     * returns `***-**5-5555`.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.CharsToIgnore characters_to_ignore = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCharactersToIgnore()
    {
        return $this->characters_to_ignore;
    }

    /**
     * When masking a string, items in this list will be skipped when replacing
     * characters. For example, if the input string is `555-555-5555` and you
     * instruct Cloud DLP to skip `-` and mask 5 characters with `*`, Cloud DLP
     * returns `***-**5-5555`.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.CharsToIgnore characters_to_ignore = 4;</code>
     * @param array<\Google\Cloud\Dlp\V2\CharsToIgnore>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCharactersToIgnore($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\CharsToIgnore::class);
        $this->characters_to_ignore = $arr;

        return $this;
    }

}

