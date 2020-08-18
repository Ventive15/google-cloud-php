<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/recommendation.proto

namespace Google\Cloud\Recommender\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains the impact a recommendation can have for a given category.
 *
 * Generated from protobuf message <code>google.cloud.recommender.v1.Impact</code>
 */
class Impact extends \Google\Protobuf\Internal\Message
{
    /**
     * Category that is being targeted.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.Impact.Category category = 1;</code>
     */
    private $category = 0;
    protected $projection;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $category
     *           Category that is being targeted.
     *     @type \Google\Cloud\Recommender\V1\CostProjection $cost_projection
     *           Use with CategoryType.COST
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommender\V1\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Category that is being targeted.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.Impact.Category category = 1;</code>
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Category that is being targeted.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.Impact.Category category = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Recommender\V1\Impact\Category::class);
        $this->category = $var;

        return $this;
    }

    /**
     * Use with CategoryType.COST
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.CostProjection cost_projection = 100;</code>
     * @return \Google\Cloud\Recommender\V1\CostProjection
     */
    public function getCostProjection()
    {
        return $this->readOneof(100);
    }

    public function hasCostProjection()
    {
        return $this->hasOneof(100);
    }

    /**
     * Use with CategoryType.COST
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.CostProjection cost_projection = 100;</code>
     * @param \Google\Cloud\Recommender\V1\CostProjection $var
     * @return $this
     */
    public function setCostProjection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Recommender\V1\CostProjection::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getProjection()
    {
        return $this->whichOneof("projection");
    }

}

