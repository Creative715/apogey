<?php
namespace Aws\LakeFormation;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Lake Formation** service.
 * @method Result batchGrantPermissions(array $args = [])
 * @method Promise batchGrantPermissionsAsync(array $args = [])
 * @method Result batchRevokePermissions(array $args = [])
 * @method Promise batchRevokePermissionsAsync(array $args = [])
 * @method Result deregisterResource(array $args = [])
 * @method Promise deregisterResourceAsync(array $args = [])
 * @method Result describeResource(array $args = [])
 * @method Promise describeResourceAsync(array $args = [])
 * @method Result getDataLakeSettings(array $args = [])
 * @method Promise getDataLakeSettingsAsync(array $args = [])
 * @method Result getEffectivePermissionsForPath(array $args = [])
 * @method Promise getEffectivePermissionsForPathAsync(array $args = [])
 * @method Result grantPermissions(array $args = [])
 * @method Promise grantPermissionsAsync(array $args = [])
 * @method Result listPermissions(array $args = [])
 * @method Promise listPermissionsAsync(array $args = [])
 * @method Result listResources(array $args = [])
 * @method Promise listResourcesAsync(array $args = [])
 * @method Result putDataLakeSettings(array $args = [])
 * @method Promise putDataLakeSettingsAsync(array $args = [])
 * @method Result registerResource(array $args = [])
 * @method Promise registerResourceAsync(array $args = [])
 * @method Result revokePermissions(array $args = [])
 * @method Promise revokePermissionsAsync(array $args = [])
 * @method Result updateResource(array $args = [])
 * @method Promise updateResourceAsync(array $args = [])
 */
class LakeFormationClient extends AwsClient {}
