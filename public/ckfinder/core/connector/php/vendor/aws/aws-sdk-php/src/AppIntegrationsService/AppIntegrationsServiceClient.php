<?php
namespace Aws\AppIntegrationsService;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon AppIntegrations Service** service.
 * @method Result createEventIntegration(array $args = [])
 * @method Promise createEventIntegrationAsync(array $args = [])
 * @method Result deleteEventIntegration(array $args = [])
 * @method Promise deleteEventIntegrationAsync(array $args = [])
 * @method Result getEventIntegration(array $args = [])
 * @method Promise getEventIntegrationAsync(array $args = [])
 * @method Result listEventIntegrationAssociations(array $args = [])
 * @method Promise listEventIntegrationAssociationsAsync(array $args = [])
 * @method Result listEventIntegrations(array $args = [])
 * @method Promise listEventIntegrationsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateEventIntegration(array $args = [])
 * @method Promise updateEventIntegrationAsync(array $args = [])
 */
class AppIntegrationsServiceClient extends AwsClient {}
