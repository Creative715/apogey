<?php
namespace Aws\S3Control;

use Aws\AwsClient;
use Aws\CacheInterface;
use Aws\HandlerList;
use Aws\Result;
use Aws\S3\UseArnRegion\Configuration;
use Aws\S3\UseArnRegion\ConfigurationInterface;
use Aws\S3\UseArnRegion\ConfigurationProvider as UseArnRegionConfigurationProvider;
use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * This client is used to interact with the **AWS S3 Control** service.
 * @method Result createAccessPoint(array $args = [])
 * @method Promise createAccessPointAsync(array $args = [])
 * @method Result createBucket(array $args = [])
 * @method Promise createBucketAsync(array $args = [])
 * @method Result createJob(array $args = [])
 * @method Promise createJobAsync(array $args = [])
 * @method Result deleteAccessPoint(array $args = [])
 * @method Promise deleteAccessPointAsync(array $args = [])
 * @method Result deleteAccessPointPolicy(array $args = [])
 * @method Promise deleteAccessPointPolicyAsync(array $args = [])
 * @method Result deleteBucket(array $args = [])
 * @method Promise deleteBucketAsync(array $args = [])
 * @method Result deleteBucketLifecycleConfiguration(array $args = [])
 * @method Promise deleteBucketLifecycleConfigurationAsync(array $args = [])
 * @method Result deleteBucketPolicy(array $args = [])
 * @method Promise deleteBucketPolicyAsync(array $args = [])
 * @method Result deleteBucketTagging(array $args = [])
 * @method Promise deleteBucketTaggingAsync(array $args = [])
 * @method Result deleteJobTagging(array $args = [])
 * @method Promise deleteJobTaggingAsync(array $args = [])
 * @method Result deletePublicAccessBlock(array $args = [])
 * @method Promise deletePublicAccessBlockAsync(array $args = [])
 * @method Result deleteStorageLensConfiguration(array $args = [])
 * @method Promise deleteStorageLensConfigurationAsync(array $args = [])
 * @method Result deleteStorageLensConfigurationTagging(array $args = [])
 * @method Promise deleteStorageLensConfigurationTaggingAsync(array $args = [])
 * @method Result describeJob(array $args = [])
 * @method Promise describeJobAsync(array $args = [])
 * @method Result getAccessPoint(array $args = [])
 * @method Promise getAccessPointAsync(array $args = [])
 * @method Result getAccessPointPolicy(array $args = [])
 * @method Promise getAccessPointPolicyAsync(array $args = [])
 * @method Result getAccessPointPolicyStatus(array $args = [])
 * @method Promise getAccessPointPolicyStatusAsync(array $args = [])
 * @method Result getBucket(array $args = [])
 * @method Promise getBucketAsync(array $args = [])
 * @method Result getBucketLifecycleConfiguration(array $args = [])
 * @method Promise getBucketLifecycleConfigurationAsync(array $args = [])
 * @method Result getBucketPolicy(array $args = [])
 * @method Promise getBucketPolicyAsync(array $args = [])
 * @method Result getBucketTagging(array $args = [])
 * @method Promise getBucketTaggingAsync(array $args = [])
 * @method Result getJobTagging(array $args = [])
 * @method Promise getJobTaggingAsync(array $args = [])
 * @method Result getPublicAccessBlock(array $args = [])
 * @method Promise getPublicAccessBlockAsync(array $args = [])
 * @method Result getStorageLensConfiguration(array $args = [])
 * @method Promise getStorageLensConfigurationAsync(array $args = [])
 * @method Result getStorageLensConfigurationTagging(array $args = [])
 * @method Promise getStorageLensConfigurationTaggingAsync(array $args = [])
 * @method Result listAccessPoints(array $args = [])
 * @method Promise listAccessPointsAsync(array $args = [])
 * @method Result listJobs(array $args = [])
 * @method Promise listJobsAsync(array $args = [])
 * @method Result listRegionalBuckets(array $args = [])
 * @method Promise listRegionalBucketsAsync(array $args = [])
 * @method Result listStorageLensConfigurations(array $args = [])
 * @method Promise listStorageLensConfigurationsAsync(array $args = [])
 * @method Result putAccessPointPolicy(array $args = [])
 * @method Promise putAccessPointPolicyAsync(array $args = [])
 * @method Result putBucketLifecycleConfiguration(array $args = [])
 * @method Promise putBucketLifecycleConfigurationAsync(array $args = [])
 * @method Result putBucketPolicy(array $args = [])
 * @method Promise putBucketPolicyAsync(array $args = [])
 * @method Result putBucketTagging(array $args = [])
 * @method Promise putBucketTaggingAsync(array $args = [])
 * @method Result putJobTagging(array $args = [])
 * @method Promise putJobTaggingAsync(array $args = [])
 * @method Result putPublicAccessBlock(array $args = [])
 * @method Promise putPublicAccessBlockAsync(array $args = [])
 * @method Result putStorageLensConfiguration(array $args = [])
 * @method Promise putStorageLensConfigurationAsync(array $args = [])
 * @method Result putStorageLensConfigurationTagging(array $args = [])
 * @method Promise putStorageLensConfigurationTaggingAsync(array $args = [])
 * @method Result updateJobPriority(array $args = [])
 * @method Promise updateJobPriorityAsync(array $args = [])
 * @method Result updateJobStatus(array $args = [])
 * @method Promise updateJobStatusAsync(array $args = [])
 */
class S3ControlClient extends AwsClient
{
    public static function getArguments()
    {
        $args = parent::getArguments();
        return $args + [
            'use_dual_stack_endpoint' => [
                'type' => 'config',
                'valid' => ['bool'],
                'doc' => 'Set to true to send requests to an S3 Control Dual Stack'
                    . ' endpoint by default, which enables IPv6 Protocol.'
                    . ' Can be enabled or disabled on individual operations by setting'
                    . ' \'@use_dual_stack_endpoint\' to true or false.',
                'default' => false,
            ],
            'use_arn_region' => [
                'type'    => 'config',
                'valid'   => [
                    'bool',
                    Configuration::class,
                    CacheInterface::class,
                    'callable'
                ],
                'doc'     => 'Set to true to allow passed in ARNs to override'
                    . ' client region. Accepts...',
                'fn' => [__CLASS__, '_apply_use_arn_region'],
                'default' => [UseArnRegionConfigurationProvider::class, 'defaultProvider'],
            ],
        ];
    }

    public static function _apply_use_arn_region($value, array &$args, HandlerList $list)
    {
        if ($value instanceof CacheInterface) {
            $value = UseArnRegionConfigurationProvider::defaultProvider($args);
        }
        if (is_callable($value)) {
            $value = $value();
        }
        if ($value instanceof PromiseInterface) {
            $value = $value->wait();
        }
        if ($value instanceof ConfigurationInterface) {
            $args['use_arn_region'] = $value;
        } else {
            // The Configuration class itself will validate other inputs
            $args['use_arn_region'] = new Configuration($value);
        }
    }

    /**
     * {@inheritdoc}
     *
     * In addition to the options available to
     * {@see Aws\AwsClient::__construct}, S3ControlClient accepts the following
     * option:
     *
     * - use_dual_stack_endpoint: (bool) Set to true to send requests to an S3
     *   Control Dual Stack endpoint by default, which enables IPv6 Protocol.
     *   Can be enabled or disabled on individual operations by setting
     *   '@use_dual_stack_endpoint\' to true or false. Note:
     *   you cannot use it together with an accelerate endpoint.
     *
     * @param array $args
     */
    public function __construct(array $args)
    {
        parent::__construct($args);
        $stack = $this->getHandlerList();
        $stack->appendBuild(
            S3ControlEndpointMiddleware::wrap(
                $this->getRegion(),
                [
                    'dual_stack' => $this->getConfig('use_dual_stack_endpoint'),
                ]
            ),
            's3control.endpoint_middleware'
        );
        $stack->appendBuild(
            EndpointArnMiddleware::wrap(
                $this->getApi(),
                $this->getRegion(),
                [
                    'use_arn_region' => $this->getConfig('use_arn_region'),
                    'dual_stack' => $this->getConfig('use_dual_stack_endpoint'),
                    'endpoint' => isset($args['endpoint'])
                        ? $args['endpoint']
                        : null
                ]
            ),
            's3control.endpoint_arn_middleware'
        );
    }
}
