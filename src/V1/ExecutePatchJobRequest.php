<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_jobs.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message to initiate patching across Compute Engine
 * instances.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.ExecutePatchJobRequest</code>
 */
class ExecutePatchJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project in which to run this patch in the form `projects/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Description of the patch job. Length of the description is limited
     * to 1024 characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * Required. Instances to patch, either explicitly or filtered by some
     * criteria such as zone or labels.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchInstanceFilter instance_filter = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance_filter = null;
    /**
     * Patch configuration being applied. If omitted, instances are
     * patched using the default configurations.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchConfig patch_config = 4;</code>
     */
    protected $patch_config = null;
    /**
     * Duration of the patch job. After the duration ends, the patch job
     * times out.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 5;</code>
     */
    protected $duration = null;
    /**
     * If this patch is a dry-run only, instances are contacted but
     * will do nothing.
     *
     * Generated from protobuf field <code>bool dry_run = 6;</code>
     */
    protected $dry_run = false;
    /**
     * Display name for this patch job. This does not have to be unique.
     *
     * Generated from protobuf field <code>string display_name = 8;</code>
     */
    protected $display_name = '';
    /**
     * Rollout strategy of the patch job.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchRollout rollout = 9;</code>
     */
    protected $rollout = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project in which to run this patch in the form `projects/&#42;`
     *     @type string $description
     *           Description of the patch job. Length of the description is limited
     *           to 1024 characters.
     *     @type \Google\Cloud\OsConfig\V1\PatchInstanceFilter $instance_filter
     *           Required. Instances to patch, either explicitly or filtered by some
     *           criteria such as zone or labels.
     *     @type \Google\Cloud\OsConfig\V1\PatchConfig $patch_config
     *           Patch configuration being applied. If omitted, instances are
     *           patched using the default configurations.
     *     @type \Google\Protobuf\Duration $duration
     *           Duration of the patch job. After the duration ends, the patch job
     *           times out.
     *     @type bool $dry_run
     *           If this patch is a dry-run only, instances are contacted but
     *           will do nothing.
     *     @type string $display_name
     *           Display name for this patch job. This does not have to be unique.
     *     @type \Google\Cloud\OsConfig\V1\PatchRollout $rollout
     *           Rollout strategy of the patch job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchJobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project in which to run this patch in the form `projects/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project in which to run this patch in the form `projects/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Description of the patch job. Length of the description is limited
     * to 1024 characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the patch job. Length of the description is limited
     * to 1024 characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Required. Instances to patch, either explicitly or filtered by some
     * criteria such as zone or labels.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchInstanceFilter instance_filter = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\OsConfig\V1\PatchInstanceFilter|null
     */
    public function getInstanceFilter()
    {
        return $this->instance_filter;
    }

    public function hasInstanceFilter()
    {
        return isset($this->instance_filter);
    }

    public function clearInstanceFilter()
    {
        unset($this->instance_filter);
    }

    /**
     * Required. Instances to patch, either explicitly or filtered by some
     * criteria such as zone or labels.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchInstanceFilter instance_filter = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\OsConfig\V1\PatchInstanceFilter $var
     * @return $this
     */
    public function setInstanceFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\PatchInstanceFilter::class);
        $this->instance_filter = $var;

        return $this;
    }

    /**
     * Patch configuration being applied. If omitted, instances are
     * patched using the default configurations.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchConfig patch_config = 4;</code>
     * @return \Google\Cloud\OsConfig\V1\PatchConfig|null
     */
    public function getPatchConfig()
    {
        return $this->patch_config;
    }

    public function hasPatchConfig()
    {
        return isset($this->patch_config);
    }

    public function clearPatchConfig()
    {
        unset($this->patch_config);
    }

    /**
     * Patch configuration being applied. If omitted, instances are
     * patched using the default configurations.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchConfig patch_config = 4;</code>
     * @param \Google\Cloud\OsConfig\V1\PatchConfig $var
     * @return $this
     */
    public function setPatchConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\PatchConfig::class);
        $this->patch_config = $var;

        return $this;
    }

    /**
     * Duration of the patch job. After the duration ends, the patch job
     * times out.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * Duration of the patch job. After the duration ends, the patch job
     * times out.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

    /**
     * If this patch is a dry-run only, instances are contacted but
     * will do nothing.
     *
     * Generated from protobuf field <code>bool dry_run = 6;</code>
     * @return bool
     */
    public function getDryRun()
    {
        return $this->dry_run;
    }

    /**
     * If this patch is a dry-run only, instances are contacted but
     * will do nothing.
     *
     * Generated from protobuf field <code>bool dry_run = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setDryRun($var)
    {
        GPBUtil::checkBool($var);
        $this->dry_run = $var;

        return $this;
    }

    /**
     * Display name for this patch job. This does not have to be unique.
     *
     * Generated from protobuf field <code>string display_name = 8;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name for this patch job. This does not have to be unique.
     *
     * Generated from protobuf field <code>string display_name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Rollout strategy of the patch job.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchRollout rollout = 9;</code>
     * @return \Google\Cloud\OsConfig\V1\PatchRollout|null
     */
    public function getRollout()
    {
        return $this->rollout;
    }

    public function hasRollout()
    {
        return isset($this->rollout);
    }

    public function clearRollout()
    {
        unset($this->rollout);
    }

    /**
     * Rollout strategy of the patch job.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchRollout rollout = 9;</code>
     * @param \Google\Cloud\OsConfig\V1\PatchRollout $var
     * @return $this
     */
    public function setRollout($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\PatchRollout::class);
        $this->rollout = $var;

        return $this;
    }

}

