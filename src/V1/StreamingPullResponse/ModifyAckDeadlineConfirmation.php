<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1\StreamingPullResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Acknowledgement IDs sent in one or more previous requests to modify the
 * deadline for a specific message.
 *
 * Generated from protobuf message <code>google.pubsub.v1.StreamingPullResponse.ModifyAckDeadlineConfirmation</code>
 */
class ModifyAckDeadlineConfirmation extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Successfully processed acknowledgement IDs.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $ack_ids;
    /**
     * Optional. List of acknowledgement IDs that were malformed or whose
     * acknowledgement deadline has expired.
     *
     * Generated from protobuf field <code>repeated string invalid_ack_ids = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $invalid_ack_ids;
    /**
     * Optional. List of acknowledgement IDs that failed processing with
     * temporary issues.
     *
     * Generated from protobuf field <code>repeated string temporary_failed_ack_ids = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $temporary_failed_ack_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ack_ids
     *           Optional. Successfully processed acknowledgement IDs.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $invalid_ack_ids
     *           Optional. List of acknowledgement IDs that were malformed or whose
     *           acknowledgement deadline has expired.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $temporary_failed_ack_ids
     *           Optional. List of acknowledgement IDs that failed processing with
     *           temporary issues.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Successfully processed acknowledgement IDs.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAckIds()
    {
        return $this->ack_ids;
    }

    /**
     * Optional. Successfully processed acknowledgement IDs.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAckIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ack_ids = $arr;

        return $this;
    }

    /**
     * Optional. List of acknowledgement IDs that were malformed or whose
     * acknowledgement deadline has expired.
     *
     * Generated from protobuf field <code>repeated string invalid_ack_ids = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInvalidAckIds()
    {
        return $this->invalid_ack_ids;
    }

    /**
     * Optional. List of acknowledgement IDs that were malformed or whose
     * acknowledgement deadline has expired.
     *
     * Generated from protobuf field <code>repeated string invalid_ack_ids = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInvalidAckIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->invalid_ack_ids = $arr;

        return $this;
    }

    /**
     * Optional. List of acknowledgement IDs that failed processing with
     * temporary issues.
     *
     * Generated from protobuf field <code>repeated string temporary_failed_ack_ids = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTemporaryFailedAckIds()
    {
        return $this->temporary_failed_ack_ids;
    }

    /**
     * Optional. List of acknowledgement IDs that failed processing with
     * temporary issues.
     *
     * Generated from protobuf field <code>repeated string temporary_failed_ack_ids = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTemporaryFailedAckIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->temporary_failed_ack_ids = $arr;

        return $this;
    }

}


