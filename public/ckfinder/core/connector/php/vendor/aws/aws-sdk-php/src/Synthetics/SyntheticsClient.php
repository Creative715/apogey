<?php
namespace Aws\Synthetics;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Synthetics** service.
 * @method Result createCanary(array $args = [])
 * @method Promise createCanaryAsync(array $args = [])
 * @method Result deleteCanary(array $args = [])
 * @method Promise deleteCanaryAsync(array $args = [])
 * @method Result describeCanaries(array $args = [])
 * @method Promise describeCanariesAsync(array $args = [])
 * @method Result describeCanariesLastRun(array $args = [])
 * @method Promise describeCanariesLastRunAsync(array $args = [])
 * @method Result describeRuntimeVersions(array $args = [])
 * @method Promise describeRuntimeVersionsAsync(array $args = [])
 * @method Result getCanary(array $args = [])
 * @method Promise getCanaryAsync(array $args = [])
 * @method Result getCanaryRuns(array $args = [])
 * @method Promise getCanaryRunsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result startCanary(array $args = [])
 * @method Promise startCanaryAsync(array $args = [])
 * @method Result stopCanary(array $args = [])
 * @method Promise stopCanaryAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateCanary(array $args = [])
 * @method Promise updateCanaryAsync(array $args = [])
 */
class SyntheticsClient extends AwsClient {}
