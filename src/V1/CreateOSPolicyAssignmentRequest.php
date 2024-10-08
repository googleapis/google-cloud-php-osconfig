<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy_assignments.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message to create an OS policy assignment
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.CreateOSPolicyAssignmentRequest</code>
 */
class CreateOSPolicyAssignmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name in the form:
     * projects/{project}/locations/{location}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The OS policy assignment to be created.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicyAssignment os_policy_assignment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $os_policy_assignment = null;
    /**
     * Required. The logical name of the OS policy assignment in the project
     * with the following restrictions:
     * * Must contain only lowercase letters, numbers, and hyphens.
     * * Must start with a letter.
     * * Must be between 1-63 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the project.
     *
     * Generated from protobuf field <code>string os_policy_assignment_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $os_policy_assignment_id = '';

    /**
     * @param string                                       $parent               Required. The parent resource name in the form:
     *                                                                           projects/{project}/locations/{location}
     *                                                                           Please see {@see OsConfigZonalServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\OsConfig\V1\OSPolicyAssignment $osPolicyAssignment   Required. The OS policy assignment to be created.
     * @param string                                       $osPolicyAssignmentId Required. The logical name of the OS policy assignment in the project
     *                                                                           with the following restrictions:
     *
     *                                                                           * Must contain only lowercase letters, numbers, and hyphens.
     *                                                                           * Must start with a letter.
     *                                                                           * Must be between 1-63 characters.
     *                                                                           * Must end with a number or a letter.
     *                                                                           * Must be unique within the project.
     *
     * @return \Google\Cloud\OsConfig\V1\CreateOSPolicyAssignmentRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\OsConfig\V1\OSPolicyAssignment $osPolicyAssignment, string $osPolicyAssignmentId): self
    {
        return (new self())
            ->setParent($parent)
            ->setOsPolicyAssignment($osPolicyAssignment)
            ->setOsPolicyAssignmentId($osPolicyAssignmentId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name in the form:
     *           projects/{project}/locations/{location}
     *     @type \Google\Cloud\OsConfig\V1\OSPolicyAssignment $os_policy_assignment
     *           Required. The OS policy assignment to be created.
     *     @type string $os_policy_assignment_id
     *           Required. The logical name of the OS policy assignment in the project
     *           with the following restrictions:
     *           * Must contain only lowercase letters, numbers, and hyphens.
     *           * Must start with a letter.
     *           * Must be between 1-63 characters.
     *           * Must end with a number or a letter.
     *           * Must be unique within the project.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsPolicyAssignments::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name in the form:
     * projects/{project}/locations/{location}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name in the form:
     * projects/{project}/locations/{location}
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
     * Required. The OS policy assignment to be created.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicyAssignment os_policy_assignment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicyAssignment|null
     */
    public function getOsPolicyAssignment()
    {
        return $this->os_policy_assignment;
    }

    public function hasOsPolicyAssignment()
    {
        return isset($this->os_policy_assignment);
    }

    public function clearOsPolicyAssignment()
    {
        unset($this->os_policy_assignment);
    }

    /**
     * Required. The OS policy assignment to be created.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicyAssignment os_policy_assignment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicyAssignment $var
     * @return $this
     */
    public function setOsPolicyAssignment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicyAssignment::class);
        $this->os_policy_assignment = $var;

        return $this;
    }

    /**
     * Required. The logical name of the OS policy assignment in the project
     * with the following restrictions:
     * * Must contain only lowercase letters, numbers, and hyphens.
     * * Must start with a letter.
     * * Must be between 1-63 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the project.
     *
     * Generated from protobuf field <code>string os_policy_assignment_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getOsPolicyAssignmentId()
    {
        return $this->os_policy_assignment_id;
    }

    /**
     * Required. The logical name of the OS policy assignment in the project
     * with the following restrictions:
     * * Must contain only lowercase letters, numbers, and hyphens.
     * * Must start with a letter.
     * * Must be between 1-63 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the project.
     *
     * Generated from protobuf field <code>string os_policy_assignment_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setOsPolicyAssignmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->os_policy_assignment_id = $var;

        return $this;
    }

}

