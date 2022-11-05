<?php
namespace Aws\CodeStarconnections;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS CodeStar connections** service.
 * @method Result createConnection(array $args = [])
 * @method Promise createConnectionAsync(array $args = [])
 * @method Result createHost(array $args = [])
 * @method Promise createHostAsync(array $args = [])
 * @method Result deleteConnection(array $args = [])
 * @method Promise deleteConnectionAsync(array $args = [])
 * @method Result deleteHost(array $args = [])
 * @method Promise deleteHostAsync(array $args = [])
 * @method Result getConnection(array $args = [])
 * @method Promise getConnectionAsync(array $args = [])
 * @method Result getHost(array $args = [])
 * @method Promise getHostAsync(array $args = [])
 * @method Result listConnections(array $args = [])
 * @method Promise listConnectionsAsync(array $args = [])
 * @method Result listHosts(array $args = [])
 * @method Promise listHostsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateHost(array $args = [])
 * @method Promise updateHostAsync(array $args = [])
 */
class CodeStarconnectionsClient extends AwsClient {}
