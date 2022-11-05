<?php
namespace Aws\TimestreamQuery;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Timestream Query** service.
 * @method Result cancelQuery(array $args = [])
 * @method Promise cancelQueryAsync(array $args = [])
 * @method Result describeEndpoints(array $args = [])
 * @method Promise describeEndpointsAsync(array $args = [])
 * @method Result query(array $args = [])
 * @method Promise queryAsync(array $args = [])
 */
class TimestreamQueryClient extends AwsClient {}
