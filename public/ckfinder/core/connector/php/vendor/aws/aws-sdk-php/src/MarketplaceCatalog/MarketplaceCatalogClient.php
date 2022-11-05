<?php
namespace Aws\MarketplaceCatalog;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Marketplace Catalog Service** service.
 * @method Result cancelChangeSet(array $args = [])
 * @method Promise cancelChangeSetAsync(array $args = [])
 * @method Result describeChangeSet(array $args = [])
 * @method Promise describeChangeSetAsync(array $args = [])
 * @method Result describeEntity(array $args = [])
 * @method Promise describeEntityAsync(array $args = [])
 * @method Result listChangeSets(array $args = [])
 * @method Promise listChangeSetsAsync(array $args = [])
 * @method Result listEntities(array $args = [])
 * @method Promise listEntitiesAsync(array $args = [])
 * @method Result startChangeSet(array $args = [])
 * @method Promise startChangeSetAsync(array $args = [])
 */
class MarketplaceCatalogClient extends AwsClient {}
