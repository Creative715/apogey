<?php
namespace Aws\ComputeOptimizer;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Compute Optimizer** service.
 * @method Result describeRecommendationExportJobs(array $args = [])
 * @method Promise describeRecommendationExportJobsAsync(array $args = [])
 * @method Result exportAutoScalingGroupRecommendations(array $args = [])
 * @method Promise exportAutoScalingGroupRecommendationsAsync(array $args = [])
 * @method Result exportEC2InstanceRecommendations(array $args = [])
 * @method Promise exportEC2InstanceRecommendationsAsync(array $args = [])
 * @method Result getAutoScalingGroupRecommendations(array $args = [])
 * @method Promise getAutoScalingGroupRecommendationsAsync(array $args = [])
 * @method Result getEBSVolumeRecommendations(array $args = [])
 * @method Promise getEBSVolumeRecommendationsAsync(array $args = [])
 * @method Result getEC2InstanceRecommendations(array $args = [])
 * @method Promise getEC2InstanceRecommendationsAsync(array $args = [])
 * @method Result getEC2RecommendationProjectedMetrics(array $args = [])
 * @method Promise getEC2RecommendationProjectedMetricsAsync(array $args = [])
 * @method Result getEnrollmentStatus(array $args = [])
 * @method Promise getEnrollmentStatusAsync(array $args = [])
 * @method Result getLambdaFunctionRecommendations(array $args = [])
 * @method Promise getLambdaFunctionRecommendationsAsync(array $args = [])
 * @method Result getRecommendationSummaries(array $args = [])
 * @method Promise getRecommendationSummariesAsync(array $args = [])
 * @method Result updateEnrollmentStatus(array $args = [])
 * @method Promise updateEnrollmentStatusAsync(array $args = [])
 */
class ComputeOptimizerClient extends AwsClient {}
