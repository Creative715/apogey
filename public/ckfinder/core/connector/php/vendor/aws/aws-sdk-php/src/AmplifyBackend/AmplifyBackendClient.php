<?php
namespace Aws\AmplifyBackend;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AmplifyBackend** service.
 * @method Result cloneBackend(array $args = [])
 * @method Promise cloneBackendAsync(array $args = [])
 * @method Result createBackend(array $args = [])
 * @method Promise createBackendAsync(array $args = [])
 * @method Result createBackendAPI(array $args = [])
 * @method Promise createBackendAPIAsync(array $args = [])
 * @method Result createBackendAuth(array $args = [])
 * @method Promise createBackendAuthAsync(array $args = [])
 * @method Result createBackendConfig(array $args = [])
 * @method Promise createBackendConfigAsync(array $args = [])
 * @method Result createToken(array $args = [])
 * @method Promise createTokenAsync(array $args = [])
 * @method Result deleteBackend(array $args = [])
 * @method Promise deleteBackendAsync(array $args = [])
 * @method Result deleteBackendAPI(array $args = [])
 * @method Promise deleteBackendAPIAsync(array $args = [])
 * @method Result deleteBackendAuth(array $args = [])
 * @method Promise deleteBackendAuthAsync(array $args = [])
 * @method Result deleteToken(array $args = [])
 * @method Promise deleteTokenAsync(array $args = [])
 * @method Result generateBackendAPIModels(array $args = [])
 * @method Promise generateBackendAPIModelsAsync(array $args = [])
 * @method Result getBackend(array $args = [])
 * @method Promise getBackendAsync(array $args = [])
 * @method Result getBackendAPI(array $args = [])
 * @method Promise getBackendAPIAsync(array $args = [])
 * @method Result getBackendAPIModels(array $args = [])
 * @method Promise getBackendAPIModelsAsync(array $args = [])
 * @method Result getBackendAuth(array $args = [])
 * @method Promise getBackendAuthAsync(array $args = [])
 * @method Result getBackendJob(array $args = [])
 * @method Promise getBackendJobAsync(array $args = [])
 * @method Result getToken(array $args = [])
 * @method Promise getTokenAsync(array $args = [])
 * @method Result listBackendJobs(array $args = [])
 * @method Promise listBackendJobsAsync(array $args = [])
 * @method Result removeAllBackends(array $args = [])
 * @method Promise removeAllBackendsAsync(array $args = [])
 * @method Result removeBackendConfig(array $args = [])
 * @method Promise removeBackendConfigAsync(array $args = [])
 * @method Result updateBackendAPI(array $args = [])
 * @method Promise updateBackendAPIAsync(array $args = [])
 * @method Result updateBackendAuth(array $args = [])
 * @method Promise updateBackendAuthAsync(array $args = [])
 * @method Result updateBackendConfig(array $args = [])
 * @method Promise updateBackendConfigAsync(array $args = [])
 * @method Result updateBackendJob(array $args = [])
 * @method Promise updateBackendJobAsync(array $args = [])
 */
class AmplifyBackendClient extends AwsClient {}
