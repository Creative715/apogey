<?php
namespace Aws\PrometheusService;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Prometheus Service** service.
 * @method Result createWorkspace(array $args = [])
 * @method Promise createWorkspaceAsync(array $args = [])
 * @method Result deleteWorkspace(array $args = [])
 * @method Promise deleteWorkspaceAsync(array $args = [])
 * @method Result describeWorkspace(array $args = [])
 * @method Promise describeWorkspaceAsync(array $args = [])
 * @method Result listWorkspaces(array $args = [])
 * @method Promise listWorkspacesAsync(array $args = [])
 * @method Result updateWorkspaceAlias(array $args = [])
 * @method Promise updateWorkspaceAliasAsync(array $args = [])
 */
class PrometheusServiceClient extends AwsClient {}
