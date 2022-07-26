<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/common.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of Kubernetes Namespaces
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.Namespaces</code>
 */
class Namespaces extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of Kubernetes Namespaces
     *
     * Generated from protobuf field <code>repeated string namespaces = 1;</code>
     */
    private $namespaces;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $namespaces
     *           A list of Kubernetes Namespaces
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of Kubernetes Namespaces
     *
     * Generated from protobuf field <code>repeated string namespaces = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNamespaces()
    {
        return $this->namespaces;
    }

    /**
     * A list of Kubernetes Namespaces
     *
     * Generated from protobuf field <code>repeated string namespaces = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNamespaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->namespaces = $arr;

        return $this;
    }

}

