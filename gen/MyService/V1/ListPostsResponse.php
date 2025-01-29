<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: my-service/v1/post.proto

namespace MyService\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>myService.v1.ListPostsResponse</code>
 */
class ListPostsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .myService.v1.Post posts = 1 [json_name = "posts"];</code>
     */
    private $posts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\MyService\V1\Post>|\Google\Protobuf\Internal\RepeatedField $posts
     * }
     */
    public function __construct($data = NULL) {
        \MyService\V1\GPBMetadata\Post::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .myService.v1.Post posts = 1 [json_name = "posts"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Generated from protobuf field <code>repeated .myService.v1.Post posts = 1 [json_name = "posts"];</code>
     * @param array<\MyService\V1\Post>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPosts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \MyService\V1\Post::class);
        $this->posts = $arr;

        return $this;
    }

}

