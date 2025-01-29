<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: my_service/v1/post.proto

namespace MyService\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>my_service.v1.ListPostsRequest</code>
 */
class ListPostsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string query = 1 [json_name = "query"];</code>
     */
    protected $query = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     * }
     */
    public function __construct($data = NULL) {
        \MyService\V1\GPBMetadata\Post::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string query = 1 [json_name = "query"];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>string query = 1 [json_name = "query"];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

}

