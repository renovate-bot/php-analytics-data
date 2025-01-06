<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Order bys define how rows will be sorted in the response. For example,
 * ordering rows by descending event count is one ordering, and ordering rows by
 * the event name string is a different ordering.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.OrderBy</code>
 */
class OrderBy extends \Google\Protobuf\Internal\Message
{
    /**
     * If true, sorts by descending order.
     *
     * Generated from protobuf field <code>bool desc = 4;</code>
     */
    protected $desc = false;
    protected $one_order_by;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Data\V1alpha\OrderBy\MetricOrderBy $metric
     *           Sorts results by a metric's values.
     *     @type \Google\Analytics\Data\V1alpha\OrderBy\DimensionOrderBy $dimension
     *           Sorts results by a dimension's values.
     *     @type bool $desc
     *           If true, sorts by descending order.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Sorts results by a metric's values.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.OrderBy.MetricOrderBy metric = 1;</code>
     * @return \Google\Analytics\Data\V1alpha\OrderBy\MetricOrderBy|null
     */
    public function getMetric()
    {
        return $this->readOneof(1);
    }

    public function hasMetric()
    {
        return $this->hasOneof(1);
    }

    /**
     * Sorts results by a metric's values.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.OrderBy.MetricOrderBy metric = 1;</code>
     * @param \Google\Analytics\Data\V1alpha\OrderBy\MetricOrderBy $var
     * @return $this
     */
    public function setMetric($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\OrderBy\MetricOrderBy::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Sorts results by a dimension's values.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.OrderBy.DimensionOrderBy dimension = 2;</code>
     * @return \Google\Analytics\Data\V1alpha\OrderBy\DimensionOrderBy|null
     */
    public function getDimension()
    {
        return $this->readOneof(2);
    }

    public function hasDimension()
    {
        return $this->hasOneof(2);
    }

    /**
     * Sorts results by a dimension's values.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.OrderBy.DimensionOrderBy dimension = 2;</code>
     * @param \Google\Analytics\Data\V1alpha\OrderBy\DimensionOrderBy $var
     * @return $this
     */
    public function setDimension($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\OrderBy\DimensionOrderBy::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * If true, sorts by descending order.
     *
     * Generated from protobuf field <code>bool desc = 4;</code>
     * @return bool
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * If true, sorts by descending order.
     *
     * Generated from protobuf field <code>bool desc = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setDesc($var)
    {
        GPBUtil::checkBool($var);
        $this->desc = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getOneOrderBy()
    {
        return $this->whichOneof("one_order_by");
    }

}

