<?php
namespace Aws\SnowBall;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Import/Export Snowball** service.
 * @method Result cancelCluster(array $args = [])
 * @method Promise cancelClusterAsync(array $args = [])
 * @method Result cancelJob(array $args = [])
 * @method Promise cancelJobAsync(array $args = [])
 * @method Result createAddress(array $args = [])
 * @method Promise createAddressAsync(array $args = [])
 * @method Result createCluster(array $args = [])
 * @method Promise createClusterAsync(array $args = [])
 * @method Result createJob(array $args = [])
 * @method Promise createJobAsync(array $args = [])
 * @method Result createReturnShippingLabel(array $args = [])
 * @method Promise createReturnShippingLabelAsync(array $args = [])
 * @method Result describeAddress(array $args = [])
 * @method Promise describeAddressAsync(array $args = [])
 * @method Result describeAddresses(array $args = [])
 * @method Promise describeAddressesAsync(array $args = [])
 * @method Result describeCluster(array $args = [])
 * @method Promise describeClusterAsync(array $args = [])
 * @method Result describeJob(array $args = [])
 * @method Promise describeJobAsync(array $args = [])
 * @method Result describeReturnShippingLabel(array $args = [])
 * @method Promise describeReturnShippingLabelAsync(array $args = [])
 * @method Result getJobManifest(array $args = [])
 * @method Promise getJobManifestAsync(array $args = [])
 * @method Result getJobUnlockCode(array $args = [])
 * @method Promise getJobUnlockCodeAsync(array $args = [])
 * @method Result getSnowballUsage(array $args = [])
 * @method Promise getSnowballUsageAsync(array $args = [])
 * @method Result getSoftwareUpdates(array $args = [])
 * @method Promise getSoftwareUpdatesAsync(array $args = [])
 * @method Result listClusterJobs(array $args = [])
 * @method Promise listClusterJobsAsync(array $args = [])
 * @method Result listClusters(array $args = [])
 * @method Promise listClustersAsync(array $args = [])
 * @method Result listCompatibleImages(array $args = [])
 * @method Promise listCompatibleImagesAsync(array $args = [])
 * @method Result listJobs(array $args = [])
 * @method Promise listJobsAsync(array $args = [])
 * @method Result updateCluster(array $args = [])
 * @method Promise updateClusterAsync(array $args = [])
 * @method Result updateJob(array $args = [])
 * @method Promise updateJobAsync(array $args = [])
 * @method Result updateJobShipmentState(array $args = [])
 * @method Promise updateJobShipmentStateAsync(array $args = [])
 */
class SnowBallClient extends AwsClient {}
