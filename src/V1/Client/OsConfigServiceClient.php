<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/osconfig/v1/osconfig_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\OsConfig\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\OsConfig\V1\CancelPatchJobRequest;
use Google\Cloud\OsConfig\V1\CreatePatchDeploymentRequest;
use Google\Cloud\OsConfig\V1\DeletePatchDeploymentRequest;
use Google\Cloud\OsConfig\V1\ExecutePatchJobRequest;
use Google\Cloud\OsConfig\V1\GetPatchDeploymentRequest;
use Google\Cloud\OsConfig\V1\GetPatchJobRequest;
use Google\Cloud\OsConfig\V1\ListPatchDeploymentsRequest;
use Google\Cloud\OsConfig\V1\ListPatchJobInstanceDetailsRequest;
use Google\Cloud\OsConfig\V1\ListPatchJobsRequest;
use Google\Cloud\OsConfig\V1\PatchDeployment;
use Google\Cloud\OsConfig\V1\PatchJob;
use Google\Cloud\OsConfig\V1\PausePatchDeploymentRequest;
use Google\Cloud\OsConfig\V1\ResumePatchDeploymentRequest;
use Google\Cloud\OsConfig\V1\UpdatePatchDeploymentRequest;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: OS Config API
 *
 * The OS Config service is a server-side component that you can use to
 * manage package installations and patch jobs for virtual machine instances.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<PatchJob> cancelPatchJobAsync(CancelPatchJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PatchDeployment> createPatchDeploymentAsync(CreatePatchDeploymentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deletePatchDeploymentAsync(DeletePatchDeploymentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PatchJob> executePatchJobAsync(ExecutePatchJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PatchDeployment> getPatchDeploymentAsync(GetPatchDeploymentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PatchJob> getPatchJobAsync(GetPatchJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listPatchDeploymentsAsync(ListPatchDeploymentsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listPatchJobInstanceDetailsAsync(ListPatchJobInstanceDetailsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listPatchJobsAsync(ListPatchJobsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PatchDeployment> pausePatchDeploymentAsync(PausePatchDeploymentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PatchDeployment> resumePatchDeploymentAsync(ResumePatchDeploymentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PatchDeployment> updatePatchDeploymentAsync(UpdatePatchDeploymentRequest $request, array $optionalArgs = [])
 */
final class OsConfigServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.osconfig.v1.OsConfigService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'osconfig.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'osconfig.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/os_config_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/os_config_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/os_config_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/os_config_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * patch_deployment resource.
     *
     * @param string $project
     * @param string $patchDeployment
     *
     * @return string The formatted patch_deployment resource.
     */
    public static function patchDeploymentName(string $project, string $patchDeployment): string
    {
        return self::getPathTemplate('patchDeployment')->render([
            'project' => $project,
            'patch_deployment' => $patchDeployment,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a patch_job
     * resource.
     *
     * @param string $project
     * @param string $patchJob
     *
     * @return string The formatted patch_job resource.
     */
    public static function patchJobName(string $project, string $patchJob): string
    {
        return self::getPathTemplate('patchJob')->render([
            'project' => $project,
            'patch_job' => $patchJob,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName(string $project): string
    {
        return self::getPathTemplate('project')->render([
            'project' => $project,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - patchDeployment: projects/{project}/patchDeployments/{patch_deployment}
     * - patchJob: projects/{project}/patchJobs/{patch_job}
     * - project: projects/{project}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string  $formattedName The formatted name string
     * @param ?string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, ?string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'osconfig.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *           *Important*: If you accept a credential configuration (credential
     *           JSON/File/Stream) from an external source for authentication to Google Cloud
     *           Platform, you must validate it before providing it to any Google API or library.
     *           Providing an unvalidated credential configuration to Google APIs can compromise
     *           the security of your systems and data. For more information {@see
     *           https://cloud.google.com/docs/authentication/external/externally-sourced-credentials}
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     *     @type false|LoggerInterface $logger
     *           A PSR-3 compliant logger. If set to false, logging is disabled, ignoring the
     *           'GOOGLE_SDK_PHP_LOGGING' environment flag
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Cancel a patch job. The patch job must be active. Canceled patch jobs
     * cannot be restarted.
     *
     * The async variant is {@see OsConfigServiceClient::cancelPatchJobAsync()} .
     *
     * @example samples/V1/OsConfigServiceClient/cancel_patch_job.php
     *
     * @param CancelPatchJobRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PatchJob
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function cancelPatchJob(CancelPatchJobRequest $request, array $callOptions = []): PatchJob
    {
        return $this->startApiCall('CancelPatchJob', $request, $callOptions)->wait();
    }

    /**
     * Create an OS Config patch deployment.
     *
     * The async variant is {@see OsConfigServiceClient::createPatchDeploymentAsync()}
     * .
     *
     * @example samples/V1/OsConfigServiceClient/create_patch_deployment.php
     *
     * @param CreatePatchDeploymentRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PatchDeployment
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createPatchDeployment(
        CreatePatchDeploymentRequest $request,
        array $callOptions = []
    ): PatchDeployment {
        return $this->startApiCall('CreatePatchDeployment', $request, $callOptions)->wait();
    }

    /**
     * Delete an OS Config patch deployment.
     *
     * The async variant is {@see OsConfigServiceClient::deletePatchDeploymentAsync()}
     * .
     *
     * @example samples/V1/OsConfigServiceClient/delete_patch_deployment.php
     *
     * @param DeletePatchDeploymentRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deletePatchDeployment(DeletePatchDeploymentRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeletePatchDeployment', $request, $callOptions)->wait();
    }

    /**
     * Patch VM instances by creating and running a patch job.
     *
     * The async variant is {@see OsConfigServiceClient::executePatchJobAsync()} .
     *
     * @example samples/V1/OsConfigServiceClient/execute_patch_job.php
     *
     * @param ExecutePatchJobRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PatchJob
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function executePatchJob(ExecutePatchJobRequest $request, array $callOptions = []): PatchJob
    {
        return $this->startApiCall('ExecutePatchJob', $request, $callOptions)->wait();
    }

    /**
     * Get an OS Config patch deployment.
     *
     * The async variant is {@see OsConfigServiceClient::getPatchDeploymentAsync()} .
     *
     * @example samples/V1/OsConfigServiceClient/get_patch_deployment.php
     *
     * @param GetPatchDeploymentRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PatchDeployment
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getPatchDeployment(GetPatchDeploymentRequest $request, array $callOptions = []): PatchDeployment
    {
        return $this->startApiCall('GetPatchDeployment', $request, $callOptions)->wait();
    }

    /**
     * Get the patch job. This can be used to track the progress of an
     * ongoing patch job or review the details of completed jobs.
     *
     * The async variant is {@see OsConfigServiceClient::getPatchJobAsync()} .
     *
     * @example samples/V1/OsConfigServiceClient/get_patch_job.php
     *
     * @param GetPatchJobRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PatchJob
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getPatchJob(GetPatchJobRequest $request, array $callOptions = []): PatchJob
    {
        return $this->startApiCall('GetPatchJob', $request, $callOptions)->wait();
    }

    /**
     * Get a page of OS Config patch deployments.
     *
     * The async variant is {@see OsConfigServiceClient::listPatchDeploymentsAsync()} .
     *
     * @example samples/V1/OsConfigServiceClient/list_patch_deployments.php
     *
     * @param ListPatchDeploymentsRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listPatchDeployments(
        ListPatchDeploymentsRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListPatchDeployments', $request, $callOptions);
    }

    /**
     * Get a list of instance details for a given patch job.
     *
     * The async variant is
     * {@see OsConfigServiceClient::listPatchJobInstanceDetailsAsync()} .
     *
     * @example samples/V1/OsConfigServiceClient/list_patch_job_instance_details.php
     *
     * @param ListPatchJobInstanceDetailsRequest $request     A request to house fields associated with the call.
     * @param array                              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listPatchJobInstanceDetails(
        ListPatchJobInstanceDetailsRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListPatchJobInstanceDetails', $request, $callOptions);
    }

    /**
     * Get a list of patch jobs.
     *
     * The async variant is {@see OsConfigServiceClient::listPatchJobsAsync()} .
     *
     * @example samples/V1/OsConfigServiceClient/list_patch_jobs.php
     *
     * @param ListPatchJobsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listPatchJobs(ListPatchJobsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListPatchJobs', $request, $callOptions);
    }

    /**
     * Change state of patch deployment to "PAUSED".
     * Patch deployment in paused state doesn't generate patch jobs.
     *
     * The async variant is {@see OsConfigServiceClient::pausePatchDeploymentAsync()} .
     *
     * @example samples/V1/OsConfigServiceClient/pause_patch_deployment.php
     *
     * @param PausePatchDeploymentRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PatchDeployment
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function pausePatchDeployment(PausePatchDeploymentRequest $request, array $callOptions = []): PatchDeployment
    {
        return $this->startApiCall('PausePatchDeployment', $request, $callOptions)->wait();
    }

    /**
     * Change state of patch deployment back to "ACTIVE".
     * Patch deployment in active state continues to generate patch jobs.
     *
     * The async variant is {@see OsConfigServiceClient::resumePatchDeploymentAsync()}
     * .
     *
     * @example samples/V1/OsConfigServiceClient/resume_patch_deployment.php
     *
     * @param ResumePatchDeploymentRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PatchDeployment
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function resumePatchDeployment(
        ResumePatchDeploymentRequest $request,
        array $callOptions = []
    ): PatchDeployment {
        return $this->startApiCall('ResumePatchDeployment', $request, $callOptions)->wait();
    }

    /**
     * Update an OS Config patch deployment.
     *
     * The async variant is {@see OsConfigServiceClient::updatePatchDeploymentAsync()}
     * .
     *
     * @example samples/V1/OsConfigServiceClient/update_patch_deployment.php
     *
     * @param UpdatePatchDeploymentRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PatchDeployment
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updatePatchDeployment(
        UpdatePatchDeploymentRequest $request,
        array $callOptions = []
    ): PatchDeployment {
        return $this->startApiCall('UpdatePatchDeployment', $request, $callOptions)->wait();
    }
}
