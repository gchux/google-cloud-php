<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InterconnectLocationRegionInfo;

use UnexpectedValueException;

/**
 * Identifies the network presence of this location.
 *
 * Protobuf type <code>google.cloud.compute.v1.InterconnectLocationRegionInfo.LocationPresence</code>
 */
class LocationPresence
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_LOCATION_PRESENCE = 0;</code>
     */
    const UNDEFINED_LOCATION_PRESENCE = 0;
    /**
     * Generated from protobuf enum <code>GLOBAL = 494663587;</code>
     */
    const PBGLOBAL = 494663587;
    /**
     * Generated from protobuf enum <code>LOCAL_REGION = 403535464;</code>
     */
    const LOCAL_REGION = 403535464;
    /**
     * Generated from protobuf enum <code>LP_GLOBAL = 429584062;</code>
     */
    const LP_GLOBAL = 429584062;
    /**
     * Generated from protobuf enum <code>LP_LOCAL_REGION = 488598851;</code>
     */
    const LP_LOCAL_REGION = 488598851;

    private static $valueToName = [
        self::UNDEFINED_LOCATION_PRESENCE => 'UNDEFINED_LOCATION_PRESENCE',
        self::PBGLOBAL => 'PBGLOBAL',
        self::LOCAL_REGION => 'LOCAL_REGION',
        self::LP_GLOBAL => 'LP_GLOBAL',
        self::LP_LOCAL_REGION => 'LP_LOCAL_REGION',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


