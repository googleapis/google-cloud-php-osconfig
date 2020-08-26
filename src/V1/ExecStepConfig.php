<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_jobs.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Common configurations for an ExecStep.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.ExecStepConfig</code>
 */
class ExecStepConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Defaults to [0]. A list of possible return values that the
     * execution can return to indicate a success.
     *
     * Generated from protobuf field <code>repeated int32 allowed_success_codes = 3;</code>
     */
    private $allowed_success_codes;
    /**
     * The script interpreter to use to run the script. If no interpreter is
     * specified the script will be executed directly, which will likely
     * only succeed for scripts with [shebang lines]
     * (https://en.wikipedia.org/wiki/Shebang_\(Unix\)).
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.ExecStepConfig.Interpreter interpreter = 4;</code>
     */
    private $interpreter = 0;
    protected $executable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $local_path
     *           An absolute path to the executable on the VM.
     *     @type \Google\Cloud\OsConfig\V1\GcsObject $gcs_object
     *           A Cloud Storage object containing the executable.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $allowed_success_codes
     *           Defaults to [0]. A list of possible return values that the
     *           execution can return to indicate a success.
     *     @type int $interpreter
     *           The script interpreter to use to run the script. If no interpreter is
     *           specified the script will be executed directly, which will likely
     *           only succeed for scripts with [shebang lines]
     *           (https://en.wikipedia.org/wiki/Shebang_\(Unix\)).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchJobs::initOnce();
        parent::__construct($data);
    }

    /**
     * An absolute path to the executable on the VM.
     *
     * Generated from protobuf field <code>string local_path = 1;</code>
     * @return string
     */
    public function getLocalPath()
    {
        return $this->readOneof(1);
    }

    /**
     * An absolute path to the executable on the VM.
     *
     * Generated from protobuf field <code>string local_path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocalPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A Cloud Storage object containing the executable.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.GcsObject gcs_object = 2;</code>
     * @return \Google\Cloud\OsConfig\V1\GcsObject
     */
    public function getGcsObject()
    {
        return $this->readOneof(2);
    }

    /**
     * A Cloud Storage object containing the executable.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.GcsObject gcs_object = 2;</code>
     * @param \Google\Cloud\OsConfig\V1\GcsObject $var
     * @return $this
     */
    public function setGcsObject($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\GcsObject::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Defaults to [0]. A list of possible return values that the
     * execution can return to indicate a success.
     *
     * Generated from protobuf field <code>repeated int32 allowed_success_codes = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedSuccessCodes()
    {
        return $this->allowed_success_codes;
    }

    /**
     * Defaults to [0]. A list of possible return values that the
     * execution can return to indicate a success.
     *
     * Generated from protobuf field <code>repeated int32 allowed_success_codes = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedSuccessCodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->allowed_success_codes = $arr;

        return $this;
    }

    /**
     * The script interpreter to use to run the script. If no interpreter is
     * specified the script will be executed directly, which will likely
     * only succeed for scripts with [shebang lines]
     * (https://en.wikipedia.org/wiki/Shebang_\(Unix\)).
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.ExecStepConfig.Interpreter interpreter = 4;</code>
     * @return int
     */
    public function getInterpreter()
    {
        return $this->interpreter;
    }

    /**
     * The script interpreter to use to run the script. If no interpreter is
     * specified the script will be executed directly, which will likely
     * only succeed for scripts with [shebang lines]
     * (https://en.wikipedia.org/wiki/Shebang_\(Unix\)).
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.ExecStepConfig.Interpreter interpreter = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setInterpreter($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\ExecStepConfig_Interpreter::class);
        $this->interpreter = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getExecutable()
    {
        return $this->whichOneof("executable");
    }

}

