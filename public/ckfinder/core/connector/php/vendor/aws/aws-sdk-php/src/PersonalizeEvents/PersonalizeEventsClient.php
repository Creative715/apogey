<?php
namespace Aws\PersonalizeEvents;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Personalize Events** service.
 * @method Result putEvents(array $args = [])
 * @method Promise putEventsAsync(array $args = [])
 * @method Result putItems(array $args = [])
 * @method Promise putItemsAsync(array $args = [])
 * @method Result putUsers(array $args = [])
 * @method Promise putUsersAsync(array $args = [])
 */
class PersonalizeEventsClient extends AwsClient {}
