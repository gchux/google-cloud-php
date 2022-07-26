<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/gkebackup.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListVolumeBackups.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.ListVolumeBackupsResponse</code>
 */
class ListVolumeBackupsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of VolumeBackups matching the given criteria.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.VolumeBackup volume_backups = 1;</code>
     */
    private $volume_backups;
    /**
     * A token which may be sent as
     * [page_token][google.cloud.gkebackup.v1.ListVolumeBackupsRequest.page_token] in a subsequent
     * `ListVolumeBackups` call to retrieve the next page of results.
     * If this field is omitted or empty, then there are no more results to
     * return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GkeBackup\V1\VolumeBackup[]|\Google\Protobuf\Internal\RepeatedField $volume_backups
     *           The list of VolumeBackups matching the given criteria.
     *     @type string $next_page_token
     *           A token which may be sent as
     *           [page_token][google.cloud.gkebackup.v1.ListVolumeBackupsRequest.page_token] in a subsequent
     *           `ListVolumeBackups` call to retrieve the next page of results.
     *           If this field is omitted or empty, then there are no more results to
     *           return.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Gkebackup::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of VolumeBackups matching the given criteria.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.VolumeBackup volume_backups = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVolumeBackups()
    {
        return $this->volume_backups;
    }

    /**
     * The list of VolumeBackups matching the given criteria.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.VolumeBackup volume_backups = 1;</code>
     * @param \Google\Cloud\GkeBackup\V1\VolumeBackup[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVolumeBackups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeBackup\V1\VolumeBackup::class);
        $this->volume_backups = $arr;

        return $this;
    }

    /**
     * A token which may be sent as
     * [page_token][google.cloud.gkebackup.v1.ListVolumeBackupsRequest.page_token] in a subsequent
     * `ListVolumeBackups` call to retrieve the next page of results.
     * If this field is omitted or empty, then there are no more results to
     * return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token which may be sent as
     * [page_token][google.cloud.gkebackup.v1.ListVolumeBackupsRequest.page_token] in a subsequent
     * `ListVolumeBackups` call to retrieve the next page of results.
     * If this field is omitted or empty, then there are no more results to
     * return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

