<?php
namespace Aws\Braket;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Braket** service.
 * @method Result cancelQuantumTask(array $args = [])
 * @method Promise cancelQuantumTaskAsync(array $args = [])
 * @method Result createQuantumTask(array $args = [])
 * @method Promise createQuantumTaskAsync(array $args = [])
 * @method Result getDevice(array $args = [])
 * @method Promise getDeviceAsync(array $args = [])
 * @method Result getQuantumTask(array $args = [])
 * @method Promise getQuantumTaskAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result searchDevices(array $args = [])
 * @method Promise searchDevicesAsync(array $args = [])
 * @method Result searchQuantumTasks(array $args = [])
 * @method Promise searchQuantumTasksAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class BraketClient extends AwsClient {}
