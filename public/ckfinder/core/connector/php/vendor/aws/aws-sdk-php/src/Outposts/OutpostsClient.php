<?php
namespace Aws\Outposts;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Outposts** service.
 * @method Result createOutpost(array $args = [])
 * @method Promise createOutpostAsync(array $args = [])
 * @method Result deleteOutpost(array $args = [])
 * @method Promise deleteOutpostAsync(array $args = [])
 * @method Result deleteSite(array $args = [])
 * @method Promise deleteSiteAsync(array $args = [])
 * @method Result getOutpost(array $args = [])
 * @method Promise getOutpostAsync(array $args = [])
 * @method Result getOutpostInstanceTypes(array $args = [])
 * @method Promise getOutpostInstanceTypesAsync(array $args = [])
 * @method Result listOutposts(array $args = [])
 * @method Promise listOutpostsAsync(array $args = [])
 * @method Result listSites(array $args = [])
 * @method Promise listSitesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class OutpostsClient extends AwsClient {}
