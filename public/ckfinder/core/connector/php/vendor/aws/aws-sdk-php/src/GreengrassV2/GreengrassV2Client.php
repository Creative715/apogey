<?php
namespace Aws\GreengrassV2;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS IoT Greengrass V2** service.
 * @method Result cancelDeployment(array $args = [])
 * @method Promise cancelDeploymentAsync(array $args = [])
 * @method Result createComponentVersion(array $args = [])
 * @method Promise createComponentVersionAsync(array $args = [])
 * @method Result createDeployment(array $args = [])
 * @method Promise createDeploymentAsync(array $args = [])
 * @method Result deleteComponent(array $args = [])
 * @method Promise deleteComponentAsync(array $args = [])
 * @method Result deleteCoreDevice(array $args = [])
 * @method Promise deleteCoreDeviceAsync(array $args = [])
 * @method Result describeComponent(array $args = [])
 * @method Promise describeComponentAsync(array $args = [])
 * @method Result getComponent(array $args = [])
 * @method Promise getComponentAsync(array $args = [])
 * @method Result getComponentVersionArtifact(array $args = [])
 * @method Promise getComponentVersionArtifactAsync(array $args = [])
 * @method Result getCoreDevice(array $args = [])
 * @method Promise getCoreDeviceAsync(array $args = [])
 * @method Result getDeployment(array $args = [])
 * @method Promise getDeploymentAsync(array $args = [])
 * @method Result listComponentVersions(array $args = [])
 * @method Promise listComponentVersionsAsync(array $args = [])
 * @method Result listComponents(array $args = [])
 * @method Promise listComponentsAsync(array $args = [])
 * @method Result listCoreDevices(array $args = [])
 * @method Promise listCoreDevicesAsync(array $args = [])
 * @method Result listDeployments(array $args = [])
 * @method Promise listDeploymentsAsync(array $args = [])
 * @method Result listEffectiveDeployments(array $args = [])
 * @method Promise listEffectiveDeploymentsAsync(array $args = [])
 * @method Result listInstalledComponents(array $args = [])
 * @method Promise listInstalledComponentsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result resolveComponentCandidates(array $args = [])
 * @method Promise resolveComponentCandidatesAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class GreengrassV2Client extends AwsClient {}
