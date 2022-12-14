<?php
namespace Aws\Appflow;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Appflow** service.
 * @method Result createConnectorProfile(array $args = [])
 * @method Promise createConnectorProfileAsync(array $args = [])
 * @method Result createFlow(array $args = [])
 * @method Promise createFlowAsync(array $args = [])
 * @method Result deleteConnectorProfile(array $args = [])
 * @method Promise deleteConnectorProfileAsync(array $args = [])
 * @method Result deleteFlow(array $args = [])
 * @method Promise deleteFlowAsync(array $args = [])
 * @method Result describeConnectorEntity(array $args = [])
 * @method Promise describeConnectorEntityAsync(array $args = [])
 * @method Result describeConnectorProfiles(array $args = [])
 * @method Promise describeConnectorProfilesAsync(array $args = [])
 * @method Result describeConnectors(array $args = [])
 * @method Promise describeConnectorsAsync(array $args = [])
 * @method Result describeFlow(array $args = [])
 * @method Promise describeFlowAsync(array $args = [])
 * @method Result describeFlowExecutionRecords(array $args = [])
 * @method Promise describeFlowExecutionRecordsAsync(array $args = [])
 * @method Result listConnectorEntities(array $args = [])
 * @method Promise listConnectorEntitiesAsync(array $args = [])
 * @method Result listFlows(array $args = [])
 * @method Promise listFlowsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result startFlow(array $args = [])
 * @method Promise startFlowAsync(array $args = [])
 * @method Result stopFlow(array $args = [])
 * @method Promise stopFlowAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateConnectorProfile(array $args = [])
 * @method Promise updateConnectorProfileAsync(array $args = [])
 * @method Result updateFlow(array $args = [])
 * @method Promise updateFlowAsync(array $args = [])
 */
class AppflowClient extends AwsClient {}
