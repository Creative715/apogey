<?php
namespace Aws\DataExchange;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Data Exchange** service.
 * @method Result cancelJob(array $args = [])
 * @method Promise cancelJobAsync(array $args = [])
 * @method Result createDataSet(array $args = [])
 * @method Promise createDataSetAsync(array $args = [])
 * @method Result createJob(array $args = [])
 * @method Promise createJobAsync(array $args = [])
 * @method Result createRevision(array $args = [])
 * @method Promise createRevisionAsync(array $args = [])
 * @method Result deleteAsset(array $args = [])
 * @method Promise deleteAssetAsync(array $args = [])
 * @method Result deleteDataSet(array $args = [])
 * @method Promise deleteDataSetAsync(array $args = [])
 * @method Result deleteRevision(array $args = [])
 * @method Promise deleteRevisionAsync(array $args = [])
 * @method Result getAsset(array $args = [])
 * @method Promise getAssetAsync(array $args = [])
 * @method Result getDataSet(array $args = [])
 * @method Promise getDataSetAsync(array $args = [])
 * @method Result getJob(array $args = [])
 * @method Promise getJobAsync(array $args = [])
 * @method Result getRevision(array $args = [])
 * @method Promise getRevisionAsync(array $args = [])
 * @method Result listDataSetRevisions(array $args = [])
 * @method Promise listDataSetRevisionsAsync(array $args = [])
 * @method Result listDataSets(array $args = [])
 * @method Promise listDataSetsAsync(array $args = [])
 * @method Result listJobs(array $args = [])
 * @method Promise listJobsAsync(array $args = [])
 * @method Result listRevisionAssets(array $args = [])
 * @method Promise listRevisionAssetsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result startJob(array $args = [])
 * @method Promise startJobAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateAsset(array $args = [])
 * @method Promise updateAssetAsync(array $args = [])
 * @method Result updateDataSet(array $args = [])
 * @method Promise updateDataSetAsync(array $args = [])
 * @method Result updateRevision(array $args = [])
 * @method Promise updateRevisionAsync(array $args = [])
 */
class DataExchangeClient extends AwsClient {}
